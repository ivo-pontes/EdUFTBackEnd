<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario')->unsigned();
            $table->string('destinatario',100);
            $table->date('datacompra');
            $table->integer('enderecoentrega')->unsigned();
            $table->integer('statuscompra')->unsigned();
            $table->integer('quantidade');
            $table->double('frete');
            $table->timestamps();
        });

        Schema::table('compras', function(Blueprint $table) {
            $table->foreign('usuario')->references('id')->on('users');
            $table->foreign('enderecoentrega')->references('id')->on('enderecos');
            $table->foreign('statuscompra')->references('id')->on('status_compras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
