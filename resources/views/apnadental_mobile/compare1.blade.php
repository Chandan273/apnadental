@extends('apnadental_mobile.master')
@section("content")

    <div class="container-fluid">
        <div class="top-bar mb-1 py-2 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a class="text-reset" href="<?php echo env('APP_URL'); ?>">
                    <img src="{{ asset('public/assets/mobileImages/arrow-back.svg') }}" alt="back-arrow">
                </a>
                <h3 class="mb-0 ps-3">Home</h3>
            </div>
        </div>
        <div class="compare-card-wraper">
            <div class="row justify-content-start gy-3">
                <div class="col-12">
                    <h2 class="mb-3">Mahindra Scorpio N Z2 Petrol MT 7 STR vs Mahindra Scorpio N Z2 Petrol MT 7 STR (ESP) vs Mahindra
                        Scorpio N Z2 Diesel MT 7 STR vs Mahindra Scorpio N Z2 Diesel MT 7 STR (ESP)</h2>
                    <p>CarWale brings you comparison of Mahindra Scorpio N Z2 Petrol MT 7 STR, Mahindra Scorpio N Z2
                        Petrol MT 7 STR (ESP), Mahindra Scorpio N Z2 Diesel MT 7 STR and Mahindra Scorpio N Z2 Diesel MT
                        7 STR (ESP). The Mahindra Scorpio N Z2 Petrol MT 7 STR price is Rs. 13.26 Lakh, Mahindra</p>
                </div>
                <div class="col-12">
                    <ul class="d-flex aligin-items-center justify-content-center">
                        <li class="compare-card position-relative flex-column gap-2">
                            <label for="compare-dr">
                                <img class="img-thumbnail p-0 border-0"
                                    src="http://localhost/projects/apnadental/public/assets/img/avatar2.jpg">

                                <div class="text-center">
                                    <h5 class="fs-sm text-wrap text-truncate mb-0">Doctor</h5>
                                </div>


                                <input class="uploadProfileInput d-none" type="file" name="compare-dr" id="compare-dr"
                                    accept="image/*">
                            </label>
                            <button class="position-absolute end-0 top-0 border-0 bg-transparent">
                                <img src="http://localhost/projects/apnadental/public/assets/img/delete.svg"
                                    width="15px">
                            </button>
                        </li>

                        <li class="seprator-vs"></li>

                        <li class="compare-card position-relative flex-column gap-2">
                            <label for="compare-dr" class=" pe-auto">
                                <img class="img-thumbnail p-0 border-0"
                                    src="http://localhost/projects/apnadental/public/assets/img/avatar2.jpg">

                                <div class="text-center">
                                    <h5 class="fs-sm text-wrap text-truncate mb-0">Doctor</h5>
                                </div>


                                <input class="uploadProfileInput d-none" type="file" name="compare-dr" id="compare-dr"
                                    accept="image/*">
                            </label>
                            <button class="position-absolute end-0 top-0 border-0 bg-transparent">
                                <img src="http://localhost/projects/apnadental/public/assets/img/delete.svg"
                                    width="15px">
                            </button>
                        </li>

                        <li class="seprator-vs"></li>

                        <li class="compare-card position-relative flex-column gap-2">
                            <label for="compare-dr">
                                <img class="img-thumbnail plus p-0 border-0"
                                    src="http://localhost/projects/apnadental/public/assets/img/plus.svg">

                                <div class="text-center">
                                    <h5 class="fs-sm text-wrap text-truncate mb-0">Select</h5>
                                </div>
                                <input class="uploadProfileInput d-none" type="file" name="compare-dr" id="compare-dr"
                                    accept="image/*">
                            </label>

                        </li>

                    </ul>
                </div>
             
            </div>
        </div>



        <!-- table  -->
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered caption-top">
                        <caption>Compare Doctor</caption>
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Doctor 1</th>
                                <th scope="col">Doctor 2</th>
                                <th scope="col">Doctor 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">company_name</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">description</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">type</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">main_category</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">secondary_category</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">age</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">sex</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">email</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">rating</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">phone</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">specialization</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">education</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">experience</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">website</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">location</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">city/state</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">work_timings</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">fee</th>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection