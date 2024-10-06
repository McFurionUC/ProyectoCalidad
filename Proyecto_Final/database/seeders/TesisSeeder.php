<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tesis;

class TesisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tesis = new Tesis();
        $tesis->idTesi = "001";
        $tesis ->Nombre ="La programacion limpia";
        $tesis ->Sustento ="Clean code";
        $tesis ->Calificacio    = "20";
        $tesis->save();
    }
}
