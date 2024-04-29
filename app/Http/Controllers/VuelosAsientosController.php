<?php

namespace App\Http\Controllers;

use App\Models\VuelosAsientos;
use App\Models\TipoAsiento;
use Illuminate\Http\Request;

class VuelosAsientosController extends Controller
{
    public function ver($numero){
        $vueloAsientos = VuelosAsientos::where('numeroVuelo',$numero)->get();
        return view("vueloAsientos", compact('numero', 'vueloAsientos'));
    }
    public function agregar($id, $fecha){
        return view('agregarAsiento', compact('id', 'fecha'));
    }

    public function guardarAsiento(Request $request, $id){
        $tipoAsiento = TipoAsiento::find($request->input('idAsiento'));

        if(!$tipoAsiento){
            return redirect()->back()->with('error','No se encontro el tipo asiento');
        }

        $vueloAsiento = new VuelosAsientos();
        $vueloAsiento -> idTipoAsiento = $request->input('idAsiento');
        $vueloAsiento -> numeroVuelo = $id;
        $vueloAsiento -> numeroAsiento = $request->input('numero');
        $vueloAsiento -> save();
        return redirect()->route('vuelos.home')->with('success','Se agrego el asiento al vuelo');

    }
}
