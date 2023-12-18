@extends('apnadental_mobile.master')
@section("content")

<style>
    .w-230 {
        width: 230px;
    }

    .services-category-tabs .nav.nav-tabs {
        border-bottom: 2px solid #e74e84;
    }

    .services-category-tabs .nav-tabs .nav-link {
        border-radius: 0;
        border: 0;
        color: #000000;
        padding: 15px;
        text-transform: capitalize;
    }

    .services-category-tabs .nav-tabs .nav-link.active {

        background-color: #e74e84;
        color: rgb(255, 255, 255);
    }

    .services-category-tabs .tab-pane .list-group .list-group-item {
        border-color: #ddd;
        text-transform: capitalize;
    }

    .services-category-tabs .tab-pane .list-group .list-group-item.hover,
    .services-category-tabs .tab-pane .list-group .list-group-item.focus {
        background-color: #ddd;
        color: #e74e84;
    }

    .services-category-tabs .tab-pane .list-group .list-group-item.active {
        background-color: #e74e84;
        color: #ffffff;
    }
</style>


<div class="services-category-tabs">
    <nav class="d-flex bg-light">
        <div class="nav nav-tabs w-100" id="nav-tab" role="tablist">
            <button class="nav-link text-white bg-dark w-230 text-uppercase fw-bold">Treatments</button>
            <button class="nav-link active" id="nav-doctors-tab" data-bs-toggle="tab" data-bs-target="#nav-doctors"
                type="button" role="tab" aria-controls="nav-doctors" aria-selected="false">Doctors</button>
            <button class="nav-link" id="nav-clinics-tab" data-bs-toggle="tab" data-bs-target="#nav-clinics"
                type="button" role="tab" aria-controls="nav-clinics" aria-selected="false">clinics</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">

        <div class="tab-pane fade show active" id="nav-doctors" role="tabpanel" aria-labelledby="nav-doctors-tab"
            tabindex="0">
            <div class="d-flex align-items-start">
                <div class="w-230 nav flex-column me-3 list-group list-group-flush border border-top-0"
                    id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="list-group-item active" id="v-pills-dr-cat-1-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-dr-cat-1" type="button" role="tab" aria-controls="v-pills-dr-cat-1"
                        aria-selected="true">dr-cat-1</a>
                    <a class="list-group-item" id="v-pills-dr-cat-2-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-dr-cat-2" type="button" role="tab" aria-controls="v-pills-dr-cat-2"
                        aria-selected="false">dr-cat-2</a>

                    <a class="list-group-item" id="v-pills-dr-cat-3-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-dr-cat-3" type="button" role="tab" aria-controls="v-pills-dr-cat-3"
                        aria-selected="false">dr-cat-3</a>
                    <a class="list-group-item" id="v-pills-dr-cat-4-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-dr-cat-4" type="button" role="tab" aria-controls="v-pills-dr-cat-4"
                        aria-selected="false">dr-cat-4</a>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-dr-cat-1" role="tabpanel"
                        aria-labelledby="v-pills-dr-cat-1-tab" tabindex="0">wdwqdqw</div>
                    <div class="tab-pane fade" id="v-pills-dr-cat-2" role="tabpanel"
                        aria-labelledby="v-pills-dr-cat-2-tab" tabindex="0">.sdwdq.</div>
                    <div class="tab-pane fade" id="v-pills-dr-cat-3" role="tabpanel"
                        aria-labelledby="v-pills-dr-cat-3-tab" tabindex="0">ds</div>
                    <div class="tab-pane fade" id="v-pills-dr-cat-4" role="tabpanel"
                        aria-labelledby="v-pills-dr-cat-4-tab" tabindex="0">ds</div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-clinics" role="tabpanel" aria-labelledby="nav-clinics-tab" tabindex="0">
            <div class="d-flex align-items-start">
                <div class="w-230 nav flex-column me-3 list-group list-group-flush border border-top-0"
                    id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="list-group-item active" id="v-pills-clinic-cat-1-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-clinic-cat-1" type="button" role="tab"
                        aria-controls="v-pills-clinic-cat-1" aria-selected="true">clinic-cat-1</a>
                    <a class="list-group-item" id="v-pills-clinic-cat-2-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-clinic-cat-2" type="button" role="tab"
                        aria-controls="v-pills-clinic-cat-2" aria-selected="false">clinic-cat-2</a>

                    <a class="list-group-item" id="v-pills-clinic-cat-3-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-clinic-cat-3" type="button" role="tab"
                        aria-controls="v-pills-clinic-cat-3" aria-selected="false">clinic-cat-3</a>
                    <a class="list-group-item" id="v-pills-clinic-cat-4-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-clinic-cat-4" type="button" role="tab"
                        aria-controls="v-pills-clinic-cat-4" aria-selected="false">clinic-cat-4</a>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-clinic-cat-1" role="tabpanel"
                        aria-labelledby="v-pills-clinic-cat-1-tab" tabindex="0">wdwqdqw</div>
                    <div class="tab-pane fade" id="v-pills-clinic-cat-2" role="tabpanel"
                        aria-labelledby="v-pills-clinic-cat-2-tab" tabindex="0">.sdwdq.</div>
                    <div class="tab-pane fade" id="v-pills-clinic-cat-3" role="tabpanel"
                        aria-labelledby="v-pills-clinic-cat-3-tab" tabindex="0">ds</div>
                    <div class="tab-pane fade" id="v-pills-clinic-cat-4" role="tabpanel"
                        aria-labelledby="v-pills-clinic-cat-4-tab" tabindex="0">ds</div>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection