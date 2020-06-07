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
                    <select class="form-control input-sm" id="categoriaSelect" name="categoriaSelect"
                            style="width: 50%">
                        <option value="A">Selecionar Categoria</option>
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
