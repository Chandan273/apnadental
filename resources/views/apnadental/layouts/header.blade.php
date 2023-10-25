<header class="sticky-top bg-white">
  <div class="container-fliud container-lg">
    <div class="row align-items-center justify-content-between py-1 py-lg-3">
      <div class="col-3 col-lg-2">
        <a class="d-block brand-logo" href="{{ url('/') }}">
          <img max-width="150px" width="100%" src="{{ asset('public/assets/img/apna-dental-logo1.svg') }}"
            alt="apna-dental-logo">
        </a>
      </div>
      <div class="col-9">
        <div class="ads">
          <img class="w-100" src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg"
            alt="google-ads">
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark navbar-cstm-bg">
    <div class="container-fluid container-lg">
      <ul class="nav d-flex align-items-center flex-nowrap d-lg-none ms-auto">
        <li class="nav-item dropdown login-dropdown">
          <a class="dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="pe-7s-user h4 text-white mb-0"></i>
          </a>
          <div class="dropdown-menu bg-white border-0 rounded shadow p-3">
            <form class="row g-3" id="otp-login-form" action="{{ route('otplogin.post') }}" method="POST">
              @csrf
              @if (!Auth::check())
              <div class="col-12">
                <h2 class="h4">Login</h2>
              </div>
              <div class="col-12">
                <input type="text" name="phone_no" class="form-control" placeholder="Enter Phone Number">
              </div>
              <div class="col-12">
                <div class="hideShowPassword-wrapper"
                  style="position: relative; display: block; vertical-align: baseline; margin: 0px;">
                  <input type="text" class="form-control" placeholder="Enter OTP" name="otp" id="password"
                    style="margin: 0px; padding-right: 0px;">
                  <button type="button" role="button" aria-label="Show Password" title="Show Password" tabindex="0"
                    class="my-toggle hideShowPassword-toggle-show" aria-pressed="false"
                    style="position: absolute; right: 0px; top: 50%; margin-top: -15px; display: none;">Show</button>
                </div>
              </div>
              {{-- <div class="col-12">
                <a href="#0" class="forgot"><small>Forgot password?</small></a>
              </div> --}}
              <div id="error-message" class="text-danger"></div>
              <div class="col-12">
                <input class="btn_1 w-100" id="login-button" type="submit" value="Login">
              </div>
              @else
              <div class="mt-0"></div>
        <li class="border-bottom py-2 mb-2 mt-0">Deepak</li>
        <li class="border-bottom py-2 mb-2 mt-0 small fw-light">UHID : APJ1.0005455032</li>
        <li class="border-bottom py-2 mb-2 mt-0 d-flex align-items-center justify-content-between small fw-light"><span>MALE
            | 28</span> <span>+91987654321</span></li>
        <li class="border-bottom py-2 mb-2 mt-0"><a class="d-flex gap-2" href="{{ url('/my_account') }}">
            <i class="icon-user-male"></i> My Account <i class="icon-right-open ms-auto"></i></a></li>
        <li class="border-bottom py-2 mb-2 mt-0"><a href="{{ route('user.logout') }}" class="btn_1 text-center">Logout</a>
        </li>
        @endif
        </form>
    </div>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{ url('/register') }}"><i
          class="pe-7s-add-user text-white h4 mb-0"></i></a>
    </li>

    <li class="nav-item">
      <div class="position-relative">
        <i class="pe-7s-map-marker position-absolute top-50 start-0 translate-middle-y ms-2"></i>
        <input type="text" id="apna_location" class="form-control ps-4" placeholder="Find Location">
        <input type="hidden" id="latitude" name="latLong" />
        <input type="hidden" id="longitude" name="latLong" />
      </div>
    </li>
    <li class="nav-item ms-3">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-white"></span>
      </button>
    </li>
    </ul>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            speciality
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <a class="dropdown-item" href="#">test</a>
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dr. By Treatment
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Oral health</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/service') }}">Service</a>
        </li>

      </ul>

      <div class="d-none d-lg-block">
        <ul class="nav align-items-center gap-3">
          <li class="nav-item dropdown login-dropdown">
            <a class="dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="pe-7s-user h4 text-white mb-0"></i>
            </a>
            <ul class="dropdown-menu bg-white border-0 rounded shadow p-3">
              <form class="row g-3" id="otp-login-form" action="{{ route('otplogin.post') }}" method="POST">
                @csrf
                @if (!Auth::check())
                <div class="col-12">
                  <h2 class="h4">Login</h2>
                </div>
                <div class="col-12">
                  <input type="text" name="phone_no" class="form-control" placeholder="Enter Phone Number">
                </div>
                <div class="col-12">
                  <div class="hideShowPassword-wrapper"
                    style="position: relative; display: block; vertical-align: baseline; margin: 0px;">
                    <input type="text" class="form-control" placeholder="Enter OTP" name="otp" id="password"
                      style="margin: 0px; padding-right: 0px;">
                    <button type="button" role="button" aria-label="Show Password" title="Show Password" tabindex="0"
                      class="my-toggle hideShowPassword-toggle-show" aria-pressed="false"
                      style="position: absolute; right: 0px; top: 50%; margin-top: -15px; display: none;">Show</button>
                  </div>
                </div>
                {{-- <div class="col-12">
                  <a href="#0" class="forgot"><small>Forgot password?</small></a>
                </div> --}}
                <div id="error-message" class="text-danger"></div>
                <div class="col-12">
                  <input class="btn_1 w-100" id="login-button" type="submit" value="Login">
                </div>
                @else

                @endif
              </form>
              @if (Auth::check())
              <div class="mt-3"></div>
              <li class="border-bottom py-2 mb-2">Deepak</li>
              <li class="border-bottom py-2 mb-2 small fw-light">UHID : APJ1.0005455032</li>
              <li class="border-bottom py-2 mb-2 d-flex align-items-center justify-content-between small fw-light">
                <span>MALE | 28</span> <span>+91987654321</span></li>
              <li class="border-bottom py-2 mb-2"><a class="d-flex gap-2" href="{{ url('/my_account') }}">
                  <i class="icon-user-male"></i> My Account <i class="icon-right-open ms-auto"></i></a></li>
              <li class="border-bottom py-2 mb-2"><a href="{{ route('user.logout') }}"
                  class="btn_1 text-center">Logout</a></li>
              @endif
            </ul>
          </li>
          @if (!Auth::check())
          <li class="nav-item">
            <a aria-current="page" href="{{ url('/register') }}"><i class="pe-7s-add-user text-white h4 mb-0"></i></a>
          </li>
          @endif

          <li class="nav-item">
            <div class="position-relative">
              <i class="pe-7s-map-marker position-absolute top-50 start-0 translate-middle-y ms-2"></i>
              <input type="text" id="apna_location" class="form-control ps-4" placeholder="Find Location">
              <input type="hidden" id="latitude" name="latLong" />
              <input type="hidden" id="longitude" name="latLong" />
            </div>
          </li>
        </ul>

      </div>
    </div>
    </div>
  </nav>

</header>
<!-- /header -->

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

  $(document).ready(function () {
    $('#otp-login-form').submit(function (e) {
      e.preventDefault();
      var formData = $(this).serialize();

      $('#error-message').text("");

      $.ajax({
        type: "POST",
        url: "{{ route('otplogin.post') }}",
        data: formData,
        success: function (response) {
          if (response.success) {
            // User successfully logged in
            window.location.href = "http://localhost/apnadental/";
          } else {
            $('#error-message').text(response.message);
          }
        },
        error: function (xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    });
  });

</script>