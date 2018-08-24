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
            $table->text('json_conteudo')->nullable();
            $table->timestamps();

            $table->integer('owner_id')->nullable();
            $table->string('owner_type')->nullable();
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
