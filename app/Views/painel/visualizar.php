<div class="container py-5">

    <?= Alertas::mensagem('paginas') ?>

    <div class="card">

        <div class="artcor card-header">

            <h5 class="tituloIndex">Páginas
                <div style="float: right;">
                    <a href="<?= URL ?>\\Painel\\cadastrarPagina" class="btn lp-btn-liderpro">Nova Página</a>
                </div>
            </h5>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome Página</th>
                            <th scope="col">Página ativa</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        // Exibe mensagem caso não tenha nenhum evento
                        if (empty($dados['visualizaPaginas'])) { ?>
                            <tr>
                                <td colspan="3" class="align-middle">Nenhuma página cadastrada</td>
                            </tr>
                        <?php  }

                        foreach ($dados['visualizaPaginas'] as $visualizaPaginas) { ?>

                            <tr>
                                <td><?= ucfirst($visualizaPaginas->ds_pagina) ?></td>
                                <td><?php echo $visualizaPaginas->chk_pagina_ativa == 'S' ? "SIM" : "NÃO" ?></td>
                                <td><a href="<?= URL . '\\Painel\\editarPagina\\' . $visualizaPaginas->id_pagina ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                </td>
                            <td>
                                <form action="<?= URL . "\\Painel\\deletarPagina\\$visualizaPaginas->id_pagina?nome_pagina=" . base64_encode($visualizaPaginas->ds_breadcrumb_menu) ?>" method="POST">
                                    <button type="submit" class="btn btn-danger"><span><i class="bi bi-trash-fill"></i></span></button>
                                </form>
                            </td>

                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>