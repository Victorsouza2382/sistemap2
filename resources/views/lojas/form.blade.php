@extends('layouts.admin')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="/lojas" method="post">@csrf
                    <label>Nome</label>
                    <input type="text" class="form-control input-sm" id="nome" name="nome" style="width: 150%">
                    <label>Descrição</label>
                    <input type="text" class="form-control input-sm" id="descricao" name="descricao" style="width: 150%">
                    <p></p>
                    <button type="submit" class="btn btn-primary" id="btnAdicionarCliente">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
