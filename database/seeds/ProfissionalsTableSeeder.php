<?php

use Illuminate\Database\Seeder;

class ProfissionalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('profissionals')->delete();
        
        \DB::table('profissionals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Gabriela do Prado Teixeira',
                'descricao_listagem' => 'cargo, área, atuaçao ...',
            'descricao_interna' => 'Formada em Comunicação pela Unesp – Bauru e Yoga pelo IEPY – Instituto de Ensino e Pesquisas em Yoga (USP/ SP) / Kaivalyadhama Yoga Institute (India), sob coordenação do professor Marcos Rojo, esteve na Índia, onde teve a oportunidade de entrar em contato com as raízes dessa filosofia milenar. Pós graduada em Biopsicologia Ciência Corpo-Mente, sob coordenação da Dr. Susan Andrews. Possui formação de Doula na Tradição pelo Cais da Luz, Cais do Parto e Jardim de Om, ministrado por Marcely Carvalho em Bauru/2015. Ministra aulas de Yoga desde 2010, além de workshops e cursos relacionados à saúde Corpo Mente. É coidealizadora e fundadora do Instituto Shanti.',
                'ativo_listagem' => true,
                'created_at' => '2018-08-08 22:46:57',
                'updated_at' => '2018-08-08 23:11:05',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'nome' => 'Isabel Camoiço',
                'descricao_listagem' => 'cargo, função, área..',
                'descricao_interna' => 'Terapeuta holística CRT 50542, Taróloga e Thetahealer, atende com Essência de Cristais de Oz  e realiza consultoria de projetos para realização de sonhos e Dragon Dreaming design de projetos para sustentabilidade.',
                'ativo_listagem' => true,
                'created_at' => '2018-08-08 23:08:30',
                'updated_at' => '2018-08-08 23:13:30',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 2,
                'nome' => 'João Maciel',
                'descricao_listagem' => 'área.. cargo..',
            'descricao_interna' => '<p>Graduado em Naturologia Aplicada pela Universidade do Sul de Santa Catarina (UNISUL), p&oacute;s-graduado em Antropologia pela Universidade do Sagrado Cora&ccedil;&atilde;o (USC) e p&oacute;s-graduado em Ci&ecirc;ncia Corpo Mente: Biopsicologia pela Faculdade de Direito de Itu (FADITU) com a Dr&ordf; Susan Andrews no Instituto Vis&atilde;o Futuro.</p>

<p>Introdu&ccedil;&atilde;o &agrave; Psicologia Junguiana (prof&ordf; Julieta Haddad), Medicina Esog&eacute;tica (Mandel Institut de Florian&oacute;polis SC), Astropsicologia (prof.&ordm; Daniel Nunes), Dragon Dreaming design de projetos sustent&aacute;veis (Anne Trummer e Tanya Stergiou).</p>',
                'ativo_listagem' => true,
                'created_at' => '2018-08-08 23:02:10',
                'updated_at' => '2018-08-08 23:15:25',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}