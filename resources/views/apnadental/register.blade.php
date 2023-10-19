@extends('apnadental.master')
@section("content")
<main>
    <div class="bg_color_2">
        <div class="container margin_60_35">
            <div id="register">
                <h1>Please register to Findoctor!</h1>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                        <form action="{{ route('register.post') }}" method="POST">
                            @csrf
                            <div class="box_form">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Your name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Your email address" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone_no" class="form-control" placeholder="Your Phone number" value="{{ old('phone_no') }}">
                                    @if ($errors->has('phone_no'))
                                        <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                                    @endif
                                </div>
                                {{-- <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Your password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm password</label>
                                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm password">
                                </div> --}}
                                <div id="pass-info" class="clearfix"></div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-0">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="accept_term" name="term_and_conditions" required />
                                        <label for="accept_term"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                                    </div>
                                    {{-- <a href="#!" class="text-body">Forgot password?</a> --}}
                                    </div>
                                <div class="form-group text-center add_top_30">
                                    <input class="btn_1" type="submit" value="Submit">
                                </div>
                            </div>
                            <p class="text-center"><small>Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet. Eum no atqui putant democritum, velit nusquam sententiae vis no.</small></p>
                        </form>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /register -->
        </div>
    </div>
</main>
<!-- /main -->
@endsection("content")