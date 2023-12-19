@extends('apnadental.master')
@section("content")

<main>
    <div class="home-page-mobile-hidden">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach($sliders as $slider)
            <div class="carousel-item active">
                <img src="{{ asset('public/'.$slider->slider_image) }}" class="d-block w-100"
                    alt="{{ $slider->title }}">
                <div class="carousel-caption w-75 top-50 start-50 translate-middle">
                    <h5 class="text-white">{{ $slider->title }}</h5>
                    <div>{!! $slider->description !!}</div>
                </div>
            </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- /REVOLUTION SLIDER -->

    <!-- search section  -->
    <section class="search-doctor-section">
        <div class="container-fluid container-lg ">
            <form class="row g-0">
                <div class="col-12 col-lg-8">
                    <div class="bg-white shadow p-3 h-100 rounded-start">
                        <h2 class="fs-4">Start Your Search</h2>
                        <div class="row g-3 g-lg-2">
                            <div class="col col-lg-4">
                                <select class="form-select" aria-label="location" id="service-select">
                                    <option selected="">Select a Treatment</option>
                                    @foreach ($services as $service)
                                    <option data-service-id="{{ $service->id }}" value="{{ $service->service_name }}">{{
                                        $service->service_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- <div class="col col-lg-6">
                                <input type="text" name="keyword" id="keywordSearch" class="form-control"
                                    placeholder="Search doctors, clinics, hospitals, etc." value="">
                                <input type="hidden" name="doctor_id" id="doctor_id">
                                <input type="hidden" name="service_id" id="service_id">
                                <input type="hidden" name="secondary_category" id="secondary_category">
                                <input type="hidden" name="type" id="type">
                                <input type="hidden" name="selectedCity" id="selectedCity">
                            </div>
                            <div class="col-12 col-lg-2">
                                <button type="button" class="btn btn-cstm w-100" id="search-button">search</button>
                            </div>
                            <span class="text-danger text-center" id="errMsg"></span> -->


                            <div class="col col-lg-6">
                                <div class="search_bar position-relative border border-1 rounded-3"> 
                                    <input type="text" name="keyword" id="keywordSearch" class="form-control rounded border-0 shadow-none" placeholder="Search doctors, clinics, hospitals, etc." value="">
                                    <input type="hidden" name="doctor_id" id="doctor_id">
                                    <input type="hidden" name="service_id" id="service_id">
                                    <input type="hidden" name="secondary_category" id="secondary_category">
                                    <input type="hidden" name="type" id="type">
                                    <input type="hidden" name="selectedCity" id="selectedCity">                      
                                    <button type="button" class="btn btn-cstm position-absolute top-50 end-0 translate-middle-y rounded-0 rounded-end py-2" id="search-button">search</button>
                                </div>
                            </div>
                            <span class="text-danger text-center" id="errMsg"></span>

                        </div>
                    </div>
                </div>
                <div class="col-4 h-100 d-none d-lg-block">
                    <div class="rihgt p-4 bg-cst-blue text-center rounded-end">
                        <h2 class="fs-6 text-white">Are You A Doctor?</h2>
                        <h3 class="fs-4 fw-bold text-white">Join Our Team</h3>
                        <button class="btn btn-cstm">Join As Doctors</button>
                    </div>
                </div>
            </form>
        </div>
    </section>


    {{-- <div class="hero_map">
        <div id="map_listing"></div>
        <form class="search_wp">
            @csrf
            <div id="custom-search-input">
                <div class="form-row d-flex justify-content-center">
                    <div class="form-group col-md-6">
                        <div class="custom-dropdown">
                            <div class="dropdown-menu" id="doctors-list">
                                <h6 class="dropdown-header">Select Doctor</h6>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        </div>

                        <div class="dropdown service-filter-cls">
                            <div class="dropdown-toggle position-relative" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="pe-7s-search position-absolute"
                                    style="top: 35%; transform: translateY(-50%); left: 10px;"></i>
                                <input type="text" id="input_list" class="form-control pl-5"
                                    placeholder="Search doctors, clinics, hospitals, etc." style="padding-left: 40px;">
                            </div>
                            <ul id="services-dropdown" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @foreach ($services as $service)
                                <li><a class="dropdown-item" href="#" data-sid="{{ $service->id }}">{{
                                        $service->service_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <ul>
                    <li>
                        <input type="radio" id="all" name="radio_search" value="all" checked="">
                        <label for="all">All</label>
                    </li>
                    <li>
                        <input type="radio" id="doctor" name="radio_search" value="doctor">
                        <label for="doctor">Doctor</label>
                    </li>
                    <li>
                        <input type="radio" id="clinic" name="radio_search" value="clinic">
                        <label for="clinic">Clinic</label>
                    </li>
                </ul>
            </div>
        </form>
    </div> --}}
    <!-- /hero_map -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Brand Logo section start -->
    <section class="brand py-5">
        <h2 class="text-uppercase text-center">Our Brand Partner</h2>
        <div class="container">
            <div class="autoplay_brands row mt-2 mt-md-5 gx-4 gy-4 gy-md-0">
                @foreach($brands as $brand)
                <div class="col-12 col-sm-4 col-md-2 text-center">
                    <img src="{{ asset('public/'.$brand->brand_image) }}" alt="{{ $brand->brand_name }}" width="150px">
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        $('.autoplay_brands').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            centerMode: true,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    </script>

    <!-- Treatment section start -->
    <section class="treatment bg-white">
        <div class="container-fluid">
            <div class="row gx-0 align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="row justify-content-center py-5">
                        <div class="col-12 col-sm-12 col-md-9 col-xl-8 col-xxl-6 text-center">
                            <h2 class="fs-5">Treatments</h2>
                            <h3 class="display-6 fw-bold lh-base">General to specialised treatments - all under Dezy's
                                roof.</h3>
                        </div>
                        <div class="col-12 col-sm-10 col-xxl-9">
                            <div class="position-relative text-center card bg-light border border-1 p-5 rounded-4 mt-5">
                                <h5 class="rounded-4 fs-6 position-absolute top-0 start-50 translate-middle py-2 px-3 fw-bold"
                                    style="background-color: rgb(245 237 235);">
                                    <img src="{{ asset('public/assets/img/starTick.svg') }}" width="22" height="22"
                                        alt="star tick" class="me-1">
                                    The Dezy guarantee
                                </h5>
                                <p class="card-text fs-6 lh-base">We guarantee a hassle-free, personalized and holistic
                                    experience powered by best-in-class AI technology under the supervision of
                                    specialized dentists.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="py-5" style="background-color: rgb(247 242 255);">

                        <ul class="nav nav-pills mb-4 justify-content-center gap-2" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill px-4 active" id="pills-all-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab"
                                    aria-controls="pills-all" aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill px-4" id="Correct-my-smile-tab"
                                    data-bs-toggle="pill" data-bs-target="#Correct-my-smile" type="button" role="tab"
                                    aria-controls="Correct-my-smile" aria-selected="false">Correct my smile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill px-4" id="pills-Missing-teeth-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-Missing-teeth" type="button" role="tab"
                                    aria-controls="pills-Missing-teeth" aria-selected="false">Missing teeth &
                                    cavities</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill px-4" id="pills-Clean-teeth-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-Clean-teeth" type="button" role="tab"
                                    aria-controls="pills-Clean-teeth" aria-selected="false">Clean teeth</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill px-4" id="pills-routine-dental-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-routine-dental" type="button"
                                    role="tab" aria-controls="pills-routine-dental" aria-selected="false">Routine dental
                                    checkup</button>
                            </li>
                        </ul>

                        <div class="tab-content px-2" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                                aria-labelledby="pills-all-tab" tabindex="0">
                                <div class="row g-2">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Aligners</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Braces</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Veneers</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Teeth Whitening</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Dental Jewellery</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Implants</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Rootcanal</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Complete Dentures</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Bridges</h5>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Dental Bonding</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Tooth Extraction</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Teeth Cleaning</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Scaling & Root Planing</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="Correct-my-smile" role="tabpanel"
                                aria-labelledby="Correct-my-smile-tab" tabindex="0">
                                <div class="row g-2 flex-wrap">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Aligners</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Braces</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Veneers</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Teeth Whitening</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Dental Jewellery</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Missing-teeth" role="tabpanel"
                                aria-labelledby="pills-Missing-teeth-tab" tabindex="0">
                                <div class="row g-2 flex-wrap">

                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Implants</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Rootcanal</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Complete Dentures</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Bridges</h5>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Dental Bonding</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Tooth Extraction</h5>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Clean-teeth" role="tabpanel"
                                aria-labelledby="pills-Clean-teeth-tab" tabindex="0">
                                <div class="row g-2 flex-wrap">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Teeth Cleaning</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Scaling & Root Planing</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-routine-dental" role="tabpanel"
                                aria-labelledby="pills-routine-dental-tab" tabindex="0">
                                <div class="row g-2 flex-wrap">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Teeth Cleaning</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div
                                            class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick"
                                                width="50px">
                                            <h5 class="card-title">Scaling & Root Planing</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4 pt-2">
                                <button class="btn_1 medium ">Show More...</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Advertising Ads -->
    <div class="bg-white">
        <div class="container ads">
            <div class="row">
                <div class="col-12 py-3">
                    <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg"
                        alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
    <!-- SYMPTOMS & TREATMENTS Start-->
    <section class="sympthoms py-5">
        <div class="container-fluid">
            <div class="row gy-3">
                <h2 class="text-center mb-2 mb-sm-5">SYMPTOMS & TREATMENTS</h2>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                                <img src="{{ asset('public/assets/img/filling-icon.png') }}" alt="filling">
                            </div>
                            <h3 class="fs-6 mt-3">Dental Fillings</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                                <img src="{{ asset('public/assets/img/root-canal-icon.png') }}" alt="filling">
                            </div>
                            <h3 class="fs-6 mt-3">Root Canal Treatment</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                                <img src="{{ asset('public/assets/img/teeth-removal-icon.png') }}" alt="filling">
                            </div>
                            <h3 class="fs-6 mt-3">Wisdom Teeth Removal</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                                <img src="{{ asset('public/assets/img/braces-aligners-icon.png') }}" alt="filling">
                            </div>
                            <h3 class="fs-6 mt-3">Braces & Aligners</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                                <img src="{{ asset('public/assets/img/dental-implant-icon.png') }}" alt="filling">
                            </div>
                            <h3 class="fs-6 mt-3">Dental Implants</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                                <img src="{{ asset('public/assets/img/dentures-icon.png') }}" alt="filling">
                            </div>
                            <h3 class="fs-6 mt-3">Dentures</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                                <img src="{{ asset('public/assets/img/crowns-bridges-icon.png') }}" alt="filling">
                            </div>
                            <h3 class="fs-6 mt-3">Bridges & Crowns</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                                <img src="{{ asset('public/assets/img/childrens-dentistry-icon.png') }}" alt="filling">
                            </div>
                            <h3 class="fs-6 mt-3">Kids Dentistry</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                                <img src="{{ asset('public/assets/img/smile-makeover-icon.png') }}" alt="filling">
                            </div>
                            <h3 class="fs-6 mt-3">Smile Makeover</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                                <img src="{{ asset('public/assets/img/teeth-whitening-icon.png') }}" alt="filling">
                            </div>
                            <h3 class="fs-6 mt-3">Teeth Whitening</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                                <img src="{{ asset('public/assets/img/mouth-ulcers-icon.png') }}" alt="filling">
                            </div>
                            <h3 class="fs-6 mt-3">Mouth Ulcers</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                                <img src="{{ asset('public/assets/img/read-more-icon.png') }}" alt="filling">
                            </div>
                            <h3 class="fs-6 mt-3">View More</h3>
                        </div>
                    </a>
                </div>

                <div class="text-center mt-4 pt-2">
                    <button class="btn_1 medium ">Show More...</button>
                </div>
            </div>
        </div>
    </section>

    <section class="most-viewed-doctors bg_color_1">
        <div class="container py-5">
            <div class="main_title">
                <h2>Most Viewed doctors</h2>
                <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri.</p>
            </div>

            <div class="row gy-4">
                @foreach($doctors as $doctor)

                <div class="col-lg-4 col-md-6">
                    <div class="box_list doctor-card home h-100 position-relative">
                        <a href="<?php echo env('APP_URL'); ?>/doctor-details/{{ $doctor->id }}"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"
                            class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html">
                                @if(!empty($doctor->image))
                                <img src="{{ $doctor->image }}" class="img-fluid" alt="{{ $doctor->company_name }}">
                                @else
                                <img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt="">
                                @endif
                            </a>
                            <div class="preview"><span>Read more</span></div>
                        </figure>

                        <div class="wrapper">
                            <small>{{ $doctor->secondary_category }}</small>
                            <h3>{{ $doctor->company_name }}</h3>
                            <p>{{ $doctor->description }}</p>
                            <div class="d-flex justify-content-between">
                                <span class="rating"><i class="icon_star voted"></i>
                                    @php
                                    $rating = $doctor->rating;
                                    $filledStars = floor($rating);
                                    $halfStar = ($rating - $filledStars) >= 0.5;
                                    @endphp

                                    @for ($i = 1; $i <= 5; $i++) @if ($i <=$filledStars) <i class="icon_star voted"></i>
                                        @elseif ($halfStar && $i == $filledStars + 1)
                                        <i class="icon_star voted half"></i>
                                        @else
                                        <i class="icon_star"></i>
                                        @endif
                                        @endfor

                                        <small>({{ $doctor->rating_count }})</small>
                                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Badge Level" class="badge_list_1">
                                            <img src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}"
                                                width="15" height="15" alt="">
                                        </a>
                                </span>
                                <a href="tel:+{{ $doctor->phone }}" class="btn_listing">Get a Free Call now</a>
                            </div>
                        </div>

                        <ul class="d-flex justify-content-between flex-wrap position-absolute start-0 bottom-0 mb-0">
                            <li>
                                <form>
                                    <div class="form-check align-items-center">
                                        <input type="checkbox" class="form-check-input" id="compareDoctor9">
                                        <label class="form-check-label" for="compareDoctor9">Compare Doctor</label>
                                    </div>
                                </form>
                            </li>
                            <li><a href="javascript:void(0)"
                                    onclick="bookNow({{ $doctor->id }}, '{{ $doctor->company_name }}', '{{ $doctor->secondary_category }}', '{{ $doctor->work_timings }}')">Book
                                    Now</a></li>
                        </ul>
                    </div>
                </div>

                @endforeach
            </div>

            <!-- /row -->
            <p class="text-center add_top_30"><a href="#" class="btn_1 medium">View all Doctors</a></p>
        </div>
        <!-- /container -->
    </section>

    <section class="most-viewed-clinics bg_color_1">
        <div class="container py-5">
            <div class="main_title">
                <h2>Most Viewed Clinics</h2>
                <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri.</p>
            </div>

            <div class="row gy-4">
                @foreach($clinics as $clinic)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="box_list home card h-100 pt-3 pb-5 position-relative">
                        <div class="d-flex justify-content-between mb-3 px-3">
                            <div>
                                <h3 class="h5 txt-primary">{{ $clinic->company_name }}</h3>
                                <h4 class="h6 txt-primary">Sector-1</h4>
                            </div>
                            <div>
                                <a href="<?php echo env('APP_URL'); ?>/doctor-details/{{ $clinic->id }}" class="me-2"><a
                                        href="{{ $clinic->map_url }}" target="_blank">Directions</a></a>
                            </div>
                        </div>
                        <div class="card_body px-3">
                            <div class="row mb-2 g-1">
                                <div class="col-12">
                                    <p>{{ $clinic->description }}</p>
                                </div>
                                <div class="col-auto">
                                    <i class="icon-location-1 h5 txt-primary"></i>
                                </div>
                                <div class="col">
                                    <h3 class="h6">{{ $clinic->locality }}, {{ $clinic->city }}, {{ $clinic->state }},
                                        {{ $clinic->zip_code }}</h3>
                                </div>
                            </div>

                            <div class="row mb-2 g-1">
                                <div class="col-auto">
                                    <i class="icon-phone h5 txt-primary"></i>
                                </div>
                                <div class="col">
                                    <a href="tel:+{{ $clinic->phone }}">
                                        <h3 class="h6">{{ $clinic->phone }}</h3>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <span class="rating">
                                        @php
                                        $rating = $clinic->rating;
                                        $filledStars = floor($rating);
                                        $halfStar = ($rating - $filledStars) >= 0.5;
                                        @endphp

                                        @for ($i = 1; $i <= 5; $i++) @if ($i <=$filledStars) <i class="icon_star voted">
                                            </i>
                                            @elseif ($halfStar && $i == $filledStars + 1)
                                            <i class="icon_star voted half"></i>
                                            @else
                                            <i class="icon_star"></i>
                                            @endif
                                            @endfor
                                            <small>({{ $clinic->rating_count }})</small></span>
                                </div>
                            </div>                           
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 flex-wrap position-absolute start-0 bottom-0 px-3 w-100 py-3">
                                <form>
                                    <div class="form-check align-items-center mb-0">
                                        <input type="checkbox" class="form-check-input" id="12">
                                        <label class="form-check-label" for="compareDoctor12">Compare Doctor</label>
                                    </div>
                                </form>
                                <a class="btn_1" href="javascript:void(0);" onclick="bookNow({{ $clinic->id }}, '{{ $clinic->company_name }}', '{{ $clinic->secondary_category }}', '{{ $clinic->work_timings }}')">Book Now</a>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- /row -->
            <p class="text-center add_top_30"><a href="#" class="btn_1 medium">View all Clinics</a></p>
        </div>
        <!-- /container -->
    </section>

    <!-- Blog section start  -->
    <section class="py-5 blogs-section">
        <h2 class="text-uppercase text-center mb-2 mb-sm-5">latest blogs</h2>
        <div class="container-fluid container-lg">
            <div class="row g-1">
                <div class="col-12 col-sm-6">
                    <a href="<?php echo env('APP_URL'); ?>/blog-details/{{ $blogs[4]->id }}" class="blog-wraper">
                        <img src="{{ asset('public/'.$blogs[4]->blog_image) }}" alt="blog image">
                        <div class="blog-content-wrraper">
                            <span class="post-category small text-white">{{ $blogs[4]->category->name }}</span>
                            <h3 class="text-white">{{ $blogs[4]->title }}</h3>
                            <div class="td-editor-date">
                                <span class="post-author-name text-white">{{ $blogs[4]->created_at->format('Y-M-d')
                                    }}</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row g-1">
                        <div class="col-12">
                            <a href="<?php echo env('APP_URL'); ?>/blog-details/{{ $blogs[5]->id }}"
                                class=" blog-wraper">
                                <img src="{{ asset('public/'.$blogs[5]->blog_image) }}" alt="blog image">
                                <div class="blog-content-wrraper">
                                    <span class="post-category small text-white">{{ $blogs[5]->category->name }}</span>
                                    <h3 class="text-white fs-5">
                                        {{ $blogs[5]->title }}
                                    </h3>

                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="<?php echo env('APP_URL'); ?>/blog-details/{{ $blogs[2]->id }}"
                                class=" blog-wraper">
                                <img src="{{ asset('public/'.$blogs[2]->blog_image) }}" alt="blog image">
                                <div class="blog-content-wrraper">
                                    <span class="post-category small text-white">{{ $blogs[2]->category->name }}</span>
                                    <h3 class="text-white fs-6">
                                        {{ $blogs[2]->title }}
                                    </h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="<?php echo env('APP_URL'); ?>/blog-details/{{ $blogs[3]->id }}"
                                class=" blog-wraper">
                                <img src="{{ asset('public/'.$blogs[3]->blog_image) }}" alt="blog image">
                                <div class="blog-content-wrraper">
                                    <span class="post-category small text-white badge bg-dark rounded-0 fw-normal">{{
                                        $blogs[3]->category->name }}</span>
                                    <h3 class="text-white fs-6">
                                        {{ $blogs[3]->title }}
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advertising Ads -->
    <div class="bg-white">
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




    <!-- Faq start -->
    <section class="faqs pb-5">

        <div class="container">
            <div class="row gy-4">
                <div class="col-12">
                    <div class="heading py-5 px-3">
                        <h2>FAQ</h2>
                        <h3 class="fs-6 fw-light">Can't find the answer you're looking for? We've shared some of our
                            most frequently asked questions to help you out!</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="nav tabs-wrapper flex-md-column" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link fs-6 active" id="v-pills-payment-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment"
                            aria-selected="true">Payment</a>
                        <a class="nav-link fs-6" id="v-pills-delivery-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-delivery" type="button" role="tab" aria-controls="v-pills-delivery"
                            aria-selected="false">Delivery</a>
                        <a class="nav-link fs-6" id="v-pills-orders-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-orders" type="button" role="tab" aria-controls="v-pills-orders"
                            aria-selected="false">Orders</a>
                        <a class="nav-link fs-6" id="v-pills-refund-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-refund" type="button" role="tab" aria-controls="v-pills-refund"
                            aria-selected="false">Refund</a>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-payment" role="tabpanel"
                            aria-labelledby="v-pills-payment-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            What to eat after teeth scaling?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Avoid foods like red cabbage, beets, tomato sauce, and spices, as well as
                                                beverages like coffee, tea, soda, and alcohol that can stain your teeth.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Is scaling good for teeth?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>If your mouth exhibits symptoms of persistent periodontal disease, your
                                                dentist will advise teeth scaling and root planing. These treatments can
                                                lessen the negative consequences of this illness and maintain oral
                                                health.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Is scaling of teeth painful?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>The process is not painful. Even though you will feel discomfort
                                                afterwards, the procedure itself can be finished by injecting a local
                                                anaesthetic into the soft tissue to lessen any discomfort while it is
                                                being done.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-delivery" role="tabpanel"
                            aria-labelledby="v-pills-delivery-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapsefour"
                                            aria-expanded="false" aria-controls="flush-collapsefour">
                                            What to eat after teeth scaling?
                                        </button>
                                    </h2>
                                    <div id="flush-collapsefour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Avoid foods like red cabbage, beets, tomato sauce, and spices, as well as
                                                beverages like coffee, tea, soda, and alcohol that can stain your teeth.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                            aria-expanded="false" aria-controls="flush-collapseFive">
                                            Is scaling good for teeth?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>If your mouth exhibits symptoms of persistent periodontal disease, your
                                                dentist will advise teeth scaling and root planing. These treatments can
                                                lessen the negative consequences of this illness and maintain oral
                                                health.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                            aria-expanded="false" aria-controls="flush-collapseSix">
                                            Is scaling of teeth painful?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>The process is not painful. Even though you will feel discomfort
                                                afterwards, the procedure itself can be finished by injecting a local
                                                anaesthetic into the soft tissue to lessen any discomfort while it is
                                                being done.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-orders" role="tabpanel"
                            aria-labelledby="v-pills-orders-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                            aria-expanded="false" aria-controls="flush-collapseSeven">
                                            What to eat after teeth scaling?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Avoid foods like red cabbage, beets, tomato sauce, and spices, as well as
                                                beverages like coffee, tea, soda, and alcohol that can stain your teeth.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse8"
                                            aria-expanded="false" aria-controls="flush-collapse8">
                                            Is scaling good for teeth?
                                        </button>
                                    </h2>
                                    <div id="flush-collapse8" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>If your mouth exhibits symptoms of persistent periodontal disease, your
                                                dentist will advise teeth scaling and root planing. These treatments can
                                                lessen the negative consequences of this illness and maintain oral
                                                health.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse9"
                                            aria-expanded="false" aria-controls="flush-collapse9">
                                            Is scaling of teeth painful?
                                        </button>
                                    </h2>
                                    <div id="flush-collapse9" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>The process is not painful. Even though you will feel discomfort
                                                afterwards, the procedure itself can be finished by injecting a local
                                                anaesthetic into the soft tissue to lessen any discomfort while it is
                                                being done.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-refund" role="tabpanel"
                            aria-labelledby="v-pills-refund-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse10"
                                            aria-expanded="false" aria-controls="flush-collapse10">
                                            What to eat after teeth scaling?
                                        </button>
                                    </h2>
                                    <div id="flush-collapse10" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Avoid foods like red cabbage, beets, tomato sauce, and spices, as well as
                                                beverages like coffee, tea, soda, and alcohol that can stain your teeth.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /cta_subscribe -->
    <div class="cta_subscribe">
        <div class="container-fluid h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-6 p-0">
                    <div class="block_1">
                        <figure><img src="{{ asset('public/assets/apnadental/img/doctors_icon.svg') }}"
                                alt="Are you a Doctor?"></figure>
                        <h3>Are you a Doctor?</h3>
                        <p>The service allows you to get maximum visibility online and to manage appointments and
                            contacts coming from the site, in a simple and fast way.</p>
                        <a href="register-doctor.html" class="btn_1">Read more</a>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <div class="block_2">
                        <figure><img src="{{ asset('public/assets/apnadental/img/patient_icon.svg') }}"
                                alt="aru you patient"></figure>
                        <h3>Are you a patient?</h3>
                        <p>Choosing a specialist has never been so fast! You can filter search results by location and
                            medical specialization, and book medical examination online.</p>
                        <a href="register.html" class="btn_1">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="confused-help-offcanvas">
        <button title="Confused ? Lets Help you"
            class="btn btn_2 border-1 border-white offcanvas-confused-btn rounded-circle p-0" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                class="icon-help text-white"></i></button>

        <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="offcanvasRight"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header mt-2">
                <h2 class="offcanvas-title text-uppercase" id="offcanvasRightLabel">Clinics</h2>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="slider-clinic">

                    <div class="card border p-3 mx-2">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <h3 class="h5 txt-primary">Max Lab</h3>
                                <h4 class="h6 txt-primary">Sector-1</h4>
                            </div>
                            <div>
                                <a href="#" class="me-2"></a><a
                                    href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                    target="_blank">Directions</a>

                            </div>
                        </div>
                        <div class="card_body">
                            <div class="row mb-2 g-1">
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur
                                        adipisicing elit.
                                        Nostrum, nam.
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <i class="icon-location-1 h5 txt-primary"></i>
                                </div>
                                <div class="col">
                                    <h3 class="h6">C-1 Ground floor, Govt School,
                                        Noida-201301 </h3>
                                </div>
                            </div>

                            <div class="row mb-2 g-1">
                                <div class="col-auto">
                                    <i class="icon-phone h5 txt-primary"></i>
                                </div>
                                <div class="col">
                                    <a href="tel:+4733378901">
                                        <h3 class="h6">+91 1234567890</h3>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <span class="rating"><i class="icon_star voted"></i><i
                                            class="icon_star voted"></i><i class="icon_star voted"></i><i
                                            class="icon_star"></i><i class="icon_star"></i>
                                        <small>(145)</small></span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-4 flex-wrap">
                                <form>
                                    <div class="form-check align-items-center">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Compare
                                            Doctor</label>
                                    </div>
                                </form>
                                <a class="btn_1 " href="#">Book Now</a>
                            </div>
                        </div>

                    </div>

                    <div class="card border p-3 mx-2">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <h3 class="h5 txt-primary">Max Lab</h3>
                                <h4 class="h6 txt-primary">Sector-1</h4>
                            </div>
                            <div>
                                <a href="#" class="me-2"></a><a
                                    href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                    target="_blank">Directions</a>

                            </div>
                        </div>
                        <div class="card_body">
                            <div class="row mb-2 g-1">
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur
                                        adipisicing elit.
                                        Nostrum, nam.
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <i class="icon-location-1 h5 txt-primary"></i>
                                </div>
                                <div class="col">
                                    <h3 class="h6">C-1 Ground floor, Govt School,
                                        Noida-201301 </h3>
                                </div>
                            </div>

                            <div class="row mb-2 g-1">
                                <div class="col-auto">
                                    <i class="icon-phone h5 txt-primary"></i>
                                </div>
                                <div class="col">
                                    <a href="tel:+4733378901">
                                        <h3 class="h6">+91 1234567890</h3>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <span class="rating"><i class="icon_star voted"></i><i
                                            class="icon_star voted"></i><i class="icon_star voted"></i><i
                                            class="icon_star"></i><i class="icon_star"></i>
                                        <small>(145)</small></span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-4 flex-wrap">
                                <form>
                                    <div class="form-check align-items-center">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Compare
                                            Doctor</label>
                                    </div>
                                </form>
                                <a class="btn_1 " href="#">Book Now</a>
                            </div>
                        </div>

                    </div>

                    <div class="card border p-3 mx-2">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <h3 class="h5 txt-primary">Max Lab</h3>
                                <h4 class="h6 txt-primary">Sector-1</h4>
                            </div>
                            <div>
                                <a href="#" class="me-2"></a><a
                                    href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                    target="_blank">Directions</a>

                            </div>
                        </div>
                        <div class="card_body">
                            <div class="row mb-2 g-1">
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur
                                        adipisicing elit.
                                        Nostrum, nam.
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <i class="icon-location-1 h5 txt-primary"></i>
                                </div>
                                <div class="col">
                                    <h3 class="h6">C-1 Ground floor, Govt School,
                                        Noida-201301 </h3>
                                </div>
                            </div>

                            <div class="row mb-2 g-1">
                                <div class="col-auto">
                                    <i class="icon-phone h5 txt-primary"></i>
                                </div>
                                <div class="col">
                                    <a href="tel:+4733378901">
                                        <h3 class="h6">+91 1234567890</h3>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <span class="rating"><i class="icon_star voted"></i><i
                                            class="icon_star voted"></i><i class="icon_star voted"></i><i
                                            class="icon_star"></i><i class="icon_star"></i>
                                        <small>(145)</small></span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-4 flex-wrap">
                                <form>
                                    <div class="form-check align-items-center">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Compare
                                            Doctor</label>
                                    </div>
                                </form>
                                <a class="btn_1 " href="#">Book Now</a>
                            </div>
                        </div>

                    </div>

                    <div class="card border p-3 mx-2">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <h3 class="h5 txt-primary">Max Lab</h3>
                                <h4 class="h6 txt-primary">Sector-1</h4>
                            </div>
                            <div>
                                <a href="#" class="me-2"></a><a
                                    href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                    target="_blank">Directions</a>

                            </div>
                        </div>
                        <div class="card_body">
                            <div class="row mb-2 g-1">
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur
                                        adipisicing elit.
                                        Nostrum, nam.
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <i class="icon-location-1 h5 txt-primary"></i>
                                </div>
                                <div class="col">
                                    <h3 class="h6">C-1 Ground floor, Govt School,
                                        Noida-201301 </h3>
                                </div>
                            </div>

                            <div class="row mb-2 g-1">
                                <div class="col-auto">
                                    <i class="icon-phone h5 txt-primary"></i>
                                </div>
                                <div class="col">
                                    <a href="tel:+4733378901">
                                        <h3 class="h6">+91 1234567890</h3>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <span class="rating"><i class="icon_star voted"></i><i
                                            class="icon_star voted"></i><i class="icon_star voted"></i><i
                                            class="icon_star"></i><i class="icon_star"></i>
                                        <small>(145)</small></span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-4 flex-wrap">
                                <form>
                                    <div class="form-check align-items-center">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Compare
                                            Doctor</label>
                                    </div>
                                </form>
                                <a class="btn_1 " href="#">Book Now</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- CTA fixed positon on stroll start -->
    <div class="footer-cta" id="scroll-triggered-cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="row align-items-center px-2 px-md-3 py-3 mx-2 rounded-pill bg-white shadow">
                        <div class="col-12 col-md-5">
                            <div
                                class="d-flex align-items-center flex-nowrap gap-3 justify-content-center justify-content-lg-start">
                                <img src="{{ asset('public/assets/img/dr-help-experts.png') }}" alt="experts help">
                                <div class="vr"></div>
                                <div>
                                    <h6 class="">Emergency call</h6>
                                    <a class="h4" href="tel:+1234567890">9876543210</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <p class="fs-5 mb-0 text-secondary text-center py-2">- OR -</p>
                        </div>
                        <div class="col-12 col-md-5">
                            <form class="input-group">
                                <input type="email" class="form-control" placeholder="email@example.com"
                                    aria-label="CTA Email" aria-describedby="cta email subscribe input">
                                <button class="btn btn_pink" type="submit" id="button-addon2">Get a Updates</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    
</main>
<!-- /main content -->

<script>
    $(document).ready(function () {
        function getLocation() {
            var latitude = getCookie("latitude");
            var longitude = getCookie("longitude");

            console.log(latitude + ", " + longitude);

            if (latitude === null || longitude === null) {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition, showError);
                } else {
                    console.log("Geolocation is not supported by this browser.");
                }
            } else {
                showPosition({
                    coords: {
                        latitude: parseFloat(latitude),
                        longitude: parseFloat(longitude)
                    }
                });
            }
        }

        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            console.log("Latitude: " + latitude + "\nLongitude: " + longitude);

            // Store latitude and longitude in cookies
            setCookie("latitude", latitude, 365);
            setCookie("longitude", longitude, 365);

            // Fetch and display location name using reverse geocoding
            fetchLocationName(latitude, longitude);
        }

        function showError(error) {
            var errorMessage = "";
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    errorMessage = "User denied the request for Geolocation.";
                    break;
                case error.POSITION_UNAVAILABLE:
                    errorMessage = "Location information is unavailable.";
                    break;
                case error.TIMEOUT:
                    errorMessage = "The request to get user location timed out.";
                    break;
                case error.UNKNOWN_ERROR:
                    errorMessage = "An unknown error occurred.";
                    break;
            }
            console.log(errorMessage);
        }

        function fetchLocationName(latitude, longitude) {
            var apiKey = "AIzaSyAsYL1hrGBbl8KI_DhiULQGaoMfSkQAjA4";
            var apiUrl = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${latitude},${longitude}&key=${apiKey}`;

            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    if (data.results.length > 0) {
                        var addressComponents = data.results[0].address_components;
                        var cityName = getCityNameFromAddress(addressComponents);
                        console.log("City Name:", cityName);

                        // Update input field with city name
                        document.getElementById("apna_location").value = cityName;


                        $.ajax({
                            url: '/projects/apnadental/search-location', // Change the URL to match your route
                            method: 'GET',
                            data: {
                                latitude: latitude,
                                longitude: longitude
                            },
                            success: function (response) {
                                var servicesUl = $("#services-dropdown");
                                servicesUl.empty(); // Clear existing list items

                                $.each(response.services, function (index, service) {
                                    var li = $("<li></li>").appendTo(servicesUl);
                                    var a = $("<a></a>")
                                        .addClass("dropdown-item")
                                        .attr("href", getServiceUrl(service.id, latitude, longitude, cityName, service.service_name))
                                        .attr("data-sid", service.id)
                                        .text(service.service_name)
                                        .appendTo(li);
                                });

                                servicesUl.addClass("show");

                            },
                            error: function () {
                                console.log('Error while sending the AJAX request');
                            }
                        });

                        // Function to construct the dynamic URL
                        function getServiceUrl(serviceId, latitude, longitude, cityName, serviceName) {
                            var baseUrl = "/projects/apnadental/doctors";
                            var queryParams = {
                                results_type: "doctor",
                                service_id: serviceId,
                                latitude: parseFloat(latitude.toFixed(7)),
                                longitude: parseFloat(longitude.toFixed(7)),
                                service_name: serviceName,
                                location_type: "geo location",
                                city: cityName
                            };

                            return baseUrl + "?" + $.param(queryParams);
                        }


                    } else {
                        console.log("Location name not available.");
                    }
                })
                .catch(error => {
                    console.log("Error fetching location name:", error);
                });
        }

        function getCityNameFromAddress(addressComponents) {
            let locality = null;
            let city = null;

            for (let i = 0; i < addressComponents.length; i++) {
                const component = addressComponents[i];
                if (component.types.includes("sublocality_level_1")) {
                    locality = component.long_name;
                } else if (component.types.includes("locality")) {
                    city = component.long_name;
                }
            }

            // Combine locality and city if available, otherwise return unknown
            if (locality && city) {
                return `${locality}, ${city}`;
            } else if (locality) {
                return locality;
            } else if (city) {
                return city;
            } else {
                return "Unknown City";
            }
        }

        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + value + expires + "; path=/";
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i];
                while (cookie.charAt(0) === ' ') {
                    cookie = cookie.substring(1);
                }
                if (cookie.indexOf(nameEQ) === 0) {
                    return cookie.substring(nameEQ.length, cookie.length);
                }
            }
            return null;
        }

        // Call the getLocation function on page load
        window.onload = getLocation;
    });

    document.getElementById('search-button').addEventListener('click', function () {
        const selectedService = document.getElementById('service-select').value;
        const doctor_id = document.querySelector('input[name="doctor_id"]').value;
        const service_id = document.querySelector('input[name="service_id"]').value;
        const secondary_category = document.querySelector('input[name="secondary_category"]').value;
        const type = document.querySelector('input[name="type"]').value;
        const selectedCity = document.querySelector('input[name="selectedCity"]').value;
        const keyword = document.querySelector('input[name="keyword"]').value;

        const selectedOption = document.getElementById('service-select').querySelector('option:checked');
        const serviceId = selectedOption.getAttribute('data-service-id');

        if (keyword !== '') {
            if (serviceId !== "" && serviceId === service_id) {
                let url = "<?php echo env('APP_URL'); ?>" + `/${selectedCity}/specialties/${secondary_category}?type=${type}&service_id=${doctor_id}`;

                window.location.href = url;
            } else {
                $("#errMsg").text("Data Not Found!");
            }
        } else {
            if (selectedService !== '' && selectedService !== "Select a Treatment") {
                let url = `search/doctors?results_type=${selectedService}`;
                window.location.href = url;
            } else {
                $("#errMsg").text("Please select a treatment before searching.");
            }
        }

    });

    var path = "{{ route('autocomplete') }}";
    var data = [];

    $('#keywordSearch').typeahead({
        source: function (query, process) {
            return $.get(path, {
                query: query
            }, function (responseData) {
                data = responseData;
                return process(data.map(function (item) {
                    return item.company_name;
                }));
            });
        },
        updater: function (item) {
            // Find the corresponding city for the selected company_name
            const doctor_id = data.find(dataItem => dataItem.company_name === item).doctor_id;
            const service_id = data.find(dataItem => dataItem.company_name === item).service_id;
            const secondary_category = data.find(dataItem => dataItem.company_name === item).secondary_category;
            const type = data.find(dataItem => dataItem.company_name === item).type;
            const selectedCity = data.find(dataItem => dataItem.company_name === item).city;

            $('#doctor_id').val(doctor_id);
            $('#service_id').val(service_id);
            $('#secondary_category').val(secondary_category);
            $('#type').val(type);
            $('#selectedCity').val(selectedCity);

            return item;
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        const cta = document.getElementById("scroll-triggered-cta");
        const footer = document.querySelector("footer");
        function toggleCTAVisibility() {
            if (window.scrollY >= footer.offsetTop - window.innerHeight) {
                cta.style.position = "initial";
                cta.style.transform = "translateX(0%)";
                cta.style.transform = "translateY(50%)";
            } else {
                cta.style.position = "fixed";
                cta.style.transform = "translateX(-50%)";
            }
        }
        window.addEventListener("scroll", toggleCTAVisibility);
        toggleCTAVisibility();
    });

    $(".slider-clinic").slick({
        slidesToShow: 3,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 567,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],

    });
</script>


@endsection