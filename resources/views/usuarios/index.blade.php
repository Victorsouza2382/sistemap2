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
                <td><br>
                    <span class="btn btn-warning btn-xs">
				    <span class="fas fa-edit"></span>
			        </span>
                </td>
                <td><br>
                    <span class="btn btn-danger btn-xs">
				<span class="fas fa-trash"></span>
			        </span>
                </td>
            </tr>
        @endforeach
    </tdbody>

</table>


@endsection
