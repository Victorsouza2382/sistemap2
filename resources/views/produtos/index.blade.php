@extends('layouts.admin')
@section('conteudo')
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
                    <td>
                        @if($produto->imagem)
                            <img width="90px" height="90px" src="{{asset('storage/' . $produto->imagem)}}"
                                 alt="{{$produto->nome}}">
                        @endif
                    </td>
                    <td>{{ $produto->nome_categoria }}</td>
                    <td>
                        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    </td>
                    <td>
                        <a href="categorias/apagar/{{$produto->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
            @endforeach
        </tdbody>
    </table>


@endsection
