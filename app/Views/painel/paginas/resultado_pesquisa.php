<div class="container">

    <div class="d-flex flex-column mt-5">
        <div>
            <h2>Resultados para: <?= $dados['txtPesquisaHome'] ?></h2>
        </div>
        <hr>
        <div>
            <table>
                <thead>
                    <?php foreach ($dados['resultadoServicos'] as $resultadoServico) { ?>
                        <tr>
                            <td rowspan="3"><a href="<?= URL . '/PaginasDinamicas/' . $resultadoServico->ds_url_menu ?>"><?= $resultadoServico->ds_pagina ?></a></td>
                            <td class="lp-titulo-paragrafo"><a href="<?= URL . '/PaginasDinamicas/' . $resultadoServico->ds_url_menu ?>"><?= $resultadoServico->ds_pagina ?></a></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="<?= URL . '/PaginasDinamicas/' . $resultadoServico->ds_url_menu ?>">
                                    <p style="color: gray;" class="ml-2"><?= substr($resultadoServico->ds_texto_principal, 0, 350) . "..." ?></p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="color: gray;" class="ml-2">Serviços: <?= $resultadoServico->ds_tab1 . ', ' . $resultadoServico->ds_tab2 . ', ' . $resultadoServico->ds_tab3 . ', ' . $resultadoServico->ds_tab4 ?></p>
                            </td>
                        </tr>
                    <?php } ?>
                    <?php foreach ($dados['resultadoAssistencia'] as $resultadoAssistencia) { ?>
                        <tr>
                            <td rowspan="2"><a href="<?= URL . '/' . $resultadoAssistencia->ds_url_menu ?>"><?= ucfirst($resultadoAssistencia->ds_assistencia) ?></a></td>
                            <td class="lp-titulo-paragrafo"><a href="<?= URL . '/' . $resultadoAssistencia->ds_url_menu ?>"><?= ucfirst($resultadoAssistencia->ds_assistencia) ?></a></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="<?= URL . '/' . $resultadoAssistencia->ds_url_menu ?>">
                                    <p style="color: gray;" class="ml-2">
                                        <?=
                                        $resultadoAssistencia->ds_principais_servicos1 . '  ' .
                                            $resultadoAssistencia->ds_principais_servicos2 . '  ' .
                                            $resultadoAssistencia->ds_principais_servicos3 . '  ' .
                                            $resultadoAssistencia->ds_principais_servicos4 . '  ' .
                                            $resultadoAssistencia->ds_principais_servicos5 . '  ' .
                                            $resultadoAssistencia->ds_principais_servicos6 . '  ' .
                                            $resultadoAssistencia->ds_principais_servicos7 . '  ' .
                                            $resultadoAssistencia->ds_principais_servicos8 . ' ' .
                                            $resultadoAssistencia->ds_principais_problemas1 . ' ' .
                                            $resultadoAssistencia->ds_principais_problemas2 . ' ' .
                                            $resultadoAssistencia->ds_principais_problemas3 . ' ' .
                                            $resultadoAssistencia->ds_principais_problemas4 . ' ' .
                                            $resultadoAssistencia->ds_principais_problemas5 . ' ' .
                                            $resultadoAssistencia->ds_principais_problemas6 . ' ' .
                                            $resultadoAssistencia->ds_principais_problemas7 . ' ' .
                                            $resultadoAssistencia->ds_principais_problemas8
                                        ?>
                                    </p>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </thead>
            </table>
        </div>
    </div>
</div>