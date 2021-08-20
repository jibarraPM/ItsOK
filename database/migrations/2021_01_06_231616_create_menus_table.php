<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('ingredientes');
            $table->integer('precio');
            $table->string('tiempoElavoracion');
            $table->boolean('disponible');
            $table->string('edad18');
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
        Schema::dropIfExists('menus');
    }
}
