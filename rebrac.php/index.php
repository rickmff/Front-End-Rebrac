<?php
session_start();
include 'cms/config/config.php';
require 'cms/classes/class.conndatabase.php';
require 'cms/classes/functions.php';
?>

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

    <div class="row">
        <div class="col-12">
            <div id="set-carousel-1" class="set-carou sel carousel slide overflow-hidden" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-text ml-5 ">
                            <h3 class="font-weight-light text-uppercase">Rebrac</h3>
                            <h4 class="font-weight-light text-uppercase rebrac-yellow-color">Desde 1999</h4>
                            <h2 class="rebrac-text-large text-uppercase">Fazendo o <br> Que é preciso!</h2>
                        </div>
                        <img src="./imagens/rebrac-calibracao-e-manutencao-instrumentos-de-medicao.png"
                            class="img-fluid"
                            alt="Qualidade e agilidade na calibração e manutenção de instrumentos de medição"
                            title="Qualidade e agilidade na calibração e manutenção de instrumentos de medição">
                    </div>
                    <div class="carousel-item ">
                        <img src="./imagens/rebrac-calibracao-e-manutencao-instrumentos-de-medicao.png"
                            class="img-fluid"
                            alt="Qualidade e agilidade na calibração e manutenção de instrumentos de medição"
                            title="Qualidade e agilidade na calibração e manutenção de instrumentos de medição">
                    </div>
                    <div class="carousel-item ">
                        <img src="./imagens/rebrac-calibracao-e-manutencao-instrumentos-de-medicao.png"
                            class="img-fluid"
                            alt="Qualidade e agilidade na calibração e manutenção de instrumentos de medição"
                            title="Qualidade e agilidade na calibração e manutenção de instrumentos de medição">
                    </div>
                    <!-- Indicators -->
                    <ul class="carousel-indicators set-indicators">
                        <li data-target="#set-carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#set-carousel-1" data-slide-to="1"></li>
                        <li data-target="#set-carousel-1" data-slide-to="2"></li>
                    </ul>
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#set-carousel-1" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#set-carousel-1" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="set-red-line"></div>

    <!-- Rebrac instrumentos de medicao -->
    <div id="empresa" class="bg-1">
        <div class="container pt-4">
            <div class="overflow-hidden">
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ma8" data-aos="fade-up" data-aos-delay="150"
                        data-aos-duration="1500">
                        <h3 class="text-uppercase font-weight-bolder font-weight-rebrac mobile-off">Rebrac</h3>
                        <h2 class="rebrac-red-color text-uppercase font-weight-bolder2 font-weight-light mb-3">Instrumentos de medição</h2>
                        <p class="mt-2">
                            O laboratório Rebrac iniciou suas atividades em 1999 para garantir a confiabilidade dos
                            processos das empresas através de qualidade e agilidade na calibração e manutenção de
                            instrumentos de medição.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ma7 justify-content-center set-logo-content">
                        <img src="./imagens/rebrac-qualidade-e-agilidade-na-calibracao-e-manutencao-de-instrumentos-de-medição.png"
                            class="img-fluid"
                            alt="O laboratório Rebrac garante a confiabilidade dos processos das empresas"
                            title="O laboratório Rebrac garante a confiabilidade dos processos das empresas" />
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ma8 mt5" data-aos="fade-down" data-aos-delay="150"
                        data-aos-duration="1500">
                        <p class="mt7">Com as exigências do mercado, o Laboratório Rebrac desenvolveu seu sistema de gestão da
                            qualidade
                            baseado na norma NBR ISO/IEC 17025.
                        </p>
                        <p>Nossos serviços são realizados por profissionais altamente qualificados e experientes para
                            garantir a satisfação dos nossos clientes.
                        </p>
                        <button type="button" href="/service.html" class="btn text-white text-uppercase set-bg-blue py-3 px-3 mb-2 mt-2 "
                            role="button" aria-pressed="true">Agende uma visita</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Missao Visao Valores-->
        <div class="container ma8">
            <div class="row">
                <div class="col-12 set-missao">
                    <div class="dropdown-divider rebrac-red-color mb-2 mt-2"></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" data-aos="fade-left" data-aos-delay="0"
                    data-aos-duration="1500">
                    <h3 class="font-weight-bold text-uppercase">Missão</h3>
                    <div class="row mt-4 rebrac-red-color ">
                        <div class="col-8 font-sobre mb-2">
                            Fornecer serviços de elevado padrão de qualidade e confiabilidade de forma a assegurar a
                            satisfação de nossos clientes.
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 " data-aos="fade-left" data-aos-delay="250"
                    data-aos-duration="1500">
                    <h3 class="font-weight-bold text-uppercase">Visão</h3>
                    <div class="row mt-4 rebrac-red-color ">
                        <div class="col-10 font-sobre mb-2">
                            Ser a melhor empresa de Calibração e Manutenção de Instrumentos de Medição da cidade de
                            Sorocaba e região. Garantindo a satisfação de nossos clientes através de uma gestão focada
                            em qualidade e eficiência.​
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 " data-aos="fade-left" data-aos-delay="450"
                    data-aos-duration="1500">
                    <h3 class="font-weight-bolder text-uppercase">Valores</h3>
                    <div class="row mt-4 rebrac-red-color font-sobre">
                        <div class="col-4 ">
                            <ul class="values-list">
                                <li>Eficiência</li>
                                <li>Qualidade</li>
                                <li>Honestidade</li>
                                <li>Transparência</li>
                            </ul>
                        </div>
                        <div class="col-8 ">
                            <ul>
                                <li>Profissionalismo</li>
                                <li>Justiça</li>
                                <li>Comprometimento com o cliente</li>
                                <li>Confiança</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- carousel 2-->
<? include('includes/carousel2.php'); ?>

    <div class="container mt-5">
        <div class="row">
            <div id="servicos" class="col-6 text-uppercase">
                <h4>Nosso Serviços</h4>
            </div>
            <div class="col-6 text-right">
                <button type="button" href="#" class="btn text-white set-bg-blue py-3 px-3 text-uppercase" role="button"
                    aria-pressed="true">Fale conosco</a></button>
            </div>
        </div>
        <div class="row mt-4 mb-5">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4" data-aos="flip-left" data-aos-duration="1000">
                <img src="./imagens/service-1.png" class="img-fluid over"
                    alt="Qualidade e agilidade na calibração e manutenção de instrumentos de medição"
                    title="REBRAC calibração e manutenção de instrumentos de medição" />
                <div class="col-12">
                    <h6 class="rebrac-red-color font-weight-bolder my-2 mt-3 text-uppercase">Calibração</h6>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra
                    nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus,
                    tortor sed eleifend tristique, tortor mauris molestie elit,
                    et lacinia ipsum.
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-4" data-aos="flip-left" data-aos-delay="150"
                data-aos-duration="1500">
                <img src="./imagens/service-2.png" class="img-fluid"
                    alt="Qualidade e agilidade na calibração e manutenção de instrumentos de medição"
                    title="REBRAC calibração e manutenção de instrumentos de medição" />
                <div class="col-12">
                    <h6 class="rebrac-red-color font-weight-bolder my-2 mt-3 text-uppercase">Assitência tecnica</h6>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra
                    nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus,
                    tortor sed eleifend tristique, tortor mauris molestie elit,
                    et lacinia ipsum.
                </div>
            </div>
        </div>
    </div>

    <div class="bg-3 mt-5">
            <div class="container">
                <div id="contato" class="row">
                    <div class="col-12 col-md-6 py-5">
                        <form class="set-form" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 pt-5 text-center text-sm-left text-md-left text-lg-left">
                                    <h3 class="text-white font-weight-bolder text-uppercase">Envie um e-mail</h3>
                                </div>
                                <div class="col-12 ">
                                    <div class="py-1">
                                        <input type="hidden" name="url" value="https://www.rebrac.com.br">
                                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome"
                                            required="required">
                                    </div>
                                    <div class="py-1">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="E-mail" required="required">
                                    </div>
                                    <div class="py-1">
                                        <input type="text" name="telefone" class="form-control" id="telefone"
                                            placeholder="Telefone">
                                    </div>
                                    <div class="py-1">
                                        <textarea placeholder="Mensagem" name="mensagem" id="mensagem"
                                            class="form-control message-box" set-rows="6" required="required"></textarea>
                                    </div>
                                    <div class="py-3 text-right">
                                        <button type="button" href="cliente.php"
                                            class="btn rebrac-red-color bg-warning text-uppercase py-2 px-4 font-weight-bolder"
                                            role="button" aria-pressed="true">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-6 my-2 text-center">
                        <div class="row rebrac-red-color-bg  px-md-5 my-2 justify-content-center">
                            <div class="col-12 pt-5 text-center text-sm-left text-md-left text-lg-left text-white">
                                <h3 class=" font-weight-bolder text-uppercase">Contato</h3>
                                <p>(15) 3227-4196 / (15) 3227-4228 / rebrac@rebrac.com.br</p>
                            </div>
                            <div class="col-12 pt-3 pb-3 text-center text-sm-left text-md-left text-lg-left text-white">
                                <h3 class=" font-weight-bolder text-uppercase">Endereço</h3>
                                <p>Rua Peru, 120 - Barcelona - Sorocaba/SP</p>
                            </div>
                            <div class="col-12 pb-4  overflow-hiden">
                                <iframe height="250" width="100%"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.5021966373893!2d-47.441391985023216!3d-23.514433384706166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf60329d5a4ab7%3A0x11958ea7ef6d3095!2sR.%20Peru%2C%20120%20-%20Vila%20Barcelona%2C%20Sorocaba%20-%20SP%2C%2018025-290!5e0!3m2!1spt-BR!2sbr!4v1567272843509!5m2!1spt-BR!2sbr"
                                    style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="set-white-line"></div>

    <? include('includes/footer.php'); ?>
    <? include('includes/js.php'); ?>
    <? include('includes/analytics.php'); ?>
</body>

</html>