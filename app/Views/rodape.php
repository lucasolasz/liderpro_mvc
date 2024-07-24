<footer class="lp-rodape d-flex justify-content-center p-5">

    <div class="row container">
        <div class="col-md">
            <ul class="list-unstyled lista-rodape">
                <li class="lp-titulo-rodape">SERVIÇOS</li>
                <li><a href="<?= URL . '/Paginas/assistencia_tecnica' ?>">ASSISTÊNCIA TÉCNICA</a>
                    <ul class="list-unstyled lp-submenu-rodape">
                        <li><a href="<?= URL . '/AssistenciaOpcao/computador_opc' ?>">Computador</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/notebook_opc' ?>">Notebook</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/tablet_celular_opc' ?>">Tablet e Celular</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/projetor_opc' ?>">Projetore</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/fonte_alimentacao_opc' ?>">Fonte de Alimentação</a>
                        </li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/tv_monitor_opc' ?>">TV e Monitor</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/impressora_opc' ?>">Impressora</a></li>
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
                <li><a href="<?= URL . '/Paginas/valores' ?>">VALORES ÉTICOS</a>
                    <ul class="list-unstyled lp-submenu-rodape">
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Nossa Missão</a> </li>
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Nossa Visão</a></li>
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Honestidade e Confiança</a></li>
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Respeito e Lei</a></li>
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Integridade</a></li>
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Direitos Humanos</a></li>
                    </ul>
                </li>
                <li><a href="<?= URL . '/Paginas/parcerias' ?>">PARCEIROS E CERTIFICAÇÕES</a></li>
                <li><a href="<?= URL . '/Paginas/informacoes_legais' ?>">INFORMAÇÕES GERAIS</a>
                    <ul class="list-unstyled lp-submenu-rodape">
                        <li><a href="<?= URL . '/Paginas/termos_de_uso' ?>">Termos de Uso</a></li>
                        <li><a href="<?= URL . '/Paginas/politica_de_privacidade' ?>">Política de Privacidade</a></li>
                        <li><a href="<?= URL . '/Paginas/informacoes_legais' ?>">Informações Legais</a></li>
                    </ul>
                </li>
                <li><a href="<?= URL . '/UsuariosController/login' ?>">ACESSO AO CLIENTE</a></li>
            </ul>
        </div>
        <div class="col-md d-flex flex-column">
            <div>
                <ul class="list-unstyled lista-rodape">
                    <li class="lp-titulo-rodape">CLIENTES</li>
                    <li><a href="<?= URL . '/Paginas/clientes' ?>">RELAÇÃO DE CLIENTES</a></li>
                    <li><a href="<?= URL . '/Paginas/pesquisaAvancadaClienteAlfabetica' ?>">Por Ordem Alfabética</a>
                    </li>
                    <li><a href="<?= URL . '/Paginas/pesquisaAvancadaClientePorSegmento' ?>">Por Ordem de Segmentos</a>
                    </li>
                </ul>
            </div>
            <div class="mt-5">
                <div class="lp-titulo-rodape">REDES SOCIAIS</div>
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
                <li class="lp-titulo-rodape"><a href="<?= URL . '/Paginas/contatos' ?>">CONTATOS</a></li>
                <li><a href="<?= URL . '/Paginas/contatos' ?>">Endereço</a></li>
                <li><a href="<?= URL . '/Paginas/contatos' ?>">Telefones</a></li>
                <li><a href="<?= URL . '/Paginas/contatos' ?>">E-mail</a></li>
                <li><a href="<?= URL . '/Paginas/contatos' ?>">Horário de Funcionamento</a></li>
                <li><a href="<?= URL . '/Paginas/contatos' ?>">Como chegar</a></li>
            </ul>
            <ul class="list-unstyled lista-rodape">
                <li class="lp-titulo-rodape" id="linkpesquisaRodape">PESQUISA</li>
            </ul>
            <ul class="list-unstyled lista-rodape">
                <li class="lp-titulo-rodape">IDIOMAS</li>
                <li><a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=PT" ?>">Português</a></li>
                <li><a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=EN" ?>">Inglês</a></li>
                <li><a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=ES" ?>">Espanhol</a></li>
            </ul>
        </div>
    </div>
</footer>


</body>

</html>