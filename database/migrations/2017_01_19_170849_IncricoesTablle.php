<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IncricoesTablle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incricoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('nascimento');
            $table->string('cidade');
            $table->string('perfil');
            $table->string('nomeFake');
            $table->string('mpOrkut');
            $table->string('descricao');
            $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
