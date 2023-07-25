<div class="container py-5">

    <?= Alertas::mensagem('apresentacaoLogo') ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL . "/Painel/index" ?>">Painel</a></li>
            <li class="breadcrumb-item active" aria-current="page">Apresentação da Logo</li>
        </ol>
    </nav>

    <div class="card">

        <div class="artcor card-header">

            <h5 class="tituloIndex">Apresentação da Logo
                <!-- <div style="float: right;">
                    <a href="<?= URL . "/ApresentacaoLogos/cadastrarApresentacaoLogo" ?>" class="btn lp-btn-liderpro">Nova Configuração</a>
                </div> -->
            </h5>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tableDataTablePtBr" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome Configuração</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dados['configLogo'] as $configLogo) { ?>
                            <tr>
                                <td><?= ucfirst($configLogo->ds_conf_logo) ?></td>
                                <td>
                                    <a href="<?= URL . '/ApresentacaoLogos/editarApresentacaoLogo/' . $configLogo->id_conf_logo ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Editar</a>

                                    <a href="<?= URL . "/ApresentacaoLogos/deletarApresentacaoLogo/$configLogo->id_conf_logo" ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i> Exlcuir</a>
                                </td>
                            <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>