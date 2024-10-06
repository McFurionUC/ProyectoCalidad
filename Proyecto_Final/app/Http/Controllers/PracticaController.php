<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Models\Practica;

class PracticaController extends Controller
{
    public function index()
    {
        $practicas = Estudiante::all();
        return $practicas;
        

    }
    public function create()
    {
return view("practicas.create");
    }
    public function show($procedimiento)
    {
        return view("practicas.show", compact("procedimiento"));

    }
}
