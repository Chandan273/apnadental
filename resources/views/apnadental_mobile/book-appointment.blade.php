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
                    <img src="{{$doctor->image}}" class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="{{ $doctor->company_name }}">
                </div>
            </div>
            <div class="flex-grow-1">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5 class="mb-1">{{ $doctor->company_name }}</h5>
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
                        <p class="reviews fs-xs">{{ $doctor->rating_count }} Reviews</span>
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
            <div class="row g-2 select-date my-3 radio-wrapper">
            <div class="col">
                <label for="datepicker">Select Date:</label>
                <input type="date" id="datepicker" class="form-control" required>
            </div>
            </div>
            <!-- <div class="row g-2 row-cols-4 select-date my-3 radio-wrapper">
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
            </div> -->
            <div class="row g-2 py-3 mb-3 radio-wrapper">
                <div class="col-6">
                    <div class="position-relative">
                        <label class="stretched-link" for="Am"></label>
                        <input checked type="radio" id="Am" name="day-partial" value="Morning">
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
                        <input type="radio" id="Pm" name="day-partial" value="Evening">
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
                @php
                    // Start time and end time for 24-hour time slots
                    $startTime = strtotime('08:00');
                    $endTime = strtotime('22:00');
                @endphp

                @for ($time = $startTime; $time <= $endTime; $time += 1800)
                    @php
                        $formattedTime = date('H:i', $time);
                        $formattedTime12H = date('h:i A', $time);
                        $inputId = 'time_' . str_replace(':', '_', $formattedTime);
                    @endphp

                    <div class="col">
                        <div class="position-relative">
                            <label class="stretched-link" for="{{ $inputId }}"></label>
                            <input type="radio" id="{{ $inputId }}" name="select-time" value="{{ $formattedTime12H }}">
                            <div class="radio-item text-center rounded-4 p-2 py-3">
                                <p class="fs-xs mb-0">{{ $formattedTime12H }}</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="my-4 mb-0 mt-5 pt-5">
                <a href="javascript:void(0)" onclick="bookNow('{{ $doctor->id }}', '{{ addslashes($doctor->company_name) }}', '{{ addslashes($doctor->secondary_category) }}', '{{ addslashes($doctor->work_timings) }}')" class="proceed-btn-cls btn button-pink-fill w-100 py-3 rounded-4 text-white">Proceed to Book Appointment</a>
            </div>
        </div>
    </div>
</div>

@endsection