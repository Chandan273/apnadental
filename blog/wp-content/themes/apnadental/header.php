<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Find easily a doctor and book online an appointment">
        <meta name="author" content="Ansonika">
        <title>APNA DENTAL - Find easily a doctor and book online an appointment</title>
        <!-- Favicons-->
        <link rel="shortcut icon" href="http://localhost/projects/apnadental/public/assets/apnadental/img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="http://localhost/projects/apnadental/public/assets/apnadental/img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="http://localhost/projects/apnadental/public/assets/apnadental/img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="http://localhost/projects/apnadental/public/assets/apnadental/img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="http://localhost/projects/apnadental/public/assets/apnadental/img/apple-touch-icon-144x144-precomposed.png">
        <!-- GOOGLE WEB FONT -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- BASE CSS -->
        <link href="http://localhost/projects/apnadental/public/assets/apnadental/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://localhost/projects/apnadental/public/assets/apnadental/css/style.css" rel="stylesheet">
        <link href="http://localhost/projects/apnadental/public/assets/apnadental/css/menu.css" rel="stylesheet">
        <link href="http://localhost/projects/apnadental/public/assets/apnadental/css/vendors.css" rel="stylesheet">
        <link href="http://localhost/projects/apnadental/public/assets/apnadental/css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
        <!-- YOUR CUSTOM CSS -->
        <link href="http://localhost/projects/apnadental/public/assets/apnadental/css/custom.css" rel="stylesheet">
        <link href="http://localhost/projects/apnadental/public/assets/css/custom.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body>
    <div class="layer"></div>
        <!-- Mobile menu overlay mask -->
        <div id="preloader">
            <div data-loader="circle-side"></div>
        </div>
        <!-- End Preload -->
        <header class="sticky-top bg-white">
            <div class="container-fliud container-lg">
                <div class="row align-items-center justify-content-between py-1 py-lg-3">
                    <div class="col-3 col-lg-2">
                        <a class="d-block brand-logo" href="http://localhost/projects/apnadental">
                        <img max-width="150px" width="100%" src="http://localhost/projects/apnadental/public/assets/img/apna-dental-logo1.svg" alt="apna-dental-logo">
                        </a>
                    </div>
                    <div class="col-9">
                        <div class="ads">
                            <img class="w-100"
                                src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg"
                                alt="google-ads">
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark navbar-cstm-bg">
                <div class="container-fluid container-lg">
                    <ul class="nav d-flex align-items-center flex-nowrap d-lg-none ms-auto">
                        <li class="nav-item dropdown login-dropdown">
                            <a class="dropdown-toggle d-flex align-items-center" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="pe-7s-user h4 text-white mb-0"></i>
                            </a>
                            <div class="dropdown-menu bg-white border-0 rounded shadow p-3">
                                <form class="row g-3">
                                    <div class="col-12">
                                        <h2 class="h4">Login</h2>
                                    </div>
                                    <div class="col-12">
                                        <input type="number" class="form-control" placeholder="Enter Phone Number">
                                    </div>
                                    <div class="col-12">
                                        <div class="hideShowPassword-wrapper"
                                            style="position: relative; display: block; vertical-align: baseline; margin: 0px;">
                                            <input type="number" class="form-control hideShowPassword-field"
                                                placeholder="Enter Otp" name="otp" id="password"
                                                style="margin: 0px; padding-right: 0px;">
                                            <button type="button" role="button" aria-label="Show Password"
                                                title="Show Password" tabindex="0"
                                                class="my-toggle hideShowPassword-toggle-show" aria-pressed="false"
                                                style="position: absolute; right: 0px; top: 50%; margin-top: -15px; display: none;">Show</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <a href="#0" class="forgot"><small>Forgot password?</small></a>
                                    </div>
                                    <div class="col-12">
                                        <input class="btn_1 w-100" type="submit" value="Login">
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="http://localhost/projects/apnadental/register"><i class="pe-7s-add-user text-white h4 mb-0"></i></a>
                        </li>
                        <li class="nav-item">
                            <div class="position-relative">
                                <i class="pe-7s-map-marker position-absolute top-50 start-0 translate-middle-y ms-2"></i>
                                <input type="text" id="apna_location" class="form-control ps-4" placeholder="Find Location">
                                <input type="hidden" id="latitude" name="latLong" />
                                <input type="hidden" id="longitude" name="latLong" />
                            </div>
                        </li>
                        <li class="nav-item ms-3">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon text-white"></span>
                            </button>
                        </li>
                    </ul>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="http://localhost/projects/apnadental">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                speciality
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                Dr. By Treatment
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Oral health</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/projects/apnadental/blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/projects/apnadental/service">Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/projects/apnadental/about-us">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/projects/apnadental/contact-us">Contact us</a>
                            </li>
                        </ul>
                        <div class="d-none d-lg-block">
                            <ul class="nav align-items-center">
                                <li class="nav-item dropdown login-dropdown">
                                    <a class="dropdown-toggle d-flex align-items-center" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="pe-7s-user h4 text-white mb-0"></i>
                                    </a>
                                    <div class="dropdown-menu bg-white border-0 rounded shadow p-3">
                                        <form class="row g-3" id="otp-login-form" action="http://localhost/projects/apnadental/otp-login" method="POST">
                                            <input type="hidden" name="_token" value="xk31eP83DnyOOGpwf8uxPaSt7kRbl6R9wtQxca0w">                                                                            
                                            <div class="col-12">
                                                <h2 class="h4">Login</h2>
                                            </div>
                                            <div class="col-12">
                                                <input type="text" name="phone_no" class="form-control" placeholder="Enter Phone Number">
                                            </div>
                                            <div class="col-12">
                                                <div class="hideShowPassword-wrapper"
                                                    style="position: relative; display: block; vertical-align: baseline; margin: 0px;">
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter OTP" name="otp" id="password"
                                                        style="margin: 0px; padding-right: 0px;">
                                                    <button type="button" role="button" aria-label="Show Password"
                                                        title="Show Password" tabindex="0"
                                                        class="my-toggle hideShowPassword-toggle-show" aria-pressed="false"
                                                        style="position: absolute; right: 0px; top: 50%; margin-top: -15px; display: none;">Show</button>
                                                </div>
                                            </div>
                                            <div id="error-message" class="text-danger"></div>
                                            <div class="col-12">
                                                <input class="btn_1 w-100" id="login-button" type="submit" value="Login">
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="http://localhost/projects/apnadental/register"><i class="pe-7s-add-user text-white h4 mb-0"></i></a>
                                </li>
                                <li class="nav-item">
                                    <div class="position-relative">
                                        <i class="pe-7s-map-marker position-absolute top-50 start-0 translate-middle-y ms-2"></i>
                                        <input type="text" id="apna_location" class="form-control ps-4" placeholder="Find Location">
                                        <input type="hidden" id="latitude" name="latLong" />
                                        <input type="hidden" id="longitude" name="latLong" />
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- /header -->