<?php

use Illuminate\Database\Seeder;

class InfosEspacoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('info_espacos')->delete();

        $infoEspaco = \App\Models\InfoEspaco::create([
            'descricao' => '<p style="margin-bottom: 1rem;">Shanti, palavra sânscrita que significa PAZ, tornou-se uma síntese do objetivo deste Instituto, idealizado e fundado em fevereiro de 2015 pela professora de Yoga Gabriela Teixeira e pelo naturólogo João G. G. Maciel.</p><p style="margin-bottom: 1rem;">O Instituto Shanti oferece serviços voltados para a saúde integral, promoção da cultura de paz, do desenvolvimento sustentável e expansão da consciência.</p>',
            'citacao' => "A parte mais doce do jogo da Consciência Infinita é que Ela está escondida em cada um e cada um está procurando por ela.",
            'autor' => "Sri Sri Anandamurti"
        ]);

        //Fotos
        $infoEspaco->fotos()->create([
            'cloudinary_id'=>'/shanti/_DSC1122',
        ]);
        $infoEspaco->fotos()->create([
            'cloudinary_id'=>'/shanti/_DSC1181',
        ]);
        $infoEspaco->fotos()->create([
            'cloudinary_id'=>'/shanti/_DSC1139',
        ]);
        $infoEspaco->fotos()->create([
            'cloudinary_id'=>'/shanti/39296912_1792701990798438_3132007516519530496_n',
        ]);
        $infoEspaco->fotos()->create([
            'cloudinary_id'=>'/shanti/39265655_1792700344131936_7233709693745496064_n',
        ]);
        $infoEspaco->fotos()->create([
            'cloudinary_id'=>'/shanti/39211756_1792700267465277_1230123142320488448_n',
        ]);
        $infoEspaco->fotos()->create([
            'cloudinary_id'=>'/shanti/39253540_1792701227465181_7228503295734579200_n',
        ]);
        $infoEspaco->fotos()->create([
            'cloudinary_id'=>'/shanti/39252900_1792701087465195_1242835678580965376_n',
        ]);
        $infoEspaco->fotos()->create([
            'cloudinary_id'=>'/shanti/39208334_1792701450798492_1808732078351581184_n',
        ]);
    }
}
