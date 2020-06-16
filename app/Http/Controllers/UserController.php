<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('usuarios.index', compact('users'));
    }

    public function create()
    {
        return view('usuarios.form');
    }


    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->loja_id = Auth::user()->loja_id;
        $user->save();
        return redirect('/usuarios');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = User::find($id);
        if (isset($user)){
            return view('/usuarios.edit', compact('user'));
        }
        return redirect('/usuarios');
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (isset($user)){
            $user->nome = $request->input('name');
            $user->sobrenome = $request->input('email');
            $user->save();
        }
        return redirect('/usuarios');
    }


    public function destroy($id)
    {
        $user = User::find($id);
        if (isset($user)){
            $user->delete();
        }
        return redirect('/usuarios');
    }
}
