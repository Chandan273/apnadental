@extends('apnadental_mobile.master')
@section("content")
<div class="container-fluid">
    <div class="top-bar mt-3 mb-4 py-2 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <a class="text-reset" href="/Main-landing.html">
                <img  src="{{ asset('public/assets/mobileImages/arrow-back.svg') }}" alt="back-arrow">
            </a>
            <h3 class="mb-0 ps-3">Find Doctors</h3>
        </div>
    </div>
    <div class="search-bar pt-2">
        <div class="input-group bg-white border rounded-3 p-2 mb-3">
            <span class="input-group-text border-0 bg-transparent"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control border-0 ps-1" placeholder="Search Doctors, Medicines, Hospitals"
                aria-label="ddf">
        </div>
    </div>
    <div class="main-head d-flex justify-content-between align-items-center">
        <h2 class="mb-0 fw-normal">Search by Speciality</h2>
    </div>
    <div class="row py-4 g-3">
        <div class="col-6">
            <div class="bg-white text-center rounded-2 specialized-item p-4 position-relative">
                <div
                    class="p-2 img-wrap d-flex align-items-center justify-content-center bg-primary rounded-pill mb-4 position-relative">
                    <img class="object-fit-contain" src="{{ asset('public/assets/mobileImages/heartbeat.svg') }}" alt="heartbeat" width="42px">
                </div>
                <h6 class="mb-0">Cardiology</h6>
                <p class="text-info mb-0">340 specialist</p>
                <a href="/Search-by-doctor.html" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-white text-center rounded-2 specialized-item p-4 position-relative">
                <div
                    class="p-2 img-wrap d-flex align-items-center justify-content-center bg-primary rounded-pill mb-4 position-relative">
                    <img class="object-fit-contain" src="{{ asset('public/assets/mobileImages/heartbeat.svg') }}" alt="heartbeat" width="42px">
                </div>
                <h6 class="mb-0">Pediatrician</h6>
                <p class="text-info mb-0">340 specialist</p>
                <a href="/Search-by-doctor.html" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-white text-center rounded-2 specialized-item p-4 position-relative">
                <div
                    class="p-2 img-wrap d-flex align-items-center justify-content-center bg-primary rounded-pill mb-4 position-relative">
                    <img class="object-fit-contain" src="{{ asset('public/assets/mobileImages/heartbeat.svg') }}" alt="heartbeat" width="42px">
                </div>
                <h6 class="mb-0">Homeopathy</h6>
                <p class="text-info mb-0">340 specialist</p>
                <a href="/Search-by-doctor.html" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-white text-center rounded-2 specialized-item p-4 position-relative">
                <div
                    class="p-2 img-wrap d-flex align-items-center justify-content-center bg-primary rounded-pill mb-4 position-relative">
                    <img class="object-fit-contain" src="{{ asset('public/assets/mobileImages/heartbeat.svg') }}" alt="heartbeat" width="42px">
                </div>
                <h6 class="mb-0">Kidney Issues</h6>
                <p class="text-info mb-0">340 specialist</p>
                <a href="/Search-by-doctor.html" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-white text-center rounded-2 specialized-item p-4 position-relative">
                <div
                    class="p-2 img-wrap d-flex align-items-center justify-content-center bg-primary rounded-pill mb-4 position-relative">
                    <img class="object-fit-contain" src="{{ asset('public/assets/mobileImages/heartbeat.svg') }}" alt="heartbeat" width="42px">
                </div>
                <h6 class="mb-0">Digestive</h6>
                <p class="text-info mb-0">340 specialist</p>
                <a href="/Search-by-doctor.html" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-white text-center rounded-2 specialized-item p-4 position-relative">
                <div
                    class="p-2 img-wrap d-flex align-items-center justify-content-center bg-primary rounded-pill mb-4 position-relative">
                    <img class="object-fit-contain" src="{{ asset('public/assets/mobileImages/heartbeat.svg') }}" alt="heartbeat" width="42px">
                </div>
                <h6 class="mb-0">Cancer</h6>
                <p class="text-info mb-0">340 specialist</p>
                <a href="/Search-by-doctor.html" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-white text-center rounded-2 specialized-item p-4 position-relative">
                <div
                    class="p-2 img-wrap d-flex align-items-center justify-content-center bg-primary rounded-pill mb-4 position-relative">
                    <img class="object-fit-contain" src="{{ asset('public/assets/mobileImages/heartbeat.svg') }}" alt="heartbeat" width="42px">
                </div>
                <h6 class="mb-0">Surgery</h6>
                <p class="text-info mb-0">340 specialist</p>
                <a href="/Search-by-doctor.html" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-white text-center rounded-2 specialized-item p-4 position-relative">
                <div
                    class="p-2 img-wrap d-flex align-items-center justify-content-center bg-primary rounded-pill mb-4 position-relative">
                    <img class="object-fit-contain" src="{{ asset('public/assets/mobileImages/heartbeat.svg') }}" alt="heartbeat" width="42px">
                </div>
                <h6 class="mb-0">Dental Care</h6>
                <p class="text-info mb-0">340 specialist</p>
                <a href="/Search-by-doctor.html" class="stretched-link"></a>
            </div>
        </div>

    </div>
    <div class="bg-white text-center search-more p-4 mb-5">
        <h6 class="mb-0">Didn't Find what you looking for</h6>
        <p class="text-info fs-5 mb-0">Search More</p>
    </div>
</div>

@endsection