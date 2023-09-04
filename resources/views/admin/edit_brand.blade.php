@extends('admin.master')
@section("content")

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Edit Brand</li>
		</ol>

		<div class="box_general p-3">
			<h4 class="mb-3">Edit Brand</h4>

			<div class="card-body">
				@if (session('success'))
					<div class="alert alert-success" role="alert">
						{{ session('success') }}
					</div>
				@endif
			</div>

            <form method="POST" action="{{ route('brands.update', $brand->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="brand_name">Brand Name</label>
                    <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{ $brand->brand_name }}">
					@if ($errors->has('servicename'))
						<span class="text-danger">{{ $errors->first('brand_name') }}</span>
					@endif
                </div>

                <div class="form-group">
                    <label for="brand_image">Brand Image</label>
                    <input type="file" class="form-control-file" id="brand_image" name="brand_image" accept="image/*">
					@if ($errors->has('servicename'))
						<span class="text-danger">{{ $errors->first('brand_image') }}</span>
					@endif
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
		</div>
	</div>
</div>

@endsection