@extends('admin.master')
@section("content")

<div class="content-wrapper">
	<div class="container-fluid">
		<!--Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Add Dental Service Page</li>
		</ol>

		<div class="box_general p-3">
			<h4 class="mb-3">Add Dental Service Page</h4>

			<div>
				@if (session('success'))
					<div class="alert alert-success" role="alert">
						{{ session('success') }}
					</div>
				@endif
			</div>

            <form method="POST" action="{{ route('dentalPage.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label class="form-label" for="heading_one">Heading 1</label>
                    <input type="text" class="form-control" id="heading_one" name="heading_one" value="{{ old('heading_one') }}">
					@if ($errors->has('heading_one'))
						<span class="text-danger">{{ $errors->first('heading_one') }}</span>
					@endif
                </div>

                <div class="form-group mb-3">
                    <label class="form-label" for="image">Service Image</label>
                    <input type="file" class="form-control form-control-file" id="image" name="image" accept="image/*">
					@if ($errors->has('image'))
						<span class="text-danger">{{ $errors->first('image') }}</span>
					@endif
                </div>

                <div class="form-group mb-3">
					<label class="form-label" for="description">Description</label>
					<textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>
					@if ($errors->has('description'))
						<span class="text-danger">{{ $errors->first('description') }}</span>
					@endif
				</div>

				<div class="form-group mb-3">
                    <label class="form-label" for="heading_two">Heading 2</label>
                    <input type="text" class="form-control" id="heading_two" name="heading_two" value="{{ old('heading_two') }}">
					@if ($errors->has('heading_two'))
						<span class="text-danger">{{ $errors->first('heading_two') }}</span>
					@endif
                </div>

                <div class="form-group mb-3">
					<label class="form-label" for="description_two">Description 2</label>
					<textarea class="form-control" name="description_two" id="description_two" rows="3">{{ old('description_two') }}</textarea>
					@if ($errors->has('description_two'))
						<span class="text-danger">{{ $errors->first('description_two') }}</span>
					@endif
				</div>

				<div class="form-group mb-3">
                    <label class="form-label" for="heading_one">Doctor Heading</label>
                    <input type="text" class="form-control" id="heading_one" name="heading_one" value="{{ old('heading_one') }}">
					@if ($errors->has('heading_one'))
						<span class="text-danger">{{ $errors->first('heading_one') }}</span>
					@endif
                </div>

				<div class="form-group">
					<label><strong>Select Doctors :</strong></label><br/>
					<select class="selectpicker" multiple data-live-search="true" name="doctors[]">
						@foreach($doctors as $doctor)
						<option value="{{ $doctor->id }}">{{ $doctor->company_name }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label><strong>Select Clinics :</strong></label><br/>
					<select class="selectpicker" multiple data-live-search="true" name="clinics[]">
						@foreach($clinics as $clinic)
						<option value="{{ $clinic->id }}">{{ $clinic->company_name }}</option>
						@endforeach
					</select>
				</div>
                
                <button type="submit" class="btn btn_pink">Submit</button>
            </form>
		</div>
	</div>
</div>

@endsection