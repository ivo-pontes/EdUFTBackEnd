<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',100);
            $table->double('valor');
            $table->integer('peso');
            $table->integer('quantidade');
            $table->text('descricao');
            $table->integer('categoria')->unsigned();
            $table->integer('opiniao')->unsigned();
            $table->timestamps();
        });

        Schema::table('produtos', function(Blueprint $table) {
            $table->foreign('opiniao')->references('id')->on('opinioes');
            $table->foreign('categoria')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
