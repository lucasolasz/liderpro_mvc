<div class="col-xl-6 col-md-12 mx-auto p-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL . "\\Clientes\\visualizarClientes" ?>">Clientes</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $dados['cliente']->ds_nome_fantasia ?></li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <h2>Editar Cliente</h2>
            <small>Preencha o formulário abaixo para editar o cliente</small>

            <form name="editarCliente" id="editarCliente" method="POST" action="<?= URL . "\\Clientes\\editarCliente\\" . $dados['cliente']->id_cliente ?>" enctype="multipart/form-data">
                <div class="mb-3 mt-4">
                    <label for="txtNomeFantasia" class="form-label" id="nomeFantasialbl">Nome Fantasia:</label>
                    <input type="text" class="form-control" name="txtNomeFantasia" id="txtNomeFantasia" value="<?= $dados['cliente']->ds_nome_fantasia ?>">
                    <small id="recebeAlerta"></small>
                </div>
                <div class="mb-3 mt-4">
                    <label for="txtUrl" class="form-label">URL ou Rede Social:</label>
                    <input type="text" class="form-control" name="txtUrl" id="txtUrl" value="<?= $dados['cliente']->ds_url ?>">
                </div>


                <div class="mb-3">
                    <label for="cboSegmento" class="form-label">Segmento:</label>
                    <select class="form-control" name="cboSegmento" id="cboSegmento">
                        <option value=""></option>
                        <?php foreach ($dados['segmento'] as $segmento) {
                            // //Resgata valor do select 
                            $segmentoSelected = '';
                            if ($segmento->id_segmento == $dados['cliente']->fk_segmento) {
                                $segmentoSelected = 'selected';
                            }
                        ?>
                            <option <?= $segmentoSelected ?> value="<?= $segmento->id_segmento ?>"><?= $segmento->ds_segmento ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fileLogomarcaCliente">Logomarca:</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fileLogomarcaCliente" name="fileLogomarcaCliente" lang="pt">
                        <label class="custom-file-label fileLogomarcaCliente" for="fileLogomarcaCliente"></label>
                    </div>
                </div>

                <?php if (empty($dados['logomarca'])) { ?>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="logomarca" class="form-label">Logomarca Máximo: <br> 140px Altura ou 200px Largura</label>
                        </div>
                        <div class="col-md-9 lp-caixa-preview d-flex align-items-center justify-content-center">
                            <div id="preview"></div>
                        </div>
                    </div>
                <?php } else { ?>

                    <div class="row">
                        <div class="col-md-3">
                            <label for="logomarca" class="form-label">Logomarca Máximo: <br> 140px Altura ou 200px Largura</label>
                        </div>
                        <div class="col-md-9 lp-caixa-preview d-flex align-items-center justify-content-center">
                            <div id="preview">
                                <img style="width: 200px; height: 140px; padding: 10px" src="<?= URL . "\\uploads\\" . $dados['logomarca']->nm_path_arquivo . "\\" . $dados['logomarca']->nm_arquivo ?>" alt="Preview" />
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php
                $checkedApresentacaoLogoPrincipal = "";
                $checkedApresentacaoLogoSecundaria = "";
                $checkedApresentacaoLogoInativo = "";

                switch ($dados['cliente']->chk_apresentacao_imagem) {
                    case "P":
                        $checkedApresentacaoLogoPrincipal = "checked";
                        break;
                    case "S":
                        $checkedApresentacaoLogoSecundaria = "checked";
                        break;
                    case "I":
                        $checkedApresentacaoLogoInativo = "checked";
                        break;
                }
                ?>

                <div class="form-group mt-3">
                    <label class="form-check-label" for="chkApresentacaoImagem">Apresentação Logo no Site:&nbsp&nbsp&nbsp</label>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="chkApresentacaoImagem">
                            <input class="form-check-input" type="radio" name="chkApresentacaoImagem" id="chkApresentacaoImagem" value="P" <?= $checkedApresentacaoLogoPrincipal ?>>
                            Principal
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="chkApresentacaoImagem">
                            <input class="form-check-input" type="radio" name="chkApresentacaoImagem" id="chkApresentacaoImagem" value="S" <?= $checkedApresentacaoLogoSecundaria ?>>
                            Secundário
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="chkApresentacaoImagem">
                            <input class="form-check-input" type="radio" name="chkApresentacaoImagem" id="chkApresentacaoImagem" value="I" <?= $checkedApresentacaoLogoInativo ?>>
                            Inativo
                        </label>
                    </div>

                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#configApresentacaoLogo"><i class="bi bi-gear-fill"></i></button>
                </div>

                <div class="modal fade" id="configApresentacaoLogo" tabindex="-1" aria-labelledby="configApresentacaoLogoLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="configApresentacaoLogoLabel">Configuração Apresentação Logo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="d-flex flex-column">
                                    <?php foreach ($dados['confLogo'] as $confLogo) { ?>
                                        <div>
                                            <div class="form-group row ">
                                                <label for="numSegundosConfig" class="col-sm-3 col-form-label"><?= $confLogo->ds_conf_logo ?></label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="numSegundosConfig<?= $confLogo->id_conf_logo ?>" name="numSegundosConfig<?= $confLogo->id_conf_logo ?>" value="<?= $confLogo->qt_duracao_seg ?>">
                                                </div>
                                                <span>Segundos</span>

                                                <?php
                                                $checkedFixo = "";
                                                if ($confLogo->chk_fixo == "S") {
                                                    $checkedFixo = "checked";
                                                }
                                                ?>

                                                <div class="form-check ml-3">
                                                    <input class="form-check-input" type="checkbox" id="chkConfigFixo<?= $confLogo->id_conf_logo ?>" name="chkConfigFixo<?= $confLogo->id_conf_logo ?>" value="S" <?= $checkedFixo ?>>
                                                    <label class="form-check-label" for="chkConfigFixo<?= $confLogo->id_conf_logo ?>">
                                                        Fixo
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <input type="submit" value="Salvar" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("#fileLogomarcaCliente").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".fileLogomarcaCliente").addClass("selected").html(fileName);
    });

    $(document).ready(function() {
        // Ao selecionar um arquivo
        $('#fileLogomarcaCliente').on('change', function(e) {
            var file = e.target.files[0];

            // Verificar se o arquivo é uma imagem
            if (file.type.match('image.*')) {
                var reader = new FileReader();

                // Carregar a imagem selecionada
                reader.onload = function(e) {
                    var previewHtml = '<img style="width: 200px; height: 140px; padding: 10px" src="' + e.target.result + '" alt="Preview" />';
                    $('#preview').html(previewHtml);
                }

                reader.readAsDataURL(file);
            } else {
                $('#preview').html("Arquivo selecionado não é uma imagem.");
            }
        });
    });


    $(function() {
        $("form").submit(function(event) {
            event.preventDefault();

            if ($("#txtNomeFantasia").val() == "") {
                criticaCampoFicaVermelho("recebeAlerta", "É necessário preencher o campo", "txtNomeFantasia", "nomeFantasialbl");
                return
            } else {
                removeCriticaCampoVermelho("recebeAlerta", "txtNomeFantasia", "nomeFantasialbl");
            }

            let form = document.getElementById("editarCliente");
            form.submit();
        });

    });
</script>