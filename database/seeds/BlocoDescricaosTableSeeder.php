<?php

use Illuminate\Database\Seeder;

class BlocoDescricaosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bloco_descricaos')->delete();
        
        \App\Models\BlocoDescricao::create(array (
                'tipo' => 1,
                'ordem' => 1,
                'json_conteudo' => '{"texto":"Quando o finito entra em contato com o infinito, isto \\u00e9 chamado Yoga","autor":"Shrii Shrii Anandamurti"}',
                'profissional_id' => 1,
            ));
        \App\Models\BlocoDescricao::create(array (
                'tipo' => 4,
                'ordem' => 3,
                'json_conteudo' => '{"titulo":"Aulas - Modalidades","items":["Aulas em grupo e individuais","Aulas em grupo e individuais","Aulas em grupo e individuais","Aulas em grupo e individuais","Aulas em grupo e individuais",null,null,null,null,null]}',
                'profissional_id' => 1,
            ));
        \App\Models\BlocoDescricao::create(array (
                'tipo' => 3,
                'ordem' => 4,
                'json_conteudo' => '{"texto":"Venha Fazer uma aula experimental","url":"https:\\/\\/www.facebook.com\\/Shanticienciacorpomente\\/"}',
                'profissional_id' => 1,
            ));
        \App\Models\BlocoDescricao::create(array (
                'tipo' => 5,
                'ordem' => 5,
                'json_conteudo' => '{"src":"\\/\\/res.cloudinary.com\\/tesseract\\/image\\/upload\\/c_scale,g_center,h_450,w_800\\/shanti_profissional_1533779536.jpg"}',
                'profissional_id' => 1,
            ));
        \App\Models\BlocoDescricao::create(array (
                'tipo' => 2,
                'ordem' => 8,
                'json_conteudo' => '{"texto":"<p>Idealizador e s&oacute;cio propriet&aacute;rio do Instituto Shanti de Ci&ecirc;ncia Corpo Mente. Representante do Instituto Roerich da Cultura e da Paz do Brasil, membro da Comiss&atilde;o Municipal da Cultura de Paz e fundador do f&oacute;rum Caminhos para a Sustentabilidade. Atua em consult&oacute;rio naturol&oacute;gico e ministra cursos e palestras na &aacute;rea desde 2007.<\\/p>"}',
                'profissional_id' => 2,
            ));
        
        
    }
}
