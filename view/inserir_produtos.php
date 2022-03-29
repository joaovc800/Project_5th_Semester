<?php
include('../model/session.php');
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Inserir Produtos</title>
    <!-- scripts necessarios -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/regular.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/solid.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&amp;display=swap"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../includes/css/ace.min.css">
    <link rel="stylesheet" type="text/css" href="../includes/css/ace-themes.min.css">
    <link rel="stylesheet" type="text/css" href="../includes/css/ace.css">
    <link rel="stylesheet" type="text/css" href="../includes/css/ace-themes.css"></link>
    <link rel="stylesheet" href="../includes/css/ace.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Nossos estilos -->
    <link rel="stylesheet" type="text/css" href="../includes/estilo.css">

    <style>
        .navbar-brand span {
          font-family: 'Open Sans'
        }
    </style>
  </head>
  <body>
    <div class="body-container">
      <?php include("../includes/navbar.php"); ?>
      <div class="main-container">
        <?php include("../includes/sidebar.php"); ?>
        <!-- aqui inicia a pagina -->
        <!-- estas 3 divs são necessárias para a responsividade do ACE -->
        <div role="main" class="main-content">
          <div class="page-content container container-plus">
            <div class="card acard mt-2 mt-lg-3">
              <div class="card-header">
                <h3 class="card-title text-125 text-primary-d2">
                  <i class="far fa-edit text-dark-l3 mr-1"></i>
                    Adicionar Produtos
                </h3>
              </div>
              <div class="container card-body px-3">
                <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <div class="col-sm">
                        <label for="lname">Código do Produto:</label><br>
                        <input maxlength="100" type="text" name="c_produto" class="form-control col-sm-8 col-md-7" id="id-form-field-1">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <div class="col-sm">
                        <label for="lname">Nota Fiscal:</label><br>
                        <input maxlength="9" type="text" name="n_fiscal" class="form-control col-sm-8 col-md-7" id="id-form-field-1">
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-10">
                      <div class="col-sm">
                        <label for="lname">Número serial:</label><br>
                        <input maxlength="12" type="text" name="n_serial" class="form-control col-sm col-md-11" id="id-form-field-1">
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <div class="col-sm">
                        <label for="fname">Tipo de Ativo:</label>
                        <select class="form-control col-sm-8 col-md-7" id="form-field-select-1">
                          <!-- no JS esta essa parte, esta unica option é para não mostrar o item primeiro -->
                          <option></option> 
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <div class="col-sm">
                        <label for="lname">Localização:</label><br>
                        <select class="form-control col-sm-8 col-md-7" id="form-field-select-2">
                          <!-- no JS esta essa parte, esta unica option é para não mostrar o item primeiro -->
                          <option></option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-5">
                      <div class="col-sm">
                        <label for="lname">Descrição:</label><br>
                        <textarea name="descricao" class="form-control pb-5" id="id-textarea-limit1" maxlength="200" placeholder="Digite..."  style="resize: none;"></textarea>
                        <div class="mt-4">
                          <button id="submit" class="btn btn-info btn-bold px-4"  type="submit">
                            <i class="fa fa-check mr-1"></i>
                            Submit
                          </button>
                          <button id="reset" class="btn btn-outline-lightgrey btn-bgc-white btn-bold ml-2 px-4" type="reset">
                            <i class="fa fa-undo mr-1"></i>
                            Reset
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../controller/controller_inserir.js"></script>
    <!-- scripts necessarios -->
    <script src="../controller/controller_home.js"></script>
    <script src="../controller/controller_sidebar.js"></script>
    <script src="../includes/js/sidebar.js"></script>
    <script src="../includes/bootstrap.js"></script>
    <script src="../includes/ace.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- include common vendor scripts used in demo pages -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <!-- include vendor scripts used in "Basic Elements" page. see "/views//pages/partials/form-basic/@vendor-scripts.hbs" -->
    <script src="https://cdn.jsdelivr.net/npm/autosize@4.0.2/dist/autosize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-maxlength@1.10.0/dist/bootstrap-maxlength.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.5/dist/jquery.inputmask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/nouislider@14.7.0/distribute/nouislider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/ion-rangeslider@2.3.1/js/ion.rangeSlider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-touchspin@4.3.0/dist/jquery.bootstrap-touchspin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tiny-date-picker@3.2.8/dist/date-range-picker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/eonasdan-bootstrap-datetimepicker@4.17.49/src/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-colorpicker@3.2.0/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-object-assign@1.1.0/dist/object-assign-auto.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5.5.1/dist/iro.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-knob@1.2.11/dist/jquery.knob.min.js"></script>
  </body>
</html>
