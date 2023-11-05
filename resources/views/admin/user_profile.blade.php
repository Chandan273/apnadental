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
				<h2><i class="fa fa-user"></i>Profile details</h2>
			</div>
			<div class="row">
				<div class="col-12 col-sm-auto">
					<div class="form-group">
						<label class="form-label">Profile picture</label>
						<form action="/file-upload" class="dropzone">
							<div class="profile-pic-wrapper position-relative">
								<img id="profilePic" class="pic position-absolute w-100 h-100"
									src="{{ asset('public/assets/img/avatar4.jpg') }}">

								<label for="newProfilePhoto"
									class="upload-file-block d-flex align-items-center justify-content-center position-absolute start-0 top-0 w-100 h-100 bg-dark bg-opacity-75 text-white">
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
					<!-- /row-->

				</div>
			</div>
		</div>
		<!-- /box_general-->
		<div class="row">
			<div class="col-md-6">
				<div class="box_general padding_bottom">
					<div class="header_box version_2">
						<h2><i class="fa fa-lock"></i>Change password</h2>
					</div>
					<div class="form-group mb-3">
						<label class="form-label">Old password</label>
						<input class="form-control" type="password">
					</div>
					<div class="form-group mb-3">
						<label class="form-label">New password</label>
						<input class="form-control" type="password">
					</div>
					<div class="form-group mb-3">
						<label class="form-label">Confirm new password</label>
						<input class="form-control" type="password">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box_general padding_bottom">
					<div class="header_box version_2">
						<h2><i class="fa fa-envelope"></i>Change email</h2>
					</div>
					<div class="form-group mb-3">
						<label class="form-label">Old email</label>
						<input class="form-control" name="old_email" id="old_email" type="email">
					</div>
					<div class="form-group mb-3">
						<label class="form-label">New email</label>
						<input class="form-control" name="new_email" id="new_email" type="email">
					</div>
					<div class="form-group mb-3">
						<label class="form-label">Confirm new email</label>
						<input class="form-control" name="confirm_new_email" id="confirm_new_email" type="email">
					</div>
				</div>
			</div>
		</div>
		<!-- /row-->
		<p><a href="#0" class="btn btn_pink medium">Save</a></p>
	</div>
	<!-- /.container-fluid-->
</div>
<!-- /.container-wrapper-->

@section("endcontent")