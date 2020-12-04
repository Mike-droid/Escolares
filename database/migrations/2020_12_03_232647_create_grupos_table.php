<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('NombreGrupo')->nullable();
            $table->string('idMateriaInterno')->nullable();
            $table->integer('capacidadMaxima')->nullable();
            $table->integer('rfcDocente')->unsigned();
            $table->integer('idPeriodo')->unsigned();
            });

        Schema::table('grupos',function($table){
            $table->foreign('rfcDocente')->references('id')->on('personales')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idPeriodo')->references('id')->on('periodos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('grupos');
    }
}
