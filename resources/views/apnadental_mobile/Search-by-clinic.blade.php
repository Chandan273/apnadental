@extends('apnadental_mobile.master')
@section("content")

<div class="container-fluid">

    <div class="top-bar my-3 py-2 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <a href="/find-clinic.html" class="text-reset">
                <img src="{{ asset('public/assets/mobileImages/arrow-back.svg') }}" alt="back">
            </a>
            <h3 class="mb-0 ps-3">Cardiology</h3>
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

    <!-- Clinic card  -->
    <div class="mb-4">
        <div class="d-flex doctor-info gap-3 py-4">
            <div>
                <div class="mob-card-img-wrap bg-primary position-relative overflow-hidden rounded-pill">
                    <img src="./img/hospital.svg" class="position-absolute w-100 h-100 object-fit-contain start-0 top-0"
                        alt="">
                </div>

            </div>

            <div class="flex-grow-1">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5 class="mb-1 fs-6">Green Park Dental Clinic</h5>
                        <p class="mb-0 fs-sm">Sector-1</p>
                        <p class="my-2 fs-sm">BDS, MDS - Orthodontics and Dentofacial Orthopaedics</p>
                    </div>
                    <div class="flex-shrink-0">
                        <p class="d-flex reviews mb-0 gap-1 justify-content-end">
                            <span>4.8</span>
                            <i class="bi bi-star-fill text-success"></i>
                        </p>
                        <p class="reviews">56 Reviews</span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-geo-alt-fill"></i>
                    <p class="mb-0 fs-sm">New Delhi, New Delhi, Delhi, 110049</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <form class="form-check d-flex gap-2 align-items-center mb-0">
                <input type="checkbox" class="form-check-input mb-1" id="compareDoctor1">
                <label class="form-check-label fs-sm" for="compareDoctor1">Compare</label>
            </form>
            <div>
                <a href="#" class="btn me-1 d-inline-flex btn-outline-success"><i class="bi bi-telephone-fill pe-2"></i>
                    Call</a>
                <a href="#" class="btn button-pink-fill">Book Now</a>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <div class="d-flex doctor-info gap-3 py-4">
            <div>
                <div class="mob-card-img-wrap bg-primary position-relative overflow-hidden rounded-pill">
                    <img src="{{ asset('public/assets/mobileImages/hospital.svg') }}" class="position-absolute w-100 h-100 object-fit-contain start-0 top-0"
                        alt="">
                </div>
            </div>

            <div class="flex-grow-1">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5 class="mb-1 fs-6">Green Park Dental Clinic</h5>
                        <p class="mb-0 fs-sm">Sector-1</p>
                        <p class="my-2 fs-sm">BDS, MDS - Orthodontics and Dentofacial Orthopaedics</p>
                    </div>
                    <div class="flex-shrink-0">
                        <p class="d-flex reviews mb-0 gap-1 justify-content-end">
                            <span>4.8</span>
                            <i class="bi bi-star-fill text-success"></i>
                        </p>
                        <p class="reviews">56 Reviews</span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-geo-alt-fill"></i>
                    <p class="mb-0 fs-sm">New Delhi, New Delhi, Delhi, 110049</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <form class="form-check d-flex gap-2 align-items-center mb-0">
                <input type="checkbox" class="form-check-input mb-1" id="compareDoctor1">
                <label class="form-check-label fs-sm" for="compareDoctor1">Compare</label>
            </form>
            <div>
                <a href="#" class="btn me-1 d-inline-flex btn-outline-success"><i class="bi bi-telephone-fill pe-2"></i>
                    Call</a>
                <a href="#" class="btn button-pink-fill">Book Now</a>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <div class="d-flex doctor-info gap-3 py-4">
            <div>
                <div class="mob-card-img-wrap bg-primary position-relative overflow-hidden rounded-pill">
                    <img src="{{ asset('public/assets/mobileImages/hospital.svg') }}" class="position-absolute w-100 h-100 object-fit-contain start-0 top-0"
                        alt="">
                </div>

            </div>

            <div class="flex-grow-1">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5 class="mb-1 fs-6">Green Park Dental Clinic</h5>
                        <p class="mb-0 fs-sm">Sector-1</p>
                        <p class="my-2 fs-sm">BDS, MDS - Orthodontics and Dentofacial Orthopaedics</p>
                    </div>
                    <div class="flex-shrink-0">
                        <p class="d-flex reviews mb-0 gap-1 justify-content-end">
                            <span>4.8</span>
                            <i class="bi bi-star-fill text-success"></i>
                        </p>
                        <p class="reviews">56 Reviews</span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-geo-alt-fill"></i>
                    <p class="mb-0 fs-sm">New Delhi, New Delhi, Delhi, 110049</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <form class="form-check d-flex gap-2 align-items-center mb-0">
                <input type="checkbox" class="form-check-input mb-1" id="compareDoctor1">
                <label class="form-check-label fs-sm" for="compareDoctor1">Compare</label>
            </form>
            <div>
                <a href="#" class="btn me-1 d-inline-flex btn-outline-success"><i class="bi bi-telephone-fill pe-2"></i>
                    Call</a>
                <a href="#" class="btn button-pink-fill">Book Now</a>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <div class="d-flex doctor-info gap-3 py-4">
            <div>
                <div class="mob-card-img-wrap bg-primary position-relative overflow-hidden rounded-pill">
                    <img src="{{ asset('public/assets/mobileImages/hospital.svg') }}" class="position-absolute w-100 h-100 object-fit-contain start-0 top-0"
                        alt="hospital">
                </div>
            </div>

            <div class="flex-grow-1">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5 class="mb-1 fs-6">Green Park Dental Clinic</h5>
                        <p class="mb-0 fs-sm">Sector-1</p>
                        <p class="my-2 fs-sm">BDS, MDS - Orthodontics and Dentofacial Orthopaedics</p>
                    </div>
                    <div class="flex-shrink-0">
                        <p class="d-flex reviews mb-0 gap-1 justify-content-end">
                            <span>4.8</span>
                            <i class="bi bi-star-fill text-success"></i>
                        </p>
                        <p class="reviews">56 Reviews</span>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-geo-alt-fill"></i>
                    <p class="mb-0 fs-sm">New Delhi, New Delhi, Delhi, 110049</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <form class="form-check d-flex gap-2 align-items-center mb-0">
                <input type="checkbox" class="form-check-input mb-1" id="compareDoctor1">
                <label class="form-check-label fs-sm" for="compareDoctor1">Compare</label>
            </form>
            <div>
                <a href="#" class="btn me-1 d-inline-flex btn-outline-success"><i class="bi bi-telephone-fill pe-2"></i>
                    Call</a>
                <a href="#" class="btn button-pink-fill">Book Now</a>
            </div>
        </div>
    </div>

</div>
@endsection