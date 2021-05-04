<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAtendimento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendimento', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_comercial')->unsigned();
            $table->foreign('id_comercial')->references('id')->on('comercial')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('segunda');
            $table->boolean('segundaAlmoco');
            $table->time('segundaAbertura');
            $table->time('segundaAlmocoSaida');
            $table->time('segundaAlmocoEntrada');
            $table->time('segundaFechamento');
            $table->boolean('terca');
            $table->boolean('tercaAlmoco');
            $table->time('tercaAbertura');
            $table->time('tercaAlmocoSaida');
            $table->time('tercaAlmocoEntrada');
            $table->time('tercaFechamento');
            $table->boolean('quarta');
            $table->boolean('quartaAlmoco');
            $table->time('quartaAbertura');
            $table->time('quartaAlmocoSaida');
            $table->time('quartaAlmocoEntrada');
            $table->time('quartaFechamento');
            $table->boolean('quinta');
            $table->boolean('quintaAlmoco');
            $table->time('quintaAbertura');
            $table->time('quintaAlmocoSaida');
            $table->time('quintaAlmocoEntrada');
            $table->time('quintaFechamento');
            $table->boolean('sexta');
            $table->boolean('sextaAlmoco');
            $table->time('sextaAbertura');
            $table->time('sextaAlmocoSaida');
            $table->time('sextaAlmocoEntrada');
            $table->time('sextaFechamento');
            $table->boolean('sabado');
            $table->boolean('sabadoAlmoco');
            $table->time('sabadoAbertura');
            $table->time('sabadoAlmocoSaida');
            $table->time('sabadoAlmocoEntrada');
            $table->time('sabadoFechamento');
            $table->boolean('domingo');
            $table->boolean('domingoAlmoco');
            $table->time('domingoAbertura');
            $table->time('domingoAlmocoSaida');
            $table->time('domingoAlmocoEntrada');
            $table->time('domingoFechamento');
            $table->boolean('feriado');
            $table->boolean('feriadoAlmoco');
            $table->time('feriadoAbertura');
            $table->time('feriadoAlmocoSaida');
            $table->time('feriadoAlmocoEntrada');
            $table->time('feriadoFechamento');            
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
        Schema::dropIfExists('atendimento');
    }
}
