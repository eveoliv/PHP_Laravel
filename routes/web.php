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

// Route::get('/', function () {
//     return '<h1>Primeira lógica com Laravel</h1>';
// });

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/json', 'ProdutoController@listaJson');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::get('/produtos/remover/{id}', 'ProdutoController@remove');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');
Route::post('/produtos/adiciona/{id}', 'ProdutoController@adiciona');
Route::get('/produtos/altera/{id}', 'ProdutoController@altera')->where('id', '[0-9]+');