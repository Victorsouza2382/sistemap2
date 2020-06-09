<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resources([
    'home' => 'HomeController',
    'categorias' => 'CategoriasController',
    'produtos' => 'ProdutosController',
    'clientes' => 'ClientesController',
    'lojas' => 'LojasController',
    'vendas' => 'VendasController',
    'fornecedores' => 'FornecedoresController',
    'usuarios' => 'UserController'
]);
// apagando via get
Route::get('/categorias/apagar/{id}', 'CategoriasController@destroy');
Route::get('/produtos/apagar/{id}', 'ProdutosController@destroy');
Route::get('/clientes/apagar/{id}', 'ClientesController@destroy');
Route::get('/lojas/apagar/{id}', 'LojasController@destroy');
Route::get('/vendas/apagar/{id}', 'VendasController@destroy');
Route::get('/fornecedores/apagar/{id}', 'FornecedoresController@destroy');
Route::get('/usuarios/apagar/{id}', 'UserController@destroy');



