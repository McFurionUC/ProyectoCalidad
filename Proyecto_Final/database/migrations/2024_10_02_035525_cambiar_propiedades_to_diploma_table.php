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
        Schema::table('diploma', function (Blueprint $table) {
            //
            $table->string('iddiploma',15)->change();
            $table->string('idestudiante',15)->change();
            $table->string('fecha',10)->change();
            $table->string('titulo',255)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diploma', function (Blueprint $table) {
            //
            $table->string('iddiploma',255)->change();
            $table->string('idestudiante',255)->change();
            $table->string('fecha',255)->change();
            $table->string('titulo',255)->change();
        });
    }
};
