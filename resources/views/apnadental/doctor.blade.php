@extends('apnadental.master')

@section("content")
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
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
                    @foreach ($doctors as $doctor)
                        <div class="strip_list wow fadeIn">
                            <a href="#0" class="wish_bt"></a>
                            <figure>
                                <a href="<?php echo env('APP_URL'); ?>/doctor-details/{{ $doctor->id }}"><img src="{{ $doctor->image }}" alt="{{ $doctor->company_name }}"></a>
                            </figure>
                            <small>{{ $resultsType }}</small>
                            <h3>{{ $doctor->company_name }}</h3>
                            <p>{{ $doctor->description }}</p>
                            <span class="rating">
                                    @php
                                        $rating = $doctor->rating;
                                        $filledStars = floor($rating);
                                        $halfStar = ($rating - $filledStars) >= 0.5;
                                    @endphp

                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $filledStars)
                                            <i class="icon_star voted"></i>
                                        @elseif ($halfStar && $i == $filledStars + 1)
                                            <i class="icon_star voted half"></i>
                                        @else
                                            <i class="icon_star"></i>
                                        @endif
                                    @endfor

                                    <small>({{ $doctor->rating_count }})</small>
                            </span>
                            <a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1">
                                <img src="<?php echo env('APP_URL'); ?>/public/assets/apnadental/img/badges/badge_1.svg" width="15" height="15" alt="">
                            </a>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mt-2">
                                <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                              
                                    <a href="tel:+91{{ $doctor->phone }}" class="btn_listing">Get a Free Call now</a>
                                    <div class="vr"></div>
                                    <a href="{{ $doctor->map_url }}" target="_blank">Directions</a>
                               
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                                  
                                    <form>
                                        <div class="form-check d-flex align-items-center gap-2 mb-0">
                                            <input type="checkbox" class="form-check-input mb-1" id="12">
                                            <label class="form-check-label m-0 lh-0" for="compareDoctor12">Compare Doctor</label>
                                        </div>
                                    </form>
                                    <div>                                    
                                        @if(!Auth::check())
                                            <div>
                                                <a class="bookNow btn_outline_pink" data-company-name="{{ $doctor->company_name }}" data-bookId="{{ $doctor->id }}" href="javascript:void(0)">Book now</a>
                                            </div>
                                        @else
                                            <div>
                                                <a class="bookNow btn_outline_pink" data-bookId="{{ $doctor->id }}" href="javascript:void(0)">Book now</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @if (!Auth::check())
                        <div class="login_card card px-3 py-4 mb-4" style="display:none" id="slotCard{{ $doctor->id }}">
                            <div class="row align-items-center g-4">
                                <div class="col-12 col-md-6">
                                    <img class="mb-3" src="{{ asset('public/assets/img/apna_dental_logo.svg') }}" alt="brand logo" width="100px">
                                    <h6 class="h5">Stay protected with Term Life Insurance</h6>
                                    <p>Secure the future of your family with Rs. 1Cr. Life Cover starting $425/month</p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <form class="text-center bg-light px-3 py-4 hadow-sm rounded-3" id="otpDoctorForm">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="phone_no" class="form-control" placeholder="Enter Phone Number">
                                        </div>                                                                                       
                                        <div id="otp" class="inputs d-flex flex-row justify-content-start mb-3"> 
                                            <input class="m-1 p-1 text-center form-control rounded" type="text" placeholder="0" id="first" maxlength="1" /> 
                                            <input class="m-1 p-1 text-center form-control rounded" type="text" placeholder="0" id="second" maxlength="1" /> 
                                            <input class="m-1 p-1 text-center form-control rounded" type="text" placeholder="0" id="third" maxlength="1" /> 
                                            <input class="m-1 p-1 text-center form-control rounded" type="text" placeholder="0" id="fourth" maxlength="1" /> 
                                            <input class="m-1 p-1 text-center form-control rounded" type="text" placeholder="0" id="fifth" maxlength="1" /> 
                                            <input class="m-1 p-1 text-center form-control rounded" type="text" placeholder="0" id="sixth" maxlength="1" /> 
                                        </div> 
                                          
                                        <input class="btn_1 rounded-2 btn-primary w-100" id="login-button-2" type="submit" value="Book a Slot Now">
                                        <div class="text-danger error-message"></div>    
                                        <small class="mt-2 d-block">Life Insurance partner will get in touch with you soon.</small>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!--div class="card p-3 mb-3"-->
                            {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
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
                            </ul> --}}

                            {{-- <div class="tab-content py-3" id="myTabContent" data-secondary-category="{{ $doctor->secondary_category }}">
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
                                
                                <div class="tab-pane fade" id="slot_{{ $doctor->id }}" data-secondary-category="{{ $doctor->secondary_category }}" role="tabpanel"
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
                            </div> --}}
                        <!--/div-->


                        <div class="card p-3 mb-3" id="slot_{{ $doctor->id }}" data-secondary-category="{{ $doctor->secondary_category }}" style="display:none">
                            <!-- ... Tabs and their content ... -->
                            <div class="tab-content py-3" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <form id="booking-form">
                                        <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                                            <div>
                                                <input type="hidden" name="booking_date" id="booking-date">
                                                <input type="hidden" name="start_time" id="start-time">
                                                <input type="hidden" name="end_time" id="end-time">
                                                <div class="d-flex gap-2">
                                                    <!-- Date Input -->
                                                    <div>
                                                        <label for="datepicker">Select Date:</label>
                                                        <input type="date" id="datepicker{{ $doctor->id }}" class="form-control" required>
                                                    </div>
                                                    <div>
                                                        <label for="start-time-select">Select Start Time:</label>
                                                        <input type="time" id="start_time{{ $doctor->id }}" class="form-control" required>
                                                    </div>
                                                    <!-- End Time Input -->
                                                    <div>
                                                        <label for="end-time-select">Select End Time:</label>
                                                        <input type="time" id="end_time{{ $doctor->id }}" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Checkbox buttons for slots can remain as they are -->
                                            <!-- ... Checkbox buttons ... -->
                            
                                            <button type="button" id="bookAppointment{{ $doctor->id }}" class="btn btn-primary book-appointment-cls">Book Appointment</button>
                                        </div> 
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Patient From Starts Here  -->
                        <div class="shadow patient-detail-modal mb-3 p-3" style="display:none" id="patient_{{ $doctor->id }}">
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item py-3">
                                               <h4><i class="icon-home-1 text-primary"></i><span id="name_{{ $doctor->id }}"><span></h4>
                                            </li>
                                            <li class="list-group-item py-3">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <p class="mb-1">On 18 Sep,2023</p>
                                                        <a href="#">Change date & Time</a>
                                                    </div>
                                                    <p class="mb-1">On 18 Sep,2023</p>
                                                </div>
    
    
                                            </li>
                                            <li class="list-group-item py-3">
                                                <div class="d-flex">
                                                    
                                                </div>
                                            </li>
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
                                                <input class="form-check-input me-2" type="radio" name="gridRadios" id="myself" value="myself" checked>
                                                Myself
                                            </label>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label class="form-check-label mb-0 service-for rounded" for="gridRadios2">
                                                <input class="form-check-input me-2" type="radio" name="gridRadios" id="somelse" value="somelse">
                                                Someone Else
                                            </label>
                                        </div>
                                     
                                        <div class="col-12 my-3">
                                            <h6 class="text-black mb-0">Please provide followning infomation about user:</h6>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label for="fname{{ $doctor->id }}" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="fname{{ $doctor->id }}">
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label for="phone{{ $doctor->id }}" class="form-label">Mobile</label>
                                            <input type="number" class="form-control" id="phone{{ $doctor->id }}">
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label for="email{{ $doctor->id }}" class="form-label">Your Email</label>
                                            <input type="email" class="form-control" id="email{{ $doctor->id }}">
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
                                            <button type="button confirmBooking" class="btn btn-primary w-100">Sign in</button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>

                    @endforeach

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

                {{$doctors->links()}}

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
                                        src="<?php echo env('APP_URL'); ?>/public/assets/apnadental/img/badges/badge_1.svg"
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
                                        src="<?php echo env('APP_URL'); ?>/public/assets/apnadental/img/badges/badge_1.svg"
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
                                        src="<?php echo env('APP_URL'); ?>/public/assets/apnadental/img/badges/badge_1.svg"
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
    $(document).ready(function(){
        $(".bookNow").click(function(){

            $(".login_card").hide();

            let bookID = $(this).attr("data-bookId");
            let companyName = $(this).attr("data-company-name");
            
            localStorage.setItem("doctorID", bookID);
            localStorage.setItem("company_name", companyName);

            $(`#slotCard${bookID}`).fadeIn(1000);
            $(`#slot_${bookID}`).fadeIn();
        });

        $(".book-appointment-cls").click(function () {
            // Get the values of the fields
            var datepickerValue = $("#datepicker" + localStorage.getItem("doctorID")).val();
            var startTimeValue = $("#start_time" + localStorage.getItem("doctorID")).val();
            var endTimeValue = $("#end_time" + localStorage.getItem("doctorID")).val();

            if (!datepickerValue || !startTimeValue || !endTimeValue) {
                alert("Please fill out all the fields.");
                return;
            }

            var timeFormat = /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/;
            if (!timeFormat.test(startTimeValue) || !timeFormat.test(endTimeValue)) {
                alert("Please enter valid time in HH:MM format.");
                return;
            }

            // Parse time values to compare
            var startTime = new Date("2000-01-01T" + startTimeValue + ":00");
            var endTime = new Date("2000-01-01T" + endTimeValue + ":00");

            if (startTime >= endTime) {
                alert("End time must be later than start time.");
                return;
            }

            $("#patient_" + localStorage.getItem("doctorID")).fadeIn();
            // $("#fname_" + localStorage.getItem("doctorID")).val(localStorage.getItem("user_name"));
            // $("#email_" + localStorage.getItem("doctorID")).val(localStorage.getItem("user_email"));
            // $("#phone_" + localStorage.getItem("doctorID")).val(localStorage.getItem("user_phone_no"));
            $("#name_" + localStorage.getItem("doctorID")).text(localStorage.getItem("company_name"));
        });

        // retrun false;
        // $.ajax({
        //     type: 'POST',
        //     url: "{{ route('booking.post') }}",
        //     data: {
        //         doctor_id: 2, 
        //         selected_date: '2023-11-03',
        //         start_time: '09:00',
        //         end_time: '10:00',
        //         treatment: 'Service Name',
        //         notes: 'Some notes',
        //         _token: '{{ csrf_token() }}',
        //     },
        //     success: function (data) {
        //         // Handle the success response
        //         console.log(data);
        //     },
        //     error: function (error) {
        //         // Handle the error response
        //         console.error(error);
        //     },
        // });

    });

    document.addEventListener("DOMContentLoaded", function(event) {
  
  function OTPInput() {
const inputs = document.querySelectorAll('#otp > *[id]');
for (let i = 0; i < inputs.length; i++) { inputs[i].addEventListener('keydown', function(event) { if (event.key==="Backspace" ) { inputs[i].value='' ; if (i !==0) inputs[i - 1].focus(); } else { if (i===inputs.length - 1 && inputs[i].value !=='' ) { return true; } else if (event.keyCode> 47 && event.keyCode < 58) { inputs[i].value=event.key; if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } else if (event.keyCode> 64 && event.keyCode < 91) { inputs[i].value=String.fromCharCode(event.keyCode); if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } } }); } } OTPInput();

    
});
</script>
@endsection