@extends('apnadental_mobile.master')
@section("content")

<section class="py-5 blogs-section">
    <div class="container-fluid">
        <div class="text-center mb-2 mb-sm-5">
            <h1 class="text-uppercase ">our blogs</h1>
            <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed
                ad debet scaevola, ne mel.</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row g-1">
            <div class="col-12">
                <a href="http://localhost/projects/apnadental/blog-details/1" class="blog-wraper">
                    <img src="{{ asset('public/uploads/blogs/1698338749.jpg') }}"
                        alt="blog image">
                    <div class="blog-content-wrraper">
                        <span class="post-category small text-white">Beauty</span>
                        <h3 class="text-white">WordPress News Magazine Charts the Most Chic and Fashionable Women of New
                            York City</h3>
                        <div class="td-editor-date">
                            <span class="post-author-name text-white">2023-Sep-10</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12">
                <div class="row g-1 flex-nowrap overflow-x-auto">
                    <div class="col-12">
                        <a href="http://localhost/projects/apnadental/blog-details/3" class=" blog-wraper">
                            <img src="{{ asset('public/uploads/blogs/1698338815.jpg') }}"
                                alt="blog image">
                            <div class="blog-content-wrraper">
                                <span class="post-category small text-white">Technology</span>
                                <h3 class="text-white fs-5">
                                    Game Changing Virtual Reality Console Hits the Market
                                </h3>

                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <a href="http://localhost/projects/apnadental/blog-details/4" class=" blog-wraper">
                            <img src="http://localhost/projects/apnadental/public/uploads/blogs/1698338898.jpg"
                                alt="blog image">
                            <div class="blog-content-wrraper">
                                <span class="post-category small text-white">Beauty</span>
                                <h3 class="text-white fs-6">
                                    Discover the Most Magical Sunset in Santorini
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <a href="http://localhost/projects/apnadental/blog-details/5" class=" blog-wraper">
                            <img src="http://localhost/projects/apnadental/public/uploads/blogs/1698338971.jpg"
                                alt="blog image">
                            <div class="blog-content-wrraper">
                                <span
                                    class="post-category small text-white badge bg-dark rounded-0 fw-normal">Travel</span>
                                <h3 class="text-white fs-6">
                                    Discover the Most Magical Sunset in Santorini
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row g-3 my-3 ">
            <div class="col-12">
                <div class="health-item d-flex gap-4">
                    <div class="img-wrap">
                        <div class="bg-primary h-100 rounded-4">
                            <img class="w-100 h-100 object-fit-cover" src="{{ asset('public/assets/mobileImages/bangaluru-vector.svg') }}" alt="blog image">
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="mb-2">Simple steps to maintain a healthy heart for all ages</h5>
                        <p>12 Jun 2020</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="health-item d-flex gap-4">
                    <div class="img-wrap">
                        <div class="bg-primary h-100 rounded-4">
                            <img class="w-100 h-100 object-fit-cover" src="{{ asset('public/assets/mobileImages/bangaluru-vector.svg') }}" alt="blog image">
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="mb-2">Superfoods you must for all ages</h5>
                        <p>12 Jun 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection