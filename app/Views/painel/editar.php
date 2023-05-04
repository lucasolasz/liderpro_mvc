<div class="mx-auto p-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL ?>\\Painel\\visualizarPaginas">Páginas</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= ucfirst($dados['paginaSelecionada'][0]->ds_pagina) ?></li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <h2>Editar Página</h2>
            <small>Preencha o formulário abaixo para cadastrar uma nova página</small>

            <form name="cadastrar" method="POST" action="<?= URL . '\\Painel\\editarPagina\\' . $dados['paginaSelecionada'][0]->id_pagina ?>" enctype="multipart/form-data">

                <div class="form-group mt-4">
                    <label for="txtTitutoPagina">Título da página</label>
                    <input type="input" class="form-control" id="txtTitutoPagina" name="txtTitutoPagina" value="<?= $dados['paginaSelecionada'][0]->ds_pagina ?>">
                </div>

                <div class="form-group">
                    <label for="fileBannerPrincipal">Foto Banner Principal</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fileBannerPrincipal" name="fileBannerPrincipal" lang="pt">
                        <label class="custom-file-label fileBannerPrincipal" for="fileBannerPrincipal"></label>
                    </div>
                </div>

                <?= Alertas::mensagemApagaFoto('imagemBanner') ?>
                <?php if (empty($dados['fotoBanner'])) { ?>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <small style="color: red">Nenhuma foto de banner enviada</small>
                        </div>
                    </div>
                <?php } else { ?>
                    <?php foreach ($dados['fotoBanner'] as $fotoBanner) { ?>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="card" style="width: 30rem;">
                                <img src="<?= URL . "\\uploads\\$fotoBanner->nm_path_arquivo\\$fotoBanner->nm_arquivo " ?>" class="card-img-top" alt="">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p>Foto atual</p>
                                        <a href="<?= URL . "\\Painel\\deletarImagemBanner\\$fotoBanner->id_foto_banner?id_pagina=" . $dados['paginaSelecionada'][0]->id_pagina ?>" class="btn btn-danger mt-1"> Excluir imagem <i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>

                <hr>

                <div class="form-group">
                    <label for="filePerguntas">Fotos Perguntas (Max 3 arquivos)</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="filePerguntas" lang="pt" accept="image/png, image/jpeg" name="filePerguntas[]" multiple>
                        <label class="custom-file-label filePerguntas" for="filePerguntas"></label>
                    </div>
                </div>

                <?= Alertas::mensagemApagaFoto('imagemPergunta') ?>
                <div class="row">
                    <div class="d-flex align-items-center justify-content-center">
                        <?php if (empty($dados['fotoPergunta'])) { ?>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <small style="color: red">Nenhuma foto de pergunta enviada</small>
                            </div>
                        <?php } else { ?>
                            <?php foreach ($dados['fotoPergunta'] as $fotoPergunta) { ?>
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <div class="card">
                                        <div class="p-5">
                                            <img src="<?= URL . "\\uploads\\$fotoPergunta->nm_path_arquivo\\$fotoPergunta->nm_arquivo " ?>" class="card-img-top" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center">
                                                <p>Foto atual</p>
                                                <a href="<?= URL . "\\Painel\\deletarImagemPergunta\\$fotoPergunta->id_foto_pergunta?id_pagina=" . $dados['paginaSelecionada'][0]->id_pagina ?>" class="btn btn-danger mt-1"> Excluir imagem <i class="bi bi-trash-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>

                <hr>

                <div class="form-group">
                    <label for="txtTextPrincipal">Texto Principal</label>
                    <textarea class="form-control" id="txtTextPrincipal" name="txtTextPrincipal" rows="8"><?= $dados['paginaSelecionada'][0]->ds_texto_principal ?></textarea>
                </div>

                <hr>

                <div class="form-group mt-4">
                    <label for="fileFotoTexto">Foto texto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fileFotoTexto" name="fileFotoTexto" lang="pt">
                        <label class="custom-file-label fileFotoTexto" for="fileFotoTexto"></label>
                    </div>
                </div>

                <?= Alertas::mensagemApagaFoto('imagemTexto') ?>
                <?php if (empty($dados['fotoTexto'])) { ?>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <small style="color: red">Nenhuma foto de texto enviada</small>
                        </div>
                    </div>
                <?php } else { ?>
                    <?php foreach ($dados['fotoTexto'] as $fotoTexto) { ?>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <img src="<?= URL . "\\uploads\\$fotoTexto->nm_path_arquivo\\$fotoTexto->nm_arquivo " ?>" class="card-img-top" alt="">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p>Foto atual</p>
                                        <a href="<?= URL . "\\Painel\\deletarImagemTexto\\$fotoTexto->id_foto_texto?id_pagina=" . $dados['paginaSelecionada'][0]->id_pagina ?>" class="btn btn-danger mt-1"> Excluir imagem <i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>


                <hr>

                <h5 class="lp-paragrafo">CAMPOS REFERENTES A TABELA INFERIOR DA TELA</h5>


                <div class="form-group mt-4">
                    <label for="fileFotosServico">Fotos do Serviço</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fileFotosServico" lang="pt" accept="image/png, image/jpeg" name="fileFotosServico[]" multiple>
                        <label class="custom-file-label fileFotosServico" for="fileFotosServico"></label>
                    </div>
                </div>

                <?= Alertas::mensagemApagaFoto('imagemServico') ?>
                <div class="row">
                    <div class="d-flex align-items-center justify-content-center">
                        <?php if (empty($dados['fotoServico'])) { ?>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <small style="color: red">Nenhuma foto de serviço enviada</small>
                            </div>
                        <?php } else { ?>
                            <?php foreach ($dados['fotoServico'] as $fotoServico) { ?>
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <div class="card">
                                        <div class="p-5">
                                            <img src="<?= URL . "\\uploads\\$fotoServico->nm_path_arquivo\\$fotoServico->nm_arquivo " ?>" class="card-img-top" alt="">
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center">
                                                <p>Foto atual</p>
                                                <a href="<?= URL . "\\Painel\\deletarImagemServico\\$fotoServico->id_foto_servico?id_pagina=" . $dados['paginaSelecionada'][0]->id_pagina ?>" class="btn btn-danger mt-1"> Excluir imagem <i class="bi bi-trash-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>

                <hr>

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



                <div class="row mt-4">
                    <div class="col-md-6">
                        <input type="submit" value="Salvar" id="btn" class="btn lp-btn-liderpro">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    // Add the following code if you want the name of the file appear on select
    $("#fileBannerPrincipal").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".fileBannerPrincipal").addClass("selected").html(fileName);
    });

    $("#filePerguntas").on("change", function() {
        var files = Array.from(this.files)
        var fileName = files.map(f => {
            return f.name
        }).join(", ")
        $(this).siblings(".filePerguntas").addClass("selected").html(fileName);
    });

    // Add the following code if you want the name of the file appear on select
    $("#fileFotoTexto").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".fileFotoTexto").addClass("selected").html(fileName);
    });

    $("#fileFotosServico").on("change", function() {
        var files = Array.from(this.files)
        var fileName = files.map(f => {
            return f.name
        }).join(", ")
        $(this).siblings(".fileFotosServico").addClass("selected").html(fileName);
    });


    $(document).ready(function() {
        setInterval(function() {
            $(".msg-texto").hide(1000);
        }, 2000);
    });
</script>