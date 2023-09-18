@extends('admin.master')
@section("content")

<div class="content-wrapper">
	<div class="container-fluid">
		<!--Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Add Dental</li>
		</ol>

		<div class="box_general p-3">
			<h4 class="mb-3">Add Dental</h4>

			<div class="card-body">
				@if (session('success'))
					<div class="alert alert-success" role="alert">
						{{ session('success') }}
					</div>
				@endif
			</div>

            <form method="POST" action="{{ route('dental.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Dental Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
					@if ($errors->has('title'))
						<span class="text-danger">{{ $errors->first('title') }}</span>
					@endif
                </div>

                <div class="form-group">
                    <label for="dental_image">Dental Image</label>
                    <input type="file" class="form-control-file" id="dental_image" name="dental_image" accept="image/*" required>
					@if ($errors->has('dental_image'))
						<span class="text-danger">{{ $errors->first('dental_image') }}</span>
					@endif
                </div>

                <div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" name="description" id="description" rows="5">{{ old('description') }}</textarea>
					@if ($errors->has('description'))
						<span class="text-danger">{{ $errors->first('description') }}</span>
					@endif
				</div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
		</div>
	</div>
</div>

@endsection