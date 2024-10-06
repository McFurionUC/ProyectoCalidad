<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sustentacion;

class SustentacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sustento = new Sustentacion();
        $sustento->idsustentacion ="001";
        $sustento->idtesis = "001";
        $sustento->fecha = "10-12-2024";
        $sustento->resultado = 1;
        $sustento ->observacion = "Trabajo en buen estado";
        $sustento->save();
    }
}
