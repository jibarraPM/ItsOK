<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestauranteRestauranteImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurante_restaurante_imagens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idRestaurante')->unsigned();
            $table->foreign('idRestaurante')->references('id')->on('restaurantes');
            $table->bigInteger('idRestauranteImagen')->unsigned();
            $table->foreign('idRestauranteImagen')->references('id')->on('restaurante_imagens');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurante_restaurante_imagens');
    }
}
