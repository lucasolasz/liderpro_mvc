<div class="container py-5">

    <?= Alertas::mensagem('segmento') ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL . "/Painel/index" ?>">Painel</a></li>
            <li class="breadcrumb-item active" aria-current="page">Segmentos</li>
        </ol>
    </nav>

    <div class="card">
        <div class="artcor card-header">
            <h5 class="tituloIndex">Segmentos
                <div style="float: right;">
                    <a href="<?= URL . "/Segmentos/cadastrarSegmento" ?>" class="btn lp-btn-liderpro">Novo segmento</a>
                </div>
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tableDataTablePtBr" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome Segmento</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dados['visualizarSegmentos'] as $visualizarSegmentos) { ?>
                            <tr>
                                <td><?= ucfirst($visualizarSegmentos->ds_segmento) ?></td>
                                <td>
                                    <a href="<?= URL . '/Segmentos/editarSegmento/' . $visualizarSegmentos->id_segmento ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Editar</a>

                                    <a href="<?= URL . '/Segmentos/deletarSegmento/' . $visualizarSegmentos->id_segmento ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i> Exlcuir</a>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>