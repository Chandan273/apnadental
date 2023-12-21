@extends('apnadental_mobile.master')
@section("content")

<div class="container-fluid">
    <div class="top-bar my-3 py-2 d-flex justify-content-between align-items-center">
        <a href="javascript:void(0)" class="text-reset" onclick="goBack()">
            <img src="{{ asset('public/assets/mobileImages/arrow-back.svg') }}" alt="arrow-back">
        </a>
        <button class="btn ms-auto">
            <img src="{{ asset('public/assets/mobileImages/share.svg') }}" alt="share">
        </button>
        <button class="btn ">
            <img src="{{ asset('public/assets/mobileImages/chat.svg') }}" alt="chat">
        </button>
    </div>

    <div class="col-12 col-md-6">
        <h3 class="mb-4">Patient Details</h3>
        <form class="row" id="configform">

            <div class="col-12 mb-3">
                <h6 class="text-black mb-0">This in-clinic appointment is for:</h6>
            </div>

            <div class="col-12 mb-2">
                <div class="border rounded px-12-py-6">
                    <label class="form-check-label mb-0 service-for rounded" for="myself">
                        <input class="form-check-input me-2" type="radio" name="bookingStatus" id="myself"
                            value="myself" checked="">
                        Myself
                    </label>
                </div>
            </div>

            <div class="col-12 mb-2">
                <div class="border rounded px-12-py-6">
                    <label class="form-check-label mb-0 service-for rounded" for="someOneElse">
                        <input class="form-check-input me-2" type="radio" name="bookingStatus" id="someOneElse"
                            value="somelse">
                        Someone Else
                    </label>
                </div>
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
            <div class="col-12 my-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                    <label class="form-check-label fs-sm" for="flexCheckChecked">
                        Get update an Whatsapp number +91 <span class="whats-app-cls">9876543210</span>
                    </label>
                </div>
            </div>

            <div class="col-12 mb-2">
                <a href="javascript:void(0)" class="btn button-pink-fill w-100 confirmBooking">Confirm
                    Booking</a>
            </div>

        </form>
    </div>

    <!-- ads  -->
    <div class="bg-primary rounded-4 my-3 p-3 mb-4 position-relative overflow-hidden">
        <p class="mb-0 text-info">introductory offer</p>
        <h4 class="text-white">Video </br>Consultation</h4>
        <a href="#" class="btn mt-2 button-pink-fill"> Book appointment </a>
        <img src="{{ asset('public/assets/mobileImages/video-consultation.svg') }}" class="position-absolute object-fit-contain end-0 bottom-0"
            alt="book appointment for video consultation">
    </div>

</div>
@endsection