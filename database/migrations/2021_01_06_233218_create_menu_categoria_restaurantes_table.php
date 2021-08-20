<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuCategoriaRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_categoria_restaurantes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idMenu')->unsigned();
            $table->foreign('idMenu')->references('id')->on('menus');
            $table->bigInteger('idCategoriaRestaurante')->unsigned();
            $table->foreign('idCategoriaRestaurante')->references('id')->on('categoria_restaurantes');
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
        Schema::dropIfExists('menu_categoria_restaurantes');
    }
}
