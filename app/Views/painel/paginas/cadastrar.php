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

                <div class="form-group mt-4">
                    <label for="txtTitutoPagina" id="tituloPaginalbl">Título da página *</label>
                    <input type="input" class="form-control" id="txtTitutoPagina" name="txtTitutoPagina">
                    <small id="recebeAlerta"></small>
                </div>

                <div class="form-group">
                    <label for="fileBannerPrincipal">Foto Banner Principal</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fileBannerPrincipal" name="fileBannerPrincipal" lang="pt">
                        <label class="custom-file-label fileBannerPrincipal" for="fileBannerPrincipal"></label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="filePerguntas">Fotos Perguntas (Max 3 arquivos)</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="filePerguntas" lang="pt" accept="image/png, image/jpeg" name="filePerguntas[]" multiple>
                        <label class="custom-file-label filePerguntas" for="filePerguntas"></label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtTextPrincipal">Texto Principal</label>
                    <textarea class="form-control val-obrigatorio" id="txtTextPrincipal" name="txtTextPrincipal" rows="8" maxlength="800"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label for="fileFotoTexto">Foto texto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fileFotoTexto" name="fileFotoTexto" lang="pt">
                        <label class="custom-file-label fileFotoTexto" for="fileFotoTexto"></label>
                    </div>
                </div>

                <h5 class="lp-paragrafo">CAMPOS REFERENTES A TABELA INFERIOR DA TELA</h5>


                <div class="row mt-5">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Fotos</a>
                                <a class="nav-item nav-link" id="tab-1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="false">Tab 1</a>
                                <a class="nav-item nav-link" id="tab-2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Tab 2</a>
                                <a class="nav-item nav-link" id="tab-3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Tab 3</a>
                                <a class="nav-item nav-link" id="tab-4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Tab 4</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row p-2">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="form-group mt-4">
                                            <label for="fileFotosServico">Fotos do Serviço</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="fileFotosServico" lang="pt" accept="image/png, image/jpeg" name="fileFotosServico[]" multiple>
                                                <label class="custom-file-label fileFotosServico" for="fileFotosServico"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-1" role="tabpanel" aria-labelledby="nav-profile-tab">

                                <div class="row p-4">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="txtNomeTab1">Descrição Tab 1</label>
                                            <input type="input" class="form-control" name="txtNomeTab1" id="txtNomeTab1">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico1Tab1">Tópico 1 Tab 1</label>
                                                    <input type="input" class="form-control" name="txtTopico1Tab1" id="txtTopico1Tab1">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico2Tab1">Tópico 2 Tab 1</label>
                                                    <input type="input" class="form-control" name="txtTopico2Tab1" id="txtTopico2Tab1">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico3Tab1">Tópico 3 Tab 1</label>
                                                    <input type="input" class="form-control" name="txtTopico3Tab1" id="txtTopico3Tab1">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico4Tab1">Tópico 4 Tab 1</label>
                                                    <input type="input" class="form-control" name="txtTopico4Tab1" id="txtTopico4Tab1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico5Tab1">Tópico 5 Tab 1</label>
                                                    <input type="input" class="form-control" name="txtTopico5Tab1" id="txtTopico5Tab1">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico6Tab1">Tópico 6 Tab 1</label>
                                                    <input type="input" class="form-control" name="txtTopico6Tab1" id="txtTopico6Tab1">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico7Tab1">Tópico 7 Tab 1</label>
                                                    <input type="input" class="form-control" name="txtTopico7Tab1" id="txtTopico7Tab1">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico8Tab1">Tópico 8 Tab 1</label>
                                                    <input type="input" class="form-control" name="txtTopico8Tab1" id="txtTopico8Tab1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row p-4">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="txtNomeTab2">Descrição Tab 2</label>
                                            <input type="input" class="form-control" name="txtNomeTab2" id="txtNomeTab2">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico1Tab2">Tópico 1 Tab 2</label>
                                                    <input type="input" class="form-control" name="txtTopico1Tab2" id="txtTopico1Tab2">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico2Tab2">Tópico 2 Tab 2</label>
                                                    <input type="input" class="form-control" name="txtTopico2Tab2" id="txtTopico2Tab2">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico3Tab2">Tópico 3 Tab 2</label>
                                                    <input type="input" class="form-control" name="txtTopico3Tab2" id="txtTopico3Tab2">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico4Tab2">Tópico 4 Tab 2</label>
                                                    <input type="input" class="form-control" name="txtTopico4Tab2" id="txtTopico4Tab2">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico5Tab2">Tópico 5 Tab 2</label>
                                                    <input type="input" class="form-control" name="txtTopico5Tab2" id="txtTopico5Tab2">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico6Tab2">Tópico 6 Tab 2</label>
                                                    <input type="input" class="form-control" name="txtTopico6Tab2" id="txtTopico6Tab2">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico7Tab2">Tópico 7 Tab 2</label>
                                                    <input type="input" class="form-control" name="txtTopico7Tab2" id="txtTopico7Tab2">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico8Tab2">Tópico 8 Tab 2</label>
                                                    <input type="input" class="form-control" name="txtTopico8Tab2" id="txtTopico8Tab2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row p-4">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="txtNomeTab3">Descrição Tab 3</label>
                                            <input type="input" class="form-control" name="txtNomeTab3" id="txtNomeTab3">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico1Tab3">Tópico 1 Tab 3</label>
                                                    <input type="input" class="form-control" name="txtTopico1Tab3" id="txtTopico1Tab3">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico2Tab3">Tópico 2 Tab 3</label>
                                                    <input type="input" class="form-control" name="txtTopico2Tab3" id="txtTopico2Tab3">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico3Tab3">Tópico 3 Tab 3</label>
                                                    <input type="input" class="form-control" name="txtTopico3Tab3" id="txtTopico3Tab3">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico4Tab3">Tópico 4 Tab 3</label>
                                                    <input type="input" class="form-control" name="txtTopico4Tab3" id="txtTopico4Tab3">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico5Tab3">Tópico 5 Tab 3</label>
                                                    <input type="input" class="form-control" name="txtTopico5Tab3" id="txtTopico5Tab3">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico6Tab3">Tópico 6 Tab 3</label>
                                                    <input type="input" class="form-control" name="txtTopico6Tab3" id="txtTopico6Tab3">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico7Tab3">Tópico 7 Tab 3</label>
                                                    <input type="input" class="form-control" name="txtTopico7Tab3" id="txtTopico7Tab3">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico8Tab3">Tópico 8 Tab 3</label>
                                                    <input type="input" class="form-control" name="txtTopico8Tab3" id="txtTopico8Tab3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row p-4">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="txtNomeTab4">Descrição Tab 4</label>
                                            <input type="input" class="form-control" name="txtNomeTab4" id="txtNomeTab4">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico1Tab4">Tópico 1 Tab 4</label>
                                                    <input type="input" class="form-control" name="txtTopico1Tab4" id="txtTopico1Tab4">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico2Tab4">Tópico 2 Tab 4</label>
                                                    <input type="input" class="form-control" name="txtTopico2Tab4" id="txtTopico2Tab4">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico3Tab4">Tópico 3 Tab 4</label>
                                                    <input type="input" class="form-control" name="txtTopico3Tab4" id="txtTopico3Tab4">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico4Tab4">Tópico 4 Tab 4</label>
                                                    <input type="input" class="form-control" name="txtTopico4Tab4" id="txtTopico4Tab4">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico5Tab4">Tópico 5 Tab 4</label>
                                                    <input type="input" class="form-control" name="txtTopico5Tab4" id="txtTopico5Tab4">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico6Tab4">Tópico 6 Tab 4</label>
                                                    <input type="input" class="form-control" name="txtTopico6Tab4" id="txtTopico6Tab4">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico7Tab4">Tópico 7 Tab 4</label>
                                                    <input type="input" class="form-control" name="txtTopico7Tab4" id="txtTopico7Tab4">
                                                </div>
                                                <div class="form-group ml-4">
                                                    <label for="txtTopico8Tab4">Tópico 8 Tab 4</label>
                                                    <input type="input" class="form-control" name="txtTopico8Tab4" id="txtTopico8Tab4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <label class="form-check-label mt-3 mb-2">
                        Página Ativa?
                    </label>
                </div>
                <div class="form-check">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="chkPaginaAtiva">
                            Sim
                            <input class="form-check-input" type="radio" name="chkPaginaAtiva" id="chkPaginaAtiva" value="S" checked>
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="chkPaginaAtiva">
                            Não
                            <input class="form-check-input" type="radio" name="chkPaginaAtiva" id="chkPaginaAtiva" value="N">
                        </label>
                    </div>
                </div>



                <div class="row mt-4">
                    <div class="col-md-6">
                        <input type="submit" value="Cadastrar" id="btn btnCadastrar" class="btn lp-btn-liderpro">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    // Add the following code if you want the name of the file appear on select
    $("#fileBannerPrincipal").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
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
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".fileFotoTexto").addClass("selected").html(fileName);
    });

    $("#fileFotosServico").on("change", function() {
        var files = Array.from(this.files)
        var fileName = files.map(f => {
            return f.name
        }).join(", ")
        $(this).siblings(".fileFotosServico").addClass("selected").html(fileName);
    });


    $(function() {
        $("form").submit(function(event) {
            event.preventDefault();

            if($("#txtTitutoPagina").val() == ""){
                criticaCampoFicaVermelho("recebeAlerta", "É necessário preencher o campo", "txtTitutoPagina", "tituloPaginalbl");
                return;
            } else {
                removeCriticaCampoVermelho("recebeAlerta", "txtTitutoPagina", "tituloPaginalbl");
            }

            let form = document.getElementById("cadastrarPagina");
            form.submit();
        });

    });
</script>