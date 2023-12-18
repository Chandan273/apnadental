@extends('apnadental_mobile.master')
@section("content")
<div class="bg-primary">
    <div class="container-fluid">
        <div class="d-flex flex-column justify-content-center vh-100">
            <div class="mt-auto">
                <div class="text-center">
                    <h1 class="fw-bold text-white">Apna Dental</h1>
                    <h2 class="fs-sm mb-5 fw-light text-white">Your Personal Medical Assistant</h2>
                </div>
                <form>
                    <div class="position-relative">
                        <input type="tel" class="form-control form-control-lg pe-5" placeholder="Enter your Number"
                            value="9876543210">
                        <button type="button"
                            class="btn button-pink-fill d-flex align-items-center justify-content-center p-2 position-absolute end-0 top-50 translate-middle-y me-2"
                            data-bs-toggle="offcanvas" data-bs-target="#otp-verification"
                            aria-controls="otp-verification">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <div class="mt-auto text-center mb-3">
                <a href="#" class="link-underline link-underline-opacity-0 text-dark fs-5 fw-bold text-white">I will
                    Sign up Later</a>
                <p class="fs-sm text-center text-white mt-2">By Continuing, you agree to our <a href="#"
                        class="text-pink"> Terms & Conditions</a></p>
            </div>
        </div>
    </div>


    <div class="offcanvas offcanvas-bottom otp-verific-offcanvas rounded-top-4" tabindex="-1" id="otp-verification"
        aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-body small">
            <div class="main-head mt-2">
                <h2 class="offcanvas-title mb-2" id="offcanvasBottomLabel">Verify OTPs</h2>
                <p class="mb-0 text-secondary mb-1">We have sent an OTP to your mobile number</p>
                <p class="text-secondary">98100 98100 <a href="#" class="text-decoration-none text-pink">Change</a>
                </p>
            </div>

            <div id="otp" class="otp-inputs d-flex flex-row justify-content-start my-5 gap-2">
                <input class="text-center form-control rounded" type="number" id="first" maxlength="1" />
                <input class="text-center form-control rounded" type="number" id="second" maxlength="1" />
                <input class="text-center form-control rounded" type="number" id="third" maxlength="1" />
                <input class="text-center form-control rounded" type="number" id="fourth" maxlength="1" />
                <input class="text-center form-control rounded" type="number" id="fifth" maxlength="1" />
                <input class="text-center form-control rounded" type="number" id="sixth" maxlength="1" />
            </div>
            <div class="offcanvas-footer pt-5">
                <p class="mb-1 text-secondary">Didn’t receive the code?</p>
                <a href="#" type="button" class="text-decoration-none text-pink">Resend code</a>
            </div>
        </div>
    </div>

</div>

@endsection