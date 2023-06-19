<ul class="list-unstyled">

    <?php
    if (!empty($dados['resultado']) && !empty($dados['id_segmento'])) {

        foreach ($dados['resultado'] as $resultado) {
            $segmentoActive = "";
            if ($dados['id_segmento'] == strval($resultado->id_segmento)) {
                $segmentoActive = "lp-opcao-segmento-active";
            }
    ?>
            <li class="lp-paragrafo"><a class="lp-remove-decoration opcao-segmento <?= $segmentoActive ?>" id="<?= $resultado->id_segmento ?>"><?= $resultado->ds_segmento ?></a></li>
    <?php
        }
    } ?>
</ul>

<script>
    $(".opcao-segmento").click(function() {
        var id_segmento = $(this).attr('id');
        if (id_segmento != "") {
            pesquisarClientePorSegmento(id_segmento);
            alteraCorSegmentoSelecionado(id_segmento);
        } else {
            pesquisarClientePorSegmento();
        }
    });
</script>