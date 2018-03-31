<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesMantenimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activ_mantenim', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMaquina');
            $table->integer('idActividadAsoc');
            $table->date('fecha');
            $table->integer('estatus');
            $table->string('evidencia',200);
            $table->integer('calificacion');
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
        Schema::dropIfExists('activ_mantenim');
    }
}
