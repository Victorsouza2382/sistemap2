@extends('layouts.admin')
@section('conteudo')
</table>
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label>Usúarios </label></caption>

    <div class="row">
        <div class="col-sm-12">
            <a href="/usuarios/create" type="button" class="btn btn-success">
                Novo Usuario
            </a>
        </div>
    </div>
    <thead>
    <tr>
        <td>Nome</td>
        <td>Email</td>
        <td>Loja</td>
        <td>editar</td>
        <td>excluir</td>
    </tr>
    </thead>
    <tdbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->lojas->nome}}</td>
               <td>
                    <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-sm btn-warning">Editar</a>
                </td>
                <td>
                    <a href="usuarios/apagar/{{$user->id}}" class="btn btn-sm btn-danger">Apagar</a>
                </td>
            </tr>
        @endforeach
    </tdbody>

</table>


@endsection
