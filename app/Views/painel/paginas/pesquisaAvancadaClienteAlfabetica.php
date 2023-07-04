<div class="container mb-5">

    <div class="row d-flex justify-content-start mt-5">
        <div class="col-md-6 d-flex flex-row">
            <div class="row">
                <div class="col">
                    <a class="btn d-flex justify-content-center align-items-center lp-btn-liderpro m-2 <?= $dados['tituloBreadcrumb'] == 'ordemAlfabetica' ? 'lp-btn-liderpro-active' : ''; ?>" href="<?= URL . '/Paginas/pesquisaAvancadaClienteAlfabetica' ?>" role="button">POR ORDEM ALFABÉTICA</a>
                </div>
                <div class="col">
                    <a class="btn d-flex justify-content-center align-items-center lp-btn-liderpro m-2 <?= $dados['tituloBreadcrumb'] == 'ordemSegmento' ? 'lp-btn-liderpro-active' : ''; ?>" href="<?= URL . '/Paginas/pesquisaAvancadaClientePorSegmento' ?>" role="button">POR ORDEM DE SEGMENTO</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-end align-items-center">
            <div class="input-group">
                <input type="text" class="form-control" id="pesquisarClienteAlfabeto" placeholder="Pesquise pelo nome da empresa">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex flex-column mt-5">
        <div class="mb-3 d-flex justify-content-between" id="divResultadoAlfabeto">
        </div>
        <div class="lp-container-logos-avancado" id="divResultadoAjaxAlfabetica">
            <p style="color: gray;" class="p-3">Escolha uma opção de filtro</p>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        alteraCorLetraSelecionada();
        $(".opcao-alfabetica").click(function() {
            var letra_alfabeto = $(this).attr('id');
            if (letra_alfabeto != "") {
                pesquisarClientePorAlfabetoLetraSelecionada(letra_alfabeto);
                alteraCorLetraSelecionada(letra_alfabeto);
            } else {
                pesquisarClientePorAlfabetoLetraSelecionada();
            }
        });


        $("#pesquisarClienteAlfabeto").keyup(function() {
            var ds_nome_cliente = $(this).val();
            if (ds_nome_cliente != "") {
                pesquisarClienteAlfabeto(ds_nome_cliente);
            } else {
                pesquisarClienteAlfabeto();
            }
        });

    });

    function pesquisarClientePorAlfabetoLetraSelecionada(letra_alfabeto) {
        $.ajax({
            url: '<?php echo URL . '/Paginas/buscaAjaxTabelaClientesAlfabetica' ?>',
            type: 'POST',
            data: {
                letra_alfabeto: letra_alfabeto
            },
            success: function(data) {
                $("#divResultadoAjaxAlfabetica").html(data)
            },
            error: function(data) {
                console.log("Ocorreu erro ao BUSCAR clientes via AJAX.");
            }
        });
    }

    function pesquisarClienteAlfabeto(ds_nome_cliente) {
        $.ajax({
            url: '<?php echo URL . '/Paginas/buscaAjaxTabelaClientesAlfabeticaPesquisa' ?>',
            type: 'POST',
            data: {
                ds_nome_cliente: ds_nome_cliente
            },
            success: function(data) {
                $("#divResultadoAjaxAlfabetica").html(data)
            },
            error: function(data) {
                console.log("Ocorreu erro ao BUSCAR clientes via AJAX.");
            }
        });
    }

    function alteraCorLetraSelecionada(letra_alfabeto) {
        $.ajax({
            url: '<?php echo URL . '/Paginas/buscaAjaxAlteraCorLetraSelecionada' ?>',
            type: 'POST',
            data: {
                letra_alfabeto: letra_alfabeto
            },
            success: function(data) {
                $("#divResultadoAlfabeto").html(data)
            },
            error: function(data) {
                console.log("Ocorreu erro ao BUSCAR alfabeto via AJAX.");
            }
        });
    }
</script>