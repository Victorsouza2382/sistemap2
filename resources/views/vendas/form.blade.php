@extends('layouts.admin')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form id="frmVendasProdutos">

                    <label>Descrição</label>
                    <textarea readonly="" id="descricaoV" name="descricaoV" class="form-control input-sm" rows="3" cols="20" style="width: 135%"></textarea>
                    <label>Selecionar Cliente</label>
                    <select class="form-control input-sm" id="clienteVenda" name="clienteVenda">
                        <option value="A">Selecionar</option>
                        <option value="0">Sem Clientes</option>
                        <option value=""></option>
                    </select>
                    <label>Produto</label>
                    <select class="form-control input-sm" id="produtoVenda" name="produtoVenda">
                        <option value="A">Selecionar</option>
                    </select>
                    <label>Quantidade Estoque</label>
                    <input readonly="" type="number" class="form-control input-sm" id="quantidadeV" name="quantidadeV">
                    <label>Preço</label>
                    <input readonly="" type="number" class="form-control input-sm" id="precoV" name="precoV">
                    <label>Quantidade Vendida</label>
                    <input type="number" class="form-control input-sm" id="quantV" name="quantV">
                    <p></p>
                    <span id="btnAddVenda" class="btn btn-primary">Vender</span>
                    <span type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</span>
                </form>
            </div>
        </div>
    </div>
@endsection
