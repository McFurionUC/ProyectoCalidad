<?php

namespace Database\Seeders;

use App\Models\Diploma;
use App\Models\Estudiante;
use App\Models\Sustentacion;
use Illuminate\Database\Seeder;
use App\Models\Tesis;
use App\Models\User;
use App\Models\Practica;
use App\Models\Empresa;
use App\Models\Revision;

class DatabaseSeeder extends Seeder

{

    public function run()
    { 
        User::factory(10)->create();
        Revision::factory(20)->create();
        Estudiante::factory(50)->create();
        Diploma::factory(50)->create();
        Sustentacion::factory(50)->create();
        Tesis::factory(50)->create();



        

    }
}
