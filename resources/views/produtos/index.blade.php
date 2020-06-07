@extends('layouts.admin')
@section('conteudo')
</table>
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label>Produtos </label></caption>

    <div class="row">
        <div class="col-sm-12">
            <a href="/produtos/create" type="button" class="btn btn-success">
                Novo produto
            </a>
        </div>
    </div>
    <thead>
    <tr>
        <td>Nome</td>
        <td>Descrição</td>
        <td>Quantidade</td>
        <td>Preço</td>
        <td>Imagem</td>
        <td>Categoria</td>
        <td>Editar</td>
        <td>Excluir</td>
    </tr>
    </thead>
    <tdbody>
        @foreach($produtos as $produto)
            <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->quantidade}}</td>
                <td>{{$produto->preco}}</td>
                <td><img width="80" height="80" src="">

                </td>
                <td></td>
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
    </tdbody>
</table>


@endsection
