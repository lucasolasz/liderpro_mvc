<div class="col-xl-6 col-md-12 mx-auto p-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL . "\\Clientes\\visualizarClientes" ?>">Clientes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastro de Cliente</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <h2>Cadastro de Cliente</h2>
            <small>Preencha o formulário abaixo para cadastrar um novo cliente</small>

            <form name="cadastrar" method="POST" action="<?= URL ?>/Clientes/cadastrarCliente" enctype="multipart/form-data">
                <div class="mb-3 mt-4">
                    <label for="txtNomeFantasia" class="form-label">Nome Fantasia: *</label>
                    <input type="text" class="form-control" name="txtNomeFantasia" id="txtNomeFantasia" value="">
                </div>
                <div class="mb-3 mt-4">
                    <label for="txtUrl" class="form-label">URL ou Rede Social:</label>
                    <input type="text" class="form-control" name="txtUrl" id="txtUrl" value="">
                </div>


                <div class="mb-3">
                    <label for="cboSegmento" class="form-label">Segmento:</label>
                    <select class="form-control" name="cboSegmento" id="cboSegmento">
                        <option value="NULL"></option>
                        <?php foreach ($dados['segmento'] as $segmento) {
                            // //Resgata valor do select 
                            $segmentoSelected = '';
                            // if ($segmento->id_segmento == $dados['cboTipoUsuario']) {
                            //     $segmentoSelected = 'selected';
                            // }
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

                <div class="row">
                    <div class="col-md-3">
                        <label for="logomarca" class="form-label">Logomarca Máximo: <br> 140px Altura ou 200px Largura</label>
                    </div>
                    <div class="col-md-9 lp-caixa-preview d-flex align-items-center justify-content-center">
                        <div id="preview"></div>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <label class="form-check-label" for="chkApresentacaoImagem">Apresentação Logo no Site:&nbsp&nbsp&nbsp</label>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="chkApresentacaoImagem">
                            <input class="form-check-input" type="radio" name="chkApresentacaoImagem" id="chkApresentacaoImagem" value="P" checked>
                            Principal
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="chkApresentacaoImagem">
                            <input class="form-check-input" type="radio" name="chkApresentacaoImagem" id="chkApresentacaoImagem" value="S">
                            Secundário
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="chkApresentacaoImagem">
                            <input class="form-check-input" type="radio" name="chkApresentacaoImagem" id="chkApresentacaoImagem" value="I">
                            Inativo
                        </label>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <input type="submit" value="Cadastrar" class="btn btn-primary">
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
</script>