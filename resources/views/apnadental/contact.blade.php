@extends('apnadental.master')
@section("content")

<main>
    <div id="map_contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448193.95101920515!2d76.76357332396313!3d28.64428735608882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1693718729757!5m2!1sen!2sin" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- /map -->
    
    <div class="container margin_60_35">
        <div class="row">
            <aside class="col-lg-3 col-md-4">
                <div id="contact_info">
                    <h3>Contacts info</h3>
                    <p>
                        11 Fifth Ave - New York, US<br> + 61 (2) 8093 3400<br>
                        <a href="#">info@domain.com</a>
                    </p>
                    <h4>Get directions</h4>
                    <form action="http://maps.google.com/maps" method="get" target="_blank">
                        <div class="form-group">
                            <input type="text" name="saddr" placeholder="Enter your location" class="form-control styled">
                            <input type="hidden" name="daddr" value="New York, NY 11430">
                            <!-- Write here your end point -->
                        </div>
                        <input type="submit" value="Get directions" class="btn_1 add_bottom_45">
                    </form>
                    <ul>
                        <li><strong>Administration</strong>
                            <a href="tel://003823932342">0038 23932342</a><br><a href="tel://003823932342">admin@findoctor.com</a><br>
                            <small>Monday to Friday 9am - 7pm</small>
                        </li>
                        <li><strong>General questions</strong>
                            <a href="tel://003823932342">0038 23932342</a><br><a href="tel://003823932342">questions@findoctor.com</a><br>
                            <p><small>Monday to Friday 9am - 7pm</small></p>
                        </li>
                    </ul>
                </div>
            </aside>
            <!--/aside -->
            <div class=" col-lg-8 col-md-8 ml-auto">
                <div class="box_general">
                    <h3>Contact us</h3>
                    <p>
                        Mussum ipsum cacilds, vidis litro abertis.
                    </p>
                    <div>

                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>

                        <div id="message-contact"></div>
                        <form method="post" action="{{ route('contact.store') }}" id="contactform">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name_contact" name="first_name" placeholder="Name" value="{{ old('first_name') }}">
                                        @if ($errors->has('first_name'))
                                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="lastname_contact" name="last_name" placeholder="Last name" value="{{ old('last_name') }}">
                                        @if ($errors->has('last_name'))
                                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" id="email_contact" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="phone_contact" name="phone" class="form-control" placeholder="Phone number" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea rows="5" id="message_contact" name="message" class="form-control" style="height:100px;" placeholder="Hello world!" value="{{ old('message') }}"></textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="verify_contact" class=" form-control" placeholder=" 3 + 1 =">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="Submit" class="btn_1 add_top_20" id="submit-contact">
                        </form>
                    </div>
                    <!-- /col -->
                </div>
            </div>
            <!-- /col -->
        </div>
        <!-- End row -->
    </div>
    <!-- /container -->
</main>
<!-- /main -->
 
@endsection("content")