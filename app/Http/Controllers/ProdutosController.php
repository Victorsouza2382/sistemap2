<?php

namespace App\Http\Controllers;

use App\Produtos;
use Illuminate\Http\Request;

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
       return view('produtos.index',compact('produtos'));
    }


    public function create()
    {
        return view('produtos.form');
    }


    public function store(Request $request)
    {
        ddd($request);
        $produto = new produtos($request->all());
        $produto->save();
        return redirect('/produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function show(Produtos $produtos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function edit(Produtos $produtos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produtos $produtos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produtos $produtos)
    {
        //
    }
}
