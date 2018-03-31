<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatSucursalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_sucursal', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre', 200);
          $table->string('descripcion', 200);
          $table->string('telefono', 15);
          $table->string('latitud',30);
          $table->string('longitud',30);
          $table->timestamps();
          $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_sucursal');
    }
}
