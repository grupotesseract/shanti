<?php

use Illuminate\Database\Seeder;

class PrettyUrlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Profissional::all()->each(function($profissional) {
            $profissional->url_amigavel = str_slug($profissional->nome);
            $profissional->save();
        });
        \App\Models\ItemProgramacao::all()->each(function($itemProgramacao) {
            $itemProgramacao->url_amigavel = str_slug($itemProgramacao->nome);
            $itemProgramacao->save();
        });
        \App\Models\TrabalhoPortfolio::all()->each(function($trabalhoPortfolio) {
            $trabalhoPortfolio->url_amigavel = str_slug($trabalhoPortfolio->nome);
            $trabalhoPortfolio->save();
        });
    }
}
