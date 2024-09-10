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
                <img class="img-fluid" style="height: 200px; width: 300px" src="<?= URL . '/img/paginas/assistencia_tecnica/assistencia_tecnica_notebook.png' ?>" alt="">
            </div>

            <div class="mt-5">
                <!-- <button class="lp-botao-fotos-assistencia" role="button" type="submit">FOTOS</button> -->
            </div>

            <div class="d-flex justify-content-center mt-5">
                <ul class="list-unstyled w-100 lp-ul-assistencia">
                    <li class="lp-li-assistencia-titulo">Servicios principales</li>
                    <li>-Mantenimiento preventivo</li>
                    <li>-Mantenimiento Correctivo</li>
                    <li>-Reemplazo de pantalla, teclado y otras piezas</li>
                    <li>-Reparación de piezas rotas</li>
                    <li>-Instalación del programa</li>
                    <li>-Copia de seguridad -Copia segura de datos</li>
                </ul>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <ul class="list-unstyled w-100 lp-ul-assistencia">
                    <li class="lp-li-assistencia-titulo">Problemas principales</li>
                    <li>-¡El portátil no enciende!</li>
                    <li>-¡El cuaderno tiene un virus!</li>
                    <li>-¡La red inalámbrica (Wi-Fi) es lenta!</li>
                    <li>-¡Internet no funciona!</li>
                    <li>-¡Perdí mis archivos/datos!</li>
                    <li>-¡Me gustaría instalar un nuevo programa!</li>
                    <li>-¡Quiero instalar una pieza nueva en el cuaderno!</li>
                    <li>-¡Quiero hacer una copia de seguridad de mis archivos/datos!</li>
                </ul>
            </div>
        </div>




        <div class="col-md-6 col-lg-6">

            <div class="d-flex flex-column ">
                <div class="p-2 d-flex justify-content-center">
                    <p class="lp-paragrafo-sublinhado">Solicite una evaluación gratuita</p>
                </div>
                <form name="emailAssistencia" id="emailAssistencia" method="POST" action="<?= URL ?>/EnvioEmail/enviarEmailAssistenciaNotebook" enctype="multipart/form-data">
                    <div class="p-2">
                        <div class="form__group field w-100">
                            <input type="input" class="form__field " name="txtNome" id='txtNome' required />
                            <label for="txtNome" class="form__label">Nombre*</label>
                        </div>

                        <div class="form__group field w-100">
                            <input type="input" class="form__field " name="txtEmail" id='txtEmail' required />
                            <label for="txtEmail" class="form__label">Correo electrónico*</label>
                        </div>

                        <div class="form__group field w-100">
                            <input type="input" class="form__field " name="txtTelefone" id='txtTelefone' required />
                            <label for="txtTelefone" class="form__label">Teléfono: </label>
                        </div>

                        <div class="form__group field w-100">
                            <input type="input" class="form__field " name="txtEquipamento" id='txtEquipamento' required />
                            <label for="txtEquipamento" class="form__label">Equipo* </label>
                        </div>

                        <div class="form__group field w-100">
                            <input type="input" class="form__field " name="txtMarcaModelo" id='txtMarcaModelo' />
                            <label for="txtMarcaModelo" class="form__label">Marca y modelo (si se conoce y/o si existe)</label>
                        </div>

                        <div class="form-group mt-3">
                            <label for="txtMensagemEmail" class="label-mensagem">Descripción del problema*</label>
                            <textarea class="form-control" id="txtMensagemEmail" rows="3" name="txtMensagemEmail"></textarea>
                        </div>

                        <div>
                            <p class="campo-obrigatorio">* Campos con campos obligatorios</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 d-flex justify-content-center">
                            <input type="checkbox" id="enviarCopia" name="enviarCopia" value="S" />
                            <label class="my-0 ml-3 d-flex align-items-center lp-label-contato" for="enviarCopia">Envíame una copia de este correo electrónico</label>
                        </div>
                        <div class="col-md-6 col-lg-6 d-flex justify-content-center py-2">
                            <input type="file" name="fileAnexoAssistencia[]" id="fileAnexoAssistencia" class="lp-anexa-custom" accept="image/png, image/jpeg" multiple />
                            <label for="fileAnexoAssistencia" class="lp-botao-anexo">Adjuntar archivos</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-end pr-5 py-2" id="fileCount">0 archivos seleccionados</div>
                    </div>

                    <div class="row py-2">
                        <div class="col d-flex justify-content-center">
                            <button class="lp-botao-enviar" role="button" id="btnEnviaAssistencia">MANDAR</button>
                        </div>
                    </div>
                </form>

                <div class="row py-4">
                    <div class="col-md-1 col-lg-1">
                        <span><img style="height: 30px; width: 30px;" class="p-1" src="<?= URL . '/img/menu_lider_pro/telefone.png' ?>" alt=""></span>
                    </div>
                    <div class="col-md-11 col-lg-11">
                        <p class="lp-paragrafo m-0"><a href="https://wa.me/552125268100?text=Ol%C3%A1%21" target="_blank">(21) 2526-8100&nbsp&nbsp<span><img style="height: 20px; width: 20px;" src="<?= URL . '/img/menu_lider_pro/whatsapp.png' ?>" alt=""></span></a></p>
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
                        <li>-Presupuesto completo y gratuito en nuestro laboratorio.</li>
                        <li>-Estacionamiento gratuito, cubierto y seguro en el lugar.</li>
                        <li>-Varios métodos de pago.</li>
                        <li>-Contrato de Mantenimiento Preventivo y Correctivo.</li>
                        <li>-Nos deshacemos de los residuos electrónicos. Disponemos de Certificado.</li>
                        <li>-Destino ambiental final de los residuos tóxicos.</li>
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

        $("#txtTelefone")
            .mask("(99) 9999-9999?9")
            .focusout(function(event) {
                var target, phone, element;
                target = (event.currentTarget) ? event.currentTarget : event.srcElement;
                phone = target.value.replace(/\D/g, '');
                element = $(target);
                element.unmask();
                if (phone.length > 10) {
                    element.mask("(99) 99999-999?9");
                } else {
                    element.mask("(99) 9999-9999?9");
                }
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