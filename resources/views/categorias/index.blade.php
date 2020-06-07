@extends('layouts.admin')

@section('conteudo')
    <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
        <caption><label>Categorias </label></caption>
        <!-- Button trigger modal -->
        <div class="row">
            <div class="col-sm-12">
                <a href="/categorias/create" class="btn btn-success">
                    Nova categoria
                </a>
            </div>
        </div>
        <thead>
        <tr>
            <td>Categoria</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{$categoria->nome_categoria}}</td>
                <td>
                <span class="btn btn-warning btn-xs">
				<span class="fas fa-edit"></span>
			</span>
                </td>
                <td><span class="btn btn-danger btn-xs">
				<span class="fas fa-trash"></span>
			</span>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
