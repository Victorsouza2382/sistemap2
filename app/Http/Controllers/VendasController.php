<?php

namespace App\Http\Controllers;

use App\Vendas;
use Illuminate\Http\Request;

class VendasController extends Controller
{

    public function index()
    {
        $vendas = Vendas::all();
        return view('vendas.index',compact('vendas'));
    }


    public function create()
    {
        return view('vendas.form');
    }


    public function store(Request $request)
    {
        $venda = new Vendas($request->all());
        $venda->save();
        return redirect('/vendas');
    }


    public function show(Vendas $vendas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendas  $vendas
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendas $vendas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendas  $vendas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendas $vendas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendas  $vendas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendas $vendas)
    {
        //
    }
}
