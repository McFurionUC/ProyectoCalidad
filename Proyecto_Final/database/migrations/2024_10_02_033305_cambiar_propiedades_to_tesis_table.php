<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tesis', function (Blueprint $table) {
            //
            $table->string('idTesis',15)->change();
            $table->string('Nombre',50)->change();
            $table->string('Sustento',250)->change();
            $table->string('Calificacion',3)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tesis', function (Blueprint $table) {
            //
            $table->string('idTesis',255)->change();
            $table->string('Nombre',255)->change();
            $table->string('Sustento',255)->change();
            $table->string('Calificacion',255)->change();
        });
    }
};
