<?php

namespace App\Http\Controllers;
use App\Models\Sustentacion;

use Illuminate\Http\Request;

class SustentacionController extends Controller
{
    //
     //
   
     public function index()
     {
        // ordenar la vista 
        $sustentaciones  = Sustentacion::orderBy('id','desc')->paginate( );
          
        $sustentaciones = Sustentacion::paginate();

 
         return view("grados_titulos.sustentacion.index", compact("sustentaciones"));
         }
     public function create()
     {
         //funcion create para todas mis tablas
         
         return view('grados_titulos.sustentacion.create');
         
 
     }
     public function store(Request $request)
     {
         $sustentacion = new Sustentacion();
 
         $sustentacion->idsustentacion = $request->idsustentacion;
         $sustentacion->idtesis = $request->idtesis;
         $sustentacion->fecha = $request->fecha;
         $sustentacion->resultado = $request->resultado;
         $sustentacion->observacion = $request->observacion;
 
         $sustentacion->save();

         return redirect()->route('grados_titulos.sustentacion.show',$sustentacion);
 
 
     }
 
 
 
     public function show(Sustentacion $sustentacion)
     {
         return view('grados_titulos.sustentacion.show', compact('sustentacion'));
     }

public function edit(Sustentacion $sustentacion)
{
    return view('grados_titulos.sustentacion.edit', compact('sustentacion'));
}

public function update(Request $request, Sustentacion $sustentacion)
{
    
 
    $sustentacion->idsustentacion = $request->idsustentacion;
    $sustentacion->idtesis = $request->idtesis;
    $sustentacion->fecha = $request->fecha;
    $sustentacion->resultado = $request->resultado;
    $sustentacion->observacion = $request->observacion;

    $sustentacion->save();

    return redirect()->route('grados_titulos.sustentacion.show',$sustentacion);
}

public function destroy(Sustentacion $sustentacion)
{
    $sustentacion->delete(); // Elimina el registro

    return redirect()->route('grados_titulos.sustentacion.index')->with('success', 'Registro eliminado correctamente.');
}
 
}
