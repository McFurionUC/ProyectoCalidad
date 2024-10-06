<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tesis;

class TesisController extends Controller
{
    //
    public function index()
    {
       // ordenar la vista 
       $Tesis  = Tesis::orderBy('id','desc')->paginate( );
         
        $Tesis = Tesis::paginate();
 

        return view("grados_titulos.tesis.index", compact("Tesis"));
        }
    public function create()
    {
        //funcion create para todas mis tablas
        
        return view('grados_titulos.tesis.create');
        

    }
    public function store(Request $request)
    {
        $tesis = new Tesis();

        $tesis->idTesis = $request->idTesis;
        $tesis->Nombre = $request->Nombre;
        $tesis->Sustento = $request->Sustento;
        $tesis->Calificacion = $request->Calificacion;

        $tesis  ->save();

        return redirect()->route('grados_titulos.tesis.show',$tesis);


    }



    public function show(Tesis $tesis)
{
    return view('grados_titulos.tesis.show', compact('tesis'));
}
public function edit(Tesis $tesis)
{
    return view('grados_titulos.tesis.edit', compact('tesis'));
}

public function update(Request $request,Tesis $tesis)
{
    
 
    $tesis->idTesis = $request->idTesis;
        $tesis->Nombre = $request->Nombre;
        $tesis->Sustento = $request->Sustento;
        $tesis->Calificacion = $request->Calificacion;

        $tesis  ->save();

        return redirect()->route('grados_titulos.tesis.show',$tesis);
}

public function destroy(Tesis $tesis    )
{
    $tesis->delete(); // Elimina el registro

    return redirect()->route('grados_titulos.tesis.index')->with('success', 'Registro eliminado correctamente.');
}



}
