@extends('apnadental_mobile.master')
@section("content")

<div class="container-fluid">
    <h4 class="txt-primary mb-3 h5">Refer &amp; Earn</h4>
    <div class="card text-bg-light mb-3">
        <div class="card-body pt-0 pb-2">
            <div class="row align-items-center bg-verticle-gradient py-3">
                <div class="col-12 col-sm-8">
                    <div class="text-center">
                        <h5 class="h2 fw-bold mb-3 txt-secondary">Enjoying our service and <span
                                class="h1 fw-bold d-block">
                                <i class="icon-rupee"></i>₹ Discounts?</span>
                        </h5>
                        <p class="h5">Spread the positivity to your friends and
                            family</p>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <img class="w-100" src="{{ asset('public/assets/mobileImages/money.svg') }}" alt="refer image">
                </div>
            </div>

            <div class="row py-3">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-center py-3">
                        <span class="border-bottom border-top border-secondary px-5"></span>
                        <h4 class="mb-0 mx-2">Refer via</h4>
                        <span class="border-bottom border-top border-secondary px-5"></span>
                    </div>
                    <div class="d-flex align-items-center justify-content-center flex-wrap gap-3">
                        <button class="btn button-pink-outline">Invite on Whatsapp</button>
                        <button class="btn button-pink-fill">Copy Referral link</button>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <h5>Refer to your friend and family so that they can also experience:</h5>

                    <ul class="list-group">
                        <li class="list-group-item d-flex align-items-center gap-2">
                            <div class="rounded-circle bg-primary bg-opacity-25 p-1">
                                <i class="icon-mail fs-3 txt-secondary"></i>
                            </div>
                            <h6 class="mb-0">2 Hour Medicine Delivery</h6>
                        </li>

                        <li class="list-group-item d-flex align-items-center gap-2">
                            <div class="rounded-circle bg-primary bg-opacity-25 p-1">
                                <i class="icon-dollar fs-3 txt-secondary"></i>
                            </div>
                            <h6 class="mb-0">Awesome Discounts and Cashbacks</h6>
                        </li>

                        <li class="list-group-item d-flex align-items-center gap-2">
                            <div class="rounded-circle bg-primary bg-opacity-25 p-1">
                                <i class="icon-bag fs-3 txt-secondary"></i>
                            </div>
                            <h6 class="mb-0">A wide range of Products, Doctors &amp; Lab Tests</h6>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection