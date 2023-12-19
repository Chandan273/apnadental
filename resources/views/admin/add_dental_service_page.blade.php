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
                    <label class="form-label" for="page_title">Page Title</label>
                    <input type="text" class="form-control" name="page_title" value="{{ old('page_title') }}">
					@if ($errors->has('page_title'))
						<span class="text-danger">{{ $errors->first('page_title') }}</span>
					@endif
                </div>

				<div class="form-group mb-3">
                    <label class="form-label" for="page_title">Select Service</label>
					<select class="form-control" name="dental_service_id" aria-label="Default select example">
						@foreach($dentalServices as $dentalService)
							<option value="{{ $dentalService->id }}">{{ $dentalService->service_name }}</option>
						@endforeach
					</select>
				</div>

                <div class="form-group mb-3">
                    <label class="form-label" for="heading_one">Heading 1</label>
                    <input type="text" class="form-control" name="heading_one" value="{{ old('heading_one') }}">
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
                    <input type="text" class="form-control" name="heading_two" value="{{ old('heading_two') }}">
					@if ($errors->has('heading_two'))
						<span class="text-danger">{{ $errors->first('heading_two') }}</span>
					@endif
                </div>

                <div class="form-group mb-3">
					<label class="form-label" for="description_two">Description 2</label>
					<textarea class="form-control" id="description_two" name="description_two" rows="3">{{ old('description_two') }}</textarea>
					@if ($errors->has('description_two'))
						<span class="text-danger">{{ $errors->first('description_two') }}</span>
					@endif
				</div>

				<div class="form-group mb-3">
                    <label class="form-label" for="heading_three">Heading 3</label>
                    <input type="text" class="form-control" name="heading_three" value="{{ old('heading_three') }}">
					@if ($errors->has('heading_three'))
						<span class="text-danger">{{ $errors->first('heading_three') }}</span>
					@endif
                </div>

                <div class="form-group mb-3">
					<label class="form-label" for="description_three">Description 3</label>
					<textarea class="form-control" id="description_three" name="description_three" rows="3">{{ old('description_three') }}</textarea>
					@if ($errors->has('description_three'))
						<span class="text-danger">{{ $errors->first('description_three') }}</span>
					@endif
				</div>

				<div class="form-group mb-3">
                    <label class="form-label" for="heading_four">Heading 4</label>
                    <input type="text" class="form-control" name="heading_four" value="{{ old('heading_four') }}">
					@if ($errors->has('heading_four'))
						<span class="text-danger">{{ $errors->first('heading_four') }}</span>
					@endif
                </div>

                <div class="form-group mb-3">
					<label class="form-label" for="description_four">Description 4</label>
					<textarea class="form-control" id="description_four" name="description_four" rows="3">{{ old('description_four') }}</textarea>
					@if ($errors->has('description_four'))
						<span class="text-danger">{{ $errors->first('description_four') }}</span>
					@endif
				</div>

				<div class="form-group mb-3">
                    <label class="form-label" for="heading_five">Heading 5</label>
                    <input type="text" class="form-control" name="heading_five" value="{{ old('heading_five') }}">
					@if ($errors->has('heading_five'))
						<span class="text-danger">{{ $errors->first('heading_five') }}</span>
					@endif
                </div>

                <div class="form-group mb-3">
					<label class="form-label" for="description_five">Description 5</label>
					<textarea class="form-control" id="description_five" name="description_five" rows="3">{{ old('description_five') }}</textarea>
					@if ($errors->has('description_five'))
						<span class="text-danger">{{ $errors->first('description_five') }}</span>
					@endif
				</div>

				<div class="form-group">
					<button type="button" class="btn-secondary btn-sm text-white p-1">Select Doctors
						<i class="fa fa-user-md" aria-hidden="true"></i>
					</button>
				</div>

				<div class="form-group">
					<select class="selectpicker" multiple data-live-search="true" name="doctors[]">
						@foreach($doctors as $doctor)
						<option value="{{ $doctor->id }}">{{ $doctor->company_name }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<button type="button" class="btn-secondary btn-sm text-white p-1">Select Clinics
						<i class="fa fa-hospital-o" aria-hidden="true"></i>
					</button>
				</div>

				<div class="form-group">
					<select class="selectpicker" multiple data-live-search="true" name="clinics[]">
						@foreach($clinics as $clinic)
						<option value="{{ $clinic->id }}">{{ $clinic->company_name }}</option>
						@endforeach
					</select>
				</div>
                
				<div class="form-group">
					<button type="button" class="btn-secondary btn-sm toggle-faq-cls text-white p-1">Add FAQ
						<i class="fa fa-plus" aria-hidden="true"></i>
					</button>
				</div>

				<div class="form-group mb-3 show_faq">
                    <label class="form-label" for="faq_heading_one">Dropdown Heading 1</label>
                    <input type="text" class="form-control" name="faq_heading_one" value="{{ old('faq_heading_one') }}">
					@if ($errors->has('faq_heading_one'))
						<span class="text-danger">{{ $errors->first('faq_heading_one') }}</span>
					@endif
                </div>

                <div class="form-group mb-3 show_faq">
					<label class="form-label" for="faq_des_one">Dropdown Description 1</label>
					<textarea class="form-control" name="faq_des_one" rows="3">{{ old('faq_des_one') }}</textarea>
					@if ($errors->has('faq_des_one'))
						<span class="text-danger">{{ $errors->first('faq_des_one') }}</span>
					@endif
				</div>

				<div class="form-group mb-3 show_faq">
                    <label class="form-label" for="faq_heading_two">Dropdown Heading 2</label>
                    <input type="text" class="form-control" name="faq_heading_two" value="{{ old('faq_heading_two') }}">
					@if ($errors->has('faq_heading_two'))
						<span class="text-danger">{{ $errors->first('faq_heading_two') }}</span>
					@endif
                </div>

                <div class="form-group mb-3 show_faq">
					<label class="form-label" for="faq_des_two">Dropdown Description 2</label>
					<textarea class="form-control" name="faq_des_two" rows="3">{{ old('faq_des_two') }}</textarea>
					@if ($errors->has('faq_des_two'))
						<span class="text-danger">{{ $errors->first('faq_des_two') }}</span>
					@endif
				</div>

				<div class="form-group mb-3 show_faq">
                    <label class="form-label" for="faq_heading_three">Dropdown Heading 3</label>
                    <input type="text" class="form-control" name="faq_heading_three" value="{{old('faq_heading_three')}}">
					@if ($errors->has('faq_heading_three'))
						<span class="text-danger">{{ $errors->first('faq_heading_three') }}</span>
					@endif
                </div>

                <div class="form-group mb-3 show_faq">
					<label class="form-label" for="faq_des_three">Dropdown Description 3</label>
					<textarea class="form-control" name="faq_des_three" rows="3">{{ old('faq_des_three') }}</textarea>
					@if ($errors->has('faq_des_three'))
						<span class="text-danger">{{ $errors->first('faq_des_three') }}</span>
					@endif
				</div>

				<div class="form-group mb-3 show_faq">
                    <label class="form-label" for="faq_heading_four">Dropdown Heading 4</label>
                    <input type="text" class="form-control" name="faq_heading_four" value="{{ old('faq_heading_four') }}">
					@if ($errors->has('faq_heading_four'))
						<span class="text-danger">{{ $errors->first('faq_heading_four') }}</span>
					@endif
                </div>

                <div class="form-group mb-3 show_faq">
					<label class="form-label" for="faq_des_four">Dropdown Description 4</label>
					<textarea class="form-control" name="faq_des_four" rows="3">{{ old('faq_des_four') }}</textarea>
					@if ($errors->has('faq_des_four'))
						<span class="text-danger">{{ $errors->first('faq_des_four') }}</span>
					@endif
				</div>

				<div class="form-group mb-3 show_faq">
                    <label class="form-label" for="faq_heading_five">Dropdown Heading 5</label>
                    <input type="text" class="form-control" name="faq_heading_five" value="{{ old('faq_heading_five') }}">
					@if ($errors->has('faq_heading_five'))
						<span class="text-danger">{{ $errors->first('faq_heading_five') }}</span>
					@endif
                </div>

                <div class="form-group mb-3 show_faq">
					<label class="form-label" for="faq_des_five">Dropdown Description 5</label>
					<textarea class="form-control" name="faq_des_five" rows="3">{{ old('faq_des_five') }}</textarea>
					@if ($errors->has('faq_des_five'))
						<span class="text-danger">{{ $errors->first('faq_des_five') }}</span>
					@endif
				</div>

                <button type="submit" class="btn btn_pink">Publish</button>
            </form>
		</div>
	</div>
</div>

@endsection