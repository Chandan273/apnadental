@extends('apnadental.master')
@section("content")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
    :root {
        --primary: #74d1c6;
        --secondary: #3f4079;
        --pink: #e74e84;
    }
    .bg-cst-blue{
        background-color:var(--secondary);
    }

    ul#services-dropdown {
        margin: -20px 0 !important;
    }

    .dropdown.service-filter-cls ul.dropdown-menu.show {
        max-height: 250px;
        overflow: auto;
    }

    .dropdown.service-filter-cls ul.dropdown-menu.show li {
        display: table !important;
    }

    .brand img{
        max-width:196px
    }

    .treatment .nav-pills .nav-link.active {
        background-color: var(--primary);
        color: #fff;
    }

    .treatment .nav-pills .nav-link {
        font-weight: bold;
        color: var(--secondary);
        border: 1px solid var(--primary);
    }

    .faqs .heading {
        background-color: var(--secondary)
    }
    .faqs .heading h2,.faqs .heading h3{
        color:#fff;
    }

    .faqs .nav.tabs-wrapper {
        background-color: var(--secondary)
    }

    .faqs .nav .nav-link {
        color: #fff;
        font-weight: bold;
    }

    .faqs .nav .nav-link.active {
        color: var(--primary);
    }

    .faqs .tab-content .accordion .accordion-header .accordion-button {
        color: var(--secondary);
        font-weight: 500;
    }

    .faqs .tab-content .accordion .accordion-header .accordion-button:focus {
        box-shadow: 0 0 0 0.25rem var(--primary);
    }

    .faqs .tab-content .accordion .accordion-header .accordion-button:not(.collapsed) {
        background-color: #74d1c638;

    }

    .blogs-section .blog-wraper {
        height: 100%;
        position: relative;
        overflow: hidden;
        transition: all 0.6s;
        display: block;
    }

    .blogs-section .blog-wraper .blog-content-wrraper {
        position: absolute;
        width: 100%;
        height: auto;
        bottom: 0%;
        left: 50%;
        transform: translate(-50%, -15%);
        padding: 15px;
        padding-right: 50px;
    }
    .blogs-section .blog-wraper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.5);
        transition: all 0.6s;
    }
    .blogs-section .blog-wraper:hover img {
        transform: scale(1.03);
    }
    .carousel-item img.d-block.w-100 {
        height: 400px;
    }

    .btn-cstm{
        color: #fff;
        background: #e74e84;
        transition: all 0.4s;
    }
    .btn-cstm:hover{
        color: #fff;
        background: #74d1c6;
    }
    .search-doctor-section{
        margin-top:-75px;
        position: relative;
    }

    /* .sympthoms .item-card {
        border-right: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
    } */
    
    .sympthoms .image-wrraper{
        width: 100px;
        height: 100px;
        margin: auto;
        border-radius: 50%;
        border: 2px dotted;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        overflow:hidden;
        transition: all 0.4s;
    }

    .sympthoms .card:hover .image-wrraper{
        transform:scale(1.1);
        border-style: inset;
        border-color:var(--pink);
    }
    .sympthoms .image-wrraper img{
        width: 100%;
        height:100%;
    }
</style>
<main>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://e7.pngegg.com/pngimages/103/232/png-clipart-digital-technology-blue-background-banner-beam-lines-blue-science-and-technology.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-sm-block w-75 top-50 start-50 translate-middle">
              <h5 class="text-white">First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://bbdu.ac.in/wp-content/uploads/2020/06/pharmacy-post-banner-background.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-sm-block w-75 top-50 start-50 translate-middle">
              <h5 class="text-white">Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://t4.ftcdn.net/jpg/04/95/28/65/360_F_495286577_rpsT2Shmr6g81hOhGXALhxWOfx1vOQBa.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-sm-block w-75 top-50 start-50 translate-middle">
              <h5 class="text-white">Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
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
                        <div class="col col-lg-6">
                            <input type="text" name="keyword" class="form-control" placeholder="Search doctors, clinics, hospitals, etc." value="">
                        </div>
                        <div class="col col-lg-4">
                            <select class="form-select" aria-label="location">
                                <option selected>Select a location</option>
                                <option value="1">Australia</option>
                                <option value="2">Canada</option>
                                <option value="3">England</option>
                                <option value="4">India</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-2">
                            <button class="btn btn-cstm w-100">search</button>
                        </div>
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
                            <div class="dropdown-toggle position-relative" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="pe-7s-search position-absolute" style="top: 35%; transform: translateY(-50%); left: 10px;"></i>
                                <input type="text" id="input_list" class="form-control pl-5" placeholder="Search doctors, clinics, hospitals, etc." style="padding-left: 40px;">
                            </div>
                            <ul id="services-dropdown" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @foreach ($services as $service)
                                <li><a class="dropdown-item" href="#" data-sid="{{ $service->id }}">{{ $service->service_name }}</a></li>
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

    <!-- Brand Logo section start -->
    <section class="brand py-5 bg-light">
        <!-- <h2 class="text-uppercase text-center">Our Brand Partner</h2> -->
        <!-- <div class="container">
            <div class="row mt-2 mt-md-5 gx-4 gy-4 gy-md-0">
                <div class="col-12 col-sm-4 col-md-2 text-center">
                    <img src="{{ asset('public/assets/img/ApnaDental.png') }}" alt="brand-logo" width="100%">
                </div>
                <div class="col-12 col-sm-4 col-md-2 text-center">
                    <img src="{{ asset('public/assets/img/ApnaDental.png') }}" alt="brand-logo" width="100%">
                </div>
                <div class="col-12 col-sm-4 col-md-2 text-center">
                    <img src="{{ asset('public/assets/img/ApnaDental.png') }}" alt="brand-logo" width="100%">
                </div>
                <div class="col-12 col-sm-4 col-md-2 text-center">
                    <img src="{{ asset('public/assets/img/ApnaDental.png') }}" alt="brand-logo" width="100%">
                </div>
                <div class="col-12 col-sm-4 col-md-2 text-center">
                    <img src="{{ asset('public/assets/img/ApnaDental.png') }}" alt="brand-logo" width="100%">
                </div>
                <div class="col-12 col-sm-4 col-md-2 text-center">
                    <img src="{{ asset('public/assets/img/ApnaDental.png') }}" alt="brand-logo" width="100%">
                </div>
            </div>

        </div> -->

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-4">
                    <h2 class="text-uppercase text-center text-md-start">Our Brand Partner</h2>
                </div>
                <div class="col-12 col-md-8">
                <div class="row gx-4 gy-4 gy-md-0">
                    <div class="col">
                        <img src="{{ asset('public/assets/img/ApnaDental.png') }}" alt="brand-logo" width="100%">
                    </div>
                    <div class="col">
                        <img src="{{ asset('public/assets/img/ApnaDental.png') }}" alt="brand-logo" width="100%">
                    </div>
                    <div class="col">
                        <img src="{{ asset('public/assets/img/ApnaDental.png') }}" alt="brand-logo" width="100%">
                    </div>
                    <div class="col">
                        <img src="{{ asset('public/assets/img/ApnaDental.png') }}" alt="brand-logo" width="100%">
                    </div>
                    <div class="col">
                        <img src="{{ asset('public/assets/img/ApnaDental.png') }}" alt="brand-logo" width="100%">
                    </div>
                    <div class="col">
                        <img src="{{ asset('public/assets/img/ApnaDental.png') }}" alt="brand-logo" width="100%">
                    </div>
            </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Treatment section start -->
    <section class="treatment bg-white">
        <div class="container-fluid">
            <div class="row gx-0 align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="row justify-content-center py-5">
                        <div class="col-12 col-sm-12 col-md-9 col-xl-8 col-xxl-6 text-center">
                            <h2 class="fs-5">Treatments</h2>
                            <h3 class="display-6 fw-bold lh-base">General to specialised treatments - all under Dezy's roof.</h3>
                        </div>
                        <div class="col-12 col-sm-10 col-xxl-9">
                            <div class="position-relative text-center card bg-light border border-1 p-5 rounded-4 mt-5">
                                <h5 class="rounded-4 fs-6 position-absolute top-0 start-50 translate-middle py-2 px-3 fw-bold" style="background-color: rgb(245 237 235);">
                                    <img src="{{ asset('public/assets/img/starTick.svg') }}" width="22" height="22" alt="star tick" class="me-1">
                                    The Dezy guarantee
                                </h5>
                                <p class="card-text fs-6 lh-base">We guarantee a hassle-free, personalized and holistic experience powered by best-in-class AI technology under the supervision of specialized dentists.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="py-5" style="background-color: rgb(247 242 255);">

                        <ul class="nav nav-pills mb-4 justify-content-center gap-2" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill px-4 active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill px-4" id="Correct-my-smile-tab" data-bs-toggle="pill" data-bs-target="#Correct-my-smile" type="button" role="tab" aria-controls="Correct-my-smile" aria-selected="false">Correct my smile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill px-4" id="pills-Missing-teeth-tab" data-bs-toggle="pill" data-bs-target="#pills-Missing-teeth" type="button" role="tab" aria-controls="pills-Missing-teeth" aria-selected="false">Missing teeth & cavities</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill px-4" id="pills-Clean-teeth-tab" data-bs-toggle="pill" data-bs-target="#pills-Clean-teeth" type="button" role="tab" aria-controls="pills-Clean-teeth" aria-selected="false">Clean teeth</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill px-4" id="pills-routine-dental-tab" data-bs-toggle="pill" data-bs-target="#pills-routine-dental" type="button" role="tab" aria-controls="pills-routine-dental" aria-selected="false">Routine dental checkup</button>
                            </li>
                        </ul>

                        <div class="tab-content px-2" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                                <div class="row g-2">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Aligners</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Braces</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Veneers</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Teeth Whitening</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Dental Jewellery</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Implants</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Rootcanal</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Complete Dentures</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Bridges</h5>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Dental Bonding</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Tooth Extraction</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Teeth Cleaning</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Scaling & Root Planing</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="Correct-my-smile" role="tabpanel" aria-labelledby="Correct-my-smile-tab" tabindex="0">
                                <div class="row g-2 flex-nowrap">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Aligners</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Braces</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Veneers</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Teeth Whitening</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Dental Jewellery</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Missing-teeth" role="tabpanel" aria-labelledby="pills-Missing-teeth-tab" tabindex="0">
                                <div class="row g-2 flex-nowrap">

                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Implants</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Rootcanal</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Complete Dentures</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Bridges</h5>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Dental Bonding</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Tooth Extraction</h5>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Clean-teeth" role="tabpanel" aria-labelledby="pills-Clean-teeth-tab" tabindex="0">
                                <div class="row g-2 flex-nowrap">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Teeth Cleaning</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Scaling & Root Planing</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-routine-dental" role="tabpanel" aria-labelledby="pills-routine-dental-tab" tabindex="0">
                                <div class="row g-2 flex-nowrap">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
                                            <h5 class="card-title">Teeth Cleaning</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="card p-3 text-center h-100 justify-content-between align-items-center">
                                            <img src="{{ asset('public/assets/img/starTick.svg') }}" alt="starTick" width="50px">
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
                    <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg" alt="" width="100%">
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
                            <img src="{{ asset('public/assets/img/filling-icon.png') }}"  alt="filling">
    </div>
                            <h3 class="fs-6 mt-3">Dental Fillings</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                            <img src="{{ asset('public/assets/img/root-canal-icon.png') }}"  alt="filling">
    </div>
                            <h3 class="fs-6 mt-3">Root Canal Treatment</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                            <img src="{{ asset('public/assets/img/teeth-removal-icon.png') }}"  alt="filling">
    </div>
                            <h3 class="fs-6 mt-3">Wisdom Teeth Removal</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                            <img src="{{ asset('public/assets/img/braces-aligners-icon.png') }}"  alt="filling">
    </div>
                            <h3 class="fs-6 mt-3">Braces & Aligners</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                            <img src="{{ asset('public/assets/img/dental-implant-icon.png') }}"  alt="filling">
    </div>
                            <h3 class="fs-6 mt-3">Dental Implants</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                            <img src="{{ asset('public/assets/img/dentures-icon.png') }}"  alt="filling">
    </div>
                            <h3 class="fs-6 mt-3">Dentures</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                            <img src="{{ asset('public/assets/img/crowns-bridges-icon.png') }}"  alt="filling">
    </div>
                            <h3 class="fs-6 mt-3">Bridges & Crowns</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                            <img src="{{ asset('public/assets/img/childrens-dentistry-icon.png') }}"  alt="filling">
    </div>
                            <h3 class="fs-6 mt-3">Kids Dentistry</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                            <img src="{{ asset('public/assets/img/smile-makeover-icon.png') }}"  alt="filling">
    </div>
                            <h3 class="fs-6 mt-3">Smile Makeover</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                            <img src="{{ asset('public/assets/img/teeth-whitening-icon.png') }}"  alt="filling">
    </div>
                            <h3 class="fs-6 mt-3">Teeth Whitening</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                            <img src="{{ asset('public/assets/img/mouth-ulcers-icon.png') }}"  alt="filling">
    </div>
                            <h3 class="fs-6 mt-3">Mouth Ulcers</h3>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <a href="">
                        <div class="card p-3 text-center">
                            <div class="image-wrraper">
                            <img src="{{ asset('public/assets/img/read-more-icon.png') }}"  alt="filling">
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

    <div class="bg_color_1">
        <div class="container py-5">
            <div class="main_title">
                <h2>Most Viewed doctors</h2>
                <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="box_list home">
                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Read more</span></div>
                        </figure>

                        <div class="wrapper">
                            <small>Psicologist</small>
                            <h3>Dr. Watamaniuk</h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                            <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>

                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
                        </div>

                        <ul>
                            <li><i class="icon-eye-7"></i> 854 Views</li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box_list home">
                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Read more</span></div>
                        </figure>

                        <div class="wrapper">
                            <small>Psicologist</small>
                            <h3>Dr. Mantooth</h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                            <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>

                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
                        </div>

                        <ul>
                            <li><i class="icon-eye-7"></i> 854 Views</li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="box_list home">
                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist" class="wish_bt"></a>

                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Read more</span></div>
                        </figure>

                        <div class="wrapper">
                            <small>Psicologist</small>
                            <h3>Dr. Pullman</h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                            <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>

                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="{{ asset('public/assets/apnadental/img/badges/badge_2.svg') }}" width="15" height="15" alt=""></a>
                        </div>

                        <ul>
                            <li><i class="icon-eye-7"></i> 854 Views</li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="box_list home">
                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Read more</span></div>
                        </figure>

                        <div class="wrapper">
                            <small>Psicologist</small>
                            <h3>Dr. Toothaker</h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                            <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>

                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="{{ asset('public/assets/apnadental/img/badges/badge_6.svg') }}" width="15" height="15" alt=""></a>
                        </div>

                        <ul>
                            <li><i class="icon-eye-7"></i> 854 Views</li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="box_list home">
                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Read more</span></div>
                        </figure>

                        <div class="wrapper">
                            <small>Psicologist</small>
                            <h3>Dr. Brilliant</h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                            <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>

                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="{{ asset('public/assets/apnadental/img/badges/badge_6.svg') }}" width="15" height="15" alt=""></a>
                        </div>

                        <ul>
                            <li><i class="icon-eye-7"></i> 854 Views</li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="box_list home">
                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Read more</span></div>
                        </figure>

                        <div class="wrapper">
                            <small>Psicologist</small>
                            <h3>Dr. Crownover</h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                            <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>

                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
                        </div>

                        <ul>
                            <li><i class="icon-eye-7"></i> 854 Views</li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- /row -->
            <p class="text-center add_top_30"><a href="list.html" class="btn_1 medium">View all Doctors</a></p>
        </div>
        <!-- /container -->
    </div>
    <!-- /white_bg -->

    <!-- Blog section start  -->
    <section class="py-5 blogs-section">
        <h2 class="text-uppercase text-center mb-2 mb-sm-5">latest blogs</h2>
        <div class="container-fluid container-lg">
            <div class="row g-1">
                <div class="col-12 col-sm-6">
                    <a href="" class=" blog-wraper">
                        <img src="{{ asset('public/assets/img/blog-big.jpg') }}" alt="blog image">
                        <div class="blog-content-wrraper">
                            <span class="post-category small text-white">Fashion</span>
                            <h3 class="text-white">
                                WordPress News Magazine Charts the Most Chic and Fashionable Women of New York City
                            </h3>
                            <div class="td-editor-date">
                                <span class="post-author-name text-white">Armin Vans</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row g-1">
                        <div class="col-12">
                            <a href="" class=" blog-wraper">
                                <img src="{{ asset('public/assets/img/blog-medium.jpg') }}" alt="blog image">
                                <div class="blog-content-wrraper">
                                    <span class="post-category small text-white">Gadgets</span>
                                    <h3 class="text-white fs-5">
                                        Game Changing Virtual Reality Console Hits the Market
                                    </h3>

                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="" class=" blog-wraper">
                                <img src="{{ asset('public/assets/img/blog-small1.jpg') }}" alt="blog image">
                                <div class="blog-content-wrraper">
                                    <span class="post-category small text-white">Travel</span>
                                    <h3 class="text-white fs-6">
                                        Discover the Most Magical Sunset in Santorini
                                    </h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="" class=" blog-wraper">
                                <img src="{{ asset('public/assets/img/blog-small2.jpg') }}" alt="blog image">
                                <div class="blog-content-wrraper">
                                    <span class="post-category small text-white badge bg-dark rounded-0 fw-normal">Reviews</span>
                                    <h3 class="text-white fs-6">
                                        Computer Filters Noise to Make You a Better Listener
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
                    <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg" alt="" width="100%">
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
                        <h3 class="fs-6 fw-light">Can't find the answer you're looking for? We've shared some of our most frequently asked questions to help you out!</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="nav tabs-wrapper flex-md-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link fs-6 active" id="v-pills-payment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="true">Payment</a>
                        <a class="nav-link fs-6" id="v-pills-delivery-tab" data-bs-toggle="pill" data-bs-target="#v-pills-delivery" type="button" role="tab" aria-controls="v-pills-delivery" aria-selected="false">Delivery</a>
                        <a class="nav-link fs-6" id="v-pills-orders-tab" data-bs-toggle="pill" data-bs-target="#v-pills-orders" type="button" role="tab" aria-controls="v-pills-orders" aria-selected="false">Orders</a>
                        <a class="nav-link fs-6" id="v-pills-refund-tab" data-bs-toggle="pill" data-bs-target="#v-pills-refund" type="button" role="tab" aria-controls="v-pills-refund" aria-selected="false">Refund</a>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-8 col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-payment-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            What to eat after teeth scaling?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Avoid foods like red cabbage, beets, tomato sauce, and spices, as well as beverages like coffee, tea, soda, and alcohol that can stain your teeth.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Is scaling good for teeth?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>If your mouth exhibits symptoms of persistent periodontal disease, your dentist will advise teeth scaling and root planing. These treatments can lessen the negative consequences of this illness and maintain oral health.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Is scaling of teeth painful?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>The process is not painful. Even though you will feel discomfort afterwards, the procedure itself can be finished by injecting a local anaesthetic into the soft tissue to lessen any discomfort while it is being done.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-delivery" role="tabpanel" aria-labelledby="v-pills-delivery-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                            What to eat after teeth scaling?
                                        </button>
                                    </h2>
                                    <div id="flush-collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Avoid foods like red cabbage, beets, tomato sauce, and spices, as well as beverages like coffee, tea, soda, and alcohol that can stain your teeth.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                            Is scaling good for teeth?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>If your mouth exhibits symptoms of persistent periodontal disease, your dentist will advise teeth scaling and root planing. These treatments can lessen the negative consequences of this illness and maintain oral health.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                            Is scaling of teeth painful?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>The process is not painful. Even though you will feel discomfort afterwards, the procedure itself can be finished by injecting a local anaesthetic into the soft tissue to lessen any discomfort while it is being done.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                            What to eat after teeth scaling?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Avoid foods like red cabbage, beets, tomato sauce, and spices, as well as beverages like coffee, tea, soda, and alcohol that can stain your teeth.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                                            Is scaling good for teeth?
                                        </button>
                                    </h2>
                                    <div id="flush-collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>If your mouth exhibits symptoms of persistent periodontal disease, your dentist will advise teeth scaling and root planing. These treatments can lessen the negative consequences of this illness and maintain oral health.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                                            Is scaling of teeth painful?
                                        </button>
                                    </h2>
                                    <div id="flush-collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>The process is not painful. Even though you will feel discomfort afterwards, the procedure itself can be finished by injecting a local anaesthetic into the soft tissue to lessen any discomfort while it is being done.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-refund" role="tabpanel" aria-labelledby="v-pills-refund-tab" tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
                                            What to eat after teeth scaling?
                                        </button>
                                    </h2>
                                    <div id="flush-collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Avoid foods like red cabbage, beets, tomato sauce, and spices, as well as beverages like coffee, tea, soda, and alcohol that can stain your teeth.</p>
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
                        <figure><img src="{{ asset('public/assets/apnadental/img/doctors_icon.svg') }}" alt=""></figure>
                        <h3>Are you a Doctor?</h3>
                        <p>The service allows you to get maximum visibility online and to manage appointments and contacts coming from the site, in a simple and fast way.</p>
                        <a href="register-doctor.html" class="btn_1">Read more</a>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <div class="block_2">
                        <figure><img src="{{ asset('public/assets/apnadental/img/patient_icon.svg') }}" alt=""></figure>
                        <h3>Are you a patient?</h3>
                        <p>Choosing a specialist has never been so fast! You can filter search results by location and medical specialization, and book medical examination online.</p>
                        <a href="register.html" class="btn_1">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- /main content -->

<!-- Add this code block inside your <script> tag or an external JS file -->
<script>
    $(document).ready(function() {
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
                            success: function(response) {
                                var servicesUl = $("#services-dropdown");
                                servicesUl.empty(); // Clear existing list items

                                $.each(response.services, function(index, service) {
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
                            error: function() {
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
</script>


@endsection