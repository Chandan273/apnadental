@extends('apnadental.master')
@section("content")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
ul#services-dropdown {
    margin: -20px 0 !important;
}
.dropdown.service-filter-cls ul.dropdown-menu.show{
    max-height: 250px;
    overflow: auto;
}
.dropdown.service-filter-cls ul.dropdown-menu.show li {
    display: table !important;
}
</style>
<main>
    <div class="hero_map">
        <div id="map_listing"></div>
        <form class="search_wp">
            @csrf
            <div id="custom-search-input">
                <div class="form-row d-flex">
                    <div class="form-group col-md-6 position-relative">
                        <i class="pe-7s-map-marker position-absolute" style="top: 35%; transform: translateY(-50%); left: 10px;"></i>
                        <input type="text" id="apna_location" class="form-control pl-5" style="padding-left: 40px;" placeholder="Find Location">
                    </div>                    

                    <input type="hidden" id="latitude" name="latLong" />
                    <input type="hidden" id="longitude" name="latLong" />
        
                    {{-- <label for="doctors">Select Doctor:</label> --}}
                    <div class="form-group col-md-6">
                        <div class="custom-dropdown">
                            <div class="dropdown-menu" id="doctors-list">
                                <h6 class="dropdown-header">Select Doctor</h6>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                            {{-- <div class="dropdown-list">
                                <div class="dropdown-header">Select Doctor</div>
                            </div> --}}
                        </div>
                        
                        <div class="dropdown service-filter-cls">
                            <div class="dropdown-toggle position-relative" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="pe-7s-search position-absolute" style="top: 35%; transform: translateY(-50%); left: 10px;"></i> 
                                <input type="text" id="input_list" class="form-control pl-5" placeholder="Search doctors, clinics, hospitals, etc." style="padding-left: 40px;">
                            </div>
                            <ul id="services-dropdown" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @foreach ($services as $service)
                                    <li><a class="dropdown-item" href="#" data-sid="{{ $service->id }}">{{ $service->service_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- <input type="submit" class="btn_search" value="Search"> --}}
                    </div>
                </div>

                <ul>
                    <li>
                        <input type="radio" id="all" name="radio_search" value="all" checked="">
                        <label for="all">All</label>
                    </li>
                    <li>
                        <input type="radio" id="doctor" name="radio_search" value="doctor">
                        <label for="doctor">Doctor</label>
                    </li>
                    <li>
                        <input type="radio" id="clinic" name="radio_search" value="clinic">
                        <label for="clinic">Clinic</label>
                    </li>
                </ul>
            </div>
        </form>
    </div>
    <!-- /hero_map -->
    
    <div class="bg_color_1">
        <div class="container margin_120_95">
            <div class="main_title">
                <h2>Most Viewed doctors</h2>
                <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="box_list home">
                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Read more</span></div>
                        </figure>

                        <div class="wrapper">
                            <small>Psicologist</small>
                            <h3>Dr. Watamaniuk</h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                            <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>

                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
                        </div>

                        <ul>
                            <li><i class="icon-eye-7"></i> 854 Views</li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box_list home">
                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Read more</span></div>
                        </figure>

                        <div class="wrapper">
                            <small>Psicologist</small>
                            <h3>Dr. Mantooth</h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                            <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>

                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
                        </div>

                        <ul>
                            <li><i class="icon-eye-7"></i> 854 Views</li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="box_list home">
                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist" class="wish_bt"></a>

                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Read more</span></div>
                        </figure>

                        <div class="wrapper">
                            <small>Psicologist</small>
                            <h3>Dr. Pullman</h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                            <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>

                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="{{ asset('public/assets/apnadental/img/badges/badge_2.svg') }}" width="15" height="15" alt=""></a>
                        </div>

                        <ul>
                            <li><i class="icon-eye-7"></i> 854 Views</li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="box_list home">
                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Read more</span></div>
                        </figure>

                        <div class="wrapper">
                            <small>Psicologist</small>
                            <h3>Dr. Toothaker</h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                            <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>

                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="{{ asset('public/assets/apnadental/img/badges/badge_6.svg') }}" width="15" height="15" alt=""></a>
                        </div>

                        <ul>
                            <li><i class="icon-eye-7"></i> 854 Views</li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="box_list home">
                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Read more</span></div>
                        </figure>

                        <div class="wrapper">
                            <small>Psicologist</small>
                            <h3>Dr. Brilliant</h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                            <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>

                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="{{ asset('public/assets/apnadental/img/badges/badge_6.svg') }}" width="15" height="15" alt=""></a>
                        </div>

                        <ul>
                            <li><i class="icon-eye-7"></i> 854 Views</li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="box_list home">
                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist" class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
                            <div class="preview"><span>Read more</span></div>
                        </figure>

                        <div class="wrapper">
                            <small>Psicologist</small>
                            <h3>Dr. Crownover</h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                            <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>

                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
                        </div>

                        <ul>
                            <li><i class="icon-eye-7"></i> 854 Views</li>
                            <li><a href="detail-page.html">Book now</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- /row -->
            <p class="text-center add_top_30"><a href="list.html" class="btn_1 medium">View all Doctors</a></p>
        </div>
        <!-- /container -->
    </div>
    <!-- /white_bg -->

    <div class="container margin_120_95">
        <div class="main_title">
            <h2>Find your doctor or clinic</h2>
            <p>Nec graeci sadipscing disputationi ne, mea ea nonumes percipitur. Nonumy ponderum oporteat cu mel, pro movet cetero at.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="list_home">
                    <div class="list_title">
                        <i class="icon_pin_alt"></i>
                        <h3>Search by City or Zone</h3>
                    </div>

                    <ul>
                        <li><a href="#0"><strong>23</strong>Albany</a></li>
                        <li><a href="#0"><strong>23</strong>Albuquerque</a></li>
                        <li><a href="#0"><strong>23</strong>Atlanta</a></li>
                        <li><a href="#0"><strong>23</strong>Baltimore</a></li>
                        <li><a href="#0"><strong>23</strong>Baton Rouge</a></li>
                        <li><a href="#0"><strong>23</strong>Birmingham</a></li>
                        <li><a href="#0"><strong>23</strong>Boston</a></li>
                        <li><a href="#0"><strong>23</strong>Buffalo</a></li>
                        <li><a href="#0"><strong>23</strong>Charleston</a></li>
                        <li><a href="#0">More...</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="list_home">
                    <div class="list_title">
                        <i class="icon_archive_alt"></i>
                        <h3>Search by type</h3>
                    </div>

                    <ul>
                        <li><a href="#0"><strong>23</strong>Allergist</a></li>
                        <li><a href="#0"><strong>23</strong>Cardiologist</a></li>
                        <li><a href="#0"><strong>23</strong>Chiropractor</a></li>
                        <li><a href="#0"><strong>23</strong>Dentist</a></li>
                        <li><a href="#0"><strong>23</strong>Dermatologist</a></li>
                        <li><a href="#0"><strong>23</strong>Gastroenterologist</a></li>
                        <li><a href="#0"><strong>23</strong>Ophthalmologist</a></li>
                        <li><a href="#0"><strong>23</strong>Optometrist</a></li>
                        <li><a href="#0"><strong>23</strong>Pediatrician</a></li>
                        <li><a href="#0">More....</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

    <div class="cta_subscribe">
        <div class="container-fluid h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-6 p-0">
                    <div class="block_1">
                        <figure><img src="{{ asset('public/assets/apnadental/img/doctors_icon.svg') }}" alt=""></figure>
                        <h3>Are you a Doctor?</h3>
                        <p>The service allows you to get maximum visibility online and to manage appointments and contacts coming from the site, in a simple and fast way.</p>
                        <a href="register-doctor.html" class="btn_1">Read more</a>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <div class="block_2">
                        <figure><img src="{{ asset('public/assets/apnadental/img/patient_icon.svg') }}" alt=""></figure>
                        <h3>Are you a patient?</h3>
                        <p>Choosing a specialist has never been so fast! You can filter search results by location and medical specialization, and book medical examination online.</p>
                        <a href="register.html" class="btn_1">Read more</a>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /cta_subscribe -->
</main>
<!-- /main content -->

<!-- Add this code block inside your <script> tag or an external JS file -->
<script>
    $(document).ready(function () {
    function getLocation() {
        var latitude = getCookie("latitude");
        var longitude = getCookie("longitude");

        console.log(latitude + ", " + longitude);

        if (latitude === null || longitude === null) {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        } else {
            showPosition({ coords: { latitude: parseFloat(latitude), longitude: parseFloat(longitude) } });
        }
    }

    function showPosition(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;

        console.log("Latitude: " + latitude + "\nLongitude: " + longitude);

        // Store latitude and longitude in cookies
        setCookie("latitude", latitude, 365);
        setCookie("longitude", longitude, 365);

        // Fetch and display location name using reverse geocoding
        fetchLocationName(latitude, longitude);
    }

    function showError(error) {
        var errorMessage = "";
        switch (error.code) {
            case error.PERMISSION_DENIED:
                errorMessage = "User denied the request for Geolocation.";
                break;
            case error.POSITION_UNAVAILABLE:
                errorMessage = "Location information is unavailable.";
                break;
            case error.TIMEOUT:
                errorMessage = "The request to get user location timed out.";
                break;
            case error.UNKNOWN_ERROR:
                errorMessage = "An unknown error occurred.";
                break;
        }
        console.log(errorMessage);
    }

    function fetchLocationName(latitude, longitude) {
        var apiKey = "AIzaSyAsYL1hrGBbl8KI_DhiULQGaoMfSkQAjA4";
        var apiUrl = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${latitude},${longitude}&key=${apiKey}`;

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                if (data.results.length > 0) {
                    var addressComponents = data.results[0].address_components;
                    var cityName = getCityNameFromAddress(addressComponents);
                    console.log("City Name:", cityName);
                        
                    // Update input field with city name
                    document.getElementById("apna_location").value = cityName;


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


                } else {
                    console.log("Location name not available.");
                }
            })
            .catch(error => {
                console.log("Error fetching location name:", error);
            });
    }

    function getCityNameFromAddress(addressComponents) {
        let locality = null;
        let city = null;

        for (let i = 0; i < addressComponents.length; i++) {
            const component = addressComponents[i];
            if (component.types.includes("sublocality_level_1")) {
                locality = component.long_name;
            } else if (component.types.includes("locality")) {
                city = component.long_name;
            }
        }

        // Combine locality and city if available, otherwise return unknown
        if (locality && city) {
            return `${locality}, ${city}`;
        } else if (locality) {
            return locality;
        } else if (city) {
            return city;
        } else {
            return "Unknown City";
        }
    }

    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    function getCookie(name) {
        var nameEQ = name + "=";
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i];
            while (cookie.charAt(0) === ' ') {
                cookie = cookie.substring(1);
            }
            if (cookie.indexOf(nameEQ) === 0) {
                return cookie.substring(nameEQ.length, cookie.length);
            }
        }
        return null;
    }

    // Call the getLocation function on page load
    window.onload = getLocation;
});
</script>
    

@endsection