<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('NombreMateria')->nullable();
            $table->string('idMateriaInterno')->nullable();
            $table->string('idMateriaOficial')->nullable();
            $table->integer('creditos')->nullable();
            $table->integer('idReticula')->nullable();
            $table->foreign('idReticula')->references('id')->on('reticulas')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('materias');
    }
}
