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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="{{ asset('public/assets/apnadental/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/apnadental/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/apnadental/css/menu.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/apnadental/css/vendors.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/apnadental/css/icon_fonts/css/all_icons_min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">

	<!-- YOUR CUSTOM CSS -->
	<link href="{{ asset('public/assets/apnadental/css/custom.css') }}" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}
	<link href="{{ asset('public/assets/css/custom.css') }}" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
</head>
<body>
	<div class="layer"></div>

	<!-- Mobile menu overlay mask -->
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->

	@include('apnadental.layouts.header')
	@yield('content')
	@include('apnadental.layouts.modal')
	@include('apnadental.layouts.footer')

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	{{-- <script src="{{ asset('public/assets/apnadental/js/jquery-3.6.3.min.js') }}"></script> --}}
	<script src="{{ asset('public/assets/apnadental/js/common_scripts.min.js') }}"></script>
	<script src="{{ asset('public/assets/apnadental/js/functions.js') }}"></script>

	<!-- SPECIFIC SCRIPTS -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsYL1hrGBbl8KI_DhiULQGaoMfSkQAjA4&libraries=places"></script>
	<script src="{{ asset('public/assets/apnadental/js/markerclusterer.js') }}"></script>
    <script src="{{ asset('public/assets/apnadental/js/map_home.js') }}"></script>
	<script src="{{ asset('public/assets/apnadental/js/custom.js') }}"></script>
    {{-- <script src="{{ asset('public/assets/apnadental/vendor/js/infobox.js') }}"></script> --}}

	<script>
		var autocomplete;
	
		function initialize() {
			var options = {
				//types: ['(cities)'],
				componentRestrictions: {country: "IN"}
			};
	
			var input = document.getElementById('apna_location');
			autocomplete = new google.maps.places.Autocomplete(input, options);
	
			google.maps.event.addListener(autocomplete, 'place_changed', function () {
				var place = autocomplete.getPlace();
				let search_location = place.name;
            	let latitude = place.geometry.location.lat();
            	let longitude= place.geometry.location.lng();
            	console.log(place);

            	let cityName = place.address_components[1].long_name;
            	console.log("city=>",cityName," search_location=>",search_location, " cityLat=>",parseFloat(latitude.toFixed(7)), " cityLng=>", parseFloat(longitude.toFixed(7)));

				var componentForm = {
				street_number: 'short_name',
				route: 'long_name',
				locality: 'long_name',
				administrative_area_level_1: 'short_name',
				postal_code: 'short_name'
				};

				var addressObj = {}

				for (var i = 0; i < place.address_components.length; i++) {
					var addressType = place.address_components[i].types[0];
					if (componentForm[addressType]) {
						addressObj[addressType] = place.address_components[i][componentForm[addressType]]
					}
				}

				console.log(addressObj);
				
				$("#preloader, #preloader div").show();

				$.ajax({
					url: '/projects/apnadental/search-location', // Change the URL to match your route
					method: 'GET',
					data: { latitude: latitude, longitude: longitude },
					success: function (response) {
						var servicesUl = $("#services-dropdown");
						servicesUl.empty(); // Clear existing list items

						$.each(response.services, function (index, service) {
							var li = $("<li></li>").appendTo(servicesUl);
							var a = $("<a></a>")
								.addClass("dropdown-item")
								.attr("href", getServiceUrl(service.id, latitude, longitude, cityName, service.service_name))
								.attr("data-sid", service.id)
								.text(service.service_name)
								.appendTo(li);
						});
						$("#preloader, #preloader div").hide();
						servicesUl.addClass("show");

					},
					error: function () {
						console.log('Error while sending the AJAX request');
					}
				});

				// Function to construct the dynamic URL
				function getServiceUrl(serviceId, latitude, longitude, cityName, serviceName) {
					var baseUrl = "/projects/apnadental/doctors";
					var queryParams = {
						results_type: "doctor",
						service_id: serviceId,
						latitude: parseFloat(latitude.toFixed(7)),
						longitude: parseFloat(longitude.toFixed(7)),
						service_name: serviceName,
						location_type: "geo location",
						city: cityName
					};

					return baseUrl + "?" + $.param(queryParams);
				}
			});
	
		}

		google.maps.event.addDomListener(window, 'load', initialize);

		$(document).ready(function () {
			// $('#otp-login-form').submit(function (e) {
			// 	e.preventDefault();
			// 	var formData = $(this).serialize();

			// 	$('.error-message').text("");

			// 	$.ajax({
			// 		type: "POST",
			// 		url: "{{ route('otplogin.post') }}",
			// 		data: formData,
			// 		success: function (response) {
			// 			if (response.success) {
			// 				localStorage.setItem("logged", true);
			// 				window.location.href = "<?php echo env('APP_URL'); ?>/";
			// 			} else {
			// 				$('.error-message').text(response.message);
			// 			}
			// 		},
			// 		error: function (xhr, status, error) {
			// 			console.log(xhr.responseText);
			// 		}
			// 	});
			// });

			// $('#otp-login-form-mobile').submit(function (e) {
			// 	e.preventDefault();
			// 	var formData = $(this).serialize();

			// 	$('.error-message').text("");

			// 	$.ajax({
			// 		type: "POST",
			// 		url: "{{ route('otplogin.post') }}",
			// 		data: formData,
			// 		success: function (response) {
			// 			if (response.success) {
			// 				localStorage.setItem("logged", 1);
			// 				window.location.href = "<?php echo env('APP_URL'); ?>/";
			// 			} else {
			// 				$('.error-message').text(response.message);
			// 			}
			// 		},
			// 		error: function (xhr, status, error) {
			// 			console.log(xhr.responseText);
			// 		}
			// 	});
			// });

			// Login with otp and set info to local storage
			$('#otpDoctorLogin, #otp-login-form, otp-login-form-mobile').submit(function(e) {
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

				$.ajax({
					type: 'POST',
					url: "{{ route('booking.post') }}",
					data: {
						doctor_id: localStorage.getItem("doctorID"),
						company_name: localStorage.getItem("company_name"),
						patient_name: $("#fname").val(),
						patient_email: $("#email").val(),
						patient_phone_no: $("#phone").val(),
						selected_date: $("#datepicker").val(),
						start_time: $("#start_time").val(),
						end_time: $("#end_time").val(),
						opt_service : localStorage.getItem("secondary_category"),
						notes: 'Some notes',
						_token: '{{ csrf_token() }}',
					},
					success: function (data) {
						localStorage.setItem("doctorID", "");
						localStorage.setItem("company_name", "");
						localStorage.setItem("secondary_category", "");
						localStorage.setItem("work_timings", "");

						Swal.fire({
							icon: 'success',
							text: `Booking Succesfully!`,
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 3000
						}).then(function() {
							$('#bookModal').modal('hide');
							location.reload();
						});
					},
					error: function (error) {
						console.error(error);
					},
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
								window.location.href = "<?php echo env('APP_URL'); ?>/";
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
		});
	</script>

</body>
</html>