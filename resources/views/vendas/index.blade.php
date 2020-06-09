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
                        <td>Cliente</td>
                        <td>Valor da Compra</td>
                    </tr>
                    </thead>
                    <tdbody>
                        @foreach($vendas as $venda)
                    <tr>
                        <td>{{$venda->id}}</td>
                        <td>{{$venda->created_at}}</td>
                        <td>{{$venda->cliente_id->nome}}</td>
                        <td>{{$venda->total_venda}}</td>
                    </tr>
                        @endforeach
                    </tdbody>
                </table>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>

@endsection
