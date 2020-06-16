@extends('layouts.admin')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="{{ route('produtos.update', $produto->id) }}"  method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <label>Nome</label>
                    <input type="text" class="form-control input-sm" id="nome" name="nome"value="{{$produto->nome}}" style="width: 135%">
                    <label>Descrição</label>
                    <textarea type="text" class="form-control input-sm" id="descricao"value="{{$produto->descricao}}" name="descricao" rows="3"
                              cols="20" style="width: 135%"></textarea>
                    <label>Categoria</label>
                    <select class="form-control input-sm" id="categoriaSelect"value="{{$produto->categoriaSelect}}" name="categoriaSelect"
                            style="width: 50%">
                        <option value="A">Selecionar Categoria</option>
                    </select>
                    <label>Quantidade</label>
                    <input type="number" class="form-control input-sm" id="quantidade"value="{{$produto->quantidade}}" name="quantidade"
                           style="width: 50%">
                    <label>Preço</label>
                    <input type="number" class="form-control input-sm" id="preco"value="{{$produto->preco}}" name="preco" style="width: 50%">
                    <label>Imagem</label>
                    <input type="file" id="imagem"value="{{$produto->imagem}}" name="imagem">
                    <br><div class="col-xs-3">
                        <button type="submit" class="btn btn-primary pull-right" >Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
