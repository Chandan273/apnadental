@extends('apnadental_mobile.master')
@section("content")

<div>

        <div class="container-fluid">
            <div>
                <h4 class="txt-primary mb-3 h5">All Appointment</h4>
                <div class="card text-bg-light mb-3">
                    <div class="card-body py-3">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title small text-success">Online Consultation</h4>
                                <h5 class="text-capitalize fw-bold txt-secondary">Dr. Rupanshee</h5>
                                <p class="card-text">Family Physician</p>
                            </div>
                            <div>
                                <h6 class="text-warning">Completed</h6>
                                <p class="mb-0">02/05/2023</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer py-3 bg-light">
                        <h6 class="text-capitalize">Patient name <span class="fw-bold">Deepak Kumar</span>
                        </h6>
                        <p>Book your slot with the doctor for a follow up consultation </p>
                        <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap">
                            <button class="btn button-pink-outline" data-bs-toggle="modal"
                                data-bs-target="#consultation-details">View Details</button>
                            <button class="btn button-pink-fill">Book Follow up</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- The model will run with the 'View Details' button -->

            <div class="modal fade" id="consultation-details" tabindex="-1" aria-labelledby="consultation-detailsLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable shadow add-member-modal">
                    <div class="modal-content">
                        <div class="modal-header p-3 border-bottom">
                            <h1 class="modal-title fs-5 txt-primary" id="consultation-detailsLabel">
                                Consultation
                                Details</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body py-3">
                            <div class="card-body py-3">
                                <div class="px-3">
                                    <div>
                                        <h4 class="card-title small text-success mb-2">Appointment ID:
                                            <span>5346545</span>
                                        </h4>
                                        <h5 class="text-capitalize fw-bold txt-secondary">Dr. Rupanshee</h5>

                                    </div>
                                    <div>
                                        <h6>Patient Name: <span class="txt-secondary">Deepak Kumar</span>
                                        </h6>
                                        <p class="card-text">22 feb 2023, 10:48PM</p>
                                    </div>
                                </div>
                                <hr>

                                <div class="payment-details px-3">
                                    <h5 class="modal-title mb-2 txt-secondary" id="consultation-detailsLabel">
                                        Payment Details</h5>
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Amount Paid
                                            <span>14</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Booking Fee
                                            <span>2</span>
                                        </li>
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center fw-bold text-info">
                                            Discount Applied
                                            <span>-0</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <button class="btn btn_2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img src="https://apnadental.in/public/assets/img/pdf-icon.png"
                                                            alt="doctor-lady.jpg" class="img-fluid rounded-start"
                                                            width="40px">
                                                    </div>
                                                    <div class="ms-2 text-start">
                                                        Payment Receipt
                                                        <p class="mb-0 small fw-light">View &amp; Download</p>
                                                    </div>
                                                </div>

                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="consultation-guidline px-3">
                                    <h5 class="modal-title mb-2 txt-primary">
                                        Consultation Guidelines</h5>
                                    <h4 class="card-title small text-success mb-2">Reschedule &amp; Cancellation
                                    </h4>
                                    <p>Reschedule and Cancellation is allowed:</p>
                                    <div class="row g-3">
                                        <div class="col-12 col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img src="https://apnadental.in/public/assets/img/dentist-time-clock.png"
                                                        alt="doctor-lady.jpg" class="img-fluid rounded-start"
                                                        width="40px">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1">15 mins</h6>
                                                    <p class="mb-0 small">prior to the start</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img src="https://apnadental.in/public/assets/img/dentist-time-clock.png"
                                                        alt="doctor-lady.jpg" class="img-fluid rounded-start"
                                                        width="40px">
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1">10 mins</h6>
                                                    <p class="mb-0 small">after the appointment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="txt-secondary">View More</h5>
                                        <button class="btn btn_2">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img src="https://apnadental.in/public/assets/img/pdf-icon.png"
                                                        alt="doctor-lady.jpg" class="img-fluid rounded-start"
                                                        width="40px">
                                                </div>
                                                <div class="ms-2 text-start">
                                                    View Consultation Guidelines
                                                    <p class="mb-0 small fw-light">View &amp; Download</p>
                                                </div>
                                            </div>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer p-3 gap-2 border-top">
                            <button type="button" class="btn button-pink-outline" data-bs-dismiss="modal">Book
                                Again</button>
                            <button type="button" class="btn button-pink-fill">View Prescription</button>
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
                            <img width="25px" src="{{ asset('public/assets/mobileImages/order-icon.svg') }}" alt="My-Orders-icon">My Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-end link-text-danger-hover gap-3" aria-current="page"
                            href="#">
                            <img width="25px" src="{{ asset('public/assets/mobileImages/microscope.svg') }}" alt="Test-Bookings-icon">Test Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-end link-text-danger-hover gap-3" aria-current="page"
                            href="#">
                            <img width="25px" src="{{ asset('public/assets/mobileImages/telephone.svg') }}" alt="eConsultation-icon">eConsultation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-end link-text-danger-hover gap-3" aria-current="page"
                            href="#">
                            <img width="25px" src="{{ asset('public/assets/mobileImages/policy.svg') }}" alt="Buy-Subscription-icon">Buy
                            Subscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-end link-text-danger-hover gap-3" aria-current="page"
                            href="#">
                            <img width="25px" src="{{ asset('public/assets/mobileImages/reminder.svg') }}" alt="Reminders-icon">Reminders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-end link-text-danger-hover gap-3" aria-current="page"
                            href="#">
                            <img width="25px" src="{{ asset('public/assets/mobileImages/wallet-icon.svg') }}" alt="Wallet-icon">Wallet <span
                                class="ms-auto">5100</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-end link-text-danger-hover gap-3" aria-current="page"
                            href="#">
                            <img width="25px" src="{{ asset('public/assets/mobileImages/doctor-nav-icon.svg') }}" alt="My Doctors-icon">My Doctors</a>
                    </li>
                </ul>

            </nav>
        </div>
    </div>



</div>
@endsection