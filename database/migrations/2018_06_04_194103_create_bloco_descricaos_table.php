<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlocoDescricaosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloco_descricaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo');
            $table->integer('ordem')->nullable();
            $table->string('json_conteudo')->nullable();
            $table->timestamps();

            $table->unsignedInteger('profissional_id');
            $table->foreign('profissional_id')->references('id')->on('profissionals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bloco_descricaos');
    }
}
