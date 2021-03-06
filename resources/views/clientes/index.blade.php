@extends('layouts.admin')

@section('conteudo')
    <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
        <caption><label>Clientes</label></caption>

        <div class="row">
            <div class="col-sm-12">
                <a href="/clientes/create" type="button" class="btn btn-success">
                    Novo cliente
                </a>
            </div>
        </div>

        <thead>
        <tr>
            <td>Nome</td>
            <td>Sobrenome</td>
            <td>Endereço</td>
            <td>Email</td>
            <td>Telefone</td>
            <td>CPF</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->sobrenome}}</td>
            <td>{{$cliente->endereco}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{$cliente->telefone}}</td>
            <td>{{$cliente->cpf}}</td>
            <td>
                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-warning">Editar</a>
            </td>
            <td>
                <a href="clientes/apagar/{{$cliente->id}}" class="btn btn-sm btn-danger">Apagar</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endsection
