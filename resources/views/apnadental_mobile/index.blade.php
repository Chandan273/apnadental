@extends('apnadental_mobile.master')
@section("content")
<div class="container-fluid">

    <div class="top-bar mb-1 py-2 d-flex justify-content-between align-items-center">
        <div class="btn-group">
            <button type="button" class="btn border-0 ps-0 dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                New Delhi
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">New Delhi</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
            </ul>
        </div>
        <div>
            <i class="bi bi-bell-fill"></i>
        </div>
    </div>
    <p class="text-info mb-0">Welcome back!</p>
    <h1>What are you looking for?</h1>
    <div class="mt-2 py-2 bg-white sticky-top">
        <div class="search-bar input-group1 bg-white border rounded-3 position-relative">
            <i class="bi bi-search position-absolute start-0 top-50 ms-3 translate-middle-y"></i>
            <input type="text" class="form-control border-0 ps-5 py-2" id="keywordSearch"
                placeholder="Search Doctors, Medicines, Hospitals" aria-label="search">
        </div>
    </div>

    <div class="row g-2 pt-2">
        <div class="col-6">
            <div class="bg-primary rounded-4 p-3 position-relative">
                <img src="{{ asset('public/assets/mobileImages/doctors.svg') }}" class="mb-2" alt="doctor vector"
                    width="26" height="30px">
                <h6 class="text-white mb-1">Doctors</h6>
                <p class="text-white m-0 fs-xs">Book appointment</p>
                <a href="<?php echo env('APP_URL'); ?>/doctors" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-primary rounded-4 p-3 position-relative">
                <img src="{{ asset('public/assets/mobileImages/hospital.svg') }}" class="mb-2" alt="hospital vector"
                    width="30" height="30px">
                <h6 class="text-white mb-1">Clinics</h6>
                <p class="text-white m-0 fs-xs">Search Top Hospitals</p>
                <a href="<?php echo env('APP_URL'); ?>/search/clinics" class="stretched-link"></a>
            </div>
        </div>
        <!-- <div class="col-6">
            <div class="bg-primary rounded-4 p-3 position-relative">
                <img src="{{ asset('public/assets/mobileImages/Pharmacy.svg') }}" class="mb-2" alt="Pharmacy vector"
                    width="30" height="30px">
                <h6 class="text-white mb-1">Pharmacy</h6>
                <p class="text-white m-0 fs-xs">Order medicines</p>
                <a href="/Search-by-tretment.html" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-primary rounded-4 p-3 position-relative">
                <img src="{{ asset('public/assets/mobileImages/eConsultation.svg') }}" class="mb-2"
                    alt="consultation vector" width="30" height="30px">
                <h6 class="text-white mb-1">eConsultation</h6>
                <p class="text-white m-0 fs-xs">Get Tele consult with us</p>
                <a href="/Search-by-tretment.html" class="stretched-link"></a>
            </div>
        </div> -->
    </div>

    <div class="introductory-slider">
        <div class="bg-primary rounded-4 my-3 p-3 mb-4 position-relative overflow-hidden">
            <p class="mb-0 text-info">introductory offer1</p>
            <h4 class="text-white">Video </br>Consultation</h4>
            <a href="#" class="btn mt-2 button-pink-fill"> Book appointment </a>
            <img src="{{ asset('public/assets/mobileImages/video-consultation.svg') }}"
                class="position-absolute object-fit-contain end-0 bottom-0" alt="book appointment for video consultation">
        </div>
        <div class="bg-primary rounded-4 my-3 p-3 mb-4 position-relative overflow-hidden">
            <p class="mb-0 text-info">introductory offer2</p>
            <h4 class="text-white">Video </br>Consultation</h4>
            <a href="#" class="btn mt-2 button-pink-fill"> Book appointment </a>
            <img src="{{ asset('public/assets/mobileImages/video-consultation.svg') }}"
                class="position-absolute object-fit-contain end-0 bottom-0" alt="book appointment for video consultation">
        </div>
        <div class="bg-primary rounded-4 my-3 p-3 mb-4 position-relative overflow-hidden">
            <p class="mb-0 text-info">introductory offer3</p>
            <h4 class="text-white">Video </br>Consultation</h4>
            <a href="#" class="btn mt-2 button-pink-fill"> Book appointment </a>
            <img src="{{ asset('public/assets/mobileImages/video-consultation.svg') }}"
                class="position-absolute object-fit-contain end-0 bottom-0" alt="book appointment for video consultation">
        </div>
        <div class="bg-primary rounded-4 my-3 p-3 mb-4 position-relative overflow-hidden">
            <p class="mb-0 text-info">introductory offer4</p>
            <h4 class="text-white">Video </br>Consultation</h4>
            <a href="#" class="btn mt-2 button-pink-fill"> Book appointment </a>
            <img src="{{ asset('public/assets/mobileImages/video-consultation.svg') }}"
                class="position-absolute object-fit-contain end-0 bottom-0" alt="book appointment for video consultation">
        </div>
        <div class="bg-primary rounded-4 my-3 p-3 mb-4 position-relative overflow-hidden">
            <p class="mb-0 text-info">introductory offer5</p>
            <h4 class="text-white">Video </br>Consultation</h4>
            <a href="#" class="btn mt-2 button-pink-fill"> Book appointment </a>
            <img src="{{ asset('public/assets/mobileImages/video-consultation.svg') }}"
                class="position-absolute object-fit-contain end-0 bottom-0" alt="book appointment for video consultation">
        </div>
    </div>

    <div>
        <div class="main-head d-flex justify-content-between">
            <h2 class="mb-0">Recently visited Doctors</h2>
            <a href="<?php echo env('APP_URL'); ?>/doctors" class="text-info text-decoration-none">View All</a>
        </div>
        
        <div class="slider-doctors">
            @foreach ($random_doctors as $doctor)
            <div class="mb-4">
                <div class="d-flex doctor-info gap-2 py-4">
                    <div class="mob-card-img-wrap bg-primary position-relative overflow-hidden rounded-pill">
                        <a href="<?php echo env('APP_URL'); ?>/doctor-details/{{ $doctor->id }}" class="doctor-service-link">
                            <img src="{{$doctor->image}}" class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="{{ $doctor->company_name }}">
                        </a>
                    </div>

                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between gap-1">
                            <div>
                                <a href="<?php echo env('APP_URL'); ?>/doctor-details/{{ $doctor->id }}" class="doctor-service-link">
                                    <h5 class="mb-1 line-clamp">{{ $doctor->company_name }}</h5>
                                </a>
                                <p class="mb-0 fs-sm">{{ $doctor->main_category }}</p>
                                <p class="mb-0 fs-sm">{{ $doctor->experience }}, {{ $doctor->city }}</p>
                                <h4 class="mt-1 fs-sm">₹{{ $doctor->fee }} Consultation Fees</h4>
                            </div>
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
                            <div>
                                <p class="d-flex reviews mb-0 gap-1 justify-content-end fs-xs">
                                    <span>{{ $doctor->rating }}</span>
                                    <i class="bi bi-star-fill text-success"></i>
                                </p>
                                <p class="reviews fs-xs text-nowrap">{{ $doctor->rating_count }} Reviews</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <form class="form-check d-flex gap-2 align-items-center mb-0">
                        <input type="checkbox" class="form-check-input mb-1" id="compareDoctor9">
                        <label class="form-check-label fs-sm" for="compareDoctor9" data-bs-toggle="offcanvas" data-bs-target="#compareOff">Compare</label>
                    </form>
                    <div class="d-inline-flex">
                        <a href="tel://{{ $doctor->phone }}" class="btn me-1 d-inline-flex btn-outline-success"><i
                                class="bi bi-telephone-fill pe-2"></i> Call</a>
                        @if (!Auth::check())
                        <a href="javascript:void(0)" onclick="bookAppointmentBtn('/book-appointment/{{ $doctor->id }}')" class="btn button-pink-fill">Book appointment</a>
                        @endif

                        @if (Auth::check())
                            <a href="<?php echo env('APP_URL'); ?>/book-appointment/{{ $doctor->id }}" class="btn button-pink-fill">Book appointment</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="main-head d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Consult Specialized Doctors</h2>
        <a href="<?php echo env('APP_URL'); ?>/doctors" class="text-info text-decoration-none">View All</a>
    </div>

    <div class="py-4 slider-services">
        @foreach ($servicesData as $service)
       
            <div class="bg-white text-center specialized-item p-1 mx-2 h-100">
                <div class="p-4 img-wrap bg-primary rounded-pill mb-4">
                    <a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type={{$service->service_name}}" class="doctor-service-link">
                        <img src="{{ asset('public/'.$service->service_image) }}" alt="{{$service->service_name}}">
                    </a>
                </div>
                <a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type={{$service->service_name}}" class="doctor-service-link">
                    <h6 class="mb-0">{{$service->service_name}}</h6>
                </a>
                <p class="text-info mb-0">{{$service->total_count}} specialist</p>
            </div>
        @endforeach
    </div>

    <div class="main-head d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Top rated clinics</h2>
        <a href="<?php echo env('APP_URL'); ?>/search/clinics" class="text-info text-decoration-none">View All</a>
    </div>
    <div class="slider-clinics">
        @foreach ($random_clinics as $clinic)
        <div class="mb-4 px-2">
            <div class="d-flex doctor-info gap-2 py-4">
                <div class="mob-card-img-wrap bg-primary position-relative overflow-hidden rounded-pill">
                    <a href="<?php echo env('APP_URL'); ?>/doctor-details/{{ $clinic->id }}">
                        <img src="{{$clinic->image}}" class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="{{ $clinic->company_name }}">
                    </a>
                </div>

                <div class="flex-grow-1">
                    <div class="d-flex justify-content-between gap-1">
                        <div>
                            <a href="<?php echo env('APP_URL'); ?>/doctor-details/{{ $clinic->id }}" class="doctor-service-link"><h5 class="mb-1 line-clamp">{{ $clinic->company_name }}</h5></a>
                            <p class="mb-0 fs-sm">{{ $clinic->main_category }}</p>
                            <p class="mb-0 fs-sm">{{ $clinic->experience }}, {{ $clinic->city }}</p>
                            <h4 class="mt-1 fs-sm">₹{{ $clinic->fee }} Consultation Fees</h4>
                        </div>
                        @php
                            $rating = $clinic->rating;
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
                        <div>
                            <p class="d-flex reviews mb-0 gap-1 justify-content-end fs-xs">
                                <span>{{ $clinic->rating }}</span>
                                <i class="bi bi-star-fill text-success"></i>
                            </p>
                            <p class="reviews fs-xs text-nowrap">{{ $clinic->rating_count }} Reviews</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                <form class="form-check d-flex gap-2 align-items-center mb-0">
                    <input type="checkbox" class="form-check-input mb-1" id="compareDoctor9">
                    <label class="form-check-label fs-sm" for="compareDoctor9">Compare</label>
                </form>
                <div class="d-inline-flex">
                    <a href="tel://{{ $clinic->phone }}" class="btn me-1 d-inline-flex btn-outline-success"><i
                            class="bi bi-telephone-fill pe-2"></i> Call</a>
                    @if (!Auth::check())
                        <a href="javascript:void(0)" onclick="bookAppointmentBtn('/book-appointment/{{ $clinic->id }}')" class="btn button-pink-fill">Book appointment</a>
                    @endif

                    @if (Auth::check())
                        <a href="<?php echo env('APP_URL'); ?>/book-appointment/{{ $clinic->id }}" class="btn button-pink-fill">Book appointment</a>
                    @endif
                </div>
            </div>
            
        </div>
        @endforeach
    </div>

    <div class="p-4 bg-warning-subtle lab-test rounded-4">
        <h2>Lab Test From The Comfort of Your Home</h2>
        <div class="row py-4 g-3 align-items-end">
            <div class="col-6">
                <div class="">
                    <img src="{{ asset('public/assets/mobileImages/shield-ads.svg') }}" class="mb-2" alt="shield">
                    <p class="mb-0">100% Safe & Hygenic</p>
                </div>
            </div>
            <div class="col-6">
                <div class="">
                    <img src="{{ asset('public/assets/mobileImages/online-report.svg') }}" class="mb-2"
                        alt="View Reports Online">
                    <p class="mb-0">View Reports Online</p>
                </div>
            </div>
        </div>
        <a href="#" class="btn button-pink-fill px-4 py-2">View All Packages</a>
    </div>

    <!-- Articles Tabs  -->
    <div class="Articles faqs py-4">
        <div class="main-head d-flex justify-content-between mb-3">
            <h2 class="mb-0">Articles</h2>
        </div>
        <div class="row g-3">
            <div class="col-12">
                <ul class="nav tabs-wrapper gap-2 flex-nowrap pb-2" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-health-article-tab" data-bs-toggle="pill" data-bs-target="#pills-health-article" type="button" role="tab" aria-controls="pills-health-article" aria-selected="true">Health</button>
                    </li>
                    <!-- <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                    </li> -->
                </ul>
            </div>
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-health-article" role="tabpanel" aria-labelledby="pills-health-article-tab" tabindex="0">
                        <div class="health-item d-flex gap-3">
                            <div class="img-wrap">
                                <div class="bg-primary h-100 rounded-4">
                                    <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('public/assets/mobileImages/doctors.svg') }}" alt="healty-heart">
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-2">Simple steps to maintain a healthy heart for all ages</h5>
                                <p>12 Jun 2020</p>
                            </div>
                        </div>
                    
                        <div class="health-item d-flex gap-3">
                            <div class="img-wrap">
                                <div class="bg-primary h-100 rounded-4">
                                    <img class="w-100 h-100 object-fit-cover"
                                        src="{{ asset('public/assets/mobileImages/doctors.svg') }}" alt="superfood">
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-2">Superfoods you must for all ages</h5>
                                <p>12 Jun 2020</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<section class="faqs py-4">
    <div class="container-fluid">
        <div class="main-head d-flex justify-content-between mb-3">
            <h2 class="mb-0">FAQ</h2>
        </div>
        <div class="row g-3">
            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                <div class="nav tabs-wrapper flex-md-column gap-2 flex-nowrap pb-2" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link fs-6 active" id="v-pills-payment-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-payment" type="button" aria-label="Payment" role="tab" aria-controls="v-pills-payment"
                        aria-selected="true">Payment</a>
                    <a class="nav-link fs-6" id="v-pills-delivery-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-delivery" type="button" aria-label="Delivery" role="tab" aria-controls="v-pills-delivery"
                        aria-selected="false">Delivery</a>
                    <a class="nav-link fs-6" id="v-pills-orders-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-orders" type="button" aria-label="Orders" role="tab" aria-controls="v-pills-orders"
                        aria-selected="false">Orders</a>
                    <a class="nav-link fs-6" id="v-pills-refund-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-refund" type="button" aria-label="Refund" role="tab" aria-controls="v-pills-refund"
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
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        What to eat after teeth scaling?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Avoid foods like red cabbage, beets, tomato sauce, and spices, as
                                            well as beverages like coffee, tea, soda, and alcohol that can
                                            stain
                                            your teeth.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Is scaling good for teeth?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>If your mouth exhibits symptoms of persistent periodontal
                                            disease,
                                            your dentist will advise teeth scaling and root planing. These
                                            treatments can lessen the negative consequences of this illness
                                            and
                                            maintain oral health.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Is scaling of teeth painful?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>The process is not painful. Even though you will feel discomfort
                                            afterwards, the procedure itself can be finished by injecting a
                                            local anaesthetic into the soft tissue to lessen any discomfort
                                            while it is being done.</p>

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
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsefour" aria-expanded="false"
                                        aria-controls="flush-collapsefour">
                                        What to eat after teeth scaling?
                                    </button>
                                </h2>
                                <div id="flush-collapsefour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Avoid foods like red cabbage, beets, tomato sauce, and spices, as
                                            well as beverages like coffee, tea, soda, and alcohol that can
                                            stain
                                            your teeth.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseFive">
                                        Is scaling good for teeth?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>If your mouth exhibits symptoms of persistent periodontal
                                            disease,
                                            your dentist will advise teeth scaling and root planing. These
                                            treatments can lessen the negative consequences of this illness
                                            and
                                            maintain oral health.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSix" aria-expanded="false"
                                        aria-controls="flush-collapseSix">
                                        Is scaling of teeth painful?
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>The process is not painful. Even though you will feel discomfort
                                            afterwards, the procedure itself can be finished by injecting a
                                            local anaesthetic into the soft tissue to lessen any discomfort
                                            while it is being done.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab"
                        tabindex="0">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                        aria-controls="flush-collapseSeven">
                                        What to eat after teeth scaling?
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Avoid foods like red cabbage, beets, tomato sauce, and spices, as
                                            well as beverages like coffee, tea, soda, and alcohol that can
                                            stain
                                            your teeth.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse8" aria-expanded="false"
                                        aria-controls="flush-collapse8">
                                        Is scaling good for teeth?
                                    </button>
                                </h2>
                                <div id="flush-collapse8" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>If your mouth exhibits symptoms of persistent periodontal
                                            disease,
                                            your dentist will advise teeth scaling and root planing. These
                                            treatments can lessen the negative consequences of this illness
                                            and
                                            maintain oral health.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse9" aria-expanded="false"
                                        aria-controls="flush-collapse9">
                                        Is scaling of teeth painful?
                                    </button>
                                </h2>
                                <div id="flush-collapse9" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>The process is not painful. Even though you will feel discomfort
                                            afterwards, the procedure itself can be finished by injecting a
                                            local anaesthetic into the soft tissue to lessen any discomfort
                                            while it is being done.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-refund" role="tabpanel" aria-labelledby="v-pills-refund-tab"
                        tabindex="0">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse10" aria-expanded="false"
                                        aria-controls="flush-collapse10">
                                        What to eat after teeth scaling?
                                    </button>
                                </h2>
                                <div id="flush-collapse10" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Avoid foods like red cabbage, beets, tomato sauce, and spices, as
                                            well as beverages like coffee, tea, soda, and alcohol that can
                                            stain
                                            your teeth.</p>
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

<!-- Enable this button to show select city offcanvas -->

<button class="btn button-pink-fill" type="button" data-bs-toggle="offcanvas" data-bs-target="#choose-location-ofcanvas"
    aria-controls="choose-location-ofcanvas">Choose
    Location</button>

<div class="offcanvas select-city offcanvas-bottom" tabindex="-1" id="choose-location-ofcanvas"
    aria-labelledby="offcanvasBottomLabel">
    <div class="offcanvas-header align-items-start">
        <div class="main-head">
            <h2 class="offcanvas-title" id="offcanvasBottomLabel">Select City</h2>
            <p class="mb-0">In order to serve you better</p>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="search-bar">
        <div class="input-group bg-white border rounded-3 p-2 mb-3">
            <span class="input-group-text border-0 bg-transparent">
                <i class="bi bi-search"></i>
            </span>
            <input type="text" class="form-control border-0 ps-1" placeholder="Search Doctors, Medicines, Hospitals"
                aria-label="ddf">
        </div>
    </div>
    <div class="offcanvas-body small pt-0">
        <div class="row gy-4 pt-3">
            <div class="col-4">
                <div class="text-center select-city-item">
                    <div class="img-wrap rounded-pill mx-auto mb-2 overflow-hidden">
                        <img class="w-100 h-100 object-fit-cover"
                            src="{{ asset('public/assets/mobileImages/bangaluru-vector.svg') }}" alt="Bangaluru">
                    </div>
                    <p class="mb-0">Bangaluru</p>
                </div>
            </div>
            <div class="col-4">
                <div class="text-center select-city-item">
                    <div class="img-wrap rounded-pill mx-auto mb-2 overflow-hidden">
                        <img class="w-100 h-100 object-fit-cover"
                            src="{{ asset('public/assets/mobileImages/Chennai-vector.svg') }}" alt="Chennai">
                    </div>
                    <p class="mb-0">Chennai</p>
                </div>
            </div>
            <div class="col-4">
                <div class="text-center select-city-item">
                    <div class="img-wrap rounded-pill mx-auto mb-2 overflow-hidden">
                        <img class="w-100 h-100 object-fit-cover"
                            src="{{ asset('public/assets/mobileImages/new-delhi-vector.svg') }}" alt="Delhi">
                    </div>
                    <p class="mb-0">New Delhi</p>
                </div>
            </div>
            <div class="col-4">
                <div class="text-center select-city-item">
                    <div class="img-wrap rounded-pill mx-auto mb-2 overflow-hidden">
                        <img class="w-100 h-100 object-fit-cover"
                            src="{{ asset('public/assets/mobileImages/Gurgaon-vector.svg') }}" alt="Gurgaon">
                    </div>
                    <p class="mb-0">Gurgaon</p>
                </div>
            </div>
            <div class="col-4">
                <div class="text-center select-city-item">
                    <div class="img-wrap rounded-pill mx-auto mb-2 overflow-hidden">
                        <img class="w-100 h-100 object-fit-cover"
                            src="{{ asset('public/assets/mobileImages/Mumbai-vector.svg') }}" alt="Mumbai">
                    </div>
                    <p class="mb-0">Mumbai</p>
                </div>
            </div>
            <div class="col-4">
                <div class="text-center select-city-item">
                    <div class="img-wrap rounded-pill mx-auto mb-2 overflow-hidden">
                        <img class="w-100 h-100 object-fit-cover"
                            src="{{ asset('public/assets/mobileImages/noida-vector.svg') }}" alt="Noida">
                    </div>
                    <p class="mb-0">Noida</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- my account left bar modal -->
<div>
    <button class="btn button-pink-fill position-fixed top-50 start-0 px-1 py-0 z-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
        <i class="bi bi-arrow-right-circle-fill fs-3"></i>
    </button>

    <div class="my-account-offcanvas-mob offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
        id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header bg-primary justify-content-start align-items-center gap-2">
            <div class="profile-72x72 bg-primary position-relative overflow-hidden rounded-circle">
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="doctor">
            </div>
            <div class="text-white">
                <h5 class="offcanvas-title fw-normal" id="offcanvasWithBothOptionsLabel">Bernarr Dominik</h5>
                <p class="mb-0">9876543210</p>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
            </div>
        </div>
        <div class="offcanvas-body d-inline-flex">
            <nav class="w-100">
                <ul class="navbar-nav flex-column">

                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-end link-text-danger-hover gap-3" aria-current="page"
                            href="#">
                            <img width="25px" src="{{ asset('public/assets/mobileImages/business-and-finance.svg') }}"
                                alt="Manage family Members-icon">Manage family Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-end link-text-danger-hover gap-3" aria-current="page"
                            href="#">
                            <img width="25px" src="{{ asset('public/assets/mobileImages/business-and-finance.svg') }}"
                                alt="Appointments-icon">Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-end link-text-danger-hover gap-3" aria-current="page"
                            href="#">
                            <img width="25px" src="{{ asset('public/assets/mobileImages/order-icon.svg') }}"
                                alt="My-Orders-icon">My Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-end link-text-danger-hover gap-3" aria-current="page"
                            href="#">
                            <img width="25px" src="{{ asset('public/assets/mobileImages/microscope.svg') }}"
                                alt="Test-Bookings-icon">Test Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-end link-text-danger-hover gap-3" aria-current="page"
                            href="#">
                            <img width="25px" src="{{ asset('public/assets/mobileImages/telephone.svg') }}"
                                alt="eConsultation-icon">eConsultation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-end link-text-danger-hover gap-3" aria-current="page"
                            href="#">
                            <img width="25px" src="{{ asset('public/assets/mobileImages/policy.svg') }}"
                                alt="Buy-Subscription-icon">Buy
                            Subscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-end link-text-danger-hover gap-3" aria-current="page"
                            href="#">
                            <img width="25px" src="{{ asset('public/assets/mobileImages/reminder.svg') }}"
                                alt="Reminders-icon">Reminders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-end link-text-danger-hover gap-3" aria-current="page"
                            href="#">
                            <img width="25px" src="{{ asset('public/assets/mobileImages/wallet-icon.svg') }}"
                                alt="Wallet-icon">Wallet <span class="ms-auto">5100</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-end link-text-danger-hover gap-3" aria-current="page"
                            href="#">
                            <img width="25px" src="{{ asset('public/assets/mobileImages/doctor-nav-icon.svg') }}"
                                alt="My Doctors-icon">My Doctors</a>
                    </li>
                </ul>

            </nav>
        </div>
    </div>
</div>

    <!-- compare offcanvas  -->
<div class="offcanvas compare-offcanvas offcanvas-bottom" tabindex="-1" id="compareOff"
    aria-labelledby="offcanvasBottomLabel">
    <div class="offcanvas-header position-relative">
        <div class="offcanvas-header-badge">
            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Compare Doctors</h5>
            <button type="button" class="bg-transparent border-0 p-0 ms-3 text-white stretched-link" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </button>
        </div>               
        
    </div>
    <div class="compare-card-wraper offcanvas-body small">
        <form action="#">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-auto">
                        <ul class="d-flex aligin-items-center justify-content-center">
                            <li class="compare-card position-relative flex-column gap-2">
                                <label for="compare-dr">
                                    <img class="img-thumbnail p-0 border-0"
                                        src="http://localhost/projects/apnadental/public/assets/img/avatar2.jpg">

                                    <div class="text-center">
                                        <h5 class="h6 mb-0">Doctor</h5>
                                    </div>


                                    <input class="uploadProfileInput d-none" type="file" name="compare-dr"
                                        id="compare-dr" accept="image/*">
                                </label>
                                <button class="position-absolute end-0 top-0 border-0 bg-transparent">
                                    <img src="http://localhost/projects/apnadental/public/assets/img/delete.svg"
                                        width="15px">
                                </button>
                            </li>

                            <li class="seprator-vs"></li>

                            <li class="compare-card position-relative flex-column gap-2">
                                <label for="compare-dr" class=" pe-auto">
                                    <img class="img-thumbnail p-0 border-0"
                                        src="http://localhost/projects/apnadental/public/assets/img/avatar2.jpg">

                                    <div class="text-center">
                                        <h5 class="h6 mb-0">Doctor</h5>
                                    </div>


                                    <input class="uploadProfileInput d-none" type="file" name="compare-dr"
                                        id="compare-dr" accept="image/*">
                                </label>
                                <button class="position-absolute end-0 top-0 border-0 bg-transparent">
                                    <img src="http://localhost/projects/apnadental/public/assets/img/delete.svg"
                                        width="15px">
                                </button>
                            </li>

                            <li class="seprator-vs"></li>

                            <li class="compare-card position-relative flex-column gap-2">
                                <label for="compare-dr">
                                    <img class="img-thumbnail plus p-0 border-0"
                                        src="http://localhost/projects/apnadental/public/assets/img/plus.svg">

                                    <div class="text-center">
                                        <h5 class="h6 mb-0">Select</h5>
                                    </div>


                                    <input class="uploadProfileInput d-none" type="file" name="compare-dr"
                                        id="compare-dr" accept="image/*">
                                </label>

                            </li>                                
                        </ul>
                    </div>
                    <div class="col-auto">
                        <a href="{{ url('/compare') }}" type="butoon" class="btn button-pink-fill mb-5">Compare</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    $('.slider-doctors, .slider-clinics').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3000,
        arrows: false,
        dots: true,
        centerMode: true,
        centerPadding: '0',
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
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
    $('.introductory-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4500,
        arrows: false,
        centerMode: true,
        centerPadding: '0',
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
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
    $('.slider-services').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3500,
        arrows: false,
        centerMode: true,
        centerPadding: '0',
        focusOnSelect: true,
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
            const doctor_id = data.find(dataItem => dataItem.company_name === item).doctor_id;
            const service_id = data.find(dataItem => dataItem.company_name === item).service_id;
            const secondary_category = data.find(dataItem => dataItem.company_name === item).secondary_category;
            const type = data.find(dataItem => dataItem.company_name === item).type;
            const selectedCity = data.find(dataItem => dataItem.company_name === item).city;

            let url = "<?php echo env('APP_URL'); ?>" + `/${selectedCity}/specialties/${secondary_category}?type=${type}&service_id=${doctor_id}`;

            window.location.href = url;

            return item;
        }
    });
</script>

@endsection