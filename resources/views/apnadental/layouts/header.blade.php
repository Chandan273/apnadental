<header class="sticky-top bg-white">
  <div class="container-fliud container-lg">
    <div class="d-flex align-items-center justify-content-between py-1 py-lg-2 gap-3">
      <a class="d-block brand-logo" href="{{ url('/') }}">
        <img src="{{ asset('public/assets/mobileImages/apna_dental_logo2.svg') }}" alt="apna dental logo" width="150px">
      </a>
      <div class="ads text-end">
        <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg" alt="google-ads" class="w-100">
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark navbar-cstm-bg">
    <div class="container-fluid container-lg">
      <ul class="nav d-flex align-items-center flex-nowrap d-lg-none ms-auto gap-2">
        <li class="nav-item dropdown login-dropdown">
          <a class="dropdown-toggle d-flex align-items-center login-toggle-cls" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="pe-7s-user h4 text-white mb-0"></i>
          </a>
          <ul class="dropdown-menu login-menu-cls bg-white border-0 rounded shadow p-3">
            {{-- <form class="row g-3 userLogincard" id="otp-login-form-mobile">
              @csrf
              <div class="col-12">
                <h2 class="h4">Login</h2>
              </div>
              <div class="col-12">
                <div class="input-group">
                  <span class="input-group-text"><i class="icon-email"></i></span>  
                  <input type="text" name="phone_no" class="form-control" placeholder="Enter Phone Number">
                </div>
              </div>
              <div class="col-12">
                <span class="input-group-text"><i class="icon-lock-open"></i></span>                 
                <input type="password" class="form-control" placeholder="Enter OTP" name="otp" />
              </div>
              <div class="col-12">
                <a href="#0" class="forgot"><small>Forgot password?</small></a>
              </div>
              <div class="text-danger error-message"></div>
              <div class="col-12">
                <input class="btn_1 w-100" type="submit" value="Login">
              </div>
            </form> --}}
            <div class="userPopupcard">
              <div class="mt-3"></div>
              <li class="border-bottom py-2 mb-2" id="mobile_logged_name"></li>
              <li class="border-bottom py-2 mb-2 small fw-light" id="mobile_logged_email"></li>
              <li class="border-bottom py-2 mb-2 d-flex align-items-center justify-content-between small fw-light">
              <span id="mobile_logged_phone"></span>
              </li>
              <li class="border-bottom py-2 mb-2"><a class="d-flex gap-2" href="{{ url('/my-account') }}">
                <i class="icon-user-male"></i> My Account <i class="icon-right-open ms-auto"></i></a></li>
              <li class="border-bottom py-2 mb-2"><a href="javascript:void(0)" class="btn_1 text-center logout">Logout</a></li>
            </div>    
        </ul>
    </li>
    
    @if (!Auth::check())
    <li class="nav-item">
      <a class="nav-link active register-card-cls" aria-current="page" href="{{ url('/register') }}"><i
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

                        @foreach($dentalNavs as $dentalNav)
                          <a class="nav-link page-cls" id="v-pills-{{ $dentalNav->id }}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-{{ $dentalNav->id }}" role="tab" aria-controls="v-pills-{{ $dentalNav->id }}" aria-selected="true">{{ $dentalNav->service_name }}</a>
                        @endforeach

                      </div>

                      <div class="tab-content w-100 pt-1" id="v-pills-tabContent">
                        @foreach($dentalNavs as $dentalNav)
                          <div class="tab-pane dental-nav-cls fade show" id="v-pills-{{ $dentalNav->id }}" role="tabpanel"
                            aria-labelledby="v-pills-{{ $dentalNav->id }}-tab" tabindex="0">
                            <ul class="row">
                              @foreach($dentalNav->pages as $page)
                                <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/service/{{ $page->id}}?service={{ $dentalNav->service_name }}">{{ $page->page_title}}</a></li>
                              @endforeach
                            </ul>
                          </div>
                        @endforeach

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>

        {{-- <li class="nav-item dropdown dropdown-mega">
          <a class="nav-link dropdown-toggle service-navbar-main" href="#" data-bs-toggle="dropdown"
            data-bs-auto-close="outside">Services</a>
          <div class="dropdown-menu shadow">
            <div class="mega-content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <div class="d-flex align-items-start h-100">
                      <div class="nav mega-menu-left flex-shrink-0 flex-column nav-pills me-3 text-start bg-light px-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        @foreach($services_nav as $service_nav)

                        @php
                            $serviceName = str_contains($service_nav->service_name, ' ')
                                ? str_replace(' ', '_', $service_nav->service_name)
                                : $service_nav->service_name;
                        @endphp

                          <a class="nav-link service-tab" onclick="menuService('{{ $service_nav->service_name }}','{{ $serviceName }}')" id="v-pills-{{ $serviceName }}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-{{ $serviceName }}" role="tab" aria-controls="v-pills-{{ $serviceName }}" aria-selected="true">{{ $service_nav->service_name }}</a>
                        @endforeach
                      </div>

                      <div class="tab-content w-100 pt-1" id="v-pills-tabContent">
                        
                        @foreach($services_nav as $service_nav)
                          @php
                              $serviceName = str_contains($service_nav->service_name, ' ')
                                  ? str_replace(' ', '_', $service_nav->service_name)
                                  : $service_nav->service_name;
                          @endphp
                          <div class="service-detail-cls tab-pane fade show position-relative" id="v-pills-{{ $serviceName }}" role="tabpanel"
                            aria-labelledby="v-pills-{{ $serviceName }}-tab" tabindex="0">
                            
                            <div id="spinner" class="d-flex justify-content-center d-none position-fixed top-50 start-50 translate-middle">
                              <div class="spinner-border" role="status">
                                <span class="sr-only"></span>
                              </div>
                            </div>
 
                            <ul class="row service-ui-cls" id="{{ $serviceName }}_service"></ul>
                          </div>
                        @endforeach

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li> --}}

        <li class="nav-item dropdown dropdown-mega">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
            data-bs-auto-close="outside">Dr. By Treatment</a>
          <div class="dropdown-menu shadow">
            <div class="mega-content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <div class="d-flex align-items-start">
                      <div class="nav flex-shrink-0 flex-column nav-pills me-3 text-start bg-light px-2"
                        id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        <a class="nav-link active" id="v-pills-cosmetics-dentistry-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-cosmetics-dentistry" role="tab"
                          aria-controls="v-pills-cosmetics-dentistry" aria-selected="true">Cosmetics Dentistry</a>

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
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Cosmetics Dentistry&category=Teeth Whitening">Teeth Whitening</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Cosmetics Dentistry&category=Veneers">Veneers</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Cosmetics Dentistry&category=Teeth Straightening">Teeth Straightening</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Cosmetics Dentistry&category=Crowns">Crowns</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Cosmetics Dentistry&category=Bridges">Bridges</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Cosmetics Dentistry&category=White fillings">White fillings</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-periodontics" role="tabpanel"
                          aria-labelledby="v-pills-periodontics-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Periodontics&category=Scaling">Scaling</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Periodontics&category=Root Planing">Root Planing</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Periodontics&category=Root Surface Debridement">Root Surface Debridement</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Periodontics&category=Oral Inflammation Treatment">Oral Inflammation Treatment</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Periodontics&category=Cosmetic Periodontal Procedures">Cosmetic Periodontal Procedures</a></li>
                          </ul>

                        </div>

                        <div class="tab-pane fade" id="v-pills-Pedodontics" role="tabpanel"
                          aria-labelledby="v-pills-Pedodontics-tab" tabindex="0">

                          <ul class="row">
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Pedodontics&category=Children's Tooth Fillings">Children's Tooth Fillings</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Pedodontics&category=Children's Tooth Extractions">Children's Tooth Extractions</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Pedodontics&category=Children's Tooth Dental Crowns">Children's Tooth Dental Crowns</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Pedodontics&category=Children's Tooth Root Canals">Children's Tooth Root Canals</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Pedodontics&category=Children's Dental X-rays">Children's Dental X-rays</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Pedodontics&category=Children's Sealants">Children's Sealants</a></li>
                          </ul>
                        </div>


                        <div class="tab-pane fade" id="v-pills-Prosthodontics" role="tabpanel"
                          aria-labelledby="v-pills-Prosthodontics-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Prosthodontics&category=Dental Crowns">Dental Crowns</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Prosthodontics&category=Dental Bridges">Dental Bridges</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Prosthodontics&category=Dentures">Dentures</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Prosthodontics&category=Inlays and Onlays">Inlays and Onlays</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Prosthodontics&category=Dental Implants">Dental Implants</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-Orthodontics" role="tabpanel"
                          aria-labelledby="v-pills-Orthodontics-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Orthodontics&category=Braces">Braces</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Orthodontics&category=Aligners">Aligners</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Orthodontics&category=Retainers">Retainers</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Orthodontics&category=Palate expanders">Palate expanders</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-Endodontics" role="tabpanel"
                          aria-labelledby="v-pills-Endodontics-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Endodontics&category=Removing Pulpal Tissue">Removing Pulpal Tissue</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Endodontics&category=Tooth Filing">Tooth Filing</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Endodontics&category=Filing and Shaping Root Canals">Filing and Shaping Root Canals</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Endodontics&category=Obturating The Root Canal Space">Obturating The Root Canal Space</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Endodontics&category=Permanent Restoration For The Tooth">Permanent Restoration For The Tooth</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-Maxillofacial" role="tabpanel"
                          aria-labelledby="v-pills-Maxillofacial-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Maxillofacial&category=Maxillary Osteotomy">Maxillary Osteotomy</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Maxillofacial&category=Mandibular Osteotomy">Mandibular Osteotomy</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Maxillofacial&category=Genioplasty">Genioplasty</a></li>

                            <li class="col-12 mt-3">
                              <h5 class="txt-primary">TMJ operation</h5>
                            </li>

                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Maxillofacial&category=Arthrocentesis">Arthrocentesis</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Maxillofacial&category=Arthroscopy">Arthroscopy</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Maxillofacial&category=Open Joint Procedures">Open Joint Procedures</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-Implantology" role="tabpanel"
                          aria-labelledby="v-pills-Implantology-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Implantology&category=Endosteal">Endosteal </a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Implantology&category=Subperiosteal">Subperiosteal</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Implantology&category=Zygomatic">Zygomatic</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-Laser-dentistry" role="tabpanel"
                          aria-labelledby="v-pills-Laser-dentistry-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Laser-dentistry&category=Laser Gum Therapy">Laser Gum Therapy</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Laser-dentistry&category=Laser Assisted Dental Implantology">Laser Assisted Dental Implantology</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Laser-dentistry&category=Laser Dentin Hypersensitivity">Laser Dentin Hypersensitivity</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Laser-dentistry&category=Laser Gum Depigmentation">Laser Gum Depigmentation</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Laser-dentistry&category=Laser Assisted Root Canal Treatment">Laser Assisted Root Canal Treatment</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Laser-dentistry&category=Laser In TMJ Pain">Laser In TMJ Pain</a></li>

                            <li class="col-12 mt-3">
                              <h5 class="txt-primary">Laser Oral Surgery</h5>
                            </li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Laser-dentistry&category=Frenectomy (removal of a frenulum)">Frenectomy (removal of a frenulum)</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Laser-dentistry&category=Gingivectomy (removal of excess gum tissue)">Gingivectomy (removal of excess gum tissue)</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Laser-dentistry&category=Biopsy of Abnormal Oral Tissue">Biopsy of Abnormal Oral Tissue</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Laser-dentistry&category=Removal of Tumors and Cysts">Removal of Tumors and Cysts</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Laser-dentistry&category=Bone Reshaping for Dental Implants">Bone Reshaping for Dental Implants</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Laser-dentistry&category=Resection of the Jaw">Resection of the Jaw</a></li>
                            <li class="col-md-6"><a href="<?php echo env('APP_URL'); ?>/search/doctors?results_type=Laser-dentistry&category=Treatment of Periodontal (gum) Disease">Treatment of Periodontal (gum) Disease</a></li>
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

        <li class="nav-item">
          <a class="nav-link" href="#">Oral health</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
        </li>

        <li class="nav-item dropdown dropdown-mega">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
            data-bs-auto-close="outside">speciality <span class="text-white bg-success">new</span></a>
          <div class="dropdown-menu shadow">
            <div class="mega-content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <div class="d-flex align-items-start">
                      <div class="nav flex-shrink-0 flex-column nav-pills me-3 text-start bg-light px-2"
                        id="v-pills-tab1" role="tablist" aria-orientation="vertical">


                        <a class="nav-link active" id="v-pills-cosmetics-dentistry1-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-cosmetics-dentistry1" role="tab"
                          aria-controls="v-pills-cosmetics-dentistry1" aria-selected="true">cosmetics Dentistry</a>

                        <a class="nav-link" id="v-pills-periodontics1-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-periodontics1" role="tab" aria-controls="v-pills-periodontics1"
                          aria-selected="false">Periodontics</a>

                        <a class="nav-link" id="v-pills-Pedodontics1-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-Pedodontics1" role="tab" aria-controls="v-pills-Pedodontics1"
                          aria-selected="false">Pedodontics</a>

                        <a class="nav-link" id="v-pills-Prosthodontics1-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-Prosthodontics1" role="tab" aria-controls="v-pills-Prosthodontics1"
                          aria-selected="false">Prosthodontics</a>

                        <a class="nav-link" id="v-pills-Orthodontics1-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-Orthodontics1" role="tab" aria-controls="v-pills-Orthodontics1"
                          aria-selected="false">Orthodontics</a>

                        <a class="nav-link" id="v-pills-Endodontics1-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-Endodontics1" role="tab" aria-controls="v-pills-Endodontics1"
                          aria-selected="false">Endodontics</a>

                        <a class="nav-link" id="v-pills-Maxillofacial1-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-Maxillofacial1" role="tab" aria-controls="v-pills-Maxillofacial1"
                          aria-selected="false">Maxillofacial</a>

                        <a class="nav-link" id="v-pills-Implantology1-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-Implantology1" role="tab" aria-controls="v-pills-Implantology1"
                          aria-selected="false">Implantology</a>

                        <a class="nav-link" id="v-pills-Laser-dentistry1-tab" data-bs-toggle="pill"
                          data-bs-target="#v-pills-Laser-dentistry1" role="tab" aria-controls="v-pills-Laser-dentistry1"
                          aria-selected="false">Laser-dentistry</a>

                      </div>

                      <div class="tab-content w-100 pt-1" id="v-pills-tabContent1">
                        <div class="tab-pane fade show active" id="v-pills-cosmetics-dentistry1" role="tabpanel"
                          aria-labelledby="v-pills-cosmetics-dentistry1-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="">Teeth Whitening</a></li>
                            <li class="col-md-6"><a href="">Veneers</a></li>
                            <li class="col-md-6"><a href="">Teeth Straightening</a></li>
                            <li class="col-md-6"><a href="">Crowns</a></li>
                            <li class="col-md-6"><a href="">Bridges</a></li>
                            <li class="col-md-6"><a href="">White fillings</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-periodontics1" role="tabpanel"
                          aria-labelledby="v-pills-periodontics1-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="">scaling</a></li>
                            <li class="col-md-6"><a href="">root planing</a></li>
                            <li class="col-md-6"><a href="">root surface debridement</a></li>
                            <li class="col-md-6"><a href="">oral inflammation treatment</a></li>
                            <li class="col-md-6"><a href="">cosmetic periodontal procedures</a></li>
                          </ul>


                        </div>


                        <div class="tab-pane fade" id="v-pills-Pedodontics1" role="tabpanel"
                          aria-labelledby="v-pills-Pedodontics1-tab" tabindex="0">

                          <ul class="row">
                            <li class="col-md-6"><a href="">Children's Tooth Fillings</a></li>
                            <li class="col-md-6"><a href="">Children's Tooth Extractions</a></li>
                            <li class="col-md-6"><a href="">Children's Tooth Dental Crowns</a></li>
                            <li class="col-md-6"><a href="">Children's Tooth Root Canals</a></li>
                            <li class="col-md-6"><a href="">Children's Dental X-rays</a></li>
                            <li class="col-md-6"><a href="">Children's Sealants</a></li>
                          </ul>
                        </div>


                        <div class="tab-pane fade" id="v-pills-Prosthodontics1" role="tabpanel"
                          aria-labelledby="v-pills-Prosthodontics1-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="">Dental crowns</a></li>
                            <li class="col-md-6"><a href="">Dental bridges</a></li>
                            <li class="col-md-6"><a href="">Dentures</a></li>
                            <li class="col-md-6"><a href="">Inlays and Onlays</a></li>
                            <li class="col-md-6"><a href="">Dental implants</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-Orthodontics1" role="tabpanel"
                          aria-labelledby="v-pills-Orthodontics1-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="">Braces</a></li>
                            <li class="col-md-6"><a href="">Aligners</a></li>
                            <li class="col-md-6"><a href="">Retainers</a></li>
                            <li class="col-md-6"><a href="">Palate expanders</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-Endodontics1" role="tabpanel"
                          aria-labelledby="v-pills-Endodontics1-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="">removing pulpal tissue</a></li>
                            <li class="col-md-6"><a href="">Tooth filing</a></li>
                            <li class="col-md-6"><a href="">filing and shaping root canals</a></li>
                            <li class="col-md-6"><a href="">obturating the root canal space</a></li>
                            <li class="col-md-6"><a href="">permanent restoration for the tooth</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-Maxillofacial1" role="tabpanel"
                          aria-labelledby="v-pills-Maxillofacial1-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="">Maxillary osteotomy</a></li>
                            <li class="col-md-6"><a href="">Mandibular osteotomy</a></li>
                            <li class="col-md-6"><a href="">Genioplasty</a></li>

                            <li class="col-12 mt-3">
                              <h5 class="txt-primary">TMJ operation</h5>
                            </li>

                            <li class="col-md-6"><a href="">Arthrocentesis</a></li>
                            <li class="col-md-6"><a href="">Arthroscopy</a></li>
                            <li class="col-md-6"><a href="">Open joint procedures</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-Implantology1" role="tabpanel"
                          aria-labelledby="v-pills-Implantology1-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="">Endosteal </a></li>
                            <li class="col-md-6"><a href="">Subperiosteal</a></li>
                            <li class="col-md-6"><a href="">Zygomatic</a></li>
                          </ul>
                        </div>

                        <div class="tab-pane fade" id="v-pills-Laser-dentistry1" role="tabpanel"
                          aria-labelledby="v-pills-Laser-dentistry1-tab" tabindex="0">
                          <ul class="row">
                            <li class="col-md-6"><a href="">Laser Gum Therapy</a></li>
                            <li class="col-md-6"><a href="">Laser Assisted Dental Implantology</a></li>
                            <li class="col-md-6"><a href="">Laser Dentin Hypersensitivity</a></li>
                            <li class="col-md-6"><a href="">Laser Gum Depigmentation</a></li>
                            <li class="col-md-6"><a href="">Laser Assisted Root Canal Treatment</a></li>
                            <li class="col-md-6"><a href="">Laser In TMJ Pain</a></li>

                            <li class="col-12 mt-3">
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


      </ul>

      <div class="d-none d-lg-block">
        <ul class="nav align-items-center gap-3">
          <li class="nav-item dropdown login-dropdown">
            <a class="dropdown-toggle login-toggle-cls d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="pe-7s-user h4 text-white mb-0"></i>
            </a>
            <ul class="dropdown-menu login-menu-cls bg-white border-0 rounded shadow p-3">
                <form class="row g-2 userLogincard" id="otp-login-form">
                  @csrf
                  <div class="col-12">
                    <h2 class="h5">{{"Login"}}</h2>
                  </div>
                  <div class="col-12">
                    <div class="input-group">                    
                      <span class="input-group-text"><i class="icon-phone"></i></span>                    
                      <input type="text" name="phone_no" id="otpless_phone_no" class="form-control" placeholder="Enter Phone Number">
                    </div>
                  </div>
                  <div class="col-12 loginOtpBtn d-none">
                    <div id="otp" class="otp-inputs d-flex justify-content-between mb-1">
                        <input class="m-0 text-center form-control rounded" type="text" id="first" maxlength="1" />
                        <input class="m-0 text-center form-control rounded" type="text" id="second" maxlength="1" />
                        <input class="m-0 text-center form-control rounded" type="text" id="third" maxlength="1" />
                        <input class="m-0 text-center form-control rounded" type="text" id="fourth" maxlength="1" />
                        <input class="m-0 text-center form-control rounded" type="text" id="fifth" maxlength="1" />
                        <input class="m-0 text-center form-control rounded" type="text" id="sixth" maxlength="1" />
                      </div>
                  </div>

                  <div class="text-danger error-message"></div>
                  <div class="col-12">
                    <input class="btn_1 w-100 sendOtpBtn" type="button" value="Send OTP">
                    <input class="btn_1 w-100 loginOtpBtn d-none" type="button" value="Login">
                  </div>
                </form>
                <div class="offcanvas-footer resend-otp-footer d-none">
                  <small class="text-muted">Didn’t receive the code?</small><br>
                  <input class="resendOtpBtn text-decoration-none text-pink" type="button" value="Resend OTP">
                </div>
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