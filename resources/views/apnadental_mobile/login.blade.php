@extends('apnadental_mobile.master')
@section("content")

<div class="bg-primary">
    <div class="container-fluid">
        <div class="d-flex flex-column justify-content-center vh-100">
            <div class="mt-auto">
                <div class="text-center">
                    <h1 class="fw-bold text-white">My Login</h1>
                    <h2 class="fs-sm mb-5 fw-light text-white">Your Personal Medical Assistant</h2>
                </div>
                <form>
                    <div class="position-relative">
                        <input type="tel" name="phone_no" id="phone" class="form-control form-control-lg pe-5" placeholder="Enter your Number" pattern="[789][0-9]{9}" title="Enter Phone Number" required>

                        <button type="button" id="validate_phone_no" class="btn button-pink-fill d-flex align-items-center justify-content-center p-2 position-absolute end-0 top-50 translate-middle-y me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                            </svg>
                        </button>

                        <button type="button" id="show_otp_modal" class="d-none btn button-pink-fill d-flex align-items-center justify-content-center p-2 position-absolute end-0 top-50 translate-middle-y me-2"
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
                <p class="fs-sm text-center text-white mt-2">By Continuing, you agree to our <a href="#" class="text-pink">Terms & Conditions</a></p>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-bottom otp-verific-offcanvas rounded-top-4" tabindex="-1" id="otp-verification"
        aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-body small">
            <div class="main-head mt-2">
                <h2 class="offcanvas-title mb-2" id="offcanvasBottomLabel">Verify OTPs</h2>
                <p class="mb-0 text-secondary mb-1">We have sent an OTP to your mobile number</p>
                <p class="text-secondary"><span id="show_phoneno"></span> <!--a href="#" class="text-decoration-none text-pink">Change</a-->
                </p>
            </div>

            <!-- Your OTP input fields -->
            <div id="otp" class="otp-inputs d-flex flex-row justify-content-start my-5 gap-2">
                <input class="text-center form-control rounded" type="number" id="first" maxlength="1" />
                <input class="text-center form-control rounded" type="number" id="second" maxlength="1" />
                <input class="text-center form-control rounded" type="number" id="third" maxlength="1" />
                <input class="text-center form-control rounded" type="number" id="fourth" maxlength="1" />
                <input class="text-center form-control rounded" type="number" id="fifth" maxlength="1" />
                <input class="text-center form-control rounded" type="number" id="sixth" maxlength="1" />
            </div>
            <form id="otp_login">
                @csrf
                <input type="hidden" id="phone_no" name="phone_no">
                <input type="hidden" id="otp_number" name="otp">
                <button type="submit" id="loginBtn" class="btn btn-primary d-none">Login</button>
            </form>
            <div class="offcanvas-footer pt-5">
                <p class="mb-1 text-secondary">Didn’t receive the code?</p>
                <a href="javascript:void(0)" type="button" class="resendOtpBtn text-decoration-none text-pink">Resend code</a>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function(){
        $("#validate_phone_no").click(function(){

            var phoneNumber = $("#phone").val().trim();
            
            if(phoneNumber === ""){
                Swal.fire({
                    icon: 'error',
                    text: "Phone number is required",
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                return false;
            } else {
                var phonePattern = /^[789]\d{9}$/; // Regular expression to match Indian phone numbers
                if (!phonePattern.test(phoneNumber)) {
                    Swal.fire({
                        icon: 'error',
                        text: "Please enter a valid phone number",
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });
                    return false;
                }
            }
            let orderId = Math.floor(100000 + Math.random() * 900000);
			let csrfToken = $('meta[name="csrf-token"]').attr('content');

            let formData = {
                _token: csrfToken,
                phoneNumber: phoneNumber,
                orderId: orderId
            };

            $.ajax({
                type: "POST",
                url: "{{ route('otplessSendOtp.post') }}",
                data: formData,
                success: function(response) {
                    if (response.success) {
                        
                        $("#show_phoneno").text(phoneNumber);
                        $("#show_otp_modal").trigger("click");
                        $("#phone_no").val(phoneNumber);
                        
                        Swal.fire({
                            icon: 'success',
                            text: response.message,
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 2000
                        });

                        localStorage.setItem("orderId", orderId);

                        $(".sendOtpBtn").addClass('d-none');
                        $(".loginOtpBtn").removeClass('d-none');
                        $(".resend-otp-footer").removeClass('d-none');
                    
                    } else {
                        $('#overlay').addClass('d-none');
                        Swal.fire({
                            icon: 'error',
                            text: response.message,
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
    });

    $(document).ready(function () {
        // Function to combine OTP and update the hidden input field
        function updateOTP() {
            var otp = '';
            $('.otp-inputs input').each(function () {
                otp += $(this).val();
            });
            $('#otp_number').val(otp);

            // Show the Login button if all OTP fields are filled
            if (otp.length === 6) {
                $('#loginBtn').removeClass('d-none');
            } else {
                $('#loginBtn').addClass('d-none');
            }
        }

        // Trigger updateOTP function on OTP input field change
        // $('.otp-inputs input').on('input', function () {
        //     if ($(this).val().length > 0) {
        //         $(this).next('input').focus();
        //     }
        //     updateOTP();
        // });

        // Function to handle manual input in OTP fields
        $('.otp-inputs input').on('input', function (e) {
            var inputValue = $(this).val();

            // Check if the input value is not empty and contains non-numeric characters
            if (inputValue.length > 0 && /[^0-9]/.test(inputValue)) {
                // Show validation message for non-numeric input
                $(this).val('');

                Swal.fire({
                    icon: 'error',
                    text: 'Please enter valid OTP.',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });

                return;
            }

            if (inputValue.length > 0) {
                $(this).next('input').focus();
            }

            updateOTP();
        });

        // Function to handle manual input in OTP fields
        $('.otp-inputs input').on('keydown', function (e) {
            var key = e.which || e.keyCode;
            if (key === 8 || key === 46) {
                var prevInput = $(this).prev('input');
                if ($(this).val().length === 0 && prevInput.length > 0) {
                    prevInput.focus();
                }
            }
        });

        // Handle focus when user clicks inside the OTP fields
        $('.otp-inputs input').on('click', function () {
            $(this).select();
        });
    });

</script>

@endsection