<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Revision;
class RevisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $revision  = new Revision();
        $revision->idrevision = "001";
        $revision->idtesis = "001";
        $revision ->fecha = "20-11-20224";
        $revision->comentarios ="El trabajo esta bien hecho";
        $revision ->estado="Si";
        $revision ->save();
    }
}
