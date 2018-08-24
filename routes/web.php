<?php

/* Home */
Route::get('/', function () {
    return view('pages.home');
});

/* O Espaço */
Route::get('espaco', function () {
    return view('pages.espaco');
});

/* Quem somos */
Route::get('quem-somos', 'QuemSomosController@getIndex')->name('quem-somos');
Route::get('quem-somos/{id}', 'QuemSomosController@getProfissional');
Route::get('profissional/{id}', 'QuemSomosController@getProfissional');

/* Serviços */
Route::get('servicos', 'ServicosController@getIndex');
Route::get('servicos/{id}', 'ServicosController@getServico');


/* Programação */
Route::get('programacao-geral', function () {
    return view('pages.programacao.geral');
});
Route::get('programacao-cursos-agendados', function () {
    return view('pages.programacao.cursos-agendados');
});
Route::get('programacao-cursos-agendados-interno', function () {
    return view('pages.programacao.cursos-agendados-interno');
});
Route::get('programacao-cursos-nao-agendados', function () {
    return view('pages.programacao.cursos-nao-agendados');
});
Route::get('programacao-cursos-nao-agendados-interno', function () {
    return view('pages.programacao.cursos-nao-agendados-interno');
});
Route::get('programacao-eventos', function () {
    return view('pages.programacao.eventos');
});
Route::get('programacao-eventos-interno', function () {
    return view('pages.programacao.eventos-interno');
});


/* Portfólio */
Route::get('portfolio', function () {
    return view('pages.portfolio');
});
Route::get('portfolio-interno', function () {
    return view('pages.portfolio-interno');
});


/* Artigos */
Route::get('artigos/{tag}', 'ArtigoController@indexHome');
Route::get('download/artigos/{id}', 'ArtigoController@downloadArtigo');


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

});


Route::post('profissionals/{id}/ativa-listagem', 'ProfissionalController@postAtivaListagem')->middleware('auth');
Route::post('profissionals/{id}/remove-listagem', 'ProfissionalController@postRemoveListagem')->middleware('auth');
Route::resource('admin-artigos', 'ArtigoController');


Route::resource('grupoServicos', 'GrupoServicoController');


Route::resource('trabalhoPortfolios', 'TrabalhoPortfolioController');
