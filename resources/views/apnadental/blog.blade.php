@extends('apnadental.master')
@section("content")

<style>

</style>

<main>
    <div class="bg-white action-filter py-3">
        <div class="container">
            <div class="row g-2">
                <div class="col-12 col-sm-4 action-buttons">
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-primary">About</button>
                        <button class="btn btn-outline-primary">Health feed</button>
                        <button class="btn btn-outline-primary">Find Doctor</button>
                    </div>

                </div>
                <div class="col-12 col-sm-8">
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
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li>Page active</li>
            </ul>
        </div>
    </div>
    <!-- /breadcrumb -->

    <section class="py-5 blogs-section">
        <div class="text-center mb-2 mb-sm-5">
            <h1 class="text-uppercase ">our blogs</h1>
            <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed
                ad debet scaevola, ne mel.</p>
        </div>
        <div class="container-fluid container-lg">
            <div class="row g-1">
                <div class="col-12 col-sm-6">
                    <a href="" class=" blog-wraper">
                        <img src="{{ asset('public/assets/img/blog-big.jpg') }}" alt="blog image">
                        <div class="blog-content-wrraper">
                            <span
                                class="post-category small text-white  badge bg-dark rounded-0 fw-normal">Fashion</span>
                            <h3 class="text-white">
                                WordPress News Magazine Charts the Most Chic and Fashionable Women of New York City
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
                                <img src="{{ asset('public/assets/img/blog-medium.jpg') }}" alt="blog image">
                                <div class="blog-content-wrraper">
                                    <span
                                        class="post-category small text-white  badge bg-dark rounded-0 fw-normal">Gadgets</span>
                                    <h3 class="text-white fs-5">
                                        Game Changing Virtual Reality Console Hits the Market
                                    </h3>

                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="" class=" blog-wraper">
                                <img src="{{ asset('public/assets/img/blog-small1.jpg') }}" alt="blog image">
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
                                <img src="{{ asset('public/assets/img/blog-small2.jpg') }}" alt="blog image">
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

    <!-- post cartegory  -->
    <div class="container py-5">
        <div class="row g-3">
            <div class="col-12 col-lg-9">
                <div class="first-category">
                    <nav>
                        <div class="nav nav-tabs align-items-center" id="nav-tab" role="tablist">
                            <h3 class="category-title fs-6 mb-0 fw-normal me-5 py-2 px-3 text-uppercase">DON'T MISS</h3>
                            <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all"
                                aria-selected="true">All</button>
                            <button class="nav-link" id="nav-travel-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-travel" type="button" role="tab" aria-controls="nav-travel"
                                aria-selected="false">Travel</button>
                        </div>
                    </nav>
                    <div class="tab-content mt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                            aria-labelledby="nav-all-tab" tabindex="0">
                            <article class="blog fadeIn">
                                <div class="row g-3">
                                    <div class="col-12 col-lg-8">
                                        <figure>
                                            <a href="blog-post.html">
                                                <img src="http://via.placeholder.com/800x533.jpg" alt="" class="w-100">
                                            </a>
                                        </figure>
                                        <div class="post_info">
                                            <div class="d-flex aligm-items-center justify-content-start gap-2 mb-2">
                                                <strong>Admin</strong>
                                                <span>-</span>
                                                <small>14 Aug. 2023</small>

                                            </div>

                                            <h3><a href="blog-post.html">Have a look around this bold and colourful
                                                    1930s semi in London</a></h3>
                                            <p class="mb-2">Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim
                                                offendit salutandi, in eos quod omnes epicurei, ex veri qualisque
                                                scriptorem mei.</p>
                                            <a class="preview" href="">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="related-post">
                                            <a href="" class="d-flex gap-2 mb-3">
                                                <div class="thumb" style="max-width:100px;">
                                                    <img src="http://via.placeholder.com/100x100.jpg" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold">Have a look around this bold and colourful 1930s
                                                        semi in London</h6>
                                                    <small>21 Aug. 2023</small>
                                                </div>
                                            </a>
                                            <a href="" class="d-flex gap-2 mb-3">
                                                <div class="thumb" style="max-width:100px;">
                                                    <img src="http://via.placeholder.com/100x100.jpg" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold">Have a look around this bold and colourful 1930s
                                                        semi in London</h6>
                                                    <small>24 Aug. 2023</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="tab-pane fade" id="nav-travel" role="tabpanel" aria-labelledby="nav-travel-tab"
                            tabindex="0">
                            <article class="blog fadeIn">
                                <div class="row g-3">
                                    <div class="col-12 col-lg-8">
                                        <figure>
                                            <a href="blog-post.html">
                                                <img src="http://via.placeholder.com/800x533.jpg" alt="" class="w-100">
                                            </a>
                                        </figure>
                                        <div class="post_info">
                                            <div class="d-flex aligm-items-center justify-content-start gap-2 mb-2">
                                                <strong>Admin</strong>
                                                <span>-</span>
                                                <small>10 Aug. 2023</small>

                                            </div>

                                            <h3><a href="blog-post.html">Have a look around this bold and colourful
                                                    1930s semi in London</a></h3>
                                            <p class="mb-2">Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim
                                                offendit salutandi, in eos quod omnes epicurei, ex veri qualisque
                                                scriptorem mei.</p>
                                            <a class="preview" href="">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="related-post">
                                            <a href="" class="d-flex gap-2 mb-3">
                                                <div class="thumb" style="max-width:100px;">
                                                    <img src="http://via.placeholder.com/100x100.jpg" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold">Have a look around this bold and colourful 1930s
                                                        semi in London</h6>
                                                    <small>20 Aug. 2023</small>
                                                </div>
                                            </a>
                                            <a href="" class="d-flex gap-2 mb-3">
                                                <div class="thumb" style="max-width:100px;">
                                                    <img src="http://via.placeholder.com/100x100.jpg" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold">Have a look around this bold and colourful 1930s
                                                        semi in London</h6>
                                                    <small>25 Aug. 2023</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- /pagination -->
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
                </div>

                <!-- Advertising Ads -->

                <div class="ads">
                    <div class="row">
                        <div class="col-12 py-3">
                            <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg"
                                alt="" width="100%">
                        </div>
                    </div>
                </div>

                <div class="second-category pt-3">
                    <nav>
                        <div class="nav nav-tabs align-items-center" id="nav-tab" role="tablist">
                            <h3 class="category-title fs-6 mb-0 fw-normal me-5 py-2 px-3 text-uppercase">LIFESTYLE NEWS
                            </h3>
                            <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all"
                                aria-selected="true">All</button>
                            <button class="nav-link" id="nav-travel-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-travel" type="button" role="tab" aria-controls="nav-travel"
                                aria-selected="false">Travel</button>
                        </div>
                    </nav>
                    <div class="tab-content mt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                            aria-labelledby="nav-all-tab" tabindex="0">
                            <article class="blog fadeIn">
                                <div class="row g-3">
                                    <div class="col-12 col-lg-8">
                                        <figure>
                                            <a href="blog-post.html">
                                                <img src="http://via.placeholder.com/800x533.jpg" alt="" class="w-100">
                                            </a>
                                        </figure>
                                        <div class="post_info">
                                            <div class="d-flex aligm-items-center justify-content-start gap-2 mb-2">
                                                <strong>Admin</strong>
                                                <span>-</span>
                                                <small>14 Aug. 2023</small>

                                            </div>

                                            <h3><a href="blog-post.html">Have a look around this bold and colourful
                                                    1930s semi in London</a></h3>
                                            <p class="mb-2">Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim
                                                offendit salutandi, in eos quod omnes epicurei, ex veri qualisque
                                                scriptorem mei.</p>
                                            <a class="preview" href="">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="related-post">
                                            <a href="" class="d-flex gap-2 mb-3">
                                                <div class="thumb" style="max-width:100px;">
                                                    <img src="http://via.placeholder.com/100x100.jpg" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold">Have a look around this bold and colourful 1930s
                                                        semi in London</h6>
                                                    <small>21 Aug. 2023</small>
                                                </div>
                                            </a>
                                            <a href="" class="d-flex gap-2 mb-3">
                                                <div class="thumb" style="max-width:100px;">
                                                    <img src="http://via.placeholder.com/100x100.jpg" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold">Have a look around this bold and colourful 1930s
                                                        semi in London</h6>
                                                    <small>24 Aug. 2023</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="tab-pane fade" id="nav-travel" role="tabpanel" aria-labelledby="nav-travel-tab"
                            tabindex="0">
                            <article class="blog fadeIn">
                                <div class="row g-3">
                                    <div class="col-12 col-lg-8">
                                        <figure>
                                            <a href="blog-post.html">
                                                <img src="http://via.placeholder.com/800x533.jpg" alt="" class="w-100">
                                            </a>
                                        </figure>
                                        <div class="post_info">
                                            <div class="d-flex aligm-items-center justify-content-start gap-2 mb-2">
                                                <strong>Admin</strong>
                                                <span>-</span>
                                                <small>10 Aug. 2023</small>

                                            </div>

                                            <h3><a href="blog-post.html">Have a look around this bold and colourful
                                                    1930s semi in London</a></h3>
                                            <p class="mb-2">Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim
                                                offendit salutandi, in eos quod omnes epicurei, ex veri qualisque
                                                scriptorem mei.</p>
                                            <a class="preview" href="">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="related-post">
                                            <a href="" class="d-flex gap-2 mb-3">
                                                <div class="thumb" style="max-width:100px;">
                                                    <img src="http://via.placeholder.com/100x100.jpg" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold">Have a look around this bold and colourful 1930s
                                                        semi in London</h6>
                                                    <small>20 Aug. 2023</small>
                                                </div>
                                            </a>
                                            <a href="" class="d-flex gap-2 mb-3">
                                                <div class="thumb" style="max-width:100px;">
                                                    <img src="http://via.placeholder.com/100x100.jpg" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold">Have a look around this bold and colourful 1930s
                                                        semi in London</h6>
                                                    <small>25 Aug. 2023</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- /pagination -->
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
                </div>
            </div>

            <!-- Sidebar  -->
            <aside class="col-12 col-lg-3">
                <div class="widget">
                    <form class="mb-3">
                        <div class="input-group">
                            <input type="text" name="search" id="search" class="form-control" placeholder="Search...">
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
</main>
<!-- /main -->
@endsection("content")