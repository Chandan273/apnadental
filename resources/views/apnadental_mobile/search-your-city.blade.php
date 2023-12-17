@extends('apnadental_mobile.master')
@section("content")
<div class="container-fluid">
            <div class="top-bar my-3 py-2 d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <a href="#" class="text-reset">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                        </svg>
                    </a>
                    <h3 class="mb-0 ps-3">Search your city</h3>
                </div>
            </div>

            <!-- search input  -->
            <div class="search-bar pt-2">
                <div class="input-group bg-white border rounded-3 p-2 mb-3">
                    <span class="input-group-text border-0 bg-transparent"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control border-0 ps-1" placeholder="Search your city"
                        aria-label="ddf">
                </div>
            </div>
            <ul class="list-unstyled search-city-list">
                <li>
                    <div class="d-flex ps-3">
                        <div class="icon me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" id="pin_1_" data-name="pin (1)" width="11.52"
                                height="15.36" viewBox="0 0 11.52 15.36">
                                <path id="Shape"
                                    d="M5.54,15.273C5.315,15.06,0,10.01,0,5.76a5.76,5.76,0,1,1,11.52,0c0,4.25-5.315,9.3-5.54,9.513a.32.32,0,0,1-.439,0Z"
                                    fill="#506d85" />
                            </svg>
                        </div>
                        <div class="content border-bottom flex-grow-1">
                            <h6 class="mb-0">Las Vegas</h6>
                            <p class="fs-sm text-grey">Jaipur</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="d-flex ps-3">
                        <div class="icon me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" id="pin_1_" data-name="pin (1)" width="11.52"
                                height="15.36" viewBox="0 0 11.52 15.36">
                                <path id="Shape"
                                    d="M5.54,15.273C5.315,15.06,0,10.01,0,5.76a5.76,5.76,0,1,1,11.52,0c0,4.25-5.315,9.3-5.54,9.513a.32.32,0,0,1-.439,0Z"
                                    fill="#506d85" />
                            </svg>
                        </div>
                        <div class="content border-bottom flex-grow-1">
                            <h6 class="mb-0">Las Vegas</h6>
                            <p class="fs-sm text-grey">Jaipur</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex ps-3">
                        <div class="icon me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" id="pin_1_" data-name="pin (1)" width="11.52"
                                height="15.36" viewBox="0 0 11.52 15.36">
                                <path id="Shape"
                                    d="M5.54,15.273C5.315,15.06,0,10.01,0,5.76a5.76,5.76,0,1,1,11.52,0c0,4.25-5.315,9.3-5.54,9.513a.32.32,0,0,1-.439,0Z"
                                    fill="#506d85" />
                            </svg>
                        </div>
                        <div class="content border-bottom flex-grow-1">
                            <h6 class="mb-0">Las Vegas</h6>
                            <p class="fs-sm text-grey">Jaipur</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex ps-3">
                        <div class="icon me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" id="pin_1_" data-name="pin (1)" width="11.52"
                                height="15.36" viewBox="0 0 11.52 15.36">
                                <path id="Shape"
                                    d="M5.54,15.273C5.315,15.06,0,10.01,0,5.76a5.76,5.76,0,1,1,11.52,0c0,4.25-5.315,9.3-5.54,9.513a.32.32,0,0,1-.439,0Z"
                                    fill="#506d85" />
                            </svg>
                        </div>
                        <div class="content border-bottom flex-grow-1">
                            <h6 class="mb-0">Las Vegas</h6>
                            <p class="fs-sm text-grey">Jaipur</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex ps-3">
                        <div class="icon me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" id="pin_1_" data-name="pin (1)" width="11.52"
                                height="15.36" viewBox="0 0 11.52 15.36">
                                <path id="Shape"
                                    d="M5.54,15.273C5.315,15.06,0,10.01,0,5.76a5.76,5.76,0,1,1,11.52,0c0,4.25-5.315,9.3-5.54,9.513a.32.32,0,0,1-.439,0Z"
                                    fill="#506d85" />
                            </svg>
                        </div>
                        <div class="content border-bottom flex-grow-1">
                            <h6 class="mb-0">Las Vegas</h6>
                            <p class="fs-sm text-grey">Jaipur</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex ps-3">
                        <div class="icon me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" id="pin_1_" data-name="pin (1)" width="11.52"
                                height="15.36" viewBox="0 0 11.52 15.36">
                                <path id="Shape"
                                    d="M5.54,15.273C5.315,15.06,0,10.01,0,5.76a5.76,5.76,0,1,1,11.52,0c0,4.25-5.315,9.3-5.54,9.513a.32.32,0,0,1-.439,0Z"
                                    fill="#506d85" />
                            </svg>
                        </div>
                        <div class="content border-bottom flex-grow-1">
                            <h6 class="mb-0">Las Vegas</h6>
                            <p class="fs-sm text-grey">Jaipur</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex ps-3">
                        <div class="icon me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" id="pin_1_" data-name="pin (1)" width="11.52"
                                height="15.36" viewBox="0 0 11.52 15.36">
                                <path id="Shape"
                                    d="M5.54,15.273C5.315,15.06,0,10.01,0,5.76a5.76,5.76,0,1,1,11.52,0c0,4.25-5.315,9.3-5.54,9.513a.32.32,0,0,1-.439,0Z"
                                    fill="#506d85" />
                            </svg>
                        </div>
                        <div class="content border-bottom flex-grow-1">
                            <h6 class="mb-0">Las Vegas</h6>
                            <p class="fs-sm text-grey">Jaipur</p>
                        </div>
                    </div>
                </li>

            </ul>
        </div>

@endsection