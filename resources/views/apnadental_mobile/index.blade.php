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


    <div class="row g-2 pt-2">
        <div class="col-6">
            <div class="bg-primary rounded-4 p-3 position-relative">
                <img src="{{ asset('public/assets/mobileImages/doctors.svg') }}" class="mb-2" alt="doctor vector"
                    width="26" height="30px">
                <h6 class="text-white mb-1">Doctors</h6>
                <p class="text-white m-0 fs-xs">Book appointment</p>
                <a href="/Search-by-tretment.html" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-primary rounded-4 p-3 position-relative">
                <img src="{{ asset('public/assets/mobileImages/hospital.svg') }}" class="mb-2" alt="hospital vector"
                    width="30" height="30px">
                <h6 class="text-white mb-1">Hospitals</h6>
                <p class="text-white m-0 fs-xs">Search Top Hospitals</p>
                <a href="/find-clinic.html" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-6">
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
        </div>
    </div>

    <div class="bg-primary rounded-4 my-3 p-3 mb-4 position-relative overflow-hidden">
        <p class="mb-0 text-info">introductory offer</p>
        <h4 class="text-white">Video </br>Consultation</h4>
        <a href="#" class="btn mt-2 button-pink-fill"> Book appointment </a>
        <img src="{{ asset('public/assets/mobileImages/video-consultation.svg') }}"
            class="position-absolute object-fit-contain end-0 bottom-0" alt="book appointment for video consultation">
    </div>


    <div>
        <div class="main-head d-flex justify-content-between">
            <h2 class="mb-0">Recently visited Doctors</h2>
        </div>
        <div class="mb-4">
            <div class="d-flex doctor-info gap-3 py-4">
                <div class="mob-card-img-wrap bg-primary position-relative overflow-hidden rounded-pill">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="doctor">
                </div>

                <div class="flex-grow-1">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="mb-1">Dr. Matthew Lina</h5>
                            <p class="mb-0 fs-sm">Cardiologist</p>
                            <p class="mb-0 fs-sm">14 yrs Experience, Janakpuri</p>
                            <h4 class="mt-1 fs-sm">1500 Consultation Fees</h4>
                        </div>
                        <div>
                            <p class="d-flex reviews mb-0 gap-1 justify-content-end fs-xs">
                                <span>4.8</span>
                                <i class="bi bi-star-fill text-success"></i>
                            </p>
                            <p class="reviews fs-xs">56 Reviews</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <form class="form-check d-flex gap-2 align-items-center mb-0">
                    <input type="checkbox" class="form-check-input mb-1" id="compareDoctor9">
                    <label class="form-check-label fs-sm" for="compareDoctor9">Compare</label>
                </form>
                <div>
                    <a href="#" class="btn me-1 d-inline-flex btn-outline-success"><i
                            class="bi bi-telephone-fill pe-2"></i> Call</a>
                    <a href="#" class="btn button-pink-fill">Book appointment</a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-head d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Consult Specialized Doctors</h2>
        <a href="#" class="text-info text-decoration-none">View All</a>
    </div>
    <div class="row py-4 g-3">
        <div class="col-6">
            <div class="bg-white text-center specialized-item p-4">
                <div class="p-4 img-wrap bg-primary rounded-pill mb-4">
                    <img src="{{ asset('public/assets/mobileImages/heartbeat.svg') }}" alt="heartbeat">
                </div>
                <h6 class="mb-0">Cardiology</h6>
                <p class="text-info mb-0">340 specialist</p>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-white text-center specialized-item p-4">
                <div class="p-4 img-wrap bg-primary rounded-pill mb-4">
                    <img src="{{ asset('public/assets/mobileImages/pediatrician.svg') }}" alt="pediatrician">
                </div>
                <h6 class="mb-0">Pediatrician</h6>
                <p class="text-info mb-0">450 Specialist</p>
            </div>
        </div>
    </div>
    <div class="main-head d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Top rated clinics</h2>
    </div>
    <div class="mb-4">
        <div class="d-flex doctor-info gap-3 py-4">
            <div class="mob-card-img-wrap bg-primary position-relative overflow-hidden rounded-pill">
                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="">
            </div>

            <div class="flex-grow-1">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5 class="mb-1">Dr. Matthew Lina</h5>
                        <p class="mb-0 fs-sm">Cardiologist</p>
                        <p class="mb-0 fs-sm">14 yrs Experience, Janakpuri</p>
                        <h4 class="mt-1 fs-sm">1500 Consultation Fees</h4>
                    </div>
                    <div>
                        <p class="d-flex reviews mb-0 gap-1 justify-content-end fs-xs">
                            <span>4.8</span>
                            <i class="bi bi-star-fill text-success"></i>
                        </p>
                        <p class="reviews fs-xs">56 Reviews</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <form class="form-check d-flex gap-2 align-items-center mb-0">
                <input type="checkbox" class="form-check-input mb-1" id="compareDoctor9">
                <label class="form-check-label fs-sm" for="compareDoctor9">Compare</label>
            </form>
            <div>
                <a href="#" class="btn me-1 d-inline-flex btn-outline-success"><i class="bi bi-telephone-fill pe-2"></i>
                    Call</a>
                <a href="#" class="btn button-pink-fill">Book appointment</a>
            </div>
        </div>

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
    <div class="main-head d-flex justify-content-between py-3 pb-4">
        <h2 class="mb-0">Health Articles</h2>
    </div>
    <div class="row gy-3 pb-3">
        <div class="col-12">
            <div class="health-item d-flex gap-4">
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
        </div>
        <div class="col-12">
            <div class="health-item d-flex gap-4">
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
    </div>

</div>
<section class="faqs pb-5">

    <div class="container-fluid">
        <div class="main-head d-flex justify-content-between py-3 pb-4">
            <h2 class="mb-0">FAQ</h2>
        </div>
        <div class="row gy-4">
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

@endsection