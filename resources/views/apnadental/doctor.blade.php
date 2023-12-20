@extends('apnadental.master')

@section("content")
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
                    <h6>Sort by</h6>
                    <div class="dropdown">
                        <form>
                            <button type="button" class="btn btn-primary dropdown-toggle rounded-0"
                                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                Select a Treatment
                            </button>

                            <ul class="dropdown-menu px-2 rounded-0">
                                <li class="list-item float-none">
                                    <label class="form-check-label" for="dropdownCheck1">
                                        Periodontics
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck1">
                                    </label>

                                </li>

                                <li class="list-item float-none">
                                    <label class="form-check-label" for="dropdownCheck2">
                                        Pedodontics
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                                    </label>
                                </li>
                            </ul>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- post cartegory  -->
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-12 col-lg-8 col-xl-9">
                <div>
                    @foreach ($doctors as $doctor)
                        <div class="strip_list wow fadeIn">
                            <a href="#0" class="wish_bt"></a>
                            <figure>
                                <a href="<?php echo env('APP_URL'); ?>/doctor-details/{{ $doctor->id }}"><img src="{{ $doctor->image }}" alt="{{ $doctor->company_name }}"></a>
                            </figure>
                            <small>{{ $resultsType }}</small>
                            <h3>{{ $doctor->company_name }}</h3>
                            <p>{{ $doctor->description }}</p>
                            <span class="rating">
                                    @php
                                        $rating = $doctor->rating;
                                        $filledStars = floor($rating);
                                        $halfStar = ($rating - $filledStars) >= 0.5;
                                    @endphp

                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $filledStars)
                                            <i class="icon_star voted"></i>
                                        @elseif ($halfStar && $i == $filledStars + 1)
                                            <i class="icon_star voted half"></i>
                                        @else
                                            <i class="icon_star"></i>
                                        @endif
                                    @endfor

                                    <small>({{ $doctor->rating_count }})</small>
                            </span>
                            <a href="<?php echo env('APP_URL'); ?>/doctor-details/{{ $doctor->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1">
                                <img src="<?php echo env('APP_URL'); ?>/public/assets/apnadental/img/badges/badge_1.svg" width="15" height="15" alt="">
                            </a>
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mt-2">
                                <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                              
                                    <a href="tel:+91{{ $doctor->phone }}" class="btn_listing">Get a Free Call now</a>
                                    <div class="vr"></div>
                                    <a href="{{ $doctor->map_url }}" target="_blank">Directions</a>
                               
                                </div>
                                <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                                  
                                    <form>
                                        <div class="form-check d-flex align-items-center gap-2 mb-0">
                                            <input type="checkbox" class="form-check-input mb-1" id="12">
                                            <label class="form-check-label m-0 lh-0" for="compareDoctor12">Compare Doctor</label>
                                        </div>
                                    </form>
                                    <div>                                   
                                        <div>
                                            <a class="bookNow btn_outline_pink" href="javascript:void(0);" onclick="bookNow({{ $doctor->id }}, '{{ $doctor->company_name }}', '{{ $doctor->secondary_category }}', '{{ $doctor->work_timings }}')">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Advertising Ads -->
                    <div class="bg-white mb-4 shadow-sm rounded-1">
                        <div class="container ads">
                            <div class="row">
                                <div class="col-12 py-3">
                                    <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg"
                                        alt="" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{$doctors->links()}}

            </div>
            <aside class="col-12 col-lg-4 col-xl-3">
                <div class="widget">
                    <div class="slider-for">
                        <div class="box_list mb-0 home">
                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" class="wish_bt"
                                aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"></a>
                            <figure>
                                <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg"
                                        class="w-100" alt=""></a>
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

                                <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" class="badge_list_1"
                                    aria-label="Badge Level" data-bs-original-title="Badge Level">
                                    <img class="d-inline"
                                        src="<?php echo env('APP_URL'); ?>/public/assets/apnadental/img/badges/badge_1.svg"
                                        width="15" height="15" alt=""></a>
                            </div>

                            <ul>
                                <li><i class="icon-eye-7"></i> 854 Views</li>
                                <li><a href="detail-page.html">Book now</a></li>
                            </ul>
                        </div>
                        <div class="box_list mb-0 home">
                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" class="wish_bt"
                                aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"></a>
                            <figure>
                                <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg"
                                        class="w-100" alt=""></a>
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

                                <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" class="badge_list_1"
                                    aria-label="Badge Level" data-bs-original-title="Badge Level">
                                    <img class="d-inline"
                                        src="<?php echo env('APP_URL'); ?>/public/assets/apnadental/img/badges/badge_1.svg"
                                        width="15" height="15" alt=""></a>
                            </div>

                            <ul>
                                <li><i class="icon-eye-7"></i> 854 Views</li>
                                <li><a href="detail-page.html">Book now</a></li>
                            </ul>
                        </div>
                        <div class="box_list mb-0 home">
                            <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" class="wish_bt"
                                aria-label="Add to wishlist" data-bs-original-title="Add to wishlist"></a>
                            <figure>
                                <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg"
                                        class="w-100" alt=""></a>
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

                                <a href="#0" data-bs-toggle="tooltip" data-bs-placement="top" class="badge_list_1"
                                    aria-label="Badge Level" data-bs-original-title="Badge Level">
                                    <img class="d-inline"
                                        src="<?php echo env('APP_URL'); ?>/public/assets/apnadental/img/badges/badge_1.svg"
                                        width="15" height="15" alt="">
                                </a>
                            </div>

                            <ul>
                                <li><i class="icon-eye-7"></i> 854 Views</li>
                                <li><a href="detail-page.html">Book now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ads  -->
                <div class="ads">
                    <div class="row">
                        <div class="col-12 py-3">
                            <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/10/newspaper-rec300d.jpg"
                                alt="right side ads" width="100%">
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
            </aside>
        </div>
    </div>
</main>
<!-- /main -->

@endsection