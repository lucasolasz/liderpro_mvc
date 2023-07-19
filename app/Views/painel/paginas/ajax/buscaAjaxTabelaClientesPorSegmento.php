<div class="table-responsive p-3">
    <table class="table table-borderless">
        <tbody>
            <?php
            if (!empty($dados['resultado'])) {
                foreach ($dados['resultado'] as $resultado) { ?>
                    <tr>
                        <td class="p-0 m-0">
                            <p class="lp-paragrafo m-0"><?= ucfirst($resultado->ds_nome_fantasia) ?> - <?= ucfirst($resultado->ds_segmento) ?></p>
                        </td>
                    </tr>
                <?php }
            } else { ?>
                <tr>
                    <td class="p-0">
                        <p style="color: gray;">Nenhum cliente cadastrado neste segmento</p>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>