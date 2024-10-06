<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Diploma;

class DiplomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $diploma = new Diploma();
        $diploma ->iddiploma ="001";
        $diploma ->idestudiante = "001";
        $diploma ->fecha ="20-11-2004";
        $diploma ->titulo = "Bachiller en sistemas";
        $diploma ->save();
    }
}
