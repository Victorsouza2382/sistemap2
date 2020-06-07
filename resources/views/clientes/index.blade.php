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
			<span class="btn btn-warning btn-xs">
				<span class="fas fa-edit"></span>
			</span>
            </td>
            <td>
			<span class="btn btn-danger btn-xs">
				<span class="fas fa-trash"></span>
			</span>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endsection
