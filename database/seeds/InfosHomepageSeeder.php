<?php

use Illuminate\Database\Seeder;

class InfosHomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('info_homepages')->delete();

        $infoHomepage = \App\Models\InfoHomepage::create([
            'texto_destaque' => "<h5 style='margin-left: 75px;'><span style='font-style: italic;'><span style='background-color: rgb(116, 40, 60); color: rgb(255, 255, 255);'><br></span></span></h5><h5 style='margin-left: 75px;'><span style='font-style: italic;'><span style='background-color: rgb(116, 40, 60); color: rgb(255, 255, 255);'><br></span></span></h5><h5 style='margin-left: 75px;'><span style='font-style: italic;'><span style='background-color: rgb(116, 40, 60); color: rgb(255, 255, 255);'><span style='font-size: 24px;'>'Você nunca está só ou desamparado. A mesma força que guia as estrelas guia você também.'</span><br></span><span style='background-color: rgb(116, 40, 60); color: rgb(255, 255, 255);'>P. R. Sarkar</span></span></h5>"
        ]);

        $infoHomepage->fotos()->create([
            'cloudinary_id'=>'/shanti/capa-home',
            'tipo'=>\App\Models\Foto::TIPO_HOME_BG,
        ]);

        $infoHomepage->fotos()->create([
            'cloudinary_id'=>'/shanti/servicos',
            'tipo'=>\App\Models\Foto::TIPO_HOME_SERVICOS,
        ]);
        $infoHomepage->fotos()->create([
            'cloudinary_id'=>'/shanti/cursos',
            'tipo'=>\App\Models\Foto::TIPO_HOME_CURSOS,
        ]);
        $infoHomepage->fotos()->create([
            'cloudinary_id'=>'/shanti/eventos',
            'tipo'=>\App\Models\Foto::TIPO_HOME_EVENTOS,
        ]);
    }
}
