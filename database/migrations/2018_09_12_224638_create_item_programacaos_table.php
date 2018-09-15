<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemProgramacaosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_programacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->smallInteger('tipo')->nullable();
            $table->text('breve_descricao_listagem')->nullable();
            $table->string('descricao_listagem')->nullable();
            $table->string('horario')->nullable();
            $table->string('link_facebook')->nullable();
            $table->boolean('ativo_listagem');
            $table->timestamp('data')->nullable();
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
        Schema::drop('item_programacaos');
    }
}
