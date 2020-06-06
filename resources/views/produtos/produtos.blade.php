@extends('layouts.admin')
@section('conteudo')
    </table>
    <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
        <caption><label>Produtos </label></caption>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
            Novo Produto
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adicionar Produto</h5>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <h1>Produtos</h1>
                            <div class="row">
                                <div class="col-sm-4">
                                    <form id="frmProdutos" enctype="multipart/form-data">

                                        <label>Nome</label>
                                        <input type="text" class="form-control input-sm" id="nome" name="nome" style="width: 135%">
                                        <label>Descrição</label>
                                        <textarea type="text" class="form-control input-sm" id="descricao" name="descricao" rows="3" cols="20" style="width: 135%"></textarea>
                                        <label>Categoria</label>
                                        <select class="form-control input-sm" id="categoriaSelect" name="categoriaSelect" style="width: 50%">
                                            <option value="A">Selecionar Categoria</option>
                                        </select>
                                        <label>Quantidade</label>
                                        <input type="number" class="form-control input-sm" id="quantidade" name="quantidade" style="width: 50%">
                                        <label>Preço</label>
                                        <input type="number" class="form-control input-sm" id="preco" name="preco" style="width: 50%">
                                        <label>Imagem</label>
                                        <input type="file" id="imagem" name="imagem">
                                        <p></p>
                                        <span id="btnAddProduto" class="btn btn-primary">Adicionar</span>
                                        <span type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</span>
                                    </form>
                                </div>
                                <div class="col-sm-8">
                                    <div id="tabelaProdutosLoad"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

        <tr>
            <td> </td>
            <td>

            </td>
            <td></td>
            <td>

            </td>
            <td><img width="80" height="80" src="">

            </td>
            <td></td>
            <td>
                <span data-toggle="modal" data-target="#abremodalUpdateProduto" class="btn btn-warning btn-xs"
                      onclick="addDadosProduto('')">
				<span class="fas fa-edit"></span>
			</span>
            </td>
            <td><span class="btn btn-danger btn-xs" onclick="eliminarProduto('')">
				<span class="fas fa-trash"></span>
			</span>
            </td>
        </tr>
    </table>


@endsection
