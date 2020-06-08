@extends('layouts.admin')

@section('conteudo')
    <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
        <caption><label>Lojas</label></caption>

        <div class="row">
            <div class="col-sm-12">
                <a href="/lojas/create" type="button" class="btn btn-success">
                    Nova Loja
                </a>
            </div>
        </div>

        <thead>

        <tr>
            <td>Nome</td>
            <td>Descrição</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>
        </thead>
        <tbody>
@foreach($lojas as $loja)
            <tr>
                <td>{{$loja->nome}}</td>
                <td>{{$loja->descricao}}</td>
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
