<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrenadorPokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("entrenador_pokemon", function (Blueprint $table) {
            $table->increments("id");
            $table->integer("entrenador_id")->unigned();
            $table->integer("pokemon_id")->unigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists("entrenador_pokemon");
    }
}
