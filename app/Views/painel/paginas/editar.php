<div class="mx-auto p-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL ?>/Painel/visualizarPaginas">Páginas</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= ucfirst($dados['paginaSelecionada'][0]->ds_pagina) ?></li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <h2>Editar Página</h2>
            <small>Preencha o formulário abaixo para cadastrar uma nova página</small>

            <form name="editarPagina" id="editarPagina" method="POST" action="<?= URL . '/Painel/editarPagina/' . $dados['paginaSelecionada'][0]->id_pagina ?>" enctype="multipart/form-data">

                <!-- Modal -->
                <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="TituloModalCentralizado">Sobrescrita de foto</h5>
                                <button type="button" class="close fecharModal" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                As fotos enviadas, irão sobrescrever as anteriores. Deseja Prosseguir?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary fecharModal" data-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary" id="btnSalvarModal">Salvar mudanças</button>
                            </div>
                        </div>
                    </div>
                </div>

                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-portugues-tab" data-toggle="tab" data-target="#nav-home-portugues" type="button" role="tab" aria-controls="nav-home-portugues" aria-selected="true">Menu Português</button>
                        <button class="nav-link" id="nav-ingles-tab" data-toggle="tab" data-target="#nav-profile-ingles" type="button" role="tab" aria-controls="nav-profile-ingles" aria-selected="false">Menu Inglês</button>
                        <button class="nav-link" id="nav-espanhol-tab" data-toggle="tab" data-target="#nav-contact-espanhol" type="button" role="tab" aria-controls="nav-contact-espanhol" aria-selected="false">Menu Espanhol</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home-portugues" role="tabpanel" aria-labelledby="nav-portugues-tab">
                        <?php include_once 'editar_campos_pt.php' ?>
                    </div>
                    <div class="tab-pane fade" id="nav-profile-ingles" role="tabpanel" aria-labelledby="nav-ingles-tab">
                        <?php include_once 'editar_campos_en.php' ?>
                    </div>
                    <div class="tab-pane fade" id="nav-contact-espanhol" role="tabpanel" aria-labelledby="nav-espanhol-tab">...</div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <input type="button" value="Salvar" id="btnSalvarForm" class="btn lp-btn-liderpro">
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


    $(document).ready(function() {
        setInterval(function() {
            $(".msg-texto").hide(1000);
        }, 4000);
    });

    function abreModal() {
        $('#ExemploModalCentralizado').modal('show');
    }

    function fecharModal() {
        $('#ExemploModalCentralizado').modal('hide')
    }

    $(".fecharModal").on("click", function() {
        fecharModal();
    });

    $("#limparUploadPerguntas").on("click", function() {
        $("#filePerguntas").val("");
        $(".perguntasLabelInterna").html("Escolha as imagens para substituir as atuais");
    });

    $("#limparUploadBannerPrincipal").on("click", function() {
        $("#fileBannerPrincipal").val("");
        $(".bannerPrincipalLabelInterna").html("Escolha uma imagem para substituir a atual");
    });

    $("#limparUploadBannerFotoTexto").on("click", function() {
        $("#fileFotoTexto").val("");
        $(".fotoTextoLabelInterna").html("Escolha uma imagem para substituir a atual");
    });

    $("#limparUploadBannerFotoServico").on("click", function() {
        $("#fileFotosServico").val("");
        $(".fotoServicoLabelInterna").html("Escolha as imagens para substituir as atuais");
    });


    //Critica campos antes de salvar
    $("#btnSalvarForm").on("click", function() {

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

        if ($("#fileBannerPrincipal").val() != "" || $("#filePerguntas").val() != "" || $("#fileFotoTexto").val() != "" || $("#fileFotosServico").val() != "") {
            abreModal();
            return
        }

        let form = document.getElementById("editarPagina");
        form.submit();
    });

    $("#btnSalvarModal").on("click", function() {
        let form = document.getElementById("editarPagina");
        form.submit();
    });
</script>