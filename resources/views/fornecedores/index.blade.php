@extends('layouts.admin')

@section('conteudo')
    <table class="table table-hover table-condensed table-bordered">
        <caption><label>fornecedores</label></caption>

        <div class="row">
            <div class="col-sm-12">
                <a href="/fornecedores/create" type="button" class="btn btn-success">
                    Novo fornecedor
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
        <tdbody>
            @foreach($fornecedores as $fornecedor)
                <tr>
                    <td>{{$fornecedor->nome}}</td>
                    <td>{{$fornecedor->sobrenome}}</td>
                    <td>{{$fornecedor->endereco}}</td>
                    <td>{{$fornecedor->email}}</td>
                    <td>{{$fornecedor->telefone}}</td>
                    <td>{{$fornecedor->cpf}}</td>
                    <td>
                        <a href="categorias/editar/{{$fornecedor->id}}" class="btn btn-sm btn-warning">Editar</a>
                    </td>
                    <td>
                        <a href="categorias/apagar/{{$fornecedor->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
            @endforeach
        </tdbody>
    </table>
@endsection

@section('js')


@stop
