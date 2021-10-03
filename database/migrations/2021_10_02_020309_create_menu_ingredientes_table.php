<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_ingredientes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idMenu')->unsigned();
            $table->foreign('idMenu')->references('id')->on('menus');
            $table->bigInteger('idIngrediente')->unsigned();
            $table->foreign('idIngrediente')->references('id')->on('Ingredientes');
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
        Schema::dropIfExists('menu_ingredientes');
    }
}
