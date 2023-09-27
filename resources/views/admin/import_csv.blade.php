@extends('admin.master')
@section("content")

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Import CSV</li>
		</ol>

		<div class="box_general p-3">
			<h4 class="mb-3">Import CSV</h4>

			<div>
				@if (session('success'))
					<div class="alert alert-success" role="alert">
						{{ session('success') }}
					</div>
				@endif
			</div>

			<form method="POST" action="{{ route('import.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="file" name="csv_file" accept=".csv">
                <button type="submit">Import CSV</button>
            </form>
		</div>

	</div>
</div>

@endsection