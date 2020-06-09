@extends('layouts.admin')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="/usuarios"  method="post">@csrf

                    <label>Nome</label>
                    <input type="text" class="form-control input-sm" id="name" name="name" style="width: 135%">
                    <label>Email</label>
                    <input type="email" class="form-control input-sm" id="email" name="email" style="width: 135%">
                    <label>Senha</label>
                    <input type="password" class="form-control input-sm" id="password" name="password" style="width: 135%">
                    <p></p>
                    <button type="submit"  class="btn btn-primary">Adicionar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
