<div class="form-group mt-4">
    <label for="txtTitutoPaginaEs" id="tituloPaginalblEs">Título da página Espanhol *</label>
    <input type="input" class="form-control" id="txtTitutoPaginaEs" name="txtTitutoPaginaEs" value="<?= $dados['paginaSelecionada'][0]->ds_pagina_es ?>">
    <small id="recebeAlertaEs"></small>
</div>


<div class="form-group">
    <label for="txtTextPrincipalEs">Texto Principal Espanhol</label>
    <textarea class="form-control val-obrigatorio" id="txtTextPrincipalEs" name="txtTextPrincipalEs" rows="8" maxlength="800"><?= $dados['paginaSelecionada'][0]->ds_texto_principal_es ?></textarea>
</div>


<div class="row mt-5">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">

                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="tab-1-tab-es" data-toggle="tab" data-target="#tab-1-es" type="button" role="tab" aria-controls="tab-1-es" aria-selected="true">Tab 1 Espanhol</button>
                    <button class="nav-link" id="tab-2-tab-es" data-toggle="tab" data-target="#tab-2-es" type="button" role="tab" aria-controls="tab-2-es" aria-selected="false">Tab 2 Espanhol</button>
                    <button class="nav-link" id="tab-3-tab-es" data-toggle="tab" data-target="#tab-3-es" type="button" role="tab" aria-controls="tab-3-es" aria-selected="false">Tab 3 Espanhol</button>
                    <button class="nav-link" id="tab-4-tab-es" data-toggle="tab" data-target="#tab-4-es" type="button" role="tab" aria-controls="tab-4-es" aria-selected="false">Tab 4 Espanhol</button>
                </div>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="tab-1-es" role="tabpanel" aria-labelledby="tab-1-tab-es">
                <div class="row p-4">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="form-group">
                            <label for="txtNomeTab1Es">Descrição Tab 1 Espanhol</label>
                            <input type="input" class="form-control" name="txtNomeTab1Es" id="txtNomeTab1Es" value="<?= $dados['paginaSelecionada'][0]->ds_tab1_es ?>">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ml-4">
                                    <label for="txtTopico1Tab1Es">Tópico 1 Tab 1 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico1Tab1Es" id="txtTopico1Tab1Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico1tab1_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico2Tab1Es">Tópico 2 Tab 1 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico2Tab1Es" id="txtTopico2Tab1Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico2tab1_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico3Tab1Es">Tópico 3 Tab 1 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico3Tab1Es" id="txtTopico3Tab1Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico3tab1_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico4Tab1Es">Tópico 4 Tab 1 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico4Tab1Es" id="txtTopico4Tab1Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico4tab1_es ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ml-4">
                                    <label for="txtTopico5Tab1Es">Tópico 5 Tab 1 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico5Tab1Es" id="txtTopico5Tab1Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico5tab1_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico6Tab1Es">Tópico 6 Tab 1 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico6Tab1Es" id="txtTopico6Tab1Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico6tab1_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico7Tab1Es">Tópico 7 Tab 1 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico7Tab1Es" id="txtTopico7Tab1Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico7tab1_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico8Tab1Es">Tópico 8 Tab 1 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico8Tab1Es" id="txtTopico8Tab1Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico8tab1_es ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-2-es" role="tabpanel" aria-labelledby="tab-2-tab-es">
                <div class="row p-4">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="form-group">
                            <label for="txtNomeTab2Es">Descrição Tab 2 Espanhol</label>
                            <input type="input" class="form-control" name="txtNomeTab2Es" id="txtNomeTab2Es" value="<?= $dados['paginaSelecionada'][0]->ds_tab2_es ?>">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ml-4">
                                    <label for="txtTopico1Tab2Es">Tópico 1 Tab 2 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico1Tab2Es" id="txtTopico1Tab2Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico1tab2_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico2Tab2Es">Tópico 2 Tab 2 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico2Tab2Es" id="txtTopico2Tab2Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico2tab2_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico3Tab2Es">Tópico 3 Tab 2 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico3Tab2Es" id="txtTopico3Tab2Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico3tab2_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico4Tab2Es">Tópico 4 Tab 2 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico4Tab2Es" id="txtTopico4Tab2Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico4tab2_es ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ml-4">
                                    <label for="txtTopico5Tab2Es">Tópico 5 Tab 2 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico5Tab2Es" id="txtTopico5Tab2Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico5tab2_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico6Tab2Es">Tópico 6 Tab 2 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico6Tab2Es" id="txtTopico6Tab2Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico6tab2_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico7Tab2Es">Tópico 7 Tab 2 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico7Tab2Es" id="txtTopico7Tab2Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico7tab2_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico8Tab2Es">Tópico 8 Tab 2 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico8Tab2Es" id="txtTopico8Tab2Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico8tab2_es ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-3-es" role="tabpanel" aria-labelledby="tab-3-tab-es">
                <div class="row p-4">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="form-group">
                            <label for="txtNomeTab3Es">Descrição Tab 3 Espanhol</label>
                            <input type="input" class="form-control" name="txtNomeTab3Es" id="txtNomeTab3Es" value="<?= $dados['paginaSelecionada'][0]->ds_tab3_es ?>">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ml-4">
                                    <label for="txtTopico1Tab3Es">Tópico 1 Tab 3 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico1Tab3Es" id="txtTopico1Tab3Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico1tab3_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico2Tab3Es">Tópico 2 Tab 3 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico2Tab3Es" id="txtTopico2Tab3Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico2tab3_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico3Tab3Es">Tópico 3 Tab 3 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico3Tab3Es" id="txtTopico3Tab3Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico3tab3_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico4Tab3Es">Tópico 4 Tab 3 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico4Tab3Es" id="txtTopico4Tab3Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico4tab3_es ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ml-4">
                                    <label for="txtTopico5Tab3Es">Tópico 5 Tab 3 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico5Tab3Es" id="txtTopico5Tab3Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico5tab3_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico6Tab3Es">Tópico 6 Tab 3 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico6Tab3Es" id="txtTopico6Tab3Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico6tab3_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico7Tab3Es">Tópico 7 Tab 3 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico7Tab3Es" id="txtTopico7Tab3Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico7tab3_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico8Tab3Es">Tópico 8 Tab 3 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico8Tab3Es" id="txtTopico8Tab3Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico8tab3_es ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-4-es" role="tabpanel" aria-labelledby="tab-4-tab-es">
                <div class="row p-4">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="form-group">
                            <label for="txtNomeTab4Es">Descrição Tab 4 Espanhol</label>
                            <input type="input" class="form-control" name="txtNomeTab4Es" id="txtNomeTab4Es" value="<?= $dados['paginaSelecionada'][0]->ds_tab4_es ?>">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ml-4">
                                    <label for="txtTopico1Tab4Es">Tópico 1 Tab 4 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico1Tab4Es" id="txtTopico1Tab4Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico1tab4_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico2Tab4Es">Tópico 2 Tab 4 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico2Tab4Es" id="txtTopico2Tab4Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico2tab4_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico3Tab4Es">Tópico 3 Tab 4 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico3Tab4Es" id="txtTopico3Tab4Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico3tab4_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico4Tab4Es">Tópico 4 Tab 4 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico4Tab4Es" id="txtTopico4Tab4Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico4tab4_es ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ml-4">
                                    <label for="txtTopico5Tab4Es">Tópico 5 Tab 4 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico5Tab4Es" id="txtTopico5Tab4Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico5tab4_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico6Tab4Es">Tópico 6 Tab 4 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico6Tab4Es" id="txtTopico6Tab4Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico6tab4_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico7Tab4Es">Tópico 7 Tab 4 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico7Tab4Es" id="txtTopico7Tab4Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico7tab4_es ?>">
                                </div>
                                <div class="form-group ml-4">
                                    <label for="txtTopico8Tab4Es">Tópico 8 Tab 4 Espanhol</label>
                                    <input type="input" class="form-control" name="txtTopico8Tab4Es" id="txtTopico8Tab4Es" value="<?= $dados['paginaSelecionada'][0]->ds_topico8tab4_es ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>