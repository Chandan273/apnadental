@extends('apnadental.master')
@section("content")

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
                        <button type="submit" class="btn btn_pink">Search</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li>{{ request('service') }}</li>
            </ul>
        </div>
    </div>
    <!-- /breadcrumb end -->
    <div class="container-fluid container-lg">
        <div class="row g-3 pt-3">
            <div class="col-12 col-lg-12">
                <!-- contant section -->

                <section class="content-section bg-white py-5">
                    <div class="container">
                        <div class="row align-items-center g-3">
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="image-wrraper">
                                    <img src="{{ asset('public/'.$serviceData->image) }}" alt="{{ $serviceData->page_title }}"
                                        class="w-100">
                                </div>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9">

                                @if(!empty($serviceData->page_title))
                                    <h2 class="text-uppercase">{{$serviceData->page_title}}</h2>
                                @endif

                                @if(!empty($serviceData->description))
                                    {!! $serviceData->description !!}
                                @endif

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

                                        @if(!empty($serviceData->heading_two))
                                            <h2 class="text-uppercase">{{$serviceData->heading_two}}</h2>
                                        @endif

                                        @if(!empty($serviceData->description_two))
                                            {!! $serviceData->description_two !!}
                                        @endif

                                        <div>
                                            <h3>Doctor for Root Canal Treatment</h3>
                                            <div class="row slider-clinic autoplay_doctors">
                                            @foreach($doctors as $doctor)
                                                <div class="col-12 col-md-4">
                                                    <div class="box_list doctor-card home h-100 position-relative">
                                                        <a href="<?php echo env('APP_URL'); ?>/doctor-details/{{ $doctor->id }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"
                                                            class="wish_bt"></a>
                                                        <figure>
                                                            <a href="detail-page.html">
                                                                @if(!empty($doctor->image))
                                                                <img src="{{ $doctor->image }}" class="img-fluid" alt="{{ $doctor->company_name }}">
                                                                @else
                                                                <img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt="">
                                                                @endif
                                                            </a>
                                                            <div class="preview"><span>Read more</span></div>
                                                        </figure>

                                                        <div class="wrapper">
                                                            <small>{{ $doctor->secondary_category }}</small>
                                                            <h3>{{ $doctor->company_name }}</h3>
                                                            <p>{{ $doctor->description }}</p>
                                                            <div class="d-flex justify-content-between">
                                                                <span class="rating"><i class="icon_star voted"></i>
                                                                    @php
                                                                        $rating = $doctor->rating;
                                                                        $filledStars = floor($rating);
                                                                        $halfStar = ($rating - $filledStars) >= 0.5;
                                                                    @endphp

                                                                    @for ($i = 1; $i <= 5; $i++) @if ($i <=$filledStars) <i class="icon_star voted"></i>
                                                                        @elseif ($halfStar && $i == $filledStars + 1)
                                                                            <i class="icon_star voted half"></i>
                                                                        @else
                                                                            <i class="icon_star"></i>
                                                                        @endif
                                                                        @endfor

                                                                        <small>({{ $doctor->rating_count }})</small>
                                                                        <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            title="Badge Level" class="badge_list_1">
                                                                            <img src="{{ asset('public/assets/apnadental/img/badges/badge_1.svg') }}"
                                                                                width="15" height="15" alt="">
                                                                        </a>
                                                                </span>
                                                                <a href="tel:+{{ $doctor->phone }}" class="btn_listing">Get a Free Call now</a>
                                                            </div>
                                                        </div>

                                                        <ul class="d-flex justify-content-between flex-wrap position-absolute start-0 bottom-0 mb-0">
                                                            <li>
                                                                <form>
                                                                    <div class="form-check align-items-center">
                                                                        <input type="checkbox" class="form-check-input" id="compareDoctor9">
                                                                        <label class="form-check-label" for="compareDoctor9">Compare Doctor</label>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li><a href="javascript:void(0)"onclick="bookNow({{ $doctor->id }}, '{{ $doctor->company_name }}', '{{ $doctor->secondary_category }}', '{{ $doctor->work_timings }}')">Book
                                                                    Now</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                               
                                    @if(!empty($serviceData->heading_three))    
                                        <h2 class="text-uppercase">{{$serviceData->heading_three}}</h2>
                                    @endif

                                    @if(!empty($serviceData->description_three))
                                        {!! $serviceData->description_three !!}
                                    @endif

                                </div>
                                <div class="row my-4">
                                    <div class="col-12">
                                        <img class="w-100" src="{{ asset('public/assets/img/ads-2.jpg') }}" alt="advertisement">
                                    </div>
                                </div>

                                <div>
                                    @if(!empty($serviceData->heading_three))    
                                        <h2 class="text-uppercase mb-2">{{$serviceData->heading_three}}</h2>
                                    @endif

                                    @if(!empty($serviceData->description_three))
                                        {!! $serviceData->description_three !!}
                                    @endif

                                    <div class="my-3">
                                        @if(!empty($serviceData->heading_four))    
                                            <h2 class="text-uppercase">{{$serviceData->heading_four}}</h2>
                                        @endif

                                        @if(!empty($serviceData->description_four))
                                            {!! $serviceData->description_four !!}
                                        @endif
                                    </div>

                                    <section class="py-5">
                                        <div>
                                            <h2 class="text-uppercase text-center mb-4">Clinics</h2>
                                            <div class="row gy-3 slider-clinic">
                                                
                                            @foreach($clinics as $clinic)
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="box_list home card h-100 pt-3 pb-5 position-relative">
                                                        <div class="d-flex justify-content-between mb-3 px-3">
                                                            <div>
                                                                <h3 class="h5 txt-primary">{{ $clinic->company_name }}</h3>
                                                                <h4 class="h6 txt-primary">Sector-1</h4>
                                                            </div>
                                                            <div>
                                                                <a href="<?php echo env('APP_URL'); ?>/doctor-details/{{ $clinic->id }}" class="me-2"><a
                                                                        href="{{ $clinic->map_url }}" target="_blank">Directions</a></a>
                                                            </div>
                                                        </div>
                                                        <div class="card_body px-3">
                                                            <div class="row mb-2 g-1">
                                                                <div class="col-12">
                                                                    <p>{{ $clinic->description }}</p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="icon-location-1 h5 txt-primary"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h3 class="h6">{{ $clinic->locality }}, {{ $clinic->city }}, {{ $clinic->state }},
                                                                        {{ $clinic->zip_code }}</h3>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-2 g-1">
                                                                <div class="col-auto">
                                                                    <i class="icon-phone h5 txt-primary"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <a href="tel:+{{ $clinic->phone }}">
                                                                        <h3 class="h6">{{ $clinic->phone }}</h3>
                                                                    </a>
                                                                </div>
                                                                <div class="col-12">
                                                                    <span class="rating">
                                                                        @php
                                                                            $rating = $clinic->rating;
                                                                            $filledStars = floor($rating);
                                                                            $halfStar = ($rating - $filledStars) >= 0.5;
                                                                        @endphp

                                                                        @for ($i = 1; $i <= 5; $i++) @if ($i <=$filledStars) <i class="icon_star voted">
                                                                            </i>
                                                                            @elseif ($halfStar && $i == $filledStars + 1)
                                                                                <i class="icon_star voted half"></i>
                                                                            @else
                                                                                <i class="icon_star"></i>
                                                                            @endif
                                                                            @endfor
                                                                            <small>({{ $clinic->rating_count }})</small></span>
                                                                </div>
                                                            </div>                           
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between mt-4 flex-wrap position-absolute start-0 bottom-0 px-3 w-100 py-3">
                                                                <form>
                                                                    <div class="form-check align-items-center mb-0">
                                                                        <input type="checkbox" class="form-check-input" id="12">
                                                                        <label class="form-check-label" for="compareDoctor12">Compare Doctor</label>
                                                                    </div>
                                                                </form>
                                                                <a class="btn_1" href="javascript:void(0);" onclick="bookNow({{ $clinic->id }}, '{{ $clinic->company_name }}', '{{ $clinic->secondary_category }}', '{{ $clinic->work_timings }}')">Book Now</a>
                                                            </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </section>

                                </div>

                                <div class="md-5">
                                    @if(!empty($serviceData->heading_five))    
                                        <h2 class="text-uppercase">{{$serviceData->heading_five}}</h2>
                                    @endif

                                    @if(!empty($serviceData->description_five))
                                        {!! $serviceData->description_five !!}
                                    @endif

                                </div>
                            
                                <div class="accordion accordion-flush mt-5" id="accordionFlushExample">
                                @if(!empty($serviceData->faq_heading_one))
                                    <div class="accordion-item mt-5">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                {{$serviceData->faq_heading_one}}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">{{$serviceData->faq_des_one}}</div>
                                        </div>
                                    </div>
                                @endif
                                @if(!empty($serviceData->faq_heading_two))
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                {{$serviceData->faq_heading_two }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">{{$serviceData->faq_des_two}}</div>
                                        </div>
                                    </div>
                                @endif
                                @if(!empty($serviceData->faq_heading_three))
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                aria-expanded="false" aria-controls="flush-collapseThree">
                                                {{$serviceData->faq_heading_three}}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">{{$serviceData->faq_des_three}}</div>
                                        </div>
                                    </div>
                                @endif
                                @if(!empty($serviceData->faq_heading_four))
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsefour"
                                                aria-expanded="false" aria-controls="flush-collapsefour">
                                                {{$serviceData->faq_heading_four}}
                                            </button>
                                        </h2>
                                        <div id="flush-collapsefour" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">{{$serviceData->faq_des_four}}</div>
                                        </div>
                                    </div>
                                @endif
                                @if(!empty($serviceData->faq_heading_five))
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapsefive"
                                                aria-expanded="false" aria-controls="flush-collapsefive">
                                                {{$serviceData->faq_heading_five}}
                                            </button>
                                        </h2>
                                        <div id="flush-collapsefive" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">{{$serviceData->faq_des_five}}</div>
                                        </div>
                                    </div>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- <div class="col-12 col-lg-3">
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
            </div> -->
        </div>
    </div>
</main>
<!-- /main -->
<script>
    $('.autoplay_doctors, .slider-clinic').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
</script>

@endsection("content")