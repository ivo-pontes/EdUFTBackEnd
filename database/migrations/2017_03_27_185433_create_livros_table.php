<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('image');
            $table->integer('area')->unsigned();
            $table->text('sinopse');
            $table->string('anopublicacao',5);
            $table->integer('produto')->unsigned();
            $table->timestamps();
        });

        Schema::table('livros', function(Blueprint $table) {
            $table->foreign('area')->references('id')->on('areas');
            $table->foreign('produto')->references('id')->on('produtos');
        });       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
}
