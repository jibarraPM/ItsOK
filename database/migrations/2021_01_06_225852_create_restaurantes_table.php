<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('rut');
            $table->string('razonSocial');
            $table->string('giro');
            $table->string('correo');
            $table->string('descripcion');
            $table->string('direccion');
            $table->string('horarioAtencion');
            $table->string('ubicacionGps');
            $table->string('logo');
            $table->string('entidadFinanciera');
            $table->string('tipoCuenta');
            $table->string('numeroCuenta');
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
        Schema::dropIfExists('restaurantes');
    }
}
