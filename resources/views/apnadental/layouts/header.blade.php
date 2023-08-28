<header class="header_sticky">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-6">
        <div id="logo_home">
          <h1><a href="{{ url('/') }}" title="Findoctor">Laravel</a></h1>
        </div>
      </div>

      <nav class="col-lg-9 col-6">
        <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
        <ul id="top_access">
          <li><a href="{{ url('/login') }}"><i class="pe-7s-user"></i></a></li>
          <li><a href="{{ url('/register') }}"><i class="pe-7s-add-user"></i></a></li>
        </ul>

        <div class="main-menu">
          <ul>
            <li class="submenu">
              <a href="{{ url('/') }}" class="show-submenu">Home</a>
            </li>

            <li class="submenu">
              <a href="#0" class="show-submenu">Find a Dentist<i class="icon-down-open-mini"></i></a>
              <ul>
                <li><a href="index.html">Treatment</a></li>
                <li><a href="index-8.html">Specialties</a></li>
                <li><a href="index-2.html">Dental Clinics</a></li>
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
        <!-- /main-menu -->

      </nav>
    </div>
  </div>
  <!-- /container -->

</header>
<!-- /header -->