@extends('apnadental.master')
@section("content")

<style>


</style>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<main class="doctor-page">
    <div id="results" class="" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4><strong>Showing 10</strong> of 140 results</h4>
                </div>
                <div class="col-md-6">
                    <div class="search_bar_list">
                        <input type="text" class="form-control" placeholder="Ex. Specialist, Name, Doctor...">
                        <input type="submit" value="Search">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="filters_listing">
        <div class="container">
            <ul class="clearfix">
                <li>
                    <h6>Type</h6>
                    <div class="switch-field">
                        <input type="radio" id="all" name="type_patient" value="all" checked="">
                        <label for="all">All</label>
                        <input type="radio" id="doctors" name="type_patient" value="doctors">
                        <label for="doctors">Doctors</label>
                        <input type="radio" id="clinics" name="type_patient" value="clinics">
                        <label for="clinics">Clinics</label>
                    </div>
                </li>
                <li>
                    <h6>Sort by</h6>
                    <select name="orderby" class="selectbox" sb="48985461" style="display: none;">
                        <option value="Closest">Closest</option>
                        <option value="Best rated">Best rated</option>
                        <option value="Men">Men</option>
                        <option value="Women">Women</option>
                    </select>
                </li>
                <li>
                    <h6>Select a Treatment</h6>
                    <select name="orderby" class="selectbox form-select" multiple  sb="48985461" style="display: none;">
                        <option value="Periodontics">Periodontics</option>
                        <option value="Pedodontics">Pedodontics</option>
                        <option value="Prosthodontics">Prosthodontics</option>
                        <option value="Orthodontics">Orthodontics</option>
                        <option value="Endodontics">Endodontics</option>
                        <option value="Maxillofacial_Surgery">Maxillofacial Surgery</option>
                        <option value="Implantology">Implantology</option>
                    </select>

                </li>
            </ul>
        </div>
    </div>

    <!-- post cartegory  -->
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-12 col-lg-9">
                <div>
                    <!-- 1st. doctor  -->
                    <div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>Pediatrician</small>
						<h3>Dr. Cornfield</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
						<ul class="d-flex align-items-center">
							<li><a href="tel:+0123456789"  class="btn_listing">Get a Free Call now</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
							<li class="ms-auto me-3"><a class="btn rounded-pill" href="#">No Booking Fee</a></li>
                            <li><a href="detail-page.html">Book now</a></li>
						</ul>
					</div>

                    <!-- Book now Button click after auth  -->
                    <div class="card p-3 mb-4">
                        <div class="row align-items-center g-4">
                            <div class="col-12 col-md-6">
                            <img class="mb-3" src="{{ asset('public/assets/img/apna_dental_logo.svg') }}"  alt="brand logo" width="100px">
                            <h6 class="h5">Stay protected with Term Life Insurance</h6>
                            <p>Secure the future of your family with Rs. 1Cr. Life Cover starting $425/month</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <form class="text-center">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="number" aria-describedby="emailHelp" placeholder="Mobile Number">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="OTP">
                                    </div>                                    
                                    <button type="submit" class="btn btn-primary w-100">Book a Slot Now</button>
                                    <small class="mt-2">Life Insurance partner will get in touch with you soon.</small>
                                </form>
                            </div>
                        </div>
                    </div>




					
                    <!-- 2nd. doctor  -->
					<div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>Psicologist</small>
						<h3>Dr. Shoemaker</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="img/badges/badge_2.svg" width="15" height="15" alt=""></a>
						<ul class="d-flex align-items-center">
                            <li><a href="tel:+0123456789"  class="btn_listing">Get a Free Call now</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
							<li class="ms-auto me-3"><a class="btn rounded-pill" href="#">No Booking Fee</a></li>
                            <li><a href="detail-page.html">Book now</a></li>
						</ul>
					</div>
					
                    <!-- 3rd. doctor  -->
					<div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>Pediatrician</small>
						<h3>Dr. Lachinet</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="img/badges/badge_3.svg" width="15" height="15" alt=""></a>
						<ul class="d-flex align-items-center">
                            <li><a href="tel:+0123456789"  class="btn_listing">Get a Free Call now</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
							<li class="ms-auto me-3"><a class="btn rounded-pill" href="#">No Booking Fee</a></li>
							<li><a href="detail-page.html">Book now</a></li>
						</ul>
					</div>
                   
                    <!-- Advertising Ads -->
                    <div class="bg-white mb-4 shadow-sm rounded-1">
                        <div class="container ads">
                            <div class="row">
                                <div class="col-12 py-3">
                                    <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg" alt="" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4st. doctor  -->
                    <div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>Pediatrician</small>
						<h3>Dr. Cornfield</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
						<ul class="d-flex align-items-center">
							<li><a href="tel:+0123456789"  class="btn_listing">Get a Free Call now</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
							<li class="ms-auto me-3"><a class="btn rounded-pill" href="#">No Booking Fee</a></li>
                            <li><a href="detail-page.html">Book now</a></li>
						</ul>
					</div>
					
                    <!-- 5nd. doctor  -->
					<div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>Psicologist</small>
						<h3>Dr. Shoemaker</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="img/badges/badge_2.svg" width="15" height="15" alt=""></a>
						<ul class="d-flex align-items-center">
                            <li><a href="tel:+0123456789"  class="btn_listing">Get a Free Call now</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
							<li class="ms-auto me-3"><a class="btn rounded-pill" href="#">No Booking Fee</a></li>
                            <li><a href="detail-page.html">Book now</a></li>
						</ul>
					</div>
					
                    <!-- 6rd. doctor  -->
					<div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>Pediatrician</small>
						<h3>Dr. Lachinet</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="img/badges/badge_3.svg" width="15" height="15" alt=""></a>
						<ul class="d-flex align-items-center">
                            <li><a href="tel:+0123456789"  class="btn_listing">Get a Free Call now</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
							<li class="ms-auto me-3"><a class="btn rounded-pill" href="#">No Booking Fee</a></li>
							<li><a href="detail-page.html">Book now</a></li>
						</ul>
					</div>

                    <!-- Advertising Ads -->
                    <div class="bg-white mb-4 shadow-sm rounded-1">
                        <div class="container ads">
                            <div class="row">
                                <div class="col-12 py-3">
                                    <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg" alt="" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>




                 <!-- pagination start-->
                <nav aria-label="..." class="mt-3">
                    <ul class="pagination pagination-sm">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <!-- pagination end-->

               
            </div>       
            <aside class="col-12 col-lg-3">

                <div class="widget">
                    <div class="autoplay_doctors row mt-2 mt-md-5 gx-4 gy-4 gy-md-0">
                        <div class="col-12 text-center">
                            <div class="box_list home">
                                <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" class="wish_bt" aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"></a>
                                <figure>
                                    <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
                                    <div class="preview"><span>Read more</span></div>
                                </figure>

                                <div class="wrapper">
                                    <small>Psicologist</small>
                                    <h3>Dr. Watamaniuk</h3>
                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                                    <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>

                                    <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" class="badge_list_1" aria-label="Badge Level" data-bs-original-title="Badge Level"><img src="http://localhost/apnadental/public/assets/apnadental/img/badges/badge_1.svg" width="15" height="15" alt=""></a>
                                </div>

                                <ul>
                                    <li><i class="icon-eye-7"></i> 854 Views</li>
                                    <li><a href="detail-page.html">Book now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ads  -->
                <div class="ads">
                    <div class="row">
                        <div class="col-12 py-3">
                            <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/10/newspaper-rec300d.jpg" alt="right side ads" width="100%">
                        </div>
                    </div>
                </div>

                <!-- recent post  -->
                <div class="widget">
                    <div class="widget-title">
                        <h4>Recent Posts</h4>
                    </div>
                    <ul class="comments-list">
                        <li class="d-flex gap-2 mb-3">
                            <a href="#0">
                                <img src="http://via.placeholder.com/160x160.jpg" alt="" width="100px">
                            </a>
                            <div>                            
                                <h3 class="fs-6"><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                                <small>11.08.2016</small>
                            </div>
                        </li>
                        <li class="d-flex gap-2 mb-3">
                            <a href="#0">
                                <img src="http://via.placeholder.com/160x160.jpg" alt="" width="100px">
                            </a>
                            <div>                            
                                <h3 class="fs-6"><a href="#" title="">Outdoor Kitchen Decorating: Furnish and Accessorize...</a></h3>
                                <small>10.08.2016</small>
                            </div>
                        </li>
                        <li class="d-flex gap-2 mb-3">
                            <a href="#0">
                                <img src="http://via.placeholder.com/160x160.jpg" alt="" width="100px">
                            </a>
                            <div>                            
                                <h3 class="fs-6"><a href="#" title="">Interior Design Tips: Decorating to Celebrate...</a></h3>
                                <small>09.08.2016</small>
                            </div>
                        </li>
                       
                    </ul>
                </div>                
            </aside>
        </div>
    </div>
</main>
<!-- /main -->


<script>
    $('.autoplay_doctors').slick({
        slidesToShow: 1,
        // slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        centerMode: true,
        focusOnSelect: false,
    });
</script>
@endsection("content")