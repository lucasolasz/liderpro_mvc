<div class="container py-5">

    <?= Alertas::mensagem('paginas') ?>

    <div class="card">

        <div class="artcor card-header">

            <h5 class="tituloIndex">Páginas
                <div style="float: right;">
                    <a href="<?= URL ?>/Painel/cadastrarPagina" class="btn lp-btn-liderpro">Nova Página</a>
                </div>
            </h5>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome Página</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        // Exibe mensagem caso não tenha nenhum evento
                        if (empty($dados['paginas'])) { ?>
                            <tr>
                                <td colspan="2" class="align-middle">Nenhuma página cadastrada</td>
                            </tr>
                        <?php  }

                        foreach ($dados['paginas'] as $paginas) { ?>

                            <tr>
                                <td><?= ucfirst($paginas->ds_menu) ?></td>
                                <td><a href="<?= URL . '/Painel/editarPagina/' . $paginas->id_menu ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                </td>
                            <td>
                                <form action="<?= URL . '/Painel/deletarPagina  /' . $paginas->id_menu ?>" method="POST">
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