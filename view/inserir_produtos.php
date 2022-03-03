<?php

?>
<!doctype html>
<html lang="pt-BR">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Inserir Produtos</title>
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

      <!-- aqui inicia o main -->
      <div role="main" class="main-content">
        <div class="page-content container container-plus">
          <div class="card acard mt-2 mt-lg-3">
            <div class="card-header">
              <h3 class="card-title text-125 text-primary-d2">
                <i class="far fa-edit text-dark-l3 mr-1"></i>
                Text inputs
              </h3>
            </div>

            <div class="card-body px-3 pb-1">
              <form class="mt-lg-3" autocomplete="off">
                <div class="form-group row">
                  <div class="col-sm-3 col-form-label text-sm-right pr-0">
                    <label for="id-form-field-1" class="mb-0">
                      Default field
                    </label>
                  </div>

                  <div class="col-sm-9">
                    <input type="text" class="form-control col-sm-8 col-md-6" id="id-form-field-1">
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-sm-3 col-form-label text-sm-right pr-0">
                    <label for="id-form-field-focus-1" class="mb-0">
                      Custom border on focus
                    </label>
                  </div>

                  <div class="col-sm-9">
                    <input type="text" class="form-control brc-on-focus brc-success-m1 col-sm-8 col-md-6" id="id-form-field-focus-1">
                  </div>
                </div>


                <div class="form-group row">
                  <div class="mb-1 mb-sm-0 col-sm-3 col-form-label text-sm-right pr-0">
                    <label for="id-form-field-2" class="mb-0">
                      Floating placeholder
                    </label>
                  </div>

                  <div class="col-sm-9 input-floating-label text-blue-d2 brc-blue-m1">
                    <input type="text" placeholder="Some placeholder" class="form-control form-control-lg col-sm-8 col-md-6 shadow-none" id="id-form-field-2">
                    <span class="floating-label text-grey-m3">
                      Some placeholder
                  </span>
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-sm-3 col-form-label text-sm-right pr-0">
                    <label for="id-form-field-3" class="mb-0">
                      Password field
                    </label>
                  </div>

                  <div class="col-sm-9">
                    <input type="password" class="form-control brc-on-focus col-sm-8 col-md-6 d-inline-block" placeholder="Password" id="id-form-field-3">
                    <span class="form-text d-inline-block text-95 text-grey ml-sm-2">
                      Inline help text
                  </span>
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-sm-3 col-form-label text-sm-right pr-0">
                    <label for="id-form-field-password-toggle" class="mb-0">
                      Password toggle
                    </label>
                  </div>

                  <div class="col-sm-9">
                    <div class="d-inline-flex align-items-center">
                      <input type="password" class="form-control form-control-lg pr-5" placeholder="Password" value="mypassword" spellcheck="false" id="id-form-field-password-toggle">
                      <a href="#" id="toggle-password" class="btn btn-sm border-0 btn-white btn-h-light-orange btn-a-light-orange text-125 ml-n5 no-underline radius-1 d-style">
                        <i class="fa fa-eye-slash text-90 d-n-active w-3"></i>
                        <i class="fa fa-eye text-90 d-active w-3"></i>
                      </a>
                    </div>
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-sm-3 col-form-label text-sm-right pr-0">
                    <label for="id-disable-me" class="mb-0">
                      Readonly field
                    </label>
                  </div>

                  <div class="col-sm-9">
                    <input readonly="" id="id-disable-me" type="text" class="form-control col-sm-8 col-md-6 d-inline-block" value="This text field is readonly!">

                    <label class="mt-1 mt-sm-0 ml-sm-3">
                      <input type="checkbox" class="mr-1" id="id-checkbox-disable-it">
                      Disable it!
                    </label>
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-sm-3 col-form-label text-sm-right pr-0">
                    Relative sizing
                  </div>

                  <div class="col-sm-9">
                    <input type="text" class="form-control form-control-lg col-md-4 d-inline-block mb-1 mb-md-0" placeholder=".form-control-lg">
                    <input type="text" class="form-control col-md-3 d-inline-block mb-1 mb-md-0" placeholder=".form-control">
                    <input type="text" class="form-control form-control-sm col-md-2 d-inline-block" placeholder=".form-control-sm">
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-sm-3 col-form-label text-sm-right pr-0">
                    <label for="id-form-field-5" class="mb-0">
                      Input with icon
                    </label>
                  </div>

                  <div class="col-sm-9">
                    <div class="d-inline-flex align-items-center mb-1">
                      <i class="fa fa-leaf text-blue text-125 ml-25 pos-abs"></i>
                      <input type="text" class="form-control form-control-lg px-475" placeholder="Icons" id="id-form-field-5">
                      <i class="fa fa-leaf text-green text-125 ml-n45"></i>
                    </div>

                    <div class="d-inline-flex align-items-center ml-sm-0 mb-1">
                      <i class="fa fa-search text-grey-m1 pos-abs ml-2"></i>
                      <input type="text" class="form-control pl-425" placeholder="Search">
                    </div>
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-sm-3 col-form-label text-sm-right pr-0">
                    <label for="tooltip-1" class="mb-0">
                      Tooltip and help popover
                    </label>
                  </div>

                  <div class="col-sm-9">
                    <input id="tooltip-1" type="text" class="form-control col-9 col-md-5 d-inline-block" placeholder="Tooltip on Hover" title="" data-original-title="Tooltip on Hover">
                    <span class="form-text d-inline-block ml-2">
                      <button id="popover-1" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." type="button" class="btn btn-xs btn-info btn-bold brc-white-tp3 shadow-sm radius-round text-125 px-25" data-original-title="Title">?</button>
                  </span>
                  </div>
                </div>




                <div class="mt-5 border-t-1 bgc-secondary-l4 brc-secondary-l2 py-35 mx-n25">
                  <div class="offset-md-3 col-md-9 text-nowrap">
                    <button class="btn btn-info btn-bold px-4" type="button">
                      <i class="fa fa-check mr-1"></i>
                      Submit
                    </button>

                    <button class="btn btn-outline-lightgrey btn-bgc-white btn-bold ml-2 px-4" type="reset">
                      <i class="fa fa-undo mr-1"></i>
                      Reset
                    </button>
                  </div>
                </div>
              </form>
            </div><!-- /.card-body -->
          </div><!-- /.card -->




          <form autocomplete="off" class="mt-475">
            <div class="form-group row">
              <div class="col-lg-4">
                <div class="card h-100">
                  <div class="card-header">
                    <span class="card-title text-125">
                      Text Area
                  </span>
                  </div>

                  <div class="card-body">
                    <div>
                      <textarea class="form-control" id="id-textarea-limit1" maxlength="50" placeholder="50 character limit"></textarea>
                    </div>

                    <div class="mt-3">
                      <textarea class="form-control" id="id-textarea-limit2" maxlength="100" placeholder="100 character limit"></textarea>
                    </div>

                    <hr>

                    <textarea class="form-control" id="id-textarea-autosize" placeholder="Autosize ...
  Automatic textarea height" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 62px;"></textarea>
                  </div>
                </div><!-- /.card -->
              </div><!-- /.col -->



              <div class="col-lg-4 mt-3 mt-lg-0">
                <div class="card h-100">
                  <div class="card-header">
                    <span class="card-title text-125">
                      Masked Input
                  </span>
                  </div>

                  <div class="card-body">
                    <label for="form-field-mask-1">
                      Date
                      <small class="text-success">99/99/9999</small>
                    </label>

                    <div class="input-group">
                      <input type="text" class="form-control form-control-lg" id="form-field-mask-1" inputmode="text">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">
                          <i class="far fa-calendar mr-1"></i>
                          Go!
                        </button>
                      </div>
                    </div>

                    <hr>

                    <label for="form-field-mask-2">
                      Phone
                      <small class="text-brown">(999) 999-9999</small>
                    </label>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                      </div>
                      <input type="text" class="form-control form-control-lg" id="form-field-mask-2" inputmode="text">
                    </div>

                    <hr>

                    <label for="form-field-mask-3">
                      Product Key
                      <small class="text-muted">a*-999-a999</small>
                    </label>

                    <div class="input-group">
                      <input type="text" class="form-control form-control-lg" id="form-field-mask-3" inputmode="text">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                      </div>
                    </div>

                    <hr>

                    <label for="form-field-mask-4">
                      Eye Script
                      <small class="text-success">~9.99 ~9.99 999</small>
                    </label>

                    <div class="input-group input-group-fade">
                      <input type="text" class="form-control form-control-lg" id="form-field-mask-4" inputmode="text">
                      <div class="input-group-append">
                        <button class="btn btn-outline-default btn-bold" type="button">Verify</button>
                      </div>
                    </div>

                  </div>
                </div><!-- /.card -->
              </div><!-- /.col -->



              <div class="col-lg-4 mt-3 mt-lg-0">
                <div class="card h-100">
                  <div class="card-header">
                    <span class="card-title text-125">
                      Select Box
                  </span>
                  </div>
                  <div class="card-body">

                    <label for="form-field-select-1">
                      Default
                    </label>

                    <select class="form-control" id="form-field-select-1">
                      <option value="">&nbsp;</option>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </select>

                    <hr class="border-dotted my-4">

                    <label for="form-field-select-11">
                      Custom Style
                    </label>

                    <select class="ace-select text-dark-m1 bgc-default-l5 bgc-h-warning-l3 brc-default-m3 brc-h-warning-m1" id="form-field-select-11">
                      <option value="">&nbsp;</option>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </select>


                    <select class="mt-4 ace-select no-border text-dark-tp2 bgc-grey-l4 bgc-h-success-l3 brc-grey-m4 brc-h-success-m2 radius-round border-1 angle-down" id="form-field-select-22">
                      <option value="">&nbsp;</option>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </select>


                    <select class="mt-4 ace-select no-border caret-double text-dark-tp3 bgc-success-l3 bgc-h-success-l2 radius-2 border-0" id="form-field-select-33">
                      <option value="">&nbsp;</option>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </select>


                    <select class="mt-4 ace-select no-border angle-double text-dark-tp3 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 border-2 brc-secondary-l1" id="form-field-select-44">
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </select>
                  </div>
                </div><!-- /.card -->
              </div><!-- /.col -->
            </div><!-- /.row -->




            <!-- Checkbox and Radio -->
            <h4 class="text-primary-d1 mt-45 mb-3 text-140">
              Checkbox &amp; Radio
              <small class="text-75 text-grey-d1">
                Custom styles
              </small>
            </h4>

            <div class="row">
              <div class="col-md-6 col-12">
                <div class="card acard h-100">
                  <div class="card-body">
                    <div class="mb-1">
                      <label>
                        <input type="checkbox" class="mr-2">
                        Choice Default
                      </label>
                    </div>

                    <div class="mb-1">
                      <label>
                        <input type="checkbox" class="mr-2 indeterminate">
                        Indeterminate
                      </label>
                    </div>


                    <div class="mb-1">
                      <label class="radius-round ml-n2 pl-2 pr-1 pt-1 pb-2 bgc-h-success-l1">
                        <input type="checkbox" class="text-green-m1" id="id-check-success">
                      </label>
                      <label for="id-check-success">Choice Success <small>(with highlight)</small></label>
                    </div>


                    <div class="mb-1">
                      <label class="p-2 ml-n2 bgc-h-orange-l2 radius-1">
                        <input type="checkbox" class="bgc-danger brc-h-danger-m1 mr-2">
                        Choice Danger
                      </label>
                    </div>


                    <div class="mb-1">
                      <label class="text-600 text-uppercase text-95 text-secondary">
                        <input type="checkbox" class="input-lg text-danger-m2 brc-on-checked brc-success-m1 brc-h-success-m1 border-2 mr-15">
                        Choice Bold
                      </label>
                    </div>


                    <div class="mb-1">
                      <label>
                        <input type="checkbox" class="align-middle input-sm text-pink mr-25" checked="">
                        <span class="align-middle">Choice Small</span>
                      </label>
                    </div>


                    <div class="mb-1">
                      <label>
                        <input type="checkbox" class="input-lg bgc-blue" checked="">
                        Choice Large
                      </label>
                    </div>


                    <div class="mb-1">
                      <label>
                        <input type="checkbox" class="input-xlg text-purple" checked="">
                        And Larger
                      </label>
                    </div>


                    <div class="mb-1">
                      <label class="disabled text-grey-m1">
                        <input type="checkbox" class="input-lg text-purple" checked="" disabled="">
                        Disabled
                      </label>
                    </div>


                    <label class="brc-dark-l1 mb-0 d-flex align-items-center">
                      <input type="checkbox" class="radius-round input-lg text-90 text-center text-green brc-on-checked brc-dark-m3 brc-h-orange-m1">
                      <span class="ml-15">
                          Rounded
                      </span>
                    </label>
                  </div><!-- /.card-body -->
                </div><!-- /.card -->
              </div><!-- /.col -->


              <div class="col-md-6 col-12">
                <div class="card acard h-100">
                  <div class="card-body">
                    <div class="mb-1">
                      <label>
                        <input type="radio" name="option" class="mr-1">
                        Option Default
                      </label>
                    </div>


                    <div class="mb-1">
                      <label>
                        <input type="radio" name="option" class="text-green-m1">
                        Option Success
                      </label>
                    </div>


                    <div class="mb-1">
                      <label>
                        <input type="radio" name="option" class="bgc-danger brc-h-danger-m1">
                        Option Danger
                      </label>
                    </div>


                    <div class="mb-1">
                      <label class="text-600 text-uppercase text-95 text-secondary">
                        <input type="radio" name="option" class="input-lg text-danger-m2 brc-on-checked brc-success brc-h-success-m1 border-2">
                        Option Bold
                      </label>
                    </div>


                    <div class="mb-1">
                      <label>
                        <input type="radio" name="option" class="input-sm text-pink mr-2">
                        <span class="align-middle">Option Small</span>
                      </label>
                    </div>


                    <div class="mb-1">
                      <label>
                        <input type="radio" name="option" class="input-lg bgc-blue">
                        Option Large
                      </label>
                    </div>


                    <div class="mb-1">
                      <label>
                        <input type="radio" name="option" class="input-xlg text-purple">
                        Larger
                      </label>
                    </div>


                    <div class="mb-1">
                      <label class="disabled text-grey-m1">
                        <input type="radio" name="option" class="input-lg text-purple" disabled="">
                        Disabled
                      </label>
                    </div>
                  </div><!-- /.card-body -->
                </div><!-- /.card -->
              </div><!-- /.col -->
            </div><!-- /.row -->

            <hr>

            <!-- toggle buttons - on/off switches -->
            <div class="card acard my-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-md-3 text-left text-md-right text-115">
                    On/Off Switches
                    <div class="text-grey-m1 text-85">Not supported on older browsers</div>
                  </div>

                  <div class="col-12 col-md-9">
                    <input type="checkbox" class="ace-switch">

                    <input type="checkbox" class="ace-switch " disabled="" checked="">

                    <input type="checkbox" class="ace-switch input-sm">

                    <input type="checkbox" class="ace-switch input-lg">

                    <input type="checkbox" class="ace-switch input-lg ace-switch-yesno bgc-purple-d1 text-grey-m2" checked="">

                    <input type="checkbox" class="ace-switch input-lg ace-switch-onoff bgc-blue-d2 text-grey-m3 radius-1">

                    <input type="checkbox" class="ace-switch input-lg ace-switch-bars-h ace-switch-check ace-switch-times text-grey-l2 bgc-orange-d2 radius-2px" checked="">

                    <input type="checkbox" class="ace-switch input-lg ace-switch-bars bgc-success-d2">

                    <input type="checkbox" class="ace-switch input-lg text-grey-l1 brc-primary-d1">

                    <div class="h-2"></div>

                    <label>
                      <input type="checkbox" class="ace-switch ace-switch-thin">
                    </label>

                    <label>
                      <input type="checkbox" class="ace-switch ace-switch-thin text-grey-l1 bgc-pink-d1">
                    </label>

                    <label class="text-orange-d3 text-600">
                      <input type="checkbox" class="ace-switch ace-switch-thin text-grey-l1 bgc-warning-d2 mr-1">
                      Label
                    </label>
                  </div>
                </div><!-- /.row -->
              </div>
            </div><!-- /.card -->

            <hr>

            <div class="row mt-475">
              <!-- Custom file input -->
              <div class="col-12 col-md-4 mt-3 mt-md-0">
                <div class="card h-100">
                  <div class="card-header">
                    <h5 class="card-title text-orange-d4">
                      Custom File Input
                    </h5>
                  </div>

                  <div class="card-body">
                    <div>
                      <label class="ace-file-input"><input type="file" class="ace-file-input" id="ace-file-input1"><div class="ace-file-container d-flex flex-column border-1 brc-grey-l2 brc-h-warning-m1"><div class="ace-file-placeholder h-100">
  <span class="ace-file-icon align-self-center mx-2px">
  <i class="fa fa-upload bgc-grey-m1 text-white w-4 py-2 text-center"></i>
  </span>
  <span class="ace-file-name text-grey-m2 px-1">
  No file chosen
  </span><span class="ace-file-btn ml-auto bgc-default text-white px-2 pt-2 text-90 my-1px mr-1px">Choose</span></div></div><a title="" class="remove position-rc text-danger mr-n25 w-3 radius-2 border-1 brc-h-danger-m4 text-center" href="#"><i class="fa fa-times"></i></a></label>
                    </div>

                    <div class="mt-4">
                      <label class="ace-file-input ace-file-multiple"><input type="file" class="ace-file-input" id="ace-file-input2" multiple="" accept="image/*"><div class="ace-file-container d-flex flex-column border-1 border-dashed brc-grey-l1 brc-h-info-m2 shadow-sm"><div class="ace-file-placeholder h-100">
  <span class="ace-file-icon align-self-center mx-2px">
  <i class="fa fa-cloud-upload-alt fa-3x text-info-m2 my-2"></i>
  </span>
  <span class="ace-file-name text-125 text-600 text-grey-l1 my-2">
  Drop images here or click to choose
  </span></div></div><a title="" class="remove position-tr bgc-white text-danger mt-n25 mr-n25 w-4 h-4 text-center pt-2px radius-round border-2 brc-grey-m4 brc-h-danger-m3" href="#"><i class="fa fa-times"></i></a></label>
                    </div>
                  </div>
                </div>
              </div><!-- /.col -->


              <!-- Range sliders -->
              <div class="col-12 col-md-4 mt-3 mt-md-0">
                <div class="card h-100">
                  <div class="card-header">
                    <h5 class="card-title text-blue-d2">
                      Range Sliders
                    </h5>
                  </div>

                  <div class="card-body">
                    <div class="row">
                      <div class="col-2">
                        <!-- vertical slider -->
                        <div id="id-slider-1" class="noUi-toggle-tooltip slider-sm slider-tooltip-right slider-tooltip-caret noUi-target noUi-ltr noUi-vertical noUi-txt-dir-ltr" style="height: 260px; z-index: 10;"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect bgc-success-d1" style="transform: translate(0px, 20%) scale(1, 0.6);"></div></div><div class="noUi-origin" style="transform: translate(0px, 200%); z-index: 5;"><div class="noUi-handle noUi-handle-lower brc-success-d2 slider-bars-h" data-handle="0" tabindex="0" role="slider" aria-orientation="vertical" aria-valuemin="0.0" aria-valuemax="80.0" aria-valuenow="20.0" aria-valuetext="20"><div class="noUi-touch-area"></div><div class="noUi-tooltip opacity-1 bgc-success-d2 brc-success-d2 text-white radius-3 px-3">20</div></div></div><div class="noUi-origin" style="transform: translate(0px, 800%); z-index: 4;"><div class="noUi-handle noUi-handle-upper brc-success-d2 slider-bars-h" data-handle="1" tabindex="0" role="slider" aria-orientation="vertical" aria-valuemin="20.0" aria-valuemax="100.0" aria-valuenow="80.0" aria-valuetext="80"><div class="noUi-touch-area"></div><div class="noUi-tooltip opacity-1 bgc-success-d2 brc-success-d2 text-white radius-3 px-3">80</div></div></div></div></div>
                      </div>

                      <div class="col-10">
                        <div id="id-slider-2" class="noUi-toggle-tooltip mb-5 slider-thin noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base bgc-grey-l1"><div class="noUi-connects"><div class="noUi-connect bgc-info-d2" style="transform: translate(20%, 0px) scale(0.6, 1);"></div></div><div class="noUi-origin" style="transform: translate(-800%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower brc-info-d2 border-2 radius-round slider-bars-none" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="80.0" aria-valuenow="20.0" aria-valuetext="20.00"><div class="noUi-touch-area"></div><div class="noUi-tooltip bgc-dark-tp1 text-white border-0 text-90 radius-1 px-2">20.00</div></div></div><div class="noUi-origin" style="transform: translate(-200%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper brc-info-d2 border-2 radius-round slider-bars-none" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="20.0" aria-valuemax="100.0" aria-valuenow="80.0" aria-valuetext="80.00"><div class="noUi-touch-area"></div><div class="noUi-tooltip bgc-dark-tp1 text-white border-0 text-90 radius-1 px-2">80.00</div></div></div></div></div>

                        <div id="id-slider-3" class="noUi-toggle-tooltip my-5 noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect bgc-purple-tp1" style="transform: translate(0%, 0px) scale(0.5, 1);"></div></div><div class="noUi-origin" style="transform: translate(-500%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower border-3 brc-purple-tp1 bgc-white-tp1 radius-1" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="50.0" aria-valuetext="50.00"><div class="noUi-touch-area"></div><div class="noUi-tooltip bgc-dark-tp1 text-white border-0 text-90 radius-1 px-2">50.00</div></div></div></div></div>

                        <div id="id-slider-4" class="noUi-toggle-tooltip slider-sm my-5 noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" disabled="true"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect bgc-primary-tp1" style="transform: translate(20%, 0px) scale(0.6, 1);"></div></div><div class="noUi-origin" style="transform: translate(-800%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower brc-primary" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="80.0" aria-valuenow="20.0" aria-valuetext="20.00"><div class="noUi-touch-area"></div><div class="noUi-tooltip bgc-dark-tp1 text-white border-0 text-90 radius-1 px-2">20.00</div></div></div><div class="noUi-origin" style="transform: translate(-200%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper brc-primary" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="20.0" aria-valuemax="100.0" aria-valuenow="80.0" aria-valuetext="80.00"><div class="noUi-touch-area"></div><div class="noUi-tooltip bgc-dark-tp1 text-white border-0 text-90 radius-1 px-2">80.00</div></div></div></div></div>

                        <div id="id-slider-5" class="noUi-toggle-tooltip my-5 slider-thin noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base bgc-grey-l2"><div class="noUi-connects"><div class="noUi-connect bgc-warning" style="transform: translate(0%, 0px) scale(0.1, 1);"></div></div><div class="noUi-origin" style="transform: translate(-900%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-lower brc-white-tp1 bgc-warning-d2 radius-round slider-bars-none shadow" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="10.0" aria-valuetext="10.00" style="border-width: 8px;"><div class="noUi-touch-area"></div></div></div></div></div>

                        <div class="mt-5 mb-2">
                          <!-- ionSlider -->
                          <span class="irs irs--flat js-irs-0"><span class="irs"><span class="irs-line" tabindex="0"></span><span class="irs-min" style="visibility: hidden;">10</span><span class="irs-max" style="visibility: visible;">100</span><span class="irs-from" style="visibility: hidden;">0</span><span class="irs-to" style="visibility: hidden;">0</span><span class="irs-single" style="left: -2.02363%;">10</span></span><span class="irs-grid"></span><span class="irs-bar irs-bar--single" style="left: 0px; width: 3.38043%;"></span><span class="irs-shadow shadow-single" style="display: none;"></span><span class="irs-handle single" style="left: 0%;"><i></i><i></i><i></i></span></span><input type="text" id="id-ionslider-1" name="slider-1" value="" class="irs-hidden-input" tabindex="-1" readonly="">
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div><!-- /.col -->


              <!-- Input spinner -->
              <div class="col-12 col-md-4 mt-3 mt-md-0">
                <div class="card h-100">
                  <div class="card-header">
                    <h5 class="card-title text-purple-d3">
                      Input Spinner
                    </h5>
                  </div>

                  <div class="card-body">
                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span class="input-group-btn input-group-prepend"><button class="btn btn-danger bootstrap-touchspin-down" type="button"><i class="fa fa-minus"></i></button></span><input class="form-control form-control-lg" id="id-spinner-1" type="text" value="55" name="id-spinner-1"><span class="input-group-addon bootstrap-touchspin-postfix input-group-append"><span class="input-group-text">%</span></span><span class="input-group-btn input-group-append"><button class="btn btn-success bootstrap-touchspin-up" type="button"><i class="fa fa-plus"></i></button></span></div>

                    <hr>

                    <div class="input-group  bootstrap-touchspin bootstrap-touchspin-injected"><input class="form-control btn-group-inside-spinner form-control-lg" id="id-spinner-2" type="text" value="" name="id-spinner-2"><span class="input-group-btn-vertical"><button class="btn btn-xs btn-info bootstrap-touchspin-up " type="button"><i class="fa fa-angle-up"></i></button><button class="btn btn-xs btn-info bootstrap-touchspin-down " type="button"><i class="fa fa-angle-down"></i></button></span></div>

                    <hr>

                    <div class="w-50">
                      <div class="input-group  bootstrap-touchspin bootstrap-touchspin-injected"><input class="form-control text-center" id="id-spinner-3" type="text" value="" name="id-spinner-3"><span class="input-group-btn-vertical"><button class="btn btn-xs btn-primary bootstrap-touchspin-up " type="button"><i class="fa fa-caret-up"></i></button><button class="btn btn-xs btn-primary bootstrap-touchspin-down " type="button"><i class="fa fa-caret-down"></i></button></span></div>
                    </div>
                  </div>
                </div>
              </div><!-- /.col -->
            </div><!-- /.row -->





            <div class="row mt-475">
              <!-- Date picker -->
              <div class="col-12 col-md-4 mt-3 mt-md-0">
                <div class="card h-100">
                  <div class="card-header">
                    <span class="text-primary-d2 text-120">Date/Range Picker</span>
                  </div>

                  <div class="card-body">
                    <!-- Tinydate picker plugin -->
                    <div class="form-field">
                      <div class="pos-rel">
                        <input type="text" class="form-control" id="id-date-1">

                        <input placeholder="modal mode..." type="text" class="form-control mt-25" id="id-date-2">

                        <input type="text" class="form-control mt-25" id="id-date-3" placeholder="Native datepicker on small devices ...">
                      </div>
                    </div>


                    <hr class="border-dotted my-35">


                    <div id="id-daterange-wrapper" class="pos-rel">
                      <!-- daterange -->
                      <div class="form-row">
                        <div class="col">
                          <input id="id-daterange-from" class="form-control ex-inputs-start" placeholder="From date">
                        </div>

                        <div class="text-grey-l2">_</div>

                        <div class="col">
                          <input id="id-daterange-to" class="form-control ex-inputs-end" placeholder="To date">
                        </div>
                      </div>

                      <div id="id-daterange-container" class="dp-daterange-picker dp-daterange-above"><div class="dr-cals"><div class="dr-cal-start"><div class="dp-permanent"><div class="dp"><div class="dp-cal"><header class="dp-cal-header"><button tabindex="-1" type="button" class="dp-prev">Prev</button><button tabindex="-1" type="button" class="dp-cal-month">March</button><button tabindex="-1" type="button" class="dp-cal-year">2022</button><button tabindex="-1" type="button" class="dp-next">Next</button></header><div class="dp-days"><span class="dp-col-header">Sun</span><span class="dp-col-header">Mon</span><span class="dp-col-header">Tue</span><span class="dp-col-header">Wed</span><span class="dp-col-header">Thu</span><span class="dp-col-header">Fri</span><span class="dp-col-header">Sat</span><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1645930800000">27</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1646017200000">28</button><button tabindex="-1" type="button" class="dp-day " data-date="1646103600000">1</button><button tabindex="-1" type="button" class="dp-day " data-date="1646190000000">2</button><button tabindex="-1" type="button" class="dp-day dp-current dp-selected dp-day-today " data-date="1646276400000">3</button><button tabindex="-1" type="button" class="dp-day " data-date="1646362800000">4</button><button tabindex="-1" type="button" class="dp-day " data-date="1646449200000">5</button><button tabindex="-1" type="button" class="dp-day " data-date="1646535600000">6</button><button tabindex="-1" type="button" class="dp-day " data-date="1646622000000">7</button><button tabindex="-1" type="button" class="dp-day " data-date="1646708400000">8</button><button tabindex="-1" type="button" class="dp-day " data-date="1646794800000">9</button><button tabindex="-1" type="button" class="dp-day " data-date="1646881200000">10</button><button tabindex="-1" type="button" class="dp-day " data-date="1646967600000">11</button><button tabindex="-1" type="button" class="dp-day " data-date="1647054000000">12</button><button tabindex="-1" type="button" class="dp-day " data-date="1647140400000">13</button><button tabindex="-1" type="button" class="dp-day " data-date="1647226800000">14</button><button tabindex="-1" type="button" class="dp-day " data-date="1647313200000">15</button><button tabindex="-1" type="button" class="dp-day " data-date="1647399600000">16</button><button tabindex="-1" type="button" class="dp-day " data-date="1647486000000">17</button><button tabindex="-1" type="button" class="dp-day " data-date="1647572400000">18</button><button tabindex="-1" type="button" class="dp-day " data-date="1647658800000">19</button><button tabindex="-1" type="button" class="dp-day " data-date="1647745200000">20</button><button tabindex="-1" type="button" class="dp-day " data-date="1647831600000">21</button><button tabindex="-1" type="button" class="dp-day " data-date="1647918000000">22</button><button tabindex="-1" type="button" class="dp-day " data-date="1648004400000">23</button><button tabindex="-1" type="button" class="dp-day " data-date="1648090800000">24</button><button tabindex="-1" type="button" class="dp-day " data-date="1648177200000">25</button><button tabindex="-1" type="button" class="dp-day " data-date="1648263600000">26</button><button tabindex="-1" type="button" class="dp-day " data-date="1648350000000">27</button><button tabindex="-1" type="button" class="dp-day " data-date="1648436400000">28</button><button tabindex="-1" type="button" class="dp-day " data-date="1648522800000">29</button><button tabindex="-1" type="button" class="dp-day " data-date="1648609200000">30</button><button tabindex="-1" type="button" class="dp-day " data-date="1648695600000">31</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1648782000000">1</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1648868400000">2</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1648954800000">3</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1649041200000">4</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1649127600000">5</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1649214000000">6</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1649300400000">7</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1649386800000">8</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1649473200000">9</button></div><footer class="dp-cal-footer"><button tabindex="-1" type="button" class="dp-today">Today</button><button tabindex="-1" type="button" class="dp-clear">Clear</button><button tabindex="-1" type="button" class="dp-close">Close</button></footer></div></div></div></div><div class="dr-cal-end"><div class="dp-permanent"><div class="dp"><div class="dp-cal"><header class="dp-cal-header"><button tabindex="-1" type="button" class="dp-prev">Prev</button><button tabindex="-1" type="button" class="dp-cal-month">April</button><button tabindex="-1" type="button" class="dp-cal-year">2022</button><button tabindex="-1" type="button" class="dp-next">Next</button></header><div class="dp-days"><span class="dp-col-header">Sun</span><span class="dp-col-header">Mon</span><span class="dp-col-header">Tue</span><span class="dp-col-header">Wed</span><span class="dp-col-header">Thu</span><span class="dp-col-header">Fri</span><span class="dp-col-header">Sat</span><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1648350000000">27</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1648436400000">28</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1648522800000">29</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1648609200000">30</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1648695600000">31</button><button tabindex="-1" type="button" class="dp-day " data-date="1648782000000">1</button><button tabindex="-1" type="button" class="dp-day " data-date="1648868400000">2</button><button tabindex="-1" type="button" class="dp-day dp-current dp-selected " data-date="1648954800000">3</button><button tabindex="-1" type="button" class="dp-day " data-date="1649041200000">4</button><button tabindex="-1" type="button" class="dp-day " data-date="1649127600000">5</button><button tabindex="-1" type="button" class="dp-day " data-date="1649214000000">6</button><button tabindex="-1" type="button" class="dp-day " data-date="1649300400000">7</button><button tabindex="-1" type="button" class="dp-day " data-date="1649386800000">8</button><button tabindex="-1" type="button" class="dp-day " data-date="1649473200000">9</button><button tabindex="-1" type="button" class="dp-day " data-date="1649559600000">10</button><button tabindex="-1" type="button" class="dp-day " data-date="1649646000000">11</button><button tabindex="-1" type="button" class="dp-day " data-date="1649732400000">12</button><button tabindex="-1" type="button" class="dp-day " data-date="1649818800000">13</button><button tabindex="-1" type="button" class="dp-day " data-date="1649905200000">14</button><button tabindex="-1" type="button" class="dp-day " data-date="1649991600000">15</button><button tabindex="-1" type="button" class="dp-day " data-date="1650078000000">16</button><button tabindex="-1" type="button" class="dp-day " data-date="1650164400000">17</button><button tabindex="-1" type="button" class="dp-day " data-date="1650250800000">18</button><button tabindex="-1" type="button" class="dp-day " data-date="1650337200000">19</button><button tabindex="-1" type="button" class="dp-day " data-date="1650423600000">20</button><button tabindex="-1" type="button" class="dp-day " data-date="1650510000000">21</button><button tabindex="-1" type="button" class="dp-day " data-date="1650596400000">22</button><button tabindex="-1" type="button" class="dp-day " data-date="1650682800000">23</button><button tabindex="-1" type="button" class="dp-day " data-date="1650769200000">24</button><button tabindex="-1" type="button" class="dp-day " data-date="1650855600000">25</button><button tabindex="-1" type="button" class="dp-day " data-date="1650942000000">26</button><button tabindex="-1" type="button" class="dp-day " data-date="1651028400000">27</button><button tabindex="-1" type="button" class="dp-day " data-date="1651114800000">28</button><button tabindex="-1" type="button" class="dp-day " data-date="1651201200000">29</button><button tabindex="-1" type="button" class="dp-day " data-date="1651287600000">30</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1651374000000">1</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1651460400000">2</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1651546800000">3</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1651633200000">4</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1651719600000">5</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1651806000000">6</button><button tabindex="-1" type="button" class="dp-day dp-edge-day " data-date="1651892400000">7</button></div><footer class="dp-cal-footer"><button tabindex="-1" type="button" class="dp-today">Today</button><button tabindex="-1" type="button" class="dp-clear">Clear</button><button tabindex="-1" type="button" class="dp-close">Close</button></footer></div></div></div></div></div></div>
                    </div>


                    <hr class="border-dotted my-35">

                    <!-- Datetime picker plugin -->
                    <div>
                      <div class="form-group">
                        <label for="id_time_el" class="text-secondary-d3">Date/Time picker:</label>
                        <div class="input-group date" id="id-timepicker">
                          <input type="text" name="end_time" value="05:12:00" class="form-control" id="id_time_el">
                          <div class="input-group-addon input-group-append">
                            <div class="input-group-text">
                              <i class="far fa-clock"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- Custom time picker -->
                    <div class="mt-3">
                      <div class="form-group">
                        <a href="#" class="btn btn-outline-info border-2" id="id-popover-timepicker" data-original-title="" title="">Time picker inside popover</a>

                        <div id="id-popover-timepicker-html" class="d-none">
                          <!-- it's a hidden element, and the html content of it will be shown inside popover -->
                          <div class="d-flex">
                            <select class="mx-1 pl-3 no-border caret-double ace-select border-2 radius-1 brc-default-l1 brc-h-default-m2 bgc-default-l4 text-secondary-d2 text-600 text-110" style="width: 5rem;">
                              <option selected="">H</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                              <option>7</option>
                              <option>8</option>
                              <option>9</option>
                              <option>10</option>
                              <option>11</option>
                              <option>12</option>
                            </select>

                            <span class="text-600 text-150">:</span>

                            <select class="mx-1 pl-3 no-border caret-double ace-select border-2 radius-1 brc-default-l1 brc-h-default-m2 bgc-default-l4 text-secondary-d2 text-600 text-110" style="width: 5rem;">
                              <option selected="">M</option>
                              <option>00</option>
                              <option>05</option>
                              <option>10</option>
                              <option>15</option>
                              <option>20</option>
                              <option>25</option>
                              <option>30</option>
                              <option>35</option>
                              <option>40</option>
                              <option>45</option>
                              <option>50</option>
                              <option>55</option>
                            </select>

                            <div class="mx-1 btn-group btn-group-toggle" data-toggle="buttons">
                              <div role="button" class="btn btn-bold radius-1 px-25 py-2 text-95 btn-light-blue btn-a-light-primary d-style">
                                <input type="checkbox" value="1">
                                <span class="d-n-active">AM</span>
                                <span class="d-active">PM</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- /.form-group -->
                    </div>

                  </div><!-- /.card-body -->
                </div><!-- /.card -->
              </div><!-- /.col -->


              <!-- Color picker -->
              <div class="col-12 col-md-4 mt-3 mt-md-0">
                <div class="card h-100">
                  <div class="card-header">
                    <span class="text-primary-d2 text-120">
                      Color Picker
                  </span>
                  </div>

                  <div class="card-body">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text border-0 radius-0" id="id-color-picker-1-update"></span>
                      </div>
                      <input type="text" class="form-control colorpicker-element" id="id-color-picker-1" data-colorpicker-id="1" data-original-title="" title="">
                    </div>

                    <hr class="my-4">

                    <div>
                      <div id="color-picker-container"><div class="IroColorPicker" id="" style="display: block;"><div class="IroWheel" style="width: 160px; height: 160px; position: relative; overflow: visible; display: block;"><div class="IroWheelHue" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; border-radius: 50%; box-sizing: border-box; transform: rotateZ(90deg); background: conic-gradient(red, magenta, blue, aqua, lime, yellow, red);"></div><div class="IroWheelSaturation" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; border-radius: 50%; box-sizing: border-box; background: radial-gradient(circle closest-side, rgb(255, 255, 255), transparent);"></div><div class="IroWheelLightness" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; border-radius: 50%; box-sizing: border-box; background: rgb(0, 0, 0); opacity: 0;"></div><div class="IroWheelBorder" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; border-radius: 50%; box-sizing: border-box; border: 0px solid rgb(255, 255, 255);"></div><svg class="IroHandle IroHandle--0 IroHandle--isActive" style="transform: translate(146px, 80px); will-change: transform; top: -8px; left: -8px; width: 16px; height: 16px; position: absolute; overflow: visible;"><circle cx="8" cy="8" r="8" fill="none" stroke-width="2" stroke="#000"></circle><circle cx="8" cy="8" r="6" fill="hsl(0, 100%, 50%)" stroke-width="2" stroke="#fff"></circle></svg></div><div class="IroSlider" style="position: relative; width: 160px; height: 28px; border-radius: 14px; background: conic-gradient(rgb(204, 204, 204) 25%, rgb(255, 255, 255) 0deg, rgb(255, 255, 255) 50%, rgb(204, 204, 204) 0deg, rgb(204, 204, 204) 75%, rgb(255, 255, 255) 0deg) 0% 0% / 8px 8px; overflow: visible; display: block; margin-top: 12px;"><div class="IroSliderGradient" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; border-radius: 14px; background: linear-gradient(to right, rgb(0, 0, 0) 0%, rgb(255, 0, 0) 100%); box-sizing: border-box; border: 0px solid rgb(255, 255, 255);"></div><svg class="IroHandle IroHandle--0 IroHandle--isActive" style="transform: translate(146px, 14px); will-change: transform; top: -8px; left: -8px; width: 16px; height: 16px; position: absolute; overflow: visible;"><circle cx="8" cy="8" r="8" fill="none" stroke-width="2" stroke="#000"></circle><circle cx="8" cy="8" r="6" fill="none" stroke-width="2" stroke="#fff"></circle></svg></div></div></div>
                    </div>
                  </div>
                </div>
              </div><!-- /.col -->


              <!-- knob -->
              <div class="col-12 col-md-4 mt-3 mt-md-0">
                <div class="card h-100">
                  <div class="card-header">
                    <span class="text-primary-d2 text-120">Knob Input</span>
                  </div>

                  <div class="card-body">

                    <div class="row">
                      <div class="col-6 text-center pos-rel">
                        <div style="display:inline;width:80px;height:80px;"><canvas width="80" height="80"></canvas><input type="text" class="knob border-0 mw-100 position-center m-auto" value="15" data-min="0" data-max="100" data-step="10" data-width="80" data-height="80" data-thickness=".2" data-fgcolor="rgb(55, 149, 218)" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font: bold 16px Arial; text-align: center; color: rgb(55, 149, 218); padding: 0px; appearance: none;"></div>
                      </div>

                      <div class="col-6 text-center pos-rel">
                        <div style="display:inline;width:80px;height:80px;"><canvas width="80" height="80"></canvas><input type="text" class="knob border-0 mw-100 position-center m-auto" value="41" data-min="0" data-max="100" data-width="80" data-height="80" data-thickness=".2" data-fgcolor="#629A58" data-displayprevious="true" data-anglearc="250" data-angleoffset="-125" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font: bold 16px Arial; text-align: center; color: rgb(98, 154, 88); padding: 0px; appearance: none;"></div>
                      </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col-12 text-center pos-rel">
                        <div style="display:inline;width:150px;height:150px;"><canvas width="150" height="150"></canvas><input type="text" class="knob border-0 mw-100 position-center m-auto" value="1" data-min="0" data-max="10" data-width="150" data-height="150" data-thickness=".2" data-fgcolor="#94645C" data-angleoffset="90" data-cursor="true" style="width: 79px; height: 50px; position: absolute; vertical-align: middle; margin-top: 50px; margin-left: -114px; border: 0px; background: none; font: bold 37px Arial; text-align: center; color: rgb(148, 100, 92); padding: 0px; appearance: none;"></div>
                      </div>
                    </div>

                  </div>
                </div>
              </div><!-- /.col -->
            </div><!-- /.row -->

          </form>
        </div>

        <footer class="footer d-none d-sm-block">
          <div class="footer-inner bgc-white-tp1">
            <div class="pt-3 border-none border-t-3 brc-grey-l2 border-double">
              <span class="text-primary-m1 font-bolder text-120">Ace</span>
              <span class="text-grey">Application © 2021</span>

              <span class="mx-3 action-buttons">
                    <a href="#" class="text-blue-m2 text-150"><i class="fab fa-twitter-square"></i></a>
                    <a href="#" class="text-blue-d2 text-150"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-orange-d1 text-150"><i class="fa fa-rss-square"></i></a>
                  </span>
            </div>
          </div><!-- .footer-inner -->

          <!-- `scroll to top` button inside footer (for example when in boxed layout) -->
          <div class="footer-tools">
            <a href="#" class="btn-scroll-up btn btn-dark mb-2 mr-2">
              <i class="fa fa-angle-double-up mx-2px text-95"></i>
            </a>
          </div>
        </footer>



        <!-- footer toolbox for mobile view -->
        <footer class="d-sm-none footer footer-sm footer-fixed">
          <div class="footer-inner">
            <div class="btn-group d-flex h-100 mx-2 border-x-1 border-t-2 brc-primary-m3 bgc-white-tp1 radius-t-1 shadow">
              <button class="btn btn-outline-primary btn-h-lighter-primary btn-a-lighter-primary border-0" data-toggle="modal" data-target="#id-ace-settings-modal">
                <i class="fas fa-sliders-h text-blue-m1 text-120"></i>
              </button>

              <button class="btn btn-outline-primary btn-h-lighter-primary btn-a-lighter-primary border-0">
                <i class="fa fa-plus-circle text-green-m1 text-120"></i>
              </button>

              <button class="btn btn-outline-primary btn-h-lighter-primary btn-a-lighter-primary border-0" data-toggle="collapse" data-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle navbar search">
                <i class="fa fa-search text-orange text-120"></i>
              </button>

              <button class="btn btn-outline-primary btn-h-lighter-primary btn-a-lighter-primary border-0 mr-0">
                <span class="pos-rel">
                    <i class="fa fa-bell text-purple-m1 text-120"></i>
                    <span class="badge badge-dot bgc-red position-tr mt-n1 mr-n2px"></span>
                </span>
              </button>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script src="../controller/controller_home.js"></script>
  <script src="../controller/controller_sidebar.js"></script>
  <script src="../includes/js/sidebar.js"></script>
  <script src="../includes/bootstrap.js"></script>
  <script src="../includes/ace.js"></script>
  <script src="../includes/js/custom.js">// script encontrado no final da pagina</script> 
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
