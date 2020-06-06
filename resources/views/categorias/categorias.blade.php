@extends('layouts.admin')

@section('conteudo')
    <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
        <caption><label>Categorias </label></caption>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#staticBackdrop" >
            Nova Categoria
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content ">
                    <div class="modal-header btn-primary">
                        <h1 class="modal-title" id="staticBackdropLabel">Categorias</h1>
                    </div>
                    <div class="modal-body">
                        <div class="container">

                            <div class="row">
                                <div class="col-sm-4">
                                    <form id="frmCategorias">
                                        <label>Categoria</label>
                                        <input type="text" class="form-control input-sm" name="categoria" id="categoria" style="width: 150%">
                                        <br><div class="col-xs-3">
                                             <span class="btn btn-primary pull-right" id="btnAdicionarCategoria ">Adicionar</span>
                                        </div>
                                        <div>
                                            <span type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</span>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-6">
                                    <div id="tabelaCategoriaLoad"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <tr>
            <td>Categoria</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>

        <tr>
            <td> </td>
            <td>
			<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#atualizaCategoria"
                  onclick="adicionarDado('','')">
				<span class="fas fa-edit"></span>
			</span>
            </td>
            <td>
			<span class="btn btn-danger btn-xs" onclick="eliminaCategoria('')">
				<span class="fas fa-trash"></span>
			</span>
            </td>
        </tr>
    </table>

@endsection
