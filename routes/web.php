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

// aula 22.11.2019 - passo 1
// primeiro o que o ususario digita, depois a pagina para que vai, e o arroba indica o metodo (que criamos) para chegar na pagina que queremos
//depois vai para a pasta controller
Route::get('/request/id/{id?}','HomeController@request');
// para receber id na url, colocamos o id. O id no bigode esta informando que vai receber uma variavel na url que eh o id que estamos colocando apos o request.

Route::get('/formulario','HomeController@exibirFormulario');
Route::post('/formulario','HomeController@cadastrarFormulario');

