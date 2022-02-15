<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="includes/@fortawesome/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" href="includes/@fortawesome/fontawesome-free/css/brands.css">
    <link rel="stylesheet" href="includes/@fortawesome/fontawesome-free/css/regular.css">
    <link rel="stylesheet" href="includes/@fortawesome/fontawesome-free/css/solid.css">
    <link rel="stylesheet" href="includes/css/ace.css">
    <link rel="stylesheet" href="includes/css/ace-font.css">
    <link rel="stylesheet" href="includes/@page-style.css">
    <title>Login</title>
    <style>
        .body-container{
            background-image: linear-gradient(#86bd68 ,#57b5da);
        }
    </style>
</head>
<body>
    <div class="body-container">
        <div class="main-container container">
            <div role="main" class="main-content minh-100 justify-content-center">
                <div class="p-2 p-md-4">
                    <div class="row">
                        <div class="shadow radius-1 overflow-hidden bg-white col-12 col-lg-10 offset-lg-1">
                            <div class="row">
                                <div class="d-none d-lg-flex col-lg-5 border-r-1 brc-default-l2 px-0">
                                    <div id="loginBgCarousel" class="carousel slide minw-100 h-100">
                                        <ol class="carousel-indicators d-none">
                                            <li data-target="#loginBgCarousel" data-slide-to="0" class="active bgc-success"></li>
                                            <li data-target="#loginBgCarousel" data-slide-to="1" class="bgc-success"></li>
                                            <li data-target="#loginBgCarousel" data-slide-to="2" class="bgc-success"></li>
                                            <li data-target="#loginBgCarousel" data-slide-to="3" class="bgc-success"></li>
                                        </ol>
                                        <div class="carousel-inner minw-100 h-100">
                                            <div class="carousel-item active minw-100 h-100">
                                                <div style="background-image: url(assets/image/login-bg-1.svg);" class="bgc-primary-l4 d-flex flex-column align-items-center justify-content-center">
                                                    <h1 class="mt-5"><a href="#"><i class="fa fa-leaf text-success-m2 text-125"></i></a></h1>
                                                    <h2 class="text-blue-d1">
                                                        Inventory <span class="text-80 text-dark-tp4">Control</span>
                                                    </h2>
                                                    <div class="mt-5 mx-4 text-120 text-dark-tp4 text-justify"> 
                                                        Inventory management system, friendly, easy and with the best usability on the market.
                                                        <br>
                                                        by wit solutions..
                                                        <hr class="mb-1">
                                                        <div>
                                                            <a id="id-start-carousel" href="#" class="text-sm text-grey d-inline-block mt-3">
                                                                <i class="fas fa-image text-md text-purple-m2 mr-1"></i>
                                                                Change background image
                                                            </a>
                                                            <br>
                                                            <a id="id-remove-carousel" href="#" class="text-sm text-grey d-inline-block mt-3">
                                                                <i class="fas fa-trash-alt text-md text-orange mr-1"></i>
                                                                Remove this section
                                                            </a>
                                                            <br>
                                                            <a id="id-fullscreen" href="#" class="text-sm text-grey d-inline-block mt-3">
                                                                <i class="fa fa-expand text-md text-success-m2 mr-1"></i>
                                                                Make full-size
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="mt-auto mb-4 text-dark-tp3">
                                                        Wit Solutions © 2022
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item minw-100 h-100">
                                                <div style="background-image: url(assets/image/login-bg-2.svg);" class="d-flex flex-column align-items-center justify-content-start">
                                                    <h1 class="mt-5"><i class="fa fa-leaf text-success-m2 text-125"></i></h1>
                                                    <h2 class="text-blue-l1">
                                                        Inventory <span class="text-80 text-dark-tp3">Control</span>
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="carousel-item minw-100 h-100">
                                                <div style="background-image: url(assets/image/login-bg-3.jpg);" class="d-flex flex-column align-items-center justify-content-start">
                                                    <div class="bgc-black-tp4 radius-1 p-3 w-90 text-center my-3 h-100">
                                                        <h1><i class="fa fa-leaf text-success-m2 text-125"></i></h1>
                                                        <h2 class="text-blue-l1">
                                                            inventory <span class="text-80 text-white-tp3">Control</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item minw-100 h-100">
                                                <div style="background-image: url(assets/image/login-bg-4.jpg);" class="d-flex flex-column align-items-center justify-content-start">
                                                    <h1 class="mt-5"><i class="fa fa-leaf text-success-m2 text-125"></i></h1>
                                                    <h2 class="text-blue-d1">
                                                        Inventory <span class="text-80 text-dark-tp3">Control</span>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                                <div class="col-12 col-lg-7 py-lg-5 bgc-white px-0">
                                    <ul class="d-none mt-n4 mb-4 nav nav-tabs nav-tabs-simple justify-content-end" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#id-tab-login" role="tab" aria-controls="login" aria-selected="true">
                                                Login
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#id-tab-signup" role="tab" aria-controls="signup" aria-selected="false">
                                                Signup
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tab-sliding border-0 p-0" data-swipe="right">
                                        <div class="tab-pane active show mh-100 px-3 px-lg-0 pb-3" id="id-tab-login">
                                            <div class="d-none d-lg-block col-md-6 offset-md-3 mt-lg-4 px-0">
                                                <h4 class="text-dark-tp4 border-b-1 brc-grey-l1 pb-1 text-130">
                                                    <i class="fa fa-coffee text-orange-m2 mr-1"></i>
                                                    Welcome Back
                                                </h4>
                                            </div>
                                        <div class="d-lg-none text-secondary-m1 my-4 text-center">
                                            <a href="#"><i class="fa fa-leaf text-success-m2 text-200 mb-4"></i></a>
                                            <h1 class="text-170">
                                                <span class="text-blue-d1">Inventory<span class="text-80 text-dark-tp3">Control</span></span>
                                            </h1>
                                             Welcome back
                                        </div>
                                        <div class="form-row mt-4">
                                            <div class="form-group col-md-6 offset-md-3">
                                                <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                                                    <input type="text" class="form-control form-control-lg pr-4 shadow-none" id="user" placeholder="Username">
                                                    <i class="fa fa-user text-grey-m2 ml-n4"></i>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 offset-md-3 mt-2 mt-md-1">
                                                <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                                                    <input type="password" class="form-control form-control-lg pr-4 shadow-none" id="password" placeholder="Password">
                                                    <i class="fa fa-key text-grey-m2 ml-n4"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6 offset-md-3 text-right text-md-right mt-n2 mb-2">
                                                <a href="#" class="text-primary-m2 text-95" data-toggle="tab" data-target="#id-tab-forgot">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                            <div class="form-group col-md-6 offset-md-3">
                                                <label class="d-inline-block mt-3 mb-0 text-secondary-d2">
                                                    <input type="checkbox" class="mr-1" id="id-remember-me">
                                                    Remember me
                                                </label>
                                                <button id="btn-submit"type="button" class="btn btn-info btn-block btn-md btn-bold mt-2 mb-4">
                                                    Sign In
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-md-6 offset-md-3 d-flex flex-column align-items-center justify-content-center">
                                                <hr class="brc-default-m4 mt-0 mb-2 w-100">
                                                <div class="p-0 px-md-2 text-dark-tp3 my-3">
                                                    Not a member?
                                                    <a class="text-success-m2 text-600 mx-1" data-toggle="tab" data-target="#id-tab-signup" href="#">
                                                        Signup now
                                                    </a>
                                                </div>
                                                <hr class="brc-default-m4 w-100 mb-2">
                                                <div class="mt-n4 bgc-white-tp2 px-3 py-1 text-default-d1 text-90">Or Get Started Using</div>
                                                    <div class="my-2">
                                                        <button type="button" class="btn btn-bgc-white btn-lighter-primary btn-h-primary btn-a-primary border-2 radius-round                                    btn-lg mx-1">
                                                            <i class="fab fa-facebook-f text-110"></i>
                                                        </button>                            
                                                        <button type="button" class="btn btn-bgc-white btn-lighter-blue btn-h-info btn-a-info border-2 radius-round btn-lg px-25                                    mx-1">
                                                            <i class="fab fa-twitter text-110"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-bgc-white btn-lighter-red btn-h-red btn-a-red border-2 radius-round btn-lg px-25                                       mx-1">
                                                            <i class="fab fa-google text-110"></i>
                                                        </button>
                                                    </div>
                                                    <div id="msg-error" class="mt-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="tab-pane mh-100 px-3 px-lg-0 pb-3" id="id-tab-signup" data-swipe-prev="#id-tab-login">
                                               <div class="position-tl ml-3 mt-3 mt-lg-0">
                                                   <a href="#" class="btn btn-light-default bg-transparent" data-toggle="tab" data-target="#id-tab-login"><i class="fa fa-arrow-left"></i></a>
                                               </div>

                                               <div class="d-none d-lg-block col-md-6 offset-md-3 mt-lg-4 px-0">
                                                   <h4 class="text-dark-tp4 border-b-1 brc-grey-l1 pb-1 text-130">
                                                       <i class="fa fa-user text-purple-m1 mr-1"></i>
                                                       Create an Account
                                                   </h4>
                                               </div>

                                               <div class="d-lg-none text-secondary-m1 my-4 text-center">
                                                   <i class="fa fa-leaf text-success-m2 text-200 mb-4"></i>
                                                   <h1 class="text-170">
                                                       <span class="text-blue-d1">Inventory <span class="text-80 text-dark-tp4">Control</span></span>
                                                   </h1>

                                                   Create an Account
                                               </div>

                                               <form class="form-row mt-4">
                                                   <div class="form-group col-md-6 offset-md-3">
                                                       <div class="d-flex align-items-center input-floating-label text-success-m1 brc-success-m2">
                                                           <input type="text" class="form-control form-control-lg pr-4 shadow-none" id="id-signup-email" autocomplete="off">
                                                           <i class="fa fa-envelope text-grey-m2 ml-n4"></i>
                                                           <label class="floating-label text-grey-l1 text-100 ml-n3" for="id-signup-email">Email</label>
                                                       </div>
                                                   </div>

                                                   <div class="form-group col-md-6 offset-md-3 mt-1">
                                                       <div class="d-flex align-items-center input-floating-label text-success-m1 brc-success-m2">
                                                           <input type="text" class="form-control form-control-lg pr-4 shadow-none" id="id-signup-username" autocomplete="off">
                                                           <i class="fa fa-user text-grey-m2 ml-n4"></i>
                                                           <label class="floating-label text-grey-l1 text-100 ml-n3" for="id-signup-username">Username</label>
                                                       </div>
                                                   </div>

                                                   <div class="form-group col-md-6 offset-md-3 mt-1">
                                                       <div class="d-flex align-items-center input-floating-label text-success-m1 brc-success-m2">
                                                           <input type="password" class="form-control form-control-lg pr-4 shadow-none" id="id-signup-password" autocomplete="off">
                                                           <i class="fa fa-key text-grey-m2 ml-n4"></i>
                                                           <label class="floating-label text-grey-l1 text-100 ml-n3" for="id-signup-password">Password</label>
                                                       </div>
                                                   </div>

                                                   <div class="form-group col-md-6 offset-md-3 mt-1">
                                                       <div class="d-flex align-items-center input-floating-label text-success-m1 brc-success-m2">
                                                           <input type="password" class="form-control form-control-lg pr-4 shadow-none" id="id-signup-password2" autocomplete="off">
                                                           <i class="fas fa-sync-alt text-grey-m2 ml-n4"></i>
                                                           <label class="floating-label text-grey-l1 text-100 ml-n3" for="id-signup-password2">Confirm Password</label>
                                                       </div>
                                                   </div>

                                                   <div class="d-none form-group col-md-6 offset-md-3 my-2">
                                                       <label class="text-secondary-m3 text-110 mb-25">
                                                           Choose membership type
                                                       </label>
                                                       <div class="row d-flex mx-1 mx-lg-0 btn-group btn-group-toggle" data-toggle="buttons">

                                                           <div class="col-12 offset-sm-2 col-sm-3 px-1">
                                                               <label class="shadow-sm d-style border-1 w-100 my-1 py-3 bgc-white-tp2 btn-brc-tp btn btn-light-secondary btn-h-light-primary btn-a-light-primary radius-3">
                                                               <input type="radio" name="payments" id="payments1" autocomplete="off" class="invisible pos-abs">

                                                               <span class="d-flex flex-column align-items-center">
                                                                   <div class="font-bolder flex-grow-1">
                                                                       Free
                                                                   </div>
                                                               </span>

                                                               </label>
                                                           </div>

                                                           <div class="col-12 col-sm-6 px-1">
                                                               <label class="shadow-sm d-style border-2 w-100 my-1 py-3 bgc-white-tp2 btn-brc-tp btn btn-light-secondary btn-h-light-success btn-a-light-success radius-3">
                                                               <input type="radio" name="payments" id="payments2" autocomplete="off" class="invisible pos-abs">
                                                               <span class="d-flex flex-column align-items-center">

                                                                   <span class="position-tr mr-2">
                                                                       <span class="v-active pos-abs">
                                                                           <i class="fa fa-crown text-orange text-110"></i>
                                                                       </span>
                                                                       <span class="v-n-active">
                                                                           <i class="fa fa-crown text-secondary-l3 text-110"></i>
                                                                       </span>
                                                                   </span>

                                                                   <div class="font-bolder flex-grow-1">
                                                                       Premium
                                                                   </div>
                                                               </span>
                                                               </label>
                                                           </div>

                                                       </div>

                                                   </div>

                                                   <div class="form-group col-md-6 offset-md-3 mt-2">
                                                       <label class="d-inline-block mt-3 mb-0 text-secondary-d2">
                                                           <input type="checkbox" class="mr-1" id="id-agree">
                                                           <span class="text-secondary-d2">I have read and agree to <a href="#" class="text-blue">terms</a></span>
                                                       </label>

                                                       <button type="button" class="btn btn-success btn-block btn-md btn-bold mt-2 mb-3">
                                                           Sign Up
                                                       </button>
                                                   </div>
                                               </form>


                                               <div class="form-row w-100"><div class="col-12 col-md-6 offset-md-3 d-flex flex-column align-items-center justify-content-center">

                                                   <hr class="brc-default-m4 mt-0 mb-2 w-100">

                                                   <div class="p-0 px-md-2 text-dark-tp4 my-3">
                                                       Already a member?
                                                       <a class="text-blue-m2 text-600 mx-1" data-toggle="tab" data-target="#id-tab-login" href="#">
                                                           Login here
                                                       </a>
                                                   </div>

                                                   <hr class="brc-default-m4 w-100 mb-2">
                                                   <div class="mt-n4 bgc-white-tp2 px-3 py-1 text-default-d1 text-90">Or Register Using</div>

                                                   <div class="mt-2 mb-3">
                                                       <button type="button" class="btn btn-primary border-2 radius-round btn-lg mx-1">
                                                           <i class="fab fa-facebook-f text-110"></i>
                                                       </button>

                                                       <button type="button" class="btn btn-blue border-2 radius-round btn-lg px-25 mx-1">
                                                           <i class="fab fa-twitter text-110"></i>
                                                       </button>

                                                       <button type="button" class="btn btn-danger border-2 radius-round btn-lg px-25 mx-1">
                                                           <i class="fab fa-google text-110"></i>
                                                       </button>
                                                   </div>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane mh-100 px-3 px-lg-0 pb-3" id="id-tab-forgot" data-swipe-prev="#id-tab-login">
                                            <div class="position-tl ml-3 mt-2">
                                                <a href="#" class="btn btn-light-default bg-transparent" data-toggle="tab" data-target="#id-tab-login"><i class="fa                             fa-arrow-left"></i></a>
                                            </div>

                                            <div class="col-md-6 offset-md-3 mt-5 px-0">
                                                <h4 class="pt-4 pt-md-0 text-dark-tp4 border-b-1 brc-grey-l1 pb-1 text-130">
                                                    <i class="fa fa-key text-brown-m2 mr-1"></i>
                                                    Recover Password
                                                </h4>
                                            </div>

                                            <form class="form-row mt-4">
                                                <div class="form-group col-md-6 offset-md-3">
                                                    <label class="text-secondary-m1 mb-3">
                                                        Enter your email address and we'll send you the instructions:
                                                    </label>
                                                    <div class="d-flex align-items-center">
                                                        <input type="email" class="form-control form-control-lg pr-4 shadow-none" id="id-recover-email" placeholder="Email"                             autocomplete="off">
                                                        <i class="fa fa-envelope text-grey-m2 ml-n4"></i>
                                                    </div>
                                                </div>


                                                <div class="form-group col-md-6 offset-md-3 mt-1">
                                                    <button type="button" class="btn btn-warning btn-block btn-md btn-bold mt-2 mb-4">
                                                        Continue
                                                    </button>
                                                </div>
                                            </form>


                                            <div class="form-row w-100"><div class="col-12 col-md-6 offset-md-3 d-flex flex-column align-items-center justify-content-center">

                                                <hr class="brc-default-m4 mt-0 mb-2 w-100">

                                                <div class="p-0 px-md-2 text-dark-tp4 my-3">
                                                    <a class="text-blue-m2 text-600" data-toggle="tab" data-target="#id-tab-login" href="#">
                                                        Back to Login
                                                    </a>
                                                </div>


                                            </div>
                                        </div>               
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-lg-none my-3 text-white-tp1 text-center">
                    <i class="fa fa-leaf text-success-l3 mr-1 text-110"></i> Wit Solutions © 2022
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- <input class="form-control" id="user" type="text">
        <input class="form-control"id="password" type="text">
        <button class="btn btn-primary"id="btn-submit">Acessar</button> -->
<script src="controller/controller_login.js"></script>
<script src="includes/jquery.js"></script>
<script src="includes/popper.js"></script>
<script src="includes/bootstrap.js"></script>
<script src="includes/ace.js"></script>
<script src="includes/@page-script.js"></script>
<script src="includes/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>
