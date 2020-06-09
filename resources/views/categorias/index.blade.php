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
                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-sm btn-warning">Editar</a>
                </td>
                <td>
                    <a href="categorias/apagar/{{$categoria->id}}" class="btn btn-sm btn-danger">Apagar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
