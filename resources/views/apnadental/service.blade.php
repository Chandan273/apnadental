@extends('apnadental.master')
@section("content")
<style>
    :root {
    --primary: #74d1c6;
    --secondary: #3f4079;
    --pink: #e74e84;
    }
    .txt-primary{
        color:var(--primary);
    }
    .txt-secondary{
        color:var(--secondary);
    }
    .content-section .image-wrraper{
        max-width:250px;
        max-height:250px;
        border: 5px solid #ddd;
        overflow:hidden;
    }
    .content-section .image-wrraper img{
        width:100%;
    }
    .nav-tabs .nav-link.txt-secondary.active{
        color: var(--primary);
    }
    #breadcrumb {
        background-color: #efefef;
        color: #000;
    }
    #breadcrumb ul li a {
        color: var(--pink);
    }

</style>
<main>
	<div id="breadcrumb">
		<div class="container">
			<ul>
				<li><a href="#">Home</a></li>
				<li>Services</li>
			</ul>
		</div>
	</div>
	<!-- /breadcrumb end -->

    <!-- docotor section start -->
	
    <section class="bg-white py-5">
        <div class="container">
            <h1 class="text-uppercase text-center mb-4">Docotors</h1>
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

            </div>
        </div>
    </section>

<!-- Clinics section start  -->
<section class="py-5">
    <div class="container">
        <h2 class="text-uppercase text-center mb-4">Clinics</h2>
        <div class="row gy-3">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card p-3 ">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <h3 class="h5 txt-primary">Max Lab</h3>
                            <h4 class="h6 txt-primary">Sector-1</h4>
                        </div>
                        <div>
                            <a href="#" class="me-2">See Details</a>
                            <button class="btn_1 ">Walk In</button>
                        </div>
                    </div>
                    <div class="card_body">
                        <div class="row mb-2 g-1">
                            <div class="col-auto">
                                <i class="icon-location-1 h5 txt-primary"></i>
                            </div>
                            <div class="col">
                                <h3 class="h6">C-1 Ground floor, Govt School, Noida-201301 </h3>
                            </div>
                        </div>

                        <div class="row mb-2 g-1">
                            <div class="col-auto">
                                <i class="icon-phone h5 txt-primary"></i>
                            </div>
                            <div class="col">
                                <a href="tel:+4733378901">
                                    <h3 class="h6">+91 1234567890</h3>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <a href="#">Get on SMS</a>
                            <a href="#">Get on Mail</a>
                        </div>
                    </div>
                   
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card p-3 ">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <h3 class="h5 txt-primary">Max Lab</h3>
                            <h4 class="h6 txt-primary">Sector-1</h4>
                        </div>
                        <div>
                            <a href="#" class="me-2">See Details</a>
                            <button class="btn_1 ">Walk In</button>
                        </div>
                    </div>
                    <div class="card_body">
                        <div class="row mb-2 g-1">
                            <div class="col-auto">
                                <i class="icon-location-1 h5 txt-primary"></i>
                            </div>
                            <div class="col">
                                <h3 class="h6">C-1 Ground floor, Govt School, Noida-201301 </h3>
                            </div>
                        </div>

                        <div class="row mb-2 g-1">
                            <div class="col-auto">
                                <i class="icon-phone h5 txt-primary"></i>
                            </div>
                            <div class="col">
                                <a href="tel:+4733378901">
                                    <h3 class="h6">+91 1234567890</h3>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <a href="#">Get on SMS</a>
                            <a href="#">Get on Mail</a>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card p-3 ">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <h3 class="h5 txt-primary">Max Lab</h3>
                            <h4 class="h6 txt-primary">Sector-1</h4>
                        </div>
                        <div>
                            <a href="#" class="me-2">See Details</a>
                            <button class="btn_1 ">Walk In</button>
                        </div>
                    </div>
                    <div class="card_body">
                        <div class="row mb-2 g-1">
                            <div class="col-auto">
                                <i class="icon-location-1 h5 txt-primary"></i>
                            </div>
                            <div class="col">
                                <h3 class="h6">C-1 Ground floor, Govt School, Noida-201301 </h3>
                            </div>
                        </div>

                        <div class="row mb-2 g-1">
                            <div class="col-auto">
                                <i class="icon-phone h5 txt-primary"></i>
                            </div>
                            <div class="col">
                                <a href="tel:+4733378901">
                                    <h3 class="h6">+91 1234567890</h3>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <a href="#">Get on SMS</a>
                            <a href="#">Get on Mail</a>
                        </div>
                    </div>
                   
                </div>
            </div>

        </div>
    </div>
</section>

<!-- contant  section -->

<section class="content-section bg-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="image-wrraper">
                    <img src="{{ asset('public/assets/img/doctor-lady.jpg') }}" alt="doctor-lady.jpg" class="w-100">
                </div>
            </div>
            <div class="col-12 col-md-9 col-lg-9">
                <h2 class="text-uppercase">what is root canal treatment?</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt sed officiis perferendis deserunt molestias quibusdam qui, tempora atque commodi fugit ab soluta doloremque quisquam inventore ducimus suscipit ipsa. Porro, ipsum?</p>
            </div>
        </div>
    </div>
</section>

<!-- Tabs section  -->

<section class="service-tabs py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link fw-bold txt-secondary " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Available Location</button>
                        <button class="nav-link fw-bold txt-secondary" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Doctor Details</button>
                        <button class="nav-link fw-bold txt-secondary" id="nav-Feedback-tab" data-bs-toggle="tab" data-bs-target="#nav-Feedback" type="button" role="tab" aria-controls="nav-Feedback" aria-selected="false">Feedback</button>
                        <button class="nav-link fw-bold txt-secondary active" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Faq's</button>
                    </div>
                </nav>
                <div class="tab-content py-3" id="nav-tabContent">
                    <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="image-wrraper">
                                    <img src="{{ asset('public/assets/img/doctor-lady.jpg') }}" alt="doctor-lady.jpg" class="w-100">
                                </div>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <h2 class="text-uppercase">what is root canal treatment?</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt sed officiis perferendis deserunt molestias quibusdam qui, tempora atque commodi fugit ab soluta doloremque quisquam inventore ducimus suscipit ipsa. Porro, ipsum?</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">Doctor Details</div>
                    <div class="tab-pane fade" id="nav-Feedback" role="tabpanel" aria-labelledby="nav-Feedback-tab" tabindex="0">Feedback</div>
                    <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    What to eat after teeth scaling?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nam, dolorum sequi veritatis nihil beatae esse vitae, fugiat ipsa quasi soluta magnam accusantium nemo debitis nostrum ullam. Vero quasi neque quisquam velit sed quos quam, reiciendis, totam quae aut soluta reprehenderit nam, perspiciatis deleniti? Nihil aspernatur quae explicabo, ipsam dicta laudantium consequatur dolores est doloribus delectus, ut labore, atque a.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Is scaling good for teeth?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatibus facere asperiores accusamus! Provident repellendus velit natus sunt eveniet officiis et! Sed dolore reiciendis, dicta asperiores hic doloribus doloremque corporis laborum maxime officiis voluptatum natus maiores distinctio labore adipisci velit?</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Is scaling of teeth painful?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque asperiores magnam illum. Qui culpa veritatis adipisci dicta nemo repellendus voluptates natus eos, aliquam dolorum maxime voluptas, tempore, neque id ratione saepe voluptatum possimus nihil velit quaerat totam nostrum error est optio! Beatae cum odio nihil hic harum illum recusandae minima.</div>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

</main>
<!-- /main -->


@endsection("content")