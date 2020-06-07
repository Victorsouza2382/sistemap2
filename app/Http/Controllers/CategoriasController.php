<?php

namespace App\Http\Controllers;

use App\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{

    public function index()
    {
        $categorias = Categorias::all();
        return view('categorias.index',compact('categorias'));
    }


    public function create()
    {
        return view('categorias.form');
    }


    public function store(Request $request)
    {

        $categoria = new categorias($request->all());
        $categoria->save();
        return redirect('/categorias');
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
