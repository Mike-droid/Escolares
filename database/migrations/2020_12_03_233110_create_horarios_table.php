<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('Semestre')->nullable();
            $table->string('noCtrl')->nullable();
            $table->string('numeroOficioProrroga')->nullable();
            $table->integer('idPeriodo')->nullable();
            $table->foreign('idPeriodo')->references('id')->on('periodos')->onDelete('cascade;')->onUpdate('cascade;');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('horarios');
    }
}
