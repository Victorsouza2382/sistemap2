<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = produtos::all();
        return view('produtos.index', compact('produtos'));
    }


    public function create()
    {
        return view('produtos.form');
    }


    public function store(Request $request)
    {
        $produto = new produtos($request->all());
        $produto->loja_id = Auth::user()->loja_id;


        if($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $aValidos =[

                'image/jpeg',
                'image/png',
                'image/gif',
                'image/bmp'
            ];
            if(in_array($request->file('imagem')->getMimeType(),$aValidos)){
                $imagem = $request->file('imagem')->store('imagens');
                $produto->imagem = $imagem;
            }
        }

        $produto->save();
        return redirect('/produtos');
    }


    public function show(Produtos $produtos)
    {
        //
    }


    public function edit($id)
    {
        $produto = Produtos::find($id);
        if (isset($produto)){
            return view('/produtos.edit', compact('produto'));
        }
        return redirect('/produtos');
    }


    public function update(Request $request, $id)
    {
        $produto = Produtos::find($id);
        if (isset($produto)){
            $produto->nome = $request->input('nome');
            $produto->descricao = $request->input('descricao');
            $produto->quantidade = $request->input('quantidade');
            $produto->preco = $request->input('preco');
            $produto->imagem = $request->input('imagem');
            $produto->categoria = $request->input('categoria');
            $produto->save();
        }
        return redirect('/produtos');
    }


    public function destroy($id)
    {
        $produto = Produtos::find($id);
        if (isset($produto)){
            $produto->delete();
        }
        return redirect('/produtos');
    }
}
