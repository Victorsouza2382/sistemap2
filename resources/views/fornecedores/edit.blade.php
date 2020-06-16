@extends('layouts.admin')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="{{ route('fornecedores.update', $fornecedor->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <label>Nome</label>
                    <input type="text" class="form-control input-sm" id="nome" name="nome" value="{{$fornecedor->nome}}" style="width: 150%">
                    <label>Sobrenome</label>
                    <input type="text" class="form-control input-sm" id="sobrenome" name="sobrenome" value="{{$fornecedor->sobrenome}}"
                           style="width: 150%">
                    <label>Cep</label>
                    <input type="text" class="form-control input-sm" id="cep" name="cep" value="{{$fornecedor->cep}}"style="width: 150%">
                    <label>Endereco</label>
                    <input type="text" class="form-control input-sm" id="endereco" name="endereco"value="{{$fornecedor->endereco}}" style="width: 150%">
                    <label>Email</label>
                    <input type="email" class="form-control input-sm" id="email" name="email"value="{{$fornecedor->email}}" style="width: 150%">
                    <label>Telefone</label>
                    <input type="number" class="form-control input-sm" id="telefone" name="telefone"value="{{$fornecedor->telefone}}" style="width: 50%">
                    <label>CPF</label>
                    <input type="number" class="form-control input-sm" id="cpf" name="cpf"value="{{$fornecedor->cpf}}" style="width: 50%">
                    <br><div class="col-xs-3">
                        <button type="submit" class="btn btn-primary pull-right" >Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>


        $(function () {
            $('#cep').change(function () {
                cep = $('#cep').val()

                $.ajax({
                    url: 'https://viacep.com.br/ws/' + cep + '/json/',
                    success: function (dados) {
                        $('#endereco').val(dados.logradouro)
                    }
                })
            })
        });
    </script>
@endsection
