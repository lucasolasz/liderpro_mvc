<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NOME ?></title>
    <link rel="shortcut icon" href="<?= URL . '/img/favicon.png' ?>" type="image/x-icon" />

    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet" type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- Bootstrap -->

    <script src="<?php echo URL ?>/public/js/jquery.funcoes.js"></script>
    <link href="<?php echo URL ?>/public/css/estilos.css" rel="stylesheet">
</head>

<body>

    <?php
    //Exibe o titulo do breadcrumb baseado no que veio da controller
    $paginaBreadCrumb = "";
    $urlBreadCrumb = "";
    $informacoes = "";

    if (isset($dados['paginas']) && !isset($dados["paginasLiderPro"])) {

        foreach ($dados['paginas'] as $paginas) {

            if ($paginas->ds_breadcrumb_menu == $dados['tituloBreadcrumb']) {
                $paginaBreadCrumb = mb_strtoupper($paginas->ds_pagina);
                $urlBreadCrumb = $paginas->ds_url_menu;
            }

            //Temporário
            if ($dados['tituloBreadcrumb'] == "assistencia_tecnica") {
                $paginaBreadCrumb =  "ASSISTÊNCIA TÉCNICA";
                $urlBreadCrumb = "\\assistencia_tecnica";
            }
        }
    }

    if (isset($dados["paginasLiderPro"])) {

        foreach ($dados['paginasLiderPro'] as $paginasLiderPro) {

            if ($dados['tituloBreadcrumb'] == "termos_de_uso" || $dados['tituloBreadcrumb'] == "politica_de_privacidade" || $dados['tituloBreadcrumb'] == "informacoes_legais") {

                $informacoes = "> INFORMAÇÕES";
                $paginaBreadCrumb =  $paginasLiderPro->ds_menu;
                $urlBreadCrumb = $paginasLiderPro->ds_url_menu;
            } elseif ($paginasLiderPro->ds_pagina_menu == $dados['tituloBreadcrumb']) {
                $paginaBreadCrumb = $paginasLiderPro->ds_menu;
                $urlBreadCrumb = $paginasLiderPro->ds_url_menu;
            }
        }
    }
    ?>

    <div class="lp-nav-desktop">
        <div class="container lp-container">
            <nav class="d-flex" style="height: 38px">
                <div style="width: 250px;"></div>
                <div class="flex-grow-1 d-flex align-items-center" style="padding-left: 58px">
                    <div class="lp-breadcrumb">
                        <?php if (isset($dados['paginas']) && !isset($dados["paginasLiderPro"]) && $paginaBreadCrumb != "") { ?>
                            <a href="<?= URL ?>">Home</a> > <a href="<?= URL . '\\PaginasDinamicas' . $urlBreadCrumb ?>"><?= $paginaBreadCrumb ?></a>
                        <?php } ?>

                        <?php if (isset($dados['paginasLiderPro'])) { ?>
                            <a href="<?= URL ?>">Home</a> > <a href="<?= URL . '/Paginas/lider_pro' ?>"> LIDERPRO</a> <?= $informacoes ?> > <a href="<?= URL . '/Paginas' . $urlBreadCrumb ?>"><?= $paginaBreadCrumb ?></a>
                        <?php } ?>
                    </div>
                    <div class="ml-auto">
                        <ul class="list-unstyled d-flex mb-0 menu-top">
                            <li class=""><a href="<?= URL . '/Paginas/lider_pro' ?>">Liderpro</a></li>
                            <li><a href="<?= URL . '/Paginas/clientes' ?>">Clientes</a></li>
                            <li><a href="<?= URL . '/Paginas/contatos' ?>">Contatos</a></li>
                            <li>
                                <?php if (isset($_SESSION['id_usuario'])) { ?>
                                    <a href="<?= URL . '/Painel/index' ?>">
                                        <img id="lp-menu-painel" src="<?= URL . '/img/login_usuario_logado.png' ?>" alt="" class="img_login">
                                    </a>
                                    <a href="<?= URL . '/UsuariosController/sair' ?>">Sair <i class="bi bi-x-circle"></i></a>
                                <?php } else { ?>
                                    <a href="<?= URL . '/UsuariosController/login' ?>">
                                        <img src="<?= URL . '/img/login_usuario.png' ?>" alt="" class="img_login">
                                    </a>
                                <?php } ?>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?= URL . '/img/facebook_logo.png' ?>" alt="" class="face_login">
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="<?= URL . '/img/lupa_menu.png' ?>" alt="" class="lupa_login">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="" style="background-color: #003399;">
            <div class="container lp-container d-flex position-relative">
                <a href="<?= URL ?>" class="position-absolute" style="bottom: 0;">
                    <img src="<?= URL . '/img/logo-liderpro.png' ?>" alt="">
                </a>
                <div style="width: 250px;"></div>
                <div class="flex-grow-1">

                    <nav class="navbar navbar-expand-lg navbar-dark py-0 pr-0 pl-5">
                        <div class="navbar-collapse">
                            <div class="list-unstyled d-flex lp-nav-ul">
                                <li>
                                    <a href="<?= URL . '\\PaginasDinamicas\\assistencia_tecnica' ?>" class="lp-nav-link <?= $dados['tituloBreadcrumb'] == 'assistencia_tecnica' ? 'lp-nav-active' : ''; ?>">Assistência Técnica</a>
                                    <ul class="list-unstyled submenu">
                                        <li class="sem-categoria">
                                            <a href="<?= URL . '/AssistenciaOpcao/computador_opc' ?>">
                                                <img src="<?= URL . '/img/cat_menu_computador.png' ?>" alt="Sem categoria" class="img-categoria">
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="notebooks">
                                            <a href="<?= URL . '/AssistenciaOpcao/notebook_opc' ?>">
                                                <img src="<?= URL . '/img/cat_menu_notebook.png' ?>" alt="Notebooks" class="img-categoria">
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="tablets-e-celulares">
                                            <a href="<?= URL . '/AssistenciaOpcao/tablet_celular_opc' ?>">
                                                <img src="<?= URL . '/img/cat_menu_tablet_celular.png' ?>" alt="Tablets e Celulares" class="img-categoria">
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="projetores">
                                            <a href="<?= URL . '/AssistenciaOpcao/projetor_opc' ?>">
                                                <img src="<?= URL . '/img/cat_menu_projetor.png' ?>" alt="Projetores" class="img-categoria">
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="fontes-de-alimentacao">
                                            <a href="<?= URL . '/AssistenciaOpcao/fonte_alimentacao_opc' ?>">
                                                <img src="<?= URL . '/img/cat_menu_fonte_alimentacao.png' ?>" alt="Fontes de Alimentação" class="img-categoria">
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="tv-monitor">
                                            <a href="<?= URL . '/AssistenciaOpcao/tv_monitor_opc' ?>">
                                                <img src="<?= URL . '/img/cat_menu_tv_monitor.png' ?>" alt="TV/Monitor" class="img-categoria">
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="impressoras">
                                            <a href="<?= URL . '/AssistenciaOpcao/impressora_opc' ?>">
                                                <img src="<?= URL . '/img/cat_menu_impressora.png' ?>" alt="Impressoras" class="img-categoria">
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="no-breaks">
                                            <a href="<?= URL . '/AssistenciaOpcao/nobreak_opc' ?>">
                                                <img src="<?= URL . '/img/cat_menu_nobreak.png' ?>" alt="No-Breaks" class="img-categoria">
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <?php foreach ($dados['paginas'] as $paginas) { ?>
                                    <li><a href="<?= URL . '\\PaginasDinamicas\\' . $paginas->ds_breadcrumb_menu ?>" class="lp-nav-link <?= $dados['tituloBreadcrumb'] == $paginas->ds_breadcrumb_menu ? 'lp-nav-active' : ''; ?>"><?= ucfirst($paginas->ds_pagina) ?></a></li>
                                <?php } ?>
                                <li class="d-flex align-items-center justify-content-center" style="width: 200px;">
                                    <a href="#" class="lp-nav-link">(21)&nbsp2526-8100&nbsp
                                        <span><img style="height: 15px; width: 15px;" src="<?= URL . '/img/menu_lider_pro/whatsapp.png' ?>" alt=""></span>
                                    </a>
                                </li>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </div>

    <div class="w-100 lp-menu-mobile">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="<?= URL ?>"><img src="<?= URL . '/img/logo-liderpro.png' ?>" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse lp-navbar-mobile" id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex align-items-center lp-item-menu-mobile">
                    <li><a href="<?= URL . '/Paginas/lider_pro' ?>">Liderpro</a></li>
                    <li><a href="<?= URL . '/Paginas/clientes' ?>">Clientes</a></li>
                    <li><a href="<?= URL . '/Paginas/contatos' ?>">Contatos</a></li>
                    <li><a href="<?= URL . '/Paginas/assistencia_tecnica' ?>">Assistência Técnica</a>
                    <li><a href="<?= URL . '/Paginas/gestao_informatica' ?>">Gestão de informática</a></li>
                    <li><a href="<?= URL . '/Paginas/cabeamento_estruturado' ?>">Cabeamento Estruturado</a></li>
                    <li><a href="#">Segurança Eletrônica</a></li>
                    <li><a href="#">Sistemas de Telefonia</a></li>
                    <li><a href="<?= URL . '/Paginas/solucoes_nobreak' ?>">Soluções de No-Breaks</a></li>
                    <li><a href="<?= URL . '/Paginas/solucoes_em_nuvem' ?>">Soluções em Nuvem</a></li>
                </div>
            </div>
        </nav>

        <div class="lp-breadcrumb-mobile ml-5 mt-5">
            <?php if (isset($dados['paginas'])) { ?>
                <a href="<?= URL . '/Paginas' . $urlBreadCrumb ?>"><?= $paginaBreadCrumb ?></a>
            <?php } ?>

            <?php if (isset($dados['paginasLiderPro'])) { ?>
                <a href="<?= URL . '/Paginas' . $urlBreadCrumb ?>"><?= $paginaBreadCrumb ?></a>
            <?php } ?>
        </div>
    </div>