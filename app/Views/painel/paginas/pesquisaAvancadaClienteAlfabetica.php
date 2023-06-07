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


    <div class="row mt-5">
        <div class="mb-3 col-md-12 d-flex justify-content-between">
            <a class="lp-remove-decoration opcao-alfabetica" id="1" >1</a>
            <?php foreach ($dados['letrasAlfabeto'] as $letrasAlfabeto) { ?>
                <a class="lp-remove-decoration opcao-alfabetica" id="<?= $letrasAlfabeto ?>"><?= $letrasAlfabeto ?></a>
            <?php } ?>
        </div>
        <div class="col-md-12 lp-container-logos-avancado" id="divResultadoAjaxAlfabetica">
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