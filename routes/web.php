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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*      
 *              Anotacoes de comandos de rotas
 *  
 * middleware = cria a rota com seguranca (para proteger a rota), segundo o padrao do Laravel
 * prefix     = delimita um prefixo no nome da rota passada.
 * namespace  = usado para pegar o Controller do nameSpace (para nao precisar escrever "Admin/ArtigosController" na rota).
 * 
 */
Route::middleware(["auth"])->prefix("admin")->namespace("Admin")->group(function(){
    Route::resource('artigos', 'ArtigosController');
});
