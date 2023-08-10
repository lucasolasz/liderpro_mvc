<div class="container p-2">
    <div class="row pt-5">
        <div class="col-md-12 col-lg-12 d-flex justify-content-center">
            <p class="lp-paragrafo-sublinhado">CONTATOS</p>
        </div>
    </div>

    <?= Alertas::mensagem('email') ?>

    <div class="row">
        <div class="col-md-6 col-lg-6 p-5">
            <div class="d-flex flex-column ">
                <div class="p-2 d-flex justify-content-center">
                    <p class="lp-paragrafo-sublinhado">ENVIAR E-MAIL</p>
                </div>
                <form name="emailContato" id="emailContato" method="POST" action="<?= URL ?>/EnvioEmail/enviarEmailContatos">
                    <div class="p-2">
                        <div class="form__group field w-100">
                            <input type="input" class="form__field " name="txtNome" id='txtNome' maxlength="200" required />
                            <label for="txtNome" class="form__label">Nome*</label>
                        </div>

                        <div class="form__group field w-100">
                            <input type="input" class="form__field " name="txtEmail" id='txtEmail' maxlength="100" required />
                            <label for="txtEmail" class="form__label">Email*</label>
                        </div>

                        <div class="form__group field w-100">
                            <input type="input" class="form__field" name="txtTelefone" id='txtTelefone' maxlength="11" required />
                            <label for="txtTelefone" class="form__label">Telefone: </label>
                        </div>

                        <div class="form__group field w-100">
                            <label for="txtDestinatario" class="form__label">Para* </label>
                            <select id="txtDestinatario" name="cboDestinatario" class="w-100 lp-select-contato">
                                <option>atendimento@liderpro.com.br</option>
                                <option>adm@liderpro.com.br</option>
                                <option>comercial@liderpro.com.br</option>
                                <option>rh@liderpro.com.br</option>
                            </select>
                        </div>

                        <div class="form__group field w-100">
                            <input type="input" class="form__field " name="txtAssunto" id='txtAssunto' maxlength="40" required />
                            <label for="txtAssunto" class="form__label">Assunto* </label>
                        </div>

                        <div class="form-group mt-3">
                            <label for="txtMensagemEmail" class="label-mensagem">Mensagem*</label>
                            <textarea class="form-control" name="txtMensagem" rows="3" maxlength="800" required></textarea>
                        </div>

                        <div>
                            <p class="campo-obrigatorio">* Campos com preenchimentos obrigatórios</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-6 d-flex justify-content-center">
                            <input type="checkbox" id="enviarCopia" />
                            <label class="my-0 ml-3 d-flex align-items-center lp-label-contato" for="enviarCopia">Me envie uma cópia deste e-mail</label>
                        </div>
                        <div class="col-md-6 col-lg-6 d-flex justify-content-center py-5">
                            <button class="lp-botao-anexo" role="button">Anexar Arquivos</button>
                        </div>
                    </div>

                    <div class="row py-2">
                        <div class="col d-flex justify-content-center">
                            <button class="lp-botao-enviar" role="button" type="submit">ENVIAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 p-5">
            <div class="row">
                <div class="col-md-1 col-lg-1">
                    <span><img style="height: 30px; width: 18px;" class="" src="<?= URL . '/img/menu_lider_pro/informacoes_legais_foto2.png' ?>" alt=""></span>
                </div>
                <div class="col-md-11 col-lg-11">
                    <p class="lp-paragrafo">
                        Rua Conde Lages, 44 / sala 402
                        <br> Glória, Rio de Janeiro/RJ • 20.241-080
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1 col-lg-1">
                    <span class="-5"><img style="height: 30px; width: 30px;" class="p-1" src="<?= URL . '/img/menu_lider_pro/telefone.png' ?>" alt=""></span>
                </div>
                <div class="col-md-11 col-lg-11">
                    <p class="lp-paragrafo">(21) 2526-8100</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1 col-lg-1">
                    <span><img style="height: 25px; width: 30px;" class="p-1" src="<?= URL . '/img/menu_lider_pro/email.png' ?>" alt=""></span>
                </div>
                <div class="col-md-11 col-lg-11">
                    <p class="lp-paragrafo">liderpro@liderpro.com.br</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1 col-lg-1">
                    <span><img style="height: 30px; width: 30px;" class="p-1" src="<?= URL . '/img/menu_lider_pro/relogio.png' ?>" alt=""></span>
                </div>
                <div class="col-md-11 col-lg-11">
                    <p class="lp-paragrafo">De 2ª a 6ª feira, das 8h30 às 18h.</p>
                </div>
            </div>

            <div class="row py-2 d-flex justify-content-center">
                <div class="p-1"><a href="<?= URL_FACEBOOK ?>" target="_blank"><img style="height: 30px; width: 30px;" src="<?= URL . '/img/menu_lider_pro/informacoes_legais_rede_face.png' ?>" alt=""></a> </div>
                <div class="p-1"><a href="<?= URL_INSTAGRAM ?>" target="_blank"><img style="height: 30px; width: 30px;" src="<?= URL . '/img/menu_lider_pro/informacoes_legais_rede_insta.png' ?>" alt=""></a> </div>
                <div class="p-1"><a href="<?= URL_YOUTUBE ?>" target="_blank"><img style="height: 30px; width: 30px;" src="<?= URL . '/img/menu_lider_pro/informacoes_legais_rede_youtube.png' ?>" alt=""></a> </div>
                <div class="p-1"><a href="<?= URL_LINKEDIN ?>" target="_blank"><img style="height: 30px; width: 30px;" src="<?= URL . '/img/menu_lider_pro/informacoes_legais_rede_linkedin.png' ?>" alt=""></a> </div>
                <div class="p-1"><a href="<?= URL_TWITTER ?>" target="_blank"><img style="height: 30px; width: 30px;" src="<?= URL . '/img/menu_lider_pro/informacoes_legais_rede_twitter.png' ?>" alt=""></a> </div>
            </div>

            <div class="row py-5 mt-5">
                <div class="col">
                    <p class="lp-paragrafo d-flex justify-content-center">COMO CHEGAR NA LIDERPRO?</p>
                </div>
                <div class="col-md-12 col-lg-12 lp-mapa-contatos p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.8884634684364!2d-43.180158984992204!3d-22.917484444014526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f7ceee244db%3A0xa0aa3c02ec499c80!2sLIDERPRO%20INFORM%C3%81TICA!5e0!3m2!1spt-BR!2sbr!4v1679852163011!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="row">
                <div class="col d-flex justify-content-center flex-column">
                    <p class="lp-paragrafo">• Estacionamento gratuito no local. </p>
                    <p class="lp-paragrafo">• Metrô a 300 metros (estação Glória, saída A).</p>
                </div>
            </div>

        </div>
    </div>
</div>