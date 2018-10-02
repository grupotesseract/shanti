<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGrupoServicosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_servicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('descricao_grupo');
            $table->text('descricao_servicos');
            $table->string('lista_servicos');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('grupo_servicos');
    }
}
