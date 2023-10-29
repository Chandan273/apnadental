@extends('admin.master')
@section("content")

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Add Blog Category</li>
		</ol>

		<div class="box_general p-3">
			<h4 class="mb-3">Add Blog Category</h4>

			<div>
				@if (session('success'))
					<div class="alert alert-success" role="alert">
						{{ session('success') }}
					</div>
				@endif
			</div>

			<form method="POST" action="{{ route('category.store') }}">
				@csrf
				<div class="form-group mb-3">
					<label class="form-label" for="categoryname">Category Name</label>
					<input type="name" name="name" class="form-control" id="categoryname" placeholder="Enter category name" value="{{ old('name') }}">
					@if ($errors->has('name'))
						<span class="text-danger">{{ $errors->first('name') }}</span>
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