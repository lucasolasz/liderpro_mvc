<div class="container py-5">

    <?= Alertas::mensagem('apresentacaoLogo') ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL . "\\Painel\\index" ?>">Painel</a></li>
            <li class="breadcrumb-item active" aria-current="page">Apresentação da Logo</li>
        </ol>
    </nav>

    <div class="card">

        <div class="artcor card-header">

            <h5 class="tituloIndex">Apresentação da Logo
                <!-- <div style="float: right;">
                    <a href="<?= URL . "\\ApresentacaoLogos\\cadastrarApresentacaoLogo" ?>" class="btn lp-btn-liderpro">Nova Configuração</a>
                </div> -->
            </h5>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome Configuração</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Exibe mensagem caso não tenha nenhum evento
                        if (empty($dados['configLogo'])) { ?>
                            <tr>
                                <td colspan="2" class="align-middle">Nenhuma configuração cadastrada</td>
                            </tr>
                        <?php  }

                        foreach ($dados['configLogo'] as $configLogo) { ?>
                            <tr>
                                <td><?= ucfirst($configLogo->ds_conf_logo) ?></td>
                                <td><a href="<?= URL . '\\ApresentacaoLogos\\editarApresentacaoLogo\\' . $configLogo->id_conf_logo ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                </td>
                                <td>
                                    <form action="<?= URL . "\\ApresentacaoLogos\\deletarApresentacaoLogo\\$configLogo->id_conf_logo" ?>" method="POST">
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