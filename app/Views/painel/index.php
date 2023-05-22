<div class="container py-5">

    <?= Alertas::mensagem('paginas') ?>

    <div class="card">

        <div class="card-header">

            <h5 class="tituloIndex">Painel de cadastros</h5>


        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Usuários</h5>
                            <p class="card-text">Visualize e cadastre novos usuários</p>
                            <a href="<?= URL . '/UsuariosController/visualizarUsuarios' ?>" class="btn lp-btn-liderpro">Visualizar</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Páginas</h5>
                            <p class="card-text">Visualize e cadastre novos páginas</p>
                            <a href="<?= URL . '/Painel/visualizarPaginas' ?>" class="btn lp-btn-liderpro">Visualizar</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Clientes</h5>
                            <p class="card-text">Visualize e cadastre novos clientes</p>
                            <a href="<?= URL . '/Clientes/visualizarClientes' ?>" class="btn lp-btn-liderpro">Visualizar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>