@extends('apnadental.master')
@section("content")

<style>

</style>
<main class="my_account-page">
    <div class="container py-5">
        <div class="row g-3">
            <div class="col-md-4">
                <div class="nav flex-column nav-pills me-3 gap-3" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                        aria-selected="true">Manage family Members</button>
                    <button class="nav-link" id="v-pills-three-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-three" type="button" role="tab" aria-controls="v-pills-three"
                        aria-selected="false" three>My Pharmacy Orders</button>
                    <button class="nav-link" id="v-pills-orders-appointments-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-orders-appointments" type="button" role="tab"
                        aria-controls="v-pills-orders-appointments" aria-selected="false">Orders & Appointments</button>
                    <button class="nav-link" id="v-pills-refer-earn-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-refer-earn" type="button" role="tab" aria-controls="v-pills-refer-earn"
                        aria-selected="false">Refer & Earn</button>
                    <button class="nav-link" id="v-pills-need-help-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-need-help" type="button" role="tab" aria-controls="v-pills-need-help"
                        aria-selected="false">Need Help</button>
                    <button class="nav-link" id="v-pills-about-apna-dental-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-about-apna-dental" type="button" role="tab"
                        aria-controls="v-pills-about-apna-dental" aria-selected="false">About Apna Dental</button>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content bg-white" id="v-pills-tabContent">
                    <!-- Manage family Members Tab content  -->
                    <div class="tab-pane py-3 px-0 px-sm-3 fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab" tabindex="0">
                        <div class="card mb-3 add-member bg-light">
                            <div class="d-flex flex-wrap flex-sm-nowrap justify-content-center gap-2">
                                <div class="member-img-wraper flex-shrink-0 text-center">
                                    <img src="{{ asset('public/assets/img/doctor-lady.jpg') }}" alt="doctor-lady.jpg"
                                        class="img-fluid rounded-start">
                                </div>
                                <div class="w-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between flex-wrap gap-2">
                                            <h5 class="card-title mb-0">deepak kumar</h5>
                                            <ul class="d-flex flex-nowrap mb-0">
                                                <li><a href="#">Self</a></li>
                                                <li class="border-start border-end mx-2 px-2"><a href="#">Male</a></li>
                                                <li><a href="#">28</a></li>
                                            </ul>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-flex justify-content-between">
                                            <p class="card-title mb-0">UHID:&nbsp;<span>654356</span></p>
                                            <div class="text-end">
                                                <p class="mb-2">DBO: &nbsp;<span>10 Feb, 1995</span></p>
                                                <p class="mb-2">+91 9876543210</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Button trigger modal -->
                        <button type="button" class="btn_1 mb-3" data-bs-toggle="modal" data-bs-target="#addNewFamily ">
                            Add New Profile
                        </button>

                        <!-- Modal -->
                        <!-- <div class="modal fade" id="addNewFamily" tabindex="-1" aria-labelledby="addNewFamilyLabel"
                            aria-hidden="true"> -->
                        <div class="modal-dialog modal-dialog-scrollable shadow add-member-modal">
                            <div class="modal-content">
                                <div class="modal-header p-3 border-bottom">
                                    <h1 class="modal-title fs-5" id="addNewFamilyLabel">ADD NEW FAMILY MEMBER</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-3">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label fw-bold">Full Name</label>
                                            <input type="text" class="form-control" id="recipient-name"
                                                placeholder="First Name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="recipient-name"
                                                placeholder="Last Name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label fw-bold">Date Of
                                                Birth</label>
                                            <input type="text" class="form-control" id="recipient-name"
                                                placeholder="DD/MM/YYYY">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label fw-bold">Gender</label>
                                            <div class="d-flex gap-2">
                                                <div>
                                                    <input class="btn-check form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label btn btn-outline-primary"
                                                        for="flexRadioDefault1">
                                                        Male
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="btn-check form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label btn btn-outline-primary"
                                                        for="flexRadioDefault2">
                                                        Female
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="btn-check form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault3" checked>
                                                    <label class="form-check-label btn btn-outline-primary"
                                                        for="flexRadioDefault3">
                                                        Other
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label fw-bold" for="relation">Relation</label>
                                            <select class="form-select" id="relation" aria-label="Relation select">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="col-form-label fw-bold">Email Address (Optional)
                                            </label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Email@example.com">
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer p-3 gap-2 border-top">
                                    <button type="button" class="btn btn_outline_2"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn_2">Save</button>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->

                    </div>

                    <!-- My Pharmacy Orders tab Content  -->
                    <div class="tab-pane p-3 fade" id="v-pills-three" role="tabpanel"
                        aria-labelledby="v-pills-three-tab" tabindex="0">...</div>

                    <!-- Orders & Appointments tab content -->
                    <div class="tab-pane p-3 fade" id="v-pills-orders-appointments" role="tabpanel"
                        aria-labelledby="v-pills-orders-appointments-tab" tabindex="0">
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
                                        <button class="btn btn_outline_2">View Details</button>
                                        <button class="btn btn_2">Book Follow up</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- <div class="modal fade" id="consultation-details" tabindex="-1" aria-labelledby="consultation-detailsLabel"
                            aria-hidden="true"> -->
                        <div class="modal-dialog modal-dialog-scrollable shadow add-member-modal">
                            <div class="modal-content">
                                <div class="modal-header p-3 border-bottom">
                                    <h1 class="modal-title fs-5 txt-primary" id="consultation-detailsLabel">Consultation
                                        Details</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body py-3">
                                    <div class="card-body py-3">
                                        <div class="d-flex justify-content-between px-3 gap-2 flex-wrap">
                                            <div>
                                                <h4 class="card-title small text-success mb-2">Appointment ID:
                                                    <span>5346545</span>
                                                </h4>
                                                <h5 class="text-capitalize fw-bold txt-secondary">Dr. Rupanshee</h5>

                                            </div>
                                            <div>
                                                <h6>Patient Name: <span class="txt-secondary">Deepak Kumar</span></h6>
                                                <p class="card-text">22 feb 2023, 10:48PM</p>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="payment-details px-3">
                                            <h5 class="modal-title mb-2 txt-secondary" id="consultation-detailsLabel">
                                                Payment Details</h5>
                                            <ul class="list-group">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Amount Paid
                                                    <span>14</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Booking Fee
                                                    <span>2</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center fw-bold text-info">
                                                    Discount Applied
                                                    <span>-0</span>
                                                </li>


                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    <button class="btn btn_2">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <img src="{{ asset('public/assets/img/pdf-icon.png') }}"
                                                                    alt="doctor-lady.jpg"
                                                                    class="img-fluid rounded-start" width="40px">
                                                            </div>
                                                            <div class="ms-2 text-start">
                                                                Payment Receipt
                                                                <p class="mb-0 small fw-light">View & Download</p>
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
                                            <h4 class="card-title small text-success mb-2">Reschedule & Cancellation
                                            </h4>
                                            <p>Reschedule and Cancellation is allowed:</p>
                                            <div class="row g-3">
                                                <div class="col-12 col-sm-6">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <img src="{{ asset('public/assets/img/dentist-time-clock.png') }}"
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
                                                            <img src="{{ asset('public/assets/img/dentist-time-clock.png') }}"
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
                                                            <img src="{{ asset('public/assets/img/pdf-icon.png') }}"
                                                                alt="doctor-lady.jpg" class="img-fluid rounded-start"
                                                                width="40px">
                                                        </div>
                                                        <div class="ms-2 text-start">
                                                            View Consultation Guidelines
                                                            <p class="mb-0 small fw-light">View & Download</p>
                                                        </div>
                                                    </div>

                                                </button>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="modal-footer p-3 gap-2 border-top">
                                    <button type="button" class="btn btn_outline_2" data-bs-dismiss="modal">Book
                                        Again</button>
                                    <button type="button" class="btn btn_2">View Prescription</button>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->



                    </div>

                    <!-- Refer & Earn tab content  -->
                    <div class="tab-pane p-3 fade" id="v-pills-refer-earn" role="tabpanel"
                        aria-labelledby="v-pills-refer-earn-tab" tabindex="0">

                        <div>
                            <h4 class="txt-primary mb-3 h5">Refer & Earn</h4>
                            <div class="card text-bg-light mb-3">
                                <div class="card-body pt-0 pb-2">

                                    <div class="row align-items-center bg-verticle-gradient py-3">
                                        <div class="col-12 col-sm-8">
                                            <div class="text-center">
                                                <h5 class="h2 fw-bold mb-3 txt-secondary">Enjoying our service and <span
                                                        class="h1 fw-bold d-block">
                                                        <i class="icon-rupee"></i>Discounts?</span>
                                                </h5>
                                                <p class="h5">Spread the positivity to your friends and
                                                    family</p>
                                            </div>

                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <img class="w-100" src="{{ asset('public/assets/img/money.svg') }}"
                                                alt="refer image">
                                        </div>
                                    </div>


                                    <div class="row py-3">
                                        <div class="col-12">
                                            <div class="d-flex align-items-center justify-content-center py-3">
                                                <span class="border-bottom border-top border-secondary px-5"></span>
                                                <h4 class="mb-0 mx-2">Refer via</h4>
                                                <span class="border-bottom border-top border-secondary px-5"></span>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-center flex-wrap gap-3">
                                                <button class="btn btn_outline_2">Invite on Whatsapp</button>
                                                <button class="btn btn_2">Copy Referral link</button>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <h5>Refer to your friend and family so that they can also experience:</h5>

                                            <ul class="list-group">
                                                <li class="list-group-item d-flex align-items-center gap-2">
                                                    <div class="rounded-circle bg-primary bg-opacity-25 p-1">
                                                        <i class="icon-mail fs-3 txt-secondary"></i>
                                                    </div>
                                                    <h5 class="mb-0">2 Hour Medicine Delivery</h5>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center gap-2">
                                                    <div class="rounded-circle bg-primary bg-opacity-25 p-1">
                                                        <i class="icon-dollar fs-3 txt-secondary"></i>
                                                    </div>
                                                    <h5 class="mb-0">Awesome Discounts and Cashbacks</h5>
                                                </li>
                                                <li class="list-group-item d-flex align-items-center gap-2">
                                                    <div class="rounded-circle bg-primary bg-opacity-25 p-1">
                                                        <i class="icon-bag fs-3 txt-secondary"></i>
                                                    </div>
                                                    <h5 class="mb-0">A wide range of Products, Doctors & Lab Tests</h5>
                                                </li>
                                            </ul>



                                        </div>
                                    </div>







                                </div>

                                <!-- <div class="card-footer py-3 bg-light">
                                    <a href="">Terms & condition</a>
                                    <a href="">Faqs</a>
                                   
                                </div> -->
                            </div>
                        </div>








                    </div>


                    <!-- Need Help tab content  -->
                    <div class="tab-pane p-3 fade" id="v-pills-need-help" role="tabpanel"
                        aria-labelledby="v-pills-need-help-tab" tabindex="0">...</div>


                    <!-- About Apna Dental tab content  -->
                    <div class="tab-pane p-3 fade" id="v-pills-about-apna-dental" role="tabpanel"
                        aria-labelledby="v-pills-about-apna-dental-tab" tabindex="0">...</div>
                </div>
            </div>
        </div>
    </div>

</main>


<script>

</script>
@endsection("content")