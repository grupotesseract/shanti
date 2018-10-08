<?php

/* Home */
Route::get('/', 'InfoHomepageController@getHome');

/* O Espaço */
Route::get('espaco', 'InfoEspacoController@getEspaco');

/* Quem somos */
Route::get('quem-somos', 'QuemSomosController@getIndex')->name('quem-somos');
Route::get('quem-somos/{id}', 'QuemSomosController@getProfissional');
Route::get('profissional/{id}', 'QuemSomosController@getProfissional');

/* Serviços */
Route::get('servicos', 'ServicosController@getIndex');
Route::get('servicos/{id}', 'ServicosController@getServico');

/* Programação */
Route::get('programacao-geral', 'ProgramacaoController@getProgramacaoGeral');
Route::get('programacao-cursos-agendados', 'ProgramacaoController@getProgramacaoCursosAgendados');
Route::get('programacao-cursos-nao-agendados', 'ProgramacaoController@getProgramacaoCursosNaoAgendados');
Route::get('programacao-eventos', 'ProgramacaoController@getProgramacaoEventos');

/* Portfólio */
Route::get('portfolio', 'PortfolioController@getPortfolio');
Route::get('portfolio-interno', 'PortfolioController@getPortfolioInterno');

/* Artigos -> 'referencias' no lugar de artigos  **/
Route::get('artigos/{tag}', 'ArtigoController@indexHome');
Route::get('download/artigos/{id}', 'ArtigoController@downloadArtigo');
Route::get('referencias/{tag}', 'ArtigoController@indexHome');
Route::get('download/referencias/{id}', 'ArtigoController@downloadArtigo');

/* Contato */
Route::get('contato','ContatoController@getIndex'); 
Route::post('contato','ContatoController@postContato')->name('contato-send'); 

// Rotas de login / logout
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

/** * Aplicando middlewares para as rotas do webadmin - Aqui entram as rotas que precisa estar logado */
Route::middleware(['auth'])->group(function () {
    Route::get('admin', 'AdminController@index');
    Route::resource('profissionals', 'ProfissionalController');

    Route::post('profissionals/{id}/ativa-listagem', 'ProfissionalController@postAtivaListagem')->middleware('auth');
    Route::post('profissionals/{id}/remove-listagem', 'ProfissionalController@postRemoveListagem')->middleware('auth');

    Route::resource('blocoDescricaos', 'BlocoDescricaoController');

    Route::get('/profissionals/{id}/adiciona-conteudo', 'ProfissionalController@getCreateBlocoConteudo');
    Route::get('/profissionals/{id}/edita-conteudo', 'ProfissionalController@getEditBlocoConteudo');
    Route::get('/blocoDescricaos/{id}/altera-ordem', 'BlocoDescricaoController@getAlteraOrdem')->name('bloco_descricaos.altera-ordem');

    Route::post('profissionals/{id}/ativa-listagem', 'ProfissionalController@postAtivaListagem')->middleware('auth');
    Route::post('profissionals/{id}/remove-listagem', 'ProfissionalController@postRemoveListagem')->middleware('auth');

    Route::resource('admin-artigos', 'ArtigoController');
    Route::resource('grupoServicos', 'GrupoServicoController');
    Route::resource('trabalhoPortfolios', 'TrabalhoPortfolioController');
    Route::post('trabalhoPortfolios/{id}/ativa-listagem', 'TrabalhoPortfolioController@postAtivaListagem')->middleware('auth');
    Route::post('trabalhoPortfolios/{id}/remove-listagem', 'TrabalhoPortfolioController@postRemoveListagem')->middleware('auth');

    Route::get('/portfolio/{id}', 'TrabalhoPortfolioController@getShowPortfolio');
    Route::post('/portfolio/{id}/troca-capa', 'TrabalhoPortfolioController@postTrocaFotoCapa')->middleware('auth')->name('trabalhoPortfolios.trocaFotoCapa');

    Route::get('/trabalhoPortfolios/{id}/adiciona-conteudo', 'TrabalhoPortfolioController@getCreateBlocoConteudo');
    Route::get('/trabalhoPortfolios/{id}/edita-conteudo', 'TrabalhoPortfolioController@getEditBlocoConteudo');

    Route::resource('itemProgramacaos', 'ItemProgramacaoController');

    Route::post('/programacao/{id}/troca-capa', 'ItemProgramacaoController@postTrocaFotoCapa')->middleware('auth')->name('itemProgramacaos.trocaFotoCapa');
    Route::get('/itemProgramacaos/{id}/adiciona-conteudo', 'ItemProgramacaoController@getCreateBlocoConteudo');
    Route::get('/itemProgramacaos/{id}/edita-conteudo', 'ItemProgramacaoController@getEditBlocoConteudo');
    Route::get('/programacao/{id}', 'ItemProgramacaoController@show')->name('programacao.interna');
    Route::post('/programacao/{id}/contato', 'ItemProgramacaoController@postContatoProgramacao');

    Route::resource('infoHomepage', 'InfoHomepageController')->except(['create', 'store', 'destroy']);
    Route::get('/informacoes-homepage', 'InfoHomepageController@index')->name('infoHomepage.index');
    Route::post('/fotos/{id}/troca-foto', 'FotoController@postTrocaFoto')->name('fotos.trocaFoto');
    Route::post('/fotos/foto', 'FotoController@store')->name('fotos.store');
    Route::delete('/fotos/{id}', 'FotoController@destroy')->name('fotos.destroy');

    Route::resource('infoEspaco', 'InfoEspacoController')->except(['create', 'store', 'destroy']);
    Route::get('/informacoes-o-espaco', 'InfoEspacoController@index')->name('infoEspaco.index');

});
