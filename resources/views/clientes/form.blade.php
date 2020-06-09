@extends('layouts.admin')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="/clientes" method="post">@csrf
                    <label>Nome</label>
                    <input type="text" class="form-control input-sm" id="nome" name="nome" style="width: 150%">
                    <label>Sobrenome</label>
                    <input type="text" class="form-control input-sm" id="sobrenome" name="sobrenome" style="width: 150%">
                    <label>Cep</label>
                    <input type="text" class="form-control input-sm" id="cep" name="cep" style="width: 150%">
                    <label>Bairro</label>
                    <input type="text" class="form-control input-sm" id="bairro" name="bairro" style="width: 150%">
                    <label>Email</label>
                    <input type="email" class="form-control input-sm" id="email" name="email" style="width: 150%">
                    <label>Telefone</label>
                    <input type="number" class="form-control input-sm" id="telefone" name="telefone" style="width: 50%">
                    <label>CPF</label>
                    <input type="number" class="form-control input-sm" id="cpf" name="cpf" style="width: 50%">
                    <p></p>
                    <button type="submit" class="btn btn-primary" id="btnAdicionarCliente">Salvar</button>

                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')

    @endsection






