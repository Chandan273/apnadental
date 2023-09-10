@extends('admin.master')
@section("content")

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Edit Blog</li>
		</ol>

		<div class="box_general p-3">
			<h4 class="mb-3">Edit Blog</h4>

			<div class="card-body">
				@if (session('success'))
					<div class="alert alert-success" role="alert">
						{{ session('success') }}
					</div>
				@endif
			</div>

            <form method="POST" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Blog Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}">
					@if ($errors->has('title'))
						<span class="text-danger">{{ $errors->first('title') }}</span>
					@endif
                </div>

                <div class="form-group">
                    <label for="blog_category_id">Assign Category</label>
                    <select class="form-control" id="blog_category_id" name="blog_category_id">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $blog->blog_category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('blog_category_id'))
                        <span class="text-danger">{{ $errors->first('blog_category_id') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="content">Description</label>
                    <textarea class="form-control" name="content" id="content" rows="3">{{ $blog->content }}</textarea>
					@if ($errors->has('content'))
						<span class="text-danger">{{ $errors->first('content') }}</span>
					@endif
                </div>

                <div class="form-group">
                    <label for="blog_image">Blog Image</label>
                    <p><strong>Selected Image: </strong> {{ $blog->blog_image }}</p>
                    <input type="file" class="form-control-file" id="blog_image" name="blog_image" accept="image/*">
					@if ($errors->has('servicename'))
						<span class="text-danger">{{ $errors->first('blog_image') }}</span>
					@endif
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
		</div>
	</div>
</div>

@endsection