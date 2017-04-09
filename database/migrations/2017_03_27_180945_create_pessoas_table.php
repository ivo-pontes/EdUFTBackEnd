<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cep');
            $table->string('nome', 255);
            $table->string('sobrenome', 255);
            $table->string('cpf',11);
            $table->date('datanasc');
            $table->char('sexo',1);
            $table->string('telefone', 50);
            $table->string('telefonesecundario', 50);
            $table->integer('endereco')->unsigned();
            $table->timestamps();
        });

        Schema::table('pessoas', function(Blueprint $table) {
            $table->foreign('endereco')->references('id')->on('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
