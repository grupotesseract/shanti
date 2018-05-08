<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('pages.home');
});
Route::get('espaco', function () {
    return view('pages.espaco');
});
// Rota temporária só para fazer o front
Route::get('quem-somos-pessoal', function () {
    return view('pages.quem-somos-pessoal-bkp');
});

Route::get('quem-somos', 'QuemSomosController@getIndex')->name('quem-somos');
Route::get('profissional/{id}', 'QuemSomosController@getProfissional');

// Rotas de login / logout
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

/** * Aplicando middlewares para as rotas do webadmin - Aqui entram as rotas que precisa estar logado */
Route::middleware(['auth'])->group(function () {
    Route::get('admin', 'AdminController@index');
    Route::resource('profissionals', 'ProfissionalController');
});

Route::post('profissionals/{id}/ativa-listagem', 'ProfissionalController@postAtivaListagem')->middleware('auth');
Route::post('profissionals/{id}/remove-listagem', 'ProfissionalController@postRemoveListagem')->middleware('auth');


