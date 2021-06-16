<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestauranteMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurante_menus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idMenu')->unsigned();
            $table->foreign('idMenu')->references('id')->on('menus');
            $table->bigInteger('idRestaurante')->unsigned();
            $table->foreign('idRestaurante')->references('id')->on('restaurantes');
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
        Schema::dropIfExists('restaurante_menus');
    }
}
