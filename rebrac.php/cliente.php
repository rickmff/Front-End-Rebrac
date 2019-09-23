<html>

<head>
    <? include('includes/meta.php'); ?>
    <? include('includes/css.php'); ?>
</head>

<body>

<div class="container" data-aos="fade-up">

        <!-- Under Nav -->
        <? include('includes/undernav.php'); ?>

        <!-- Menu Nav -->
        <? include('includes/navbar.php'); ?>
        
</div>
    <!-- Sidebar -->
    <? include('includes/sidenav.php'); ?>

    <div class="set-red-line"></div>

    <div class="pa-40 set-bg-blue container-fluid">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
            <h2 class="title_cliente text-uppercase">Área do Cliente</h2>
        </div>
    </div>

    <div class="set-red-line"></div>

    <div class="container mt-5 mb-5 ">
        <div class="row">
            <div class=" gray-menu nav btn-menu flex-column nav-pills pr-4" id="v-pills-tab" role="tablist">

                <a class="nav-link active btn text-white set-bg-blue text-uppercase" id="v-pills-home-tab" data-toggle="pill"
                    href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Início</a>
                <a class="nav-link btn text-white set-bg-blue text-uppercase" id="v-pills-profile-tab" data-toggle="pill"
                    href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Meus dados</a>
                <a class="nav-link btn text-white set-bg-blue text-uppercase" id="v-pills-service-tab" data-toggle="pill"
                    href="#v-pills-service" role="tab" aria-controls="v-pills-service"
                    aria-selected="false">Serviços</a>
                <a class="nav-link btn text-white set-bg-blue text-uppercase" id="v-pills-download-tab" data-toggle="pill"
                    href="#v-pills-download" role="tab" aria-controls="v-pills-download"
                    aria-selected="false">Downloads</a>
                <a class="nav-link btn text-white set-bg-blue text-uppercase" id="v-pills-password-tab" data-toggle="pill"
                    href="#v-pills-password" role="tab" aria-controls="v-pills-password" aria-selected="false">Alterar Senha</a>
                <a class="nav-link btn text-white set-bg-blue text-uppercase" id="v-pills-settings-tab" href="index.php">Sair</a>
            </div>
            <div class="col-12 col-sm-12 col-md-9 tab-content ma-3" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">
                    <div class="container">
                        <div class="row font-weight-bolder text-uppercase ml-3">
                            <h3>Início</h3>
                        </div>
                        <div class="row ml-3">
                            <div class="col-6 list-group">
                                <div><b>Nome:</b> Lorem Impsum</div>
                                <div><b>CPF:</b> 401.879.698-10</div>
                                <div><b>Telefone:</b> (15) 3221-8747</div>
                            </div>
                            <div class="col-6 list-group">
                                <div><b>E-mail:</b> lorem-impsum@gmail.com</div>
                                <div><b>Data de nascimento:</b> 12/04/1988</div>
                                <div><b>Celular:</b> (15) 98117-7479s</div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row mt-5">
                            <h4 class="font-weight-bolder text-uppercase ml-4">Últimos serviços</h4>
                            <div class="col-12 mt-5 table-responsive">
                                <table class="table table-borderless text-center ">
                                    <tbody>
                                        <tr>
                                            <th class="align-v-middle set-border-table-client subtitle_cliente"
                                                rowspan="2" colspan="2">
                                                <strong>Assistência Técnicas</strong>
                                            </th>
                                            <th></th>
                                            <th>
                                                <strong>Data</strong>
                                            </th>
                                            <th>
                                                <strong>Status</strong>
                                            </th>
                                            <th rowspan="2" class="align-v-bottom pa-0">
                                                <button
                                                    class="btn btn-client btn-client-small text-white set-bg-blue text-uppercase"><strong>Ver
                                                        Detalhes</strong></button>
                                            </th>
                                        </tr>
                                        <tr class="set-border-table-client">

                                            <th></th>
                                            <td class="align-v-top">
                                                <span>21/08/2019</span>
                                            </td>
                                            <td>
                                                <span class="display-5">Em Analise</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>

                                        <tr>
                                            <th class="align-v-middle set-border-table-client subtitle_cliente"
                                                rowspan="2" colspan="2">
                                                <strong>Calibragem</strong>
                                            </th>
                                            <th></th>
                                            <th>
                                                <strong>Data</strong>
                                            </th>
                                            <th>
                                                <strong>Status</strong>
                                            </th>
                                            <th rowspan="2" class="align-v-bottom pa-0">
                                                <button
                                                    class="btn btn-client btn-client-small text-white set-bg-blue text-uppercase"><strong>Ver
                                                        Detalhes</strong></button>
                                            </th>
                                        </tr>
                                        <tr class="set-border-table-client">

                                            <th></th>
                                            <td>
                                                <span>12/08/2019</span>
                                            </td>
                                            <td>
                                                <span class="display-5">Finalizado</span>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <h4 class="font-weight-bold text-uppercase">Meus dados</h4>
                    <form action="" method="POST" class="form-client">
                        <div class="row mt-5">
                            <div class="col-6 form-group">
                                <input type="name" class="form-control" autocomplete="name" placeholder="NOME"
                                    required />
                            </div>
                            <div class="col-6">
                                <input type="email" class="form-control" autocomplete="email" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="E-MAIL" required />
                            </div>
                        </div>
                        <div class="row form-group mt-3">

                            <div class="col">
                                <input required type="text" id="cpf" autocomplete="cpf" class="form-control"
                                    placeholder="CPF" />
                            </div>
                            <div class="col">
                                <input required type="date" class="form-control" autocomplete="bday"
                                    placeholder="DATA DE NASCIMENTO" />
                            </div>
                            <div class="col">
                                <input required type="text" id="telefone" autocomplete="tel" class="form-control"
                                    placeholder="TELEFONE:" />
                            </div>
                            <div class="col">
                                <input required type="text" id="celular" autocomplete="cel" class="form-control"
                                    placeholder="CELULAR:" />
                            </div>
                        </div>
                        <div class="row form-group mt-4">
                            <div class="col text-right">
                                <button type="submit" class="btn btn-primary btn-client text-uppercase">Atualizar dados</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-service" role="tabpanel" aria-labelledby="v-pills-service-tab">
                    <h4 class="font-weight-bold text-uppercase">Serviços Oferecidos</h4>
                    <div class="row">
                        <div class="col-12 mt-5">
                            <table class="table table-borderless text-center ">
                                <tbody>

                                    <tr>
                                        <th class="align-v-middle set-border-table-client subtitle_cliente" rowspan="2"
                                            colspan="2">
                                            <strong>Assistência Técnicass</strong>
                                        </th>
                                        <th></th>
                                        <th>
                                            <strong>Data</strong>
                                        </th>
                                        <th>
                                            <strong>Status</strong>
                                        </th>
                                        <th rowspan="2" class="align-v-bottom pa-0">
                                            <button
                                                class="btn btn-client btn-client-small set-text-whites text-white text-uppercase"><strong>Ver
                                                    Detalhes</strong></button>
                                        </th>
                                    </tr>
                                    <tr class="set-border-table-client">

                                        <th></th>
                                        <td class="align-v-top">
                                            <span>21/08/2019</span>
                                        </td>
                                        <td>
                                            <span class="display-5">Em Analise</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>

                                    <tr>
                                        <th class="align-v-middle set-border-table-client subtitle_cliente" rowspan="2"
                                            colspan="2">
                                            <strong>Calibragem</strong>
                                        </th>
                                        <th></th>
                                        <th>
                                            <strong>Data</strong>
                                        </th>
                                        <th>
                                            <strong>Status</strong>
                                        </th>
                                        <th rowspan="2" class="align-v-bottom pa-0">
                                            <button
                                                class="btn btn-client btn-client-small set-text-whites text-white text-uppercase"><strong>Ver
                                                    Detalhes</strong></button>
                                        </th>
                                    </tr>
                                    <tr class="set-border-table-client">

                                        <th></th>
                                        <td>
                                            <span>12/08/2019</span>
                                        </td>
                                        <td>
                                            <span class="display-5">Finalizado</span>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-download" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <h4 class="font-weight-bold text-uppercase">Arquivos disponíveis</h4>
                    <div class="row">
                        <div class="col-12 mt-5">
                            <table class="table table-borderless text-center ">
                                <tbody>

                                    <tr>
                                        <th class="align-v-middle set-border-table-client subtitle_cliente" rowspan="2"
                                            colspan="2">
                                            <strong>Título do Documento</strong>
                                        </th>
                                        <th></th>
                                        <th>
                                            <strong>Data</strong>
                                        </th>

                                        <th rowspan="2" class="align-v-bottom pa-0">
                                            <button class="btn btn-client set-text-whites text-white"><strong><i
                                                        class="fa mr-2 fa-fw fa-download fa-lg" aria-hidden="true">
                                                    </i>Baixar</strong></button>
                                        </th>
                                    </tr>
                                    <tr class="set-border-table-client">

                                        <th></th>
                                        <td class="align-v-top">
                                            <span>21/08/2019</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>

                                    <tr>
                                        <th class="align-v-middle set-border-table-client subtitle_cliente" rowspan="2"
                                            colspan="2">
                                            <strong>Título do Documento</strong>
                                        </th>
                                        <th></th>
                                        <th>
                                            <strong>Data</strong>
                                        </th>
                                        <th rowspan="2" class="align-v-bottom pa-0">
                                            <button class="btn btn-client set-text-whites text-white"><strong><i
                                                        class="fa mr-2 fa-fw fa-download fa-lg" aria-hidden="true">
                                                    </i>Baixar</strong></button>
                                        </th>
                                    </tr>
                                    <tr class="set-border-table-client">

                                        <th></th>
                                        <td>
                                            <span>12/08/2019</span>
                                        </td>


                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <h4 class="font-weight-bold text-uppercase">Alterar senha</h4>
                    <form action="" method="POST" class="form-client">
                        <div class="row mt-5">
                            <div class="col form-group">
                                <input type="password" class="form-control" autocomplete="current-password"
                                    placeholder="SENHA ATUAL" />
                            </div>
                            <div class="col form-group">
                                <input type="password" class="form-control" autocomplete="new-password"
                                    placeholder="NOVA SENHA" />
                            </div>
                            <div class="col form-group">
                                <input type="password" class="form-control" autocomplete="new-password"
                                    placeholder="REPETIR NOVA SENHA" />
                            </div>
                        </div>
                        <div class="row form-group mt-3">
                            <div class="col text-right">
                                <button type="submit" class="btn btn-primary btn-client text-uppercase">Atualizar dados</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <? include('includes/footer.php'); ?>
    <!-- Scripts -->
</body>
    <? include('includes/js.php'); ?>
    <? include('includes/analytics.php'); ?>
</html>

