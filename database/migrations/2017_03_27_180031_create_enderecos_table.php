<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cep');
            $table->string('rua', 100);
            $table->string('bairro', 100);
            $table->integer('numero');
            $table->string('complemento', 100);
            $table->integer('municipio')->unsigned();
            $table->timestamps();
        });

        Schema::table('enderecos', function(Blueprint $table) {
            $table->foreign('municipio')->references('id')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
