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
     'imagens' => 'ImagensController'
 ]);
