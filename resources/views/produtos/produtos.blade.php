@extends('layouts.admin')
@section('conteudo')
    </table>
    <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
        <caption><label>Produtos </label></caption>
        <button style="float: right"  class="btn btn-primary">Novo Produto</button>
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
