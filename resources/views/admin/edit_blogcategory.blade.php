@extends('admin.master')
@section("content")

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Edit Blog Category</li>
		</ol>

		<div class="box_general p-3">
			<h4 class="mb-3">Edit Blog Category</h4>

			<div>
				@if (session('success'))
					<div class="alert alert-success" role="alert">
						{{ session('success') }}
					</div>
				@endif
			</div>

			<form method="POST" action="{{ route('category.update', $category->id) }}">
                @csrf
                @method('PATCH')
                <div class="form-group mb-3">
                    <label  class="form-label"for="categoryname">Category Name</label>
                    <input type="name" name="name" class="form-control" id="categoryname" value="{{ $category->name }}">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            
                <div>
                    <button type="submit" class="btn btn_pink mb-2">Update</button>
                </div>
            </form>
		</div>

	</div>
</div>

@endsection