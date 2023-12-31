@extends('apnadental_mobile.master')
@section("content")

<div class="container-fluid">
    <div class="top-bar mb-1 py-2 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <a class="text-reset" href="<?php echo env('APP_URL'); ?>/clinics">
                <img src="{{ asset('public/assets/mobileImages/arrow-back.svg') }}" alt="back-arrow">
            </a>
            <h3 class="mb-0 ps-3">{{ $resultsType }}</h3>
        </div>

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

    <!-- search input  -->
    <div class="search-bar pt-2">
        <div class="input-group bg-white border rounded-3 p-2 mb-3">
            <span class="input-group-text border-0 bg-transparent"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control border-0 ps-1" placeholder="Search Doctors, Medicines, Hospitals"
                aria-label="ddf">
        </div>
    </div>

    @foreach ($doctors as $doctor)
    <div class="mb-4">
        <div class="d-flex doctor-info gap-3 py-4">
            <div class="mob-card-img-wrap bg-primary position-relative overflow-hidden rounded-pill">
                <a href="<?php echo env('APP_URL'); ?>/doctor-details/{{ $doctor->id }}?type={{ $resultsType }}">
                    <img src="{{ $doctor->image }}" class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="{{ $doctor->company_name }}">
                </a>
            </div>

            <div class="flex-grow-1">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5 class="mb-1 line-clamp">
                            <a class="link-underline link-underline-opacity-0 text-dark" href="<?php echo env('APP_URL'); ?>/doctor-details/{{ $doctor->id }}?type={{ $resultsType }}">{{ $doctor->company_name }}</a>
                        </h5>
                        <p class="mb-0 fs-sm">{{ $resultsType }}</p>
                        <p class="mb-0 fs-sm">{{ $doctor->experience }}, {{ $doctor->city }}</p>
                        <h4 class="mt-1 fs-sm">{{ $doctor->description }}</h4>
                    </div>
                    <div class="flex-shrink-0">
                        <p class="d-flex reviews mb-0 gap-1 justify-content-end">
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
                            <span>{{ $doctor->rating }}</span>
                            <i class="bi bi-star-fill text-success"></i>
                        </p>
                        <p class="reviews">{{ $doctor->rating_count }} Reviews</p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
            <form class="form-check d-flex gap-2 align-items-center mb-0">
                <input type="checkbox" class="form-check-input mb-1" id="compareDoctor1">
                <label class="form-check-label fs-sm" for="compareDoctor1">Compare</label>
            </form>
            <div class="d-inline-flex">
                <a href="tel://{{ $doctor->phone }}" class="btn me-1 d-inline-flex btn-outline-success"><i class="bi bi-telephone-fill pe-2"></i>
                    Call</a>
                @if (!Auth::check())
                    <a href="javascript:void(0)" onclick="bookAppointmentBtn('/book-appointment/{{ $clinic->id }}')" class="btn button-pink-fill">Book appointment</a>
                @endif

                @if (Auth::check())
                    <a href="<?php echo env('APP_URL'); ?>/book-appointment/{{ $doctor->id }}" class="btn button-pink-fill">Book appointment</a>
                @endif
            </div>
        </div>
    </div>
    @endforeach

    {{$doctors->links()}}

</div>
@endsection