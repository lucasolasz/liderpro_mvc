<?php

if ($dados['tituloBreadcrumb'] == "termos_de_uso" ) {
    $classeBtnAtivoTermo = "lp-btn-liderpro-info-active";
} else {
    $classeBtnAtivoTermo = "";
}

if ($dados['tituloBreadcrumb'] == "politica_de_privacidade" ) {
    $classeBtnAtivoPolitica = "lp-btn-liderpro-info-active";
} else {
    $classeBtnAtivoPolitica = "";
}

if ($dados['tituloBreadcrumb'] == "informacoes_legais" ) {
    $classeBtnAtivoInformacoes = "lp-btn-liderpro-info-active";
} else {
    $classeBtnAtivoInformacoes = "";
}

?>


<div class="row d-flex justify-content-center">

    <a class="btn lp-btn-liderpro m-2 <?= $dados['tituloBreadcrumb'] == 'lider_pro' ? 'lp-btn-liderpro-active' : ''; ?>" href="<?= URL . '/LiderPro/lider_pro' ?>" role="button">LIDERPRO</a>
    <a class="btn lp-btn-liderpro m-2 <?= $dados['tituloBreadcrumb'] == 'valores' ? 'lp-btn-liderpro-active' : ''; ?>" href="<?= URL . '/LiderPro/valores' ?>" role="button">VALORES<br>ÉTICOS</a>
    <a class="btn lp-btn-liderpro m-2 <?= $dados['tituloBreadcrumb'] == 'parcerias' ? 'lp-btn-liderpro-active' : ''; ?>" href="<?= URL . '/LiderPro/parcerias' ?>" role="button">PARCERIAS E<br>CERTIFICAÇÕES</a>
    <a class="btn lp-btn-liderpro m-2 <?= $classeBtnAtivoTermo . $classeBtnAtivoPolitica . $classeBtnAtivoInformacoes ?>" href="<?= URL . '/LiderPro/informacoes_legais' ?>" href="#" role="button">INFORMAÇÕES<br>GERAIS</a>
</div>

<?php

if ($dados['tituloBreadcrumb'] == "informacoes_gerais" || $dados['tituloBreadcrumb'] == "termos_de_uso" || $dados['tituloBreadcrumb'] == "informacoes_legais" || $dados['tituloBreadcrumb'] == "politica_de_privacidade") {
?>

    <div class="row d-flex justify-content-center mt-2">


        <a class="btn lp-btn-liderpro-info m-2 <?= $classeBtnAtivoTermo ?>" href="<?= URL . '/LiderPro/termos_de_uso' ?>" role="button">Termos<br>de Uso</a>
        <a class="btn lp-btn-liderpro-info m-2 <?= $classeBtnAtivoPolitica ?>" href="<?= URL . '/LiderPro/politica_de_privacidade' ?>" role="button">Política de<br>Privacidade</a>
        <a class="btn lp-btn-liderpro-info m-2 <?= $classeBtnAtivoInformacoes ?>" href="<?= URL . '/LiderPro/informacoes_legais' ?>" role="button">Informações<br>Legais</a>
    </div>

<?php  } ?>