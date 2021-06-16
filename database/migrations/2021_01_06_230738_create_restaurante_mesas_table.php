<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestauranteMesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurante_mesas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idRestaurante')->unsigned();
            $table->foreign('idRestaurante')->references('id')->on('restaurantes');
            $table->bigInteger('idMesa')->unsigned();
            $table->foreign('idMesa')->references('id')->on('mesas');
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
        Schema::dropIfExists('restaurante_mesas');
    }
}
