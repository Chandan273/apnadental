@extends('apnadental_mobile.master')
@section("content")
<div>
    <div class="container-fluid">
        <div class="card mb-3 overflow-hidden bg-light">
            <div class="overflow-hidden text-center">
                <img src="https://apnadental.in/public/assets/img/doctor-lady.jpg" alt="doctor-lady.jpg" class="w-100">
            </div>

            <div class="card-body">
                <div class="d-flex justify-content-between flex-wrap gap-2">
                    <h5 class="card-title mb-0">deepak kumar</h5>
                    <ul class="d-flex flex-nowrap mb-0 list-unstyled">
                        <li><a href="#">Self</a></li>
                        <li class="border-start border-end mx-2 px-2"><a href="#">Male</a></li>
                        <li><a href="#">28</a></li>
                    </ul>
                </div>
                <hr class="my-3">
                <div class="d-flex justify-content-between flex-wrap">
                    <p class="card-title mb-0">UHID:&nbsp;<span>654356</span></p>
                    <p class="mb-2 text-end">DBO: &nbsp;<span>10 Feb, 1995</span></p>

                    <p class="mb-2">MOB:&nbsp;<span>+91 9876543210</span></p>
                </div>
            </div>
        </div>


        <!-- Button trigger modal -->
        <button type="button" class="btn button-pink-fill mb-3" data-bs-toggle="modal" data-bs-target="#addNewFamily ">
            Add New Profile
        </button>

        <!-- The model will run with the 'Add New Profile' button -->

        <div class="modal fade" id="addNewFamily" tabindex="-1" aria-labelledby="addNewFamilyLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable add-member-modal">
                <div class="modal-content">
                    <div class="modal-header p-3 border-bottom">
                        <h1 class="modal-title fs-5" id="addNewFamilyLabel">ADD NEW FAMILY MEMBER</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-3">
                        <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label fw-bold">Full Name</label>
                                <input type="text" class="form-control" id="recipient-name" placeholder="First Name">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="recipient-name" placeholder="Last Name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label fw-bold">Date Of
                                    Birth</label>
                                <input type="text" class="form-control" id="recipient-name" placeholder="DD/MM/YYYY">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label fw-bold">Gender</label>
                                <div class="d-flex gap-2">
                                    <div>
                                        <input class="btn-check form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label btn btn-outline-primary" for="flexRadioDefault1">
                                            Male
                                        </label>
                                    </div>
                                    <div>
                                        <input class="btn-check form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked="">
                                        <label class="form-check-label btn btn-outline-primary" for="flexRadioDefault2">
                                            Female
                                        </label>
                                    </div>
                                    <div>
                                        <input class="btn-check form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault3" checked="">
                                        <label class="form-check-label btn btn-outline-primary" for="flexRadioDefault3">
                                            Other
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label fw-bold" for="relation">Relation</label>
                                <select class="form-select" id="relation" aria-label="Relation select">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="col-form-label fw-bold">Email Address (Optional)
                                </label>
                                <input type="email" class="form-control" id="email" placeholder="Email@example.com">
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer p-3 gap-2 border-top">
                        <button type="button" class="btn button-pink-outline" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn button-pink-fill">Save</button>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- my account left bar modal -->
    <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button> -->

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

@endsection