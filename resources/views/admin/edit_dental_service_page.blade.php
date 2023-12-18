@extends('admin.master')
@section("content")

<div class="content-wrapper">
	<div class="container-fluid">
		<!--Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Edit Dental Service Page</li>
		</ol>

		<div class="box_general p-3">
			<h4 class="mb-3">Edit Dental Service Page</h4>

			<div>
				@if (session('success'))
					<div class="alert alert-success" role="alert">
						{{ session('success') }}
					</div>
				@endif
			</div>

            <form method="POST" action="{{ route('dentalsPage.update', $dentalPage->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label class="form-label" for="page_title">Page Title</label>
                    <input type="text" class="form-control" id="page_title" name="page_title" value="{{ $dentalPage->page_title }}">
					@if ($errors->has('page_title'))
						<span class="text-danger">{{ $errors->first('page_title') }}</span>
					@endif
                </div>

				<div class="form-group mb-3">
                    <label class="form-label" for="page_title">Select Service</label>
					<select class="form-control" name="dental_service_id">
						@foreach($dentalServices as $dentalService)
							@php
                                $selected = ($dentalPage->dental_service_id == $dentalService->id) ? 'selected' : '';
                            @endphp
							<option value="{{ $dentalService->id }}" {{ $selected }}>{{ $dentalService->service_name }}</option>
						@endforeach
					</select>
				</div>

                <div class="form-group mb-3">
                    <label class="form-label" for="heading_one">Heading One</label>
                    <input type="text" class="form-control" id="heading_one" name="heading_one" value="{{ $dentalPage->heading_one }}">
					@if ($errors->has('heading_one'))
						<span class="text-danger">{{ $errors->first('heading_one') }}</span>
					@endif
                </div>

                <div class="form-group mb-3">
                    <label class="form-label" for="image">Image</label>
                    <p><strong>Selected Image: </strong> <img src="{{ asset('public/'.$dentalPage->image) }}" alt="dentalPage Image" width="30px"></p>
                    <input type="file" class="form-control form-control-file" id="image" name="image" accept="image/*">
					@if ($errors->has('image'))
						<span class="text-danger">{{ $errors->first('image') }}</span>
					@endif
                </div>

                <div class="form-group mb-3">
					<label class="form-label" for="description">Description</label>
					<textarea class="form-control" name="description" id="description" rows="5">{{ $dentalPage->description }}</textarea>
					@if ($errors->has('description'))
						<span class="text-danger">{{ $errors->first('description') }}</span>
					@endif
				</div>
                
                <div class="form-group mb-3">
                    <label class="form-label" for="heading_two">Heading 2</label>
                    <input type="text" class="form-control" name="heading_two" value="{{ $dentalPage->heading_two }}">
					@if ($errors->has('heading_two'))
						<span class="text-danger">{{ $errors->first('heading_two') }}</span>
					@endif
                </div>

                <div class="form-group mb-3">
					<label class="form-label" for="description_two">Description 2</label>
					<textarea class="form-control" name="description_two" rows="3">{{ $dentalPage->description_two }}</textarea>
					@if ($errors->has('description_two'))
						<span class="text-danger">{{ $errors->first('description_two') }}</span>
					@endif
				</div>
                
				<div class="form-group">
					<button type="button" class="btn-secondary btn-sm text-white p-1">Update Doctors
						<i class="fa fa-user-md" aria-hidden="true"></i>
					</button>
				</div>

                <div class="form-group">
                    <select class="selectpicker" multiple data-live-search="true" name="doctors[]">
                        @php
                            $selectedDoctors = json_decode($dentalPage->doctors, true) ?? [];
                        @endphp
                        @foreach($doctors as $doctor)
                            @php
                                $selected = in_array($doctor->id, $selectedDoctors) ? 'selected' : '';
                            @endphp
                            <option value="{{ $doctor->id }}" {{ $selected }}>
                                {{ $doctor->company_name }}
                            </option>
                        @endforeach
                    </select>
                </div>


				<div class="form-group">
					<button type="button" class="btn-secondary btn-sm text-white p-1">Update Clinics
						<i class="fa fa-hospital-o" aria-hidden="true"></i>
					</button>
				</div>

                <div class="form-group">
                    <select class="selectpicker" multiple data-live-search="true" name="clinics[]">
                        @php
                            $selectedClinics = json_decode($dentalPage->clinics, true) ?? [];
                        @endphp
                        @foreach($clinics as $clinic)
                            @php
                                $selected_clinic = in_array($clinic->id, $selectedClinics) ? 'selected' : '';
                            @endphp
                            <option value="{{ $clinic->id }}" {{ $selected_clinic }}>
                                {{ $clinic->company_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
				<div class="form-group">
					<button type="button" class="btn-secondary btn-sm toggle-faq-cls text-white p-1">Update FAQ
						<i class="fa fa-plus" aria-hidden="true"></i>
					</button>
				</div>

				<div class="form-group mb-3 show_faq">
                    <label class="form-label" for="faq_heading_one">Dropdown Heading 1</label>
                    <input type="text" class="form-control" name="faq_heading_one" value="{{ $dentalPage->faq_heading_one }}">
					@if ($errors->has('faq_heading_one'))
						<span class="text-danger">{{ $errors->first('faq_heading_one') }}</span>
					@endif
                </div>

                <div class="form-group mb-3 show_faq">
					<label class="form-label" for="faq_des_one">Dropdown Description 1</label>
					<textarea class="form-control" name="faq_des_one" rows="3">{{ $dentalPage->faq_des_one }}</textarea>
					@if ($errors->has('faq_des_one'))
						<span class="text-danger">{{ $errors->first('faq_des_one') }}</span>
					@endif
				</div>

				<div class="form-group mb-3 show_faq">
                    <label class="form-label" for="faq_heading_two">Dropdown Heading 2</label>
                    <input type="text" class="form-control" name="faq_heading_two" value="{{ $dentalPage->faq_heading_two }}">
					@if ($errors->has('faq_heading_two'))
						<span class="text-danger">{{ $errors->first('faq_heading_two') }}</span>
					@endif
                </div>

                <div class="form-group mb-3 show_faq">
					<label class="form-label" for="faq_des_two">Dropdown Description 2</label>
					<textarea class="form-control" name="faq_des_two" rows="3">{{ $dentalPage->faq_des_two }}</textarea>
					@if ($errors->has('faq_des_two'))
						<span class="text-danger">{{ $errors->first('faq_des_two') }}</span>
					@endif
				</div>

				<div class="form-group mb-3 show_faq">
                    <label class="form-label" for="faq_heading_three">Dropdown Heading 3</label>
                    <input type="text" class="form-control" name="faq_heading_three" value="{{ $dentalPage->faq_heading_three }}">
					@if ($errors->has('faq_heading_three'))
						<span class="text-danger">{{ $errors->first('faq_heading_three') }}</span>
					@endif
                </div>

                <div class="form-group mb-3 show_faq">
					<label class="form-label" for="faq_des_three">Dropdown Description 3</label>
					<textarea class="form-control" name="faq_des_three" rows="3">{{ $dentalPage->faq_des_three }}</textarea>
					@if ($errors->has('faq_des_three'))
						<span class="text-danger">{{ $errors->first('faq_des_three') }}</span>
					@endif
				</div>

				<div class="form-group mb-3 show_faq">
                    <label class="form-label" for="faq_heading_four">Dropdown Heading 4</label>
                    <input type="text" class="form-control" name="faq_heading_four" value="{{ $dentalPage->faq_heading_four }}">
					@if ($errors->has('faq_heading_four'))
						<span class="text-danger">{{ $errors->first('faq_heading_four') }}</span>
					@endif
                </div>

                <div class="form-group mb-3 show_faq">
					<label class="form-label" for="faq_des_four">Dropdown Description 4</label>
					<textarea class="form-control" name="faq_des_four" rows="3">{{ $dentalPage->faq_des_four }}</textarea>
					@if ($errors->has('faq_des_four'))
						<span class="text-danger">{{ $errors->first('faq_des_four') }}</span>
					@endif
				</div>

				<div class="form-group mb-3 show_faq">
                    <label class="form-label" for="faq_heading_five">Dropdown Heading 5</label>
                    <input type="text" class="form-control" name="faq_heading_five" value="{{ $dentalPage->faq_heading_five }}">
					@if ($errors->has('faq_heading_five'))
						<span class="text-danger">{{ $errors->first('faq_heading_five') }}</span>
					@endif
                </div>

                <div class="form-group mb-3 show_faq">
					<label class="form-label" for="faq_des_five">Dropdown Description 5</label>
					<textarea class="form-control" name="faq_des_five" rows="3">{{ $dentalPage->faq_des_five }}</textarea>
					@if ($errors->has('faq_des_five'))
						<span class="text-danger">{{ $errors->first('faq_des_five') }}</span>
					@endif
				</div>

                <button type="submit" class="btn btn_pink">Update</button>
            </form>
		</div>
	</div>
</div>

@endsection