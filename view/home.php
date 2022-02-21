<!-- Home, Landing page 1 -->
<?php
    include('../model/session.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <base href="../">

    <title>Landing Page 1 - Ace Admin</title>

    <!-- include common vendor stylesheets & fontawesome -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" data-rtl="./dist/css/rtl/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/regular.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/solid.min.css">



    <!-- include vendor stylesheets used in "Landing Page 1" page. see "/views//pages/partials/landing-page-1/@vendor-stylesheets.hbs" -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.css">


    <!-- include fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&amp;display=swap">



    <!-- ace.css -->
    <link rel="stylesheet" type="text/css" href="./dist/css/ace.min.css">


    <!-- favicon -->
    <link rel="icon" type="image/png" href="./assets/favicon.png">

    <!-- "Landing Page 1" page styles, specific to this page for demo only -->
    <style>
      html {
        --navbar-height: 5rem;
        --navbar-sm-height: 3.75rem;
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
    <link rel="stylesheet" type="text/css" href="./dist/css/ace-themes.min.css">

  <style>.flex-equal-sm > * {flex: 0 1 1% !important;}						 @media print {#id-ace-settings-modal {display: none !important;}}						 @media (hover: hover) { #id-ace-settings-modal:not(.show) .aside-header > .btn:hover > .fa { animation: 0.6s fa-spin ease-in-out; }}						 @media screen and (prefers-reduced-motion: reduce) { #id-ace-settings-modal:not(.show) .aside-header > .btn:hover > .fa { animation: none; } }</style>
</head>
<body class="is-document-loaded" data-aos-easing="ease" data-aos-duration="550" data-aos-delay="0">
    <div class="body-container">
      <div class="pos-abs" id="scroll-down" style="top: 484px;"></div>
      <div class="pos-abs" id="scroll-up"></div>

      <nav class="navbar navbar-expand-lg navbar-darkblue" id="navbar-dark">
        <div class="navbar-inner">
          <div class="container">


            <button type="button" class="navbar-toggler btn btn-burger burger-times static collapsed d-flex d-lg-none ml-2" data-toggle="collapse" data-target="#navbarMenu1-dark" aria-controls="navbarMenu1-dark" aria-expanded="false" aria-label="Toggle navbar menu">
              <span class="bars text-white"></span>
            </button><!-- mobile navbar toggler button -->


            <div class="navbar-intro justify-content-xl-between bgc-transparent">
              <a class="navbar-brand text-white text-180" href="#">
                <i class="fa fa-leaf text-105 text-green-l5 mr-1"></i>
                <span>ACE</span>
                <span class="text-70">Application</span>
              </a><!-- /.navbar-brand -->
            </div><!-- /.navbar-intro -->


            <div class="navbar-menu collapse navbar-collapse navbar-backdrop " id="navbarMenu1-dark">

              <div class="navbar-nav">
                <ul class="nav nav-compact-3">

                  <li class="nav-item pos-rel dropdown dropdown-mega dropdown-hover">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-list-alt mr-2 d-lg-none"></i>
                      Mega
                      <i class="caret fa fa-angle-down d-none d-lg-block"></i>
                      <i class="caret fa fa-angle-left d-block d-lg-none"></i>
                    </a>
                    <div class="p-0 dropdown-menu dropdown-center dropdown-lg border-0 shadow radius-2 mt-1 mt-lg-3" style="margin-left: 35px !important;">
                      <div class="row mx-0">
                        <div class="bgc-white col-lg-6 col-12 p-2 p-lg-3 p-xl-4">
                          <div class="d-flex align-items-center">
                            <div class="pos-rel">
                              <i class="bgc-blue-l3 w-4 h-4 radius-round position-r mr-2 mt-25"></i>
                              <i class="fa fa-edit text-160 text-blue mr-2 mb-3 w-6 h-6 radius-round text-center pt-1 pos-rel"></i>
                            </div>
                            <div>
                              <a href="#" class="d-block py-1px px-1 radius-1 no-underline text-dark-tp3 text-600 bgc-h-primary-l2 text-95">
                                New Post
                              </a>
                              <p class="text-dark-tp4 pl-1">
                                Praesent commodo cursus...
                              </p>
                            </div>
                          </div>

                          <div class="d-flex align-items-center">
                            <div class="pos-rel">
                              <i class="bgc-green-l3 w-4 h-4 radius-round position-r mr-2 mt-25"></i>
                              <i class="far fa-comments text-160 text-green mr-2 mb-3 w-6 h-6 radius-round text-center pt-1 pos-rel"></i>
                            </div>
                            <div>
                              <a href="#" class="d-block py-1px px-1 radius-1 no-underline text-dark-tp3 text-600 bgc-h-primary-l2 text-95">
                                Comments
                              </a>
                              <p class="text-dark-tp4 pl-1">
                                Donec id elit non mi...
                              </p>
                            </div>
                          </div>

                          <div class="d-flex align-items-center">
                            <div class="pos-rel">
                              <i class="bgc-orange-l3 w-4 h-4 radius-round position-r mr-2 mt-25"></i>
                              <i class="far fa-star text-160 text-orange-d2 mr-2 mb-3 w-6 h-6 radius-round text-center pt-1 pos-rel"></i>
                            </div>

                            <div>
                              <a href="#" class="d-block py-1px px-1 radius-1 no-underline text-dark-tp3 text-600 bgc-h-primary-l2 text-95">
                                Favorites
                              </a>
                              <p class="text-dark-tp4 pl-1">
                                Commodo tortor mauri...
                              </p>
                            </div>
                          </div>
                        </div><!-- .col:mega links -->

                        <div class="bgc-white col-lg-6 col-12 p-2 p-lg-3 p-xl-4">
                          <div class="d-flex align-items-center">
                            <div class="pos-rel">
                              <i class="bgc-blue-l3 w-4 h-4 radius-round position-r mr-2 mt-25"></i>
                              <i class="fa fa-globe text-160 text-blue mr-2 mb-3 w-6 h-6 radius-round text-center pt-1 pos-rel"></i>
                            </div>
                            <div>
                              <a href="#" class="d-block py-1px px-1 radius-1 no-underline text-dark-tp3 text-600 bgc-h-primary-l2 text-95">
                                Links
                              </a>
                              <p class="text-dark-tp4 pl-1">
                                Praesent commodo cursus...
                              </p>
                            </div>
                          </div>

                          <div class="d-flex align-items-center">
                            <div class="pos-rel">
                              <i class="bgc-purple-l3 w-4 h-4 radius-round position-r mr-2 mt-25"></i>
                              <i class="far fa-copy text-160 text-purple mr-2 mb-3 w-6 h-6 radius-round text-center pt-1 pos-rel"></i>
                            </div>
                            <div>
                              <a href="#" class="d-block py-1px px-1 radius-1 no-underline text-dark-tp3 text-600 bgc-h-primary-l2 text-95">
                                Documents
                              </a>
                              <p class="text-dark-tp4 pl-1">
                                Donec id elit non mi...
                              </p>
                            </div>
                          </div>

                          <div class="d-flex align-items-center">
                            <div class="pos-rel">
                              <i class="bgc-red-l3 w-4 h-4 radius-round position-r mr-2 mt-25"></i>
                              <i class="fa fa-list text-160 text-danger mr-2 mb-3 w-6 h-6 radius-round text-center pt-1 pos-rel"></i>
                            </div>
                            <div>
                              <a href="#" class="d-block py-1px px-1 radius-1 no-underline text-dark-tp3 text-600 bgc-h-primary-l2 text-95">
                                Mega Menu
                              </a>
                              <p class="text-dark-tp4 pl-1">
                                Commodo tortor mauri...
                              </p>
                            </div>
                          </div>
                        </div><!-- .col:mega links -->
                      </div><!-- .row: mega -->


                      <div class="px-4 mx-0 order-first order-lg-last bgc-primary-l4 border-t-1 brc-secondary-l2">
                        <div class="py-3">
                          <button class="mx-2px btn px-25 py-2 text-100 btn-blue radius-round px-4 border-2">
                            Get Started Now
                          </button>

                          <div class="d-block d-md-inline-block mt-3 mt-md-0">
                            <span class="text-dark-tp3 ml-3">
                                    or call us now to learn more
                                  </span>

                            <b class="text-600">
                              111-222-333
                            </b>
                          </div>
                        </div>
                      </div><!-- .row:megamenu big buttons -->
                    </div>
                  </li>

                  <li class="nav-item dropdown mx-1px">
                    <a class="nav-link" href="#">
                      <i class="fa fa-magic mr-15"></i>
                      Features
                    </a>
                  </li>

                  <li class="nav-item dropdown mx-1px">
                    <a class="nav-link" href="#">
                      Contact
                    </a>
                  </li>

                  <li class="nav-item ml-xl-2">
                    <a class="d-none d-lg-block nav-link h-auto py-15 mt-1 bgc-black-tp8 bgc-h-black-tp7 text-white radius-1" href="#">
                      Special Offer
                    </a>

                    <a class="d-lg-none nav-link" href="#">
                      ** Special Offer **
                    </a>
                  </li>
                </ul><!-- /.navbar-nav menu -->
              </div><!-- /.navbar-nav -->

            </div><!-- /.navbar-menu.navbar-collapse -->


            <button type="button" class="d-style btn btn-burger static collapsed mr-2 px-4 navbar-toggler d-flex d-lg-none" data-toggle="collapse" data-target="#navbarMenu2-dark" aria-controls="navbarMenu2-dark" aria-expanded="false" aria-label="Toggle navbar menu">
              <i class="fa fa-caret-down d-collapsed text-80"></i>
              <i class="fa fa-caret-up d-n-collapsed text-80"></i>

              <i class="fa fa-user ml-2"></i>
            </button><!-- mobile navbar toggler button -->


            <div class="navbar-menu collapse navbar-collapse navbar-backdrop" id="navbarMenu2-dark">
              <div class="navbar-nav">
                <ul class="nav nav-compact">

                  <li class="nav-item dropdown px-lg-2 d-lg-flex flex-column justify-content-center">
                    <a class="d-none d-lg-block h-auto btn btn-outline-white btn-bold radius-round border-2 dropdown-toggle px-2 px-xl-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      Login
                    </a>

                    <a class="d-lg-none nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-caret-right bgc-white text-blue radius-round py-2 px-3 mr-2"></i>
                      Login
                    </a>

                    <div style="width: 20rem;" data-display="static" class="dropdown-menu dropdown-menu-right overflow-hidden dropdown-animated animated-2 shadow radius-1 p-2 p-lg-0 border-0 mt-lg-n1 mr-lg-n2">
                      <!-- login dialog -->
                      <h4 class="text-120 mb-3 text-secondary-d3 px-3 mt-3 mb-2">Please enter your details</h4>
                      <hr class="border-dotted brc-default-l2">
                      <form class="dropdown-clickable text-grey-d2">
                        <div class="dropdown-body my-25">
                          <div class="form-group mx-3">
                            <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                              <input placeholder="Username" type="text" class="form-control pr-4 shadow-none" autocomplete="off">
                              <i class="fa fa-user text-grey-m2 ml-n4"></i>
                              <label class="floating-label text-grey-l1 ml-n3">Username</label>
                            </div>
                          </div>

                          <div class="form-group mx-3">
                            <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                              <input placeholder="Password" type="password" class="form-control pr-4 shadow-none" autocomplete="off">
                              <i class="fa fa-key text-grey-m2 ml-n4"></i>
                              <label class="floating-label text-grey-l1 ml-n3">Password</label>
                            </div>
                          </div>

                          <div class="mx-3">
                            <label class="d-inline-block mt-2 text-secondary-d2">
                              <input type="checkbox" class="mr-1">
                              Remember me
                            </label>
                          </div>
                        </div>

                        <div class="dropdown-footer text-center py-25 bgc-default-l4 border-t-1 brc-default-l2">
                          <button type="button" class="btn px-4 py-15 text-95 btn-blue" data-dismiss="dropdown">
                            Login
                          </button>

                          <button type="button" class="btn px-25 py-15 text-95 btn-outline-green btn-bgc-white">
                            Register
                          </button>
                        </div>
                      </form>
                    </div>
                  </li>


                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle px-lg-3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      <i class="text-140 fa fa-search"></i>
                      <span class="d-lg-none ml-2">
                              Open Search
                          </span>
                    </a>
                    <div style="width: 20rem;" data-display="static" class="dropdown-menu dropdown-menu-right dropdown-animated animated-2 dropdown-caret radius-1 p-2 p-lg-0 border-0 mt-lg-n1 mr-lg-n2 shadow">
                      <form class="dropdown-clickable text-grey-d2">
                        <div class="dropdown-body my-25">
                          <div class="px-2 px-md-3">
                            <input type="text" class="form-control shadow-none m-0" placeholder="Enter Keywords to Search ...">
                          </div>
                        </div>

                        <div class="dropdown-footer py-2 text-center pos-rel border-t-1 brc-secondary-l2">
                          <button type="button" class="btn px-4 btn-sm btn-primary" data-dismiss="dropdown">Find</button>
                          <button type="reset" class="btn btn-sm btn-outline-secondary">Clear</button>
                        </div>
                      </form>
                    </div>
                  </li>


                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="text-140 far fa-heart text-yellow-l3"></i>
                      <span class="d-lg-none ml-2 text-yellow-l3">
                              Bookmark
                          </span>
                    </a>
                  </li>


                  <li class="nav-item px-3 py-3">
                    <span class="text-white p-2 border-b-3 brc-white-tp5 bgc-h-white-tp9 radius-t-1">
                          <i class="fa fa-phone fa-flip-horizontal text-125 text-green-l4 mr-1"></i>
      
                          <span class="text-90 ml-1 ml-lg-0 d-lg-none d-xl-inline-block">
                              CALL NOW
                          </span>

                    <span class="ml-1 text-600 letter-spacing-1 d-lg-none d-xl-inline-block">
                              11-22-33
                          </span>
                    </span>
                  </li>

                </ul>
              </div>
            </div><!-- .navbar-menu -->



          </div><!-- /.container -->
        </div><!-- /.navbar-inner -->
      </nav>
      <nav class="navbar navbar-expand-lg navbar-white d-none" id="navbar-light">
        <div class="navbar-inner">
          <div class="container">


            <button type="button" class="btn btn-burger burger-times static navbar-toggler collapsed d-flex d-lg-none ml-2" data-toggle="collapse" data-target="#navbarMenu1-light" aria-controls="navbarMenu1-light" aria-expanded="false" aria-label="Toggle navbar menu">
              <span class="bars text-dark-tp3"></span>
            </button><!-- mobile navbar toggler button -->


            <div class="navbar-intro justify-content-xl-between border-0 w-auto">
              <a class="navbar-brand text-dark-tp3 text-180" href="#">
                <i class="fa fa-leaf text-105 text-success-m2 mr-1"></i>
                <span>ACE</span>
                <span class="text-70">Application</span>
              </a><!-- /.navbar-brand -->
            </div><!-- /.navbar-intro -->



            <div class="navbar-menu collapse navbar-collapse navbar-backdrop " id="navbarMenu1-light">

              <div class="navbar-nav">
                <ul class="nav nav-compact-3">

                  <li class="nav-item dropdown dropdown-mega pos-rel dropdown-hover">
                    <a class="btn btn-white btn-text-dark btn-h-default btn-a-default border-0 dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-list-alt mr-2 d-lg-none"></i>
                      Mega
                      <i class="caret fa fa-angle-down d-none d-lg-block"></i>
                      <i class="caret fa fa-angle-left d-block d-lg-none"></i>
                    </a>
                    <div class="p-0 dropdown-menu dropdown-center dropdown-lg border-0 shadow border-t-2 brc-primary-m2 radius-b-2 mt-1 mt-lg-3">
                      <div class="row mx-0">
                        <div class="bgc-white col-lg-6 col-12 p-2 p-lg-3 p-xl-4">
                          <div class="d-flex align-items-center">
                            <div class="pos-rel">
                              <i class="bgc-blue-l3 w-4 h-4 radius-round position-r mr-2 mt-25"></i>
                              <i class="fa fa-edit text-160 text-blue mr-2 mb-3 w-6 h-6 radius-round text-center pt-1 pos-rel"></i>
                            </div>
                            <div>
                              <a href="#" class="d-block py-1px px-1 radius-1 no-underline text-dark-tp3 text-600 bgc-h-primary-l2 text-95">
                                New Post
                              </a>
                              <p class="text-dark-tp4 pl-1">
                                Praesent commodo cursus...
                              </p>
                            </div>
                          </div>

                          <div class="d-flex align-items-center">
                            <div class="pos-rel">
                              <i class="bgc-green-l3 w-4 h-4 radius-round position-r mr-2 mt-25"></i>
                              <i class="far fa-comments text-160 text-green mr-2 mb-3 w-6 h-6 radius-round text-center pt-1 pos-rel"></i>
                            </div>
                            <div>
                              <a href="#" class="d-block py-1px px-1 radius-1 no-underline text-dark-tp3 text-600 bgc-h-primary-l2 text-95">
                                Comments
                              </a>
                              <p class="text-dark-tp4 pl-1">
                                Donec id elit non mi...
                              </p>
                            </div>
                          </div>

                          <div class="d-flex align-items-center">
                            <div class="pos-rel">
                              <i class="bgc-orange-l3 w-4 h-4 radius-round position-r mr-2 mt-25"></i>
                              <i class="far fa-star text-160 text-orange-d2 mr-2 mb-3 w-6 h-6 radius-round text-center pt-1 pos-rel"></i>
                            </div>

                            <div>
                              <a href="#" class="d-block py-1px px-1 radius-1 no-underline text-dark-tp3 text-600 bgc-h-primary-l2 text-95">
                                Favorites
                              </a>
                              <p class="text-dark-tp4 pl-1">
                                Commodo tortor mauri...
                              </p>
                            </div>
                          </div>
                        </div><!-- .col:mega links -->

                        <div class="bgc-white col-lg-6 col-12 p-2 p-lg-3 p-xl-4">
                          <div class="d-flex align-items-center">
                            <div class="pos-rel">
                              <i class="bgc-blue-l3 w-4 h-4 radius-round position-r mr-2 mt-25"></i>
                              <i class="fa fa-globe text-160 text-blue mr-2 mb-3 w-6 h-6 radius-round text-center pt-1 pos-rel"></i>
                            </div>
                            <div>
                              <a href="#" class="d-block py-1px px-1 radius-1 no-underline text-dark-tp3 text-600 bgc-h-primary-l2 text-95">
                                Links
                              </a>
                              <p class="text-dark-tp4 pl-1">
                                Praesent commodo cursus...
                              </p>
                            </div>
                          </div>

                          <div class="d-flex align-items-center">
                            <div class="pos-rel">
                              <i class="bgc-purple-l3 w-4 h-4 radius-round position-r mr-2 mt-25"></i>
                              <i class="far fa-copy text-160 text-purple mr-2 mb-3 w-6 h-6 radius-round text-center pt-1 pos-rel"></i>
                            </div>
                            <div>
                              <a href="#" class="d-block py-1px px-1 radius-1 no-underline text-dark-tp3 text-600 bgc-h-primary-l2 text-95">
                                Documents
                              </a>
                              <p class="text-dark-tp4 pl-1">
                                Donec id elit non mi...
                              </p>
                            </div>
                          </div>

                          <div class="d-flex align-items-center">
                            <div class="pos-rel">
                              <i class="bgc-red-l3 w-4 h-4 radius-round position-r mr-2 mt-25"></i>
                              <i class="fa fa-list text-160 text-danger mr-2 mb-3 w-6 h-6 radius-round text-center pt-1 pos-rel"></i>
                            </div>
                            <div>
                              <a href="#" class="d-block py-1px px-1 radius-1 no-underline text-dark-tp3 text-600 bgc-h-primary-l2 text-95">
                                Mega Menu
                              </a>
                              <p class="text-dark-tp4 pl-1">
                                Commodo tortor mauri...
                              </p>
                            </div>
                          </div>
                        </div><!-- .col:mega links -->
                      </div><!-- .row: mega -->


                      <div class="px-4 mx-0 order-first order-lg-last bgc-primary-l4 border-t-1 brc-secondary-l2">
                        <div class="py-3">
                          <button class="mx-2px btn px-25 py-2 text-100 btn-blue radius-round px-4 border-2">
                            Get Started Now
                          </button>

                          <div class="d-block d-md-inline-block mt-3 mt-md-0">
                            <span class="text-dark-tp3 ml-3">
                                    or call us now to learn more
                                  </span>

                            <b class="text-600">
                              111-222-333
                            </b>
                          </div>
                        </div>
                      </div><!-- .row:megamenu big buttons -->
                    </div>
                  </li>

                  <li class="nav-item dropdown mx-1px">
                    <a class="btn btn-white btn-text-dark btn-h-default btn-a-default border-0" href="#">
                      <i class="fa fa-magic mr-15 opacity-1"></i> Features
                    </a>
                  </li>

                  <li class="nav-item dropdown mx-1px">
                    <a class="btn btn-white btn-h-default btn-a-default border-0" href="#">
                      Contact
                    </a>
                  </li>

                  <li class="nav-item ml-xl-2">
                    <a class="btn btn-lighter-orange text-orange-d3 border-1 d-none d-lg-inline-flex" href="#">
                      *Special Offer*
                    </a>
                    <a class="btn btn-lighter-orange text-orange-d3 d-lg-none" href="#">
                      *Special Offer*
                    </a>
                  </li>
                </ul><!-- /.navbar-nav menu -->
              </div><!-- /.navbar-nav -->

            </div><!-- /.navbar-menu.navbar-collapse -->



            <button type="button" class="d-style mr-2 px-4 navbar-toggler btn btn-burger static collapsed d-flex d-lg-none" data-toggle="collapse" data-target="#navbarMenu2-light" aria-controls="navbarMenu2-light" aria-expanded="false" aria-label="Toggle navbar menu">
              <i class="fa fa-caret-down d-collapsed text-grey-m1 text-80"></i>
              <i class="fa fa-caret-up d-n-collapsed text-grey-m1 text-80"></i>

              <i class="fa fa-user text-orange-d1 ml-2"></i>
            </button><!-- mobile navbar toggler button -->


            <div class="navbar-menu collapse navbar-collapse navbar-backdrop " id="navbarMenu2-light">
              <div class="navbar-nav">
                <ul class="nav">

                  <li class="nav-item dropdown px-lg-2 d-lg-flex flex-column justify-content-center">
                    <a class="d-none d-lg-block h-auto btn btn-outline-blue btn-bold radius-round border-2 dropdown-toggle px-2 px-xl-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      Login
                    </a>

                    <a class="d-lg-none nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-caret-right bgc-blue radius-round text-white py-2 px-3 mr-2"></i>
                      Login
                    </a>

                    <div style="width: 20rem;" data-display="static" class="dropdown-menu dropdown-menu-right overflow-hidden dropdown-animated animated-2 shadow radius-1 p-0 brc-primary-m3 mt-lg-n1 mr-lg-n2">
                      <!-- login dialog -->
                      <h4 class="text-120 mb-3 text-secondary-d3 px-3 mt-3 mb-2">Please enter your details</h4>
                      <hr class="border-dotted brc-default-l2">
                      <form class="dropdown-clickable text-grey-d2">
                        <div class="dropdown-body my-25">
                          <div class="form-group mx-3">
                            <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                              <input placeholder="Username" type="text" class="form-control pr-4 shadow-none" autocomplete="off">
                              <i class="fa fa-user text-grey-m2 ml-n4"></i>
                              <label class="floating-label text-grey-l1 ml-n3">Username</label>
                            </div>
                          </div>

                          <div class="form-group mx-3">
                            <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                              <input placeholder="Password" type="password" class="form-control pr-4 shadow-none" autocomplete="off">
                              <i class="fa fa-key text-grey-m2 ml-n4"></i>
                              <label class="floating-label text-grey-l1 ml-n3">Password</label>
                            </div>
                          </div>

                          <div class="mx-3">
                            <label class="d-inline-block mt-2 text-secondary-d2">
                              <input type="checkbox" class="mr-1">
                              Remember me
                            </label>
                          </div>
                        </div>

                        <div class="dropdown-footer text-center py-25 bgc-default-l4 border-t-1 brc-default-l2">
                          <button type="button" class="btn px-4 py-15 text-95 btn-blue" data-dismiss="dropdown">
                            Login
                          </button>

                          <button type="button" class="btn px-25 py-15 text-95 btn-outline-green btn-bgc-white">
                            Register
                          </button>
                        </div>
                      </form>
                    </div>
                  </li>


                  <li class="nav-item dropdown border-l-1 brc-secondary-l2">
                    <a href="#" class="nav-link dropdown-toggle px-lg-3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      <i class="text-140 fa fa-search text-grey-m1"></i>
                      <span class="d-lg-none ml-2 text-blue-d1">Open Search</span>
                    </a>
                    <div style="width: 20rem;" data-display="static" class="dropdown-menu dropdown-menu-right dropdown-caret dropdown-animated animated-2 shadow radius-1 p-0  border-1 brc-primary-m3 mt-lg-n1 mr-lg-n2">
                      <form class="dropdown-clickable text-grey-d2">
                        <div class="dropdown-body my-25">
                          <div class="px-2 px-md-3">
                            <input type="text" class="form-control shadow-none m-0" placeholder="Enter Keywords to Search ...">
                          </div>
                        </div>

                        <div class="dropdown-footer py-2 text-center pos-rel border-t-1 brc-secondary-l2">
                          <button type="button" class="btn px-4 btn-sm btn-primary" data-dismiss="dropdown">Find</button>
                          <button type="reset" class="btn btn-sm btn-outline-secondary">Clear</button>
                        </div>
                      </form>
                    </div>
                  </li>


                  <li class="nav-item border-l-1 brc-secondary-l2">
                    <a href="#" class="nav-link">
                      <i class="text-140 far fa-heart text-purple-m1"></i>
                      <span class="d-lg-none ml-2 text-purple-d1">
                              Bookmark
                          </span>
                    </a>
                  </li>

                  <li class="nav-item px-3 border-l-1 brc-secondary-l2">
                    <span class="d-flex h-100 align-items-center text-grey-d1 py-3">
                          <i class="fa fa-phone fa-flip-horizontal text-125 text-success-m1 mr-1"></i>
                          
                          <span class="text-90 ml-1 ml-lg-0 d-lg-none d-xl-inline-block">
                              CALL NOW
                          </span>

                    <span class="ml-1 text-600 text-grey-d3 letter-spacing-1 d-lg-none d-xl-inline-block">
                              11-22-33
                          </span>
                    </span>
                  </li>

                </ul>
              </div>
            </div><!-- .navbar-menu -->


          </div><!-- /.container -->
        </div><!-- /.navbar-inner -->
      </nav>
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
                <div class="col-12 col-md-7 d-flex flex-column justify-content-center text-center aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                  <h1 class="align-self-center">
                    <span class="text-110 text-yellow-l3">
                Our tech
            </span>

                    <span class="text-90">
                makes your life easier...
            </span>
                  </h1>

                  <h4 class="my-3 text-white text-120">
                    Start using this amazing app and see instant results!
                  </h4>

                  <h6 class="my-3 text-105  px-3 radius-3px">
                    Or put a slideshow here ...
                  </h6>


                  <div class="mt-3 row justify-content-center align-items-center">
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4 pos-rel">
                      <i class="fa fa-hand-point-right fa-2x position-l ml-n4 mt-2"></i>
                      <select autocomplete="off" class="no-border theme-select form-control ace-select border-1 brc-white-tp9 shadow-none bgc-white-tp10 bgc-h-black-tp10 text-white text-600 h-auto">
                        <option value="" class="text-600">Change Theme/Color</option>
                        <option value="" class="text-secondary-l3">_______________________</option>
                        <option value="darkblue" class="text-primary-d1 text-600">Blue</option>
                        <option value="teal" class="text-green-d1 text-600">Green</option>
                        <option value="purple" class="text-purple-d1 text-600">Purple</option>
                        <option value="" class="text-secondary-l3">_______________________</option>
                        <option value="light" class="bgc-primary-l3">Light</option>
                        <option value="white">White</option>
                      </select>
                    </div>
                  </div>


                  <div class="text-center mt-3">
                    <!-- sample button with custom background -->
                    <button type="button" class="btn btn-info brc-white-tp5 py-2 text-110 px-475 mx-15 mb-1 mb-lg-0">
                      <span class="position-tl w-102 h-102 m-n1px bgc-success-tp4 opacity-5"></span>
                      <span class="pos-rel">
                    Action 1
                </span>
                    </button>

                    <button type="button" class="btn btn-outline-white brc-white-tp3 py-2 text-110 px-475 mx-15">
                      Action 2
                    </button>
                  </div>
                </div><!-- /.col -->


                <div class="col-12 col-md-5 order-first order-md-last mb-4 mb-md-0 aos-init aos-animate" data-aos="fade-left">
                  <img alt="Product Image" src="assets/image/landing/preview.png" class="w-90 1mx-auto">
                </div><!-- /.col -->
              </div><!-- /.row -->

            </div><!-- /#page-intro-dark -->




            <!-- the page intro for light theme -->
            <div id="page-intro-light" class="d-none page-intro pos-rel bgc-primary-l4 py-2 pt-xl-4 py-xl-5 overflow-hidden">

              <!-- some random shapes -->
              <div class="d-none d-lg-block">
                <div class="pos-abs bgc-primary radius-round" style="opacity: 0.25;width:17px; height:17px; top:89%; left:90%;"></div>
                <div class="pos-abs bgc-primary radius-round" style="opacity: 0.36;width:15px; height:15px; top:20%; left:61%;"></div>
                <div class="pos-abs bgc-green radius-round" style="opacity: 0.38;width:10px; height:10px; top:78%; left:93%;"></div>
                <div class="pos-abs bgc-primary radius-round" style="opacity: 0.2;width:12px; height:12px; top:13%; left:64%;"></div>
                <div class="pos-abs bgc-primary radius-round" style="opacity: 0.37;width:18px; height:18px; top:27%; left:88%;"></div>
                <div class="pos-abs bgc-green radius-round" style="opacity: 0.31;width:15px; height:15px; top:32%; left:56%;"></div>
                <div class="pos-abs bgc-primary radius-round" style="opacity: 0.34;width:16px; height:16px; top:35%; left:90%;"></div>
                <div class="pos-abs bgc-green radius-round" style="opacity: 0.36;width:17px; height:17px; top:76%; left:32%;"></div>
                <div class="pos-abs bgc-green radius-round" style="opacity: 0.3;width:14px; height:14px; top:16%; left:91%;"></div>
                <div class="pos-abs bgc-green radius-2px" style="opacity: 0.25;width:17px; height:17px; top:67%; left:96%; transform: rotate(355deg)"></div>
                <div class="pos-abs bgc-primary radius-2px" style="opacity: 0.39;width:19px; height:19px; top:63%; left:58%; transform: rotate(325deg)"></div>
                <div class="pos-abs bgc-orange radius-2px" style="opacity: 0.26;width:23px; height:23px; top:49%; left:58%; transform: rotate(280deg)"></div>
                <div class="pos-abs bgc-primary radius-2px" style="opacity: 0.27;width:12px; height:12px; top:57%; left:92%; transform: rotate(354deg)"></div>
                <div class="pos-abs brc-primary shape-triangle radius-1" style="opacity: 0.39;border-width:0 17px 27px 17px; top:14%; left:63%; transform: rotate(130deg)"></div>
                <div class="pos-abs brc-green shape-triangle radius-1" style="opacity: 0.22;border-width:0 12px 19px 12px; top:15%; left:97%; transform: rotate(346deg)"></div>
                <div class="pos-abs brc-orange shape-triangle radius-1" style="opacity: 0.35;border-width:0 19px 30px 19px; top:69%; left:82%; transform: rotate(319deg)"></div>
                <div class="pos-abs brc-green shape-triangle radius-1" style="opacity: 0.31;border-width:0 19px 30px 19px; top:6%; left:29%; transform: rotate(59deg);"></div>
                <div class="pos-abs brc-orange shape-triangle radius-1" style="opacity: 0.21;border-width:0 14px 22px 14px; top:57%; left:95%; transform: rotate(333deg)"></div>
                <div class="pos-abs brc-primary shape-triangle radius-1" style="opacity: 0.24;border-width:0 16px 25px 16px; top:46%; left:50%; transform: rotate(33deg)"></div>
                <div class="pos-abs bgc-primary radius-round" style="opacity: 0.29;width:18px; height:18px; top:11%; left:78%;"></div>
                <div class="pos-abs bgc-green radius-round" style="opacity: 0.34;width:11px; height:11px; top:10%; left:73%;"></div>
                <div class="pos-abs bgc-orange radius-round" style="opacity: 0.31;width:17px; height:17px; top:39%; left:92%;"></div>
                <div class="pos-abs bgc-orange radius-2px" style="opacity: 0.38;width:19px; height:19px; top:79%; left:14%; transform: rotate(339deg)"></div>
                <div class="pos-abs bgc-primary radius-round" style="opacity: 0.21;width:14px; height:14px; top:85%; left:14%;"></div>
                <div class="pos-abs bgc-green radius-round" style="opacity: 0.27;width:11px; height:11px; top:44%; left:15%;"></div>
                <div class="pos-abs bgc-primary radius-2px" style="opacity: 0.25;width:13px; height:13px; top:32%; left:13%; transform: rotate(331deg)"></div>
              </div>


              <div class="row container container-plus mx-auto mt-4 mb-5">
                <div class="col-12 col-md-7 d-flex flex-column justify-content-center text-center aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                  <h1 class="text-dark-m2 pb-2 align-self-center">
                    <span class="text-blue-d3">
                Our tech
            </span>

                    <span class="text-90">
                makes your life easier...
            </span>
                  </h1>

                  <h4 class="my-3 text-dark-tp2">
                    Start using this amazing app and see instant results!
                  </h4>

                  <h6 class="my-3 bgc-blue-d2 text-120 text-white align-self-center p-2 radius-3px">
                    Or put a slideshow here ...
                  </h6>

                  <div class="mt-1 mb-3">
                    <div class="text-uppercase text-600 text-95 text-dark-m3 mb-1">
                      Get it from
                    </div>

                    <a href="#" class="no-underline">
                      <img alt="Google Play Button" src="assets/image/landing/google-play-badge.png" width="180">
                    </a>

                    <a href="#" class="no-underline">
                      <img alt="Apple Store Button" src="assets/image/landing/app-store-badge.svg" width="145">
                    </a>
                  </div>

                  <div class="mt-0 form-group">
                    <select autocomplete="off" class="theme-select col-12 col-sm-6 col-lg-5 col-xl-4 mx-auto form-control ace-select border-1 bgc-white brc-info-m1 text-dark-m3 h-auto py-1">
                      <option value="" class="text-600">Change Theme/Color</option>
                      <option value="" class="text-secondary-l3">_______________________</option>
                      <option value="darkblue" class="text-primary-d1 text-600">Blue</option>
                      <option value="teal" class="text-green-d1 text-600">Green</option>
                      <option value="purple" class="text-purple-d1 text-600">Purple</option>
                      <option value="" class="text-secondary-l3">_______________________</option>
                      <option value="light" class="bgc-primary-l3">Light</option>
                      <option value="white">White</option>
                    </select>
                  </div>
                </div><!-- /.col -->

                <div class="col-12 col-md-5 order-first order-md-last mb-4 mb-md-0 aos-init aos-animate" data-aos="fade-left">
                  <img alt="Product Image" src="assets/image/landing/preview.png" class="w-90 1mx-auto">
                </div><!-- /.col -->
              </div><!-- /.row -->

            </div><!-- /#page-intro-light -->




            <div class="bgc-white">
              <!-- or use a different color -->

              <div class="container container-plus pos-rel mt-n5 text-center py-2">

                <div class="row mt-n4">
                  <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                    <div class="row my-4">
                      <!-- features -->
                      <div class="col-12 col-md-4 mb-4 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-item radius-2 bgc-white shadow-1 p-4 h-100">
                          <div class="d-inline-block pos-rel text-center py-2 px-3 text-150">
                            <!-- the lines beneath icon -->
                            <div class="rotate-n45 brc-purple-m4 border-t-2 w-75 position-tl mt-35 mr-1"></div>
                            <div class="rotate-n45 brc-purple-m4 border-t-3 w-90 position-br mr-1 mb-425"></div>
                            <div class="rotate-n45 brc-purple-m4 border-t-2 w-90 position-bl mb-4 ml-35"></div>

                            <i class="fa fa-rocket fa-2x text-purple-d1 pos-rel"></i>
                          </div>

                          <h3 class="text-secondary-d3 text-160 my-3">
                            Speed
                          </h3>

                          <p class="text-dark-m3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                          </p>
                        </div>
                      </div>


                      <div class="col-12 col-md-4 mb-4 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="450">
                        <div class="feature-item radius-2 bgc-white shadow-1 p-4 h-100">
                          <div class="d-inline-block pos-rel text-center p-2 text-150">
                            <!-- the lines beneath icon -->
                            <div class="brc-blue-m4 border-t-2 w-75 position-tl mt-3 ml-n2"></div>
                            <div class="brc-blue-m4 border-t-3 w-90 position-lc ml-n1 mt-n2"></div>
                            <div class="brc-blue-m4 border-t-2 w-90 position-bl mb-4 ml-n3"></div>

                            <i class="fa fa-running fa-2x text-blue-d1 pos-rel"></i>
                          </div>

                          <h3 class="text-secondary-d3 text-160 my-3">
                            Flexibility
                          </h3>

                          <p class="text-dark-m3">
                            Praesent commodo cursus magna, vel scelerisque nisl consectetur...
                          </p>
                        </div>
                      </div>


                      <div class="col-12 col-md-4 mb-4 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                        <div class="feature-item radius-2 bgc-white shadow-1 p-4 h-100">
                          <div class="d-inline-block text-center p-2 text-150 pos-rel">
                            <!-- the circles beneath icon -->
                            <div class="brc-orange-m4 border-2 w-3 h-3 radius-round position-tl mt-2 ml-n1"></div>
                            <div class="brc-orange-m4 border-2 w-2 h-2 radius-round position-tr mt-n1 ml-n1"></div>
                            <div class="brc-orange-m4 border-2 w-4 h-4 radius-round position-br mb-2"></div>

                            <i class="fa fa-key fa-2x text-orange pos-rel"></i>
                          </div>

                          <h3 class="text-secondary-d3 text-160 my-3">
                            Security
                          </h3>

                          <p class="text-dark-m3">
                            Nulla vitae elit libero, a pharetra augue mollis interdum...
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
                <div data-aos="zoom-in" class="d-none d-lg-block position-br bgc-purple-l3 mb-5 mr-5 opacity-1 radius-100 aos-init aos-animate" style="width: 180px; max-width: 80vw; height: 180px; max-height: 80vw;"></div>
                <div data-aos="zoom-in" class="d-none d-lg-block position-lc bgc-success-l3 opacity-1 ml-5 mt-5 radius-1 aos-init aos-animate" style="width: 100px; height: 100px;"></div>


                <div class="row pt-45 mt-1 mt-lg-5">
                  <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                    <div class="d-flex flex-column align-items-center flex-md-row align-items-md-start">
                      <div class="radius-2 mt-1 mr-md-5 pos-rel aos-init aos-animate" data-aos="fade">
                        <!-- the small squares -->
                        <div class="position-tl bgc-grey-l3 mt-n45 ml-n45 radius-1" style="width: 100px; height: 100px;"></div>
                        <div class="position-br bgc-brown-l3 mb-n45 mr-n45 radius-1" style="width: 110px; height: 110px;"></div>


                        <div class="overflow-hidden radius-1 pos-rel border-1 p-2px brc-secondary-l2 bgc-white">
                          <img alt="Do More" src="assets/image/landing/do-more.jpg" width="220">
                        </div>
                      </div>


                      <div class="flex-grow-1 text-dark-tp3 mt-4 mt-md-0 ml-md-2">
                        <h3 class="text-primary-d2 my-4 text-center text-md-left aos-init aos-animate" data-aos="fade-up">
                          Increase your productivity with our app
                        </h3>

                        <div data-aos="fade-up" class="aos-init aos-animate">
                          <p>
                            Justo odio, dapibus ac facilisis in, egestas eget quam.
                          </p>
                          <p>
                            Donec id elit non mi porta gravida at eget metus.
                          </p>
                          <p>
                            Onec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo.
                          </p>
                        </div>

                        <p class="mt-md-5 aos-init aos-animate" data-aos="fade-left">
                          <a href="#" class="mt-3 mt-md-4 btn btn-outline-default btn-bold btn-bgc-white">
                            Read More
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
                        <h3 data-aos="fade-up" class="text-primary-d2 my-4 text-center text-md-left aos-init aos-animate">
                          Designed with flexibility in mind
                        </h3>

                        <div data-aos="fade-up" class="aos-init aos-animate">
                          <p>
                            Onec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo.
                            Justo odio, dapibus ac facilisis in, egestas eget quam.
                          </p>
                          <p>
                            Justo odio, dapibus ac facilisis in, egestas eget quam.
                          </p>
                          <p>
                            Donec id elit non mi porta gravida at eget metus.
                          </p>
                        </div>

                        <p class="mt-md-5 aos-init aos-animate" data-aos="fade-right">
                          <a href="#" class="md-3 mt-md-4 btn btn-outline-default btn-bold btn-bgc-white">
                            Read More
                          </a>
                        </p>
                      </div>


                      <div class="radius-2 mt-1 ml-md-5 pos-rel order-first order-md-last aos-init aos-animate" data-aos="fade-left">
                        <!-- the small circles -->
                        <div class="position-tr bgc-primary-l3 mt-n45 mr-n45 radius-100" style="width: 80px; max-width: 80vw; height: 80px; max-height: 80vw;"></div>
                        <div class="position-bl bgc-orange-l3 mb-n5 ml-n45 radius-100" style="width: 100px; max-width: 80vw; height: 100px; max-height: 80vw;"></div>

                        <div class="overflow-hidden radius-1 pos-rel border-1 p-2px brc-secondary-l2 bgc-white">
                          <img alt="Be Flexible" src="assets/image/landing/be-flexible.jpg" width="220">
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
                <hr class="brc-secondary-l3 my-4 my-lg-5">

                <div class="row">
                  <div class="col-12 col-lg-8 mx-auto text-center">
                    <h3 class="text-dark-l1 mb-4 mt-2 text-180 aos-init aos-animate" data-aos="fade-up">
                      So why is everybody choosing us?
                    </h3>

                    <ul class="d-flex flex-column flex-sm-row d-md-inline-flex nav nav-fill nav-tabs nav-tabs-static mx-n3 mx-md-0 py-1 px-1 px-md-0" role="tablist">
                      <li data-aos="fade-up" data-aos-delay="200" class="nav-item mr-2px mb-1 aos-init aos-animate">
                        <a data-toggle="tab" href="#reason1" class="active btn border-1 radius-round py-2 px-35 btn-outline-secondary btn-h-light-green btn-a-green" role="tab" aria-selected="true">
                          State of the art
                        </a>
                      </li>

                      <li data-aos="fade-up" data-aos-delay="300" class="nav-item mx-2px mb-1 aos-init aos-animate">
                        <a data-toggle="tab" href="#reason2" class="btn border-1 radius-round py-2 px-35 btn-outline-secondary btn-h-light-orange btn-a-orange" role="tab" aria-selected="false">
                          Responsive
                        </a>
                      </li>

                      <li data-aos="fade-up" data-aos-delay="400" class="nav-item mx-2px mb-1 aos-init aos-animate">
                        <a data-toggle="tab" href="#reason3" class="btn border-1 radius-round py-2 px-35 btn-outline-secondary btn-h-light-blue btn-a-blue" role="tab" aria-selected="false">
                          Ease of use
                        </a>
                      </li>
                    </ul><!-- /.nav-tabs -->


                    <div data-aos="fade-up" data-aos-delay="300" class="tab-content tab-sliding text-left border-0 mt-5 px-0 aos-init aos-animate">

                      <div class="tab-pane px-3 active show" id="reason1">
                        <div class="d-flex flex-column align-items-center flex-md-row align-items-md-start">
                          <div class="flex-grow-1 text-dark-tp3 mt-4 mt-md-0">
                            <h3 class="text-140 text-secondary-d3 text-center text-md-left mt-md-4">
                              Our tech is bleeding edge and reliable!
                            </h3>

                            <ul class="list-unstyled ml-3 mt-4">
                              <li class="mb-3">
                                <i class="fa fa-caret-right text-125 text-green mr-1"></i>
                                Onec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo.
                              </li>
                              <li class="mb-3">
                                <i class="fa fa-caret-right text-125 text-green mr-1"></i>
                                Justo odio, dapibus ac facilisis in, egestas eget quam.
                              </li>
                              <li>
                                <i class="fa fa-caret-right text-125 text-green mr-1"></i>
                                Donec id elit non mi porta gravida at eget metus.
                              </li>
                            </ul>
                          </div>

                          <div class="d-flex flex-nowrap order-first order-md-last ml-md-4">
                            <!-- the 3 mobile dashboard images -->
                            <div class="mx-n2">
                              <div class="radius-2 shadow-sm border-1 p-2px brc-default-l2 bgc-white">
                                <div class="overflow-hidden radius-1">
                                  <img alt="Product image 1" src="assets/image/landing/mobile-dash2.png" height="220">
                                </div>
                              </div>
                            </div>

                            <div class="mx-n2 pos-rel mt-n25">
                              <div class="radius-2 shadow-sm border-1 p-2px brc-default-l2 bgc-white">
                                <div class="overflow-hidden radius-1">
                                  <img alt="Product image 2" src="assets/image/landing/mobile-dash1.png" height="220">
                                </div>
                              </div>
                            </div>

                            <div class="mx-n2">
                              <div class="radius-2 shadow-sm border-1 p-2px brc-default-l2 bgc-white">
                                <div class="overflow-hidden radius-1">
                                  <img alt="Product image 3" src="assets/image/landing/mobile-dash3.png" height="220">
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
                              <img alt="Product image 4" src="assets/image/landing/ipad.png" height="250">
                            </div>
                          </div>

                          <div class="flex-grow-1 text-dark-tp3 mt-4 mt-md-0">
                            <h3 class="text-140 text-secondary-d3 text-center text-md-left mt-md-4">Fully responsive!</h3>
                            <ul class="list-unstyled ml-3 mt-4">
                              <li class="mb-3">
                                <i class="fa fa-caret-right text-125 text-orange mr-1"></i>
                                Donec id elit non mi porta gravida at eget metus.
                              </li>
                              <li class="mb-3">
                                <i class="fa fa-caret-right text-125 text-orange mr-1"></i>
                                Onec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo.
                              </li>
                              <li>
                                <i class="fa fa-caret-right text-125 text-orange mr-1"></i>
                                Justo odio, dapibus ac facilisis in, egestas eget quam.
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div><!-- /.tab-pane -->


                      <div class="tab-pane px-3" id="reason3">
                        <div class="d-flex flex-column align-items-center flex-md-row align-items-md-start">
                          <div class="flex-grow-1 text-dark-tp3 mt-4 mt-md-0">
                            <h3 class="text-140 text-secondary-d3 text-center text-md-left mt-md-4">
                              Very easy to use!
                            </h3>

                            <ul class="list-unstyled ml-3 mt-4">
                              <li class="mb-3">
                                <i class="fa fa-caret-right text-125 text-blue mr-1"></i>
                                Onec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo.
                              </li>
                              <li class="mb-3">
                                <i class="fa fa-caret-right text-125 text-blue mr-1"></i>
                                Justo odio, dapibus ac facilisis in, egestas eget quam.
                              </li>
                              <li>
                                <i class="fa fa-caret-right text-125 text-blue mr-1"></i>
                                Donec id elit non mi porta gravida at eget metus.
                              </li>
                            </ul>
                          </div>

                          <div class="radius-2 ml-md-4 shadow-sm border-1 p-2px brc-default-l2 bgc-white order-first order-md-last">
                            <div class="overflow-hidden radius-1">
                              <img alt="Product image 5" src="assets/image/landing/layout-code.png" width="320">
                            </div>
                          </div>
                        </div>
                      </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->

                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container -->

            </div>




            <!-- Other features -->
            <div class="d-none">
              <div class="container container-plus pb-45">
                <hr class="brc-secondary-l3 mb-4">

                <div class="row">
                  <div class="col-lg-8 mx-auto">
                    <div class="text-center">
                      <h2 class="text-grey-d3 text-160 mb-45">And other cool features</h2>
                    </div>

                    <div class="row">
                      <div class="col-4 offset-2">
                        <ul class="list-unstyled text-120 text-white">
                          <li class="mb-2 bgc-info-d2 px-35 py-25">
                            <i class="w-5 far fa-clock text-170 align-middle mr-2"></i>
                            <span class="align-middle">24/7 Support</span>
                          </li>

                          <li class="mb-2 bgc-info-d2 px-35 py-25">
                            <i class="w-5 fa fa-code text-170 align-middle mr-2"></i>
                            <span class="align-middle">Fully Documented</span>
                          </li>

                          <li class="mb-2 bgc-info-d2 px-35 py-25">
                            <i class="w-5 fa fa-dice-d6 text-170 align-middle mr-2"></i>
                            <span class="align-middle">Secure Backups</span>
                          </li>
                        </ul>
                      </div>


                      <div class="col-4">
                        <ul class="list-unstyled text-120 text-white">
                          <li class="mb-2 bgc-info-d2 text-white px-35 py-25">
                            <i class="w-5 fa fa-redo text-170 align-middle mr-2"></i>
                            <span class="align-middle">Regular Updates</span>
                          </li>

                          <li class="mb-2 bgc-info-d2 px-35 py-25">
                            <i class="w-5 fa fa-eye text-170 align-middle mr-2"></i>
                            <span class="align-middle">Maximum Privacy</span>
                          </li>

                          <li class="mb-2  bgc-info-d2 px-35 py-25">
                            <i class="w-5 fa fa-rocket text-170 align-middle mr-2"></i>
                            <span class="align-middle">Unmatched Speed</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>





            <div class="bgc-primary-l3">
              <div class="container container-plus py-45">
                <div class="row">
                  <div class="col-12 col-lg-9 mx-auto">
                    <h3 class="text-center text-dark-m3 mb-4 mb-md-5 aos-init aos-animate" data-aos="fade-up">
                      Testimonials
                    </h3>

                    <div class="row justify-content-center">
                      <div class="col-12 col-md-4 mb-2 mb-md-0 minh-100 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                        <div class="text-center bgc-white p-45 radius-1 shadow-md minh-100 d-flex flex-column">
                          <div class="mt-md-n2 mb-3">
                            <img alt="Customer avatar" src="assets/image/avatar/avatar1.jpg" class="mt-md-n5 radius-round border-2 brc-default-m1 p-2px shadow-md">
                          </div>

                          <h4 class="mb-15">
                            Perfect timing
                          </h4>

                          <div>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-grey-l3"></i>
                          </div>

                          <p class="mt-2 text-dark-tp3 text-95">
                            Lorem ipsum dolor sit amet.
                            <br>
                            Adipiscing elit nam at lacus at augue aliquet posuere.
                            <br>
                            Eliquam fringilla elementum varius.
                          </p>

                          <p class="text-600 mb-0 mt-auto">
                            Jason Wells
                          </p>
                        </div>
                      </div><!-- /.col -->


                      <div class="col-12 col-md-4 mb-2 mb-md-0 minh-100 aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                        <div class="text-center bgc-white p-45 radius-1 shadow-md minh-100 d-flex flex-column">
                          <div class="mt-md-n2 mb-3">
                            <img alt="Customer avatar" src="assets/image/avatar/avatar2.jpg" class="mt-md-n5 radius-round border-2 brc-default-m1 p-2px shadow-md">
                          </div>

                          <h4 class="mb-15">
                            Cost effective
                          </h4>

                          <div>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                          </div>

                          <p class="mt-2 text-dark-tp3 text-95">
                            Lorem ipsum dolor sit amet.
                            <br>
                            Eliquam fringilla elementum varius.
                          </p>

                          <p class="text-600 mb-0 mt-auto">
                            Alex Wizard
                          </p>
                        </div>
                      </div><!-- /.col -->


                      <div class="col-12 col-md-4 mb-2 mb-md-0 minh-100 aos-init aos-animate" data-aos="fade-up" data-aos-delay="250">
                        <div class="text-center bgc-white p-45 radius-1 shadow-md minh-100 d-flex flex-column">
                          <div class="mt-md-n2 mb-3">
                            <img alt="Customer avatar" src="assets/image/avatar/avatar3.jpg" class="mt-md-n5 radius-round border-2 brc-default-m1 p-2px shadow-md">
                          </div>

                          <h4 class="mb-15">
                            Blazingly fast
                          </h4>

                          <div>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-orange"></i>
                            <i class="fa fa-star text-grey-l3"></i>
                          </div>

                          <p class="mt-2 text-dark-tp3 text-95">
                            Adipiscing elit nam at lacus at augue aliquet posuere.
                            <br>
                            Eliquam fringilla elementum varius.
                          </p>

                          <p class="text-600 mb-0 mt-auto">
                            Alice Summer
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
                <h3 class="text-center text-dark-tp3 text-160 mb-2 mb-md-4 mb-lg-5 aos-init aos-animate" data-aos="fade-down">
                  Our Packages
                </h3>

                <div>
                  <div class="row col-lg-10 d-flex justify-content-center mx-1 mx-lg-auto mt-3">

                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 px-2 dh-zoom-1">
                      <!-- Basic -->
                      <div data-aos="fade-right" data-aos-delay="200" class="d-style btn btn-outline-default btn-h-outline-blue btn-a-outline-blue bgc-white w-100 border-none border-t-3 radius-b-1 my-2 p-0 pt-2 shadow aos-init aos-animate">

                        <div class="d-flex flex-column align-items-center">

                          <h4 class="pt-1 pb-15 px-4 radius-4 text-110 bgc-blue-l3 text-blue-d3 my-3 radius-1">
                            Basic
                          </h4>

                          <div class="text-secondary-d2 text-130">
                            $<span class="text-200">10</span> / month
                          </div>

                          <hr class="w-90 my-4 brc-secondary-l3">

                          <div class="text-grey text-90 w-100">
                            <ul class="list-unstyled text-left m-0">
                              <li class="mx-4">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span>
                                            <span class="text-110">Donec id elit.</span>
                                Fusce dapibus...
                                </span>
                              </li>

                              <li class="mt-3 mx-4">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110 ">
                                            Placerat duis
                                        </span>
                              </li>

                              <li class="mt-3 mx-4">
                                <i class="fa fa-times text-danger-m3 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                            Tortor mauris
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
                      <div data-aos="fade" data-aos-delay="100" class="d-style active btn btn-outline-default btn-h-outline-green btn-a-outline-green bgc-white w-100 border-none border-t-3 radius-b-1 my-2 p-0 pt-2 shadow aos-init aos-animate">

                        <div class="d-flex flex-column align-items-center">

                          <h4 class="pt-1 pb-15 px-4 radius-4 text-110 bgc-green-l2 text-green-d3 my-3 radius-1">
                            Pro
                          </h4>

                          <div>
                            <div>
                              <s class="text-danger-m3">$<span class="text-110">30</span> / month</s>
                            </div>
                            <div class="text-130">
                              <span class="text-green-d2">$<span class="text-200">20</span> / month</span>
                            </div>
                          </div>

                          <span class="mt-2 badge badge-lg bgc-orange-d1 text-white brc-orange-d1 arrowed-in arrowed-in-right">Special offer</span>

                          <hr class="w-90 my-4 brc-secondary-l3">

                          <div class="text-grey text-90 w-100">
                            <ul class="list-unstyled text-left m-0">
                              <li class="mx-4">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110 text-1">
                                            Everything in Basic...
                                        </span>
                              </li>

                              <li class="mt-3 mx-4">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                            Non diam phasellus
                                        </span>
                              </li>

                              <li class="mt-3 mx-4">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                            Sed adipiscing diam
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
                      <div data-aos="fade-left" data-aos-delay="200" class="d-style btn btn-outline-default btn-h-outline-purple btn-a-outline-purple bgc-white w-100 border-none border-t-3 radius-b-1 my-2 p-0 pt-2 shadow aos-init aos-animate">

                        <div class="d-flex flex-column align-items-center">

                          <h4 class="pt-1 pb-15 px-4 radius-4 text-110 bgc-purple-l3 text-purple-d3 my-3 radius-1">
                            Max
                          </h4>

                          <div class="text-secondary-d2 text-130">
                            $<span class="text-200">50</span> / month
                          </div>

                          <hr class="w-90 my-4 brc-secondary-l3">

                          <div class="text-grey text-90 w-100">
                            <ul class="list-unstyled text-left m-0">
                              <li class="mx-4">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                            Everything in Pro...
                                        </span>
                              </li>

                              <li class="mt-3 mx-4">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                            In fermentum et
                                        </span>
                              </li>

                              <li class="mt-3 mx-4">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                            Molestie nunc non
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
                  <div class="col-lg-6 col-xl-5 mx-auto aos-init aos-animate" data-aos="fade-up">
                    <h3 class="text-white text-center text-180 mb-3">
                      Sign up for our newsletter
                    </h3>

                    <p class="text-white-tp1 mb-4">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur
                    </p>

                    <div>
                      <div class="px-0 col-12 col-sm-8 col-lg-10 mx-auto radius-round bgc-white input-group">
                        <input placeholder="Your email address" type="text" class="form-control form-control-lg radius-round shadow-none border-0 text-dark">
                        <a href="#" class="btn radius-round btn-pink text-600 text-110 px-4 m-3px">
                          Join
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>





            <div class="footer h-auto">
              <div class="footer-inner py-45">
                <div class="container container-plus aos-init aos-animate" data-aos="fade">
                  <div class="row">
                    <div class="col-12 col-lg-5">
                      <h2 class="text-dark-m3">
                        <i class="fa fa-leaf text-85 mr-1 text-success-m1"></i>
                        ACE
                        <span class="text-75 text-dark-l2">Application</span>
                      </h2>

                      <p class="text-90">
                        Praesent commodo cursus magna!
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
                          <h6 class="text-dark-tp3 text-95 text-600 mb-3">ABOUT</h6>
                          <div>
                            <a href="#" class="text-dark-tp4">Link 1</a>
                            <br>
                            <a href="#" class="text-dark-tp4">Link 2</a>
                          </div>
                        </div>

                        <div class="col-4">
                          <h6 class="text-dark-tp3 text-95 text-600 mb-3">PRODUCTS</h6>
                          <div>
                            <a href="#" class="text-dark-tp4">Product 1</a>
                            <br>
                            <a href="#" class="text-dark-tp4">Product 2</a>
                            <br>
                            <a href="#" class="text-dark-tp4">Product 3</a>
                          </div>
                        </div>

                        <div class="col-4">
                          <h6 class="text-dark-tp3 text-95 text-600 mb-3">CONTACT</h6>
                          <div>
                            <a href="#" class="text-dark-tp4">Email</a>
                            <br>
                            <a href="#" class="text-dark-tp4">Phone</a>
                            <br>
                            <a href="#" class="text-dark-tp4">Address</a>
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
        Copyright © 2021 Ace Company
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


    <!-- include ace.js -->
    <script src="./dist/js/ace.min.js"></script>



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
    <div class="scroll-btn-observe"></div>
</body>
</html>