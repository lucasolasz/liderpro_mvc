<div class="container p-5">
    <div class="row">
        <img class="img-fluid" src="<?= URL . '\\uploads\\' . $dados['dolarFotoBanner'][0]->nm_path_arquivo . "\\" .  $dados['dolarFotoBanner'][0]->nm_arquivo ?>" alt="">
    </div>
    <div class="row py-5 d-flex align-items-center">
        <?php
        $i = 0;
        foreach ($dados['dolarFotoPergunta'] as $dolarFotoPergunta) {
            if ($i == 1) { ?>
                <div class="col-md py-5">
                    <img class="img-fluid" src="<?= URL . '\\uploads\\' . $dolarFotoPergunta->nm_path_arquivo . "\\" .  $dolarFotoPergunta->nm_arquivo ?>" alt="">
                </div>
            <?php  } else { ?>
                <div class="col-md">
                    <img class="img-fluid" src="<?= URL . '\\uploads\\' .  $dolarFotoPergunta->nm_path_arquivo . "\\" .  $dolarFotoPergunta->nm_arquivo ?>" alt="">
                </div>
        <?php }
            $i++;
        } ?>

    </div>

    <div class="row">
        <div class="col-md-9 col-lg-9 d-flex align-items-center">
            <p class="lp-paragrafo "> <?= $dados['paginaSelecionada'][0]->ds_texto_principal ?><a class="ml-2 lp-link-veja-mais" href="#">VEJA +</a>
            </p>
        </div>
        <div class="col-md-3 col-lg-3 d-flex justify-content-center">
            <img class="img-fluid" style="height: 200px; width: 180px" src="<?= URL . '\\uploads\\' . $dados['dolarFotoTexto'][0]->nm_path_arquivo . "\\" .  $dados['dolarFotoTexto'][0]->nm_arquivo ?>" alt="">
        </div>
    </div>

    <div class="row py-5">


        <!-- <div class="col-sm-1 col-md-1 col-lg-1 lp-tab-servicos">SERVIÇOS</div> -->

        <div class="col-sm-11 col-md-11 col-lg-11">

            <h2 class="py-5">Serviços</h2>

            <!-- Tab links -->
            <div class="tab-lp">
                <button class="tablinks" onclick="openCity(event, 'Fotos')" id="defaultOpen">FOTOS</button>
                <button class="tablinks" onclick="openCity(event, '<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab1) ?>')"><?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab1) ?></button>
                <button class="tablinks" onclick="openCity(event, '<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab2) ?>')"><?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab2) ?></button>
                <button class="tablinks" onclick="openCity(event, '<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab3) ?>')"><?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab3) ?></button>
                <button class="tablinks" onclick="openCity(event, '<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab4) ?>')"><?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab4) ?></button>
            </div>
            <!-- Tab content -->
            <div id="Fotos" class="tabcontent-lp">
                <div class="container">
                    <div class="row">
                        <?php foreach ($dados['dolarFotoServico'] as $dolarFotoServico) { ?>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <img class="img-fluid" src="<?= URL . '\\uploads\\' .  $dolarFotoServico->nm_path_arquivo . "\\" .  $dolarFotoServico->nm_arquivo ?>" alt="">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div id="<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab1) ?>" class="tabcontent-lp">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <ol class="lp-lista-tab">
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico1tab1 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico2tab1 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico3tab1 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico4tab1 ?></li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ol class="lp-lista-tab">
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico5tab1 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico6tab1 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico7tab1 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico8tab1 ?></li>
                        </ol>
                    </div>
                </div>
            </div>

            <div id="<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab2) ?>" class="tabcontent-lp">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <ol class="lp-lista-tab">
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico1tab2 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico2tab2 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico3tab2 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico4tab2 ?></li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ol class="lp-lista-tab">
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico5tab2 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico6tab2 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico7tab2 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico8tab2 ?></li>
                        </ol>
                    </div>
                </div>
            </div>

            <div id="<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab3) ?>" class="tabcontent-lp">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <ol class="lp-lista-tab">
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico1tab3 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico2tab3 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico3tab3 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico4tab3 ?></li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ol class="lp-lista-tab">
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico5tab3 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico6tab3 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico7tab3 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico8tab3 ?></li>
                        </ol>
                    </div>
                </div>
            </div>

            <div id="<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab4) ?>" class="tabcontent-lp">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <ol class="lp-lista-tab">
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico1tab3 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico2tab3 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico3tab3 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico4tab3 ?></li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ol class="lp-lista-tab">
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico5tab4 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico6tab4 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico7tab4 ?></li>
                            <li><?= $dados['paginaSelecionada'][0]->ds_topico8tab4 ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>