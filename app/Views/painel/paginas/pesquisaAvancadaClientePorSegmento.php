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


    <div class="row mt-5">
        <div class="col-md-3">
            <h3 class="lp-titulo-paragrafo">SEGMENTOS</h3>
            <ul class="list-unstyled">
                <?php foreach ($dados['segmentos'] as $segmentos) { ?>
                    <li class="lp-paragrafo"><a class="lp-remove-decoration opcao-segmento" id="<?= $segmentos->id_segmento ?>"><?= $segmentos->ds_segmento ?></a></li>
                <?php } ?>
            </ul>
        </div>

        <div class="col-md-8 lp-container-logos-avancado m-3" id="divResultadoAjaxPorSegmento">
            <p style="color: gray;" class="p-3">Escolha um segmento</p>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {

        // pesquisarClientePorSegmento();

        $(".opcao-segmento").click(function() {
            var id_segmento = $(this).attr('id');
            if (id_segmento != "") {
                pesquisarClientePorSegmento(id_segmento);
            } else {
                pesquisarClientePorSegmento();
            }
        });
    });


    //Ajax para gerar e buscar os visitantes cadastrados

    function pesquisarClientePorSegmento(id_segmento) {
        $.ajax({
            url: '<?php echo URL . '/Paginas/buscaAjaxTabelaClientesPorSegmento' ?>',
            type: 'POST',
            data: {
                id_segmento: id_segmento
            },
            success: function(data) {
                // loading_hide();
                $("#divResultadoAjaxPorSegmento").html(data)
            },
            error: function(data) {
                console.log("Ocorreu erro ao BUSCAR clientes via AJAX.");
                // $('#cboCidade').html("Houve um erro ao carregar");
            }
        });
    }
</script>