<div class="col-xl-6 col-md-12 mx-auto p-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL . "/Segmentos/visualizarSegmentos" ?>">Segmentos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastro de Segmento</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <h2>Cadastro de Segmento</h2>
            <small>Preencha o formulário abaixo para cadastrar um novo segmento</small>

            <form name="cadastrarSegmento" id="cadastrarSegmento" method="POST" action="<?= URL ?>/Segmentos/cadastrarSegmento">
                <div class="mb-3 mt-4">
                    <label for="txtNomeSegmento" class="form-label" id="nomeSegmentolbl">Nome Segmento</label>
                    <input type="text" class="form-control" name="txtNomeSegmento" id="txtNomeSegmento" value="">
                    <small id="recebeAlerta"></small>
                </div>

                <div class="mb-3">
                    <label for="cboSegmento" class="form-label">Segmentos existentes:</label>
                    <select class="form-control" name="cboSegmento" id="cboSegmento">
                        <?php foreach ($dados['visualizarSegmentos'] as $visualizarSegmentos) { ?>
                            <option value="<?= $visualizarSegmentos->id_segmento ?>"><?= $visualizarSegmentos->ds_segmento ?></option>
                        <?php } ?>
                    </select>
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
    $(function() {
        $("form").submit(function(event) {
            event.preventDefault();

            if ($("#txtNomeSegmento").val() == "") {
                criticaCampoFicaVermelho("recebeAlerta", "É necessário preencher o campo", "txtNomeSegmento", "nomeSegmentolbl");
                return
            } else {
                removeCriticaCampoVermelho("recebeAlerta", "txtNomeSegmento", "nomeSegmentolbl");
            }

            let form = document.getElementById("cadastrarSegmento");
            form.submit();
        });

    });
</script>