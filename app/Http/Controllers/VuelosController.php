<?php

namespace App\Http\Controllers;
use App\Models\Vuelos;
use App\Models\TipoAsiento;

use App\Models\VuelosAsientos;
use Illuminate\Http\Request;

class VuelosController extends Controller
{
    public function vuelos(){
        $vuelos = Vuelos::all();
        return view('vuelos', compact('vuelos'));
    }

    public function crear(){
        return view('nuevoVuelo');
    }

    public function guardar(Request $request){
        
        $vueloExiste = Vuelos::where('fechaSalida', $request->input('fecha'))->exists();

        if($vueloExiste){
            return redirect()->back()->with('error', 'Ya existe un vuelo con esta fecha de salida');
        }

        $vuelo = new Vuelos();
        $vuelo->numeroVuelo = $request->input('numero');
        $vuelo->origen = $request->input('origen');
        $vuelo->destino = $request->input('destino');
        $vuelo->fechaSalida = $request->input('fecha');
        $vuelo->numeroAsientos = $request->input('cantidad');
        $vuelo->save();

        return redirect()->route('vuelos.home')->with('success','Vuelo creado exitosamente');
    }

    public function editar($id){
        return view('editarVuelo', compact('id'));
    }

    public function actualizar(Request $request, $id){
        $vuelo = Vuelos::find($id);

        $vuelo->origen = $request->input('origen');
        $vuelo->destino = $request->input('destino');
        $vuelo->save();

        return redirect()->route('vuelos.home')->with('success','Vuelo editado correctamente');

    }

    public function eliminar($id){
        $vuelo = Vuelos::find($id);
        $vuelo->delete();
        return redirect()->route('vuelos.home')->with('success','Vuelo eliminado exitosamente');
    }

    public function agregar($id, $fecha){
        return view('agregarAsiento', compact('id', 'fecha'));
    }

}


