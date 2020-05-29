<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicial', function () {
    return view('index');
});

Auth::routes();

/*Route::resource('/home', 'HomeController');
Route::resource('/produtos', 'Produtos@Controller');*/
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
