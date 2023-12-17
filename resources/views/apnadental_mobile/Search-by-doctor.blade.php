@extends('apnadental_mobile.master')
@section("content")

<div class="container-fluid">
    <div class="top-bar mb-1 py-2 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <a class="text-reset" href="/Search-by-tretment.html">
                <img src="{{ asset('public/assets/mobileImages/arrow-back.svg') }}" alt="back-arrow">
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

    <!-- Doctor card  -->
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
                        <p class="d-flex reviews mb-0 gap-1 justify-content-end">
                            <span>4.8</span>
                            <i class="bi bi-star-fill text-success"></i>
                        </p>
                        <p class="reviews">56 Reviews</span>
                    </div>
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
                <a href="/appointment.html" class="btn button-pink-fill">Book appointment</a>
            </div>
        </div>
    </div>


    <!-- card 2 -->
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
                        <p class="d-flex reviews mb-0 gap-1 justify-content-end">
                            <span>4.8</span>
                            <i class="bi bi-star-fill text-success"></i>
                        </p>
                        <p class="reviews">56 Reviews</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <form class="form-check d-flex gap-2 align-items-center mb-0">
                <input type="checkbox" class="form-check-input mb-1" id="compareDoctor2">
                <label class="form-check-label fs-sm" for="compareDoctor2">Compare</label>
            </form>
            <div>
                <a href="#" class="btn me-1 d-inline-flex btn-outline-success"><i class="bi bi-telephone-fill pe-2"></i>
                    Call</a>
                <a href="/appointment.html" class="btn button-pink-fill">Book appointment</a>
            </div>
        </div>
    </div>
    <!-- card 2 -->
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
                        <p class="d-flex reviews mb-0 gap-1 justify-content-end">
                            <span>4.8</span>
                            <i class="bi bi-star-fill text-success"></i>
                        </p>
                        <p class="reviews">56 Reviews</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <form class="form-check d-flex gap-2 align-items-center mb-0">
                <input type="checkbox" class="form-check-input mb-1" id="compareDoctor3">
                <label class="form-check-label fs-sm" for="compareDoctor3">Compare</label>
            </form>
            <div>
                <a href="#" class="btn me-1 d-inline-flex btn-outline-success"><i class="bi bi-telephone-fill pe-2"></i>
                    Call</a>
                <a href="/appointment.html" class="btn button-pink-fill">Book appointment</a>
            </div>
        </div>
    </div>
    <!-- card 2 -->
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
                        <p class="d-flex reviews mb-0 gap-1 justify-content-end">
                            <span>4.8</span>
                            <i class="bi bi-star-fill text-success"></i>
                        </p>
                        <p class="reviews">56 Reviews</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <form class="form-check d-flex gap-2 align-items-center mb-0">
                <input type="checkbox" class="form-check-input mb-1" id="compareDoctor4">
                <label class="form-check-label fs-sm" for="compareDoctor4">Compare</label>
            </form>
            <div>
                <a href="#" class="btn me-1 d-inline-flex btn-outline-success"><i class="bi bi-telephone-fill pe-2"></i>
                    Call</a>
                <a href="/appointment.html" class="btn button-pink-fill">Book appointment</a>
            </div>
        </div>
    </div>
</div>
@endsection