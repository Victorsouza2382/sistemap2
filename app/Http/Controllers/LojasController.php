<?php

namespace App\Http\Controllers;

use App\Lojas;
use Illuminate\Http\Request;

class LojasController extends Controller
{

    public function index()
    {
        $lojas = Lojas::all();
        return view('lojas.index', compact('lojas'));
    }


    public function create()
    {
        return view('lojas.form');
    }


    public function store(Request $request)
    {
        $lojas = new lojas($request->all());
        $lojas->save();
        return redirect('/lojas');
    }


    public function show(Lojas $lojas)
    {
        //
    }


    public function edit($id)
    {
        $lojas = Lojas::find($id);
        if (isset($lojas)){
            return view('/lojas.edit', compact('lojas'));
        }
        return redirect('/lojas');
    }


    public function update(Request $request, $id)
    {
        $lojas = Lojas::find($id);
        if (isset($lojas)){
            $lojas->nome = $request->input('nome');
            $lojas->descricao = $request->input('descricao');
            $lojas->save();
        }
        return redirect('/lojas');
    }


    public function destroy($id)
    {
        $lojas = Lojas::find($id);
        if (isset($lojas)){
            $lojas->delete();
        }
        return redirect('/lojas');
    }
}
