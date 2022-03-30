<?php
//include('../model/session.php');
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Landing Page 1 - Ace Admin</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/regular.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/solid.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&amp;display=swap"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../includes /css/ace.min.css">
    <link rel="stylesheet" type="text/css" href="../includes/css/ace-themes.min.css">
    <link rel="stylesheet" type="text/css" href="../includes/css/ace.css">
    <link rel="stylesheet" type="text/css" href="../includes/css/ace-themes.css"></link>
    <link rel="stylesheet" href="../includes/css/ace.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- nossos -->
    <link rel="stylesheet" href="../includes/card.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .navbar-brand span {
          font-family: 'Open Sans'
        }
        label {
          cursor: text;
        }
    </style>
  </head>
<body>
	<div class="body-container">
    <?php include("../includes/navbar.php"); ?>
    <div class="main-container">
      <?php include("../includes/sidebar.php"); ?>
      <div class="page-content container container-plus"> 
        <div class="page-header pb-2">
          <h1 class="page-title text-primary-d2 text-150">
            Dashboard
            <small class="page-info text-secondary-d2 text-nowrap">
              <i class="fa fa-angle-double-right text-80"></i>
              Dados Totais &amp; Quantidades
            </small>
          </h1>
          <div class="card-toolbar no-border dd-backdrop dd-backdrop-none-md">
            <a href="#" class="btn btn-xs btn-light-secondary border-1 text-600 px-4 radius-round dropdown-toggle" role="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
              2022
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-caret dropdown-animated dd-appear-center dd-slide-none-md mw-auto">
              <!-- precisa do javascript depois para terminar o dropdown com os anos -->
            </div>
            <div class="card-toolbar align-self-center ml-2">
              <a href="#" data-action="reload" class="card-toolbar-btn text-success-m2 text-100">
                <i class="fas fa-sync-alt"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="row">
              <div class="col">
                <div class="card acard mt-2 mt-lg-3">
                  <div class="container card-body px-3">
                    <div class="form-row">
                      <div class="form-group">
                        <div class="col-sm">
                          <label for="lname">Monitores:</label><br>
                          <h5>357</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card acard mt-2 mt-lg-3">
                  <div class="container card-body px-3">
                    <div class="form-row">
                      <div class="form-group">
                        <div class="col-sm">
                          <label for="lname">Notebooks:</label><br>
                          <h5>50</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card acard mt-2 mt-lg-3">
                  <div class="container card-body px-3">
                    <div class="form-row">
                      <div class="form-group">
                        <div class="col-sm">
                          <label for="lname">Macbooks:</label><br>
                          <h5>357</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card acard mt-2 mt-lg-3">
                  <div class="container card-body px-3">
                    <div class="form-row">
                      <div class="form-group">
                        <div class="col-sm">
                          <label for="lname">Fones de ouvido:</label><br>
                          <h5>200</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="card acard mt-2 mt-lg-3">
                  <div class="container card-body px-3">
                    <div class="form-row">
                      <div class="form-group">
                        <div class="col-sm">
                          <label for="lname">Teclados Sem Fio:</label><br>
                          <h5>357</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card acard mt-2 mt-lg-3">
                  <div class="container card-body px-3">
                    <div class="form-row">
                      <div class="form-group">
                        <div class="col-sm">
                          <label for="lname">Teclados Com Fio:</label><br>
                          <h5>130</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card acard mt-2 mt-lg-3">
                  <div class="container card-body px-3">
                    <div class="form-row">
                      <div class="form-group">
                        <div class="col-sm">
                          <label for="lname">Mouses:</label><br>
                          <h5>200</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card acard mt-2 mt-lg-3">
                  <div class="container card-body px-3">
                    <div class="form-row">
                      <div class="form-group">
                        <div class="col-sm">
                          <label for="lname">Valor Total:</label><br>
                          <h5>60.000</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col my-3">
              <h2 class="page-title text-primary-d2 text-150">
                <a href='/view/inserir_produtos.php' style="text-decoration:none;"> 
                  <i class="fa fa-angle-double-right text-80"></i>
                  Inserir Produtos
                </a>
              </h2>
            </div>
          </div>
          <!-- CHARTTTT -->
          <div class="col-xl-4 mt-4 mt-xl-0">
            <div class="card ccard h-100 overflow-hidden">
              <div class="card-header border-0 bgc-white card-header-sm">
                <h6 class="card-title text-dark-m3 pl-25 pt-15 text-110">
                  Status do Estoque
                  <br>
                  <span class="text-85 text-dark-l2">
                    7 dias atrás
                </span>
                </h6>
              </div>
              <div class="card-body p-3 bgc-whit flex-grow-1" >
                <canvas id="myChart"></canvas>
              </div>
            </div>
          </div>
        <!-- CHARRTTT -->
        </div>
      </div>
    </div>
  </div>
  <script src="../controller/controller_home.js"></script>
  <script src="../controller/controller_sidebar.js"></script>
  <script src="../includes/graph.js"></script>
  <script src="../includes/bootstrap.js"></script>
  <script src="../includes/ace.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
