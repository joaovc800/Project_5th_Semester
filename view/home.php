<?php
include('../model/session.php')
?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <base href="../" />

    <title>Landing Page 1 - Ace Admin</title>

    <!-- include common vendor stylesheets & fontawesome -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/regular.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/solid.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&amp;display=swap">
       
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.css">


    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap">
    <!-- <link rel="stylesheet" type="text/css" href="../includes/css/ace.min.css"> -->
    <link rel="stylesheet" type="text/css" href="../includes/css/ace-themes.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="../includes/css/ace.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../includes/css/ace-themes.css"></link> -->
    <link rel="stylesheet" href="../includes/css/ace.css">
    <link rel="stylesheet" href="../includes/css/ace-font.css">
    <link rel="stylesheet" href="../includes/@page-style.css">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="./../includes/favicon.png" />

    <!-- "Landing Page 1" page styles, specific to this page for demo only -->
    <style>
      html {
        --navbar-height: 5rem;
        --navbar-sm-height: 3.75rem;
      }
      .nav-link {
        color: white;
      }
      .navbar-darkblue {
        background-color: #1166a6;
      }
      .text-green-l5 {
        color: #8bdbbe!important;
      }
      /**
     See @page-script.js 
    */
      #scroll-down {
        position: absolute;
        top: 60vh;
      }

      #scroll-up {
        position: absolute;
        top: 0;
      }


      /* when we scroll down a little bit, navbar becomes fixed (+compact) and appears from top */
      @keyframes navbarAppearIn {
        0% {
          transform: translateY(-100%);
        }

        100% {
          transform: none;
        }
      }


      /* if our ace.css is compiled using sticky: true, then we should make it position: fixed again to fix a few glitches */
      .navbar-fixed {
        position: relative;
        animation: none;
        transition: none;
      }

      .navbar-compact {
        height: 5rem;
      }

      .navbar-fixed .navbar-inner {
        position: fixed;
        top: 0;
      }

      .navbar-compact .navbar-inner {
        height: 4rem;
        animation: navbarAppearIn 300ms;
      }

      @media (prefers-reduced-motion: reduce) {
        .navbar .navbar-inner {
          transition: none !important;
          animation: none !important;
        }
      }

      #navbar-dark.navbar-compact .navbar-inner {
        border-bottom: 1px solid rgba(0, 0, 0, 0.075);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.125);
      }


      /* the shadow for the 3 feature items ... speed, flexibility, etc */
      .shadow-1 {
        box-shadow: 0 0.125rem 0.375rem rgba(0, 0, 0, 0.1);
      }


      /* the triangle in light/white version */
      .shape-triangle {
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 12px 20px 12px;
        border-top-color: transparent !important;
        border-left-color: transparent !important;
        border-right-color: transparent !important;
      }
    </style>
    
  </head>

  <body>
    <!-- SIDEBAR -->
    <?php include '../includes/sidebar.php';?>
    <!-- SIDEBAR -->
    <div class="body-container">
      <?php include '../includes/navbar.php';?>
      <div class="pos-abs" id="scroll-down"></div>
      <div class="pos-abs" id="scroll-up"></div>
      <div class="main-container bgc-white">

        <div role="main" class="main-content">
          <div class="page-content p-0">
            <!-- the page intro for dark theme -->
            <div id="page-intro-dark" class="page-intro pos-rel navbar-darkblue py-2 pt-xl-4 py-xl-5 text-white">

              <!-- some random circles -->
              <div class="d-none d-lg-block">
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.16;width:4px; height:4px; top:30%; left:85%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.2;width:6px; height:6px; top:91%; left:15%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.3;width:8px; height:8px; top:1%; left:87%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.24;width:6px; height:6px; top:0%; left:70%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.17;width:16px; height:16px; top:79%; left:20%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.35;width:6px; height:6px; top:10%; left:0%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.17;width:14px; height:14px; top:16%; left:87%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.15;width:17px; height:17px; top:82%; left:71%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.2;width:12px; height:12px; top:17%; left:92%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.19;width:12px; height:12px; top:44%; left:64%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.27;width:11px; height:11px; top:43%; left:89%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.18;width:9px; height:9px; top:55%; left:25%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.38;width:10px; height:10px; top:5%; left:71%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.11;width:9px; height:9px; top:62%; left:22%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.39;width:18px; height:18px; top:47%; left:3%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.18;width:6px; height:6px; top:12%; left:20%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.34;width:10px; height:10px; top:97%; left:95%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.33;width:7px; height:7px; top:74%; left:87%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.17;width:7px; height:7px; top:84%; left:72%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.14;width:9px; height:9px; top:7%; left:23%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.39;width:15px; height:15px; top:94%; left:91%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.28;width:14px; height:14px; top:60%; left:83%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.3;width:15px; height:15px; top:65%; left:66%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.1;width:7px; height:7px; top:3%; left:95%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.39;width:10px; height:10px; top:20%; left:53%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.14;width:13px; height:13px; top:13%; left:77%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.38;width:13px; height:13px; top:76%; left:13%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.19;width:16px; height:16px; top:9%; left:42%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.21;width:16px; height:16px; top:37%; left:69%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.11;width:4px; height:4px; top:21%; left:95%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.16;width:10px; height:10px; top:76%; left:74%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.16;width:17px; height:17px; top:9%; left:88%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.21;width:15px; height:15px; top:79%; left:131%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.37;width:14px; height:14px; top:94%; left:8%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.2;width:9px; height:9px; top:65%; left:87%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.1;width:16px; height:16px; top:4%; left:93%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.32;width:18px; height:18px; top:36%; left:81%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.35;width:7px; height:7px; top:0%; left:21%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.22;width:11px; height:11px; top:69%; left:82%;"></div>
                <div class="pos-abs bgc-white radius-round" style="opacity: 0.32;width:6px; height:6px; top:68%; left:79%;"></div>
              </div>


              <div class="row container container-plus mx-auto mt-3 mb-5">
                <div class="col-12 col-md-7 d-flex flex-column justify-content-center text-center" data-aos="fade-right" data-aos-delay="100">
                  <h1 class="align-self-center">
                    <span class="text-110 text-yellow-l3">
                NUMERO UM
            </span>

                    <span class="text-90">
                em sistemas de estoque
            </span>
                  </h1>

                  <h4 class="my-3 text-white text-120">
                    A WIT solutions é inovadora com resultados expressivos jamais vistos antes
                  </h4>

                  <h6 class="my-3 text-105  px-3 radius-3px">
                    até os criadores diariamente se surpreendem com o que criaram ...
                  </h6>


                  <div class="mt-3 row justify-content-center align-items-center">
                    <h4 class="my-3 text-white text-120">
                      Selecione a linguagem:
                    </h4>
                  </div>


                  <div class="text-center mt-3">
                    <!-- sample button with custom background -->
                    <button type="button" class="btn btn-info brc-white-tp5 py-2 text-110 px-475 mx-15 mb-1 mb-lg-0">
                      <span class="position-tl w-102 h-102 m-n1px bgc-success-tp4 opacity-5"></span>
                      <span class="pos-rel">
                    Português
                </span>
                    </button>

                    <button type="button" class="btn btn-outline-white brc-white-tp3 py-2 text-110 px-475 mx-15">
                      Ingles
                    </button>
                  </div>
                </div><!-- /.col -->


                <div class="col-12 col-md-5 order-first order-md-last mb-4 mb-md-0" data-aos="fade-left">
                  <img alt="Product Image" src="../includes/images/landing/preview.png" class="w-90 1mx-auto" />
                </div><!-- /.col -->
              </div><!-- /.row -->

            </div><!-- /#page-intro-dark -->

            <div class="bgc-white">
              <!-- or use a different color -->

              <div class="container container-plus pos-rel mt-n5 text-center py-2">

                <div class="row mt-n4">
                  <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                    <div class="row my-4">
                      <!-- features -->
                      <div class="col-12 col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-item radius-2 bgc-white shadow-1 p-4 h-100">
                          <div class="d-inline-block pos-rel text-center py-2 px-3 text-150">
                            <!-- the lines beneath icon -->
                            <div class="rotate-n45 brc-purple-m4 border-t-2 w-75 position-tl mt-35 mr-1"></div>
                            <div class="rotate-n45 brc-purple-m4 border-t-3 w-90 position-br mr-1 mb-425"></div>
                            <div class="rotate-n45 brc-purple-m4 border-t-2 w-90 position-bl mb-4 ml-35"></div>

                            <i class="fa fa-rocket fa-2x text-purple-d1 pos-rel"></i>
                          </div>

                          <h3 class="text-secondary-d3 text-160 my-3">
                            Velocidade
                          </h3>

                          <p class="text-dark-m3">
                            Nossos softwares de logistíca são inegualáveis no mercado
                          </p>
                        </div>
                      </div>


                      <div class="col-12 col-md-4 mb-4  mb-md-0" data-aos="fade-up" data-aos-delay="450">
                        <div class="feature-item radius-2 bgc-white shadow-1 p-4 h-100">
                          <div class="d-inline-block pos-rel text-center p-2 text-150">
                            <!-- the lines beneath icon -->
                            <div class="brc-blue-m4 border-t-2 w-75 position-tl mt-3 ml-n2"></div>
                            <div class="brc-blue-m4 border-t-3 w-90 position-lc ml-n1 mt-n2"></div>
                            <div class="brc-blue-m4 border-t-2 w-90 position-bl mb-4 ml-n3"></div>

                            <i class="fa fa-running fa-2x text-blue-d1 pos-rel"></i>
                          </div>

                          <h3 class="text-secondary-d3 text-160 my-3">
                            Flexibilidade
                          </h3>

                          <p class="text-dark-m3">
                            Comprando um você já tera efetividade completa para todos os casos
                          </p>
                        </div>
                      </div>


                      <div class="col-12 col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="600">
                        <div class="feature-item radius-2 bgc-white shadow-1 p-4 h-100">
                          <div class="d-inline-block text-center p-2 text-150 pos-rel">
                            <!-- the circles beneath icon -->
                            <div class="brc-orange-m4 border-2 w-3 h-3 radius-round position-tl mt-2 ml-n1"></div>
                            <div class="brc-orange-m4 border-2 w-2 h-2 radius-round position-tr mt-n1 ml-n1"></div>
                            <div class="brc-orange-m4 border-2 w-4 h-4 radius-round position-br mb-2"></div>

                            <i class="fa fa-key fa-2x text-orange pos-rel"></i>
                          </div>

                          <h3 class="text-secondary-d3 text-160 my-3">
                            Segurança
                          </h3>

                          <p class="text-dark-m3">
                            Com planos de 100% retorno, garantimos a qualidade que você necessita
                          </p>
                        </div>
                      </div>

                    </div><!-- /.row -->
                  </div><!-- /.col -->
                </div><!-- /.row -->

              </div><!-- /.container -->
            </div>




            <div class="bgc-white">
              <!-- or use a different color -->

              <div class="container container-plus py-3 pos-rel">
                <!-- the large circle on right the green square on left -->
                <div data-aos="zoom-in" class="d-none d-lg-block  position-br bgc-purple-l3 mb-5 mr-5 opacity-1 radius-100" style="width: 180px; max-width: 80vw; height: 180px; max-height: 80vw;"></div>
                <div data-aos="zoom-in" class="d-none d-lg-block position-lc bgc-success-l3 opacity-1 ml-5 mt-5 radius-1" style="width: 100px; height: 100px;"></div>


                <div class="row pt-45 mt-1 mt-lg-5">
                  <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                    <div class="d-flex flex-column align-items-center flex-md-row align-items-md-start">
                      <div class="radius-2 mt-1 mr-md-5 pos-rel" data-aos="fade">
                        <!-- the small squares -->
                        <div class="position-tl bgc-grey-l3 mt-n45 ml-n45 radius-1" style="width: 100px; height: 100px;"></div>
                        <div class="position-br bgc-brown-l3 mb-n45 mr-n45 radius-1" style="width: 110px; height: 110px;"></div>


                        <div class="overflow-hidden radius-1 pos-rel border-1 p-2px brc-secondary-l2 bgc-white">
                          <img alt="Do More" src="../includes/images/landing/do-more.jpg" width="220" />
                        </div>
                      </div>


                      <div class="flex-grow-1 text-dark-tp3 mt-4 mt-md-0 ml-md-2">
                        <h3 class="text-primary-d2 my-4 text-center text-md-left" data-aos="fade-up">
                          Aumente a produtividade de sua empresa conosco!
                        </h3>

                        <div data-aos="fade-up">
                          <p>
                            Nossos softwares vão introduzir novas soluções.
                          </p>
                          <p>
                            Inovativas formas de criar e administrar seus recursos.
                          </p>
                          <p>
                            Infinitas serão as opções para garantir o maior lucro.
                          </p>
                        </div>

                        <p class="mt-md-5" data-aos="fade-left">
                          <a href="#" class="mt-3 mt-md-4 btn btn-outline-default btn-bold btn-bgc-white">
                            Entenda
                          </a>
                        </p>
                      </div>
                    </div>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container -->

            </div>




            <div class="bgc-white mt-4 mt-lg-5">

              <div class="container container-plus py-2 py-lg-4">

                <div class="row">
                  <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                    <div class="d-flex flex-column align-items-center flex-md-row align-items-md-start">

                      <div class="flex-grow-1 text-dark-tp3 mt-4 mt-md-0">
                        <h3 data-aos="fade-up" class="text-primary-d2 my-4 text-center text-md-left">
                          Criado para todos os momentos
                        </h3>

                        <div data-aos="fade-up">
                          <p>
                            Com apenas um aparelho você consegue acessar o controle de estoque e manter atualizado qualquer perda ou ganho.
                          </p>
                          <p>
                            Não há mais desculpas!
                          </p>
                          <p>
                            Não importa o local, todos poderam acessar os dados necessários para a empresa.
                          </p>
                        </div>

                        <p class="mt-md-5" data-aos="fade-right">
                          <a href="#" class="md-3 mt-md-4 btn btn-outline-default btn-bold btn-bgc-white">
                            Entrar em Contato
                          </a>
                        </p>
                      </div>


                      <div class="radius-2 mt-1 ml-md-5 pos-rel order-first order-md-last" data-aos="fade-left">
                        <!-- the small circles -->
                        <div class="position-tr bgc-primary-l3 mt-n45 mr-n45 radius-100" style="width: 80px; max-width: 80vw; height: 80px; max-height: 80vw;"></div>
                        <div class="position-bl bgc-orange-l3 mb-n5 ml-n45 radius-100" style="width: 100px; max-width: 80vw; height: 100px; max-height: 80vw;"></div>

                        <div class="overflow-hidden radius-1 pos-rel border-1 p-2px brc-secondary-l2 bgc-white">
                          <img alt="Be Flexible" src="../includes/images/landing/be-flexible.jpg" width="220" />
                        </div>
                      </div>
                    </div>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container -->

            </div>




            <!-- the 3 tabs ... So why is everybody choosing us? -->
            <div class="bgc-white">
              <div class="container container-plus py-35">
                <hr class="brc-secondary-l3 my-4 my-lg-5" />

                <div class="row">
                  <div class="col-12 col-lg-8 mx-auto text-center">
                    <h3 class="text-dark-l1 mb-4 mt-2 text-180" data-aos="fade-up">
                      Por que todos amão os produtos da WIT solutions?
                    </h3>

                    <ul class="d-flex flex-column flex-sm-row d-md-inline-flex nav nav-fill nav-tabs nav-tabs-static mx-n3 mx-md-0 py-1 px-1 px-md-0" role="tablist">
                      <li data-aos="fade-up" data-aos-delay="200" class="nav-item mr-2px mb-1">
                        <a data-toggle="tab" href="#reason1" class="active btn border-1 radius-round py-2 px-35 btn-outline-secondary btn-h-light-green btn-a-green" role="tab" aria-selected="true">
                          O cliente em primeiro lugar
                        </a>
                      </li>

                      <li data-aos="fade-up" data-aos-delay="300" class="nav-item mx-2px mb-1">
                        <a data-toggle="tab" href="#reason2" class="btn border-1 radius-round py-2 px-35 btn-outline-secondary btn-h-light-orange btn-a-orange" role="tab" aria-selected="false">
                          Simplicidade
                        </a>
                      </li>

                      <li data-aos="fade-up" data-aos-delay="400" class="nav-item mx-2px mb-1">
                        <a data-toggle="tab" href="#reason3" class="btn border-1 radius-round py-2 px-35 btn-outline-secondary btn-h-light-blue btn-a-blue" role="tab" aria-selected="false">
                          Tudo em sua mão
                        </a>
                      </li>
                    </ul><!-- /.nav-tabs -->


                    <div data-aos="fade-up" data-aos-delay="300" class="tab-content tab-sliding text-left border-0 mt-5 px-0">

                      <div class="tab-pane px-3 active show" id="reason1">
                        <div class="d-flex flex-column align-items-center flex-md-row align-items-md-start">
                          <div class="flex-grow-1 text-dark-tp3 mt-4 mt-md-0">
                            <h3 class="text-140 text-secondary-d3 text-center text-md-left mt-md-4">
                              Somos amados por nosso clientes; por conseder-lhes aquilo que necessitam.
                            </h3>

                            <ul class="list-unstyled ml-3 mt-4">
                              <li class="mb-3">
                                <i class="fa fa-caret-right text-125 text-green mr-1"></i>
                                Nossos sistemas são inovadores, jamais vistos.
                              </li>
                              <li class="mb-3">
                                <i class="fa fa-caret-right text-125 text-green mr-1"></i>
                                Todos nossos clientes que utilizaram sabem.
                              </li>
                              <li>
                                <i class="fa fa-caret-right text-125 text-green mr-1"></i>
                                Com isso temos o maior orgulho de continuar o incrível trabalho proposto somente por nós.
                              </li>
                            </ul>
                          </div>

                          <div class="d-flex flex-nowrap order-first order-md-last ml-md-4">
                            <!-- the 3 mobile dashboard images -->
                            <div class="mx-n2">
                              <div class="radius-2 shadow-sm border-1 p-2px brc-default-l2 bgc-white">
                                <div class="overflow-hidden radius-1">
                                  <img alt="Product image 1" src="../includes/images/landing/mobile-dash2.png" height="220" />
                                </div>
                              </div>
                            </div>

                            <div class="mx-n2 pos-rel mt-n25">
                              <div class="radius-2 shadow-sm border-1 p-2px brc-default-l2 bgc-white">
                                <div class="overflow-hidden radius-1">
                                  <img alt="Product image 2" src="../includes/images/landing/mobile-dash1.png" height="220" />
                                </div>
                              </div>
                            </div>

                            <div class="mx-n2">
                              <div class="radius-2 shadow-sm border-1 p-2px brc-default-l2 bgc-white">
                                <div class="overflow-hidden radius-1">
                                  <img alt="Product image 3" src="../includes/images/landing/mobile-dash3.png" height="220" />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- /.tab-pane -->


                      <div class="tab-pane px-3" id="reason2">
                        <div class="d-flex flex-column align-items-center flex-md-row align-items-md-start">
                          <div class=" mr-md-4 ">
                            <div class="overflow-hidden radius-1">
                              <img alt="Product image 4" src="../includes/images/landing/ipad.png" height="250" />
                            </div>
                          </div>

                          <div class="flex-grow-1 text-dark-tp3 mt-4 mt-md-0">
                            <h3 class="text-140 text-secondary-d3 text-center text-md-left mt-md-4">A Simplicidade!</h3>
                            <ul class="list-unstyled ml-3 mt-4">
                              <li class="mb-3">
                                <i class="fa fa-caret-right text-125 text-orange mr-1"></i>
                                Nossos produtos são simples a primeiro modo.
                              </li>
                              <li class="mb-3">
                                <i class="fa fa-caret-right text-125 text-orange mr-1"></i>
                                Extremamente leves, cada sistema é composto por tudo necessário a cada caso.
                              </li>
                              <li>
                                <i class="fa fa-caret-right text-125 text-orange mr-1"></i>
                                E mesmo assim, com um você já consegue ter tudo necessário para administrar estoque de forma efetiva.
                              </li>
                              <li>
                                <i class="fa fa-caret-right text-125 text-orange mr-1"></i>
                                Não é necessário ser específico, todo sistema vai se encaixar ao seu problema.
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div><!-- /.tab-pane -->


                      <div class="tab-pane px-3" id="reason3">
                        <div class="d-flex flex-column align-items-center flex-md-row align-items-md-start">
                          <div class="flex-grow-1 text-dark-tp3 mt-4 mt-md-0">
                            <h3 class="text-140 text-secondary-d3 text-center text-md-left mt-md-4">
                              Tudo em sua mão!
                            </h3>

                            <ul class="list-unstyled ml-3 mt-4">
                              <li class="mb-3">
                                <i class="fa fa-caret-right text-125 text-blue mr-1"></i>
                                Com nosso produto em mãos, não vai ser necessário se preocupar com extras.
                              </li>
                              <li class="mb-3">
                                <i class="fa fa-caret-right text-125 text-blue mr-1"></i>
                                A documentação inclusa é totalmente completa.
                              </li>
                              <li>
                                <i class="fa fa-caret-right text-125 text-blue mr-1"></i>
                                Muitos de nossos clientes porém não necessitam dela; isto é causado pela praticidade contida em nossos softwares.
                              </li>
                            </ul>
                          </div>

                          <div class="radius-2 ml-md-4 shadow-sm border-1 p-2px brc-default-l2 bgc-white order-first order-md-last">
                            <div class="overflow-hidden radius-1">
                              <img alt="Product image 5" src="../includes/images/landing/layout-code.png" width="320" />
                            </div>
                          </div>
                        </div>
                      </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->

                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container -->

            </div>

            <div class="bgc-primary-l3">
              <div class="container container-plus py-45">
                <div class="row">
                  <div class="col-12 col-lg-9 mx-auto">
                    <h3 class="text-center text-dark-m3 mb-4 mb-md-5" data-aos="fade-up">
                      Veja o que nossos clientes pensam de nós
                    </h3>

                    <div class="row justify-content-center">
                      <div class="col-12 col-md-4 mb-2 mb-md-0 minh-100" data-aos="fade-up" data-aos-delay="50">
                        <div class="text-center bgc-white p-45 radius-1 shadow-md minh-100 d-flex flex-column">
                          <div class="mt-md-n2 mb-3">
                            <img alt="Customer avatar" src="../includes/images/avatar/avatar1.jpg" class="mt-md-n5 radius-round border-2 brc-default-m1 p-2px shadow-md" />
                          </div>

                          <h4 class="mb-15">
                            Definitivos!
                          </h4>

                          <div>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-grey-l3"></i>
                            <i class="fa fa-star text-grey-l3"></i>
                          </div>

                          <p class="mt-2 text-dark-tp3 text-95">
                            Os softwares da WIT sempre foram e serão os melhores do mercado
                            <br />
                            Prezamos por simplicidade na empresa, então amamos os produtos deles.
                          </p>

                          <p class="text-600 mb-0 mt-auto">
                            José Pedro
                          </p>
                        </div>
                      </div><!-- /.col -->


                      <div class="col-12 col-md-4 mb-2 mb-md-0 minh-100" data-aos="fade-up" data-aos-delay="150">
                        <div class="text-center bgc-white p-45 radius-1 shadow-md minh-100 d-flex flex-column">
                          <div class="mt-md-n2 mb-3">
                            <img alt="Customer avatar" src="../includes/images/avatar/avatar2.jpg" class="mt-md-n5 radius-round border-2 brc-default-m1 p-2px shadow-md" />
                          </div>

                          <h4 class="mb-15">
                            Preço salgado, valor 100%
                          </h4>

                          <div>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-grey-l3"></i>
                            <i class="fa fa-star text-grey-l3"></i>
                            <i class="fa fa-star text-grey-l3"></i>
                          </div>

                          <p class="mt-2 text-dark-tp3 text-95">
                            Nunca vi um sistema tão complexo ser tão simples.
                            <br />
                            Da forma que vendem os produtos, queria dizer que jamais vou voltar a utilizar outros softwares de logistíca.
                            <br />
                            O preço é muito alto, porém 100% vai retornar em tempo efetivo para futuras necessidades.
                          </p>

                          <p class="text-600 mb-0 mt-auto">
                            Francisco Penha
                          </p>
                        </div>
                      </div><!-- /.col -->


                      <div class="col-12 col-md-4 mb-2 mb-md-0 minh-100" data-aos="fade-up" data-aos-delay="250">
                        <div class="text-center bgc-white p-45 radius-1 shadow-md minh-100 d-flex flex-column">
                          <div class="mt-md-n2 mb-3">
                            <img alt="Customer avatar" src="../includes/images/avatar/avatar3.jpg" class="mt-md-n5 radius-round border-2 brc-default-m1 p-2px shadow-md" />
                          </div>

                          <h4 class="mb-15">
                            Muito bom
                          </h4>

                          <div>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                          </div>

                          <p class="mt-2 text-dark-tp3 text-95">
                            Gostei
                          </p>

                          <p class="text-600 mb-0 mt-auto">
                            Lumena Artiga
                          </p>
                        </div>
                      </div><!-- /.col -->
                    </div><!-- /.row -->
                  </div><!-- /.col -->
                </div><!-- /.row -->

              </div><!-- /.container -->
            </div>




            <div class="pb-3">
              <div class="container container-plus py-5">
                <h3 class="text-center text-dark-tp3 text-160 mb-2 mb-md-4 mb-lg-5" data-aos="fade-down">
                  Preços
                </h3>

                <div>
                  <div class="row col-lg-10 d-flex justify-content-center mx-1 mx-lg-auto mt-3">

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-2 dh-zoom-1">
                      <!-- Basic -->
                      <div data-aos="fade-right" data-aos-delay="200" class="d-style btn btn-outline-default btn-h-outline-blue btn-a-outline-blue bgc-white w-100 border-none border-t-3 radius-b-1 my-2 p-0 pt-2 shadow">

                        <div class="d-flex flex-column align-items-center">

                          <h4 class="pt-1 pb-15 px-4 radius-4 text-110 bgc-blue-l3 text-blue-d3 my-3 radius-1">
                            Básico
                          </h4>

                          <div class="text-secondary-d2 text-130">
                            R$<span class="text-200">2.300</span> / mês
                          </div>

                          <hr class="w-90 my-4 brc-secondary-l3" />

                          <div class="text-grey text-90 w-100">
                            <ul class="list-unstyled text-left m-0">
                              <li class="mx-4">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span>
                                            <span class="text-110">Gerenciador</span>
                                versão não cus...
                                </span>
                              </li>

                              <li class="mt-3 mx-4">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110 ">
                                    Visualizador básico
                                        </span>
                              </li>

                              <li class="mt-3 mx-4">
                                <i class="fa fa-times text-danger-m3 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                        Alterador 
                                        </span>
                              </li>

                              <li class="mt-45">
                                <a href="#" class="d-hover btn radius-0 btn-blue py-3 border-0 btn-block px-3 btn-bold text-105">Start Now</a>
                                <a href="#" class="d-n-hover btn radius-0 btn-default py-3 border-0 btn-block px-3 btn-bold text-105">Start Now</a>
                              </li>
                            </ul>
                          </div>

                        </div>

                      </div>
                    </div>



                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-2 dh-zoom-1 mt-lg-n3">
                      <!-- Pro -->
                      <div data-aos="fade" data-aos-delay="100" class="d-style active btn btn-outline-default btn-h-outline-green btn-a-outline-green bgc-white w-100 border-none border-t-3 radius-b-1 my-2 p-0 pt-2 shadow">

                        <div class="d-flex flex-column align-items-center">

                          <h4 class="pt-1 pb-15 px-4 radius-4 text-110 bgc-green-l2 text-green-d3 my-3 radius-1">
                            Pró
                          </h4>

                          <div>
                            <div>
                              <s class="text-danger-m3">R$<span class="text-110">6.500</span> / mês</s>
                            </div>
                            <div class="text-130">
                              <span class="text-green-d2">R$<span class="text-200">6.499</span> / mês</span>
                            </div>
                          </div>

                          <span class="mt-2 badge badge-lg bgc-orange-d1 text-white brc-orange-d1 arrowed-in arrowed-in-right">Special offer</span>

                          <hr class="w-90 my-4 brc-secondary-l3" />

                          <div class="text-grey text-90 w-100">
                            <ul class="list-unstyled text-left m-0">
                              <li class="mx-4">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110 text-1">
                                  Gerenciador completo
                                        </span>
                              </li>

                              <li class="mt-3 mx-4">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                      Visualizador Pró
                                        </span>
                              </li>

                              <li class="mt-3 mx-4">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                        Alterador 5TB
                                        </span>
                              </li>

                              <li class="mt-45">
                                <a href="#" class="btn radius-0 btn-green py-3 border-0 btn-block px-3 btn-bold text-105">Start Now</a>
                              </li>
                            </ul>
                          </div>


                        </div>

                      </div>
                    </div>



                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-2 dh-zoom-1">
                      <!-- Max -->
                      <div data-aos="fade-left" data-aos-delay="200" class="d-style btn btn-outline-default btn-h-outline-purple btn-a-outline-purple bgc-white w-100 border-none border-t-3 radius-b-1 my-2 p-0 pt-2 shadow">

                        <div class="d-flex flex-column align-items-center">

                          <h4 class="pt-1 pb-15 px-4 radius-4 text-110 bgc-purple-l3 text-purple-d3 my-3 radius-1">
                            MAXIMUS
                          </h4>

                          <div class="text-secondary-d2 text-130">
                            R$<span class="text-200">12.000</span> / mês
                          </div>

                          <hr class="w-90 my-4 brc-secondary-l3" />

                          <div class="text-grey text-90 w-100">
                            <ul class="list-unstyled text-left m-0">
                              <li class="mx-4">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                            Gerênciador MAX
                                        </span>
                              </li>

                              <li class="mt-3 mx-4">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                            Visualizador MAX
                                        </span>
                              </li>

                              <li class="mt-3 mx-4">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                            Alterador & Planejador MAX
                                        </span>
                              </li>

                              <li class="mt-45">
                                <a href="#" class="d-hover btn radius-0 btn-purple py-3 border-0 btn-block px-3 btn-bold text-105">Start Now</a>
                                <a href="#" class="d-n-hover btn radius-0 btn-default py-3 border-0 btn-block px-3 btn-bold text-105">Start Now</a>
                              </li>
                            </ul>
                          </div>


                        </div>

                      </div>
                    </div>

                  </div><!-- ./row -->
                </div>
              </div>
            </div>




            <div class="navbar-darkblue pos-rel">
              <div class="container container-plus py-5 px-lg-5">
                <div class="row">
                  <div class="col-lg-6 col-xl-5 mx-auto" data-aos="fade-up">
                    <h3 class="text-white text-center text-180 mb-3">
                      Gosta de nós?
                    </h3>

                    <p class="text-white-tp1 mb-4">
                      Clique no botão para receber as melhores ofertas e notícias de nossos produtos!
                    </p>

                    <div>
                      <div class="px-0 col-12 col-sm-8 col-lg-10 mx-auto radius-round bgc-white input-group">
                        <input placeholder="Digite seu email" type="text" class="form-control form-control-lg radius-round shadow-none border-0 text-dark" />
                        <a href="#" class="btn radius-round btn-pink text-600 text-110 px-4 m-3px">
                          Quero!
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>





            <div class="footer h-auto">
              <div class="footer-inner py-45">
                <div class="container container-plus" data-aos="fade">
                  <div class="row">
                    <div class="col-12 col-lg-5">
                      <h2 class="text-dark-m3">
                        <i class="fa fa-leaf text-85 mr-1 text-success-m1"></i>
                        WIT
                        <span class="text-75 text-dark-l2">Solutions</span>
                      </h2>

                      <p class="text-90">
                        O nosso lucro é o lucro de nossos clientes.
                      </p>

                      <div class="text-150 mt-2">
                        <i class="bgc-blue-m1 p-25 w-6 radius-round fab fa-twitter text-white mx-1"></i>
                        <i class="bgc-primary-d2 p-25 w-6 radius-round fab fa-facebook-square text-white mx-1"></i>
                        <i class="bgc-purple p-25 w-6 radius-round fab fa-instagram text-white mx-1"></i>
                      </div>
                    </div>

                    <div class="col-12 col-lg-7 mt-5 mt-lg-0">
                      <div class="row text-center text-lg-left">
                        <div class="col-4 ">
                          <h6 class="text-dark-tp3 text-95 text-600 mb-3">SOBRE</h6>
                          <div>
                            <a href="#" class="text-dark-tp4">Empresa</a>
                            <br />
                            <a href="#" class="text-dark-tp4">Notícias</a>
                          </div>
                        </div>

                        <div class="col-4">
                          <h6 class="text-dark-tp3 text-95 text-600 mb-3">PRODUTOS</h6>
                          <div>
                            <a href="#" class="text-dark-tp4">Gerênciador</a>
                            <br />
                            <a href="#" class="text-dark-tp4">Visualizador</a>
                            <br />
                            <a href="#" class="text-dark-tp4">Alterador</a>
                          </div>
                        </div>

                        <div class="col-4">
                          <h6 class="text-dark-tp3 text-95 text-600 mb-3">CONTATOS</h6>
                          <div>
                            <a href="#" class="text-dark-tp4">Email</a>
                            <br />
                            <a href="#" class="text-dark-tp4">Telefone</a>
                            <br />
                            <a href="#" class="text-dark-tp4">Endereço</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.row -->

                </div><!-- /.container -->
              </div><!-- /.footer-inner -->
            </div><!-- /.footer -->



            <div class="text-center py-4 bgc-primary-l4 border-t-1 brc-primary-l3">
              <span class="text-dark-m3 text-105">
        Copyright &copy; 2022 WIT Solutions
    </span>
            </div>



            <div class="footer-tools">
              <a href="#" class="btn-scroll-up btn btn-dark px-25 py-2 text-95 border-2 radius-round mb-2 mr-2">
                <i class="fa fa-arrow-up w-2 h-2"></i>
              </a>
            </div>
          </div>
        </div>

      </div>

    </div>

    <!-- include common vendor scripts used in demo pages -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>


    <!-- include vendor scripts used in "Landing Page 1" page. see "/views//pages/partials/landing-page-1/@vendor-scripts.hbs" -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.13.0/Sortable.min.js"></script>

    <!-- include ace.js -->
    <script src="../includes/ace.min.js"></script>
    <script src="../includes/jquery.js"></script>
    <script src="../includes/popper.js"></script>
    <script src="../includes/bootstrap.js"></script>
    <script src="../includes/ace.js"></script>
    <script src="../includes/@page-script.js"></script>
    <script src="../includes/bootstrap/dist/js/bootstrap.js"></script>

    <!-- demo.js is only for Ace's demo and you shouldn't use it -->
    <script src="./app/browser/demo.min.js"></script>



    <!-- "Landing Page 1" page script to enable its demo functionality -->
    <script>
      jQuery(function($) {

        // enable Animation on scroll plugin
        try {
          AOS.init({
            once: true,
            duration: 550
          })
        } catch (e) {
          // if AOS is not supported, remove the stylesheets so page elements become visible again
          $('link[href*="aos.css"],link[href*="aos.min.css"]').remove()
        }


        //////////////////////////////////////////////////////////////////
        /// now let's make navbar fixed after we scrolld down a little bit

        // instead of listening to window `scroll` event, we use `IntersectionObserver`
        // to observe 2 elements and determine when they become visible/invisible during scrolling

        // 1. when we scroll down, navbar becomes fixed
        // 2. when we scroll back up, it is still fixed until we reach document top
        // we observe 2 hidden elements (#scroll-down & #scroll-up) to determine when to do the above 1 & 2
        if (window.IntersectionObserver) {
          var observer = new window.IntersectionObserver(function(entries) {
            var entry = entries[0];
            if (entry.target.id == 'scroll-down') {
              // `#scroll-down`'s CSS position is `top: 60vh` and you can change it in CSS accordingly
              // so when `intersectionRatio < 1` and `boundingClientRect.y < 0` , it means we have scrolled down to `top: 60vh`
              // so let's make navbar fixed and compact
              var isOut = entry.intersectionRatio < 1 && entry.boundingClientRect.y < 0
              if (isOut) {
                $('.navbar').addClass('navbar-fixed navbar-compact')
              } else { // otherwise we are scrolling up but still scrollTop > 0
                $('.navbar').removeClass('navbar-compact')
              }
            } else if (entry.target.id == 'scroll-up') {
              // `#scroll-up`'s CSS position is `top: 0`
              // so when `intersectionRatio == 1` and `boundingClientRect.y >= 0` it means we have scrolled all the way up to `top: 0`
              var isVisible = entry.intersectionRatio == 1 && entry.boundingClientRect.y >= 0
              if (isVisible) {
                $('.navbar').removeClass('navbar-fixed')
              }
            }
          }, {
            threshold: [1.0],
            delay: 100
          })

          observer.observe(document.getElementById('scroll-down'))
          observer.observe(document.getElementById('scroll-up'))
        }

        // also let's change #scroll-down's `top` value to (page-intro + navbar) height
        var topx = parseInt($('#page-intro-dark').height() + $('.navbar').height()) + 50;
        $('#scroll-down').css('top', topx + "px");

        // also on page reload (when scrolled down) there may be a weired gap
        // here's a temporary fix
        var scrollTop = document.scrollTop || document.documentElement.scrollTop || document.body.scrollTop
        if (scrollTop >= topx) {
          setTimeout(function() {
            document.body.style.display = 'none'
            setTimeout(function() {
              document.body.style.display = ''
            })
          })
        }


        //////////////////////////
        // Change theme when user selects a new one from the select box
        $('.theme-select')
          .on('change', function() {
            if (this.value == 'light' || this.value == 'white') {
              $('#navbar-dark, #page-intro-dark').addClass('d-none') // hide dark navbar and intro

              $('#navbar-light, #page-intro-light').removeClass('d-none') // show light navbar and intro
            } else if (this.value != '') { //show dark navbar and intro
              $('#navbar-dark, #page-intro-dark').removeClass('navbar-darkblue navbar-teal navbar-purple')
                .addClass('navbar-' + this.value)

              $('#navbar-dark, #page-intro-dark').removeClass('d-none')

              $('#navbar-light, #page-intro-light').addClass('d-none')
            }

            if (this.value == 'white') {
              $('.feature-item').addClass('border-1 brc-dark-l3') // in white theme, add a border to feature items (speed, flexibility, etc)

              $('#page-intro-light').addClass('bgc-white border-0 border-b-1 brc-dark-l3 border-dotted') // add a dotted border below intro

              $('#navbar-light .nav').addClass('nav-compact')
            } else {
              // undo above
              $('.feature-item').removeClass('border-1 brc-dark-l3')
              $('#page-intro-light').removeClass('bgc-white border-0 border-b-1 brc-dark-l3 border-dotted')
              $('#navbar-light .nav').removeClass('nav-compact')
            }
          })

      })
    </script>
    <script>
            jQuery(function($) {
            
            // show tooltips only when not touchscreen
            if (!('ontouchstart' in window)) $('[data-toggle="tooltip"]').tooltip({
                container: 'body'
            })
            
            
            // display the message only 2 times
            var displayed = parseInt(localStorage.getItem('welcome.classic.ace') || '0');
            if (displayed < 2) {
                localStorage.setItem('welcome.classic.ace', displayed + 1)
            
                $.aceToaster.add({
                placement: 'tc',
                body: "<div class='py-2 pl-1 pr-3 d-flex '>\
                        <span class='d-inline-block mr-2 text-center py-3 px-1'>\
                        <i class='pos-abs fa fa-leaf fa-2x w-6 text-dark-m3 mt-2px'></i>\
                        <i class='pos-rel fa fa-leaf fa-2x w-6 text-success-m3 mr-1'></i>\
                        </span>\
                        <div>\
                        <h3 class='text-125 text-success'>Welcome to Ace!</h3>\
                        <p class='mb-1'>A lightweight, feature-rich, customizable and easy to use admin template!</p>\
                        </div>\
                        <button data-dismiss='toast' class='btn btn-sm btn-brc-tp btn-lighter-grey btn-h-lighter-danger btn-a-lighter-danger radius-round position-tr mt-1 mr-2px'>\
                        <i class='fa fa-times px-1px'></i>\
                        </button>\
                    </div>",
            
                width: 500,
                delay: 10,
                //sticky: true,
            
                progress: 'position-tl bgc-success-tp1 pt-3px',
                progressReverse: true,
            
                close: false,
                //belowNav: true,
            
                className: 'bgc-white overflow-hidden border-0 p-0 radius-0',
            
                bodyClass: 'border-1 border-t-0 brc-secondary-l2 text-dark-tp3 text-120 p-2',
                headerClass: 'd-none'
                })
            }
            
            
            //////////////////////////////////////////////////
            // Sortable task list
            Sortable.create(document.getElementById('tasks'), {
                draggable: ".task-item",
                filter: "label.checkbox",
                preventOnFilter: false,
                animation: 200,
            
                ghostClass: "bgc-yellow-l1", // Class name for the drop placeholder
                chosenClass: "", // Class name for the chosen item
                dragClass: "", // Class name for the dragging item
            })
            
            // toggle tasks checkbox on/off
            $('#tasks input[type=checkbox]').on('change', function() {
                $(this).closest('#tasks > div').toggleClass('bgc-secondary-l4', this.checked).find('label').toggleClass('line-through text-grey-d2', this.checked);
            })
            
            
            
            //////////////////////////////////////////////////
            //draw charts
            
            
            // make sure no animation is displayed according to user preferences
            var _animate = !AceApp.Util.isReducedMotion()
            
            
            // Traffic Sources piechart
            var trafficSourceCanvas = document.getElementById('traffic-source-chart');
            
            var trafficSourcePieChart = new Chart(trafficSourceCanvas, {
                type: 'doughnut',
                data: {
                datasets: [{
                    label: 'Traffic Sources',
                    data: [40.7, 27.5, 9.3, 19.6, 4.9],
                    backgroundColor: [
                    "#4ca5ae",
                    "#f18e5d",
                    "#ea789d",
                    "#22c1e4",
                    "#e2e3e4"
                    ],
                }],
                labels: [
                    'Social Networks',
                    'Search Engines',
                    'Ad Campaings',
                    'Direct Traffic',
                    'Other'
                ]
                },
            
                options: {
                responsive: true,
            
                cutoutPercentage: 70,
                legend: {
                    display: false
                },
                animation: {
                    animateRotate: true,
                    duration: _animate ? 1000 : false
                },
                tooltips: {
                    enabled: true,
                    cornerRadius: 0,
                    bodyFontColor: '#fff',
                    bodyFontSize: 14,
                    fontStyle: 'bold',
            
                    backgroundColor: 'rgba(34, 34, 34, 0.73)',
                    borderWidth: 0,
            
                    caretSize: 5,
            
                    xPadding: 12,
                    yPadding: 12,
            
                    callbacks: {
                    label: function(tooltipItem, data) {
                        return ' ' + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] + '%'
                    }
                    }
                }
                }
            })
            
            // place the legends
            $(trafficSourceCanvas)
                .parent().after("<div id='traffic-source-legends' class='piechart-legends text-95 text-secondary-d3'>" + trafficSourcePieChart.generateLegend() + "</div>")
            
      <script/>
  </body>

</html>