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


// rota criada para a home - teste 01
// Route::get('/home', function () {
//    echo "Hellou world";
// });

// criando a funcao para dizer qual metodo quero que a classe execute: 'nome do controle - pasta que eh classe @ nome do metodo - funcao= retorna na web 'Estou na home''
// sempre testar antes no terminal se o servidor estah conectado, exceto se forem testes no mesmo arquivo: php artisan serve
Route::get('/home', 'HomeController@viewHome');

Route::get('/cidade', 'CidadeController@viewCidade');

