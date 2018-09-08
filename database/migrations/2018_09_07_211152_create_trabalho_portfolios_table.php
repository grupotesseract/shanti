<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrabalhoPortfoliosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabalho_portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao_listagem');
            $table->boolean('ativo_listagem');
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
        Schema::drop('trabalho_portfolios');
    }
}
