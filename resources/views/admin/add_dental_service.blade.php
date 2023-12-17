@extends('admin.master')
@section("content")

<div class="content-wrapper">
	<div class="container-fluid">
		<!--Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Add Dental Service</li>
		</ol>

		<div class="box_general p-3">
			<h4 class="mb-3">Add Dental Service</h4>

			<div>
				@if (session('success'))
					<div class="alert alert-success" role="alert">
						{{ session('success') }}
					</div>
				@endif
			</div>

            <form method="POST" action="{{ route('dental.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label class="form-label" for="service_name">Dental Service Name</label>
                    <input type="text" class="form-control" id="service_name" name="service_name" value="{{ old('service_name') }}">
					@if ($errors->has('service_name'))
						<span class="text-danger">{{ $errors->first('service_name') }}</span>
					@endif
                </div>

                <div class="form-group mb-3">
                    <label class="form-label" for="image">Dental Service Image</label>
                    <input type="file" class="form-control form-control-file" id="image" name="image" accept="image/*">
					@if ($errors->has('image'))
						<span class="text-danger">{{ $errors->first('image') }}</span>
					@endif
                </div>

                <div class="form-group mb-3">
					<label class="form-label" for="description">Description</label>
					<textarea class="form-control" name="description" id="description" rows="5">{{ old('description') }}</textarea>
					@if ($errors->has('description'))
						<span class="text-danger">{{ $errors->first('description') }}</span>
					@endif
				</div>
                
                <button type="submit" class="btn btn_pink">Submit</button>
            </form>
		</div>
	</div>
</div>

@endsection