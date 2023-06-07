<div class="container mb-5">

    <div class="row d-flex justify-content-start mt-5">
        <div class="col-md-6 d-flex flex-row">
            <div class="">
                <a class="btn d-flex justify-content-center align-items-center lp-btn-liderpro m-2 <?= $dados['tituloBreadcrumb'] == 'ordemAlfabetica' ? 'lp-btn-liderpro-active' : ''; ?>" href="<?= URL . '/Paginas/pesquisaAvancadaClienteAlfabetica' ?>" role="button">POR ORDEM ALFABÉTICA</a>
            </div>
            <div>
                <a class="btn d-flex justify-content-center align-items-center lp-btn-liderpro m-2 <?= $dados['tituloBreadcrumb'] == 'ordemSegmento' ? 'lp-btn-liderpro-active' : ''; ?>" href="<?= URL . '/Paginas/pesquisaAvancadaClientePorSegmento' ?>" role="button">POR ORDEM DE SEGMENTO</a>
            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-end align-items-center">
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar Cliente" aria-label="Pesquisar Cliente">
                <button class="btn lp-btn-liderpro my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
    </div>


    <div class="row mt-5" id="resultadoFiltro">
        <div class="col-md-3">
            <h3 class="lp-titulo-paragrafo">SEGMENTOS</h3>
            <ul class="list-unstyled">
                <?php foreach ($dados['segmentos'] as $segmentos) { ?>
                    <li class="lp-paragrafo"><a class="lp-remove-decoration opcao-segmento" id="<?= $segmentos->id_segmento ?>" href="#"><?= $segmentos->ds_segmento ?></a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-md-9 lp-container-logos-avancado" id="divResultadoAjaxPorSegmento"><p style="color: gray;" class="p-3">Escolha um segmento</p></div>
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