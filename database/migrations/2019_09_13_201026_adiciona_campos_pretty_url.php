<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaCamposPrettyUrl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profissionals', function (Blueprint $table) {
            $table->string('url_amigavel')->unique()->nullable();
        });
        Schema::table('trabalho_portfolios', function (Blueprint $table) {
            $table->string('url_amigavel')->unique()->nullable();
        });
        Schema::table('item_programacaos', function (Blueprint $table) {
            $table->string('url_amigavel')->unique()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profissionals', function (Blueprint $table) {
            $table->dropColumn('url_amigavel');
        });
        Schema::table('trabalho_portfolios', function (Blueprint $table) {
            $table->dropColumn('url_amigavel');
        });
        Schema::table('item_programacaos', function (Blueprint $table) {
            $table->dropColumn('url_amigavel');
        });
    }
}
