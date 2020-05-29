<?php

namespace App\Http\Controllers;

use App\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{

    public function index()
    {
        $categoria = Categorias::all();
        return view('categorias.categorias');
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        //
    }


    public function show(Categorias $categorias)
    {
        //
    }

    public function edit(Categorias $categorias)
    {
        //
    }


    public function update(Request $request, Categorias $categorias)
    {
        //
    }


    public function destroy(Categorias $categorias)
    {
        //
    }
}
