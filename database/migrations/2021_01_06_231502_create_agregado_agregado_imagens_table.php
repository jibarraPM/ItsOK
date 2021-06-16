<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgregadoAgregadoImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agregado_agregado_imagens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idAgregado')->unsigned();
            $table->foreign('idAgregado')->references('id')->on('agregados');
            $table->bigInteger('idAgregadoImagen')->unsigned();
            $table->foreign('idAgregadoImagen')->references('id')->on('agregado_imagens');
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
        Schema::dropIfExists('agregado_agregado_imagens');
    }
}
