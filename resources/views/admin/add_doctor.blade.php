@extends('admin.master')
@section("content")

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Doctors</li>
        </ol>
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-file"></i>Registration Form</h2>
            </div>

            <form>            
                <div class="row g-3">
                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="id">Id:</label>
                        <input type="text" class="form-control" id="id" name="id">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="service_id">Service Id:</label>
                        <input type="text" class="form-control" id="service_id" name="service_id">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="compny_name">Company Name:</label>
                        <input type="text" class="form-control" id="compny_name" name="compny_name">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="first_name">First Name:</label>
                        <input type="text" class="form-control" id="first_name" name="first_name">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="last_name">Last Name:</label>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="age">Age:</label>
                        <input type="number" class="form-control" id="age" name="age">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label text-dark" for="description">Description:</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>


                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="type">Type:</label>
                        <select class="form-select" id="type" name="type">
                            <option value="doctor">Doctor</option>
                            <option value="clinic">Clinic</option>
                        </select>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="main_category">Main Category:</label>
                        <select class="form-select" id="main_category" name="main_category">
                            <option value="dental_clinic">Dental clinic</option>
                            <option value="dentist">Dentist</option>
                        </select>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="secondary_category">Secondary Category:</label>
                        <select class="form-select" id="secondary_category" name="secondary_category">
                            <option value="dental_clinic">Tooth Extraction</option>
                            <option value="dentist">Dental Jewellery</option>
                            <option value="dentist">Complete Dentures</option>
                            <option value="dentist">scaling Root Planing</option>
                            <option value="dentist">Veneers</option>
                        </select>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="sex">Sex:</label>
                        <select class="form-select" id="sex" name="sex">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="phone">Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="brand_image" accept="image/*" required="">
                    </div>
                    
                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="rating">Rating</label>
                        <input type="number" class="form-control" id="rating" name="rating">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="rating_count">Rating Count</label>
                        <input type="number" class="form-control" id="rating_count" name="rating_count">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="specialization">Specialization:</label>
                        <input type="text" class="form-control" id="specialization" name="specialization">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="education">Education:</label>
                        <input type="text" class="form-control" id="education" name="education">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="keyword">Keyword:</label>
                        <input type="text" class="form-control" id="keyword" name="keyword">
                    </div>
                    
                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="experience">Experience:</label>
                        <input type="text" class="form-control" id="experience" name="experience">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="website">Website:</label>
                        <input type="url" class="form-control" id="website" name="website" placeholder="www.example.com">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="location_id">Location:</label>
                        <input type="text" class="form-control" id="location" name="location">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="latitude">Latitude:</label>
                        <input type="text" class="form-control" id="latitude" name="latitude">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="longitude">Longitude:</label>
                        <input type="text" class="form-control" id="longitude" name="longitude">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="locality">Locality:</label>
                        <input type="text" class="form-control" id="locality" name="locality">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="city">City:</label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="state">State:</label>
                        <input type="text" class="form-control" id="state" name="state">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="zip_code">ZIP Code:</label>
                        <input type="number" class="form-control" id="zip_code" name="zip_code">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="administrative_area_level">Administrative area level:</label>
                        <input type="number" class="form-control" id="administrative_area_level" name="administrative_area_level">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="country">Country:</label>
                        <input type="text" class="form-control" id="country" name="country">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="map_url">Map Url:</label>
                        <input type="url" class="form-control" id="map_url" name="map_url">
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="work_timings">Work Timings:</label>
                        <input type="text" class="form-control" id="work_timings" name="work_timings">
                    </div>                  
                   
                    <div class="col-sm-6 col-md-4">
                        <label class="form-label text-dark" for="fee">Fee:</label>
                        <input type="text" class="form-control" id="fee" name="fee">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn_pink">Submit</button>
                    </div>
                </div>
            </form>

        </div>
        <!-- /box_general-->

    </div>
    <!-- /.container-fluid-->
</div>
<!-- /.container-wrapper-->

@endsection