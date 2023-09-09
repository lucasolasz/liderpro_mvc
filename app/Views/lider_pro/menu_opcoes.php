<?php

if ($dados['tituloBreadcrumb'] == "termos_de_uso") {
    $classeBtnAtivoTermo = "lp-btn-liderpro-info-active";
} else {
    $classeBtnAtivoTermo = "";
}

if ($dados['tituloBreadcrumb'] == "politica_de_privacidade") {
    $classeBtnAtivoPolitica = "lp-btn-liderpro-info-active";
} else {
    $classeBtnAtivoPolitica = "";
}

if ($dados['tituloBreadcrumb'] == "informacoes_legais") {
    $classeBtnAtivoInformacoes = "lp-btn-liderpro-info-active";
} else {
    $classeBtnAtivoInformacoes = "";
}

?>


<div class="row d-flex justify-content-center">

    <?php if ($_SESSION['linguagem_selecionada'] == "PT") { ?>
        <a class="btn d-flex justify-content-center align-items-center lp-btn-liderpro m-2 <?= $dados['tituloBreadcrumb'] == 'lider_pro' ? 'lp-btn-liderpro-active' : ''; ?>" href="<?= URL . '/Paginas/lider_pro' ?>" role="button">LIDERPRO</a>
        <a class="btn lp-btn-liderpro m-2 <?= $dados['tituloBreadcrumb'] == 'valores' ? 'lp-btn-liderpro-active' : ''; ?>" href="<?= URL . '/Paginas/valores' ?>" role="button">VALORES<br>ÉTICOS</a>
        <a class="btn lp-btn-liderpro m-2 <?= $dados['tituloBreadcrumb'] == 'parcerias' ? 'lp-btn-liderpro-active' : ''; ?>" href="<?= URL . '/Paginas/parcerias' ?>" role="button">PARCERIAS E<br>CERTIFICAÇÕES</a>
        <a class="btn lp-btn-liderpro m-2 <?= $classeBtnAtivoTermo . $classeBtnAtivoPolitica . $classeBtnAtivoInformacoes ?>" href="<?= URL . '/Paginas/informacoes_legais' ?>" href="#" role="button">INFORMAÇÕES<br>GERAIS</a>

    <?php } elseif ($_SESSION['linguagem_selecionada'] == "ES") { ?>

        <a class="btn d-flex justify-content-center align-items-center lp-btn-liderpro m-2 <?= $dados['tituloBreadcrumb'] == 'lider_pro' ? 'lp-btn-liderpro-active' : ''; ?>" href="<?= URL . '/Paginas/lider_pro' ?>" role="button">LIDERPRO</a>
        <a class="btn lp-btn-liderpro m-2 <?= $dados['tituloBreadcrumb'] == 'valores' ? 'lp-btn-liderpro-active' : ''; ?>" href="<?= URL . '/Paginas/valores' ?>" role="button">VALORES<br>ÉTICOS</a>
        <a class="btn lp-btn-liderpro m-2 <?= $dados['tituloBreadcrumb'] == 'parcerias' ? 'lp-btn-liderpro-active' : ''; ?>" href="<?= URL . '/Paginas/parcerias' ?>" role="button">ASOCIACIONES Y<br>CERTIFICACIONES</a>
        <a class="btn lp-btn-liderpro m-2 <?= $classeBtnAtivoTermo . $classeBtnAtivoPolitica . $classeBtnAtivoInformacoes ?>" href="<?= URL . '/Paginas/informacoes_legais' ?>" href="#" role="button">INFORMACIÓN<br>GENERAL</a>

    <?php } elseif ($_SESSION['linguagem_selecionada'] == "EN") { ?>
        <a class="btn d-flex justify-content-center align-items-center lp-btn-liderpro m-2 <?= $dados['tituloBreadcrumb'] == 'lider_pro' ? 'lp-btn-liderpro-active' : ''; ?>" href="<?= URL . '/Paginas/lider_pro' ?>" role="button">LIDERPRO</a>
        <a class="btn d-flex justify-content-center align-items-center lp-btn-liderpro m-2 <?= $dados['tituloBreadcrumb'] == 'valores' ? 'lp-btn-liderpro-active' : ''; ?>" href="<?= URL . '/Paginas/valores' ?>" role="button">ETHICAL<br>VALUES</a>
        <a class="btn lp-btn-liderpro m-2 <?= $dados['tituloBreadcrumb'] == 'parcerias' ? 'lp-btn-liderpro-active' : ''; ?>" href="<?= URL . '/Paginas/parcerias' ?>" role="button">PARTNERSHIPS AND<br>CERTIFICATIONS</a>
        <a class="btn d-flex justify-content-center align-items-center lp-btn-liderpro m-2 <?= $classeBtnAtivoTermo . $classeBtnAtivoPolitica . $classeBtnAtivoInformacoes ?>" href="<?= URL . '/Paginas/informacoes_legais' ?>" href="#" role="button">GENERAL<br>INFORMATION</a>
    <?php } ?>



</div>

<?php

if ($dados['tituloBreadcrumb'] == "informacoes_gerais" || $dados['tituloBreadcrumb'] == "termos_de_uso" || $dados['tituloBreadcrumb'] == "informacoes_legais" || $dados['tituloBreadcrumb'] == "politica_de_privacidade") {
?>

    <div class="row d-flex justify-content-center mt-2">


        <?php if ($_SESSION['linguagem_selecionada'] == "PT") { ?>
            <a class="btn lp-btn-liderpro-info m-2 <?= $classeBtnAtivoTermo ?>" href="<?= URL . '/Paginas/termos_de_uso' ?>" role="button">Termos<br>de Uso</a>
            <a class="btn lp-btn-liderpro-info m-2 <?= $classeBtnAtivoPolitica ?>" href="<?= URL . '/Paginas/politica_de_privacidade' ?>" role="button">Política de<br>Privacidade</a>
            <a class="btn lp-btn-liderpro-info m-2 <?= $classeBtnAtivoInformacoes ?>" href="<?= URL . '/Paginas/informacoes_legais' ?>" role="button">Informações<br>Legais</a>

        <?php } elseif ($_SESSION['linguagem_selecionada'] == "ES") { ?>

            <a class="btn lp-btn-liderpro-info m-2 <?= $classeBtnAtivoTermo ?>" href="<?= URL . '/Paginas/termos_de_uso' ?>" role="button">Condiciones de uso</a>
            <a class="btn lp-btn-liderpro-info m-2 <?= $classeBtnAtivoPolitica ?>" href="<?= URL . '/Paginas/politica_de_privacidade' ?>" role="button">Política de<br>privacidad</a>
            <a class="btn lp-btn-liderpro-info m-2 <?= $classeBtnAtivoInformacoes ?>" href="<?= URL . '/Paginas/informacoes_legais' ?>" role="button">Información<br>legal</a>

        <?php } elseif ($_SESSION['linguagem_selecionada'] == "EN") { ?>
            <a class="btn lp-btn-liderpro-info m-2 <?= $classeBtnAtivoTermo ?>" href="<?= URL . '/Paginas/termos_de_uso' ?>" role="button">Terms<br>of Use</a>
            <a class="btn d-flex justify-content-center align-items-center lp-btn-liderpro-info m-2 <?= $classeBtnAtivoPolitica ?>" href="<?= URL . '/Paginas/politica_de_privacidade' ?>" role="button">Privacy Policy</a>
            <a class="btn d-flex justify-content-center align-items-center lp-btn-liderpro-info m-2 <?= $classeBtnAtivoInformacoes ?>" href="<?= URL . '/Paginas/informacoes_legais' ?>" role="button">Legal<br>Information</a>
        <?php } ?>



    </div>

<?php  } ?>