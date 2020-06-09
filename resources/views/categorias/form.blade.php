@extends('layouts.admin')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="{{ route('categorias.store') }}" method="post">@csrf
                    <label for="categoria">Categoria</label>
                    <input type="text" class="form-control" id="nome_categoria" name="nome_categoria"  style="width: 150%">
                    <br><div class="col-xs-3">
                        <button type="submit" class="btn btn-primary pull-right" >Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
