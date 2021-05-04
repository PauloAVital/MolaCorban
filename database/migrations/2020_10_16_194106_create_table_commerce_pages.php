<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCommercePages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commerce_pages', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_comercial')->unsigned();
            $table->foreign('id_comercial')->references('id')->on('comercial')->onDelete('cascade')->onUpdate('cascade');
            $table->string('commerce_page', 255);
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
        Schema::dropIfExists('commerce_pages');
    }
}
