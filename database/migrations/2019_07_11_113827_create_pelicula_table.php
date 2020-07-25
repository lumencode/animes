<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeliculaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('fecha_de_estreno');
            $table->integer('vistas');
            $table->string('codigo');
            $table->string('imagen_url', 1000);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('peliculas');
    }
}
