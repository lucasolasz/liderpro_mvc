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
                <input type="text" class="form-control" placeholder="Pesquise pelo nome da empresa">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex flex-column mt-5">
        <div class="mb-3 d-flex justify-content-between">
            <a class="lp-remove-decoration opcao-alfabetica" id="1">1</a>
            <?php foreach ($dados['letrasAlfabeto'] as $letrasAlfabeto) { ?>
                <a class="lp-remove-decoration opcao-alfabetica" id="<?= $letrasAlfabeto ?>"><?= $letrasAlfabeto ?></a>
            <?php } ?>
        </div>

        <div class="lp-container-logos-avancado" id="divResultadoAjaxAlfabetica">
            <p style="color: gray;" class="p-3">Escolha uma opção de filtro</p>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {

        // pesquisarClientePorSegmento();

        $(".opcao-alfabetica").click(function() {
            var letra_alfabeto = $(this).attr('id');
            if (letra_alfabeto != "") {
                pesquisarClientePorSegmento(letra_alfabeto);
            } else {
                pesquisarClientePorSegmento();
            }
        });
    });


    //Ajax para gerar e buscar os visitantes cadastrados

    function pesquisarClientePorSegmento(letra_alfabeto) {
        $.ajax({
            url: '<?php echo URL . '/Paginas/buscaAjaxTabelaClientesAlfabetica' ?>',
            type: 'POST',
            data: {
                letra_alfabeto: letra_alfabeto
            },
            success: function(data) {
                // loading_hide();
                $("#divResultadoAjaxAlfabetica").html(data)
            },
            error: function(data) {
                console.log("Ocorreu erro ao BUSCAR clientes via AJAX.");
                // $('#cboCidade').html("Houve um erro ao carregar");
            }
        });
    }
</script>