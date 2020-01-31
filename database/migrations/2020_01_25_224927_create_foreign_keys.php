<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * -----------------------------------------------------------------------
 * Cria a as chaves estrangeiras
 * -----------------------------------------------------------------------
 * 
 * Cria as chaves estrangeiras das tabelas "fornecedores", "produtos".
 * 
 * @author Ronaldo Stiene <rstiene27@gmail.com>
 * @since 25/01/2020
 */
class CreateForeignKeys extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->unsignedInteger('endereco_id');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
        });
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedInteger('fornecedor_id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->dropForeign('endereco_id');
        });
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign('fornecedor_id');
        });
    }
}
