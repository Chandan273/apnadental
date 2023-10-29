@extends('admin.master')
@section("content")

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Add Blog</li>
		</ol>

		<div class="box_general p-3">
			<h4 class="mb-3">Add Blog</h4>

			<div>
				@if (session('success'))
					<div class="alert alert-success" role="alert">
						{{ session('success') }}
					</div>
				@endif
			</div>

            <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label class="form-label" for="title">Blog Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
					@if ($errors->has('title'))
						<span class="text-danger">{{ $errors->first('title') }}</span>
					@endif
                </div>

                <div class="form-group mb-3">
                    <label class="form-label" for="blog_category_id">Assign Category</label>
                    <select class="form-control" id="blog_category_id" name="blog_category_id">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('blog_category_id'))
						<span class="text-danger">{{ $errors->first('blog_category_id') }}</span>
					@endif
                </div>

                <div class="form-group mb-3">
                    <label class="form-label" for="blog_image">Blog Image</label>
                    <input type="file" class="form-control-file" id="blog_image" name="blog_image" accept="image/*" required>
					@if ($errors->has('blog_image'))
						<span class="text-danger">{{ $errors->first('blog_image') }}</span>
					@endif
                </div>

                <div class="form-group mb-3">
					<label class="form-label" for="description">Blog Description</label>
					<textarea class="form-control" name="content" id="description" rows="5">{{ old('content') }}</textarea>
					@if ($errors->has('content'))
						<span class="text-danger">{{ $errors->first('content') }}</span>
					@endif
				</div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
		</div>
	</div>
</div>

@endsection