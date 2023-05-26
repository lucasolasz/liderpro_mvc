<div class="col-xl-6 col-md-12 mx-auto p-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL . "\\ApresentacaoLogos\\visualizarApresentacaoLogo" ?>">Apresentação da Logo</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastro de Configuração</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <h2>Cadastro de Configuração</h2>
            <small>Preencha o formulário abaixo para cadastrar uma nova configuração</small>

            <form name="cadastrarApresentacaoLogo" id="cadastrarApresentacaoLogo" method="POST" action="<?= URL ?>/ApresentacaoLogos/cadastrarApresentacaoLogo">
                <div class="mb-3 mt-4">
                    <label for="txtNomeConfiguracao" class="form-label" id="nomeConfiguracaolbl">Nome Configuração:</label>
                    <input type="text" class="form-control" name="txtNomeConfiguracao" id="txtNomeConfiguracao" value="">
                    <small id="recebeAlerta"></small>
                </div>

                <div class="mb-3 mt-4">
                    <label for="numSegundos" class="form-label" id="nomeNumSegundoslbl">Duração em segundos: </label>
                    <input type="text" class="form-control" name="numSegundos" id="numSegundos" value="" maxlength="1">
                    <small id="recebeAlertaNumSegundos"></small>
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

            if ($("#txtNomeConfiguracao").val() == "") {
                criticaCampoFicaVermelho("recebeAlerta", "É necessário preencher o campo", "txtNomeConfiguracao", "nomeConfiguracaolbl");
                return
            } else {
                removeCriticaCampoVermelho("recebeAlerta", "txtNomeSegmento", "nomeConfiguracaolbl");
            }

            if ($("#numSegundos").val() == "") {
                criticaCampoFicaVermelho("recebeAlertaNumSegundos", "É necessário preencher o campo", "numSegundos", "nomeNumSegundoslbl");
                return
            } else {
                removeCriticaCampoVermelho("recebeAlertaNumSegundos", "numSegundos", "nomeNumSegundoslbl");
            }

            let form = document.getElementById("cadastrarApresentacaoLogo");
            form.submit();
        });

    });
</script>