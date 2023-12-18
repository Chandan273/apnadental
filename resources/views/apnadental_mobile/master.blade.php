<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
	<title>APNA DENTAL - Find easily a doctor and book online an appointment</title>

	<!-- Favicons-->
	<!-- <link rel="shortcut icon" href="{{ asset('public/assets/apnadental/img/favicon.ico') }}" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/assets/apnadental/img/apple-touch-icon-57x57-precomposed.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('public/assets/apnadental/img/apple-touch-icon-72x72-precomposed.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('public/assets/apnadental/img/apple-touch-icon-114x114-precomposed.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('public/assets/apnadental/img/apple-touch-icon-144x144-precomposed.png') }}"> -->

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}
	<link href="{{ asset('public/assets/css/custom.css') }}" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link href="{{ asset('public/assets/css/custom-mobile.css') }}" rel="stylesheet">
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
		<div class="overflow-y-auto">
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

</body>

</html>