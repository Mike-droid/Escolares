<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReticulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reticulas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('DescripcionReticula')->nullable();
            $table->date('FechaDeVigor')->nullable();
            $table->integer('idCarrera')->unsigned();
            });

        Schema::table('reticulas',function($table){
            $table->foreign('idCarrera')->references('id')->on('carreras')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reticulas');
    }
}
