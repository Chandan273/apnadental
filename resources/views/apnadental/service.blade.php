@extends('apnadental.master')
@section("content")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<main>
    <div class="bg-white action-filter py-3">
        <div class="container">
            <div class="row g-2 justify-content-between">
                <div class="col-12 col-sm-auto action-buttons">
                    <div class="d-flex gap-2 flex-wrap">
                        <button class="btn btn-outline-primary">About</button>
                        <button class="btn btn-outline-primary">Health feed</button>
                        <button class="btn btn-outline-primary">Find Doctor</button>
                    </div>

                </div>
                <div class="col-12 col-sm-auto">
                    <form class="d-flex flex-nowrap gap-2">
                        <input type="text" class="form-control" id="search" placeholder="search">
                        <button type="submit" class="btn btn-primary">Search</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
    <!-- /breadcrumb end -->
    <div class="container-fluid container-lg">
        <div class="row g-3 pt-3">
            <div class="col-12 col-lg-9">
                <!-- contant  section -->

                <section class="content-section bg-white py-5">
                    <div class="container">
                        <div class="row align-items-center g-3">
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="image-wrraper">
                                    <img src="{{ asset('public/assets/img/doctor-lady.jpg') }}" alt="doctor-lady.jpg"
                                        class="w-100">
                                </div>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">
                                <h2 class="text-uppercase">Root Canal Treatment - Procedure, Cost And Side Effects</h2>
                                <p>Root canal is a term which is used for describing your natural cavity that lies
                                    within the center
                                    of your tooth. The nerves of the tooth lie in the root canal. When the nerve tissue
                                    or the pulp
                                    of your tooth gets damaged, it will break down, resulting in multiplication of
                                    bacteria in
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

                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h2 class="text-uppercase">what is root canal treatment?</h2>
                                        <p>The presence of bacteria and the decayed debris may cause a tooth infection.
                                            It
                                            can also cause a swelling that sometimes spreads to the other parts of the
                                            neck,
                                            face or head. If you are experiencing pain, tooth discoloration, swelling or
                                            a
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
                                            later who may place a crown on the affected tooth for protection and restore
                                            it
                                            to function perfectly. A root canal treatment may comprise of one to three
                                            visits to the dentist, depending on the severity of the condition.</p>

                                        <div>
                                            <h3>Doctor for Root Canal Treatment in Delhi</h3>
                                            <div class="row slider-clinic">
                                                <div class="col-12 col-md-4">
                                                    <div class="box_list home">
                                                        <div class="wrapper">
                                                            <small>Psicologist</small>
                                                            <h3>Dr. Watamaniuk</h3>
                                                            <p>Id placerat tacimates definitionem sea, prima quidam vim
                                                                no.
                                                                Duo
                                                                nobis persecuti cuodo....</p>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="rating"><i class="icon_star voted"></i>
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star"></i>
                                                                    <i class="icon_star"></i>
                                                                    <small>(145)</small>
                                                                    <a href="#0" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Badge Level"
                                                                        class="badge_list_1"><img
                                                                            src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}"
                                                                            width="15" height="15" alt=""></a>
                                                                </span>
                                                                <a href="tel:+0123456789" class="btn_listing">Get a Free
                                                                    Call
                                                                    now</a>
                                                            </div>
                                                        </div>

                                                        <ul class="d-flex align-items-center justify-content-between flex-wrap">
                                                            <li>
                                                                <form>
                                                                    <div class="mb-3 form-check align-items-center">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="compareDoctor">
                                                                        <label class="form-check-label"
                                                                            for="compareDoctor">Compare
                                                                            Doctor</label>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li><a href="detail-page.html">Book now</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="box_list home">
                                                        <div class="wrapper">
                                                            <small>Psicologist</small>
                                                            <h3>Dr. Watamaniuk</h3>
                                                            <p>Id placerat tacimates definitionem sea, prima quidam vim
                                                                no.
                                                                Duo
                                                                nobis persecuti cuodo....</p>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="rating"><i class="icon_star voted"></i>
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star"></i>
                                                                    <i class="icon_star"></i>
                                                                    <small>(145)</small>
                                                                    <a href="#0" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Badge Level"
                                                                        class="badge_list_1"><img
                                                                            src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}"
                                                                            width="15" height="15" alt=""></a>
                                                                </span>
                                                                <a href="tel:+0123456789" class="btn_listing">Get a Free
                                                                    Call
                                                                    now</a>
                                                            </div>
                                                        </div>

                                                        <ul class="d-flex align-items-center justify-content-between flex-wrap">
                                                            <li>
                                                                <form>
                                                                    <div class="mb-3 form-check align-items-center">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="compareDoctor1">
                                                                        <label class="form-check-label"
                                                                            for="compareDoctor1">Compare
                                                                            Doctor</label>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li><a href="detail-page.html">Book now</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="box_list home">

                                                        <div class="wrapper">
                                                            <small>Psicologist</small>
                                                            <h3>Dr. Watamaniuk</h3>
                                                            <p>Id placerat tacimates definitionem sea, prima quidam vim
                                                                no.
                                                                Duo
                                                                nobis persecuti cuodo....</p>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="rating"><i class="icon_star voted"></i>
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star"></i>
                                                                    <i class="icon_star"></i>
                                                                    <small>(145)</small>
                                                                    <a href="#0" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Badge Level"
                                                                        class="badge_list_1"><img
                                                                            src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}"
                                                                            width="15" height="15" alt=""></a>
                                                                </span>
                                                                <a href="tel:+0123456789" class="btn_listing">Get a Free
                                                                    Call
                                                                    now</a>
                                                            </div>
                                                        </div>

                                                        <ul class="d-flex align-items-center justify-content-between flex-wrap">
                                                            <li>
                                                                <form>
                                                                    <div class="mb-3 form-check align-items-center">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="compareDoctor2">
                                                                        <label class="form-check-label"
                                                                            for="compareDoctor2">Compare
                                                                            Doctor</label>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li><a href="detail-page.html">Book now</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="text-uppercase">A root canal involves the following steps:</h2>
                                    <ul class="list-group gap-2 list-group-numbered">
                                        <li class="list-group-item">Initially, you have to undergo an x-ray so that your
                                            doctor
                                            can examine and locate the position of your infected tooth. After it has
                                            been
                                            located, the dentist will administer local anesthesia for numbing the area
                                            around
                                            that particular tooth.</li>
                                        <li class="list-group-item">The doctor then places a rubber sheet around the
                                            affected
                                            tooth to ensure that the area is dry.</li>
                                        <li class="list-group-item">A hole is drilled in your tooth to remove the debris
                                            and the
                                            nerve tissues that have decayed. Suitable files are used to scrape away the
                                            decayed
                                            portion in the process. Sodium hypochlorite or water is periodically used
                                            for
                                            flushing away the debris.</li>
                                        <li class="list-group-item">Once the tooth has been thoroughly cleaned, the
                                            doctor seals
                                            it. In case there is an infection, your doctor may apply some medicine to
                                            cure it
                                            before sealing the tooth.</li>
                                        <li class="list-group-item">If the treatment remains incomplete, the exterior
                                            hole of
                                            your tooth is given a temporary filling to keep away the food and saliva.
                                            The
                                            permanent filling is done in the following appointment.</li>
                                        <li class="list-group-item">The permanent filling is done with a material called
                                            gutta-percha (a tough and rigid substance from the latex of some
                                            specific trees).
                                        </li>
                                        <li class="list-group-item">The final step is the restoration of your tooth. In
                                            this
                                            process, a crown is placed on the teeth for protection and safeguarding it
                                            from
                                            breaking. The crown also makes sure that the affected tooth regains its
                                            full functionality.</li>

                                    </ul>

                                </div>
                                <div class="row my-4">
                                    <div class="col-12">
                                        <img class="w-100" src="{{ asset('public/assets/img/ads-2.jpg') }}"
                                            alt="advertisement">
                                    </div>
                                </div>

                                <div>
                                    <h2 class="text-uppercase mb-2">Who is eligible for root canal treatment? (When is
                                        the
                                        treatment done?)
                                    </h2>
                                    <p>You may require a root canal if you suffer from the following conditions:
                                    </p>

                                    <ul class="list-group gap-2 list-group-flush list-group-numbered">
                                        <li class="list-group-item">Acute pain in the teeth when you are chewing food or
                                            if you
                                            are putting pressure in that area
                                        </li>
                                        <li class="list-group-item">Sensitivity when you are consuming any food either
                                            hot or
                                            cold. Often, the feeling lingers long after you have eaten such foods.
                                        </li>
                                        <li class="list-group-item">Bump on your tooth gums near the area where it is
                                            paining
                                        </li>
                                        <li class="list-group-item">Darkening of your tooth
                                        </li>
                                        <li class="list-group-item">Swelling or tenderness in the gums</li>
                                    </ul>

                                    <div class="my-3">
                                        <h3>Who is not eligible for the treatment?</h3>
                                        <p>A person is not eligible for undergoing a root canal if he/she is suffering
                                            from:</p>
                                        <ul class="list-group gap-2 list-group-flush list-group-numbered">
                                            <li class="list-group-item">Hypertension</li>
                                            <li class="list-group-item">Diabetes</li>
                                            <li class="list-group-item">Infections or fever</li>
                                            <li class="list-group-item">Osteoporosis (the condition wherein the bones
                                                become brittle and weak)</li>
                                            <li class="list-group-item">Autoimmune diseases</li>
                                            <li class="list-group-item">If he/ she is taking blood thinning medications.
                                                In this
                                                case, your dentist can advise you to stop taking blood thinners for some
                                                days
                                                before the treatment commences.</li>
                                        </ul>
                                    </div>

                                    <section class="py-5">
                                        <div>
                                            <h2 class="text-uppercase text-center mb-4">Clinics</h2>
                                            <div class="row gy-3 slider-clinic">
                                                <div class="col-12 col-lg-6 col-xl-4">
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
                                                                        Lorem ipsum dolor, sit amet consectetur
                                                                        adipisicing elit.
                                                                        Nostrum, nam.
                                                                    </p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="icon-location-1 h5 txt-primary"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h3 class="h6">C-1 Ground floor, Govt School,
                                                                        Noida-201301 </h3>
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
                                                                    <span class="rating"><i
                                                                            class="icon_star voted"></i><i
                                                                            class="icon_star voted"></i><i
                                                                            class="icon_star voted"></i><i
                                                                            class="icon_star"></i><i
                                                                            class="icon_star"></i>
                                                                        <small>(145)</small></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between mt-4 flex-wrap">
                                                                <form>
                                                                    <div class="form-check align-items-center">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="compareDoctor3">
                                                                        <label class="form-check-label"
                                                                            for="compareDoctor3">Compare
                                                                            Doctor</label>
                                                                    </div>
                                                                </form>
                                                                <a class="btn_1 " href="#">Book Now</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-6 col-xl-4">
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
                                                                        Lorem ipsum dolor, sit amet consectetur
                                                                        adipisicing elit.
                                                                        Nostrum, nam.
                                                                    </p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="icon-location-1 h5 txt-primary"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h3 class="h6">C-1 Ground floor, Govt School,
                                                                        Noida-201301 </h3>
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
                                                                    <span class="rating"><i
                                                                            class="icon_star voted"></i><i
                                                                            class="icon_star voted"></i><i
                                                                            class="icon_star voted"></i><i
                                                                            class="icon_star"></i><i
                                                                            class="icon_star"></i>
                                                                        <small>(145)</small></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between mt-4 flex-wrap">
                                                                <form>
                                                                    <div class="form-check align-items-center">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="compareDoctor4">
                                                                        <label class="form-check-label"
                                                                            for="compareDoctor4">Compare
                                                                            Doctor</label>
                                                                    </div>
                                                                </form>
                                                                <a class="btn_1 " href="#">Book Now</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-xl-4">
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
                                                                        Lorem ipsum dolor, sit amet consectetur
                                                                        adipisicing elit.
                                                                        Nostrum, nam.
                                                                    </p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="icon-location-1 h5 txt-primary"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h3 class="h6">C-1 Ground floor, Govt School,
                                                                        Noida-201301 </h3>
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
                                                                    <span class="rating"><i
                                                                            class="icon_star voted"></i><i
                                                                            class="icon_star voted"></i><i
                                                                            class="icon_star voted"></i><i
                                                                            class="icon_star"></i><i
                                                                            class="icon_star"></i>
                                                                        <small>(145)</small></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between mt-4 flex-wrap">
                                                                <form>
                                                                    <div class="form-check align-items-center">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            id="compareDoctor5">
                                                                        <label class="form-check-label"
                                                                            for="compareDoctor5">Compare
                                                                            Doctor</label>
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

                                </div>


                                <div>
                                    <h2>Are there any side effects after root canal treatment?</h2>
                                    <p>The possible side effects of a root canal procedure can be the following:</p>
                                    <ul class="list-group gap-2 list-group-flush list-group-numbered">
                                        <li class="list-group-item">You may experience a dull pain after the procedure.
                                            It
                                            generally does not last for more than a week. In case any bacteria remain,
                                            the
                                            infection can begin once again. So it is better to visit your doctor if you
                                            experience a recurring pain.
                                        </li>
                                        <li class="list-group-item">In some cases, there is a formation of a crack at
                                            the root
                                            of your treated tooth, which can go unnoticed by your doctor. The crack
                                            exposes the
                                            area to bacterial infection.
                                        </li>
                                        <li class="list-group-item">If the crown comes loose, your treated tooth will
                                            get
                                            exposed. The seal that has been made will erode which can bring back the
                                            infection.
                                            You must get your dislodged crown fixed immediately.
                                        </li>
                                        <li class="list-group-item">If the fillers were of defective material, it will
                                            eventually erode, thus leading to bacterial infection.</li>
                                    </ul>

                                    <div class="row mt-3">
                                        <div class="col-12 col-lg-6 col-xl-4">
                                            <div class="box_list home">


                                                <div class="wrapper">
                                                    <small>Psicologist</small>
                                                    <h3>Dr. Watamaniuk</h3>
                                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo
                                                        nobis persecuti cuodo....</p>
                                                    <div class="d-flex justify-content-between">
                                                        <span class="rating"><i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <small>(145)</small>
                                                            <a href="#0" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Badge Level"
                                                                class="badge_list_1"><img
                                                                    src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}"
                                                                    width="15" height="15" alt=""></a>
                                                        </span>
                                                        <a href="tel:+0123456789" class="btn_listing">Get a Free Call
                                                            now</a>
                                                    </div>
                                                </div>

                                                <ul class="d-flex justify-content-between flex-wrap">
                                                    <li>
                                                        <form>
                                                            <div class="mb-3 form-check align-items-center">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="compareDoctor6">
                                                                <label class="form-check-label"
                                                                    for="compareDoctor6">Compare
                                                                    Doctor</label>
                                                            </div>
                                                        </form>
                                                    </li>
                                                    <li><a href="detail-page.html">Book now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-xl-4">
                                            <div class="box_list home">
                                                <div class="wrapper">
                                                    <small>Psicologist</small>
                                                    <h3>Dr. Watamaniuk</h3>
                                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo
                                                        nobis persecuti cuodo....</p>
                                                    <div class="d-flex justify-content-between">
                                                        <span class="rating"><i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <small>(145)</small>
                                                            <a href="#0" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Badge Level"
                                                                class="badge_list_1"><img
                                                                    src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}"
                                                                    width="15" height="15" alt=""></a>
                                                        </span>
                                                        <a href="tel:+0123456789" class="btn_listing">Get a Free Call
                                                            now</a>
                                                    </div>
                                                </div>

                                                <ul class="d-flex justify-content-between flex-wrap">
                                                    <li>
                                                        <form>
                                                            <div class="mb-3 form-check align-items-center">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="compareDoctor7">
                                                                <label class="form-check-label"
                                                                    for="compareDoctor7">Compare
                                                                    Doctor</label>
                                                            </div>
                                                        </form>
                                                    </li>
                                                    <li><a href="detail-page.html">Book now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-xl-4">
                                            <div class="box_list home">

                                                <div class="wrapper">
                                                    <small>Psicologist</small>
                                                    <h3>Dr. Watamaniuk</h3>
                                                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo
                                                        nobis persecuti cuodo....</p>
                                                    <div class="d-flex justify-content-between">
                                                        <span class="rating"><i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <small>(145)</small>
                                                            <a href="#0" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Badge Level"
                                                                class="badge_list_1"><img
                                                                    src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}"
                                                                    width="15" height="15" alt=""></a>
                                                        </span>
                                                        <a href="tel:+0123456789" class="btn_listing">Get a Free Call
                                                            now</a>
                                                    </div>
                                                </div>

                                                <ul class="d-flex justify-content-between flex-wrap">
                                                    <li>
                                                        <form>
                                                            <div class="mb-3 form-check align-items-center">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="compareDoctor8">
                                                                <label class="form-check-label"
                                                                    for="compareDoctor8">Compare
                                                                    Doctor</label>
                                                            </div>
                                                        </form>
                                                    </li>
                                                    <li><a href="detail-page.html">Book now</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur
                                                adipisicing
                                                elit. Exercitationem, nam, dolorum sequi veritatis nihil beatae esse
                                                vitae,
                                                fugiat ipsa quasi soluta magnam accusantium nemo debitis nostrum ullam.
                                                Vero
                                                quasi neque quisquam velit sed quos quam, reiciendis, totam quae aut
                                                soluta
                                                reprehenderit nam, perspiciatis deleniti? Nihil aspernatur quae
                                                explicabo,
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
                                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur
                                                adipisicing
                                                elit. Itaque voluptatibus facere asperiores accusamus! Provident
                                                repellendus
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
                                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur
                                                adipisicing
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
                </section>



                <!-- docotor section start -->

                <section class="bg-white py-5">
                    <div class="container">
                        <h1 class="text-uppercase text-center mb-4">Docotors</h1>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="box_list home">
                                    <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Add to wishlist" class="wish_bt"></a>
                                    <figure>
                                        <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg"
                                                class="img-fluid" alt=""></a>
                                        <div class="preview"><span>Read more</span></div>
                                    </figure>

                                    <div class="wrapper">
                                        <small>Psicologist</small>
                                        <h3>Dr. Watamaniuk</h3>
                                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis
                                            persecuti
                                            cuodo....</p>
                                        <div class="d-flex justify-content-between">
                                            <span class="rating"><i class="icon_star voted"></i>
                                                <i class="icon_star voted"></i>
                                                <i class="icon_star voted"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <small>(145)</small>
                                                <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Badge Level" class="badge_list_1"><img
                                                        src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}"
                                                        width="15" height="15" alt=""></a>
                                            </span>
                                            <a href="tel:+0123456789" class="btn_listing">Get a Free Call now</a>
                                        </div>
                                    </div>

                                    <ul class="d-flex justify-content-between flex-wrap">
                                        <li>
                                            <form>
                                                <div class="mb-3 form-check align-items-center">
                                                    <input type="checkbox" class="form-check-input" id="compareDoctor9">
                                                    <label class="form-check-label" for="compareDoctor9">Compare
                                                        Doctor</label>
                                                </div>
                                            </form>
                                        </li>
                                        <li><a href="detail-page.html">No Booking Fee</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="box_list home">
                                    <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Add to wishlist" class="wish_bt"></a>
                                    <figure>
                                        <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg"
                                                class="img-fluid" alt=""></a>
                                        <div class="preview"><span>Read more</span></div>
                                    </figure>

                                    <div class="wrapper">
                                        <small>Psicologist</small>
                                        <h3>Dr. Mantooth</h3>
                                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis
                                            persecuti
                                            cuodo....</p>
                                        <div class="d-flex justify-content-between">
                                            <span class="rating"><i class="icon_star voted"></i>
                                                <i class="icon_star voted"></i>
                                                <i class="icon_star voted"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <small>(145)</small>
                                                <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Badge Level" class="badge_list_1"><img
                                                        src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}"
                                                        width="15" height="15" alt=""></a>
                                            </span>
                                            <a href="tel:+0123456789" class="btn_listing">Get a Free Call now</a>
                                        </div>
                                    </div>

                                    <ul class="d-flex justify-content-between flex-wrap">
                                        <li>
                                            <form>
                                                <div class="mb-3 form-check align-items-center">
                                                    <input type="checkbox" class="form-check-input" id="compareDoctor10">
                                                    <label class="form-check-label" for="compareDoctor10">Compare
                                                        Doctor</label>
                                                </div>
                                            </form>
                                        </li>
                                        <li><a href="detail-page.html">No Booking Fee</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="box_list home">
                                    <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Add to wishlist" class="wish_bt"></a>

                                    <figure>
                                        <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg"
                                                class="img-fluid" alt=""></a>
                                        <div class="preview"><span>Read more</span></div>
                                    </figure>

                                    <div class="wrapper">
                                        <small>Psicologist</small>
                                        <h3>Dr. Pullman</h3>
                                        <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis
                                            persecuti
                                            cuodo....</p>

                                        <div class="d-flex justify-content-between">
                                            <span class="rating"><i class="icon_star voted"></i>
                                                <i class="icon_star voted"></i>
                                                <i class="icon_star voted"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <small>(145)</small>
                                                <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Badge Level" class="badge_list_1"><img
                                                        src="{{ asset('public/assets/apnadental/img/badges/badge_2.svg') }}"
                                                        width="15" height="15" alt=""></a>
                                            </span>
                                            <a href="tel:+0123456789" class="btn_listing">Get a Free Call now</a>
                                        </div>
                                    </div>

                                    <ul class="d-flex justify-content-between flex-wrap">
                                        <li>
                                            <form>
                                                <div class="mb-3 form-check align-items-center">
                                                    <input type="checkbox" class="form-check-input" id="compareDoctor11">
                                                    <label class="form-check-label" for="compareDoctor11">Compare
                                                        Doctor</label>
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
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum,
                                                    nam.
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
                                                    <input type="checkbox" class="form-check-input" id="12">
                                                    <label class="form-check-label" for="compareDoctor12">Compare
                                                        Doctor</label>
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
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum,
                                                    nam.
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
                                                    <input type="checkbox" class="form-check-input" id="compareDoctor13">
                                                    <label class="form-check-label" for="compareDoctor13">Compare
                                                        Doctor</label>
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
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum,
                                                    nam.
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
                                                    <input type="checkbox" class="form-check-input" id="compareDoctor14">
                                                    <label class="form-check-label" for="compareDoctor14">Compare
                                                        Doctor</label>
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

                <!-- Blog section start  -->
                <section class="py-5 blogs-section">
                    <h2 class="text-uppercase text-center mb-2 mb-sm-5">latest blogs</h2>
                    <div class="container-fluid container-lg">
                        <div class="row g-1">
                            <div class="col-12 col-sm-6">
                                <a href="" class=" blog-wraper">
                                    <img src="{{ asset('public/assets/img/blog-big.jpg') }}" alt="blog image">
                                    <div class="blog-content-wrraper">
                                        <span class="post-category small text-white">Fashion</span>
                                        <h3 class="text-white">
                                            WordPress News Magazine Charts the Most Chic and Fashionable Women of New
                                            York City
                                        </h3>
                                        <div class="td-editor-date">
                                            <span class="post-author-name text-white">Armin Vans</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="row g-1">
                                    <div class="col-12">
                                        <a href="" class=" blog-wraper">
                                            <img src="{{ asset('public/assets/img/blog-medium.jpg') }}"
                                                alt="blog image">
                                            <div class="blog-content-wrraper">
                                                <span class="post-category small text-white">Gadgets</span>
                                                <h3 class="text-white fs-5">
                                                    Game Changing Virtual Reality Console Hits the Market
                                                </h3>

                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <a href="" class=" blog-wraper">
                                            <img src="{{ asset('public/assets/img/blog-small1.jpg') }}"
                                                alt="blog image">
                                            <div class="blog-content-wrraper">
                                                <span class="post-category small text-white">Travel</span>
                                                <h3 class="text-white fs-6">
                                                    Discover the Most Magical Sunset in Santorini
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <a href="" class=" blog-wraper">
                                            <img src="{{ asset('public/assets/img/blog-small2.jpg') }}"
                                                alt="blog image">
                                            <div class="blog-content-wrraper">
                                                <span
                                                    class="post-category small text-white badge bg-dark rounded-0 fw-normal">Reviews</span>
                                                <h3 class="text-white fs-6">
                                                    Computer Filters Noise to Make You a Better Listener
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-12 col-lg-3">
                <aside>
                    <div class="widget">
                        <form class="mb-3">
                            <div class="input-group">
                                <input type="text" name="search" id="search" class="form-control"
                                    placeholder="Search...">
                                <button type="submit" id="submit" class="btn_1"> Search</button>
                            </div>

                        </form>
                    </div>


                    <div class="ads">
                        <div class="row">
                            <div class="col-12 py-3">
                                <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/10/newspaper-rec300d.jpg"
                                    alt="right side ads" width="100%">
                            </div>
                        </div>
                    </div>

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
                                    <h3 class="fs-6"><a href="#" title="">Outdoor Kitchen Decorating: Furnish and
                                            Accessorize...</a></h3>
                                    <small>10.08.2016</small>
                                </div>
                            </li>
                            <li class="d-flex gap-2 mb-3">
                                <a href="#0">
                                    <img src="http://via.placeholder.com/160x160.jpg" alt="" width="100px">
                                </a>
                                <div>
                                    <h3 class="fs-6"><a href="#" title="">Interior Design Tips: Decorating to
                                            Celebrate...</a></h3>
                                    <small>09.08.2016</small>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- /widget -->

                    <div class="widget">
                        <div class="widget-title">
                            <h4>Blog Categories</h4>
                        </div>
                        <ul class="cats">
                            <li><a href="#">Treatments <span>(12)</span></a></li>
                            <li><a href="#">News <span>(21)</span></a></li>
                            <li><a href="#">Events <span>(44)</span></a></li>
                            <li><a href="#">New treatments <span>(09)</span></a></li>
                            <li><a href="#">Focus in the lab <span>(31)</span></a></li>
                        </ul>
                    </div>
                    <!-- /widget -->

                    <div class="widget">
                        <div class="widget-title">
                            <h4>Popular Tags</h4>
                        </div>
                        <div class="tags">
                            <a href="#">Medicine</a>
                            <a href="#">Treatments</a>
                            <a href="#">Events</a>
                            <a href="#">Specialist</a>
                            <a href="#">Pills</a>
                            <a href="#">Cancer</a>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</main>
<!-- /main -->
<script>
    $(".slider-clinic").slick({
        slidesToShow: 2,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 567,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],

    });
</script>

@endsection("content")