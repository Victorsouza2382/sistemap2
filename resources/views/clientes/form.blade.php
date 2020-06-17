@extends('layouts.admin')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="/clientes" method="post">@csrf
                    <label>Nome</label>
                    <input type="text" class="form-control input-sm" id="nome" name="nome" style="width: 150%">
                    <label>Sobrenome</label>
                    <input type="text" class="form-control input-sm" id="sobrenome" name="sobrenome"
                           style="width: 150%">
                    <label>Cep</label>
                    <input type="text" class="form-control input-sm" id="cep" name="cep" style="width: 150%">
                    <label>Endereco</label>
                    <input type="text" class="form-control input-sm" id="endereco" name="endereco" style="width: 150%">
                    <label>Email</label>
                    <input type="email" class="form-control input-sm" id="email" name="email" style="width: 150%">
                    <label>Telefone</label>
                    <input type="number" class="form-control input-sm" id="telefone" name="telefone" style="width: 50%">
                    <label>CPF</label>
                    <input type="number" class="form-control input-sm" id="cpf" name="cpf" style="width: 50%">
                    <p></p>
                    <button type="submit" class="btn btn-primary" id="btnAdicionarCliente">Salvar</button>

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

        $("#email").change(function () {
            $.post(
                "/verificaEmailCliente", {
                    "email": $(this).val(),
                    "_token": "{{ csrf_token() }}",
                }).done(function (data) {
                    if (data.response == 'erro') {
                        alert(data.descricao);
                        $("#email").val("");
                        $("#email").focus();
                    }
            });
        });
        $("#cpf").change(function () {
            $.post(
                "/verificaCPFCliente", {
                    "cpf": $(this).val(),
                    "_token": "{{ csrf_token() }}",
                }).done(function (data) {
                    if (data.response == 'erro') {
                        alert(data.descricao);
                        $("#cpf").val("");
                        $("#cpf").focus();
                    }
            });
        });

    </script>

@endsection
