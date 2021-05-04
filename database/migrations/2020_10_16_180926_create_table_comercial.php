<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableComercial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comercial', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categoria')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_subcategoria')->unsigned();
            $table->foreign('id_subcategoria')->references('id')->on('subcategoria')->onDelete('cascade')->onUpdate('cascade');
            $table->string('logo', 150);
            $table->string('fraseDestaque', 150);
            $table->string('cnpj', 20);
            $table->string('cpf', 15);
            $table->string('empresa', 100);
            $table->string('telefone', 40);
            $table->string('email', 100);
            $table->string('senha', 100);
            $table->string('cep', 10);
            $table->string('cidade', 80);
            $table->string('bairro', 50);
            $table->string('rua', 100);
            $table->string('numero', 30);
            $table->string('complemento', 50);
            $table->string('ip', 15);
            $table->string('navegador', 30);
            $table->string('computador', 30);
            $table->string('sistema', 150);
            $table->date('inauguracaoFisica');
            $table->boolean('concorda');
            $table->string('link', 255);
            $table->string('site', 150);
            $table->integer('clicks');
            $table->boolean('logado');
            $table->boolean('ativar');
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
        Schema::dropIfExists('comercial');
    }
}
