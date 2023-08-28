@extends('admin.master')
@section("content")

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ url('/dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add listing</li>
      </ol>
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-file"></i>Registration Form</h2>
			</div>
			
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">First Name:</label>
                            <input type="text" class="form-control" id="first_name" name="first_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" class="form-control" id="age" name="age">
                        </div>
                        <div class="form-group">
                            <label for="sex">Sex:</label>
                            <select class="form-control" id="sex" name="sex">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="specialization">Specialization:</label>
                            <input type="text" class="form-control" id="specialization" name="specialization">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="experience">Experience:</label>
                            <input type="text" class="form-control" id="experience" name="experience">
                        </div>
                        <div class="form-group">
                            <label for="work_timings">Work Timings:</label>
                            <input type="text" class="form-control" id="work_timings" name="work_timings">
                        </div>
                        <div class="form-group">
                            <label for="location_id">Location ID:</label>
                            <input type="text" class="form-control" id="location_id" name="location_id">
                        </div>
                        <div class="form-group">
                            <label for="latitude">Latitude:</label>
                            <input type="text" class="form-control" id="latitude" name="latitude">
                        </div>
                        <div class="form-group">
                            <label for="longitude">Longitude:</label>
                            <input type="text" class="form-control" id="longitude" name="longitude">
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="country">Country:</label>
                            <input type="text" class="form-control" id="country" name="country">
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="zip_code">ZIP Code:</label>
                            <input type="text" class="form-control" id="zip_code" name="zip_code">
                        </div>
                        <div class="form-group">
                            <label for="fee">Fee:</label>
                            <input type="text" class="form-control" id="fee" name="fee">
                        </div>
                    </div>
                </div>
        
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
			
		</div>
		<!-- /box_general-->

	    </div>
	  <!-- /.container-fluid-->
   	</div>
    <!-- /.container-wrapper-->

@endsection