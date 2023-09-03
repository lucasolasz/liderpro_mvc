<h2 class="py-3">Servicios</h2>

<!-- Tab links -->
<div class="tab-lp">
    <button class="tablinks" onclick="openCity(event, 'Fotos')" id="defaultOpen">FOTOS</button>
    <button class="tablinks" onclick="openCity(event, '<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab1_es) ?>')"><?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab1_es) ?></button>
    <button class="tablinks" onclick="openCity(event, '<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab2_es) ?>')"><?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab2_es) ?></button>
    <button class="tablinks" onclick="openCity(event, '<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab3_es) ?>')"><?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab3_es) ?></button>
    <button class="tablinks" onclick="openCity(event, '<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab4_es) ?>')"><?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab4_es) ?></button>
</div>
<!-- Tab content -->
<div id="Fotos" class="tabcontent-lp">
    <div class="container">
        <div class="row">
            <?php if (empty($dados['dolarFotoServico'])) { ?>
                <div class="col-md-4">
                    <p>Pronto</p>
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

<div id="<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab1_es) ?>" class="tabcontent-lp">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico1tab1_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico1tab1_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico2tab1_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico2tab1_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico3tab1_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico3tab1_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico4tab1_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico4tab1_es ?></li>
                <?php } ?>
            </ol>
        </div>
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico5tab1_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico5tab1_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico6tab1_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico6tab1_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico7tab1_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico7tab1_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico8tab1_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico8tab1_es ?></li>
                <?php } ?>
            </ol>
        </div>
    </div>
</div>

<div id="<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab2_es) ?>" class="tabcontent-lp">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico1tab2_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico1tab2_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico2tab2_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico2tab2_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico3tab2_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico3tab2_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico4tab2_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico4tab2_es ?></li>
                <?php } ?>
            </ol>
        </div>
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico5tab2_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico5tab2_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico6tab2_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico6tab2_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico7tab2_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico7tab2_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico8tab2_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico8tab2_es ?></li>
                <?php } ?>
            </ol>
        </div>
    </div>
</div>

<div id="<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab3_es) ?>" class="tabcontent-lp">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico1tab3_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico1tab3_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico2tab3_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico2tab3_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico3tab3_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico3tab3_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico4tab3_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico4tab3_es ?></li>
                <?php } ?>
            </ol>
        </div>
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico5tab3_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico5tab3_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico6tab3_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico6tab3_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico7tab3_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico7tab3_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico8tab3_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico8tab3_es ?></li>
                <?php } ?>
            </ol>
        </div>
    </div>
</div>

<div id="<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab4_es) ?>" class="tabcontent-lp">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico1tab4_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico1tab4_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico2tab4_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico2tab4_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico3tab4_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico3tab4_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico4tab4_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico4tab4_es ?></li>
                <?php } ?>
            </ol>
        </div>
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico5tab4_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico5tab4_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico6tab4_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico6tab4_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico7tab4_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico7tab4_es ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico8tab4_es != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico8tab4_es ?></li>
                <?php } ?>
            </ol>
        </div>
    </div>
</div>