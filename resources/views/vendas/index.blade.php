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
                    <tr>
                        <td>Código</td>
                        <td>Data</td>
                        <td>Cliente</td>
                        <td>Total da Compra</td>
                        <td>Comprovante</td>
                        <td>Relatório</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <a href="#"
                               class="btn btn-primary btn-sm">
                                Comprovante <span class="fas fa-file-pdf-o"></span>
                            </a>
                        </td>
                        <td>
                            <a href="#"
                               class="btn btn-primary btn-sm">
                                Relatório <span class="fas fa-file-pdf-o" aria-hidden="true"></span>
                            </a>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>

@endsection
