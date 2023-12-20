@extends('apnadental_mobile.master')
@section("content")

<div class="container-fluid">


    <div class="top-bar mb-1 py-2 d-flex justify-content-between align-items-center">
        <a href="javascript:void(0)" class="text-reset" onclick="goBack()">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8">
                </path>
            </svg>
        </a>
        <div>
            <button class="btn ms-auto">
                <img src="{{ asset('public/assets/mobileImages/share.svg') }}" alt="share">
            </button>
            <button class="btn ">
                <img src="{{ asset('public/assets/mobileImages/chat.svg') }}" alt="chat">
            </button>
        </div>
    </div>
    <div class="d-flex doctor-info gap-3 py-4">
        <div class="flex-grow-1">
            <div class="d-flex justify-content-between">
                <div>
                    <h3 class="mb-1 fw-bold">{{ $doctor->company_name }}</h3>
                    <p class="mb-1 fs-sm">{{ request('type') }}</p>
                    <p class="mb-0 fs-sm">{{ $doctor->experience }}, {{ $doctor->city }} <br> {{ $doctor->education }}, {{ $doctor->specialization }}</p>
                    <h4 class="mt-2 fs-sm fw-bold">₹{{ $doctor->fee }} Consultation Fees</h4>
                </div>
            </div>
        </div>
        <div>
            <div class="mob-card-img-wrap bg-primary position-relative overflow-hidden rounded-pill">
                <img src="{{$doctor->image}}" class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="{{ $doctor->company_name }}">
            </div>
            <div class="text-center mt-1">
                <p class="d-flex reviews mb-0 gap-1 justify-content-center fs-xs">
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
                    <span class="fw-bold">{{ $doctor->rating }}</span>
                    <i class="bi bi-star-fill text-success"></i>
                </p>
                <p class="reviews mb-0 fs-xs">{{ $doctor->rating_count }} Reviews
                </p>
            </div>
        </div>
    </div>
    <div class="d-flex mt-2">
        <div class="left-img">
            <a href="{{ $doctor->map_url }}">
                <svg id="Component_79_1" data-name="Component 79 – 1" xmlns="http://www.w3.org/2000/svg" width="42"
                    height="42" viewBox="0 0 42 42">
                    <rect id="Rectangle" width="42" height="42" rx="12" fill="#14bfff" opacity="0.1"></rect>
                    <g id="appartment" transform="translate(15 11)">
                        <g id="pin_1_" data-name="pin (1)">
                            <path id="Shape"
                                d="M7.488,19.968a.417.417,0,0,1-.285-.113C6.909,19.578,0,13.007,0,7.488a7.488,7.488,0,0,1,14.976,0c0,5.52-6.909,12.09-7.2,12.367A.414.414,0,0,1,7.488,19.968Zm0-16.64a4.16,4.16,0,1,0,4.16,4.16A4.165,4.165,0,0,0,7.488,3.328Z"
                                fill="#14bfff"></path>
                        </g>
                    </g>
                </svg>
            </a>
        </div>

        <div class="second-shift ms-3">
            <address>{{ $doctor->location }}, {{ $doctor->city }}, {{ $doctor->state }}, Landmark: {{ $doctor->locality }}, {{ $doctor->country }}
            </address>
        </div>
    </div>
    <div class="bg-primary rounded-4 my-3 p-3 mb-4 position-relative overflow-hidden">
        <p class="mb-0 text-info">introductory offer</p>
        <h4 class="text-white">Video <br>Consultation</h4>
        <a href="#" class="btn mt-2 button-pink-fill"> Book appointment </a>
        <img src="{{ asset('public/assets/mobileImages/video-consultation.svg') }}" class="position-absolute object-fit-contain end-0 bottom-0"
            alt="book appointment for video consultation">
    </div>

    <div class="d-flex gap-2 statement pb-3">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person"
                viewBox="0 0 16 16">
                <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
            </svg>
        </div>
        <div class="content">
            {{ $doctor->description }}
        </div>
    </div>
    <div class="d-flex gap-2 statement pb-3">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-newspaper"
                viewBox="0 0 16 16">
                <path
                    d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
                <path
                    d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
            </svg>
        </div>
        <div class="content">
            <h6 class="mb-0">Education</h6>
            <p class="fs-xs mb-2">{{ $doctor->education }}</p>
            <h6 class="fs-sm mt-3 mb-2">Curriculum</h6>
            <ul>
                <li>
                    <p><span class="fw-medium">New york medical college</span> - Doctor of Medicine</p>
                </li>
                <li>
                    <p><span class="fw-medium">Montefiore Medical Center</span> - Residency in Internal Medicine</p>
                </li>
                <li>
                    <p><span class="fw-medium">New york medical college</span> - Master Internal Medicine</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-head d-flex justify-content-between align-items-center">
        <h2 class="mb-0">User Reviews</h2>
    </div>
    <div class="d-flex reviews gap-3 justify-content-between py-4">
        <div>
            <div class="d-flex align-items-center gap-3">
                <span>5</span>
                <span><i class="bi bi-star-fill text-grey fs-sm"></i></span>
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0"
                    aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 75%"></div>
                </div>
                <span>152</span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span>4</span>
                <span><i class="bi bi-star-fill text-grey fs-sm"></i></span>
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0"
                    aria-valuemax="100">
                    <div class="progress-bar  bg-success" style="width: 55%"></div>
                </div>
                <span>20</span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span>3</span>
                <span><i class="bi bi-star-fill text-grey fs-sm"></i></span>
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0"
                    aria-valuemax="100">
                    <div class="progress-bar  bg-warning" style="width: 35%"></div>
                </div>
                <span>20</span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span>2</span>
                <span><i class="bi bi-star-fill text-grey fs-sm"></i></span>
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0"
                    aria-valuemax="100">
                    <div class="progress-bar  bg-danger" style="width: 25%"></div>
                </div>
                <span>20</span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span>1</span>
                <span><i class="bi bi-star-fill text-grey fs-sm"></i></span>
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0"
                    aria-valuemax="100">
                    <div class="progress-bar  bg-danger" style="width: 15%"></div>
                </div>
                <span>5</span>
            </div>
        </div>
        <div class="">
            <p class="position-relative mb-2">
                <i class="bi bi-star-fill text-success star-rating-icon"></i>
                <span class="fs-6 position-absolute top-50 start-50 translate-middle text-white">4.5</span>
            </p>
            <h6 class="text-center mb-1 fs-sm">Based on</h6>
            <p class="text-info fs-sm fw-medium">537 Reviews</p>
        </div>
    </div>

    <div class="mb-4 d-flex gap-2 flex-wrap">
        <button class="btn btn-outline-secondary btn-sm rounded-4 px-3" type="button" href="#">Most
            Helpful</button>
        <button class="btn btn-outline-secondary btn-sm rounded-4 px-3" type="button" href="#">Recent</button>
        <button class="btn btn-outline-secondary btn-sm rounded-4 px-3" type="button" href="#">Critical</button>
    </div>

    <div class="comment mb-4 pb-2">
        <p class="mb-2"><i class="bi bi-star-fill text-success star-rating-icon me-1"></i> <span>4</span>
            out 5
        </p>
        <p>Friendly and explained me very well about my problem. Even only by his words i feel better. Thank
            Sir.
        </p>
        <div class="d-flex align-items-center gap-2">
            <div class="img-wrap rounded-pill overflow-hidden me-1">
                <img class="w-100 h-100 object-fit-cover"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6v-Quj0rUbKfkYkO5xry7QsyV_3dNemjlbw&usqp=CAU"
                    alt="">
            </div>
            <div>
                <h6 class="mb-1">Ham Chuwon</h6>
                <p class="fs-xs text-grey fw-medium mb-0">17 May 2020</p>
            </div>
        </div>
    </div>
    <div class="comment mb-4 pb-2">
        <p class="mb-2"><i class="bi bi-star-fill text-success star-rating-icon me-1"></i> <span>4</span>
            out 5
        </p>
        <p>Friendly and explained me very well about my problem. Even only by his words i feel better. Thank
            Sir.
        </p>
        <div class="d-flex align-items-center gap-2">
            <div class="img-wrap rounded-pill overflow-hidden me-1">
                <img class="w-100 h-100 object-fit-cover"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6v-Quj0rUbKfkYkO5xry7QsyV_3dNemjlbw&usqp=CAU"
                    alt="">
            </div>
            <div>
                <h6 class="mb-1">Ham Chuwon</h6>
                <p class="fs-xs text-grey fw-medium mb-0">17 May 2020</p>
            </div>
        </div>
    </div>
    <div class="comment mb-4 pb-2">
        <p class="mb-2"><i class="bi bi-star-fill text-success star-rating-icon me-1"></i> <span>4</span>
            out 5
        </p>
        <p>Friendly and explained me very well about my problem. Even only by his words i feel better. Thank
            Sir.
        </p>
        <div class="d-flex align-items-center gap-2">
            <div class="img-wrap rounded-pill overflow-hidden me-1">
                <img class="w-100 h-100 object-fit-cover"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6v-Quj0rUbKfkYkO5xry7QsyV_3dNemjlbw&usqp=CAU"
                    alt="">
            </div>
            <div>
                <h6 class="mb-1">Ham Chuwon</h6>
                <p class="fs-xs text-grey fw-medium mb-0">17 May 2020</p>
            </div>
        </div>
    </div>

    <div class="comment mb-4 pb-2">
        <p class="mb-2"><i class="bi bi-star-fill text-success star-rating-icon me-1"></i> <span>4</span>
            out 5
        </p>
        <p>Friendly and explained me very well about my problem. Even only by his words i feel better. Thank
            Sir.
        </p>
        <div class="d-flex align-items-center gap-2">
            <div class="img-wrap rounded-pill overflow-hidden me-1">
                <img class="w-100 h-100 object-fit-cover"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6v-Quj0rUbKfkYkO5xry7QsyV_3dNemjlbw&usqp=CAU"
                    alt="">
            </div>
            <div>
                <h6 class="mb-1">Ham Chuwon</h6>
                <p class="fs-xs text-grey fw-medium mb-0">17 May 2020</p>
            </div>
        </div>
    </div>

    <div class="text-center mb-4">
        <button type="button" class="btn button-pink-fill rounded-3 btn-sm px-3">View More Reviews</a>
    </div>

    <div class="">
        <div class="main-head d-flex justify-content-between align-items-center">
            <h2 class="mb-0">Schedule an Appointment</h2>
        </div>
        <div class="row g-2 row-cols-4 select-date my-3 radio-wrapper flex-nowrap overflow-x-auto">
            <div class="col">
                <div class="position-relative">
                    <label class="stretched-link" for="day16"></label>
                    <input checked="" type="radio" id="day16" name="dayNdate">
                    <div class="radio-item text-center rounded-4 p-2 py-3">
                        <p class="fs-xs mb-0">Today</p>
                        <p class="display-6 fw-normal mb-0">16</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="position-relative">
                    <label class="stretched-link" for="day17"></label>
                    <input type="radio" id="day17" name="dayNdate">
                    <div class="radio-item text-center rounded-4 p-2 py-3">
                        <p class="fs-xs mb-0">Tomorrow</p>
                        <p class="display-6 fw-normal mb-0">17</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="position-relative">
                    <label class="stretched-link" for="day18"></label>
                    <input type="radio" id="day18" name="dayNdate">
                    <div class="radio-item text-center rounded-4 p-2 py-3">
                        <p class="fs-xs mb-0">Thr</p>
                        <p class="display-6 fw-normal mb-0">18</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="position-relative">
                    <label class="stretched-link" for="day19"></label>
                    <input type="radio" id="day19" name="dayNdate">
                    <div class="radio-item text-center rounded-4 p-2 py-3">
                        <p class="fs-xs mb-0">Fri</p>
                        <p class="display-6 fw-normal mb-0">19</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-2 py-3 mb-3 radio-wrapper">
            <div class="col-6">
                <div class="position-relative">
                    <label class="stretched-link" for="Am"></label>
                    <input checked="" type="radio" id="Am" name="day-partial">
                    <div class="radio-item text-center d-flex rounded-4 p-4 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-cloud-sun-fill" viewBox="0 0 16 16">
                            <path d="M11.473 11a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5z">
                            </path>
                            <path
                                d="M10.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0zm3.743 1.964a.5.5 0 1 0-.707-.707l-.708.707a.5.5 0 0 0 .708.708l.707-.708zm-7.779-.707a.5.5 0 0 0-.707.707l.707.708a.5.5 0 1 0 .708-.708l-.708-.707zm1.734 3.374a2 2 0 1 1 3.296 2.198c.199.281.372.582.516.898a3 3 0 1 0-4.84-3.225c.352.011.696.055 1.028.129m4.484 4.074c.6.215 1.125.59 1.522 1.072a.5.5 0 0 0 .039-.742l-.707-.707a.5.5 0 0 0-.854.377M14.5 6.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z">
                            </path>
                        </svg>
                        <p class="mb-0 ms-2">Morning</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="position-relative">
                    <label class="stretched-link" for="Pm"></label>
                    <input type="radio" id="Pm" name="day-partial">
                    <div class="radio-item text-center d-flex rounded-4 p-4 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-cloud-moon-fill" viewBox="0 0 16 16">
                            <path d="M11.473 11a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5z">
                            </path>
                            <path
                                d="M11.286 1.778a.5.5 0 0 0-.565-.755 4.595 4.595 0 0 0-3.18 5.003 5.46 5.46 0 0 1 1.055.209A3.603 3.603 0 0 1 9.83 2.617a4.593 4.593 0 0 0 4.31 5.744 3.576 3.576 0 0 1-2.241.634c.162.317.295.652.394 1a4.59 4.59 0 0 0 3.624-2.04.5.5 0 0 0-.565-.755 3.593 3.593 0 0 1-4.065-5.422z">
                            </path>
                        </svg>
                        <p class="mb-0 ms-2">Evening</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-2 row-cols-4 radio-wrapper my-3">
            <div class="col">
                <div class="position-relative">
                    <label class="stretched-link" for="1am"></label>
                    <input type="radio" id="1am" checked name="select-time">
                    <div class="radio-item text-center rounded-4 p-2 py-3">
                        <p class="fs-xs mb-0">09:00 AM</p>
                    </div>
                </div>
            </div>
            <div class="col">

                <div class="position-relative">
                    <label class="stretched-link" for="2am"></label>
                    <input type="radio" id="2am" name="select-time">
                    <div class="radio-item text-center rounded-4 p-2 py-3">
                        <p class="fs-xs mb-0">09:30 AM</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="position-relative">
                    <label class="stretched-link" for="4am"></label>
                    <input type="radio" id="4am" name="select-time">
                    <div class="radio-item text-center rounded-4 p-2 py-3">
                        <p class="fs-xs mb-0">10:00 AM</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="position-relative">
                    <label class="stretched-link" for="5am"></label>
                    <input type="radio" id="5am" name="select-time">
                    <div class="radio-item text-center rounded-4 p-2 py-3">
                        <p class="fs-xs mb-0">10:30 AM</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="position-relative">
                    <label class="stretched-link" for="6am"></label>
                    <input type="radio" id="6am" name="select-time">
                    <div class="radio-item text-center rounded-4 p-2 py-3">
                        <p class="fs-xs mb-0">11:00 AM</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="position-relative">
                    <label class="stretched-link" for="7am"></label>
                    <input type="radio" id="7am" name="select-time">
                    <div class="radio-item text-center rounded-4 p-2 py-3">
                        <p class="fs-xs mb-0">11:30 AM</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="position-relative">
                    <label class="stretched-link" for="8am"></label>
                    <input type="radio" id="8am" name="select-time">
                    <div class="radio-item text-center rounded-4 p-2 py-3">
                        <p class="fs-xs mb-0">12:00 pm</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="position-relative">
                    <label class="stretched-link" for="9pm"></label>
                    <input type="radio" id="9pm" name="select-time">
                    <div class="radio-item  text-center rounded-4 p-2 py-3">
                        <p class="fs-xs mb-0">12:30 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-head d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Similar Cardiology Doctors</h2>
    </div>
    <div class="row py-4 g-3">
        <div class="col-6">
            <div class="bg-white text-center specialized-item p-4">
                <div class="p-4 img-wrap bg-primary rounded-pill mb-4">
                    <img  src="{{ asset('public/assets/mobileImages/heartbeat.svg') }}" alt="heartbeat">
                </div>
                <h6 class="mb-0">John Smith</h6>
                <p class="text-info mb-0 fs-xs fw-medium mb-1">340 specialist</p>
                <p class="fw-medium">500 Fees</p>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-white text-center specialized-item p-4">
                <div class="p-4 img-wrap bg-primary rounded-pill mb-4">
                    <img src="{{ asset('public/assets/mobileImages/pediatrician.svg') }}" alt="pediatrician">
                </div>
                <h6 class="mb-0">John Smith</h6>
                <p class="text-info mb-0 fs-xs fw-medium mb-1">340 specialist</p>
                <p class="fw-medium">500 Fees</p>
            </div>
        </div>
    </div>
    <div class="d-flex mb-4">
        <a href="#" class="text-reset">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8">
                </path>
            </svg>
        </a>
        <h4 class="mb-0 ps-3">Blogs</h4>
    </div>
    <div class="pb-3">
        <div class="ratio ratio-4x3 rounded-4 overflow-hidden">
            <img src="https://media.istockphoto.com/id/1485043284/photo/dentistry-concept.webp?b=1&s=170667a&w=0&k=20&c=GTEC-4K03HNY46d-XkjProcQGb1rPKpIGvn-MT0nWKU="
                alt="">
        </div>
        <h2 class="fs-4 py-3 pb-1 fw-bold">Everyone’s Missing About the Declining U.S. Birth Rate</h2>
        <p class="fs-sm">by <span class="fw-bold">Sherlin Chopra</span> 14 Jan 2019</p>
    </div>
    <div class="row gy-4 pb-3">
        <div class="col-12">
            <div class="health-item d-flex gap-3">
                <div class="img-wrap">
                    <div class="bg-primary h-100 rounded-4">
                        <img class="w-100 h-100 object-fit-cover" src="{{ asset('public/assets/mobileImages/bangaluru-vector.svg') }}" alt="">
                    </div>
                </div>
                <div class="flex-grow-1">
                    <h6 class="mb-1">Simple steps to maintain a healthy heart for all ages</h6>
                    <p class="fs-sm">12 Jun 2020</p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="health-item d-flex gap-3">
                <div class="img-wrap">
                    <div class="bg-primary h-100 rounded-4">
                        <img class="w-100 h-100 object-fit-cover" src="{{ asset('public/assets/mobileImages/bangaluru-vector.svg') }}" alt="">
                    </div>
                </div>
                <div class="flex-grow-1">
                    <h6 class="mb-1">Simple steps to maintain a healthy heart for all ages</h6>
                    <p class="fs-sm">12 Jun 2020</p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="health-item d-flex gap-3">
                <div class="img-wrap">
                    <div class="bg-primary h-100 rounded-4">
                        <img class="w-100 h-100 object-fit-cover" src="{{ asset('public/assets/mobileImages/share.svg') }}" alt="">
                    </div>
                </div>
                <div class="flex-grow-1">
                    <h6 class="mb-1">Simple steps to maintain a healthy heart for all ages</h6>
                    <p class="fs-sm">12 Jun 2020</p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="health-item d-flex gap-3">
                <div class="img-wrap">
                    <div class="bg-primary h-100 rounded-4">
                        <img class="w-100 h-100 object-fit-cover" src="{{ asset('public/assets/mobileImages/share.svg') }}" alt="">
                    </div>
                </div>
                <div class="flex-grow-1">
                    <h6 class="mb-1">Simple steps to maintain a healthy heart for all ages</h6>
                    <p class="fs-sm">12 Jun 2020</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-btn d-flex gap-2 my-3 pt-4">
        <a href="#" class="btn me-1 call-btn justify-content-center btn-outline-success"><i
                class="bi bi-telephone-fill pe-2"></i>
            Call</a>
        <a href="#" class="btn button-pink-fill flex-grow-1">Book appointment</a>
    </div>

</div>
@endsection