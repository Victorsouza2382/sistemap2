<?php

namespace App\Http\Controllers;

use App\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $categoriaId = Auth::user()->loja_id;
        $categoriaId;
        $categoria->save();
        return redirect('/categorias');
    }


    public function show(Categorias $categorias)
    {
        //
    }

    public function edit($id)
    {
        $categoria = Categorias::find($id);
        if (isset($categoria)){
            return view('/categorias.edit', compact('categoria'));
        }
        return redirect('/categorias');
    }


    public function update(Request $request, $id)
    {
        $categoria = Categorias::find($id);
        if (isset($categoria)){
            $categoria->nome_categoria = $request->input('nome_categoria');
            $categoria->save();
        }
        return redirect('/categorias');
    }


    public function destroy($id)
    {
        $categoria = Categorias::find($id);
        if (isset($categoria)){
            $categoria->delete();
        }
        return redirect('/categorias');
    }
}
