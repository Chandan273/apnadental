@extends('admin.master')
@section("content")
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('/dashboard') }}">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Bookings</li>
		</ol>
		<!-- <div class="box_general">
			<div class="header_box">
				<h2 class="d-inline-block">Bookings List</h2>
				<div class="filter">
					<select name="orderby" class="selectbox">
						<option value="Any status">Any status</option>
						<option value="Approved">Approved</option>
						<option value="Pending">Pending</option>
						<option value="Cancelled">Cancelled</option>
					</select>
				</div>
			</div>
			<div class="list_general">
				<ul>
					<li>
						<figure><img src="{{ asset('public/assets/img/avatar1.jpg') }}" alt=""></figure>
						<h4>Enzo Ferrari <i class="pending">Pending</i></h4>
						<ul class="booking_details">
							<li><strong>Booking date</strong> 11 November 2017</li>
							<li><strong>Booking time</strong> 10.20AM</li>
							<li><strong>Visits</strong> Cardiology test, Diabetic diagnose</li>
							<li><strong>Telephone</strong> 0043 432324</li>
							<li><strong>Email</strong> user@email.com</li>
						</ul>
						<ul class="buttons">
							<li><a href="#0" class="btn_1 gray approve"><i class="fa fa-fw fa-check-circle-o"></i> Approve</a></li>
							<li><a href="#0" class="btn_1 gray delete"><i class="fa fa-fw fa-times-circle-o"></i> Cancel</a></li>
						</ul>
					</li>
					<li>
						<figure><img src="{{ asset('public/assets/img/avatar2.jpg') }}" alt=""></figure>
						<h4>Andrea Lomarco <i class="cancel">Cancel</i></h4>
						<ul class="booking_details">
							<li><strong>Booking date</strong> 11 November 2017</li>
							<li><strong>Booking time</strong> 10.20AM</li>
							<li><strong>Visits</strong> Cardiology test, Diabetic diagnose</li>
							<li><strong>Telephone</strong> 0043 432324</li>
							<li><strong>Email</strong> user@email.com</li>
						</ul>
						<ul class="buttons">
							<li><a href="#0" class="btn_1 gray approve"><i class="fa fa-fw fa-check-circle-o"></i> Approve</a></li>
							<li><a href="#0" class="btn_1 gray delete"><i class="fa fa-fw fa-times-circle-o"></i> Cancel</a></li>
						</ul>
					</li>
					<li>
						<figure><img src="{{ asset('public/assets/img/avatar3.jpg') }}" alt=""></figure>
						<h4>Marc Twain <i class="approved">Approved</i></h4>
						<ul class="booking_details">
							<li><strong>Booking date</strong> 11 November 2017</li>
							<li><strong>Booking time</strong> 10.20AM</li>
							<li><strong>Visits</strong> Cardiology test, Diabetic diagnose</li>
							<li><strong>Telephone</strong> 0043 432324</li>
							<li><strong>Email</strong> user@email.com</li>
						</ul>
						<ul class="buttons">
							<li><a href="#0" class="btn_1 gray approve"><i class="fa fa-fw fa-check-circle-o"></i> Approve</a></li>
							<li><a href="#0" class="btn_1 gray delete"><i class="fa fa-fw fa-times-circle-o"></i> Cancel</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div> -->

		<div class="box_general p-3">
			<div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
				<h4>All Booking</h4>
				{{-- <div>
					<select class="form-select" aria-label="Default select example">
						<option selected>All</option>
						<option value="approved">Approved</option>
						<option value="pending">Pending</option>
						<option value="cancelled">Cancelled</option>
					</select>
				</div> --}}
			</div>
			
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th scope="col">Booking ID</th>
							<th scope="col">Doctor/Clinic Name</th>
							<th scope="col">Patient Name</th>
							<th scope="col">Patient Email</th>
							<th scope="col">Patient Phone Number</th>
							<th scope="col">Selected Date</th>
							<th scope="col">Start Date</th>
							<th scope="col">End Date</th>
							<th scope="col">Treatment</th>
							<th scope="col">Notes</th>
							<th scope="col">Status</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($bookings as $booking)
						<tr>
							<td>{{ $booking->id }}</td>
							<td>{{ $booking->company_name }}</td>
							<td>{{ $booking->patient_name }}</td>
							<td>{{ $booking->patient_email }}</td>
							<td>{{ $booking->patient_phone_no }}</td>
							<td>{{ $booking->selected_date }}</td>
							<td>{{ $booking->start_time }}</td>
							<td>{{ $booking->end_time }}</td>
							<td>{{ $booking->opt_service }}</td>
							<td>{{ $booking->notes }}</td>
							<td>
								<div class="d-flex align-items-center gap-2 flex-nowrap">
								@if($booking->status == "approve")
									<button class="btn btn-sm btn-success d-flex align-items-center gap-1 flex-nowrap pe-3"><i class="fa fa-fw fa-check-circle-o"></i>Approve</button>
								@elseif($booking->status == "pending")
									<button class="btn btn-sm btn-info d-flex align-items-center gap-1 flex-nowrap pe-3"><i class="fa fa-fw fa-check-circle-o"></i>Pending</button>
								@else
									<button class="btn btn-sm btn-danger d-flex align-items-center gap-1 flex-nowrap pe-3"><i class="fa fa-fw fa-times-circle-o"></i>Cancel</button>
								@endif	
								</div>
							</td>
							<td>
								<select class="form-select form-select-sm w-auto" aria-label="Small select example">
									<option selected>Change Status</option>
									<option value="approved">Approved</option>
									<option value="pending">Pending</option>
									<option value="cancelled">Cancelled</option>
								</select>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<nav aria-label="...">
			<ul class="pagination pagination-sm add_bottom_30">
				<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1">Previous</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>


	</div>
	<!-- /container-fluid-->
</div>
<!-- /container-wrapper-->
@endsection("content")