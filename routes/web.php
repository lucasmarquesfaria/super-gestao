<?php

use Illuminate\Support\Facades\Route;

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
 //        entrando 
Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobrenos', 'SobreNosController@sobrenos')->name('site.sobrenos');

Route::get('/login', 'LoginController@login')->name('site.login');

Route::get('/Painel', 'painel@painel')->name('site.painel');

//app
Route::prefix('/app')->group(function() {

    Route::get('/clientes', 'ClientesController@clientes')->name('app.clientes');

    Route::get('/fornecedores', 'FornecedoresController@index')->name('app.fornecedores');

    Route::get('/produtos', 'ProdutosController@produtos')->name('app.produtos');
});


Route::fallback(function() {
    echo 'A página acessda não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial.';
});


