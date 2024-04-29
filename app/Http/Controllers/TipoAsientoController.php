<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TipoAsiento;

class TipoAsientoController extends Controller
{
    public function tipoAsiento(){

        //1 forma de hacerlo 
        $tipoAsientos = TipoAsiento::where('estado', 'A')->get();

        //2 forma
        /*
        $tipoAsientos1 = TipoAsiento::all();

        $tipoAsientos = collect([]);

        foreach($tipoAsientos1 as $tipoAsiento){
            if ($tipoAsiento->estado == 'A'){
                $tipoAsientos -> push($tipoAsiento);
            }
        }
        */
        return view('tiposAsientos', compact('tipoAsientos'));
    }

    public function crearAsiento(){
        return view('agregarTipoAsiento');
    }

    public function guardarAsiento(Request $request){
        
        //debe contener el name exacto de los input que viajan en el request
        $request->validate([
            'descripcion' => 'required',
            'precio' => 'required',
            'estado' => 'required',
        ]);
        //instanciamos la clase(modelo)
        $tipoAsiento = new TipoAsiento();

        $tipoAsiento->descripcion = $request->input('descripcion');
        $tipoAsiento->precio = $request->input('precio');
        $tipoAsiento->estado = $request->input('estado');
        $tipoAsiento->save();

        return redirect()->route('tipo.asiento.ver')->with('success','Asiento creado exitosamente');
    }

    public function eliminarAsiento($id){
        $tipoAsiento = TipoAsiento::find($id);
        $tipoAsiento->estado = 'I';
        $tipoAsiento->save();
    
        return redirect()->route('tipo.asiento.ver')->with('success','Asiento eliminado');
    }

    public function editarAsiento($id){
       return view('editarAsiento', compact('id'));
    }
    
    public function actualizarAsiento(Request $request, $id){
        $tipoAsiento = TipoAsiento::find($id);
        $tipoAsiento->descripcion = $request -> input('descripcion');
        $tipoAsiento->precio = $request -> input('precio');
        $tipoAsiento->estado = $request -> input('estado');
        $tipoAsiento->save();

        return redirect()->route('tipo.asiento.ver')->with('success','Asiento actualizado');

    }
}
