@extends('apnadental.master')
@section("content")
<style>
    /* :root {
    --primary: #74d1c6;
    --secondary: #3f4079;
    --pink: #e74e84;
    } */
    .txt-primary {
        color: var(--primary);
    }

    .txt-secondary {
        color: var(--secondary);
    }

    .content-section .image-wrraper {
        max-width: 250px;
        max-height: 250px;
        border: 5px solid #ddd;
        overflow: hidden;
    }

    .content-section .image-wrraper img {
        width: 100%;
    }

    .nav-tabs .nav-link.txt-secondary.active {
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


    <!-- contant  section -->

    <section class="content-section bg-white py-5">
        <div class="container">
            <div class="row align-items-center g-3">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="image-wrraper">
                        <img src="{{ asset('public/assets/img/doctor-lady.jpg') }}" alt="doctor-lady.jpg" class="w-100">
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-9">
                    <h2 class="text-uppercase">Root Canal Treatment - Procedure, Cost And Side Effects</h2>
                    <p>Root canal is a term which is used for describing your natural cavity that lies within the center
                        of your tooth. The nerves of the tooth lie in the root canal. When the nerve tissue or the pulp
                        of your tooth gets damaged, it will break down, resulting in multiplication of bacteria in
                        the pulp chamber.</p>
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
                            <button class="nav-link fw-bold txt-secondary active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">About RCT ( Root Canal Treatment )</button>

                            <button class="nav-link fw-bold txt-secondary" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Procedure</button>

                            <button class="nav-link fw-bold txt-secondary" id="nav-Feedback-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-Feedback" type="button" role="tab" aria-controls="nav-Feedback"
                                aria-selected="false">Who May Require RCT</button>

                            <button class="nav-link fw-bold txt-secondary" id="nav-side-effects" data-bs-toggle="tab"
                                data-bs-target="#side-effects" type="button" role="tab" aria-controls="side-effects"
                                aria-selected="false">Side Effects & Guidelines of RCT Procedure</button>

                            <button class="nav-link fw-bold txt-secondary" id="nav-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                aria-selected="false">Faq's</button>

                        </div>
                    </nav>
                    <div class="tab-content py-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab" tabindex="0">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h2 class="text-uppercase">what is root canal treatment?</h2>
                                    <p>The presence of bacteria and the decayed debris may cause a tooth infection. It
                                        can also cause a swelling that sometimes spreads to the other parts of the neck,
                                        face or head. If you are experiencing pain, tooth discoloration, swelling or a
                                        feeling of tenderness in your lymph nodes, there may be a chance that you
                                        require a root canal treatment.
                                        </br>
                                        </br>
                                        A root canal is performed for repairing or saving an infected tooth that has
                                        been damaged badly. The procedure is carried out by removing the area of the
                                        tooth that is damaged, commonly known as the pulp. After that, the area is
                                        cleaned and disinfected before being filled and sealed.
                                        </br>
                                        </br>
                                        Once this initial root canal treatment performed, you can visit the dentist
                                        later who may place a crown on the affected tooth for protection and restore it
                                        to function perfectly. A root canal treatment may comprise of one to three
                                        visits to the dentist, depending on the severity of the condition.</p>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="box_list home">


                                                <div class="wrapper">
                                                    <small>Psicologist</small>
                                                    <h3>Dr. Watamaniuk</h3>
                                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo
                                                        nobis persecuti cuodo....</p>
                                                    <span class="rating"><i class="icon_star voted"></i><i
                                                            class="icon_star voted"></i><i
                                                            class="icon_star voted"></i><i class="icon_star"></i><i
                                                            class="icon_star"></i> <small>(145)</small></span>

                                                    <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Badge Level" class="badge_list_1"><img
                                                            src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}"
                                                            width="15" height="15" alt=""></a>
                                                </div>

                                                <ul>
                                                    <li><i class="icon-eye-7"></i> 854 Views</li>
                                                    <li><a href="detail-page.html">Book now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="box_list home">
                                                <div class="wrapper">
                                                    <small>Psicologist</small>
                                                    <h3>Dr. Watamaniuk</h3>
                                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo
                                                        nobis persecuti cuodo....</p>
                                                    <span class="rating"><i class="icon_star voted"></i><i
                                                            class="icon_star voted"></i><i
                                                            class="icon_star voted"></i><i class="icon_star"></i><i
                                                            class="icon_star"></i> <small>(145)</small></span>

                                                    <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Badge Level" class="badge_list_1"><img
                                                            src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}"
                                                            width="15" height="15" alt=""></a>
                                                </div>

                                                <ul>
                                                    <li><i class="icon-eye-7"></i> 854 Views</li>
                                                    <li><a href="detail-page.html">Book now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="box_list home">

                                                <div class="wrapper">
                                                    <small>Psicologist</small>
                                                    <h3>Dr. Watamaniuk</h3>
                                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo
                                                        nobis persecuti cuodo....</p>
                                                    <span class="rating"><i class="icon_star voted"></i><i
                                                            class="icon_star voted"></i><i
                                                            class="icon_star voted"></i><i class="icon_star"></i><i
                                                            class="icon_star"></i> <small>(145)</small></span>

                                                    <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Badge Level" class="badge_list_1"><img
                                                            src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}"
                                                            width="15" height="15" alt=""></a>
                                                </div>

                                                <ul>
                                                    <li><i class="icon-eye-7"></i> 854 Views</li>
                                                    <li><a href="detail-page.html">Book now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                            tabindex="0">
                            <h2 class="text-uppercase">A root canal involves the following steps:</h2>
                            <ul class="list-group gap-2 list-group-numbered">
                                <li class="list-group-item">Initially, you have to undergo an x-ray so that your doctor
                                    can examine and locate the position of your infected tooth. After it has been
                                    located, the dentist will administer local anesthesia for numbing the area around
                                    that particular tooth.</li>
                                <li class="list-group-item">The doctor then places a rubber sheet around the affected
                                    tooth to ensure that the area is dry.</li>
                                <li class="list-group-item">A hole is drilled in your tooth to remove the debris and the
                                    nerve tissues that have decayed. Suitable files are used to scrape away the decayed
                                    portion in the process. Sodium hypochlorite or water is periodically used for
                                    flushing away the debris.</li>
                                <li class="list-group-item">Once the tooth has been thoroughly cleaned, the doctor seals
                                    it. In case there is an infection, your doctor may apply some medicine to cure it
                                    before sealing the tooth.</li>
                                <li class="list-group-item">If the treatment remains incomplete, the exterior hole of
                                    your tooth is given a temporary filling to keep away the food and saliva. The
                                    permanent filling is done in the following appointment.</li>
                                <li class="list-group-item">The permanent filling is done with a material called
                                    gutta-percha (a tough and rigid substance from the latex of some specific trees).
                                </li>
                                <li class="list-group-item">The final step is the restoration of your tooth. In this
                                    process, a crown is placed on the teeth for protection and safeguarding it from
                                    breaking. The crown also makes sure that the affected tooth regains its
                                    full functionality.</li>

                            </ul>

                        </div>


                        <div class="tab-pane fade" id="nav-Feedback" role="tabpanel" aria-labelledby="nav-Feedback-tab"
                            tabindex="0">
                            <h2 class="text-uppercase mb-2">Who is eligible for root canal treatment? (When is the
                                treatment done?)
                            </h2>
                            <p>You may require a root canal if you suffer from the following conditions:
                            </p>

                            <ul class="list-group gap-2 list-group-flush list-group-numbered">
                                <li class="list-group-item">Acute pain in the teeth when you are chewing food or if you
                                    are putting pressure in that area
                                </li>
                                <li class="list-group-item">Sensitivity when you are consuming any food either hot or
                                    cold. Often, the feeling lingers long after you have eaten such foods.
                                </li>
                                <li class="list-group-item">Bump on your tooth gums near the area where it is paining
                                </li>
                                <li class="list-group-item">Darkening of your tooth
                                </li>
                                <li class="list-group-item">Swelling or tenderness in the gums</li>
                            </ul>

                            <div class="my-3">
                                <h3>Who is not eligible for the treatment?</h3>
                                <p>A person is not eligible for undergoing a root canal if he/she is suffering from:</p>
                                <ul class="list-group gap-2 list-group-flush list-group-numbered">
                                    <li class="list-group-item">Hypertension
                                    </li>
                                    <li class="list-group-item">Diabetes</li>
                                    <li class="list-group-item">Infections or fever
                                    </li>
                                    <li class="list-group-item">Osteoporosis (the condition wherein the bones become
                                        brittle and weak)
                                    </li>
                                    <li class="list-group-item">Autoimmune diseases
                                    </li>
                                    <li class="list-group-item">If he/ she is taking blood thinning medications. In this
                                        case, your dentist can advise you to stop taking blood thinners for some days
                                        before the treatment commences.</li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <img class="w-100" src="{{ asset('public/assets/img/ads-2.jpg') }}"
                                        alt="advertisement">
                                </div>
                            </div>


                        </div>


                        <div class="tab-pane fade" id="side-effects" role="tabpanel" aria-labelledby="nav-side-effects"
                            tabindex="0">
                            <h2>Are there any side effects after root canal treatment?</h2>
                            <p>The possible side effects of a root canal procedure can be the following:</p>
                            <ul class="list-group gap-2 list-group-flush list-group-numbered">
                                <li class="list-group-item">You may experience a dull pain after the procedure. It
                                    generally does not last for more than a week. In case any bacteria remain, the
                                    infection can begin once again. So it is better to visit your doctor if you
                                    experience a recurring pain.
                                </li>
                                <li class="list-group-item">In some cases, there is a formation of a crack at the root
                                    of your treated tooth, which can go unnoticed by your doctor. The crack exposes the
                                    area to bacterial infection.
                                </li>
                                <li class="list-group-item">If the crown comes loose, your treated tooth will get
                                    exposed. The seal that has been made will erode which can bring back the infection.
                                    You must get your dislodged crown fixed immediately.
                                </li>
                                <li class="list-group-item">If the fillers were of defective material, it will
                                    eventually erode, thus leading to bacterial infection.</li>
                            </ul>

                            <div class="row mt-3">
                                <div class="col-4">
                                    <div class="box_list home">


                                        <div class="wrapper">
                                            <small>Psicologist</small>
                                            <h3>Dr. Watamaniuk</h3>
                                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo
                                                nobis persecuti cuodo....</p>
                                            <span class="rating"><i class="icon_star voted"></i><i
                                                    class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                    class="icon_star"></i><i class="icon_star"></i>
                                                <small>(145)</small></span>

                                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Badge Level" class="badge_list_1"><img
                                                    src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}"
                                                    width="15" height="15" alt=""></a>
                                        </div>

                                        <ul>
                                            <li><i class="icon-eye-7"></i> 854 Views</li>
                                            <li><a href="detail-page.html">Book now</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="box_list home">
                                        <div class="wrapper">
                                            <small>Psicologist</small>
                                            <h3>Dr. Watamaniuk</h3>
                                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo
                                                nobis persecuti cuodo....</p>
                                            <span class="rating"><i class="icon_star voted"></i><i
                                                    class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                    class="icon_star"></i><i class="icon_star"></i>
                                                <small>(145)</small></span>

                                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Badge Level" class="badge_list_1"><img
                                                    src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}"
                                                    width="15" height="15" alt=""></a>
                                        </div>

                                        <ul>
                                            <li><i class="icon-eye-7"></i> 854 Views</li>
                                            <li><a href="detail-page.html">Book now</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="box_list home">

                                        <div class="wrapper">
                                            <small>Psicologist</small>
                                            <h3>Dr. Watamaniuk</h3>
                                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo
                                                nobis persecuti cuodo....</p>
                                            <span class="rating"><i class="icon_star voted"></i><i
                                                    class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                    class="icon_star"></i><i class="icon_star"></i>
                                                <small>(145)</small></span>

                                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Badge Level" class="badge_list_1"><img
                                                    src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}"
                                                    width="15" height="15" alt=""></a>
                                        </div>

                                        <ul>
                                            <li><i class="icon-eye-7"></i> 854 Views</li>
                                            <li><a href="detail-page.html">Book now</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>



                        </div>

                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                            tabindex="0">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            What to eat after teeth scaling?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Exercitationem, nam, dolorum sequi veritatis nihil beatae esse vitae,
                                            fugiat ipsa quasi soluta magnam accusantium nemo debitis nostrum ullam. Vero
                                            quasi neque quisquam velit sed quos quam, reiciendis, totam quae aut soluta
                                            reprehenderit nam, perspiciatis deleniti? Nihil aspernatur quae explicabo,
                                            ipsam dicta laudantium consequatur dolores est doloribus delectus, ut
                                            labore, atque a.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Is scaling good for teeth?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Itaque voluptatibus facere asperiores accusamus! Provident repellendus
                                            velit natus sunt eveniet officiis et! Sed dolore reiciendis, dicta
                                            asperiores hic doloribus doloremque corporis laborum maxime officiis
                                            voluptatum natus maiores distinctio labore adipisci velit?</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Is scaling of teeth painful?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Itaque asperiores magnam illum. Qui culpa veritatis adipisci dicta
                                            nemo repellendus voluptates natus eos, aliquam dolorum maxime voluptas,
                                            tempore, neque id ratione saepe voluptatum possimus nihil velit quaerat
                                            totam nostrum error est optio! Beatae cum odio nihil hic harum illum
                                            recusandae minima.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- docotor section start -->

    <section class="bg-white py-5">
        <div class="container">
            <h1 class="text-uppercase text-center mb-4">Docotors</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="box_list home">
                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"
                            class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg"
                                    class="img-fluid" alt=""></a>
                            <div class="preview"><span>Read more</span></div>
                        </figure>

                        <div class="wrapper">
                            <small>Psicologist</small>
                            <h3>Dr. Watamaniuk</h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti
                                cuodo....</p>
                            <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                    class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                <small>(145)</small></span>

                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level"
                                class="badge_list_1"><img
                                    src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}" width="15"
                                    height="15" alt=""></a>
                        </div>

                        <ul>
                            <li>
                                <form>
                                    <div class="mb-3 form-check align-items-center">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Compare Doctor</label>
                                    </div>
                                </form>
                            </li>
                            <li><a href="detail-page.html">No Booking Fee</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box_list home">
                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"
                            class="wish_bt"></a>
                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg"
                                    class="img-fluid" alt=""></a>
                            <div class="preview"><span>Read more</span></div>
                        </figure>

                        <div class="wrapper">
                            <small>Psicologist</small>
                            <h3>Dr. Mantooth</h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti
                                cuodo....</p>
                            <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                    class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                <small>(145)</small></span>

                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level"
                                class="badge_list_1"><img
                                    src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}" width="15"
                                    height="15" alt=""></a>
                        </div>

                        <ul>
                            <!-- <li><i class="icon-eye-7"></i> 854 Views</li> -->
                            <li>
                                <form>
                                    <div class="mb-3 form-check align-items-center">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Compare Doctor</label>
                                    </div>
                                </form>
                            </li>
                            <li><a href="detail-page.html">No Booking Fee</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="box_list home">
                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"
                            class="wish_bt"></a>

                        <figure>
                            <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg"
                                    class="img-fluid" alt=""></a>
                            <div class="preview"><span>Read more</span></div>
                        </figure>

                        <div class="wrapper">
                            <small>Psicologist</small>
                            <h3>Dr. Pullman</h3>
                            <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti
                                cuodo....</p>
                            <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                    class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
                                <small>(145)</small></span>

                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level"
                                class="badge_list_1"><img
                                    src="{{ asset('public/assets/apnadental/img/badges/badge_2.svg') }}" width="15"
                                    height="15" alt=""></a>
                        </div>

                        <ul>
                            <!-- <li><i class="icon-eye-7"></i> 854 Views</li> -->
                            <li>
                                <form>
                                    <div class="mb-3 form-check align-items-center">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Compare Doctor</label>
                                    </div>
                                </form>
                            </li>
                            <li><a href="detail-page.html">No Booking Fee</a></li>
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
                                <a href="#" class="me-2"><a
                                        href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                        target="_blank">Directions</a></a>
                                
                            </div>
                        </div>
                        <div class="card_body">
                            <div class="row mb-2 g-1">
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum, nam.
                                    </p>
                                </div>
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
                                <div class="col-12">
                                    <span class="rating"><i class="icon_star voted"></i><i
                                            class="icon_star voted"></i><i class="icon_star voted"></i><i
                                            class="icon_star"></i><i class="icon_star"></i>
                                        <small>(145)</small></span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-4 flex-wrap">
                                <form>
                                    <div class="form-check align-items-center">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Compare Doctor</label>
                                    </div>
                                </form>
                                <a class="btn_1 " href="#">Book Now</a>
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
                                <a href="#" class="me-2"><a
                                        href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                        target="_blank">Directions</a></a>
                                
                            </div>
                        </div>
                        <div class="card_body">
                            <div class="row mb-2 g-1">
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum, nam.
                                    </p>
                                </div>
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
                                <div class="col-12">
                                    <span class="rating"><i class="icon_star voted"></i><i
                                            class="icon_star voted"></i><i class="icon_star voted"></i><i
                                            class="icon_star"></i><i class="icon_star"></i>
                                        <small>(145)</small></span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-4 flex-wrap">
                                <form>
                                    <div class="form-check align-items-center">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Compare Doctor</label>
                                    </div>
                                </form>
                                <a class="btn_1 " href="#">Book Now</a>
                            </div>
                        </div>

                    </div>
                </div><div class="col-12 col-md-6 col-lg-4">
                    <div class="card p-3 ">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <h3 class="h5 txt-primary">Max Lab</h3>
                                <h4 class="h6 txt-primary">Sector-1</h4>
                            </div>
                            <div>
                                <a href="#" class="me-2"><a
                                        href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                        target="_blank">Directions</a></a>
                                
                            </div>
                        </div>
                        <div class="card_body">
                            <div class="row mb-2 g-1">
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum, nam.
                                    </p>
                                </div>
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
                                <div class="col-12">
                                    <span class="rating"><i class="icon_star voted"></i><i
                                            class="icon_star voted"></i><i class="icon_star voted"></i><i
                                            class="icon_star"></i><i class="icon_star"></i>
                                        <small>(145)</small></span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-4 flex-wrap">
                                <form>
                                    <div class="form-check align-items-center">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Compare Doctor</label>
                                    </div>
                                </form>
                                <a class="btn_1 " href="#">Book Now</a>
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