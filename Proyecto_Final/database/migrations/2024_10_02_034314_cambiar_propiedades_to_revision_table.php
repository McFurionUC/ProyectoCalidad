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
        Schema::table('revision', function (Blueprint $table) {
            //
            $table->string('idrevision',15)->change();
            $table->string('idtesis',15)->change();
            $table->string('fecha',15)->change();
            $table->string('comentarios',255)->change();  
            $table->string('estado',2)->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('revision', function (Blueprint $table) {
            //
            $table->string('idrevision',255)->change();
            $table->string('idtesis',255)->change();
            $table->string('fecha',255)->change();
            $table->string('comentarios',255)->change();  
            $table->string('estado',255)->change();
        });
    }
};
