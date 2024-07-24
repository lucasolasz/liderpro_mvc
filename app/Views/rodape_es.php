<footer class="lp-rodape d-flex justify-content-center p-5">

    <div class="row container">
        <div class="col-md">
            <ul class="list-unstyled lista-rodape">
                <li class="lp-titulo-rodape">SERVICIOS</li>
                <li><a href="<?= URL . '/Paginas/assistencia_tecnica' ?>">ASISTENCIA TÉCNICA</a>
                    <ul class="list-unstyled lp-submenu-rodape">
                        <li><a href="<?= URL . '/AssistenciaOpcao/computador_opc' ?>">Computadora</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/notebook_opc' ?>">Computadora portátil</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/tablet_celular_opc' ?>">Tableta y teléfono celular</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/projetor_opc' ?>">Proyector</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/fonte_alimentacao_opc' ?>">Fuente de alimentación</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/tv_monitor_opc' ?>">Televisor y monitor</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/impressora_opc' ?>">Impresora</a></li>
                        <li><a href="<?= URL . '/AssistenciaOpcao/nobreak_opc' ?>">UPS</a></li>
                    </ul>
                </li>

                <?php foreach ($dados['paginas'] as $paginas) { ?>
                    <li><a href="<?= URL . '/PaginasDinamicas/' . $paginas->ds_breadcrumb_menu ?>"><?= mb_strtoupper($paginas->ds_pagina) ?></a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-md">
            <ul class="list-unstyled lista-rodape">
                <li class="lp-titulo-rodape">LIDERPRO</li>
                <li><a href="<?= URL . '/Paginas/lider_pro' ?>">LIDERPRO</a></li>
                <li><a href="<?= URL . '/Paginas/valores' ?>">VALORES ETICOS</a>
                    <ul class="list-unstyled lp-submenu-rodape">
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Nuestra misión</a> </li>
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Nuestra visión</a></li>
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Honestidad y confianza</a></li>
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Respeto y Ley</a></li>
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Integridad</a></li>
                        <li><a href="<?= URL . '/Paginas/valores' ?>">Derechos humanos</a></li>
                    </ul>
                </li>
                <li><a href="<?= URL . '/Paginas/parcerias' ?>">SOCIOS Y CERTIFICACIONES</a></li>
                <li><a href="<?= URL . '/Paginas/informacoes_legais' ?>">INFORMACIONES GENERALES</a>
                    <ul class="list-unstyled lp-submenu-rodape">
                        <li><a href="<?= URL . '/Paginas/termos_de_uso' ?>">Terminos de uso</a></li>
                        <li><a href="<?= URL . '/Paginas/politica_de_privacidade' ?>">Política de privacidad</a></li>
                        <li><a href="<?= URL . '/Paginas/informacoes_legais' ?>">Información legal</a></li>
                    </ul>
                </li>
                <li><a href="<?= URL . '/UsuariosController/login' ?>">ACCESO DE CLIENTES</a></li>
                <li>IDIOMAS
                    <ul class="list-unstyled lp-submenu-rodape">
                        <li><a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=PT" ?>">Portugués</a></li>
                        <li><a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=EN" ?>">Inglés</a></li>
                        <li><a href="<?= URL . "/Paginas/trocaLinguagem/?linguagem=ES" ?>">Español</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-md d-flex flex-column">
            <div>
                <ul class="list-unstyled lista-rodape">
                    <li class="lp-titulo-rodape">CLIENTES</li>
                    <li><a href="<?= URL . '/Paginas/clientes' ?>">LISTA DE CLIENTES</a></li>
                    <li><a href="<?= URL . '/Paginas/pesquisaAvancadaClienteAlfabetica' ?>">Por orden alfabético</a></li>
                    <li><a href="<?= URL . '/Paginas/pesquisaAvancadaClientePorSegmento' ?>">Por orden de segmentos</a></li>
                </ul>
            </div>
            <div class="mt-5">
                <div class="lp-titulo-rodape">REDES SOCIALES</div>
                <div class="row">
                    <div class="p-2"><a href="<?= URL_FACEBOOK ?>" target="_blank"><img class="lp-logo-rodape" src="<?= URL . '/img/facebook_logo_rodape.png' ?>" alt="Facebook Logo Rodapé"></a></div>
                    <div class="p-2"><a href="<?= URL_INSTAGRAM ?>" target="_blank"><img class="lp-logo-rodape" src="<?= URL . '/img/instagram_logo_rodape.png' ?>" alt=" Instagram Logo rodapé"></a></div>
                    <div class="p-2"><a href="<?= URL_YOUTUBE ?>" target="_blank"><img class="lp-logo-rodape" src="<?= URL . '/img/youtube_logo_rodape.png' ?>" alt="Youtube Logo rodapé"></a></div>
                    <div class="p-2"><a href="<?= URL_LINKEDIN ?>" target="_blank"><img class="lp-logo-rodape" src="<?= URL . '/img/linkedin_logo_rodape.png' ?>" alt="Linkedin Logo rodapé"></a></div>
                    <div class="p-2"><a href="<?= URL_TWITTER ?>" target="_blank"><img class="lp-logo-rodape" src="<?= URL . '/img/twitter_logo_rodape.png' ?>" alt="Twitter Logo rodapé"></a></div>
                </div>
            </div>
            <div class="mt-auto">
                <a href="<?= URL ?>"><img class="img-fluid" style="padding: 20px;" src="<?= URL . '/img/logo-liderpro-rodape.png' ?>" alt="Logo Lider Pro Rodapé"></a>
            </div>
        </div>
        <div class="col-md d-flex flex-column">
            <ul class="list-unstyled lista-rodape">
                <li class="lp-titulo-rodape"><a href="<?= URL . '/Paginas/contatos' ?>">CONTATOS</a></li>
                <li><a href="<?= URL . '/Paginas/contatos' ?>">Dirección</a></li>
                <li><a href="<?= URL . '/Paginas/contatos' ?>">Los telefonos</a></li>
                <li><a href="<?= URL . '/Paginas/contatos' ?>">Correo electrónico</a></li>
                <li><a href="<?= URL . '/Paginas/contatos' ?>">Horas de oficina</a></li>
                <li><a href="<?= URL . '/Paginas/contatos' ?>">Como llegar</a></li>
            </ul>
            <ul class="list-unstyled lista-rodape">
                <li class="lp-titulo-rodape" id="linkpesquisaRodape">BUSCAR</li>
            </ul>
        </div>
    </div>
</footer>


</body>

</html>