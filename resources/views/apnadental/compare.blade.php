@extends('apnadental.master')
@section("content")
<style>
    .offcanvas.offcanvas-bottom.compare-offcanvas {
        height: 70vh;
    }

    .compare-card-wraper ul {
        border: 1px solid var(--secondary);
        border-radius: 5px;
        width: max-content;
    }

    .compare-card-wraper .compare-card {
        width: 180px;
        height: 180px;
        margin: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .compare-card-wraper .compare-card img.img-thumbnail {
        width: 80px;
        margin-bottom: 5px;
    }

    .compare-card-wraper .compare-card img.img-thumbnail.plus {
        width: 30px;
        margin-bottom: 5px;
    }

    .compare-card-wraper .compare-card label {
        text-align: center;
    }

    .compare-card-wraper .seprator-vs {
        position: relative;
        width: 1px;
        min-height: 100%;
        background-color: var(--secondary);
    }

    .compare-card-wraper .seprator-vs::before {
        content: "VS";
        position: absolute;
        width: 35px;
        height: 35px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 2px;
        border: 1px solid var(--secondary);
        border-radius: 50%;
        z-index: 2;
        background: var(--secondary);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white);
        font-size: 14px;
        font-weight: 600;
    }
</style>
<main>
    <div class="container">
        <h1>Compare</h1>

        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#compareOff"
            aria-controls="offcanvasBottom">Compare</button>

        <div class="offcanvas compare-offcanvas offcanvas-bottom" tabindex="-1" id="compareOff"
            aria-labelledby="offcanvasBottomLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Compare</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="compare-card-wraper offcanvas-body small">
                <form action="#">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <ul class="d-flex aligin-items-center justify-content-center">
                                    <li class="compare-card position-relative flex-column gap-2">
                                        <label for="compare-dr">
                                            <img class="img-thumbnail p-0 border-0"
                                                src="http://localhost/projects/apnadental/public/assets/img/avatar2.jpg">

                                            <div class="text-center">
                                                <h5 class="h6 mb-0">Doctor</h5>
                                            </div>


                                            <input class="uploadProfileInput d-none" type="file" name="compare-dr"
                                                id="compare-dr" accept="image/*">
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
                                                <h5 class="h6 mb-0">Select</h5>
                                            </div>


                                            <input class="uploadProfileInput d-none" type="file" name="compare-dr"
                                                id="compare-dr" accept="image/*">
                                        </label>

                                    </li>

                                    <li class="seprator-vs"></li>

                                    <li class="compare-card position-relative flex-column gap-2">
                                        <label for="compare-dr" class=" pe-auto">
                                            <img class="img-thumbnail p-0 border-0"
                                                src="http://localhost/projects/apnadental/public/assets/img/avatar2.jpg">

                                            <div class="text-center">
                                                <h5 class="h6 mb-0">Doctor</h5>
                                            </div>


                                            <input class="uploadProfileInput d-none" type="file" name="compare-dr"
                                                id="compare-dr" accept="image/*">
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
                                                <h5 class="h6 mb-0">Select</h5>
                                            </div>


                                            <input class="uploadProfileInput d-none" type="file" name="compare-dr"
                                                id="compare-dr" accept="image/*">
                                        </label>

                                    </li>

                                    <li class="seprator-vs"></li>

                                    <li class="compare-card position-relative flex-column gap-2">
                                        <label for="compare-dr" class="stretched-linkf pe-auto">
                                            <img class="img-thumbnail p-0 border-0"
                                                src="http://localhost/projects/apnadental/public/assets/img/avatar2.jpg">

                                            <div class="text-center">
                                                <h5 class="h6 mb-0">Doctor</h5>
                                            </div>


                                            <input class="uploadProfileInput d-none" type="file" name="compare-dr"
                                                id="compare-dr" accept="image/*">
                                        </label>
                                        <button class="position-absolute end-0 top-0 border-0 bg-transparent">
                                            <img src="http://localhost/projects/apnadental/public/assets/img/delete.svg"
                                                width="15px">
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-8"> 
                                <button class="btn btn_pink mb-5">Compare</button>
                            </div>
                        </div>



                        <!-- table  -->
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
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
                </form>

            </div>
        </div>
    </div>


</main>
<!-- /main -->
@endsection("content")