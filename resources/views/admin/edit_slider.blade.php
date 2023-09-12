@extends('admin.master')
@section("content")

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Edit Slider</li>
		</ol>

		<div class="box_general p-3">
			<h4 class="mb-3">Edit Slider</h4>

			<div class="card-body">
				@if (session('success'))
					<div class="alert alert-success" role="alert">
						{{ session('success') }}
					</div>
				@endif
			</div>

            <form method="POST" action="{{ route('sliders.update', $slider->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Heading</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $slider->title }}">
					@if ($errors->has('title'))
						<span class="text-danger">{{ $errors->first('title') }}</span>
					@endif
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3">{{ $slider->description }}</textarea>
					@if ($errors->has('description'))
						<span class="text-danger">{{ $errors->first('description') }}</span>
					@endif
                </div>

                <div class="form-group">
                    <label for="slider_image">Slider Image</label>
                    <p><strong>Selected Image: </strong> {{ $slider->slider_image }}</p>
                    <input type="file" class="form-control-file" id="slider_image" name="slider_image" accept="image/*">
					@if ($errors->has('slider_image'))
						<span class="text-danger">{{ $errors->first('slider_image') }}</span>
					@endif
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
		</div>
	</div>
</div>

@endsection