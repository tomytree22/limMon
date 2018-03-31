<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idArea');
          $table->integer('idPuesto');
          $table->integer('idEspecialidad');
          $table->string('nombre',100);
          $table->string('primerAp',100);
          $table->string('segundoAp',100);
          $table->string('email',255)->unique();
          $table->string('password');
          $table->string('rfc',13)->unique();
          $table->string('curp',18)->unique();
          $table->string('telefono',15);
          $table->integer('numColab');
          $table->integer('nivel');
          $table->string('foto',100);

          $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
