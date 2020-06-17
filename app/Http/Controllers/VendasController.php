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


    public function edit($id)
    {
        $venda = Vendas::find($id);
        if (isset($venda)){
            return view('/vendas.edit', compact('venda'));
        }
        return redirect('/vendas');
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $venda = Vendas::find($id);
        if (isset($venda)) {
            $venda->delete();
        }
        return redirect('/vendas');
    }
}
