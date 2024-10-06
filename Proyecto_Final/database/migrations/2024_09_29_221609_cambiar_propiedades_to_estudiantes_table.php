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
        Schema::table('estudiantes', function (Blueprint $table) {
            //
            $table->string("idEstudiantes",15)->change(); 
            $table->string("idTesis",15)->change();
            $table->string("nombre",50)->change();  //hasta 250 caracteres 
            $table->string("apellidop",20)->change();  
            $table->string("apellidon",20)->change(); 
            $table->string("telefono",15)->change(); 
            $table->string("correo",50)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estudiantes', function (Blueprint $table) {
            //
            $table->string("idEstudiantes",255)->change(); 
            $table->string("idTesis",255)->change();
            $table->string("nombre",255)->change();  //hasta 250 caracteres 
            $table->string("apellidop",255)->change();  
            $table->string("apellidon",255)->change(); 
            $table->string("telefono",255)->change(); 
            $table->string("correo",255)->change(); 
        });
    }
};

