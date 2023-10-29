@extends('admin.master')
@section("content")

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">All Doctors</li>
		</ol>

		<div class="box_general p-3">
			<div class="row justify-start justify-content-sm-between mb-3">
				<div class="col-sm-auto">
					<h4>Doctors List</h4>
				</div>
				<div class="col-sm-auto">
					<div class="d-flex gap-3 justify-content-sm-end flex-wrap">
						<form action="">
							<div class="input-group flex-nowrap" role="search">
								<input type="search" class="form-control" placeholder="Search" aria-label="Search"
									aria-describedby="search-button-group">
								<button class="btn btn-outline-secondary" type="button"
									id="search-button-group">Search</button>
							</div>
						</form>

						<button type="button" class="btn btn-primary text-nowrap">
							<i class="fa fa-plus" aria-hidden="true"></i> Add Doctors
						</button>
					</div>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th scope="col">#ID</th>
							<th scope="col">Full Name</th>
							<th scope="col">Age</th>
							<th scope="col">Sex</th>
							<th scope="col">Service Id</th>
							<th scope="col">Company Name</th>
							<th scope="col">Description</th>
							<th scope="col">Type</th>
							<th scope="col">Main Category</th>
							<th scope="col">Secondary Category</th>
							<th scope="col">Email</th>
							<th scope="col">Phone Number</th>
							<th scope="col">Image</th>
							<th scope="col">Rating</th>
							<th scope="col">Rating Count</th>
							<th scope="col">Specialization</th>
							<th scope="col">Education</th>
							<th scope="col">Keyword</th>
							<th scope="col">Experience</th>
							<th scope="col">Website</th>
							<th scope="col">Location</th>
							<th scope="col">Latitude</th>
							<th scope="col">Longitude</th>
							<th scope="col">Locality</th>
							<th scope="col">City</th>
							<th scope="col">State</th>
							<th scope="col">ZIP Code</th>
							<th scope="col">Administrative area level</th>
							<th scope="col">Country</th>
							<th scope="col">Map Url</th>
							<th scope="col">Work Timings</th>
							<th scope="col">Fee</th>
							<th scope="col">Updated at</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Green Park</td>
							<td>52</td>
							<td>Male</td>
							<td>1</td>
							<td>Green Park Dental Clinic</td>
							<td>BDS, MDS - Orthodontics and Dentofacial Orthopaedi.</td>
							<td>Clinics</td>
							<td>Dental clinic</td>
							<td>Laser Dentistry</td>
							<td>info@webgriffe.com</td>
							<td>1141627777</td>
							<td>
								<img src="" alt="dr. profile">
							</td>
							<td>4.80</td>
							<td>654</td>
							<td>Clinics</td>
							<td>BDS, MDS - Orthodontics and Dentofacial Orthopaedi.</td>
							<td>dental clinic</td>
							<td>BDS, MDS - Orthodontics and Dentofacial Orthopaedi</td>
							<td>http://greenparkdental.com/</td>
							<td>H-4, Block H, Green Park Extension, Green Park, Ne...</td>
							<td>28.5598386</td>
							<td>77.205755</td>
							<td>New Delhi</td>
							<td>New Delhi</td>
							<td>Delhi</td>
							<td>110016</td>
							<td>Delhi</td>
							<td>India</td>
							<td>https://maps.google.com/?cid=7054724214066179536</td>
							<td>09AM-06:30PM</td>
							<td>$65</td>
							<td>01-11-023</td>

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

					</tbody>
				</table>
			</div>
		</div>

	</div>
</div>

@endsection