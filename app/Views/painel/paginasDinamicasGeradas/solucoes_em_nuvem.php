<?php
//Criado para limitar os caracteres do texto principal do serviço
if ($_SESSION['linguagem_selecionada'] == "PT") {
    $texto = $dados['paginaSelecionada'][0]->ds_texto_principal;
} elseif ($_SESSION['linguagem_selecionada'] == "ES") {
    $texto = $dados['paginaSelecionada'][0]->ds_texto_principal_es;
} elseif ($_SESSION['linguagem_selecionada'] == "EN") {
    $texto = $dados['paginaSelecionada'][0]->ds_texto_principal_en;
}

// Limitar o texto a 800 caracteres
$limiteCaracteres = 800;
$textoDiv1 = substr($texto, 0, $limiteCaracteres);
$textoDiv2 = substr($texto, $limiteCaracteres);

// Contar o número total de caracteres no texto
$quantidadeTotalCaracteres = strlen($texto);
?>
<div class="container p-5">
    <div class="row">

        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <?php if (empty($dados['dolarFotoBanner'])) { ?>
                    <figure class="border">
                        <img class="img-fluid" style="max-height: 355px; max-width: 1080px" src="<?= URL . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'logo-liderpro.png' ?>" alt="">
                        <figcaption class="text-center">Foto provisória</figcaption>
                    </figure>
                <?php } else { ?>
                    <img class="img-fluid" src="<?= URL . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $dados['dolarFotoBanner'][0]->nm_path_arquivo . DIRECTORY_SEPARATOR .  $dados['dolarFotoBanner'][0]->nm_arquivo ?>" alt="">
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="row py-3 d-flex align-items-center">
        <?php if (empty($dados['dolarFotoPergunta'])) { ?>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <figure class="border">
                        <img class="img-fluid" src="<?= URL . DIRECTORY_SEPARATOR . 'img' .  DIRECTORY_SEPARATOR . 'logo-liderpro.png' ?>" alt="">
                        <figcaption class="text-center">Foto provisória</figcaption>
                    </figure>
                </div>
            </div>
            <?php } else {
            $i = 0;
            foreach ($dados['dolarFotoPergunta'] as $dolarFotoPergunta) {
                if ($i == 1) { ?>
                    <div class="col-md py-3">
                        <img class="img-fluid" style="max-height: 100px; max-width: 330px" src="<?= URL . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $dolarFotoPergunta->nm_path_arquivo . DIRECTORY_SEPARATOR .  $dolarFotoPergunta->nm_arquivo ?>" alt="">
                    </div>
                <?php  } else { ?>
                    <div class="col-md">
                        <img class="img-fluid" style="max-height: 100px; max-width: 330px" src="<?= URL . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR .  $dolarFotoPergunta->nm_path_arquivo . DIRECTORY_SEPARATOR .  $dolarFotoPergunta->nm_arquivo ?>" alt="">
                    </div>
        <?php }
                $i++;
            }
        } ?>
    </div>

    <div class="row">
        <div class="col-md-9 col-lg-9 d-flex align-items-center">
            <p class="lp-paragrafo text-justify"><?= $textoDiv1 ?>
                <?php if ($quantidadeTotalCaracteres > $limiteCaracteres) { ?>
                    <a class="ml-2 lp-link-veja-mais" id="vejaMais">VEJA +</a>
                    <span id="spanContinuacaoTexto"><?= $textoDiv2 ?></span>
                <?php }  ?>
            </p>
        </div>
        <div class="col-md-3 col-lg-3 d-flex justify-content-center">
            <?php if (empty($dados['dolarFotoTexto'])) {  ?>
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <figure class="border">
                            <img class="img-fluid" src="<?= URL . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'logo-liderpro.png' ?>" alt="">
                            <figcaption class="text-center">Foto provisória</figcaption>
                        </figure>
                    </div>
                </div>
            <?php } else { ?>
                <img class="img-fluid" style="max-height: 200px; max-width: 200px" src="<?= URL . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $dados['dolarFotoTexto'][0]->nm_path_arquivo . DIRECTORY_SEPARATOR .  $dados['dolarFotoTexto'][0]->nm_arquivo ?>" alt="">
            <?php } ?>
        </div>
    </div>

    <div class="row py-3">


        <!-- <div class="col-sm-1 col-md-1 col-lg-1 lp-tab-servicos">SERVIÇOS</div> -->

        <div class="col-sm-11 col-md-11 col-lg-11">
            <?php
            if ($_SESSION['linguagem_selecionada'] == "PT") {
                include_once APP . '/Views/painel/paginas/tabs_pagina_pt.php';
            } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
                include_once APP . '/Views/painel/paginas/tabs_pagina_es.php';
            } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
                include_once APP . '/Views/painel/paginas/tabs_pagina_en.php';
            }
            ?>
        </div>
    </div>
</div>

<script>
    // Get the element with id="defaultOpen" and click on it
    //Abre a primeira aba como padrão 
    document.getElementById("defaultOpen").click();

    $(document).ready(function() {
        $("#spanContinuacaoTexto").hide();
        $("#vejaMais").click(function() {
            $("#vejaMais").remove();
            $("#spanContinuacaoTexto").show();
        });
    });
</script>