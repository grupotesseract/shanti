<?php

use Illuminate\Database\Seeder;

class GrupoServicosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('grupo_servicos')->delete();
        
        \DB::table('grupo_servicos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'titulo' => 'YOGA',
                'descricao_grupo' => '<p>&nbsp; &nbsp; &nbsp;Yoga &eacute; um caminho que permite ao ser humano expressar e recuperar suas potencialidades, &eacute; uma ferramenta de promo&ccedil;&atilde;o da sa&uacute;de integral, uma vez que considera o corpo-mente humano em toda sua complexidade e em todos os seus aspectos: f&iacute;sicos, mentais e espirituais. A pr&aacute;tica do Yoga permite ao indiv&iacute;duo entrar em contato com o que h&aacute; de mais profundo em si, trazendo-lhe maior autoconhecimento, autocontrole e bem estar, al&eacute;m de promover o equil&iacute;brio psicofisiol&oacute;gico e possibilitar a autonomia do praticante, apresentando-se tamb&eacute;m como uma excelente ferramenta terap&ecirc;utica.</p>',
                'descricao_servicos' => '<h2>GRUPOS</h2>

<p>As aulas s&atilde;o compostas por diversos elementos que visam o autoconhecimento, a sa&uacute;de f&iacute;sica e mental, dentre eles destacam-se:</p>

<p>- &Aacute;sanas, posturas psicof&iacute;sicas que visam o equil&iacute;brio org&acirc;nico e fisiol&oacute;gico do corpo, interferem na respira&ccedil;&atilde;o, no suprimento sangu&iacute;neo, no alongamento, fortalecimento e relaxamento muscular, atuando diretamente no sistema nervoso aut&ocirc;nomo e nas gl&acirc;ndulas end&oacute;crinas;</p>

<p>- Pr&aacute;ticas respirat&oacute;rias, que atuam diretamente sobre o fluxo ps&iacute;quico energ&eacute;tico do corpo (o Prana), purificando as correntes sutis (Nadiis), facilitando a concentra&ccedil;&atilde;o, promovendo a interioza&ccedil;&atilde;o da aten&ccedil;&atilde;o e possibilitando que o praticante atinja estados profundos de medita&ccedil;&atilde;o, uma vez que a atividade da respira&ccedil;&atilde;o e a atividade da mente se interferem mutuamente;</p>

<p>- Medita&ccedil;&atilde;o: A medita&ccedil;&atilde;o constitui-se como um processo cont&iacute;nuo que envolve diferentes etapas, seu princ&iacute;pio &eacute; o desenvolvimento da interioriza&ccedil;&atilde;o, controle e direcionamento da energia mental atrav&eacute;s de t&eacute;cnicas espec&iacute;ficas que envolvem a focaliza&ccedil;&atilde;o da aten&ccedil;&atilde;o.</p>

<p>&nbsp;</p>

<h2>PERSONAL E YOGATERAPIA</h2>

<p>Utilizando os mesmos elementos das pr&aacute;ticas em grupo, atuam de forma mais direcionada &agrave;s necessidades de cada indiv&iacute;duo.</p>

<p>&nbsp;</p>

<h2>YOGA PARA GESTANTES</h2>

<p>O Yoga traz muitos benef&iacute;cios &agrave; gesta&ccedil;&atilde;o, promovendo bem estar e equil&iacute;brio neste momento de t&atilde;o intensas transforma&ccedil;&otilde;es. Al&eacute;m de fortalecer o v&iacute;nculo entre m&atilde;e e beb&ecirc; desde o in&iacute;cio, garante uma gravidez mais tranquila e prepara a m&atilde;e para o parto e p&oacute;s-parto.</p>

<p>&nbsp;</p>

<h2>YOGA PARA CRIAN&Ccedil;AS</h2>

<p>A pr&aacute;tica do Yoga na inf&acirc;ncia tem o objetivo de promover o desenvolvimento psicof&iacute;sico harmonioso da crian&ccedil;a, cultivando o autoconhecimento, a empatia e a livre express&atilde;o de suas potencialidades, criatividade e espontaneidade.</p>

<p>&nbsp;</p>

<h2>YOGA PARA PAIS E FILHOS</h2>

<p>Uma excelente oportunidade para juntos realizarem posturas de Yoga, exerc&iacute;cios respirat&oacute;rios, massagem, relaxamento, medita&ccedil;&atilde;o e desenvolverem valores humanos de forma l&uacute;dica. Sugest&atilde;o de faixa et&aacute;ria da crian&ccedil;a: a partir de 04 anos.</p>

<p>&nbsp;</p>

<h2>YOGA HORMANAL</h2>

<p>Indicado especialmente para as fases de pr&eacute;-menopausa, menopausa precoce e menopausa, pode auxiliar ainda nos sintomas da TPM e outros desequil&iacute;brios hormonais. Pode ser considerado um tipo de Yoga din&acirc;mica direcionada para corrigir a diminui&ccedil;&atilde;o da produ&ccedil;&atilde;o de horm&ocirc;nios femininos; por meio de exerc&iacute;cios revitalizantes para os ov&aacute;rios, tire&oacute;ide, hip&oacute;fise e suprarrenais. Dessa maneira, as posturas de Yoga s&atilde;o praticadas de forma din&acirc;mica, acompanhadas de respira&ccedil;&otilde;es especiais que realizam o massageamento das gl&acirc;ndulas. Aulas em grupo e individuais.</p>

<p>&nbsp;</p>

<h2>YOGA PARA CASAIS</h2>

<p>Utilizando todas as t&eacute;cnicas da Yoga, os exerc&iacute;cios em dupla tem como objetivo, aumentar a percep&ccedil;&atilde;o de si mesmo e do outro. O contato , a respira&ccedil;&atilde;o do parceiro e a confian&ccedil;a, resgatam , estimulam e fortalecem o v&iacute;nculo amoroso.</p>',
                'lista_servicos' => '"Grupos, Personal e Yogaterapia, Yoga para gestantes, Yoga para crian\\u00e7as, Yoga para pais e filhos, Yoga Hormonal, Yoga para casais"',
                'created_at' => '2018-08-09 22:09:00',
                'updated_at' => '2018-08-09 22:59:31',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'titulo' => 'NATUROLOGIA',
            'descricao_grupo' => '<p>Com base nas Medicinas Tradicionais Indiana (Ayurveda), Chinesa e Ind&iacute;gena a Naturologia atua na recupera&ccedil;&atilde;o e promo&ccedil;&atilde;o da sa&uacute;de integral, tratando os sintomas e suas causas mais profundas de forma segura e eficiente.</p>',
                'descricao_servicos' => '<h2>Ayurveda</h2>

<p>&Eacute; considerada uma das mais antigas abordagens de cuidado do mundo e significa Ci&ecirc;ncia ou Conhecimento da Vida. Nascida da observa&ccedil;&atilde;o, experi&ecirc;ncia e o uso de recursos naturais para desenvolver um sistema &uacute;nico de cuidado, este conhecimento estruturado agrega em si mesmo princ&iacute;pios relativos &agrave; sa&uacute;de do corpo f&iacute;sico, de forma a n&atilde;o desvincul&aacute;-los e considerando os campos energ&eacute;tico, mental e espiritual. A OMS descreve sucintamente o Ayurveda, reconhecendo sua utiliza&ccedil;&atilde;o para prevenir e curar doen&ccedil;as, e reconhece que esta n&atilde;o &eacute; apenas um sistema terap&ecirc;utico, mas tamb&eacute;m uma maneira de viver. No Ayurveda a investiga&ccedil;&atilde;o diagn&oacute;stica leva em considera&ccedil;&atilde;o tecidos corporais afetados, humores, local em que a doen&ccedil;a est&aacute; localizada, resist&ecirc;ncia e vitalidade, rotina di&aacute;ria, h&aacute;bitos alimentares, gravidade das condi&ccedil;&otilde;es cl&iacute;nicas, condi&ccedil;&atilde;o de digest&atilde;o, detalhes pessoais, sociais, situa&ccedil;&atilde;o econ&ocirc;mica e ambiental da pessoa. Os tratamentos no Ayurveda levam em considera&ccedil;&atilde;o a singularidade de cada pessoa, de acordo com o dosha (humores biol&oacute;gicos) do indiv&iacute;duo. Assim, cada tratamento &eacute; planejado de forma individual. S&atilde;o utilizadas t&eacute;cnicas de relaxamento, massagens, plantas medicinais, minerais, posturas corporais (&aacute;sanas), pranayamas (t&eacute;cnicas respirat&oacute;rias), mudras (posi&ccedil;&otilde;es e exerc&iacute;cios) e o cuidado diet&eacute;tico.<br />
&nbsp;</p>

<h2>Auriculoterapia</h2>

<p>Terapia que consiste na estimula&ccedil;&atilde;o com sementes de mostarda, objetos met&aacute;licos ou magn&eacute;ticos em pontos espec&iacute;ficos da orelha para aliviar dores ou tratar diversos problemas f&iacute;sicos ou psicol&oacute;gicos, como ansiedade, enxaqueca, obesidade ou contraturas amplamente usada na assist&ecirc;ncia &agrave; sa&uacute;de.<br />
&nbsp;</p>

<h2>Cromopuntura</h2>

<p>Abordagem da Medicina Esog&eacute;tica do International Mandel Institute</p>

<p>&nbsp;</p>

<h2>Fitoterapia</h2>

<p>Terap&ecirc;utica caracterizada pelo uso de plantas medicinais em suas diferentes formas farmac&ecirc;uticas (incluindo tinturas, ch&aacute;s, compressas, cataplasmas, banhos, comprimidos e outros), sem a utiliza&ccedil;&atilde;o de subst&acirc;ncias ativas isoladas, ainda que de origem vegetal.&nbsp;<br />
&nbsp;</p>

<h2>Florais de Bach</h2>

<p>Rem&eacute;dios a base de flores</p>

<p>&nbsp;</p>

<h2>Geoterapia</h2>

<p>Com argilas medicinais</p>

<p>&nbsp;</p>

<h2>Hidroterapia</h2>

<p>Uso medicinal da &aacute;gua</p>

<p>&nbsp;</p>

<h2>Iridologia</h2>

<p>Diagn&oacute;stico atrav&eacute;s da &iacute;ris</p>

<p>&nbsp;</p>

<h2>Massoterapia</h2>

<p>Ayurv&eacute;dica, chinesa e sueca</p>

<p>&nbsp;</p>

<h2>Reflexoterapia</h2>

<p>Pr&aacute;tica que utiliza est&iacute;mulos em &aacute;reas reflexas com finalidade terap&ecirc;utica. Parte do princ&iacute;pio que o corpo se encontra atravessado por meridianos que o dividem em diferentes regi&otilde;es, cada uma destas regi&otilde;es tem o seu reflexo, principalmente nos p&eacute;s, m&atilde;os e orelhas (chamados microssistemas). S&atilde;o estimulados pontos chave que permitem a reativa&ccedil;&atilde;o da homeostase (capacidade autorreguladora do organismo) dos &oacute;rg&atilde;os e regi&otilde;es do corpo.&nbsp;</p>',
                'lista_servicos' => '"Aromaterapia, Auriculoterapia, Cristalterapia, Cromopuntura, Fitoterapia, Florais de Bach, Geoterapia, Hidroterapia, Iridologia, Massoterapia, Reflexoterapia"',
                'created_at' => '2018-08-09 23:07:19',
                'updated_at' => '2018-08-09 23:07:19',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'titulo' => 'TERAPIAS',
                'descricao_grupo' => '<p>...</p>',
            'descricao_servicos' => '<h2>Astropsicologia (...)</h2>

<h2><br />
Massagem Ayurv&eacute;dica (...)</h2>

<h2><br />
Psicologia Transpessoal:</h2>

<p>A Psicologia Transpessoal &eacute; a &uacute;ltima grande for&ccedil;a dentro da Psicologia. Nela s&atilde;o aplicadas t&eacute;cnicas terap&ecirc;uticas que estimulam e potencializam toda capacidade de equil&iacute;brio da mente e do esp&iacute;rito.</p>

<h2><br />
Regress&atilde;o:</h2>

<p>Terapia Regressiva &agrave; Viv&ecirc;ncias Passadas. M&eacute;todo terap&ecirc;utico para libera&ccedil;&atilde;o de traumas conscientes ou inconscientes.</p>

<h2>&nbsp;</h2>

<h2>Orienta&ccedil;&atilde;o Familiar:</h2>

<p>Identifica&ccedil;&atilde;o dos padr&otilde;es presentes nas din&acirc;micas familiares para transforma&ccedil;&atilde;o e harmoniza&ccedil;&atilde;o do conv&iacute;vio.</p>

<h2>&nbsp;</h2>

<h2>Orienta&ccedil;&atilde;o &agrave; pais:</h2>

<p>Orienta&ccedil;&atilde;o para que os pais possam entender melhor as fases do desenvolvimento dos filhos e agir de acordo com a necessidade de cada fase.</p>

<h2>&nbsp;</h2>

<h2>Tarot Terap&ecirc;utico:</h2>

<p>O tarot utilizado como terapia &eacute; uma ferramenta de autoconhecimento, que auxilia na compreens&atilde;o do momento presente, norteia o indiv&iacute;duo a tomar decis&otilde;es e o conscientiza de sua capacidade de co-criar o futuro.</p>

<h2>&nbsp;</h2>

<h2>Thetahealing: &nbsp;</h2>

<p>Poderosa t&eacute;cnica de cura baseada em conceitos da f&iacute;sica qu&acirc;ntica, parte da ideia de que criamos nossa realidade a partir das nossas cren&ccedil;as ou mem&oacute;rias energ&eacute;ticas do nosso DNA.</p>

<h2>&nbsp;</h2>

<h2>Ess&ecirc;ncia de Cristais de Oz:</h2>

<p>S&atilde;o ess&ecirc;ncias de cristais elaboradas com a finalidade de recarregar a energia vital do corpo f&iacute;sico e emocional, possibilitando seu pleno equil&iacute;brio e funcionamento.<br />
&nbsp;</p>',
                'lista_servicos' => '"Astropsicologia, Massagem Ayurv\\u00e9dica, Psicologia Transpessoal, Regress\\u00e3o, Orienta\\u00e7\\u00e3o Familiar, Orienta\\u00e7\\u00e3o \\u00e0 pais, Tarot Terap\\u00eautico, Thetahealing, Ess\\u00eancia de Cristais de Oz"',
                'created_at' => '2018-08-09 23:13:39',
                'updated_at' => '2018-08-09 23:13:39',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}