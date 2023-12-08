@extends('admin.master')
@section("content")

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">All Service</li>
		</ol>

		<div>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div>
            @if (session('error'))
                <div class="alert alert-warning" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        </div>

		<div class="box_general p-3">
			<div class="row mb-3">
				<div class="col">
					<h4>Service List</h4>
				</div>
				<div class="col text-end">
					<a href="{{ route('services.add') }}" class="btn btn_pink">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add Service
                    </a>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th scope="col">#ID</th>
							<th scope="col">Service Name</th>
							<th scope="col">Created at</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($services as $service)
						<tr>
							<th scope="row">{{ $service->id }}</th>
							<td>{{ $service->service_name }}</td>
							<td>{{ $service->created_at->format('Y-m-d H:i:s') }}</td>
							<td>
								<div class="d-flex gap-2 flex-nowrap">
									<a href="{{ route('services.edit', $service->id) }}" class="btn btn-success btn-sm d-flex align-items-center gap-1 flex-nowrap">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit
                                    </a>                            
                                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $service->id }}">
                                        <button type="submit" class="btn btn-danger btn-sm d-flex align-items-center gap-1 flex-nowrap" onclick="return confirm('Are you sure you want to delete this service?');">
                                            <i class="fa fa-trash" aria-hidden="true"></i>Delete
                                        </button>
                                    </form>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="pagination">
                {{ $services->links() }}
            </div>
		</div>

	</div>
</div>

@endsection