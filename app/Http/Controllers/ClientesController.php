<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientesController extends Controller
{

    public function index()
    {
        $usuario = auth()->user();
        if(!!$usuario->is_admin) {
            $clientes = clientes::all();
        } else {
            $clientes  = Clientes::where('loja_id', '=', $usuario->loja_id)->get();
        }

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
    public function clientesAjax()
    {
        $select = Clientes::orderBy('nome', 'ASC')->get();
        return $select;
    }

    public function verificaEmailCliente(Request $request)
    {
        if(Clientes::where('email', '=', $request->email)->first()) {
            return array(
                "response" => "erro",
                "descricao" => "E-mail já existente !",
            );
        } else {
            return array(
                "response" => "sucesso",
                "descricao" => "",
            );
        }
    }

    public function verificaCPFCliente(Request $request)
    {
        if(Clientes::where('cpf', '=', $request->cpf)->first()) {
            return array(
                "response" => "erro",
                "descricao" => "CPF já existente !",
            );
        } else {
            return array(
                "response" => "sucesso",
                "descricao" => "",
            );
        }
    }
}
