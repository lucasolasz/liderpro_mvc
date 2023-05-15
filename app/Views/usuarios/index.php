<div class="container py-5">

    <?= Alertas::mensagem('usuario') ?>

    <div class="card">

        <div class="artcor card-header">

            <h5 class="tituloIndex">Usuários
                <div style="float: right;">
                    <a href="<?= URL . "\\UsuariosController\\cadastrar" ?>" class="btn lp-btn-liderpro">Novo usuário</a>
                </div>
            </h5>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome usuário</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Exibe mensagem caso não tenha nenhum evento
                        if (empty($dados['usuarios'])) { ?>
                            <tr>
                                <td colspan="2" class="align-middle">Nenhum usuário cadastrado</td>
                            </tr>
                        <?php  }

                        foreach ($dados['usuarios'] as $usuarios) { ?>
                            <tr>
                                <td><?= ucfirst($usuarios->ds_nome_usuario) ?></td>
                                <td><a href="<?= URL . '\\UsuariosController\\editarUsuario\\' . $usuarios->id_usuario ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                </td>
                                <td>
                                    <form action="<?= URL . "\\UsuariosController\\deletarUsuario\\$usuarios->id_usuario" ?>" method="POST">
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