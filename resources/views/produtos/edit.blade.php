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
                    <textarea type="text" class="form-control input-sm" id="descricao" name="descricao" rows="3"
                              cols="20" style="width: 135%">{{$produto->descricao}}</textarea>
                    <label>Categoria</label>
                    <select required name="categoria_id" id="categoria_id" class="form-control">
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
@section('js')
    <script>
        $(function () {
            $.ajax({
                url: "/categoriasAjax",
                type: "GET",
            }).done(function (response) {
                $("#categoria_id").empty();
                $("#categoria_id").append('<option value="">Selecione</option>');
                response.forEach(function (key) {
                    let selected = '';
                    if ( key.id == {{ $produto->categoria_id }} ) {
                        selected = 'selected';
                    }
                    $("#categoria_id").append("<option " + selected + " value='" + key.id + "'>" + key.nome_categoria + "</option>");
                    $("#categoria_id").removeAttr("disabled");
                });
            });
        });
    </script>
@endsection
