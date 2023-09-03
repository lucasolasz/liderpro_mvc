<h2 class="py-3">Serviços</h2>

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
            <?php if (empty($dados['dolarFotoServico'])) { ?>
                <div class="col-md-4">
                    <p>Em breve</p>
                </div>
                <?php  } else {
                foreach ($dados['dolarFotoServico'] as $dolarFotoServico) { ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img class="img-fluid" src="<?= URL . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR .  $dolarFotoServico->nm_path_arquivo . DIRECTORY_SEPARATOR .  $dolarFotoServico->nm_arquivo ?>" alt="">
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>

<div id="<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab1) ?>" class="tabcontent-lp">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico1tab1 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico1tab1 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico2tab1 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico2tab1 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico3tab1 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico3tab1 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico4tab1 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico4tab1 ?></li>
                <?php } ?>
            </ol>
        </div>
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico5tab1 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico5tab1 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico6tab1 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico6tab1 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico7tab1 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico7tab1 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico8tab1 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico8tab1 ?></li>
                <?php } ?>
            </ol>
        </div>
    </div>
</div>

<div id="<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab2) ?>" class="tabcontent-lp">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico1tab2 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico1tab2 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico2tab2 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico2tab2 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico3tab2 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico3tab2 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico4tab2 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico4tab2 ?></li>
                <?php } ?>
            </ol>
        </div>
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico5tab2 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico5tab2 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico6tab2 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico6tab2 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico7tab2 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico7tab2 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico8tab2 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico8tab2 ?></li>
                <?php } ?>
            </ol>
        </div>
    </div>
</div>

<div id="<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab3) ?>" class="tabcontent-lp">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico1tab3 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico1tab3 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico2tab3 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico2tab3 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico3tab3 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico3tab3 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico4tab3 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico4tab3 ?></li>
                <?php } ?>
            </ol>
        </div>
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico5tab3 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico5tab3 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico6tab3 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico6tab3 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico7tab3 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico7tab3 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico8tab3 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico8tab3 ?></li>
                <?php } ?>
            </ol>
        </div>
    </div>
</div>

<div id="<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab4) ?>" class="tabcontent-lp">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico1tab4 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico1tab4 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico2tab4 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico2tab4 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico3tab4 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico3tab4 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico4tab4 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico4tab4 ?></li>
                <?php } ?>
            </ol>
        </div>
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico5tab4 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico5tab4 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico6tab4 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico6tab4 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico7tab4 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico7tab4 ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico8tab4 != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico8tab4 ?></li>
                <?php } ?>
            </ol>
        </div>
    </div>
</div>