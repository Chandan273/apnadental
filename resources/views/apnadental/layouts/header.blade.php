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
      <ul class="nav d-flex align-items-center flex-nowrap d-lg-none ms-auto gap-2">
        <li class="nav-item dropdown login-dropdown">
          <a class="dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="pe-7s-user h4 text-white mb-0"></i>
          </a>
          <div class="dropdown-menu bg-white border-0 rounded shadow p-3">
            <form class="row g-3" id="otp-login-form-mobile">
              @csrf
              @if (!Auth::check())
              <div class="col-12">
                <h2 class="h4">Login</h2>
              </div>
              <div class="col-12">
                <div class="input-group">
                  <span class="input-group-text" id="inputGroup"><i class="icon-email"></i></span>  
                  <input type="text" name="phone_no" class="form-control" placeholder="Enter Phone Number">
                </div>
              </div>
              <div class="col-12">
                <div class="input-group">
                  <span class="input-group-text" id="inputGroup"><i class="icon-lock-open"></i></span>
                  <input type="password" class="form-control" placeholder="Enter OTP" name="otp">
                </div>

                 {{-- <div id="otp" class="inputs d-flex justify-content-between mb-3"> 
                    <input class="m-0 text-center form-control rounded" type="text" id="first" maxlength="1" /> 
                    <input class="m-0 text-center form-control rounded" type="text" id="second" maxlength="1" /> 
                    <input class="m-0 text-center form-control rounded" type="text" id="third" maxlength="1" /> 
                    <input class="m-0 text-center form-control rounded" type="text" id="fourth" maxlength="1" /> 
                    <input class="m-0 text-center form-control rounded" type="text" id="fifth" maxlength="1" /> 
                    <input class="m-0 text-center form-control rounded" type="text" id="sixth" maxlength="1" /> 
                  </div> --}}
              </div>
              {{-- <div class="col-12">
                <a href="#0" class="forgot"><small>Forgot password?</small></a>
              </div> --}}
              <div class="text-danger error-message"></div>
              <div class="col-12">
                <input class="btn_1 w-100" id="login-button-2" type="submit" value="Login">
              </div>
              @else
              <div class="mt-0"></div>
                <li class="border-bottom py-2 mb-2 mt-0">Deepak</li>
                <li class="border-bottom py-2 mb-2 mt-0 small fw-light">UHID : APJ1.0005455032</li>
                <li class="border-bottom py-2 mb-2 mt-0 d-flex align-items-center justify-content-between small fw-light">
                  <span>MALE
                    | 28</span> <span>+91987654321</span>
                </li>
                <li class="border-bottom py-2 mb-2 mt-0"><a class="d-flex gap-2" href="{{ url('/my_account') }}">
                    <i class="icon-user-male"></i> My Account <i class="icon-right-open ms-auto"></i></a></li>
                <li class="border-bottom py-2 mb-2 mt-0"><a href="{{ route('user.logout') }}"
                    class="btn_1 text-center">Logout</a>
                </li>
        @endif
        </form>
    </div>
    </li>
    
    @if (!Auth::check())
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{ url('/register') }}"><i
          class="pe-7s-add-user text-white h4 mb-0"></i></a>
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

        <li class="nav-item dropdown dropdown-mega">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
            data-bs-auto-close="outside">speciality</a>
          <div class="dropdown-menu shadow">
            <div class="mega-content">
              <div class="container-fluid ps-0">
                <div class="row">
                  <div class="col">
                    <div class="d-flex align-items-start">
                      <div class="nav flex-md-shrink-0 flex-column nav-pills me-md-3 text-start bg-light px-md-2"
                        id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        <a class="nav-link active" id="v-pills-cosmetics-dentistry-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-cosmetics-dentistry" role="tab"
                          aria-controls="v-pills-cosmetics-dentistry" aria-selected="true">cosmetics Dentistry</a>

                        <a class="nav-link" id="v-pills-periodontics-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-periodontics" role="tab" aria-controls="v-pills-periodontics"
                          aria-selected="false">Periodontics</a>

                        <a class="nav-link" id="v-pills-Pedodontics-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-Pedodontics" role="tab" aria-controls="v-pills-Pedodontics"
                          aria-selected="false">Pedodontics</a>

                        <a class="nav-link" id="v-pills-Prosthodontics-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-Prosthodontics" role="tab" aria-controls="v-pills-Prosthodontics"
                          aria-selected="false">Prosthodontics</a>

                        <a class="nav-link" id="v-pills-Orthodontics-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-Orthodontics" role="tab" aria-controls="v-pills-Orthodontics"
                          aria-selected="false">Orthodontics</a>

                        <a class="nav-link" id="v-pills-Endodontics-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-Endodontics" role="tab" aria-controls="v-pills-Endodontics"
                          aria-selected="false">Endodontics</a>

                        <a class="nav-link" id="v-pills-Maxillofacial-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-Maxillofacial" role="tab" aria-controls="v-pills-Maxillofacial"
                          aria-selected="false">Maxillofacial</a>

                        <a class="nav-link" id="v-pills-Implantology-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-Implantology" role="tab" aria-controls="v-pills-Implantology"
                          aria-selected="false">Implantology</a>

                        <a class="nav-link" id="v-pills-Laser-dentistry-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-Laser-dentistry" role="tab" aria-controls="v-pills-Laser-dentistry"
                          aria-selected="false">Laser-dentistry</a>

                      </div>


                      <div class="tab-content w-100 pt-1" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-cosmetics-dentistry" role="tabpanel"
                          aria-labelledby="v-pills-cosmetics-dentistry-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="">Teeth Whitening</a></li>
                            <li class="col-md-6"><a href="">Veneers</a></li>
                            <li class="col-md-6"><a href="">Teeth Straightening</a></li>
                            <li class="col-md-6"><a href="">Crowns</a></li>
                            <li class="col-md-6"><a href="">Bridges</a></li>
                            <li class="col-md-6"><a href="">White fillings</a></li>
                          </ul>
                        </div>


                        <div class="tab-pane fade" id="v-pills-periodontics" role="tabpanel"
                          aria-labelledby="v-pills-periodontics-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="">scaling</a></li>
                            <li class="col-md-6"><a href="">root planing</a></li>
                            <li class="col-md-6"><a href="">root surface debridement</a></li>
                            <li class="col-md-6"><a href="">oral inflammation treatment</a></li>
                            <li class="col-md-6"><a href="">cosmetic periodontal procedures</a></li>
                          </ul>


                        </div>


                        <div class="tab-pane fade" id="v-pills-Pedodontics" role="tabpanel"
                          aria-labelledby="v-pills-Pedodontics-tab" tabindex="0">

                          <ul class="row">
                            <li class="col-md-6"><a href="">Children's Tooth Fillings</a></li>
                            <li class="col-md-6"><a href="">Children's Tooth Extractions</a></li>
                            <li class="col-md-6"><a href="">Children's Tooth Dental Crowns</a></li>
                            <li class="col-md-6"><a href="">Children's Tooth Root Canals</a></li>
                            <li class="col-md-6"><a href="">Children's Dental X-rays</a></li>
                            <li class="col-md-6"><a href="">Children's Sealants</a></li>
                          </ul>
                        </div>


                        <div class="tab-pane fade" id="v-pills-Prosthodontics" role="tabpanel"
                          aria-labelledby="v-pills-Prosthodontics-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="">Dental crowns</a></li>
                            <li class="col-md-6"><a href="">Dental bridges</a></li>
                            <li class="col-md-6"><a href="">Dentures</a></li>
                            <li class="col-md-6"><a href="">Inlays and Onlays</a></li>
                            <li class="col-md-6"><a href="">Dental implants</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-Orthodontics" role="tabpanel"
                          aria-labelledby="v-pills-Orthodontics-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="">Braces</a></li>
                            <li class="col-md-6"><a href="">Aligners</a></li>
                            <li class="col-md-6"><a href="">Retainers</a></li>
                            <li class="col-md-6"><a href="">Palate expanders</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-Endodontics" role="tabpanel"
                          aria-labelledby="v-pills-Endodontics-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="">removing pulpal tissue</a></li>
                            <li class="col-md-6"><a href="">Tooth filing</a></li>
                            <li class="col-md-6"><a href="">filing and shaping root canals</a></li>
                            <li class="col-md-6"><a href="">obturating the root canal space</a></li>
                            <li class="col-md-6"><a href="">permanent restoration for the tooth</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-Maxillofacial" role="tabpanel"
                          aria-labelledby="v-pills-Maxillofacial-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="">Maxillary osteotomy</a></li>
                            <li class="col-md-6"><a href="">Mandibular osteotomy</a></li>
                            <li class="col-md-6"><a href="">Genioplasty</a></li>
                            <li class="col-12 mt-md-3">
                              <h5 class="txt-primary">TMJ operation</h5>
                            </li>
                            <li class="col-md-6"><a href="">Arthrocentesis</a></li>
                            <li class="col-md-6"><a href="">Arthroscopy</a></li>
                            <li class="col-md-6"><a href="">Open joint procedures</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-Implantology" role="tabpanel"
                          aria-labelledby="v-pills-Implantology-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="">Endosteal </a></li>
                            <li class="col-md-6"><a href="">Subperiosteal</a></li>
                            <li class="col-md-6"><a href="">Zygomatic</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-Laser-dentistry" role="tabpanel"
                          aria-labelledby="v-pills-Laser-dentistry-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="">Laser Gum Therapy</a></li>
                            <li class="col-md-6"><a href="">Laser Assisted Dental Implantology</a></li>
                            <li class="col-md-6"><a href="">Laser Dentin Hypersensitivity</a></li>
                            <li class="col-md-6"><a href="">Laser Gum Depigmentation</a></li>
                            <li class="col-md-6"><a href="">Laser Assisted Root Canal Treatment</a></li>
                            <li class="col-md-6"><a href="">Laser In TMJ Pain</a></li>
                            <li class="col-12 mt-md-3">
                              <h5 class="txt-primary">Laser Oral Surgery</h5>
                            </li>
                            <li class="col-md-6"><a href="">Frenectomy (removal of a frenulum)</a></li>
                            <li class="col-md-6"><a href="">gingivectomy (removal of excess gum tissue)</a></li>
                            <li class="col-md-6"><a href="">Biopsy of abnormal oral tissue</a></li>
                            <li class="col-md-6"><a href="">Removal of tumors and cysts</a></li>
                            <li class="col-md-6"><a href="">Bone reshaping for dental implants</a></li>
                            <li class="col-md-6"><a href="">Resection of the jaw</a></li>
                            <li class="col-md-6"><a href="">Treatment of periodontal (gum) disease</a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
            <a class="dropdown-toggle login-toggle-cls d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="pe-7s-user h4 text-white mb-0"></i>
            </a>
            <ul class="dropdown-menu login-menu-cls bg-white border-0 rounded shadow p-3">
                <form class="row g-3 userLogincard" id="otp-login-form">
                  @csrf
                  <div class="col-12">
                    <h2 class="h4">Login</h2>
                  </div>
                  <div class="col-12">
                    <div class="input-group">                    
                      <span class="input-group-text" id="inputGroup"><i class="icon-email"></i></span>                    
                      <input type="text" name="phone_no" class="form-control" placeholder="Enter Phone Number">
                    </div>
                  </div>
                  <div class="col-12">  
                    <div class="input-group">  
                      <span class="input-group-text" id="inputGroup"><i class="icon-lock-open"></i></span>                               
                    <input type="password" class="form-control" placeholder="Enter OTP" name="otp" />
                    </div>
                    {{-- <div id="otp" class="inputs d-flex justify-content-between mb-3"> 
                      <input class="m-0 text-center form-control rounded" type="text" id="first" maxlength="1" /> 
                      <input class="m-0 text-center form-control rounded" type="text" id="second" maxlength="1" /> 
                      <input class="m-0 text-center form-control rounded" type="text" id="third" maxlength="1" /> 
                      <input class="m-0 text-center form-control rounded" type="text" id="fourth" maxlength="1" /> 
                      <input class="m-0 text-center form-control rounded" type="text" id="fifth" maxlength="1" /> 
                      <input class="m-0 text-center form-control rounded" type="text" id="sixth" maxlength="1" /> 
                    </div>  --}}
                  </div>
                  {{-- <div class="col-12">
                    <a href="#0" class="forgot"><small>Forgot password?</small></a>
                  </div> --}}
                  <div class="text-danger error-message"></div>
                  <div class="col-12">
                    <input class="btn_1 w-100" id="login-button" type="submit" value="Login">
                  </div>
                </form>
                <div class="userPopupcard">
                  <div class="mt-3"></div>
                  <li class="border-bottom py-2 mb-2" id="logged_name"></li>
                  <li class="border-bottom py-2 mb-2 small fw-light" id="logged_email"></li>
                  <li class="border-bottom py-2 mb-2 d-flex align-items-center justify-content-between small fw-light">
                  <span id="logged_phone"></span>
                  </li>
                  <li class="border-bottom py-2 mb-2"><a class="d-flex gap-2" href="{{ url('/my-account') }}">
                    <i class="icon-user-male"></i> My Account <i class="icon-right-open ms-auto"></i></a></li>
                  <li class="border-bottom py-2 mb-2"><a href="javascript:void(0)" class="btn_1 text-center logout">Logout</a></li>
                </div>    
            </ul>
          </li>
          @if (!Auth::check())
          <li class="nav-item register-card-cls">
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
</script>