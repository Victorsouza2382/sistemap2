@extends('layouts.admin')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="/vendas/create" type="button" class="btn btn-success">
                    Nova Venda
                </a>
            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="table-responsive">
                <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
                    <caption><label>Vendas</label></caption>
                    <thead>
                    <tr>
                        <td>Código</td>
                        <td>Data</td>
                        <td>Produto</td>
                        <td>Cliente</td>
                        <td>Preço</td>
                        <td>Quantidade Vendida</td>
                    </tr>
                    </thead>
                    <tdbody>
                        @foreach($vendas as $venda)
                    <tr>
                        <td>{{$venda->id}}</td>
                        <td>{{$venda->created_at}}</td>
                        <td>{{$venda->produto_id}}</td>
                        <td>{{$venda->cliente_id}}</td>
                        <td>{{$venda->preco}}</td>
                        <td>{{$venda->quantidade}}</td>
                    </tr>
                        @endforeach
                    </tdbody>
                </table>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>

@endsection
