<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuMenuImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_menu_imagens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idMenu')->unsigned();
            $table->foreign('idMenu')->references('id')->on('menus');
            $table->bigInteger('idMenuImagen')->unsigned();
            $table->foreign('idMenuImagen')->references('id')->on('menu_imagens');
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
        Schema::dropIfExists('menu_menu_imagens');
    }
}
