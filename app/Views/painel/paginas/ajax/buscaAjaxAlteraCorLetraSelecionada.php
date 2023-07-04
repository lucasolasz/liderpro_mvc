<?php if ($dados['letra_alfabeto_selecionada'] == "1") { ?>
    <a class="lp-remove-decoration opcao-alfabetica lp-opcao-letra-active" id="1">1</a>
<?php } else { ?>
    <a class="lp-remove-decoration opcao-alfabetica" id="1">1</a>
<?php } ?>


<?php foreach ($dados['letrasAlfabeto'] as $letrasAlfabeto) {

    if ($letrasAlfabeto == $dados['letra_alfabeto_selecionada']) { ?>
        <a class="lp-remove-decoration opcao-alfabetica lp-opcao-letra-active" id="<?= $letrasAlfabeto ?>"><?= $letrasAlfabeto ?></a>
    <?php } else { ?>
        <a class="lp-remove-decoration opcao-alfabetica" id="<?= $letrasAlfabeto ?>"><?= $letrasAlfabeto ?></a>
<?php }
} ?>


<!-- Foi necessário enviar o script, pois após primeira requisição o script não funcionava. -->
<script>
    $(".opcao-alfabetica").click(function() {
        var letra_alfabeto = $(this).attr('id');
        if (letra_alfabeto != "") {
            pesquisarClientePorAlfabetoLetraSelecionada(letra_alfabeto);
            alteraCorLetraSelecionada(letra_alfabeto);
        } else {
            pesquisarClientePorAlfabetoLetraSelecionada();
        }
    });
</script>