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

        \App\Models\GrupoServico::create(array (

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

            <h2>YOGA PARA TERCEIRA IDADE&nbsp;</h2>

            <p>Praticar Yoga com frequ&ecirc;ncia traz muitos benef&iacute;cios para a sa&uacute;de f&iacute;sica e mental e pode ser uma &oacute;tima ferramenta tamb&eacute;m para viver a terceira idade de forma mais tranquila e saud&aacute;vel. De forma leve e consciente, a pr&aacute;tica fortalece os m&uacute;sculos, melhora a flexibilidade das articula&ccedil;&otilde;es e o equil&iacute;brio, ajudando a diminuir a incid&ecirc;ncia de quedas e fraturas. Trabalha e fortalece a coluna vertebral, melhorando a postura, diminuindo as dores e trazendo maior conforto f&iacute;sico. Al&eacute;m disso, o Yoga ajuda a diminuir a press&atilde;o arterial, melhora a respira&ccedil;&atilde;o, diminui a ansiedade, o estresse, a mem&oacute;ria e capacidade de concentra&ccedil;&atilde;o.</p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

            <h2>&nbsp;</h2>',
'lista_servicos' => '"\\"Grupos, Personal e Yogaterapia, Yoga para gestantes, Yoga para crian\\u00e7as, Yoga para pais e filhos, Yoga Hormonal, Yoga para casais\\""',
'created_at' => '2018-08-14 21:11:55',
'updated_at' => '2018-09-01 11:01:52',
'deleted_at' => NULL,
            ));

\App\Models\GrupoServico::create(array (

    'titulo' => 'TERAPIAS',
    'descricao_grupo' => '<p>...</p>',
    'descricao_servicos' => '<ul>
    <li>ASTROPSICOLOGIA&nbsp;</li>
    </ul>

    <p>&nbsp;</p>

    <ul>
    <li>MASSAGEM AYURV&Eacute;DICA&nbsp;</li>
    </ul>

    <p>&nbsp;</p>

    <ul>
    <li>PSICOLOGIA TRANSPESSOAL: A Psicologia Transpessoal &eacute; a &uacute;ltima grande for&ccedil;a dentro da Psicologia. Nela s&atilde;o aplicadas t&eacute;cnicas terap&ecirc;uticas que estimulam e potencializam toda capacidade de equil&iacute;brio da mente e do esp&iacute;rito.</li>
    </ul>

    <p>&nbsp;</p>

    <ul>
    <li>PSICOLOGIA CORPORAL:</li>
    </ul>

    <p>&nbsp;</p>

    <ul>
    <li>REGRESS&Atilde;O: Terapia Regressiva &agrave; Viv&ecirc;ncias Passadas. M&eacute;todo terap&ecirc;utico para libera&ccedil;&atilde;o de traumas conscientes ou inconscientes.</li>
    </ul>

    <p>&nbsp;</p>

    <ul>
    <li>ORIENTA&Ccedil;&Atilde;O FAMILIAR: Identifica&ccedil;&atilde;o dos padr&otilde;es presentes nas din&acirc;micas familiares para transforma&ccedil;&atilde;o e harmoniza&ccedil;&atilde;o do conv&iacute;vio.</li>
    </ul>

    <p>&nbsp;</p>

    <ul>
    <li>ORIENTA&Ccedil;&Atilde;O &Agrave; PAIS:&nbsp; Orienta&ccedil;&atilde;o para que os pais possam entender melhor as fases do desenvolvimento dos filhos e agir de acordo com a necessidade de cada fase.</li>
    </ul>

    <p>&nbsp;</p>

    <ul>
    <li>THETAHEALING: &nbsp;Poderosa t&eacute;cnica de cura baseada em conceitos da f&iacute;sica qu&acirc;ntica, parte da ideia de que criamos nossa realidade a partir das nossas cren&ccedil;as ou mem&oacute;rias energ&eacute;ticas do nosso DNA.</li>
    </ul>

    <p>&nbsp;</p>

    <ul>
    <li>ESS&Ecirc;NCIA DE CRISTAIS DE OZ: S&atilde;o ess&ecirc;ncias de cristais elaboradas com a finalidade de recarregar a energia vital do corpo f&iacute;sico e emocional, possibilitando seu pleno equil&iacute;brio e funcionamento</li>
    </ul>',
'lista_servicos' => '"\\"Astropsicologia, Massagem Ayurv\\u00e9dica, Psicologia Transpessoal, Regress\\u00e3o, Orienta\\u00e7\\u00e3o Familiar, Orienta\\u00e7\\u00e3o \\u00e1 pais, Tarot Terap\\u00eautico, Thetahealing, Ess\\u00eancia de Cristais de Oz\\""',
'created_at' => '2018-08-14 21:11:55',
'updated_at' => '2018-09-01 11:10:22',
'deleted_at' => NULL,
            ));

\App\Models\GrupoServico::create(array (

    'titulo' => 'NATUROLOGIA',
    'descricao_grupo' => '<p>Com base nas Medicinas Tradicionais Indiana (Ayurveda), Chinesa e Ind&iacute;gena a Naturologia atua na recupera&ccedil;&atilde;o e promo&ccedil;&atilde;o da sa&uacute;de integral, tratando os sintomas e suas causas mais profundas de forma segura e eficiente por meio das terapias naturais:&nbsp;</p>

    <p>Aromaterapia</p>

    <p>Arteterapia</p>

    <p>Florais de Bach</p>

    <p>Fitoterapia</p>

    <p>Geoterapia</p>

    <p>Hidroterapia</p>

    <p>Massoterapia</p>

    <p>Reflexoterapia</p>

    <p>Cromoterapia</p>

    <p>Com Jo&atilde;o Maciel (Natur&oacute;logo)</p>

    <p>&nbsp;</p>',
'descricao_servicos' => '<h2>Ayurveda</h2>

<p>&Eacute; considerada uma das mais antigas abordagens de cuidado do mundo e significa Ci&ecirc;ncia ou Conhecimento da Vida. Nascida da observa&ccedil;&atilde;o, experi&ecirc;ncia e o uso de recursos naturais para desenvolver um sistema &uacute;nico de cuidado, este conhecimento estruturado agrega em si mesmo princ&iacute;pios relativos &agrave; sa&uacute;de do corpo f&iacute;sico, de forma a n&atilde;o desvincul&aacute;-los e considerando os campos energ&eacute;tico, mental e espiritual. A OMS descreve sucintamente o Ayurveda, reconhecendo sua utiliza&ccedil;&atilde;o para prevenir e curar doen&ccedil;as, e reconhece que esta n&atilde;o &eacute; apenas um sistema terap&ecirc;utico, mas tamb&eacute;m uma maneira de viver. No Ayurveda a investiga&ccedil;&atilde;o diagn&oacute;stica leva em considera&ccedil;&atilde;o tecidos corporais afetados, humores, local em que a doen&ccedil;a est&aacute; localizada, resist&ecirc;ncia e vitalidade, rotina di&aacute;ria, h&aacute;bitos alimentares, gravidade das condi&ccedil;&otilde;es cl&iacute;nicas, condi&ccedil;&atilde;o de digest&atilde;o, detalhes pessoais, sociais, situa&ccedil;&atilde;o econ&ocirc;mica e ambiental da pessoa. Os tratamentos no Ayurveda levam em considera&ccedil;&atilde;o a singularidade de cada pessoa, de acordo com o dosha (humores biol&oacute;gicos) do indiv&iacute;duo. Assim, cada tratamento &eacute; planejado de forma individual. S&atilde;o utilizadas t&eacute;cnicas de relaxamento, massagens, plantas medicinais, minerais, posturas corporais (&aacute;sanas), pranayamas (t&eacute;cnicas respirat&oacute;rias), mudras (posi&ccedil;&otilde;es e exerc&iacute;cios) e o cuidado diet&eacute;tico.</p>

<h2>&nbsp;</h2>

<h2>Aromaterapia</h2>

<p>Pr&aacute;tica terap&ecirc;utica secular que utiliza as propriedades dos &oacute;leos essenciais, concentrados vol&aacute;teis extra&iacute;dos de vegetais, para recuperar o equil&iacute;brio e a harmonia do organismo visando &agrave; promo&ccedil;&atilde;o da sa&uacute;de f&iacute;sica e mental, ao bem-estar e &agrave; higiene. Com amplo uso individual e/ou coletivo, pode ser associada a outras pr&aacute;ticas &ndash; como terapia de florais, cromoterapia, entre outras &ndash; e considerada uma possibilidade de interven&ccedil;&atilde;o que potencializa os resultados do tratamento adotado. Pr&aacute;tica multiprofissional, tem sido adotada por diversos profissionais de sa&uacute;de como enfermeiros, psic&oacute;logos, fisioterapeutas, m&eacute;dicos, veterin&aacute;rios, terapeutas hol&iacute;sticos, naturistas, dentre outros, e empregada nos diferentes setores da &aacute;rea para auxiliar de modo complementar a estabelecer o reequil&iacute;brio f&iacute;sico e/ou emocional do indiv&iacute;duo.&nbsp;</p>

<h2>&nbsp;</h2>

<h2>Arteterapia</h2>

<p>Uma atividade milenar, a arteterapia &eacute; pr&aacute;tica expressiva art&iacute;stica, visual, que atua como elemento terap&ecirc;utico na an&aacute;lise do consciente e do inconsciente e busca interligar os universos interno e externo do indiv&iacute;duo, por meio da sua simbologia, favorecendo a sa&uacute;de f&iacute;sica e mental. Arte livre conectada a um processo terap&ecirc;utico, transformando-se numa t&eacute;cnica especial, n&atilde;o meramente art&iacute;stica, que pode ser explorada como fim em si mesma (foco no processo criativo, no fazer) ou na an&aacute;lise/investiga&ccedil;&atilde;o de sua simbologia (arte como recurso terap&ecirc;utico). Utiliza instrumentos como pintura, colagem, modelagem, poesia, dan&ccedil;a, fotografia, tecelagem, express&atilde;o corporal, teatro, sons, m&uacute;sicas ou cria&ccedil;&atilde;o de personagens, usando a arte como uma forma de comunica&ccedil;&atilde;o entre profissional e paciente, em processo terap&ecirc;utico individual ou de grupo, numa produ&ccedil;&atilde;o art&iacute;stica a favor da sa&uacute;de.&nbsp;</p>

<h2>&nbsp;</h2>

<h2>Cromoterapia</h2>

<p>Pr&aacute;tica terap&ecirc;utica que utiliza as cores do espectro solar &ndash; vermelho, laranja, amarelo, verde, azul, anil e violeta &ndash; para restaurar o equil&iacute;brio f&iacute;sico e energ&eacute;tico do corpo. Na cromoterapia, as cores s&atilde;o classificadas em quentes (luminosas, com vibra&ccedil;&otilde;es que causam sensa&ccedil;&otilde;es mais f&iacute;sicas e estimulantes &ndash; vermelho, laranja e amarelo) e frias (mais escuras, com vibra&ccedil;&otilde;es mais sutis e calmantes &ndash; verde, azul, anil e violeta). A cor violeta &eacute; a de vibra&ccedil;&atilde;o mais alta no espectro de luz, com sua frequ&ecirc;ncia atingindo as camadas mais sutis e elevadas do ser (campo astral).</p>

<h2>Cromopuntura</h2>

<p>Abordagem da Medicina Esog&eacute;tica do International Mandel Institute</p>

<p>&nbsp;</p>

<h2>Fitoterapia</h2>

<p>As plantas medicinais contemplam esp&eacute;cies vegetais, cultivadas ou n&atilde;o, administradas por qualquer via ou forma, que exercem a&ccedil;&atilde;o terap&ecirc;utica e devem ser utilizadas de forma racional, pela possibilidade de apresentar intera&ccedil;&otilde;es, efeitos adversos&nbsp;e contraindica&ccedil;&otilde;es. A fitoterapia &eacute; um tratamento terap&ecirc;utico caracterizado pelo uso de plantas medicinais em suas diferentes formas farmac&ecirc;uticas (incluindo tinturas, ch&aacute;s, compressas, cataplasmas, banhos, comprimidos e outros), sem a utiliza&ccedil;&atilde;o de subst&acirc;ncias ativas isoladas, ainda que de origem vegetal. A fitoterapia &eacute; uma terapia integrativa que vem crescendo notadamente neste come&ccedil;o do s&eacute;culo XXI, voltada para a promo&ccedil;&atilde;o, prote&ccedil;&atilde;o e recupera&ccedil;&atilde;o da sa&uacute;de, tendo sido institucionalizada no SUS por meio da Pol&iacute;tica Nacional de Pr&aacute;ticas Integrativas e Complementares no SUS (PNPIC) e da Pol&iacute;tica Nacional de Plantas Medicinais e Fitoter&aacute;picos (PNPMF).&nbsp;</p>

<h2>&nbsp;</h2>

<h2>Florais de Bach</h2>

<p>Pr&aacute;tica terap&ecirc;utica que utiliza ess&ecirc;ncias derivadas de flores para atuar nos estados mentais e emocionais. A terapia de florais de Bach foi&nbsp;criada pelo ingl&ecirc;s Dr. Edward Bach (1886-1936)&nbsp;famoso medico, bacteriologista e patologista, com&nbsp;38 ess&ecirc;ncias ao todo. Cada um de seus rem&eacute;dios est&aacute; associado a uma emo&ccedil;&atilde;o humana b&aacute;sica.</p>

<p>Dr. Bach ensinava que a cura do plano emocional tem efeitos ben&eacute;ficos e consequ&ecirc;ncia em outros n&iacute;veis: uma vida emocional s&atilde; e uma personalidade equilibrada permitir&atilde;o ao corpo encontrar seu estado de sa&uacute;de e bem-estar natural.</p>

<h2>&nbsp;</h2>

<h2>Geoterapia</h2>

<p>Terap&ecirc;utica natural que consiste na utiliza&ccedil;&atilde;o de argila, barro e lamas medicinais, assim como pedras e cristais (frutos da terra), com objetivo de amenizar e cuidar de desequil&iacute;brios f&iacute;sicos e emocionais por meio dos diferentes tipos de radia&ccedil;&otilde;es&nbsp;e&nbsp;propriedades desintoxicantes e mineralizantes.&nbsp; A geoterapia, por meio de pedras e cristais como ferramentas de equil&iacute;brio dos centros psico-f&iacute;sicos&nbsp;e meridianos do corpo, promove a atividade autorreguladora do organismo&nbsp;e estimula terapeuticamente as zonas reflexol&oacute;gicas, equilibrando&nbsp;desordens&nbsp;f&iacute;sicas e emocionais. A exposi&ccedil;&atilde;o a&nbsp;radia&ccedil;&otilde;es celestes, sonoras e tel&uacute;ricas&nbsp;ativa os cristais e os elementos, desencadeando um processo din&acirc;mico e vitalizador capaz de beneficiar o corpo mente humano.</p>

<p>&nbsp;</p>

<h2>Hidroterapia</h2>

<p>Terapia milenar com base no uso medicinal da &aacute;gua na forma de compressas, banhos totais e parciais, ingest&atilde;o e inala&ccedil;&otilde;es. O est&iacute;mulo t&eacute;rmico do contato com a &aacute;gua tem o potencial de ativar o sistema de autorregula&ccedil;&atilde;o t&eacute;rmica do organismo, um dos mais importantes sistemas para a manuten&ccedil;&atilde;o da sa&uacute;de&nbsp;e promover um processo profundo de desintoxica&ccedil;&atilde;o fisiol&oacute;gico, mental e emocional. A &aacute;gua &eacute; o elemento de&nbsp;or&iacute;gem&nbsp;da vida no planeta e, por ser este &uacute;tero da vida, nos conecta com o principio feminino e nossas emo&ccedil;&otilde;es mais profundas.&nbsp;</p>

<p>&nbsp;</p>

<h2>Iridologia</h2>

<p>A&nbsp;iridologia ou&nbsp;irisdiagnose&nbsp;&eacute; uma forma de diagnose (na etmologia:&nbsp;<em>conhecer atrav&eacute;s da &iacute;ris</em>) na qual a an&aacute;lise&nbsp;de padr&otilde;es, cores e outros sinais&nbsp;da &iacute;ris&nbsp;permite que se conhe&ccedil;am as condi&ccedil;&otilde;es gerais de sa&uacute;de.&nbsp;A iridologia&nbsp;aponta &oacute;rg&atilde;os com fragilidades e estados de desequil&iacute;brios,&nbsp;conhecidos como &quot;&oacute;rg&atilde;os de choque&quot;, muito &uacute;til no tratamento e preven&ccedil;&atilde;o de grande parcela das disfun&ccedil;&otilde;es.</p>

<p>&nbsp;</p>

<h2>Massoterapia</h2>

<p>Terapia manual fundamentada na mobiliza&ccedil;&atilde;o de tecidos moles do corpo amplamente eficaz e vers&aacute;til. Alguns dos efeitos da Massoterapia envolvem o aumento da circula&ccedil;&atilde;o venosa e linf&aacute;tica gerando uma melhor nutri&ccedil;&atilde;o,&nbsp;oxigena&ccedil;&atilde;o e desintoxica&ccedil;&atilde;o dos tecidos; estimulo&nbsp;do sistema end&oacute;crino, promovendo uma sensa&ccedil;&atilde;o duradoura de bem estar,&nbsp;relaxamento, qualidade afetiva nos relacionamentos interpessoais e maior efici&ecirc;ncia do sistema digest&oacute;rio; equilibrio&nbsp;do sistema nervoso, promovendo uma diminui&ccedil;&atilde;o do ritmo card&iacute;aco, press&atilde;o arterial,&nbsp;estados depressivos e de estresse em geral,&nbsp;alivio de dores,&nbsp;tens&otilde;es musculares e amplia&ccedil;&atilde;o&nbsp;da capacidade respirat&oacute;ria.</p>

<p>No Instituto Shanti oferecemos:&nbsp;</p>

<p>&nbsp;</p>

<p><strong>Massoterapia Sueca</strong></p>

<p>&nbsp;</p>

<p><strong>Massoterapia Indiana</strong></p>

<p>&nbsp;</p>

<p><strong>Massoterapia Chinesa</strong></p>

<p>&nbsp;</p>

<p><strong>Shantala&nbsp;</strong><br />
Pr&aacute;tica terap&ecirc;utica que consiste na manipula&ccedil;&atilde;o (massagem) para beb&ecirc;s e crian&ccedil;as pelos pais, composta por uma s&eacute;rie de movimentos que favorecem o v&iacute;nculo entre estes e proporcionam uma s&eacute;rie de benef&iacute;cios decorrentes do alongamento dos membros e da ativa&ccedil;&atilde;o da circula&ccedil;&atilde;o. Al&eacute;m disso, promove a sa&uacute;de integral; harmoniza e equilibra os sistemas imunol&oacute;gico, respirat&oacute;rio, digestivo, circulat&oacute;rio e linf&aacute;tico; estimula as articula&ccedil;&otilde;es e a musculatura; auxilia significativamente o desenvolvimento motor; facilita movimentos como rolar, sentar, engatinhar e andar; refor&ccedil;a v&iacute;nculos afetivos, coopera&ccedil;&atilde;o, confian&ccedil;a, criatividade, seguran&ccedil;a, equil&iacute;brio f&iacute;sico e emocional.</p>

<h2>&nbsp;</h2>

<h2>Reflexoterapia</h2>

<p>Pr&aacute;tica terap&ecirc;utica que utiliza est&iacute;mulos em &aacute;reas reflexas &ndash; os microssistemas e pontos reflexos do corpo existentes nos p&eacute;s, m&atilde;os e orelhas &ndash; para auxiliar na elimina&ccedil;&atilde;o de toxinas, na seda&ccedil;&atilde;o da dor e no relaxamento. Parte do princ&iacute;pio que o corpo se encontra atravessado por meridianos que o dividem em diferentes regi&otilde;es, as quais t&ecirc;m o seu reflexo, principalmente nos p&eacute;s ou nas m&atilde;os, e permitem, quando massageados, a reativa&ccedil;&atilde;o da homeostase e do equil&iacute;brio nas regi&otilde;es com algum tipo de bloqueio. Tamb&eacute;m recebe as denomina&ccedil;&otilde;es de reflexologia ou terapia reflexa por trabalhar com os microssistemas, &aacute;reas espec&iacute;ficas do corpo (p&eacute;s, m&atilde;os, orelhas) que se conectam energeticamente e representam o organismo em sua totalidade.</p>',
'lista_servicos' => '"\\"Aromaterapia, Auriculoterapia, Cristalterapia, Cromopuntura, Fitoterapia, Florais de Bach, Geoterapia, Hidroterapia, Iridologia, Massoterapia, Reflexoterapia\\""',
'created_at' => '2018-08-14 21:11:55',
'updated_at' => '2018-08-29 15:30:26',
'deleted_at' => NULL,
            ));

    }
}
