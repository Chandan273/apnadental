<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
	<title>APNA DENTAL - Find easily a doctor and book online an appointment</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="{{ asset('public/assets/apnadental/img/favicon.ico') }}" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/assets/apnadental/img/apple-touch-icon-57x57-precomposed.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('public/assets/apnadental/img/apple-touch-icon-72x72-precomposed.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('public/assets/apnadental/img/apple-touch-icon-114x114-precomposed.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('public/assets/apnadental/img/apple-touch-icon-144x144-precomposed.png') }}">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
		rel="stylesheet">

	<!-- BASE CSS -->
	<!-- <link href="{{ asset('public/assets/apnadental/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/apnadental/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/apnadental/css/menu.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/apnadental/css/vendors.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/apnadental/css/icon_fonts/css/all_icons_min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css"> -->

	<!-- YOUR CUSTOM CSS -->
	<!-- <link href="{{ asset('public/assets/apnadental/css/custom.css') }}" rel="stylesheet">
	{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}
	<link href="{{ asset('public/assets/css/custom.css') }}" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link href="{{ asset('public/assets/css/custom-mobile.css') }}" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body>
	<div class="layer"></div>

	<!-- Mobile menu overlay mask -->
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	<div class="vh-100 d-flex flex-column justify-content-between">
		@include('apnadental_mobile.layouts.header')
		<div class="overflow-y-auto position-relative">
			@yield('content')
		</div>
		@include('apnadental_mobile.layouts.footer')
	</div>
	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<!-- {{-- <script src="{{ asset('public/assets/apnadental/js/jquery-3.6.3.min.js') }}"></script> --}} -->
	<!-- <script src="{{ asset('public/assets/apnadental/js/common_scripts.min.js') }}"></script>
	<script src="{{ asset('public/assets/apnadental/js/functions.js') }}"></script> -->

	<!-- SPECIFIC SCRIPTS -->
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsYL1hrGBbl8KI_DhiULQGaoMfSkQAjA4&libraries=places"></script>
	<script src="{{ asset('public/assets/apnadental/js/markerclusterer.js') }}"></script>
    <script src="{{ asset('public/assets/apnadental/js/map_home.js') }}"></script>
	<script src="{{ asset('public/assets/apnadental/js/custom.js') }}"></script>
    {{-- <script src="{{ asset('public/assets/apnadental/vendor/js/infobox.js') }}"></script> --}} -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>
	<script>
		function goBack() {
			window.history.back();
		}

		$('#otp_login').submit(function(e) {
				e.preventDefault();
				var formData = $(this).serialize();

				$('.error-message').text("");

				$.ajax({
					type: "POST",
					url: "{{ route('otplogin.post') }}",
					data: formData,
					success: function (response) {
						if (response.success && response.userData) {

							Swal.fire({
								icon: 'success',
								text: `Login Succesfully!`,
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 2000
							})

							$('.userLogincard').hide();
							$('.userPopupcard').show();
							$('.register-card-cls').hide();
							$("#modalHeading").text("Booking Time Slot");
							$('#logged_name').text(response.userData.name);
							$('#logged_email').text(response.userData.email);
							$('#logged_phone').text(response.userData.phone_no);
							$('#mobile_logged_name').text(response.userData.name);
							$('#mobile_logged_email').text(response.userData.email);
							$('#mobile_logged_phone').text(response.userData.phone_no);

							localStorage.setItem("logged", 1);
							localStorage.setItem("user_name", response.userData.name);
							localStorage.setItem("user_email", response.userData.email);
							localStorage.setItem("user_phone_no", response.userData.phone_no);

							$(".login_card").hide();
							$('#Timeslot').fadeIn(1000);

							var currentPageSlug = window.location.pathname.split('/').pop();
							if (currentPageSlug === 'login') {
								setTimeout(function() {
									window.location.href = "<?php echo env('APP_URL'); ?>";
								}, 3000);
							} else {
								// Redirect to the previous page after 3 seconds
								setTimeout(function() {
									window.history.back();
								}, 3000);
							}

						} else {
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
					error: function (xhr, status, error) {
						console.log(xhr.responseText);
					}
				});
			});

			$(".logout").click(function(){
				$.ajax({
					type: "get",
					url: "{{ route('user.logout') }}",
					success: function (response) {
						if (response.success) {
							localStorage.setItem("logged", 0);
							localStorage.setItem("user_name", "");
							localStorage.setItem("user_email", "");
							localStorage.setItem("user_phone_no", "");

							Swal.fire({
								icon: 'success',
								text: `Logout Succesfully!`,
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 1000
							}).then(function() {
								window.location.href = "<?php echo env('APP_URL'); ?>";
							});
						} else {
							$('.error-message').text(response.message);
						}
					},
					error: function (xhr, status, error) {
						console.log(xhr.responseText);
					}
				});
			});

			function bookNow(bookID, companyName, secondaryCategory, workTimings) {
				var datepickerValue = $("#datepicker").val();
			
				if (!datepickerValue) {
					Swal.fire({
						icon: 'error',
						text: "Please select date.",
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					});
					
					return false;
				}

				var currentDate = new Date().toISOString().split('T')[0];

				if (datepickerValue < currentDate) {
					Swal.fire({
						icon: 'error',
						text: "Please select a current date or after today.",
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					});

					return false;
				}

				var selectSchedule = $('input[name="day-partial"]:checked').val();
				if(!selectSchedule){
					Swal.fire({
						icon: 'error',
						text: "Please select booking schedule.",
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					});

					return false;
				}
				

				var selectTime = $('input[name="select-time"]:checked').val();
				
				if(!selectTime){
					Swal.fire({
						icon: 'error',
						text: "Please select booking time.",
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					});

					return false;
				}

				var doctorWorkingHoursParts = workTimings.split(" - ");
				var doctorWorkStartTime = parseTimeToDate(doctorWorkingHoursParts[0]);
				var doctorWorkEndTime = parseTimeToDate(doctorWorkingHoursParts[1]);
				var selectTimeSlot = parseTimeToDate(selectTime);

				// Function to parse time string and construct Date object without AM/PM format
				function parseTimeToDate(timeString) {
					var parts = timeString.split(':');
					var hours = parseInt(parts[0]);
					var minutes = parseInt(parts[1]);
					return new Date(2000, 0, 1, hours, minutes);
				}

				// Function to handle '12:00 AM' case by converting it to '00:00'
				function handleMidnight(timeString) {
					if (timeString === '12:00 AM') {
						return '00:00';
					}
					return timeString;
				}

				// Convert selectTime to Date object for comparison
				var adjustedSelectTime = handleMidnight(selectTime);
				var selectTimeDate = parseTimeToDate(adjustedSelectTime);

				// Convert time to milliseconds for comparison
				var selectTimeMs = selectTimeDate.getTime();
				var startTimeMs = doctorWorkStartTime.getTime();
				var endTimeMs = doctorWorkEndTime.getTime();

				// Check if selectTime is within the range of workTimings
				if (selectTimeMs >= startTimeMs && selectTimeMs <= endTimeMs) {
					Swal.fire({
						icon: 'success',
						text: "Selected "+ selectTime + " booking timing.",
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					});
				} else {
					Swal.fire({
						icon: 'error',
						text: selectTime + " is outside the work timings range.",
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					});

					return false;
				}

				localStorage.setItem("doctorID", bookID);
				localStorage.setItem("company_name", companyName);
				localStorage.setItem("secondary_category", secondaryCategory);
				localStorage.setItem("work_timings", workTimings);
				localStorage.setItem("selected_date", datepickerValue);
				localStorage.setItem("selected_time", selectTime);

				window.location.href = "<?php echo env('APP_URL'); ?>/confirm-booking/"+bookID;
			}

			// Confrim Booking Appointment
			$(".confirmBooking").click(function(){
				if($("#fname").val() == ""){
					Swal.fire({
						icon: 'error',
						text: `first name is required`,
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					});

					return;  
				}

				if($("#email").val() == ""){
					Swal.fire({
						icon: 'error',
						text: `email is required`,
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					});

					return;  
				}

				if($("#phone").val() == ""){
					Swal.fire({
						icon: 'error',
						text: `phone number is required`,
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					});

					return;  
				}

				function convertTimeTo24HourFormat(time12h) {
					const [time, modifier] = time12h.split(' ');
					let [hours, minutes] = time.split(':');

					if (hours === '12') {
						hours = '00';
					}

					if (modifier === 'PM') {
						hours = parseInt(hours, 10) + 12;
					}

					return `${hours}:${minutes}`;
				}

				const selectedTime = localStorage.getItem("selected_time");
				const convertedTime = convertTimeTo24HourFormat(selectedTime);


				$.ajax({
					type: 'POST',
					url: "{{ route('booking.post') }}",
					data: {
						doctor_id: localStorage.getItem("doctorID"),
						company_name: localStorage.getItem("company_name"),
						patient_name: $("#fname").val(),
						patient_email: $("#email").val(),
						patient_phone_no: $("#phone").val(),
						selected_date: localStorage.getItem("selected_date"),
						start_time: convertedTime,
						end_time: convertedTime,
						opt_service : localStorage.getItem("secondary_category"),
						notes: 'Some notes',
						_token: '{{ csrf_token() }}',
					},
					success: function (data) {
						localStorage.setItem("doctorID", "");
						localStorage.setItem("company_name", "");
						localStorage.setItem("secondary_category", "");
						localStorage.setItem("work_timings", "");
						localStorage.setItem("selected_date", "");
						localStorage.setItem("selected_time", "");

						Swal.fire({
							icon: 'success',
							text: `Booking Succesfully!`,
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 3000
						}).then(function() {

							window.location.href = "<?php echo env('APP_URL'); ?>";
						});
					},
					error: function (error) {
						console.error(error);
					},
				});
			});
	</script>
</body>
</html>