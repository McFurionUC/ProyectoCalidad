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
        Schema::table('sustentacion', function (Blueprint $table) {
            //
            $table->string('idsustentacion',15)->change();
            $table->string('idtesis',15)->change(); 
            $table->string('fecha',10)->change();
            $table->boolean('resultado')->nullable()->change();
            $table->string('observacion',255)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sustentacion', function (Blueprint $table) {
            //
            $table->string('idsustentacion',255)->change();
            $table->string('idtesis',255)->change(); 
            $table->string('fecha',255)->change();
            $table->boolean('resultado')->nullable()->change();
            $table->string('observacion',255)->change();
        });
    }
};
