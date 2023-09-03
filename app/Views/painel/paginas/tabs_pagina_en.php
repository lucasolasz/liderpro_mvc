<h2 class="py-3">Services</h2>

<!-- Tab links -->
<div class="tab-lp">
    <button class="tablinks" onclick="openCity(event, 'Fotos')" id="defaultOpen">PHOTOS</button>
    <button class="tablinks" onclick="openCity(event, '<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab1_en) ?>')"><?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab1_en) ?></button>
    <button class="tablinks" onclick="openCity(event, '<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab2_en) ?>')"><?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab2_en) ?></button>
    <button class="tablinks" onclick="openCity(event, '<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab3_en) ?>')"><?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab3_en) ?></button>
    <button class="tablinks" onclick="openCity(event, '<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab4_en) ?>')"><?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab4_en) ?></button>
</div>
<!-- Tab content -->
<div id="Fotos" class="tabcontent-lp">
    <div class="container">
        <div class="row">
            <?php if (empty($dados['dolarFotoServico'])) { ?>
                <div class="col-md-4">
                    <p>Soon</p>
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

<div id="<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab1_en) ?>" class="tabcontent-lp">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico1tab1_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico1tab1_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico2tab1_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico2tab1_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico3tab1_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico3tab1_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico4tab1_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico4tab1_en ?></li>
                <?php } ?>
            </ol>
        </div>
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico5tab1_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico5tab1_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico6tab1_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico6tab1_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico7tab1_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico7tab1_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico8tab1_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico8tab1_en ?></li>
                <?php } ?>
            </ol>
        </div>
    </div>
</div>

<div id="<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab2_en) ?>" class="tabcontent-lp">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico1tab2_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico1tab2_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico2tab2_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico2tab2_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico3tab2_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico3tab2_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico4tab2_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico4tab2_en ?></li>
                <?php } ?>
            </ol>
        </div>
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico5tab2_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico5tab2_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico6tab2_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico6tab2_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico7tab2_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico7tab2_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico8tab2_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico8tab2_en ?></li>
                <?php } ?>
            </ol>
        </div>
    </div>
</div>

<div id="<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab3_en) ?>" class="tabcontent-lp">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico1tab3_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico1tab3_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico2tab3_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico2tab3_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico3tab3_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico3tab3_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico4tab3_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico4tab3_en ?></li>
                <?php } ?>
            </ol>
        </div>
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico5tab3_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico5tab3_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico6tab3_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico6tab3_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico7tab3_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico7tab3_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico8tab3_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico8tab3_en ?></li>
                <?php } ?>
            </ol>
        </div>
    </div>
</div>

<div id="<?= mb_strtoupper($dados['paginaSelecionada'][0]->ds_tab4_en) ?>" class="tabcontent-lp">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico1tab4_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico1tab4_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico2tab4_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico2tab4_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico3tab4_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico3tab4_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico4tab4_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico4tab4_en ?></li>
                <?php } ?>
            </ol>
        </div>
        <div class="col-md-6 col-lg-6">
            <ol class="lp-lista-tab">
                <?php if ($dados['paginaSelecionada'][0]->ds_topico5tab4_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico5tab4_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico6tab4_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico6tab4_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico7tab4_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico7tab4_en ?></li>
                <?php } ?>
                <?php if ($dados['paginaSelecionada'][0]->ds_topico8tab4_en != "") { ?>
                    <li><?= $dados['paginaSelecionada'][0]->ds_topico8tab4_en ?></li>
                <?php } ?>
            </ol>
        </div>
    </div>
</div>