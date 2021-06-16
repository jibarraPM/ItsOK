<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtencionAgregadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atencion_agregados', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idAtencion')->unsigned();
            $table->foreign('idAtencion')->references('id')->on('atencions');
            $table->bigInteger('idAgregado')->unsigned();
            $table->foreign('idAgregado')->references('id')->on('agregados');
            $table->integer('cantidad');
            $table->integer('valor');
            $table->integer('total');
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
        Schema::dropIfExists('atencion_agregados');
    }
}
