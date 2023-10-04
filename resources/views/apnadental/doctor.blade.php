@extends('apnadental.master')
@section("content")

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<main class="doctor-page">
    <div id="results" class="" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4><strong>Showing 10</strong> of 140 results</h4>
                </div>
                <div class="col-md-6">
                    <div class="search_bar_list">
                        <input type="text" class="form-control" placeholder="Ex. Specialist, Name, Doctor...">
                        <input type="submit" value="Search">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="filters_listing">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <h6>Type</h6>
                    <div class="switch-field">
                        <input type="radio" id="all" name="type_patient" value="all" checked="">
                        <label for="all">All</label>
                        <input type="radio" id="doctors" name="type_patient" value="doctors">
                        <label for="doctors">Doctors</label>
                        <input type="radio" id="clinics" name="type_patient" value="clinics">
                        <label for="clinics">Clinics</label>
                    </div>
                </li>
                <li>
                    <h6>Sort by</h6>
                    <select name="orderby" class="selectbox" sb="48985461" style="display: none;">
                        <option value="Closest">Closest</option>
                        <option value="Best rated">Best rated</option>
                        <option value="Men">Men</option>
                        <option value="Women">Women</option>
                    </select>
                </li>
                <li>
                    <h6>Sort by</h6>
                    <div class="dropdown">
                        <form>
                            <button type="button" class="btn btn-primary dropdown-toggle rounded-0"
                                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                Select a Treatment
                            </button>

                            <ul class="dropdown-menu px-2 rounded-0">
                                <li class="list-item float-none">
                                    <label class="form-check-label" for="dropdownCheck1">
                                        Periodontics
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck1">
                                    </label>

                                </li>

                                <li class="list-item float-none">
                                    <label class="form-check-label" for="dropdownCheck2">
                                        Pedodontics
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                                    </label>
                                </li>

                            </ul>
                        </form>
                    </div>


                </li>
            </ul>
        </div>
    </div>

    <!-- post cartegory  -->
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-12 col-lg-8 col-xl-9">
                <div>
                    <!-- 1st. doctor  -->
                    <div class="strip_list wow fadeIn">
                        <a href="#0" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html">
                                <img src="http://via.placeholder.com/565x565.jpg" alt="" class="w-100">
                            </a>
                        </figure>
                        <small>Pediatrician</small>
                        <h3>Dr. Cornfield</h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....
                        </p>
                        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                            <small>(145)</small></span>
                        <a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level"
                            class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
                        <ul class="d-flex align-items-center flex-wrap gap-2">
                            <li><a href="tel:+0123456789" class="btn_listing">Get a Free Call now</a></li>
                            <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                    target="_blank">Directions</a></li>
                            <li class="ms-lg-auto">
                                <form>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Compare Doctor</label>
                                    </div>
                                </form>
                            </li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>

                    <!-- Book now Button click after auth  -->
                    <div class="card px-3 py-4 mb-4">
                        <div class="row align-items-center g-4">
                            <div class="col-12 col-md-6">
                                <img class="mb-3" src="{{ asset('public/assets/img/apna_dental_logo.svg') }}"
                                    alt="brand logo" width="100px">
                                <h6 class="h5">Stay protected with Term Life Insurance</h6>
                                <p>Secure the future of your family with Rs. 1Cr. Life Cover starting $425/month</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <form class="text-center">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="number" aria-describedby="emailHelp"
                                            placeholder="Mobile Number">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            placeholder="OTP">
                                    </div>
                                    <button type="submit" class="btn_1 rounded-2 btn-primary w-100">Book a Slot
                                        Now</button>
                                    <small class="mt-2 d-block">Life Insurance partner will get in touch with you
                                        soon.</small>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end  -->

                    <div class="shadow patient-detail-modal mb-3 p-3">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="card">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                           <h4><i class="icon-home-1"></i>In-clinic Appointment</h4>
                                        </li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <h3 class="mb-4">Patient Details</h3>
                                <form class="row">
                                   
                                    <div class="col-12 mb-3">
                                        <h6 class="text-black mb-0">This in-clinic appointment is for:</h6>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <label class="form-check-label mb-0 service-for rounded" for="gridRadios1">
                                            <input class="form-check-input me-2" type="radio" name="gridRadios"
                                                id="gridRadios1" value="option1" checked>
                                        
                                            Myself
                                        </label>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <label class="form-check-label mb-0 service-for rounded" for="gridRadios2">
                                            <input class="form-check-input me-2" type="radio" name="gridRadios"
                                                id="gridRadios2" value="option2">                                        
                                                Someone Else
                                        </label>
                                    </div>
                                 
                                    <div class="col-12 my-3">
                                        <h6 class="text-black mb-0">Please provide followning infomation about user:</h6>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <label for="f_name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="f_name">
                                    </div>
                                    <div class="col-12 mb-2">
                                        <label for="moble" class="form-label">Mobile</label>
                                        <input type="number" class="form-control" id="mobile">
                                    </div>
                                    <div class="col-12 mb-2">
                                        <label for="inputEmail3" class="form-label">Your Email</label>
                                        <input type="email" class="form-control" id="inputEmail3">
                                    </div>
                                    <div class="col-12 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                            Get update on Whatsapp number +91987654321
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>




                    <div class="card p-3 mb-3">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">
                                    <h5>25 Sep 2023</h5>
                                    <p class="mb-2 text-danger">No Slot Available</p>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-tab-pane" type="button" role="tab"
                                    aria-controls="profile-tab-pane" aria-selected="false">
                                    <h5>30 Sep 2023</h5>
                                    <p class="mb-2 text-success">4 Slot Available</p>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#contact-tab-pane" type="button" role="tab"
                                    aria-controls="contact-tab-pane" aria-selected="false">
                                    <h5>16 October 2023</h5>
                                    <p class="mb-2 text-success">6 Slot Available</p>
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content py-3" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                aria-labelledby="home-tab" tabindex="0">
                                <form action="">
                                    <div class="d-flex gap-2">
                                        <div>
                                            <input type="checkbox" class="btn-check" name="time" id="one-pm"
                                                autocomplete="off">
                                            <label class="btn btn-outline-primary" for="one-pm">01:00 PM</label><br>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="btn-check" name="time" id="two-pm"
                                                autocomplete="off" disabled>
                                            <label class="btn btn-outline-secondary" for="two-pm">02::00 PM</label><br>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="btn-check" name="time" id="three-pm"
                                                autocomplete="off">
                                            <label class="btn btn-outline-primary" for="three-pm">03:00 PM</label><br>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                aria-labelledby="profile-tab" tabindex="0">
                                <form action="">
                                    <div class="d-flex gap-2">
                                        <div>
                                            <input type="checkbox" class="btn-check" name="time" id="four-pm"
                                                autocomplete="off">
                                            <label class="btn btn-outline-primary" for="four-pm">04:00 PM</label><br>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="btn-check" name="time" id="five-pm"
                                                autocomplete="off" disabled>
                                            <label class="btn btn-outline-secondary" for="five-pm">05::00 PM</label><br>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="btn-check" name="time" id="six-pm"
                                                autocomplete="off">
                                            <label class="btn btn-outline-primary" for="six-pm">06:00 PM</label><br>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                aria-labelledby="contact-tab" tabindex="0">
                                <form action="">
                                    <div class="d-flex gap-2">
                                        <div>
                                            <input type="checkbox" class="btn-check" name="time" id="one-pm1"
                                                autocomplete="off">
                                            <label class="btn btn-outline-primary" for="one-pm1">01:00 PM</label><br>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="btn-check" name="time" id="two-pm2"
                                                autocomplete="off" disabled>
                                            <label class="btn btn-outline-secondary" for="two-pm2">02::00 PM</label><br>
                                        </div>
                                        <div>
                                            <input type="checkbox" class="btn-check" name="time" id="three-pm3"
                                                autocomplete="off">
                                            <label class="btn btn-outline-primary" for="three-pm3">03:00 PM</label><br>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- 2nd. doctor  -->
                    <div class="strip_list wow fadeIn">
                        <a href="#0" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
                        </figure>
                        <small>Psicologist</small>
                        <h3>Dr. Shoemaker</h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....
                        </p>
                        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                            <small>(145)</small></span>
                        <a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level"
                            class="badge_list_1"><img src="img/badges/badge_2.svg" width="15" height="15" alt=""></a>
                        <ul class="d-flex align-items-center flex-wrap gap-2">
                            <li><a href="tel:+0123456789" class="btn_listing">Get a Free Call now</a></li>
                            <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                    target="_blank">Directions</a></li>
                            <li class="ms-lg-auto">
                                <form>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Compare Doctor</label>
                                    </div>
                                </form>
                            <li>

                            
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>

                    <!-- 3rd. doctor  -->
                    <div class="strip_list wow fadeIn">
                        <a href="#0" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
                        </figure>
                        <small>Pediatrician</small>
                        <h3>Dr. Lachinet</h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....
                        </p>
                        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                            <small>(145)</small></span>
                        <a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level"
                            class="badge_list_1"><img src="img/badges/badge_3.svg" width="15" height="15" alt=""></a>
                        <ul class="d-flex align-items-center flex-wrap gap-2">
                            <li><a href="tel:+0123456789" class="btn_listing">Get a Free Call now</a></li>
                            <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                    target="_blank">Directions</a></li>
                            <li class="ms-lg-auto">
                                <form>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Compare Doctor</label>
                                    </div>
                                </form>
                            <li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>

                    <!-- Advertising Ads -->
                    <div class="bg-white mb-4 shadow-sm rounded-1">
                        <div class="container ads">
                            <div class="row">
                                <div class="col-12 py-3">
                                    <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg"
                                        alt="" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4st. doctor  -->
                    <div class="strip_list wow fadeIn">
                        <a href="#0" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
                        </figure>
                        <small>Pediatrician</small>
                        <h3>Dr. Cornfield</h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....
                        </p>
                        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                            <small>(145)</small></span>
                        <a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level"
                            class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
                        <ul class="d-flex align-items-center flex-wrap gap-2">
                            <li><a href="tel:+0123456789" class="btn_listing">Get a Free Call now</a></li>
                            <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                    target="_blank">Directions</a></li>
                            <li class="ms-lg-auto">
                                <form>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Compare Doctor</label>
                                    </div>
                                </form>
                            <li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>

                    <!-- 5nd. doctor  -->
                    <div class="strip_list wow fadeIn">
                        <a href="#0" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
                        </figure>
                        <small>Psicologist</small>
                        <h3>Dr. Shoemaker</h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....
                        </p>
                        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                            <small>(145)</small></span>
                        <a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level"
                            class="badge_list_1"><img src="img/badges/badge_2.svg" width="15" height="15" alt=""></a>
                        <ul class="d-flex align-items-center flex-wrap gap-2">
                            <li><a href="tel:+0123456789" class="btn_listing">Get a Free Call now</a></li>
                            <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                    target="_blank">Directions</a></li>
                            <li class="ms-lg-auto">
                                <form>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Compare Doctor</label>
                                    </div>
                                </form>
                            <li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>

                    <!-- 6rd. doctor  -->
                    <div class="strip_list wow fadeIn">
                        <a href="#0" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
                        </figure>
                        <small>Pediatrician</small>
                        <h3>Dr. Lachinet</h3>
                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....
                        </p>
                        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                            <small>(145)</small></span>
                        <a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level"
                            class="badge_list_1"><img src="img/badges/badge_3.svg" width="15" height="15" alt=""></a>
                        <ul class="d-flex align-items-center flex-wrap gap-2">
                            <li><a href="tel:+0123456789" class="btn_listing">Get a Free Call now</a></li>
                            <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                    target="_blank">Directions</a></li>
                            <li class="ms-lg-auto">
                                <form>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Compare Doctor</label>
                                    </div>
                                </form>
                            <li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>

                    <!-- Advertising Ads -->
                    <div class="bg-white mb-4 shadow-sm rounded-1">
                        <div class="container ads">
                            <div class="row">
                                <div class="col-12 py-3">
                                    <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg"
                                        alt="" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>




                <!-- pagination start-->
                <nav aria-label="..." class="mt-3">
                    <ul class="pagination pagination-sm">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <!-- pagination end-->


            </div>
            <aside class="col-12 col-lg-4 col-xl-3">
                <div class="widget">
                    <div class="slider-for">
                        <div class="box_list mb-0 home">
                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" class="wish_bt"
                                aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"></a>
                            <figure>
                                <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg"
                                        class="w-100" alt=""></a>
                                <div class="preview"><span>Read more</span></div>
                            </figure>

                            <div class="wrapper">
                                <small>Psicologist</small>
                                <h3>Dr. Watamaniuk</h3>
                                <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti
                                    cuodo....</p>
                                <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                        class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                    <small>(145)</small></span>

                                <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" class="badge_list_1"
                                    aria-label="Badge Level" data-bs-original-title="Badge Level">
                                    <img class="d-inline"
                                        src="http://localhost/apnadental/public/assets/apnadental/img/badges/badge_1.svg"
                                        width="15" height="15" alt=""></a>
                            </div>

                            <ul>
                                <li><i class="icon-eye-7"></i> 854 Views</li>
                                <li><a href="detail-page.html">Book now</a></li>
                            </ul>
                        </div>
                        <div class="box_list mb-0 home">
                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" class="wish_bt"
                                aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"></a>
                            <figure>
                                <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg"
                                        class="w-100" alt=""></a>
                                <div class="preview"><span>Read more</span></div>
                            </figure>

                            <div class="wrapper">
                                <small>Psicologist</small>
                                <h3>Dr. Watamaniuk</h3>
                                <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti
                                    cuodo....</p>
                                <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                        class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                    <small>(145)</small></span>

                                <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" class="badge_list_1"
                                    aria-label="Badge Level" data-bs-original-title="Badge Level">
                                    <img class="d-inline"
                                        src="http://localhost/apnadental/public/assets/apnadental/img/badges/badge_1.svg"
                                        width="15" height="15" alt=""></a>
                            </div>

                            <ul>
                                <li><i class="icon-eye-7"></i> 854 Views</li>
                                <li><a href="detail-page.html">Book now</a></li>
                            </ul>
                        </div>
                        <div class="box_list mb-0 home">
                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" class="wish_bt"
                                aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"></a>
                            <figure>
                                <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg"
                                        class="w-100" alt=""></a>
                                <div class="preview"><span>Read more</span></div>
                            </figure>

                            <div class="wrapper">
                                <small>Psicologist</small>
                                <h3>Dr. Watamaniuk</h3>
                                <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti
                                    cuodo....</p>
                                <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                        class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                    <small>(145)</small></span>

                                <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" class="badge_list_1"
                                    aria-label="Badge Level" data-bs-original-title="Badge Level">
                                    <img class="d-inline"
                                        src="http://localhost/apnadental/public/assets/apnadental/img/badges/badge_1.svg"
                                        width="15" height="15" alt="">
                                </a>
                            </div>

                            <ul>
                                <li><i class="icon-eye-7"></i> 854 Views</li>
                                <li><a href="detail-page.html">Book now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ads  -->
                <div class="ads">
                    <div class="row">
                        <div class="col-12 py-3">
                            <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/10/newspaper-rec300d.jpg"
                                alt="right side ads" width="100%">
                        </div>
                    </div>
                </div>

                <!-- recent post  -->
                <div class="widget">
                    <div class="widget-title">
                        <h4>Recent Posts</h4>
                    </div>
                    <ul class="comments-list">
                        <li class="d-flex gap-2 mb-3">
                            <a href="#0">
                                <img src="http://via.placeholder.com/160x160.jpg" alt="" width="100px">
                            </a>
                            <div>
                                <h3 class="fs-6"><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                                <small>11.08.2016</small>
                            </div>
                        </li>
                        <li class="d-flex gap-2 mb-3">
                            <a href="#0">
                                <img src="http://via.placeholder.com/160x160.jpg" alt="" width="100px">
                            </a>
                            <div>
                                <h3 class="fs-6"><a href="#" title="">Outdoor Kitchen Decorating: Furnish and
                                        Accessorize...</a></h3>
                                <small>10.08.2016</small>
                            </div>
                        </li>
                        <li class="d-flex gap-2 mb-3">
                            <a href="#0">
                                <img src="http://via.placeholder.com/160x160.jpg" alt="" width="100px">
                            </a>
                            <div>
                                <h3 class="fs-6"><a href="#" title="">Interior Design Tips: Decorating to
                                        Celebrate...</a></h3>
                                <small>09.08.2016</small>
                            </div>
                        </li>

                    </ul>
                </div>
            </aside>
        </div>
    </div>
</main>
<!-- /main -->


<script>
    $(".slider-for").slick({
        slidesToShow: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false

    });
</script>
@endsection("content")