<div class="mx-auto p-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL ?>/Painel/visualizarPaginas">Páginas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastro de Página</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <h2>Cadastro de Página</h2>
            <small>Preencha o formulário abaixo para cadastrar uma nova página</small>

            <form name="cadastrarPagina" id="cadastrarPagina" method="POST" action="<?= URL ?>/Painel/cadastrarPagina" enctype="multipart/form-data">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-portugues-tab" data-toggle="tab" data-target="#nav-home-portugues" type="button" role="tab" aria-controls="nav-home-portugues" aria-selected="true">Menu Português</button>
                        <button class="nav-link" id="nav-ingles-tab" data-toggle="tab" data-target="#nav-profile-ingles" type="button" role="tab" aria-controls="nav-profile-ingles" aria-selected="false">Menu Inglês</button>
                        <button class="nav-link" id="nav-espanhol-tab" data-toggle="tab" data-target="#nav-contact-espanhol" type="button" role="tab" aria-controls="nav-contact-espanhol" aria-selected="false">Menu Espanhol</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home-portugues" role="tabpanel" aria-labelledby="nav-portugues-tab">
                        <?php include_once 'cadastrar_campos_pt.php' ?>
                    </div>
                    <div class="tab-pane fade" id="nav-profile-ingles" role="tabpanel" aria-labelledby="nav-ingles-tab">
                        <?php include_once 'cadastrar_campos_en.php' ?>
                    </div>
                    <div class="tab-pane fade" id="nav-contact-espanhol" role="tabpanel" aria-labelledby="nav-espanhol-tab">
                    <?php include_once 'cadastrar_campos_es.php' ?>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <input type="button" value="Cadastrar" id="btnCadastrar" class="btn lp-btn-liderpro">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    // Add the following code if you want the name of the file appear on select
    $("#fileBannerPrincipal").on("change", function() {
        var fileName = $(this).val().split("/").pop();
        $(this).siblings(".fileBannerPrincipal").addClass("selected").html(fileName);
    });

    $("#filePerguntas").on("change", function() {
        var files = Array.from(this.files)
        var fileName = files.map(f => {
            return f.name
        }).join(", ")
        $(this).siblings(".filePerguntas").addClass("selected").html(fileName);
    });

    // Add the following code if you want the name of the file appear on select
    $("#fileFotoTexto").on("change", function() {
        var fileName = $(this).val().split("/").pop();
        $(this).siblings(".fileFotoTexto").addClass("selected").html(fileName);
    });

    $("#fileFotosServico").on("change", function() {
        var files = Array.from(this.files)
        var fileName = files.map(f => {
            return f.name
        }).join(", ")
        $(this).siblings(".fileFotosServico").addClass("selected").html(fileName);
    });

    $("#limparUploadPerguntas").on("click", function() {
        $("#filePerguntas").val("");
        $(".perguntasLabelInterna").html("");
    });

    $("#limparUploadBannerPrincipal").on("click", function() {
        $("#fileBannerPrincipal").val("");
        $(".bannerPrincipalLabelInterna").html("");
    });

    $("#limparUploadBannerFotoTexto").on("click", function() {
        $("#fileFotoTexto").val("");
        $(".fotoTextoLabelInterna").html("");
    });

    $("#limparUploadBannerFotoServico").on("click", function() {
        $("#fileFotosServico").val("");
        $(".fotoServicoLabelInterna").html("");
    });


    //Critica campos antes de salvar
    $("#btnCadastrar").on("click", function() {

        if ($("#filePerguntas").val() != "") {

            var fileInput = document.getElementById("filePerguntas");
            // files é um objeto FileList (similar ao NodeList)
            var files = fileInput.files;
            var file;
            var y = 0;
            // percorre os arquivos
            for (var i = 0; i < files.length; i++) {
                y++;
            }

            if (y < 3 || y > 3) {
                criticaCampoFicaVermelho("recebeMensagemPergunta", "É necessário colocar 3 fotos de perguntas. Foram selecionadas: " + y, "filePerguntas", "perguntasLabel");
                return
            } else {
                removeCriticaCampoVermelho("recebeMensagemPergunta", "filePerguntas", "perguntasLabel");
            }

        } else {
            removeCriticaCampoVermelho("recebeMensagemPergunta", "filePerguntas", "perguntasLabel");
        }

        if ($("#txtTitutoPagina").val() == "") {
            criticaCampoFicaVermelho("recebeAlerta", "É necessário preencher o campo", "txtTitutoPagina", "tituloPaginalbl");
            return;
        } else {
            removeCriticaCampoVermelho("recebeAlerta", "txtTitutoPagina", "tituloPaginalbl");
        }

        let form = document.getElementById("cadastrarPagina");
        form.submit();
    });
</script>