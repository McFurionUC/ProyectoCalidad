<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tesis = new Estudiante();
        $tesis->idEstudiantes = "60925633";
        $tesis ->idTesis = "001";
        $tesis->nombre = "Benjamin";
        $tesis ->apellidop = "Miranda";
        $tesis ->apellidon ="Quispe";
        $tesis ->telefono = "931089552";
        $tesis -> correo ="xxx@gmail.com";
        $tesis ->save();

    }
}
