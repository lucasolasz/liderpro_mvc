<div class="container py-5">

    <?= Alertas::mensagem('cliente') ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL . "\\Painel\\index" ?>">Painel</a></li>
            <li class="breadcrumb-item active" aria-current="page">Clientes</li>
        </ol>
    </nav>

    <div class="card">

        <div class="artcor card-header">

            <h5 class="tituloIndex">Clientes
                <div style="float: right;">
                    <a href="<?= URL . "\\Clientes\\cadastrarCliente" ?>" class="btn lp-btn-liderpro">Novo cliente</a>
                </div>
            </h5>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome Cliente</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Exibe mensagem caso não tenha nenhum evento
                        if (empty($dados['visualizaClientes'])) { ?>
                            <tr>
                                <td colspan="2" class="align-middle">Nenhum cliente cadastrado</td>
                            </tr>
                        <?php  }

                        foreach ($dados['visualizaClientes'] as $visualizaClientes) { ?>
                            <tr>
                                <td><?= ucfirst($visualizaClientes->ds_nome_fantasia) ?></td>
                                <td><a href="<?= URL . '\\Clientes\\editarCliente\\' . $visualizaClientes->id_cliente ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                </td>
                                <td>
                                    <form action="<?= URL . "\\Clientes\\deletarCliente\\$visualizaClientes->id_cliente" ?>" method="POST">
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