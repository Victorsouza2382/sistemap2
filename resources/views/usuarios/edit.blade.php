@extends('layouts.admin')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="{{ route('usuarios.update', $user->id) }}"  method="post">
                    @method('PUT')
                    @csrf
                    <label>Nome</label>
                    <input type="text" class="form-control input-sm" id="name" name="name"value="{{$user->name}}" style="width: 135%">
                    <label>Email</label>
                    <input type="email" class="form-control input-sm" id="email" name="email"value="{{$user->email}}" style="width: 135%">
                    <label>Loja</label>
                    <input type="number" class="form-control input-sm" id="loja_id" name="loja_id"value="{{$user->loja_id}}" style="width: 135%">
                    <label>Senha</label>
                    <input type="password" class="form-control input-sm" id="password" name="password" style="width: 135%">
                    <p></p>
                    <button type="submit"  class="btn btn-primary">Adicionar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
