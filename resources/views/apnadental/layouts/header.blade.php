<style>
ul.mega-menu{
  width: 70vw;
}
ul.mega-menu .menu-item-card{
transition: all 0.4s;
background-color: #ffffff;
border-color: rgba(231, 78, 132, 0.1);
}
ul.mega-menu .menu-item-card:hover{
background-color: rgba(231, 78, 132, 0.1);
}
</style>

<header class="header_sticky">
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

    <div class="row pt-3">
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
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /container -->

</header>
<!-- /header -->