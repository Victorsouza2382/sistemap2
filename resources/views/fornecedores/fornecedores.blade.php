@extends('layouts.admin')

@section('conteudo')
    <table class="table table-hover table-condensed table-bordered">
        <caption><label>Fornecedores</label></caption>
        <button style="float: right" class="btn btn-primary">Novo Fornecedor</button>
        <tr>
            <td>Nome</td>
            <td>Sobrenome</td>
            <td>Endereço</td>
            <td>Email</td>
            <td>Telefone</td>
            <td>CPF</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
			<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#abremodalFornecedoresUpdate"
                  onclick="adicionarDado('#')">
				<span class="fas fa-edit"></span>
			</span>
            </td>
            <td>
			<span class="btn btn-danger btn-xs" onclick="eliminar('#')">
				<span class="fas fa-trash"></span>
			</span>
            </td>
        </tr>
    </table>
@endsection
