<?php

namespace App\Http\Controllers;

use App\Fornecedores;
use Illuminate\Http\Request;

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
        $fornecedor->save();
        return redirect('/fornecedores');
    }



    public function show(Fornecedores $fornecedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function edit(Fornecedores $fornecedores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fornecedores $fornecedores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fornecedor = Fornecedores::find($id);
        if (isset($fornecedor)){
            $fornecedor->delete();
        }
        return redirect('/fornecedores');
    }
}
