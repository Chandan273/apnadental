@extends('admin.master')
@section("content")

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Add Service</li>
		</ol>

		<div class="box_general p-3">
			<h4 class="mb-3">Add Service</h4>

			<div>
				@if (session('success'))
					<div class="alert alert-success" role="alert">
						{{ session('success') }}
					</div>
				@endif
			</div>

			<form method="POST" action="{{ route('services.store') }}">
				@csrf
				<div class="form-group mb-3">
					<label class="form-label" for="servicename">Service Name</label>
					<input type="name" name="servicename" class="form-control" id="servicename" placeholder="Enter Service name" value="{{ old('servicename') }}">
					@if ($errors->has('servicename'))
						<span class="text-danger">{{ $errors->first('servicename') }}</span>
					@endif
				</div>

				<div class="form-group mb-3">
					<label class="form-label" for="description">Service Description</label>
					<textarea class="form-control" name="description" id="description" rows="10" value="{{ old('description') }}"></textarea>
					@if ($errors->has('description'))
						<span class="text-danger">{{ $errors->first('description') }}</span>
					@endif
				</div>
				<div>
					<button type="submit" class="btn btn-primary mb-2">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection