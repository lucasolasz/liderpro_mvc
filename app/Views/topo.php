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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <!-- Bootstrap -->

    <script src="<?php echo URL ?>/public/js/jquery.funcoes.js"></script>
    <link href="<?php echo URL ?>/public/css/estilos.css" rel="stylesheet">
    <link href="<?php echo URL ?>/public/css/top_dropdown_style.css" rel="stylesheet">

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="https:////cdn.datatables.net/plug-ins/1.13.5/i18n/pt-BR.json"></script>
    <!-- DataTables -->
</head>

<body>

    <?php
    //Exibe o titulo do breadcrumb baseado no que veio da controller
    $paginaBreadCrumb = "";
    $urlBreadCrumb = "";
    $informacoes = "";
    $liderActive = "";
    $clientesActive = "";
    $contatoActive = "";

    if (isset($dados['paginas']) && !isset($dados["paginasLiderPro"])) {

        foreach ($dados['paginas'] as $paginas) {

            if ($paginas->ds_breadcrumb_menu == $dados['tituloBreadcrumb']) {

                if ($_SESSION['linguagem_selecionada'] == 'PT') {
                    $paginaBreadCrumb = mb_strtoupper($paginas->ds_pagina);
                } elseif ($_SESSION['linguagem_selecionada'] == 'ES') {
                    $paginaBreadCrumb = mb_strtoupper($paginas->ds_pagina_es);
                } elseif ($_SESSION['linguagem_selecionada'] == 'EN') {
                    $paginaBreadCrumb = mb_strtoupper($paginas->ds_pagina_en);
                }
                $urlBreadCrumb = $paginas->ds_url_menu;
            }

            //Temporário
            if ($dados['tituloBreadcrumb'] == "assistencia_tecnica") {
                $paginaBreadCrumb = "ASSISTÊNCIA TÉCNICA";
                $urlBreadCrumb = "/assistencia_tecnica";
            }
        }
    }

    if (isset($dados["paginasLiderPro"])) {

        foreach ($dados['paginasLiderPro'] as $paginasLiderPro) {

            if ($dados['tituloBreadcrumb'] == "termos_de_uso" || $dados['tituloBreadcrumb'] == "politica_de_privacidade" || $dados['tituloBreadcrumb'] == "informacoes_legais") {

                if ($paginasLiderPro->ds_pagina_menu == $dados['tituloBreadcrumb']) {
                    if ($_SESSION['linguagem_selecionada'] == 'PT') {
                        $informacoes = "> INFORMAÇÕES";
                        $paginaBreadCrumb = $paginasLiderPro->ds_menu;
                    } elseif ($_SESSION['linguagem_selecionada'] == 'ES') {
                        $informacoes = "> INFORMACIÓN";
                        $paginaBreadCrumb = $paginasLiderPro->ds_menu_es;
                    } elseif ($_SESSION['linguagem_selecionada'] == 'EN') {
                        $informacoes = "> INFORMATION";
                        $paginaBreadCrumb = $paginasLiderPro->ds_menu_en;
                    }
                    $urlBreadCrumb = $paginasLiderPro->ds_url_menu;
                }
            } elseif ($paginasLiderPro->ds_pagina_menu == $dados['tituloBreadcrumb']) {
                if ($_SESSION['linguagem_selecionada'] == 'PT') {
                    $paginaBreadCrumb = $paginasLiderPro->ds_menu;
                } elseif ($_SESSION['linguagem_selecionada'] == 'ES') {
                    $paginaBreadCrumb = $paginasLiderPro->ds_menu_es;
                } elseif ($_SESSION['linguagem_selecionada'] == 'EN') {
                    $paginaBreadCrumb = $paginasLiderPro->ds_menu_en;
                }
                $urlBreadCrumb = $paginasLiderPro->ds_url_menu;
            }
        }
    }

    if (isset($dados['liderproActive'])) {
        $liderActive = "active";
    }

    if (isset($dados['clienteActive'])) {
        $clientesActive = "active";
    }

    if (isset($dados['contatoActive'])) {
        $contatoActive = "active";
    }
    ?>

    <div class="lp-nav-desktop">
        <div class="container lp-container">
            <nav class="d-flex" style="height: 38px">
                <div style="width: 250px;"></div>
                <div class="flex-grow-1 d-flex align-items-center" style="padding-left: 40px">
                    <div class="lp-breadcrumb">
                        <?php if (isset($dados['paginas']) && !isset($dados["paginasLiderPro"]) && $paginaBreadCrumb != "") { ?>
                            <a href="<?= URL ?>">Home</a> > <a
                                href="<?= URL . '/Paginas' . $urlBreadCrumb ?>"><?= $paginaBreadCrumb ?></a>
                        <?php } ?>

                        <?php if (isset($dados['assistenciaSelecionada'])) { ?>
                            <a href="<?= URL ?>">Home</a> > <a href="<?= URL ?>/Paginas/assistencia_tecnica">ASSISTÊNCIA
                                TÉCNICA</a> > <a
                                href="<?= URL . '/AssistenciaOpcao/' . $dados['tituloBreadcrumb'] ?>"><?= $dados['assistenciaSelecionada'] ?></a>

                        <?php } ?>

                        <?php if (isset($dados['paginasLiderPro'])) { ?>
                            <a href="<?= URL ?>">Home</a> > <a href="<?= URL . '/Paginas/lider_pro' ?>"> LIDERPRO</a>
                            <?= $informacoes ?> > <a
                                href="<?= URL . '/Paginas' . $urlBreadCrumb ?>"><?= $paginaBreadCrumb ?></a>
                        <?php } ?>

                        <?php if ($_SESSION['linguagem_selecionada'] == 'PT') { ?>
                            <?php if ($dados['tituloBreadcrumb'] == "clientes") { ?>
                                <a href="<?= URL ?>">Home</a> > <a href="<?= URL . '/Paginas/clientes' ?>"> CLIENTES</a>
                            <?php } ?>

                            <?php if ($dados['tituloBreadcrumb'] == "ordemAlfabetica") { ?>
                                <a href="<?= URL ?>">Home</a> > <a href="<?= URL . '/Paginas/clientes' ?>"> CLIENTES</a> > <a
                                    href="<?= URL . '/Paginas/pesquisaAvancadaClienteAlfabetica' ?>"> ORDEM ALFABÉTICA</a>
                            <?php } ?>

                            <?php if ($dados['tituloBreadcrumb'] == "ordemSegmento") { ?>
                                <a href="<?= URL ?>">Home</a> > <a href="<?= URL . '/Paginas/clientes' ?>"> CLIENTES</a> > <a
                                    href="<?= URL . '/Paginas/pesquisaAvancadaClientePorSegmento' ?>"> ORDEM SEGMENTO</a>
                            <?php } ?>

                            <?php if ($dados['tituloBreadcrumb'] == "contatos") { ?>
                                <a href="<?= URL ?>">Home</a> > <a href="<?= URL . '/Paginas/contatos' ?>"> CONTATOS</a>
                            <?php } ?>
                        <?php } elseif ($_SESSION['linguagem_selecionada'] == 'ES') { ?>
                            <?php if ($dados['tituloBreadcrumb'] == "clientes") { ?>
                                <a href="<?= URL ?>">Home</a> > <a href="<?= URL . '/Paginas/clientes' ?>"> CLIENTES</a>
                            <?php } ?>

                            <?php if ($dados['tituloBreadcrumb'] == "ordemAlfabetica") { ?>
                                <a href="<?= URL ?>">Home</a> > <a href="<?= URL . '/Paginas/clientes' ?>"> CLIENTES</a> > <a
                                    href="<?= URL . '/Paginas/pesquisaAvancadaClienteAlfabetica' ?>"> ORDEN ALFABETICA</a>
                            <?php } ?>

                            <?php if ($dados['tituloBreadcrumb'] == "ordemSegmento") { ?>
                                <a href="<?= URL ?>">Home</a> > <a href="<?= URL . '/Paginas/clientes' ?>"> CLIENTES</a> > <a
                                    href="<?= URL . '/Paginas/pesquisaAvancadaClientePorSegmento' ?>"> ORDEN DE LOS
                                    SEGMENTOS</a>
                            <?php } ?>

                            <?php if ($dados['tituloBreadcrumb'] == "contatos") { ?>
                                <a href="<?= URL ?>">Home</a> > <a href="<?= URL . '/Paginas/contatos' ?>"> CONTACTOS</a>
                            <?php } ?>
                        <?php } elseif ($_SESSION['linguagem_selecionada'] == 'EN') { ?>
                            <?php if ($dados['tituloBreadcrumb'] == "clientes") { ?>
                                <a href="<?= URL ?>">Home</a> > <a href="<?= URL . '/Paginas/clientes' ?>"> CUSTOMERS</a>
                            <?php } ?>

                            <?php if ($dados['tituloBreadcrumb'] == "ordemAlfabetica") { ?>
                                <a href="<?= URL ?>">Home</a> > <a href="<?= URL . '/Paginas/clientes' ?>"> CUSTOMERS</a> > <a
                                    href="<?= URL . '/Paginas/pesquisaAvancadaClienteAlfabetica' ?>"> ALPHABETICAL ORDER</a>
                            <?php } ?>

                            <?php if ($dados['tituloBreadcrumb'] == "ordemSegmento") { ?>
                                <a href="<?= URL ?>">Home</a> > <a href="<?= URL . '/Paginas/clientes' ?>"> CUSTOMERS</a> > <a
                                    href="<?= URL . '/Paginas/pesquisaAvancadaClientePorSegmento' ?>"> SEGMENT ORDER</a>
                            <?php } ?>

                            <?php if ($dados['tituloBreadcrumb'] == "contatos") { ?>
                                <a href="<?= URL ?>">Home</a> > <a href="<?= URL . '/Paginas/contatos' ?>"> CONTACTS</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="ml-auto">
                        <ul class="list-unstyled d-flex mb-0 menu-top">
                            <?php if ($_SESSION['linguagem_selecionada'] == "PT") { ?>
                                <li><a href="<?= URL . '/Paginas/lider_pro' ?>"
                                        class="<?= $liderActive == 'active' ? 'menu-top-active' : ''; ?> btn-sm menu-top-btn">Liderpro</a>
                                </li>
                                <li><a href="<?= URL . '/Paginas/clientes' ?>"
                                        class="<?= $clientesActive == 'active' ? 'menu-top-active' : ''; ?> btn-sm menu-top-btn">Clientes</a>
                                </li>
                                <li><a href="<?= URL . '/Paginas/contatos' ?>"
                                        class="<?= $contatoActive == 'active' ? 'menu-top-active' : ''; ?> btn-sm menu-top-btn">Contatos</a>
                                </li>
                            <?php } elseif ($_SESSION['linguagem_selecionada'] == "ES") { ?>
                                <li><a href="<?= URL . '/Paginas/lider_pro' ?>"
                                        class="<?= $liderActive == 'active' ? 'menu-top-active' : ''; ?> btn-sm menu-top-btn">Liderpro</a>
                                </li>
                                <li><a href="<?= URL . '/Paginas/clientes' ?>"
                                        class="<?= $clientesActive == 'active' ? 'menu-top-active' : ''; ?> btn-sm menu-top-btn">Clientes</a>
                                </li>
                                <li><a href="<?= URL . '/Paginas/contatos' ?>"
                                        class="<?= $contatoActive == 'active' ? 'menu-top-active' : ''; ?> btn-sm menu-top-btn">Contactos</a>
                                </li>
                            <?php } elseif ($_SESSION['linguagem_selecionada'] == "EN") { ?>
                                <li><a href="<?= URL . '/Paginas/lider_pro' ?>"
                                        class="<?= $liderActive == 'active' ? 'menu-top-active' : ''; ?> btn-sm menu-top-btn">Liderpro</a>
                                </li>
                                <li><a href="<?= URL . '/Paginas/clientes' ?>"
                                        class="<?= $clientesActive == 'active' ? 'menu-top-active' : ''; ?> btn-sm menu-top-btn">Customers</a>
                                </li>
                                <li><a href="<?= URL . '/Paginas/contatos' ?>"
                                        class="<?= $contatoActive == 'active' ? 'menu-top-active' : ''; ?> btn-sm menu-top-btn">Contacts</a>
                                </li>
                            <?php } ?>

                            <li>
                                <div id="overlayPesquisa" class="hiddenPesquisa"></div>
                                <span class="icon-lupa_menu menu-top-icon" id="icon-lupa_menu"></span>
                                <div class="togglesearch">
                                    <form name="pesquisarHome" id="pesquisarHome" method="POST"
                                        action="<?= URL ?>/Paginas/pesquisarServicosHome" class="lp-form-pesquisa">
                                        <?php if ($_SESSION['linguagem_selecionada'] == 'PT') { ?>
                                            <input type="text" name="txtPesquisaHome" id="txtPesquisaHome"
                                                placeholder=" O que você procura?" class="lp-barra-pesquisa" />
                                        <?php } elseif ($_SESSION['linguagem_selecionada'] == 'ES') { ?>
                                            <input type="text" name="txtPesquisaHome" id="txtPesquisaHome"
                                                placeholder=" ¿Qué buscas?" class="lp-barra-pesquisa" />
                                        <?php } elseif ($_SESSION['linguagem_selecionada'] == 'EN') { ?>
                                            <input type="text" name="txtPesquisaHome" id="txtPesquisaHome"
                                                placeholder=" What are you looking for?" class="lp-barra-pesquisa" />
                                        <?php } ?>
                                        <input type="button" value="X" class="lp-close-pesquisa" />
                                        <button class="lp-btn-pesquisa-home"><span
                                                class="icon-lupa_menu menu-top-icon"></span></button>
                                    </form>
                                </div>
                            </li>

                            <li>
                                <div class="dropdown-social">
                                    <a href="#" class="menu-top-icon btn-face-ico"><span
                                            class="icon-facebook_logo"></span></a>
                                    <div class="dropdown-social-content">
                                        <a href="<?= URL_FACEBOOK ?>" target="_blank"><i class="bi bi-facebook"></i>
                                            Facebook</a>
                                        <a href="<?= URL_INSTAGRAM ?>" target="_blank"><i class="bi bi-instagram"></i>
                                            Instagram</a>
                                        <a href="<?= URL_TWITTER ?>" target="_blank"><i class="bi bi-twitter"></i>
                                            Twitter</a>
                                        <a href="<?= URL_YOUTUBE ?>" target="_blank"><i class="bi bi-youtube"></i>
                                            Youtube</a>
                                        <a href="<?= URL_LINKEDIN ?>" target="_blank"><i class="bi bi-linkedin"></i>
                                            LinkedIn</a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <?php if ($_SESSION['linguagem_selecionada'] == "PT") { ?>
                                    <div class="dropdown-language">
                                        <a href="#" class="menu-top-icon"><span class="iconlang-PT_TRI menu-top-icon"
                                                id="iconlang-PT"></span></a>
                                        <div class="dropdown-language-content">
                                            <a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=PT" ?>"><span
                                                    class="iconlang-PT" id="iconlang-PT"></span></a>
                                            <a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=ES" ?>"><span
                                                    class="iconlang-ES" id="iconlang-ES"></span></a>
                                            <a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=EN" ?>"><span
                                                    class="iconlang-EN" id="iconlang-EN"></span></a>
                                        </div>
                                    </div>
                                <?php } elseif ($_SESSION['linguagem_selecionada'] == "EN") { ?>
                                    <div class="dropdown-language">
                                        <a href="#" class="menu-top-icon"><span class="iconlang-EN_TRI menu-top-icon"
                                                id="iconlang-EN"></span></a>
                                        <div class="dropdown-language-content">
                                            <a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=PT" ?>"><span
                                                    class="iconlang-PT" id="iconlang-PT"></span></a>
                                            <a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=ES" ?>"><span
                                                    class="iconlang-ES" id="iconlang-ES"></span></a>
                                            <a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=EN" ?>"><span
                                                    class="iconlang-EN" id="iconlang-EN"></span></a>
                                        </div>
                                    </div>
                                <?php } elseif ($_SESSION['linguagem_selecionada'] == "ES") { ?>
                                    <div class="dropdown-language">
                                        <a href="#" class="menu-top-icon"><span class="iconlang-ES_TRI menu-top-icon"
                                                id="iconlang-ES"></span></a>
                                        <div class="dropdown-language-content">
                                            <a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=PT" ?>"><span
                                                    class="iconlang-PT" id="iconlang-PT"></span></a>
                                            <a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=ES" ?>"><span
                                                    class="iconlang-ES" id="iconlang-ES"></span></a>
                                            <a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=EN" ?>"><span
                                                    class="iconlang-EN" id="iconlang-EN"></span></a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </li>

                            <li>
                                <?php if (isset($_SESSION['id_usuario'])) { ?>
                                    <a href="<?= URL . '/Painel/index' ?>" class="menu-top-icon">
                                        <span class="icon-login_usuario img_login-logado"></span>
                                    </a>
                                    <a href="<?= URL . '/UsuariosController/sair' ?>">Sair <i
                                            class="bi bi-x-circle"></i></a>
                                <?php } else { ?>
                                    <a href="<?= URL . '/UsuariosController/login' ?>" class="menu-top-icon">
                                        <span class="icon-login_usuario img_login"></span>
                                    </a>
                                <?php } ?>
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
                <div style="width: 270px;"></div>
                <div class="flex-grow-1">

                    <nav class="navbar navbar-expand-lg navbar-dark py-0 pr-0 pl-5">
                        <div class="navbar-collapse d-flex justify-content-center">
                            <div class="list-unstyled d-flex lp-nav-ul">
                                <li>
                                    <a href="<?= URL . '/Paginas/assistencia_tecnica' ?>"
                                        class="lp-nav-link <?= $dados['tituloBreadcrumb'] == 'assistencia_tecnica' ? 'lp-nav-active' : ''; ?>">
                                        <?php if ($_SESSION['linguagem_selecionada'] == "PT") {
                                            echo "ASSISTÊNCIA TÉCNICA";
                                        } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
                                            echo "ASISTENCIA TÉCNICA";
                                        } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
                                            echo "TECHNICAL ASSISTANCE";
                                        } ?>
                                    </a>
                                    <ul class="list-unstyled submenu">
                                        <li class="sem-categoria">
                                            <a href="<?= URL . '/AssistenciaOpcao/computador_opc' ?>">
                                                <img src="<?= URL . '/img/cat_menu_computador.png' ?>"
                                                    alt="Sem categoria" class="img-categoria">
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="notebooks">
                                            <a href="<?= URL . '/AssistenciaOpcao/notebook_opc' ?>">
                                                <img src="<?= URL . '/img/cat_menu_notebook.png' ?>" alt="Notebooks"
                                                    class="img-categoria">
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="tablets-e-celulares">
                                            <a href="<?= URL . '/AssistenciaOpcao/tablet_celular_opc' ?>">
                                                <img src="<?= URL . '/img/cat_menu_tablet_celular.png' ?>"
                                                    alt="Tablets e Celulares" class="img-categoria">
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="projetores">
                                            <a href="<?= URL . '/AssistenciaOpcao/projetor_opc' ?>">
                                                <img src="<?= URL . '/img/cat_menu_projetor.png' ?>" alt="Projetores"
                                                    class="img-categoria">
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="fontes-de-alimentacao">
                                            <a href="<?= URL . '/AssistenciaOpcao/fonte_alimentacao_opc' ?>">
                                                <img src="<?= URL . '/img/cat_menu_fonte_alimentacao.png' ?>"
                                                    alt="Fontes de Alimentação" class="img-categoria">
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="tv-monitor">
                                            <a href="<?= URL . '/AssistenciaOpcao/tv_monitor_opc' ?>">
                                                <img src="<?= URL . '/img/cat_menu_tv_monitor.png' ?>" alt="TV/Monitor"
                                                    class="img-categoria">
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="impressoras">
                                            <a href="<?= URL . '/AssistenciaOpcao/impressora_opc' ?>">
                                                <img src="<?= URL . '/img/cat_menu_impressora.png' ?>" alt="Impressoras"
                                                    class="img-categoria">
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="no-breaks">
                                            <a href="<?= URL . '/AssistenciaOpcao/nobreak_opc' ?>">
                                                <img src="<?= URL . '/img/cat_menu_nobreak.png' ?>" alt="No-Breaks"
                                                    class="img-categoria">
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <?php
                                if ($_SESSION['linguagem_selecionada'] == "PT") {
                                    foreach ($dados['paginas'] as $paginas) { ?>
                                        <li><a href="<?= URL . '/PaginasDinamicas/' . $paginas->ds_breadcrumb_menu ?>"
                                                class="lp-nav-link <?= $dados['tituloBreadcrumb'] == $paginas->ds_breadcrumb_menu ? 'lp-nav-active' : ''; ?>"><?= ucfirst($paginas->ds_pagina) ?></a>
                                        </li>
                                    <?php }
                                } elseif ($_SESSION['linguagem_selecionada'] == "ES") {
                                    foreach ($dados['paginas'] as $paginas) { ?>
                                        <li><a href="<?= URL . '/PaginasDinamicas/' . $paginas->ds_breadcrumb_menu ?>"
                                                class="lp-nav-link <?= $dados['tituloBreadcrumb'] == $paginas->ds_breadcrumb_menu ? 'lp-nav-active' : ''; ?>"><?= ucfirst($paginas->ds_pagina_es) ?></a>
                                        </li>
                                    <?php }
                                } elseif ($_SESSION['linguagem_selecionada'] == "EN") {
                                    foreach ($dados['paginas'] as $paginas) { ?>
                                        <li><a href="<?= URL . '/PaginasDinamicas/' . $paginas->ds_breadcrumb_menu ?>"
                                                class="lp-nav-link <?= $dados['tituloBreadcrumb'] == $paginas->ds_breadcrumb_menu ? 'lp-nav-active' : ''; ?>"><?= ucfirst($paginas->ds_pagina_en) ?></a>
                                        </li>
                                    <?php }
                                }
                                ?>
                                <li class="d-flex align-items-center justify-content-center" style="width: 200px;">
                                    <a href="https://wa.me/552125268100?text=Ol%C3%A1%21" target="_blank"
                                        class="lp-nav-link">(21)&nbsp2526-8100&nbsp
                                        <span><img style="height: 15px; width: 15px;"
                                                src="<?= URL . '/img/menu_lider_pro/whatsapp.png' ?>" alt=""></span>
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
            <a class="navbar-brand" href="<?= URL ?>"><img style="height: 100px; width: 250px"
                    src="<?= URL . '/img/logo-liderpro-branco.png' ?>" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse lp-navbar-mobile" id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex align-items-center lp-item-menu-mobile">
                    <li><a href="<?= URL . '/Paginas/lider_pro' ?>">Liderpro</a></li>
                    <li><a href="<?= URL . '/Paginas/clientes' ?>">Clientes</a></li>
                    <li><a href="<?= URL . '/Paginas/contatos' ?>">Contatos</a></li>
                    <li><a href="<?= URL . '/Paginas/assistencia_tecnica' ?>">Assistência Técnica</a>
                        <?php foreach ($dados['paginas'] as $paginas) { ?>
                        <li><a
                                href="<?= URL . '/PaginasDinamicas/' . $paginas->ds_breadcrumb_menu ?>"><?= ucfirst($paginas->ds_pagina) ?></a>
                        </li>
                    <?php } ?>
                    <li>
                        <a href="https://wa.me/552125268100?text=Ol%C3%A1%21" target="_blank">(21)&nbsp2526-8100&nbsp
                            <span><img style="height: 15px; width: 15px;"
                                    src="<?= URL . '/img/menu_lider_pro/whatsapp.png' ?>" alt=""></span>
                        </a>
                    </li>
                </div>
            </div>
        </nav>
    </div>