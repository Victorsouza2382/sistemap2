@extends('layouts.admin')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="/produtos"  method="post" enctype="multipart/form-data">@csrf

                    <label>Nome</label>
                    <input type="text" class="form-control input-sm" id="nome" name="nome" style="width: 135%">
                    <label>Descrição</label>
                    <textarea type="text" class="form-control input-sm" id="descricao" name="descricao" rows="3"
                              cols="20" style="width: 135%"></textarea>
                    <label>Categoria</label>
                    <select required name="categoria_id" id="categoria_id" class="form-control">
                    </select>
                    <label>Quantidade</label>
                    <input type="number" class="form-control input-sm" id="quantidade" name="quantidade"
                           style="width: 50%">
                    <label>Preço</label>
                    <input type="number" class="form-control input-sm" id="preco" name="preco" style="width: 50%">
                    <label>Imagem</label>
                    <input type="file" id="imagem" name="imagem">
                    <p></p>
                    <button type="submit"  class="btn btn-primary">Adicionar</button>
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
                    $("#categoria_id").append("<option value='" + key.id + "'>" + key.nome_categoria + "</option>");
                    $("#categoria_id").removeAttr("disabled");
                });
            });
        });
    </script>
@endsection
