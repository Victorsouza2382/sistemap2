@extends('layouts.admin')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="{{ route('vendas.store') }}" method="post">
                    @csrf

                    <label>Descrição</label>
                    <textarea readonly="" id="descricaoV" class="form-control input-sm"
                          rows="3" cols="20" style="width: 135%"></textarea>
                    <label>Selecionar Cliente</label>
                    <select class="form-control input-sm" id="cliente_id" name="cliente_id">
                    </select>
                    <label>Produto</label>
                    <select required name="produto_id" id="produto_id" class="form-control">
                    </select>
                    <label>Quantidade Estoque</label>
                    <input readonly="" type="number" class="form-control input-sm" id="quantidadeV">
                    <label>Preço</label>
                    <input readonly="" type="number" class="form-control input-sm" id="preco" name="preco">
                    <label>Quantidade Vendida</label>
                    <input type="number" class="form-control input-sm" id="quantidade" name="quantidade">
                    <p></p>
                    <button type="submit" class="btn btn-primary">Vender</button>
                    <span type="submit" class="btn btn-secondary" data-dismiss="modal">Fechar</span>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(function () {

            $.ajax({
                url: "/produtosAjax",
                type: "GET",
            }).done(function (response) {
                $("#produto_id").empty();
                $("#produto_id").append('<option value="">Selecione</option>');
                response.forEach(function (key) {
                    $("#produto_id").append("<option value='" + key.id + "'>" + key.nome + "</option>");
                    $("#produto_id").removeAttr("disabled");
                });
            });

            $("#produto_id").change(function () {
                let produto_id = $("select[name='produto_id'] option:selected").val();

                $.post(
                    "/carregaDetalhesProduto", {
                        "produto_id": produto_id,
                        "_token": "{{ csrf_token() }}",
                    }).done(function (response) {
                        $("#preco").val(response.preco);
                        $("#quantidadeV").val(response.quantidade);
                        $("#descricaoV").val(response.descricao);
                });
            });
            $.ajax({
                url: "/clientesAjax",
                type: "GET",
            }).done(function (response) {
                $("#cliente_id").empty();
                $("#cliente_id").append('<option value="">Selecione</option>');
                response.forEach(function (key) {
                    $("#cliente_id").append("<option value='" + key.id + "'>" + key.nome + "</option>");
                    $("#cliente_id").removeAttr("disabled");
                });
            });
        });
    </script>
@endsection
