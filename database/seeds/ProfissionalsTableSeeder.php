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
                'id' => 2,
                'nome' => 'Isabel Camoiço',
                'descricao_listagem' => 'cargo, função, área..',
                'descricao_interna' => 'Terapeuta holística CRT 50542, Taróloga e Thetahealer, atende com Essência de Cristais de Oz  e realiza consultoria de projetos para realização de sonhos e Dragon Dreaming design de projetos para sustentabilidade.',
                'ativo_listagem' => true,
                'created_at' => '2018-08-14 21:11:55',
                'updated_at' => '2018-08-21 10:03:30',
                'deleted_at' => '2018-08-21 10:03:30',
            ),
            1 => 
            array (
                'id' => 3,
                'nome' => 'João Maciel',
                'descricao_listagem' => 'Naturólogo e Professor. Coidealizador e fundador do Instituto Shanti de Ciência Corpo Mente',
            'descricao_interna' => '<p>Graduado em Naturologia Aplicada pela Universidade do Sul de Santa Catarina (UNISUL), p&oacute;s-graduado em Antropologia pela Universidade do Sagrado Cora&ccedil;&atilde;o (USC) e p&oacute;s-graduado em Ci&ecirc;ncia Corpo Mente: Biopsicologia pela Faculdade de Direito de Itu (FADITU) com a Dr&ordf; Susan Andrews no Instituto Vis&atilde;o Futuro.<br />
<br />
Medicina Esog&eacute;tica (Mandel Institut de Florian&oacute;polis SC), Astropsicologia (prof.&ordm; Daniel Nunes) e Dragon Dreaming design de projetos sustent&aacute;veis (com Anne Trummer e Tanya Stergiou).&nbsp;<br />
<br />
&nbsp;</p>',
                'ativo_listagem' => true,
                'created_at' => '2018-08-14 21:11:55',
                'updated_at' => '2018-09-02 20:50:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'nome' => 'Marina Venturini',
                'descricao_listagem' => 'Psicóloga Corporal',
                'descricao_interna' => '<p>Graduada em Psicologia pela Unesp de Assis SP e p&oacute;s graduada em Terapia Corporal pelo Centro Reichiano de Curitiba PR.&nbsp;<br />
&nbsp;</p>',
                'ativo_listagem' => true,
                'created_at' => '2018-08-21 10:18:02',
                'updated_at' => '2018-08-21 10:18:11',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1,
                'nome' => 'Gabriela do Prado Teixeira',
                'descricao_listagem' => 'Professora de Yoga. Coidealizadora e fundadora do Instituto Shanti de Ciência Corpo Mente',
            'descricao_interna' => '<p>Formada em Comunica&ccedil;&atilde;o pela Unesp &ndash; Bauru e Yoga pelo IEPY &ndash; Instituto de Ensino e Pesquisas em Yoga (USP/ SP) / Kaivalyadhama Yoga Institute (India), sob coordena&ccedil;&atilde;o do professor Marcos Rojo, esteve na &Iacute;ndia, onde teve a oportunidade de entrar em contato com as ra&iacute;zes dessa filosofia milenar. P&oacute;s graduada em Biopsicologia Ci&ecirc;ncia Corpo-Mente, sob coordena&ccedil;&atilde;o da Dr. Susan Andrews. Possui forma&ccedil;&atilde;o de Doula na Tradi&ccedil;&atilde;o pelo Cais da Luz, Cais do Parto e Jardim de Om, ministrado por Marcely Carvalho em Bauru/2015. Ministra aulas de Yoga desde 2010, al&eacute;m de workshops e cursos relacionados &agrave; sa&uacute;de Corpo Mente. &Eacute; coidealizadora e fundadora do Instituto Shanti.</p>',
                'ativo_listagem' => true,
                'created_at' => '2018-08-14 21:11:55',
                'updated_at' => '2018-09-01 10:45:54',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nome' => 'Malu Nejim de Carvalho',
                'descricao_listagem' => 'Professora de Yoga, Psicóloga',
            'descricao_interna' => '<p>Professora de Yoga e Psic&oacute;loga . Mestre em Psicologia Cl&iacute;nica e Psicologia Hospitalar pela PUC/SP. Doutora em Ci&ecirc;ncia da Reabilita&ccedil;&atilde;o pelo HRAC/ USP/ Bauru.Forma&ccedil;&atilde;o de Yoga pelo Instituto Vis&atilde;o Futuro. Curso de forma&ccedil;&atilde;o de Instrutores de Yoga para Crian&ccedil;as, Jovens e Yoga na Educa&ccedil;&atilde;o Pequenos Yogis. Curso: A Neurobiologia dos oito passos do Yoga, com Kristine Kaoverii Weber/ Instituto Vis&atilde;o Futuro/ Porangaba.Ministra aulas de Yoga para Crian&ccedil;as; Yoga para pais e filhos e Yoga Hormonal (personal e em grupo). Atua tamb&eacute;m com aulas de Yoga na educa&ccedil;&atilde;o e aulas de Yoga com teatro para crian&ccedil;as.</p>',
                'ativo_listagem' => true,
                'created_at' => '2018-08-21 10:33:42',
                'updated_at' => '2018-09-01 10:53:11',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nome' => 'Lucia Cirino',
                'descricao_listagem' => 'Psicóloga e Professora de Yoga',
            'descricao_interna' => '<p>Psic&oacute;loga formada pela UNESP(Bauru); Especialista em Psicologia Transpessoal, pela ALUBRAT ( S&atilde;o Paulo); P&oacute;s-graduada em Terapia Regressiva pelo instituto J&uacute;lio Peres (S&atilde;o Paulo); P&oacute;s-graduada em Biopsicologia pelo Instituto Vis&atilde;o Futuro; Formada em Yoga, pela Institui&ccedil;&atilde;o Ananda Marga, S&atilde;o Paulo. Ministra cursos te&oacute;ricos e vivenciais de Medita&ccedil;&atilde;o, Valores Humanos ( virtudes para crian&ccedil;as), aulas de Yogaterapia individual e Yoga para casais. Atende com Psicologia Transpessoal e Orienta&ccedil;&atilde;o Familiar.</p>',
                'ativo_listagem' => true,
                'created_at' => '2018-09-01 10:56:03',
                'updated_at' => '2018-09-01 10:56:03',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}