@extends('apnadental_mobile.master')
@section("content")
<div>
    <div class="container-fluid">
        <div class="top-bar mt-3 mb-4 py-2 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="Search-by-doctor.html" class="text-reset">
                  <img src="{{ asset('public/assets/mobileImages/arrow-back.svg') }}" alt="back">
                </a>
                <h3 class="mb-0 ps-3">Book an appointment</h3>
            </div>
        </div>

        <div class="d-flex doctor-info appointment gap-3 my-4 py-3 pt-2 py-4">
            <div>
                <div class="bg-primary position-relative overflow-hidden img-wrap rounded-pill">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="">
                </div>
            </div>
            <div class="flex-grow-1">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5 class="mb-1">Dr. Matthew Lina</h5>
                        <p class="mb-0 fs-sm">Cardiologist</p>
                        <p class="mb-0 fs-sm">14 yrs Experience, Janakpuri</p>
                        <h4 class="mt-1 fs-sm">₹500 Consultation Fees</h4>
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
    </div>
    <div style="background-color: #f4f8fb;" class="py-5">
        <div class="container-fluid">
            <div class="main-head d-flex justify-content-between align-items-center">
                <h2 class="mb-0 fw-normal text-uppercase">Select date and time</h2>
            </div>
            <div class="row g-2 row-cols-4 select-date my-3 radio-wrapper">
                <div class="col">
                    <div class="position-relative">
                        <label class="stretched-link" for="day16"></label>
                        <input checked type="radio" id="day16" name="dayNdate">
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
                        <input checked type="radio" id="Am" name="day-partial">
                        <div class="radio-item text-center d-flex rounded-4 p-4 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-cloud-sun-fill" viewBox="0 0 16 16">
                                <path
                                    d="M11.473 11a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5z" />
                                <path
                                    d="M10.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0zm3.743 1.964a.5.5 0 1 0-.707-.707l-.708.707a.5.5 0 0 0 .708.708l.707-.708zm-7.779-.707a.5.5 0 0 0-.707.707l.707.708a.5.5 0 1 0 .708-.708l-.708-.707zm1.734 3.374a2 2 0 1 1 3.296 2.198c.199.281.372.582.516.898a3 3 0 1 0-4.84-3.225c.352.011.696.055 1.028.129m4.484 4.074c.6.215 1.125.59 1.522 1.072a.5.5 0 0 0 .039-.742l-.707-.707a.5.5 0 0 0-.854.377M14.5 6.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
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
                                <path
                                    d="M11.473 11a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5z" />
                                <path
                                    d="M11.286 1.778a.5.5 0 0 0-.565-.755 4.595 4.595 0 0 0-3.18 5.003 5.46 5.46 0 0 1 1.055.209A3.603 3.603 0 0 1 9.83 2.617a4.593 4.593 0 0 0 4.31 5.744 3.576 3.576 0 0 1-2.241.634c.162.317.295.652.394 1a4.59 4.59 0 0 0 3.624-2.04.5.5 0 0 0-.565-.755 3.593 3.593 0 0 1-4.065-5.422z" />
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
                        <input type="radio" id="1am" name="select-time">
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
            <div class="my-4 mb-0 mt-5 pt-5">
                <a href="/Doctor-details.html" class="btn button-pink-fill w-100 py-3 rounded-4 text-white">Proceed to Book Appointment</a>
            </div>
        </div>
    </div>
</div>

@endsection