<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .divider:after, .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .h-custom {
            height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <section class="vh-100">
                <div class="container-fluid h-custom">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                     <h1 class="text-center">Apnadental Administrator</h1>
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="{{ asset('public/assets/admin/img/admin-login.png') }}"
                        class="img-fluid" alt="Login Image">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                        <div class="card-body">
                            @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>

                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Email address</label>
                                <input type="email" name="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" value="{{ old('email') }}" />
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                
                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="form3Example4">Password</label>
                                <input type="password" name="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" value="{{ old('password') }}" />
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                
                            <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                Remember me
                                </label>
                            </div>
                            {{-- <a href="#!" class="text-body">Forgot password?</a> --}}
                            </div>
                
                            <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-dark btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            {{-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                class="link-danger">Register</a></p> --}}
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
                <div
                  class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-dark">
                  <!-- Copyright -->
                  <div class="text-white mb-3 mb-md-0">
                    Apnadental - Copyright © 2023. All rights reserved.
                  </div>
                  <!-- Copyright -->

                </div>
            </section>
        </div>
    </div>
</body>
</html>