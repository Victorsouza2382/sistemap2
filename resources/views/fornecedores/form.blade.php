@extends('layouts.admin')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="/fornecedores" method="post">@csrf
                    <label for="nome">nome</label>
                    <input type="text" class="form-control" id="nome" name="nome"  style="width: 150%">
                    <label for="sobrenome">sobrenome</label>
                    <input type="text" class="form-control" id="sobrenome" name="sobrenome"  style="width: 150%">
                    <label>Cep</label>
                    <input type="text" class="form-control input-sm" id="cep" name="cep" style="width: 150%">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco"  style="width: 150%">
                    <label for="email">email</label>
                    <input type="text" class="form-control" id="email" name="email"  style="width: 150%">
                    <label for="telefone">telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone"  style="width: 150%">
                    <label for="cpf">cpf</label>
                    <input type="text" class="form-control" id="cpf" name="cpf"  style="width: 150%">
                    <br><div class="col-xs-3">
                        <button type="submit" class="btn btn-primary pull-right" >Adicionar</button>
                    </div>
                </form>
                </form>
            </div>
        </div>
    </div>
@endsection
