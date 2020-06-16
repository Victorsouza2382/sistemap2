<?php

namespace App\Http\Controllers;

use App\Fornecedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FornecedoresController extends Controller
{

    public function index()
    {
    $fornecedores = Fornecedores::all();
    return view('fornecedores.index', compact('fornecedores'));
    }


    public function create()
    {
        return view('fornecedores.form');
    }


    public function store(Request $request)
    {

        $fornecedor = new Fornecedores($request->all());
        $fornecedor->loja_id = Auth::user()->loja_id;
        $fornecedor->save();
        return redirect('/fornecedores');
    }



    public function show(Fornecedores $fornecedores)
    {
        //
    }


    public function edit($id)
    {
        $fornecedor = Fornecedores::find($id);
        if (isset($fornecedor)){
            return view('/fornecedores.edit', compact('fornecedor'));
        }
        return redirect('/fornecedores');
    }


    public function update(Request $request, $id)
    {
        $fornecedor = Fornecedores::find($id);
        if (isset($fornecedor)){
            $fornecedor->nome = $request->input('nome');
            $fornecedor->sobrenome = $request->input('sobrenome');
            $fornecedor->cep = $request->input('cep');
            $fornecedor->endereco = $request->input('endereco');
            $fornecedor->email = $request->input('email');
            $fornecedor->telefone = $request->input('telefone');
            $fornecedor->cpf = $request->input('cpf');
            $fornecedor->save();
        }
        return redirect('/fornecedores');
    }


    public function destroy($id)
    {
        $fornecedor = Fornecedores::find($id);
        if (isset($fornecedor)){
            $fornecedor->delete();
        }
        return redirect('/fornecedores');
    }
}
