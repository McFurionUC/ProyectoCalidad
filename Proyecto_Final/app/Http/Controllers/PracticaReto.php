<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PracticaReto extends Controller
{
    
   
    public function index()
    {
        return "Bienvido index de la ruta PracticaReto";

    }
    public function create()
    {
return "Funcion create de la PracticaReto";
    }
    public function show($procedimiento)
    {
return "Ruta show para el procedimiento $procedimiento";
    }
    public function registro($procedimiento,$registro=null)
    {
        if($registro)
    {
        return "Ruta registro: $registro al procedimiento: $procedimiento";
    }
    else
    {
        return "Ruta registro al procedimiento: $procedimiento";
    }
    }
    public function control ($procedimiento,$control=null)
    {
        if($control)
        
        {
            return "Control activado: $control del procedimiento: $procedimiento ";
        }
        else{
            return "Ruta control del $procedimiento";
        }
    }

    
}
