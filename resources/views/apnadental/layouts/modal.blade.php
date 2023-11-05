<!-- The Modal -->
<div class="modal modal-xl" id="bookModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
            <a class="h4 modal-title" id="modalHeading">Login</a>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">

            <!-- Booking Login Form -->
            <div class="login_card card px-3 py-4 mb-4" id="slotCard">
                <div class="row align-items-center g-4">
                    <div class="col-12 col-md-6">
                        <img class="mb-3" src="{{ asset('public/assets/img/apna_dental_logo.svg') }}" alt="brand logo" width="100px">
                        <h6 class="h5">Stay protected with Term Life Insurance</h6>
                        <p>Secure the future of your family with Rs. 1Cr. Life Cover starting $425/month</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <form class="text-center bg-light px-3 py-4 hadow-sm rounded-3" id="otpDoctorLogin">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" name="phone_no" class="form-control" placeholder="Enter Phone Number">
                            </div>
                            
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Enter OTP" name="otp">
                            </div>
                              
                            <input class="btn_1 rounded-2 btn-primary w-100" type="submit" value="Book a Slot Now">
                            <div class="text-danger error-message"></div>    
                            <small class="mt-2 d-block">Life Insurance partner will get in touch with you soon.</small>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Book Time Slot -->
            <div class="card p-3 mb-3 time-slot-cls" id="Timeslot" style="display:none">
                <!-- ... Tabs and their content ... -->
                <div class="tab-content py-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <form id="booking-form">
                            <div class="row g-3 align-items-end">
                                <!-- Date Input -->
                                <div class="col">
                                    <label for="datepicker">Select Date:</label>
                                    <input type="date" id="datepicker" class="form-control" required>
                                </div>
                                <div class="col">
                                    <label for="start-time-select">Select Start Time:</label>
                                    <input type="time" id="start_time" class="form-control" required>
                                </div>
                                <!-- End Time Input -->
                                <div class="col">
                                    <label for="end-time-select">Select End Time:</label>
                                    <input type="time" id="end_time" class="form-control" required>
                                </div>
                                <div class="col">
                                    <button type="button" id="bookAppointment" class="btn btn_pink py-2 w-100 rounded-2 btn-primary book-appointment-cls">Book Slot</button>
                                </div>
                            </div>
                            <!-- Checkbox buttons for slots can remain as they are -->
                            <!-- ... Checkbox buttons ... -->               
                        </form>
                    </div>
                </div>
            </div>


            <!-- Patient From Starts Here  -->
            <div class="shadow patient-detail-modal mb-3 p-3" style="display:none" id="patientForm">
                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item py-3">
                                   <h4><i class="icon-home-1 text-primary"></i><span id="CompanyName"><span></h4>
                                </li>
                                <li class="list-group-item py-3">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h4>Booking Date: <a href="javascript:void(0);" class="mb-1 h4"><span class="booking-date-cls"></span></a></h4>
                                            <h4>Booking Time: <a href="javascript:void(0);" class="mb-1 h4"><span class="booking-start-time-cls"></span> -
                                                <span class="booking-end-time-cls"></span></a></h4>
                                            <a href="javascript:void(0);" class="backTimeSlot mb-3">Change date & Time</a>
                                        </div>
                                    </div>

                                </li>
                                <li class="list-group-item py-3">
                                    <div class="d-flex">
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="mb-4">Patient Details</h3>
                        <form class="row" id="configform">
                           
                            <div class="col-12 mb-3">
                                <h6 class="text-black mb-0">This in-clinic appointment is for:</h6>
                            </div>

                            <div class="col-12 mb-2">
                                <label class="form-check-label mb-0 service-for rounded" for="myself">
                                    <input class="form-check-input me-2" type="radio" name="bookingStatus" id="myself" value="myself" checked>
                                    Myself
                                </label>
                            </div>
                            
                            <div class="col-12 mb-2">
                                <label class="form-check-label mb-0 service-for rounded" for="someOneElse">
                                    <input class="form-check-input me-2" type="radio" name="bookingStatus" id="someOneElse" value="somelse">
                                    Someone Else
                                </label>
                            </div>
                         
                            <div class="col-12 my-3">
                                <h6 class="text-black mb-0">Please provide following infomation about user:</h6>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="fname" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fname">
                            </div>
                            <div class="col-12 mb-2">
                                <label for="phone" class="form-label">Mobile</label>
                                <input type="number" class="form-control" id="phone">
                            </div>
                            <div class="col-12 mb-2">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                    Get update an Whatsapp number +91 <span class="whats-app-cls"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 mb-2">
                                <a href="javascript:void(0)" class="btn btn-primary w-100 confirmBooking">Confirm Booking</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
  
      </div>
    </div>
  </div>
<!-- CTA fixed positon on stroll end -->