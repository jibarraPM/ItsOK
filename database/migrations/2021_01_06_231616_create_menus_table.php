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
            $table->bigInteger('idElaboracion')->unsigned();
            $table->foreign('idElaboracion')->references('id')->on('elaboracions');
            $table->string('edad18');
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
