<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
    {
        //Criar o meu schema
        Schema::create('funcionario', function (Blueprint $table){
            $table->increments('id');
            $table->longText('nomeUsuario');
            $table->longText('email');
            $table->integer('senha');
            $table->timestamps();
        });
    }//Fim do up

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('funcionario');
    }//Fim do down
};