<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientesController extends Controller
{

    public function index()
    {
        $clientes = clientes::all();
        return view('clientes.index', compact('clientes'));
    }


    public function create()
    {
        return view('clientes.form');
    }

    public function store(Request $request)
    {

        $cliente = new clientes($request->all());
        $cliente->loja_id = Auth::user()->loja_id;
        $cliente->save();
        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
    }


    public function edit($id)
    {
        $cliente = Clientes::find($id);
        if (isset($cliente)){
            return view('/clientes.edit', compact('cliente'));
        }
        return redirect('/clientes');
    }


    public function update(Request $request,$id)
    {
        $cliente = Clientes::find($id);
        if (isset($cliente)){
            $cliente->nome = $request->input('nome');
            $cliente->sobrenome = $request->input('sobrenome');
            $cliente->cep = $request->input('cep');
            $cliente->endereco = $request->input('endereco');
            $cliente->email = $request->input('email');
            $cliente->telefone = $request->input('telefone');
            $cliente->cpf = $request->input('cpf');
            $cliente->save();
        }
        return redirect('/clientes');
    }


    public function destroy($id)
    {
        $cliente = Clientes::find($id);
        if (isset( $cliente)){
            $cliente->delete();
        }
        return redirect('/clientes');
    }
}
