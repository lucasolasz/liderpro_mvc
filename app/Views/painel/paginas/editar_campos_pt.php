<div class="form-group mt-4">
    <label for="txtTitutoPagina" id="tituloPaginalbl">Título da página</label>
    <input type="input" class="form-control" id="txtTitutoPagina" name="txtTitutoPagina" value="<?= $dados['paginaSelecionada'][0]->ds_pagina ?>" readonly>
    <small id="recebeAlertaTituloMensagem"></small>
</div>

<div class="d-flex mb-3">
    <div class="w-100 bd-highlight">
        <label for="fileBannerPrincipal" id="tituloPaginalblBanner">Foto Banner Principal</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="fileBannerPrincipal" accept="image/png, image/jpeg" name="fileBannerPrincipal">
                <label class="custom-file-label fileBannerPrincipal bannerPrincipalLabelInterna" for="fileBannerPrincipal">Escolha uma imagem para substituir a atual</label>
            </div>
        </div>
    </div>
    <div class="ml-1 flex-shrink-1 align-self-end bd-highlight">
        <button class="btn btn-danger" type="button" id="limparUploadBannerPrincipal">Limpar</button></label>
    </div>
    <small id="recebeMensagemBanner"></small>
</div>

<?= Alertas::mensagemApagaFoto('imagemBanner') ?>
<?php if (empty($dados['fotoBanner'])) { ?>
    <div class="row">
        <div class="col ml-0">
            <small style="color: red">Nenhuma foto de banner enviada</small>
        </div>
    </div>
<?php } else { ?>
    <?php foreach ($dados['fotoBanner'] as $fotoBanner) { ?>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-4 ">
                    <div class="card mb-4">
                        <img src="<?= URL . "/uploads/$fotoBanner->nm_path_arquivo/$fotoBanner->nm_arquivo " ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <div class="text-center">
                                <p>Foto atual</p>
                                <a href="<?= URL . "/Painel/deletarImagemFormulario/$fotoBanner->id_foto_banner?id_pagina=" . base64_encode($dados['paginaSelecionada'][0]->id_pagina) . '&nome_tabela=' . base64_encode("tb_foto_banner") . '&nome_alerta=' . base64_encode("imagemBanner") . '&nome_mensagem=' . base64_encode("Banner") ?>" class="btn btn-danger mt-1"> Excluir imagem <i class="bi bi-trash-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php }
} ?>

<hr>

<div class="d-flex mb-3">
    <div class="w-100 bd-highlight">
        <label for="filePerguntas" id="perguntasLabel">Fotos Perguntas (Max 3 arquivos)</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="filePerguntas" accept="image/png, image/jpeg" name="filePerguntas[]" multiple>
            <label class="custom-file-label filePerguntas perguntasLabelInterna" for="filePerguntas">Escolha as imagens para substituir as atuais</label>
        </div>
        <small id="recebeMensagemPergunta"></small>
    </div>
    <div class="ml-1 flex-shrink-1 align-self-end bd-highlight">
        <button class="btn btn-danger" type="button" id="limparUploadPerguntas">Limpar</button></label>
    </div>
</div>

<?= Alertas::mensagemApagaFoto('imagemPergunta') ?>

<?php if (empty($dados['fotoPergunta'])) { ?>
    <div class="row">
        <div class="col ml-0">
            <small style="color: red">Nenhuma foto de pergunta enviada</small>
        </div>
    </div>
<?php } else { ?>
    <div class="container">
        <div class="row">
            <?php foreach ($dados['fotoPergunta'] as $fotoPergunta) { ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="<?= URL . "/uploads/$fotoPergunta->nm_path_arquivo/$fotoPergunta->nm_arquivo " ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <div class="text-center">
                                <p>Foto atual</p>
                                <a href="<?= URL . "/Painel/deletarImagemFormulario/$fotoPergunta->id_foto_pergunta?id_pagina=" . base64_encode($dados['paginaSelecionada'][0]->id_pagina) . '&nome_tabela=' . base64_encode("tb_foto_pergunta") . '&nome_alerta=' . base64_encode("imagemPergunta") . '&nome_mensagem=' . base64_encode("Pergunta") ?>" class="btn btn-danger mt-1"> Excluir imagem <i class="bi bi-trash-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php  } ?>

<hr>

<div class="form-group">
    <label for="txtTextPrincipal">Texto Principal</label>
    <textarea class="form-control" id="txtTextPrincipal" name="txtTextPrincipal" rows="8"><?= $dados['paginaSelecionada'][0]->ds_texto_principal ?></textarea>
</div>

<div class="d-flex mb-3">
    <div class="w-100 bd-highlight">
        <label for="fileFotoTexto" id="tituloPaginalblFotoTexto">Foto texto</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="fileFotoTexto" accept="image/png, image/jpeg" name="fileFotoTexto">
            <label class="custom-file-label fileFotoTexto fotoTextoLabelInterna" for="fileFotoTexto">Escolha uma imagem para substituir a atual</label>
        </div>
    </div>
    <small id="recebeMensagemFotoTexto"></small>
    <div class="ml-1 flex-shrink-1 align-self-end bd-highlight">
        <button class="btn btn-danger" type="button" id="limparUploadBannerFotoTexto">Limpar</button></label>
    </div>
</div>

<?= Alertas::mensagemApagaFoto('imagemTexto') ?>
<?php if (empty($dados['fotoTexto'])) { ?>
    <div class="row">
        <div class="col ml-0">
            <small style="color: red">Nenhuma foto de texto enviada</small>
        </div>
    </div>
<?php } else { ?>
    <?php foreach ($dados['fotoTexto'] as $fotoTexto) { ?>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-4 ">
                    <div class="card mb-4">
                        <img src="<?= URL . "/uploads/$fotoTexto->nm_path_arquivo/$fotoTexto->nm_arquivo " ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <div class="text-center">
                                <p>Foto atual</p>
                                <a href="<?= URL . "/Painel/deletarImagemFormulario/$fotoTexto->id_foto_texto?id_pagina=" . base64_encode($dados['paginaSelecionada'][0]->id_pagina) . '&nome_tabela=' . base64_encode("tb_foto_texto") . '&nome_alerta=' . base64_encode("imagemTexto") . '&nome_mensagem=' . base64_encode("Foto texto") ?>" class="btn btn-danger mt-1"> Excluir imagem <i class="bi bi-trash-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php }
} ?>


<hr>

<h5 class="lp-paragrafo">CAMPOS REFERENTES A TABELA INFERIOR DA TELA</h5>

<div class="row mt-5">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Fotos</a>
                <a class="nav-item nav-link" id="tab-1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="false">Tab 1</a>
                <a class="nav-item nav-link" id="tab-2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Tab 2</a>
                <a class="nav-item nav-link" id="tab-3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Tab 3</a>
                <a class="nav-item nav-link" id="tab-4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Tab 4</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row p-2">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="d-flex">
                            <div class="w-100 bd-highlight">
                                <label for="fileFotosServico" id="tituloPaginalblFotoServico">Fotos do Serviço</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="fileFotosServico" accept="image/png, image/jpeg" name="fileFotosServico[]" multiple>
                                    <label class="custom-file-label fileFotosServico fotoServicoLabelInterna" for="fileFotosServico">Escolha uma imagem para substituir a atual</label>
                                </div>
                                <small id="recebeMensagemFotoServico"></small>
                            </div>
                            <div class="ml-1 flex-shrink-1 align-self-end bd-highlight">
                                <button class="btn btn-danger" type="button" id="limparUploadBannerFotoServico">Limpar</button></label>
                            </div>
                        </div>

                        <?= Alertas::mensagemApagaFoto('imagemServico') ?>

                        <?php if (empty($dados['fotoServico'])) { ?>
                            <div class="row">
                                <div class="col ml-0">
                                    <small style="color: red">Nenhuma foto de serviço enviada</small>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="container">
                                <div class="row">
                                    <?php foreach ($dados['fotoServico'] as $fotoServico) { ?>
                                        <div class="col-md-4">
                                            <div class="card mb-4">
                                                <img src="<?= URL . "/uploads/$fotoServico->nm_path_arquivo/$fotoServico->nm_arquivo " ?>" class="card-img-top" alt="">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <p>Foto atual</p>
                                                        <a href="<?= URL . "/Painel/deletarImagemFormulario/$fotoServico->id_foto_servico?id_pagina=" . base64_encode($dados['paginaSelecionada'][0]->id_pagina) . '&nome_tabela=' . base64_encode("tb_foto_servico") . '&nome_alerta=' . base64_encode("imagemServico") . '&nome_mensagem=' . base64_encode("Foto Serviço") ?>" class="btn btn-danger mt-1"> Excluir imagem <i class="bi bi-trash-fill"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-1" role="tabpanel" aria-labelledby="nav-profile-tab">

                <div class="row p-4">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="form-group">
                            <label for="txtNomeTab1">Descrição Tab 1</label>
                            <input type="input" class="form-control" name="txtNomeTab1" id="txtNomeTab1" value="<?= $dados['paginaSelecionada'][0]->ds_tab1 ?>">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ml-4">
                                    <label for="txtTopico1Tab1">Tópico 1 Tab 1</label>
                                    <input type="input" class="form-control" name="txtTopico1Tab1" value="<?= $dados['paginaSelecionada'][0]->ds_topico1tab1 ?>" id="txtTopico1Tab1">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico2Tab1">Tópico 2 Tab 1</label>
                                    <input type="input" class="form-control" name="txtTopico2Tab1" value="<?= $dados['paginaSelecionada'][0]->ds_topico2tab1 ?>" id="txtTopico2Tab1">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico3Tab1">Tópico 3 Tab 1</label>
                                    <input type="input" class="form-control" name="txtTopico3Tab1" value="<?= $dados['paginaSelecionada'][0]->ds_topico3tab1 ?>" id="txtTopico3Tab1">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico4Tab1">Tópico 4 Tab 1</label>
                                    <input type="input" class="form-control" name="txtTopico4Tab1" value="<?= $dados['paginaSelecionada'][0]->ds_topico4tab1 ?>" id="txtTopico4Tab1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ml-4">
                                    <label for="txtTopico5Tab1">Tópico 5 Tab 1</label>
                                    <input type="input" class="form-control" name="txtTopico5Tab1" value="<?= $dados['paginaSelecionada'][0]->ds_topico5tab1 ?>" id="txtTopico5Tab1">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico6Tab1">Tópico 6 Tab 1</label>
                                    <input type="input" class="form-control" name="txtTopico6Tab1" value="<?= $dados['paginaSelecionada'][0]->ds_topico6tab1 ?>" id="txtTopico6Tab1">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico7Tab1">Tópico 7 Tab 1</label>
                                    <input type="input" class="form-control" name="txtTopico7Tab1" value="<?= $dados['paginaSelecionada'][0]->ds_topico7tab1 ?>" id="txtTopico7Tab1">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico8Tab1">Tópico 8 Tab 1</label>
                                    <input type="input" class="form-control" name="txtTopico8Tab1" value="<?= $dados['paginaSelecionada'][0]->ds_topico8tab1 ?>" id="txtTopico8Tab1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row p-4">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="form-group">
                            <label for="txtNomeTab2">Descrição Tab 2</label>
                            <input type="input" class="form-control" name="txtNomeTab2" id="txtNomeTab2" value="<?= $dados['paginaSelecionada'][0]->ds_tab2 ?>">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ml-4">
                                    <label for="txtTopico1Tab2">Tópico 1 Tab 2</label>
                                    <input type="input" class="form-control" name="txtTopico1Tab2" value="<?= $dados['paginaSelecionada'][0]->ds_topico1tab2 ?>" id="txtTopico1Tab2">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico2Tab2">Tópico 2 Tab 2</label>
                                    <input type="input" class="form-control" name="txtTopico2Tab2" value="<?= $dados['paginaSelecionada'][0]->ds_topico2tab2 ?>" id="txtTopico2Tab2">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico3Tab2">Tópico 3 Tab 2</label>
                                    <input type="input" class="form-control" name="txtTopico3Tab2" value="<?= $dados['paginaSelecionada'][0]->ds_topico3tab2 ?>" id="txtTopico3Tab2">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico4Tab2">Tópico 4 Tab 2</label>
                                    <input type="input" class="form-control" name="txtTopico4Tab2" value="<?= $dados['paginaSelecionada'][0]->ds_topico4tab2 ?>" id="txtTopico4Tab2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ml-4">
                                    <label for="txtTopico5Tab2">Tópico 5 Tab 2</label>
                                    <input type="input" class="form-control" name="txtTopico5Tab2" value="<?= $dados['paginaSelecionada'][0]->ds_topico5tab2 ?>" id="txtTopico5Tab2">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico6Tab2">Tópico 6 Tab 2</label>
                                    <input type="input" class="form-control" name="txtTopico6Tab2" value="<?= $dados['paginaSelecionada'][0]->ds_topico6tab2 ?>" id="txtTopico6Tab2">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico7Tab2">Tópico 7 Tab 2</label>
                                    <input type="input" class="form-control" name="txtTopico7Tab2" value="<?= $dados['paginaSelecionada'][0]->ds_topico7tab2 ?>" id="txtTopico7Tab2">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico8Tab2">Tópico 8 Tab 2</label>
                                    <input type="input" class="form-control" name="txtTopico8Tab2" value="<?= $dados['paginaSelecionada'][0]->ds_topico8tab2 ?>" id="txtTopico8Tab2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row p-4">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="form-group">
                            <label for="txtNomeTab3">Descrição Tab 3</label>
                            <input type="input" class="form-control" name="txtNomeTab3" id="txtNomeTab3" value="<?= $dados['paginaSelecionada'][0]->ds_tab3 ?>">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ml-4">
                                    <label for="txtTopico1Tab3">Tópico 1 Tab 3</label>
                                    <input type="input" class="form-control" name="txtTopico1Tab3" value="<?= $dados['paginaSelecionada'][0]->ds_topico1tab3 ?>" id="txtTopico1Tab3">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico2Tab3">Tópico 2 Tab 3</label>
                                    <input type="input" class="form-control" name="txtTopico2Tab3" value="<?= $dados['paginaSelecionada'][0]->ds_topico2tab3 ?>" id="txtTopico2Tab3">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico3Tab3">Tópico 3 Tab 3</label>
                                    <input type="input" class="form-control" name="txtTopico3Tab3" value="<?= $dados['paginaSelecionada'][0]->ds_topico3tab3 ?>" id="txtTopico3Tab3">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico4Tab3">Tópico 4 Tab 3</label>
                                    <input type="input" class="form-control" name="txtTopico4Tab3" value="<?= $dados['paginaSelecionada'][0]->ds_topico4tab3 ?>" id="txtTopico4Tab3">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ml-4">
                                    <label for="txtTopico5Tab3">Tópico 5 Tab 3</label>
                                    <input type="input" class="form-control" name="txtTopico5Tab3" value="<?= $dados['paginaSelecionada'][0]->ds_topico5tab3 ?>" id="txtTopico5Tab3">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico6Tab3">Tópico 6 Tab 3</label>
                                    <input type="input" class="form-control" name="txtTopico6Tab3" value="<?= $dados['paginaSelecionada'][0]->ds_topico6tab3 ?>" id="txtTopico6Tab3">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico7Tab3">Tópico 7 Tab 3</label>
                                    <input type="input" class="form-control" name="txtTopico7Tab3" value="<?= $dados['paginaSelecionada'][0]->ds_topico7tab3 ?>" id="txtTopico7Tab3">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico8Tab3">Tópico 8 Tab 3</label>
                                    <input type="input" class="form-control" name="txtTopico8Tab3" value="<?= $dados['paginaSelecionada'][0]->ds_topico8tab3 ?>" id="txtTopico8Tab3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row p-4">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="form-group">
                            <label for="txtNomeTab4">Descrição Tab 4</label>
                            <input type="input" class="form-control" name="txtNomeTab4" id="txtNomeTab4" value="<?= $dados['paginaSelecionada'][0]->ds_tab4 ?>">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ml-4">
                                    <label for="txtTopico1Tab4">Tópico 1 Tab 4</label>
                                    <input type="input" class="form-control" name="txtTopico1Tab4" value="<?= $dados['paginaSelecionada'][0]->ds_topico1tab4 ?>" id="txtTopico1Tab4">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico2Tab4">Tópico 2 Tab 4</label>
                                    <input type="input" class="form-control" name="txtTopico2Tab4" value="<?= $dados['paginaSelecionada'][0]->ds_topico2tab4 ?>" id="txtTopico2Tab4">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico3Tab4">Tópico 3 Tab 4</label>
                                    <input type="input" class="form-control" name="txtTopico3Tab4" value="<?= $dados['paginaSelecionada'][0]->ds_topico3tab4 ?>" id="txtTopico3Tab4">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico4Tab4">Tópico 4 Tab 4</label>
                                    <input type="input" class="form-control" name="txtTopico4Tab4" value="<?= $dados['paginaSelecionada'][0]->ds_topico4tab4 ?>" id="txtTopico4Tab4">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ml-4">
                                    <label for="txtTopico5Tab4">Tópico 5 Tab 4</label>
                                    <input type="input" class="form-control" name="txtTopico5Tab4" value="<?= $dados['paginaSelecionada'][0]->ds_topico5tab4 ?>" id="txtTopico5Tab4">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico6Tab4">Tópico 6 Tab 4</label>
                                    <input type="input" class="form-control" name="txtTopico6Tab4" value="<?= $dados['paginaSelecionada'][0]->ds_topico6tab4 ?>" id="txtTopico6Tab4">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico7Tab4">Tópico 7 Tab 4</label>
                                    <input type="input" class="form-control" name="txtTopico7Tab4" value="<?= $dados['paginaSelecionada'][0]->ds_topico7tab4 ?>" id="txtTopico7Tab4">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico8Tab4">Tópico 8 Tab 4</label>
                                    <input type="input" class="form-control" name="txtTopico8Tab4" value="<?= $dados['paginaSelecionada'][0]->ds_topico8tab4 ?>" id="txtTopico8Tab4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$paginaCheckedSim = $dados['paginaSelecionada'][0]->chk_pagina_ativa == 'S' ? 'checked' : '';
$paginaCheckedNao = $dados['paginaSelecionada'][0]->chk_pagina_ativa == 'N' ? 'checked' : '';
?>

<div class="form-check">
    <label class="form-check-label mt-3 mb-2">
        Página Ativa?
    </label>
</div>
<div class="form-check">
    <div class="form-check form-check-inline">
        <label class="form-check-label" for="chkPaginaAtiva">
            Sim
            <input class="form-check-input" type="radio" name="chkPaginaAtiva" id="chkPaginaAtiva" value="S" <?= $paginaCheckedSim ?>>
        </label>
    </div>

    <div class="form-check form-check-inline">
        <label class="form-check-label" for="chkPaginaAtiva">
            Não
            <input class="form-check-input" type="radio" name="chkPaginaAtiva" id="chkPaginaAtiva" value="N" <?= $paginaCheckedNao ?>>
        </label>
    </div>
</div>