<div class="container p-5">
    <?= Alertas::mensagem('email') ?>

    <!-- Modal -->
    <div class="modal" id="enviandoEmailModal" tabindex="-1" aria-labelledby="enviandoEmailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <strong>Enviando...</strong>
                        <div class="spinner-border ml-4" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-md-6 col-lg-6 d-flex flex-column">
            <div>
                <img class="img-fluid" style="height: 200px; width: 300px" src="<?= URL . '/img/paginas/assistencia_tecnica/assistencia_tecnica_tv_monitor.png' ?>" alt="">
            </div>

            <div class="mt-5">
                <button class="lp-botao-fotos-assistencia" role="button" type="submit">FOTOS</button>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <ul class="list-unstyled w-100 lp-ul-assistencia">
                    <li class="lp-li-assistencia-titulo">Principais Serviços</li>
                    <li>-Manutenção Corretiva</li>
                    <li>-Reparo de Peça, Placa e Fonte</li>
                    <li>-Substituição de Telas Quebradas</li>
                    <li>-Calibração de Imagem</li>
                    <li>-Instalação de video wall</li>
                    <li>-Modelos de OLED, LED, LCD e Plasma</li>
                </ul>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <ul class="list-unstyled w-100 lp-ul-assistencia">
                    <li class="lp-li-assistencia-titulo">Principais Problemas</li>
                    <li>-A TV/monitor não liga!</li>
                    <li>-A TV/monitor está com uns pontos na tela!</li>
                    <li>-O som da TV/monitor não funciona!</li>
                    <li>-A imagem da TV/monitor está turva!</li>
                    <li>-O botão da TV/monitor não funciona!</li>
                    <li>-Como configurar a internet na minha TV?</li>
                    <li>-Como ligar o computador na minha TV?</li>
                    <li>-Como instalar a TV/monitor na parede?</li>
                </ul>
            </div>
        </div>




        <div class="col-md-6 col-lg-6">

            <div class="d-flex flex-column ">
                <div class="p-2 d-flex justify-content-center">
                    <p class="lp-paragrafo-sublinhado">Solicite uma Avaliação Grátis</p>
                </div>
                <form name="emailAssistencia" id="emailAssistencia" method="POST" action="<?= URL ?>/EnvioEmail/enviarEmailAssistenciaTvMonitor" enctype="multipart/form-data">
                    <div class="p-2">
                        <div class="form__group field w-100">
                            <input type="input" class="form__field " name="txtNome" id='txtNome' required />
                            <label for="txtNome" class="form__label">Nome*</label>
                        </div>

                        <div class="form__group field w-100">
                            <input type="input" class="form__field " name="txtEmail" id='txtEmail' required />
                            <label for="txtEmail" class="form__label">Email*</label>
                        </div>

                        <div class="form__group field w-100">
                            <input type="input" class="form__field " name="txtTelefone" id='txtTelefone' required />
                            <label for="txtTelefone" class="form__label">Telefone: </label>
                        </div>

                        <div class="form__group field w-100">
                            <input type="input" class="form__field " name="txtEquipamento" id='txtEquipamento' required />
                            <label for="txtEquipamento" class="form__label">Equipamento* </label>
                        </div>

                        <div class="form__group field w-100">
                            <input type="input" class="form__field " name="txtMarcaModelo" id='txtMarcaModelo' required />
                            <label for="txtMarcaModelo" class="form__label">Marca e Modelo (se souber e/ou se houver)</label>
                        </div>

                        <div class="form-group mt-3">
                            <label for="txtMensagemEmail" class="label-mensagem">Descrição do Problema*</label>
                            <textarea class="form-control" id="txtMensagemEmail" rows="3" name="txtMensagemEmail"></textarea>
                        </div>

                        <div>
                            <p class="campo-obrigatorio">* Campos com preenchimentos obrigatórios</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 d-flex justify-content-center">
                            <input type="checkbox" id="enviarCopia" name="enviarCopia" value="S" />
                            <label class="my-0 ml-3 d-flex align-items-center lp-label-contato" for="enviarCopia">Me envie uma cópia deste e-mail</label>
                        </div>
                        <div class="col-md-6 col-lg-6 d-flex justify-content-center py-2">
                            <input type="file" name="fileAnexoAssistencia[]" id="fileAnexoAssistencia" class="lp-anexa-custom" accept="image/png, image/jpeg" multiple />
                            <label for="fileAnexoAssistencia" class="lp-botao-anexo">Anexar Arquivos</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-end pr-5 py-2" id="fileCount">0 arquivo(s) selecionado(s)</div>
                    </div>

                    <div class="row py-2">
                        <div class="col d-flex justify-content-center">
                            <button class="lp-botao-enviar" role="button" id="btnEnviaAssistencia">ENVIAR</button>
                        </div>
                    </div>
                </form>

                <div class="row py-4">
                    <div class="col-md-1 col-lg-1">
                        <span><img style="height: 30px; width: 30px;" class="p-1" src="<?= URL . '/img/menu_lider_pro/telefone.png' ?>" alt=""></span>
                    </div>
                    <div class="col-md-11 col-lg-11">
                        <p class="lp-paragrafo m-0"><a href="https://wa.me/552125268100?text=Ol%C3%A1%21" target="_blank">(21) 2526-8100</a></p>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-1 col-lg-1">
                        <span><img style="height: 25px; width: 30px;" class="p-1" src="<?= URL . '/img/menu_lider_pro/email.png' ?>" alt=""></span>
                    </div>
                    <div class="col-md-11 col-lg-11">
                        <p class="lp-paragrafo"><a href="mailto:liderpro@liderpro.com.br">liderpro@liderpro.com.br</a></p>
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-2">
                    <ul class="list-unstyled w-100 lp-ul-assistencia">
                        <li>-Orçamento completo e gratuito em nosso laboratório.</li>
                        <li>-Estacionamento no local, grátis, coberto e seguro.</li>
                        <li>-Diversas formas de pagamento.</li>
                        <li>-Contrato de Manutenção Preventiva e Corretiva.</li>
                        <li>-Descartamos lixo eletrônico. Possuímos Certificado.</li>
                        <li>-Ambiental de destino final para resíduos tóxicos.</li>
                    </ul>
                </div>
            </div>


        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('#fileAnexoAssistencia').on('change', function() {
            const fileCount = $(this).prop('files').length;
            $('#fileCount').text(`${fileCount} arquivo(s) selecionado(s)`);
        });
    });

    //Critica campos antes de salvar
    $("#btnEnviaAssistencia").on("click", function() {

        if ($("#txtNome").val() == "") {
            return true;
        }
        if ($("#txtEmail").val() == "") {
            return true;
        }
        if ($("#txtTelefone").val() == "") {
            return true;
        }
        if ($("#txtEquipamento").val() == "") {
            return true;
        }
        if ($("#txtMarcaModelo").val() == "") {
            return true;
        }
        if ($("#txtMensagemEmail").val() == "") {
            return true;
        }

        $('#enviandoEmailModal').modal('show')

        let form = document.getElementById("emailAssistencia");
        form.submit();
    });
</script>