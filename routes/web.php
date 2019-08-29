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

Route::get('/produtos', 'ProdutoController@lista');//->middleware('auth');
Route::get('/produtos/json', 'ProdutoController@listaJson');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::get('/produtos/remover/{id}', 'ProdutoController@remove');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');
Route::get('/produtos/editar/{id}', 'ProdutoController@editar')->where('id', '[0-9]+');
Route::post('/produtos/alterar/{id}', 'ProdutoController@alterar')->where('id', '[0-9]+');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sair', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/login');
});
