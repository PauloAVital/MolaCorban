<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableVotosPontos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votos_pontos', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_comercial')->unsigned();
            $table->foreign('id_comercial')->references('id')->on('comercial')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('qualidade_votos');
            $table->integer('qualidade_pontos');
            $table->integer('preco_votos');
            $table->integer('preco_pontos');
            $table->integer('atendimento_votos');
            $table->integer('atendimento_pontos');
            $table->integer('local_votos');
            $table->integer('local_pontos');           
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
        Schema::dropIfExists('votos_pontos');
    }
}
