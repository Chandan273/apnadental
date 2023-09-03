<style>
  ul.mega-menu {
    width: 70vw;
  }

  ul.mega-menu .menu-item-card {
    transition: all 0.4s;
    background-color: #ffffff;
    border-color: rgba(231, 78, 132, 0.1);
  }

  ul.mega-menu .menu-item-card:hover {
    background-color: rgba(231, 78, 132, 0.1);
  }
</style>

<header class="header_sticky pb-0 pt-3">
  <div class="container">
    <div class="row align-items-center g-2">
      <div class="col-12 col-sm-4">
        <div id="logo_home">
          <h1><a href="{{ url('/') }}" title="Findoctor">Laravel</a></h1>
        </div>
      </div>
      <div class="col-12 col-sm-8 text-end">
        <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg" alt="" width="100%">
      </div>
    </div>
  </div>
  <div class="bg-light">
    <div class="container">
      <div class="row py-3">
        <nav class="col-12 col-lg-6">
          <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
          <div class="main-menu w-100">
            <ul>
              <li class="submenu">
                <a href="{{ url('/') }}" class="show-submenu">Home</a>
              </li>

              <li class="submenu">
                <a href="#0" class="show-submenu">Find a Dentist<i class="icon-down-open-mini"></i></a>
                <ul class="mega-menu border-start-0 p-3 rounded-3">
                  <!-- <li><a href="index.html">Treatment</a></li>
                <li><a href="index-8.html">Specialties</a></li>
                <li><a href="index-2.html">Dental Clinics</a></li> -->

                  <div class="row g-1">
                    <div class="col-12 col-md-6 col-lg-4">
                      <div class="menu-item-card rounded-3 border border-1">
                        <a class="d-flex align-items-center gap-2" href="index.html">
                          <img class="rounded" src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg" alt="" width="70px" height="70px">
                          <h5>Treatment</h5>
                        </a>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <div class="menu-item-card rounded-3 border border-1">
                        <a class="d-flex align-items-center gap-2" href="index-8.html">
                          <img class="rounded" src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg" alt="" width="70px" height="70px">
                          <h5>Specialties</h5>
                        </a>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                      <div class="menu-item-card rounded-3 border border-1">
                        <a class="d-flex align-items-center gap-2" href="index-2.html">
                          <img class="rounded" src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg" alt="" width="70px" height="70px">
                          <h5>Dental Clinics</h5>
                        </a>
                      </div>
                    </div>
                  </div>
                </ul>
              </li>

              <li class="submenu">
                <a href="{{ url('/blog') }}" class="show-submenu">Blog</a>
              </li>

              <li class="submenu">
                <a href="{{ url('/about-us') }}" class="show-submenu">About Us</a>
              </li>

              <li class="submenu">
                <a href="{{ url('/contact-us') }}" class="show-submenu">Contact Us</a>
              </li>

            </ul>
          </div>
        </nav>

        <div class="col-12 col-lg-6">
          <div class="d-flex gap-0 gap-lg-3 justify-content-end align-items-center">
            <ul id="top_access">
              <li><a href="{{ url('/login') }}"><i class="pe-7s-user"></i></a></li>
              <li><a href="{{ url('/register') }}"><i class="pe-7s-add-user"></i></a></li>
            </ul>
            <div class="position-relative">
              <i class="pe-7s-map-marker position-absolute top-50 start-2 ms-3 translate-middle"></i>
              <input type="text" id="apna_location" class="form-control ps-5" placeholder="Find Location">
              <input type="hidden" id="latitude" name="latLong" />
                    <input type="hidden" id="longitude" name="latLong" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- /header -->

<script>
  $(document).ready(function() {
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
                showPosition({
                    coords: {
                        latitude: parseFloat(latitude),
                        longitude: parseFloat(longitude)
                    }
                });
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
                            data: {
                                latitude: latitude,
                                longitude: longitude
                            },
                            success: function(response) {
                                var servicesUl = $("#services-dropdown");
                                servicesUl.empty(); // Clear existing list items

                                $.each(response.services, function(index, service) {
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
                            error: function() {
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