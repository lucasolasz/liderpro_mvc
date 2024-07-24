<footer class="lp-rodape d-flex justify-content-center p-5">

    <div class="row container">
        <div class="col-md">
            <ul class="list-unstyled lista-rodape">
                <li class="lp-titulo-rodape">SERVICES</li>
                <li><a href="<?= URL . '/Paginas/assistencia_tecnica' ?>">TECHNICAL ASSISTANCE</a>
                    <ul class="list-unstyled lp-submenu-rodape">
                        <li><a href="<?= URL . '/AssistenciaOpcao/computador_opc' ?>">Computer</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/notebook_opc' ?>">Notebook</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/tablet_celular_opc' ?>">Tablet and Cell Phone</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/projetor_opc' ?>">Projector</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/fonte_alimentacao_opc' ?>">Power supply</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/tv_monitor_opc' ?>">TV and Monitor</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/impressora_opc' ?>">Printer</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/nobreak_opc' ?>">No-break</a></li>
                    </ul>
                </li>

                <?php foreach ($dados['paginas'] as $paginas) { ?>
                    <li><a
                            href="<?= URL . '/PaginasDinamicas/' . $paginas->ds_breadcrumb_menu ?>"><?= mb_strtoupper($paginas->ds_pagina) ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-md">
            <ul class="list-unstyled lista-rodape">
                <li class="lp-titulo-rodape">LIDERPRO</li>
                <li><a href="<?= URL . '/Paginas/lider_pro' ?>">LIDERPRO</a></li>
                <li><a href="<?= URL . '/Paginas/valores' ?>">ETHICAL VALUES</a>
                    <ul class="list-unstyled lp-submenu-rodape">
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Our mission</a> </li>
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Our vision</a></li>
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Honesty and Trust</a></li>
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Respect and law</a></li>
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Integrity</a></li>
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Human rights</a></li>
                    </ul>
                </li>
                <li><a href="<?= URL . '/Paginas/parcerias' ?>">PARTNERS AND CERTIFICATIONS</a></li>
                <li><a href="<?= URL . '/Paginas/informacoes_legais' ?>">GENERAL INFORMATION</a>
                    <ul class="list-unstyled lp-submenu-rodape">
                        <li><a href="<?= URL . '/Paginas/termos_de_uso' ?>">Terms of use</a></li>
                        <li><a href="<?= URL . '/Paginas/politica_de_privacidade' ?>">Privacy Policy</a></li>
                        <li><a href="<?= URL . '/Paginas/informacoes_legais' ?>">Legal Information</a></li>
                    </ul>
                </li>
                <li><a href="<?= URL . '/UsuariosController/login' ?>">CUSTOMER ACCESS</a></li>
            </ul>
        </div>
        <div class="col-md d-flex flex-column">
            <div>
                <ul class="list-unstyled lista-rodape">
                    <li class="lp-titulo-rodape">CUSTOMERS</li>
                    <li><a href="<?= URL . '/Paginas/clientes' ?>">CUSTOMER LIST</a></li>
                    <li><a href="<?= URL . '/Paginas/pesquisaAvancadaClienteAlfabetica' ?>">By Alphabetical Order</a>
                    </li>
                    <li><a href="<?= URL . '/Paginas/pesquisaAvancadaClientePorSegmento' ?>">By Order of Segments</a>
                    </li>
                </ul>
            </div>
            <div class="mt-5">
                <div class="lp-titulo-rodape">SOCIAL MEDIA</div>
                <div class="row">
                    <div class="p-2"><a href="<?= URL_FACEBOOK ?>" target="_blank"><img class="lp-logo-rodape"
                                src="<?= URL . '/img/facebook_logo_rodape.png' ?>" alt="Facebook Logo Rodapé"></a></div>
                    <div class="p-2"><a href="<?= URL_INSTAGRAM ?>" target="_blank"><img class="lp-logo-rodape"
                                src="<?= URL . '/img/instagram_logo_rodape.png' ?>" alt=" Instagram Logo rodapé"></a>
                    </div>
                    <div class="p-2"><a href="<?= URL_YOUTUBE ?>" target="_blank"><img class="lp-logo-rodape"
                                src="<?= URL . '/img/youtube_logo_rodape.png' ?>" alt="Youtube Logo rodapé"></a></div>
                    <div class="p-2"><a href="<?= URL_LINKEDIN ?>" target="_blank"><img class="lp-logo-rodape"
                                src="<?= URL . '/img/linkedin_logo_rodape.png' ?>" alt="Linkedin Logo rodapé"></a></div>
                    <div class="p-2"><a href="<?= URL_TWITTER ?>" target="_blank"><img class="lp-logo-rodape"
                                src="<?= URL . '/img/twitter_logo_rodape.png' ?>" alt="Twitter Logo rodapé"></a></div>
                </div>
            </div>
            <div class="mt-auto">
                <a href="<?= URL ?>"><img class="img-fluid" style="padding: 20px;"
                        src="<?= URL . '/img/logo-liderpro-rodape.png' ?>" alt="Logo Lider Pro Rodapé"></a>
            </div>
        </div>
        <div class="col-md d-flex flex-column">
            <ul class="list-unstyled lista-rodape">
                <li class="lp-titulo-rodape"><a href="<?= URL . '/Paginas/contatos' ?>">CONTACTS</a></li>
                <li><a href="<?= URL . '/Paginas/contatos' ?>">Address</a></li>
                <li><a href="<?= URL . '/Paginas/contatos' ?>">Phones</a></li>
                <li><a href="<?= URL . '/Paginas/contatos' ?>">E-mail</a></li>
                <li><a href="<?= URL . '/Paginas/contatos' ?>">Opening Hours</a></li>
                <li><a href="<?= URL . '/Paginas/contatos' ?>">How to get</a></li>
            </ul>
            <ul class="list-unstyled lista-rodape">
                <li class="lp-titulo-rodape" id="linkpesquisaRodape">SEARCH</li>
            </ul>
            <ul class="list-unstyled lista-rodape">
                <li class="lp-titulo-rodape">LANGUAGES</li>
                <li><a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=PT" ?>">Portuguese</a></li>
                <li><a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=EN" ?>">English</a></li>
                <li><a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=ES" ?>">Spanish</a></li>
            </ul>
        </div>
    </div>
</footer>


</body>

</html>