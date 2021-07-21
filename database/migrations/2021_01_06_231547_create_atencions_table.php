<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtencionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atencions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idConsumidor')->unsigned();
            $table->foreign('idConsumidor')->references('id')->on('users');
            $table->bigInteger('idMecero')->unsigned();
            $table->foreign('idMecero')->references('id')->on('users');
            $table->bigInteger('idRestaurante')->unsigned();
            $table->foreign('idRestaurante')->references('id')->on('restaurantes');
            $table->bigInteger('idMesa')->unsigned();
            $table->foreign('idMesa')->references('id')->on('mesas');
            $table->bigInteger('idTipoAtencion')->unsigned();
            $table->foreign('idTipoAtencion')->references('id')->on('tipo_atencions');
            $table->bigInteger('idEstadoAtencion')->unsigned();
            $table->foreign('idEstadoAtencion')->references('id')->on('estado_atencions');
            $table->string('valorAtencion');
            $table->integer('valoracionAtencion');
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
        Schema::dropIfExists('atencions');
    }
}
