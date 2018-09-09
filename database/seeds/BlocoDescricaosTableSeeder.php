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
        
        \DB::table('bloco_descricaos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tipo' => 1,
                'ordem' => 1,
                'json_conteudo' => '{"texto":"Quando o finito entra em contato com o infinito, isto \\u00e9 chamado Yoga","autor":"Shrii Shrii Anandamurti"}',
                'created_at' => '2018-08-14 21:11:55',
                'updated_at' => '2018-08-14 21:11:55',
                'profissional_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'tipo' => 4,
                'ordem' => 3,
                'json_conteudo' => '{"titulo":"Aulas - Modalidades","items":["Aulas em grupo e individuais","Aulas em grupo e individuais","Aulas em grupo e individuais","Aulas em grupo e individuais","Aulas em grupo e individuais",null,null,null,null,null]}',
                'created_at' => '2018-08-14 21:11:55',
                'updated_at' => '2018-08-14 21:11:55',
                'profissional_id' => 1,
            ),
            2 => 
            array (
                'id' => 4,
                'tipo' => 5,
                'ordem' => 5,
                'json_conteudo' => '{"src":"\\/\\/res.cloudinary.com\\/tesseract\\/image\\/upload\\/c_scale,g_center,h_450,w_800\\/shanti_profissional_1533779536.jpg"}',
                'created_at' => '2018-08-14 21:11:55',
                'updated_at' => '2018-08-14 21:11:55',
                'profissional_id' => 1,
            ),
            3 => 
            array (
                'id' => 5,
                'tipo' => 2,
                'ordem' => 8,
                'json_conteudo' => '{"texto":"<p>Idealizador e s&oacute;cio propriet&aacute;rio do Instituto Shanti de Ci&ecirc;ncia Corpo Mente. Representante do Instituto Roerich da Cultura e da Paz do Brasil, membro da Comiss&atilde;o Municipal da Cultura de Paz e fundador do f&oacute;rum Caminhos para a Sustentabilidade. Atua em consult&oacute;rio naturol&oacute;gico e ministra cursos e palestras na &aacute;rea desde 2007.<\\/p>"}',
                'created_at' => '2018-08-14 21:11:55',
                'updated_at' => '2018-08-14 21:11:55',
                'profissional_id' => 2,
            ),
            4 => 
            array (
                'id' => 6,
                'tipo' => 3,
                'ordem' => 9,
                'json_conteudo' => '{"texto":"Conhe\\u00e7a nosso FB","url":"https:\\/\\/www.facebook.com\\/Shanticienciacorpomente\\/"}',
                'created_at' => '2018-08-14 21:20:51',
                'updated_at' => '2018-08-14 21:20:51',
                'profissional_id' => 1,
            ),
        ));
        
        
    }
}