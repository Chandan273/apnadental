@extends('admin.master')
@section("content")

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Doctor Details</li>
		</ol>

		<div class="box_general p-3">
			<div class="row mb-3">
				<div class="col">
					<h4>Doctor Details</h4>
				</div>
				<div class="col text-end">
					<button type="button" class="btn btn-primary">
						<i class="fa fa-plus" aria-hidden="true"></i> Add Doctors
					</button>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th scope="col">#ID</th>
							<th scope="col">Doctor Name</th>
							<th scope="col">Created at</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Periodontics</td>
							<td>2023-08-24</td>
							<td>
								<div class="d-flex gap-2 flex-nowrap">
									<button type="button" class="btn btn-primary btn-sm">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</button>
									<button type="button" class="btn btn-success btn-sm mx-1">
										<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
									</button>
									<button type="button" class="btn btn-danger btn-sm">
										<i class="fa fa-trash" aria-hidden="true"></i>
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Orthodontics</td>
							<td>2023-08-24 07:43:08
							</td>
							<td>
								<div class="d-flex gap-2 flex-nowrap">
									<button type="button" class="btn btn-primary btn-sm">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</button>
									<button type="button" class="btn btn-success btn-sm mx-1">
										<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
									</button>
									<button type="button" class="btn btn-danger btn-sm">
										<i class="fa fa-trash" aria-hidden="true"></i>
									</button>
								</div>
							</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Implantology</td>
							<td>2023-08-24 07:43:08
							</td>
							<td>
								<button type="button" class="btn btn-primary btn-sm">
									<i class="fa fa-eye" aria-hidden="true"></i>
								</button>
								<button type="button" class="btn btn-success btn-sm mx-1">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								</button>
								<button type="button" class="btn btn-danger btn-sm">
									<i class="fa fa-trash" aria-hidden="true"></i>
								</button>

							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

	</div>
</div>

@endsection