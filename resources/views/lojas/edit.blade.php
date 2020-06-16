@extends('layouts.admin')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="{{ route('lojas.update', $lojas->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <label>Nome</label>
                    <input type="text" class="form-control input-sm" id="nome" name="nome" style="width: 150%">
                    <label>Descrição</label>
                    <input type="text" class="form-control input-sm" id="descricao" name="descricao" style="width: 150%">
                    <br><div class="col-xs-3">
                        <button type="submit" class="btn btn-primary pull-right" >Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
