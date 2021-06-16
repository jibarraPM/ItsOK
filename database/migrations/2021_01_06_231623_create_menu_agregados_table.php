<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuAgregadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_agregados', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idMenu')->unsigned();
            $table->foreign('idMenu')->references('id')->on('menus');
            $table->bigInteger('idAgregado')->unsigned();
            $table->foreign('idAgregado')->references('id')->on('agregados');
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
        Schema::dropIfExists('menu_agregados');
    }
}
