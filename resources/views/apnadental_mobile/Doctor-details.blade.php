@extends('apnadental_mobile.master')
@section("content")
<div class="container-fluid">
    <div class="top-bar mb-1 py-2 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <!-- Example single danger button -->
            <a class="me-3" href="/appointment.html" type="button" aria-label="back button">
                <img src="{{ asset('public/assets/mobileImages/arrow-back.svg') }}" alt="arrow-back">
            </a>
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
        </div>
        <div>
            <button class="btn ms-auto">
                <img src="{{ asset('public/assets/mobileImages/share.svg') }}" alt="share">
            </button>
            <button class="btn ">
                <img src="{{ asset('public/assets/mobileImages/chat.svg') }}" alt="chat">
            </button>
        </div>
    </div>

    <!-- Doctor card  -->
    <div class="mb-4 position-relative">
        <div class="d-flex doctor-info gap-3 py-4">
            <div>
                <div class="mob-card-img-wrap bg-primary position-relative overflow-hidden rounded-pill">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="">
                </div>
                <div class="text-center mt-1">
                    <p class="d-flex reviews mb-0 gap-1 justify-content-center fs-xs">
                        <span>4.8</span>
                        <i class="bi bi-star-fill text-success"></i>
                    </p>
                    <p class="reviews mb-0 fs-xs">56 Reviews</span>
                </div>
            </div>

            <div class="flex-grow-1">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5 class="mb-1"></h5>
                        <p class="mb-1 fs-sm">DENTAL FILLINGS</p>
                        <p class="mb-0 fs-sm">BDS, MDS - Orthodontics and Dentofacial Orthopaedics</p>
                        <h4 class="mt-1 fs-sm">1500 Consultation Fees</h4>

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
                <a href="/patient-details.html" class="btn button-pink-fill">Book appointment</a>
            </div>
        </div>

        <div class="d-flex mt-4">
            <div class="left-img">
                <svg id="Component_80_1" data-name="Component 80 – 1" xmlns="http://www.w3.org/2000/svg" width="42"
                    height="42" viewBox="0 0 42 42">
                    <path id="Rectangle"
                        d="M12,0H30A12,12,0,0,1,42,12V30A12,12,0,0,1,30,42H12A12,12,0,0,1,0,30V12A12,12,0,0,1,12,0Z"
                        fill="rgba(71,144,251,0.1)" />
                    <g id="clock_2_" data-name="clock (2)" transform="translate(12 11)">
                        <path id="Shape" d="M0,9.5A9.5,9.5,0,1,1,9.5,19,9.511,9.511,0,0,1,0,9.5Z" fill="#4151a9" />
                    </g>
                </svg>

            </div>
            <div class="first-shift ms-3">
                <h3 class="fs-xs">Morning</h3>
                <h4 class="fs-sm">10 AM - 2 PM</h4>
                <a class="text-decoration-none" href="#">View Full Timings</a>
            </div>
            <div class="second-shift ms-5">
                <h3 class="fs-xs">Morning</h3>
                <h4 class="fs-sm">7 - 10 PM</h4>
            </div>
        </div>

        <div class="d-flex mt-4">
            <div class="left-img">
                <svg id="Component_79_1" data-name="Component 79 – 1" xmlns="http://www.w3.org/2000/svg" width="42"
                    height="42" viewBox="0 0 42 42">
                    <rect id="Rectangle" width="42" height="42" rx="12" fill="#14bfff" opacity="0.1" />
                    <g id="appartment" transform="translate(15 11)">
                        <g id="pin_1_" data-name="pin (1)">
                            <path id="Shape"
                                d="M7.488,19.968a.417.417,0,0,1-.285-.113C6.909,19.578,0,13.007,0,7.488a7.488,7.488,0,0,1,14.976,0c0,5.52-6.909,12.09-7.2,12.367A.414.414,0,0,1,7.488,19.968Zm0-16.64a4.16,4.16,0,1,0,4.16,4.16A4.165,4.165,0,0,0,7.488,3.328Z"
                                fill="#14bfff" />
                        </g>
                    </g>
                </svg>
            </div>

            <div class="second-shift ms-3">
                <address>Pocket 1, Gate Number 2, Sector 9, Landmark: Opposite shiksha bharti school, Delhi
                </address>
            </div>
        </div>

    </div>

    <!-- ads  -->
    <div class="bg-primary rounded-4 my-3 p-3 mb-4 position-relative overflow-hidden">
        <p class="mb-0 text-info">introductory offer</p>
        <h4 class="text-white">Video </br>Consultation</h4>
        <a href="#" class="btn mt-2 button-pink-fill"> Book appointment </a>
        <img src="{{ asset('public/assets/mobileImages/video-consultation.svg') }}" class="position-absolute object-fit-contain end-0 bottom-0"
            alt="book appointment for video consultation">
    </div>

</div>

@endsection