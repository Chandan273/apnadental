<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top px-2" id="mainNav">
    <a class="navbar-brand" href="{{ url('/admin/dashboard') }}"><img src="{{ asset('public/assets/img/logo.png') }}" data-retina="true" alt="" width="163" height="36"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-bs-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{ url('/admin/dashboard') }}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-placement="right" title="Service">
          <a class="nav-link nav-link-collapse collapsed" data-bs-toggle="collapse" href="#collapseService" data-parent="#exampleAccordion">
            <i class="fa fa-cog" aria-hidden="true"></i>
            <span class="nav-link-text">Service</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseService">
            <li>
              <a href="{{ url('/admin/add-service') }}">Add Service</a>
            </li>
            <li>
              <a href="{{ url('/admin/all-services') }}">All Services</a>
            </li>
          </ul>

        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-placement="right" title="Brands">
          <a class="nav-link nav-link-collapse collapsed" data-bs-toggle="collapse" href="#collapseBrand" data-parent="#exampleAccordion">
            <i class="fa fa-picture-o" aria-hidden="true"></i>
            <span class="nav-link-text">Brands</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseBrand">
            <li>
              <a href="{{ url('/admin/add-brand') }}">Add Brand</a>
            </li>
            <li>
              <a href="{{ url('/admin/all-brands') }}">All Brands</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-placement="right" title="Blog">
          <a class="nav-link nav-link-collapse collapsed" data-bs-toggle="collapse" href="#collapsCategory" data-parent="#exampleAccordion">
            <i class="fa fa-archive" aria-hidden="true"></i>
            <span class="nav-link-text">Blog</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsCategory">
            <li>
              <a href="{{ url('/admin/add-category') }}">Add category</a>
            </li>
            <li>
              <a href="{{ url('/admin/add-categories') }}">All Categories</a>
            </li>
            <li>
              <a href="{{ url('/admin/add-blog') }}">Add Blog</a>
            </li>
            <li>
              <a href="{{ url('/admin/all-blogs') }}">All Blogs</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-placement="right" title="Slider">
          <a class="nav-link nav-link-collapse collapsed" data-bs-toggle="collapse" href="#collapseSlider" data-parent="#exampleAccordion">
            <i class="fa fa-gg" aria-hidden="true"></i>
            <span class="nav-link-text">Slider</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseSlider">
            <li>
              <a href="{{ url('/admin/add-slider') }}">Add Slider</a>
            </li>
            <li>
              <a href="{{ url('/admin/all-sliders') }}">All Sliders</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-placement="right" title="Slider">
          <a class="nav-link nav-link-collapse collapsed" data-bs-toggle="collapse" href="#collapseDentalSlider" data-parent="#exampleAccordion">
            <i class="fa fa-plus-square" aria-hidden="true"></i>
            <span class="nav-link-text">Dental Service Page</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseDentalSlider">
            <li>
              <a href="{{ url('/admin/add-dental-service') }}">Add Dental Service</a>
            </li>
            <li>
              <a href="{{ url('/admin/all-dental-services') }}">All Dental Services</a>
            </li>
            <li>
              <a href="{{ url('/admin/add-dental-service-page') }}">Add Dental Service Page</a>
            </li>
            <li>
              <a href="{{ url('/admin/all-dental-services-pages') }}">All Dental Services Pages</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-placement="right" title="import">
          <a class="nav-link nav-link-collapse collapsed" data-bs-toggle="collapse" href="#collapseImport" data-parent="#exampleAccordion">
            <i class="fa fa-upload" aria-hidden="true"></i>
            <span class="nav-link-text">Import</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseImport">
            <li>
              <a href="{{ url('/admin/import-csv') }}">Import CSV</a>
            </li>
            <li>
              <a href="{{ url('/admin/all-imports') }}">View Records</a>
            </li>
          </ul>
        </li>
       
        <li class="nav-item" data-bs-toggle="tooltip" data-placement="right" title="Blog">
          <a class="nav-link nav-link-collapse collapsed" data-bs-toggle="collapse" href="#collapsDoctor" data-parent="#exampleAccordion">
            <i class="fa fa-user-md" aria-hidden="true"></i>
            <span class="nav-link-text">Doctor</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsDoctor">
            <li>
              <a href="{{ url('/admin/add-doctor') }}">Add Doctor</a>
            </li>
            <li>
              <a href="{{ url('/admin/all-doctors') }}">All Doctor</a>
            </li>
            <li>
              <a href="{{ url('/admin/doctor-detail') }}">Doctor Details</a>
            </li>
          </ul>
        </li>

		    <li class="nav-item" data-bs-toggle="tooltip" data-placement="right" title="Messages">
          <a class="nav-link" href="{{ url('/admin/messages') }}">
            <i class="fa fa-fw fa-envelope-open"></i>
            <span class="nav-link-text">Messages</span>
          </a>
        </li>
		    <li class="nav-item" data-bs-toggle="tooltip" data-placement="right" title="Bookings">
          <a class="nav-link" href="{{ url('/admin/all-bookings') }}">
            <i class="fa fa-fw fa-calendar-check-o"></i>
            <span class="nav-link-text">Bookings 
              <!-- <span class="badge badge-pill badge-primary">6 New</span> -->
            </span>
          </a>
        </li>
		    <li class="nav-item" data-bs-toggle="tooltip" data-placement="right" title="Reviews">
          <a class="nav-link" href="{{ url('/admin/reviews') }}">
            <i class="fa fa-fw fa-star"></i>
            <span class="nav-link-text">Reviews</span>
          </a>
        </li>
		    <li class="nav-item" data-bs-toggle="tooltip" data-placement="right" title="Bookmarks">
          <a class="nav-link" href="{{ url('/admin/bookmarks') }}">
            <i class="fa fa-fw fa-heart"></i>
            <span class="nav-link-text">Bookmarks</span>
          </a>
        </li>
		    <li class="nav-item" data-bs-toggle="tooltip" data-placement="right" title="Add listing">
          <a class="nav-link" href="{{ url('/admin/add-listing') }}">
            <i class="fa fa-fw fa-plus-circle"></i>
            <span class="nav-link-text">Add listing</span>
          </a>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link nav-link-collapse collapsed" data-bs-toggle="collapse" href="#collapseProfile" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">My profile</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseProfile">
            <li>
              <a href="{{ url('/admin/user-profile') }}">User profile</a>
            </li>
			    <li>
              <a href="{{ url('/admin/doctor-profile') }}">Doctor profile</a>
            </li>
          </ul>
        </li>
		    <li class="nav-item" data-bs-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-bs-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-gear"></i>
            <span class="nav-link-text">Components</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="{{ url('/admin/charts') }}">Charts</a>
            </li>
			      <li>
              <a href="{{ url('/admin/tables') }}">Tables</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>



      
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle me-lg-2" id="messagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle me-lg-2" id="alertsDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 me-lg-2">
            <div class="input-group">
              <input class="form-control p-2" type="text" placeholder="Search for...">           
              <button class="btn btn_pink" type="button">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /Navigation-->