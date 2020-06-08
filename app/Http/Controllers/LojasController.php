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


    public function edit(Lojas $lojas)
    {
        //
    }

    public function update(Request $request, Lojas $lojas)
    {
        //
    }


    public function destroy(Lojas $lojas)
    {
        //
    }
}
