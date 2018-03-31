<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaquinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maquina', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idArea');
          $table->integer('idModelo');
          $table->string('nombre',200);
          $table->string('descripcion',200);
          $table->integer('codigo');
          $table->string('imgFichaTec',100);
          $table->date('fechaIniOpera');
          $table->string('codigoQr',255);
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
        Schema::dropIfExists('maquina');
    }
}
