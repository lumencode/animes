<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('fecha_creacion');
            $table->decimal('monto');
            $table->string('codigo');
            $table->string('sucursal_1')->nullable();
            $table->string('sucursal_2')->nullable();
            $table->string('sucursal_3')->nullable();
            $table->string('imagen_url', 1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('accounts');
    }
}
