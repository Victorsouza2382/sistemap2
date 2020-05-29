@extends('layouts.admin')

@section('conteudo')
    <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
        <caption><label>Categorias </label></caption>
        <button style="float: right"  class="btn btn-primary">Nova Categoria</button>
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
