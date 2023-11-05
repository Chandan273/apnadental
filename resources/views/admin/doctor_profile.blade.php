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
				<h2><i class="fa fa-file"></i>Basic info</h2>
			</div>
			<div class="row">
				<div class="col-12 col-sm-auto">
					<div class="form-group">
						<label class="form-label">Profile picture</label>
						<form action="/file-upload" class="dropzone">
							<div class="profile-pic-wrapper position-relative">
								<img id="profilePic" class="pic position-absolute w-100 h-100"
									src="{{ asset('public/assets/img/avatar4.jpg') }}">

								<label for="newProfilePhoto" class="upload-file-block d-flex align-items-center justify-content-center position-absolute start-0 top-0 w-100 h-100 bg-dark bg-opacity-75 text-white">
									<Input class="uploadProfileInput d-none" type="file" name="profile_pic"
										id="newProfilePhoto" accept="image/*" />

									<div class="text-center">
										<div class="mb-2">
											<i class="fa fa-camera fa-2x"></i>
										</div>
										<div class="text-uppercase">
											Update <br /> Profile Photo
										</div>
									</div>
								</label>
							</div>
						</form>
					</div>
				</div>
				<div class="col-12 col-sm add_top_30">
					<div class="row g-3">
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Name</label>
								<input type="text" class="form-control" placeholder="Your name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Last name</label>
								<input type="text" class="form-control" placeholder="Your last name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Telephone</label>
								<input type="text" class="form-control" placeholder="Your telephone number">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Email</label>
								<input type="email" class="form-control" placeholder="Your email">
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /box_general-->

		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-map-marker"></i>Address</h2>
			</div>
			<div class="row g-3">
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">City</label>
						<select class="form-control">
							<option value="">Select city</option>
							<option value="New York">New York</option>
							<option value="Chicago">Chicago</option>
							<option value="Miami">Miami</option>
							<option value="Los Angeles">Los Angeles</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Address</label>
						<input type="text" class="form-control" placeholder="Your address">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">State</label>
						<input type="text" class="form-control" placeholder="Your state">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="form-label">Zip code</label>
						<input type="text" class="form-control" placeholder="Your zip code">
					</div>
				</div>
			</div>
			<!-- /row-->
		</div>
		<!-- /box_general-->

		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-file-text"></i>Curriculum</h2>
			</div>
			<div class="row g-3">
				<div class="col-md-12">
					<div class="form-group">
						<label class="form-label">Professional statement</label>
						<div class="editor">
							<textarea rows="5" class="form-control" placeholder="Editor"></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label class="form-label">Specialization <a href="#0" data-toggle="tooltip" data-placement="top"
								title="Separated by commas"><i class="fa fa-fw fa-question-circle"></i></a></label>
						<input type="text" class="form-control" placeholder="Ex: Piscologist, Pediatrician...">
					</div>
				</div>
			</div>

			<!-- /row-->
		</div>
		<!-- /box_general-->

		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-folder"></i>Pricing</h2>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h6>Treatments</h6>
					<table id="pricing-list-container" style="width:100%;">
						<tr class="pricing-list-item">
							<td>
								<div class="row g-3 align-items-center">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Title">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Price">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<a class="delete text-danger" href="#"><i class="fa fa-fw fa-remove"></i></a>
										</div>
									</div>
								</div>
							</td>
						</tr>
					</table>
					<a href="#0" class="btn_1 gray add-pricing-list-item mt-3"><i
							class="fa fa-fw fa-plus-circle"></i>Add Item</a>
				</div>
			</div>
			<!-- /row-->
		</div>
		<!-- /box_general-->
		<p><a href="#0" class="btn btn_pink">Save</a></p>
	</div>
	<!-- /.container-fluid-->
</div>
<!-- /.container-wrapper-->

@section("endcontent")