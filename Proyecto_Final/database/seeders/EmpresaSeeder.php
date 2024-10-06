<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Seeder;
use App\Models\Practica;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $empresa = new Empresa();
        $empresa->Nombre   = "Benjamin";
        $empresa->Titulo = "Ing de Sistemas";
        $empresa->fecha = "N/S";

        $empresa->idEstudiante = "60925633"; 
        $empresa->idDocente = "1";
        $empresa->idEmpresa = "3";
        
        $empresa->save();

    }
}
