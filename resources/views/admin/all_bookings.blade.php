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
				<div>
					<select class="form-select" aria-label="Default select example">
						<option selected>All</option>
						<option value="approved">Approved</option>
						<option value="pending">Pending</option>
						<option value="cancelled">Cancelled</option>
					</select>
				</div>
			</div>
			
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">User ID</th>
							<th scope="col">doctor_id</th>
							<th scope="col">selected_date</th>
							<th scope="col">start_time</th>
							<th scope="col">end_time</th>
							<th scope="col">opt_service</th>
							<th scope="col">notes</th>
							<th scope="col">Created at</th>
							<th scope="col">updated_at</th>
							<th scope="col">Status</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>12</td>
							<td>23</td>
							<td>2023-11-03</td>
							<td>09:00:00</td>
							<td>10:00:00</td>
							<td>Root canal (RCT)</td>
							<td>Lorem ipsum dolor sit amet.</td>
							<td>2023-11-03 18:36:30</td>
							<td>2023-11-03 18:36:30</td>
							<td>
								<select class="form-select form-select-sm w-auto rounded-pill" aria-label="Small select example">
									<option selected>Change Status</option>
									<option value="approved">Approved</option>
									<option value="pending">Pending</option>
									<option value="cancelled">Cancelled</option>
								</select>
							</td>
							<td>
								<div class="d-flex align-items-center gap-2 flex-nowrap">
									<button class="btn btn-sm btn-success rounded-pill d-flex align-items-center gap-1 flex-nowrap pe-3"><i
											class="fa fa-fw fa-check-circle-o"></i>Approve</button>
									<button class="btn btn-sm btn-danger rounded-pill d-flex align-items-center gap-1 flex-nowrap pe-3"><i
											class="fa fa-fw fa-times-circle-o"></i>Cancel</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>1</td>
							<td>12</td>
							<td>23</td>
							<td>2023-11-03</td>
							<td>09:00:00</td>
							<td>10:00:00</td>
							<td>Root canal (RCT)</td>
							<td>Lorem ipsum dolor sit amet.</td>
							<td>2023-11-03 18:36:30</td>
							<td>2023-11-03 18:36:30</td>
							<td>
								<select class="form-select form-select-sm w-auto rounded-pill" aria-label="Small select example">
									<option selected>Change Status</option>
									<option value="approved">Approved</option>
									<option value="pending">Pending</option>
									<option value="cancelled">Cancelled</option>
								</select>
							</td>
							<td>
								<div class="d-flex align-items-center gap-2 flex-nowrap">
									<button class="btn btn-sm btn-success rounded-pill d-flex align-items-center gap-1 flex-nowrap pe-3"><i
											class="fa fa-fw fa-check-circle-o"></i>Approve</button>
									<button class="btn btn-sm btn-danger rounded-pill d-flex align-items-center gap-1 flex-nowrap pe-3"><i
											class="fa fa-fw fa-times-circle-o"></i>Cancel</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>1</td>
							<td>12</td>
							<td>23</td>
							<td>2023-11-03</td>
							<td>09:00:00</td>
							<td>10:00:00</td>
							<td>Root canal (RCT)</td>
							<td>Lorem ipsum dolor sit amet.</td>
							<td>2023-11-03 18:36:30</td>
							<td>2023-11-03 18:36:30</td>
							<td>
								<select class="form-select form-select-sm w-auto rounded-pill" aria-label="Small select example">
									<option selected>Change Status</option>
									<option value="approved">Approved</option>
									<option value="pending">Pending</option>
									<option value="cancelled">Cancelled</option>
								</select>
							</td>
							<td>
								<div class="d-flex align-items-center gap-2 flex-nowrap">
									<button class="btn btn-sm btn-success rounded-pill d-flex align-items-center gap-1 flex-nowrap pe-3"><i
											class="fa fa-fw fa-check-circle-o"></i>Approve</button>
									<button class="btn btn-sm btn-danger rounded-pill d-flex align-items-center gap-1 flex-nowrap pe-3"><i
											class="fa fa-fw fa-times-circle-o"></i>Cancel</button>
								</div>
							</td>
						</tr>
						<tr>
							<td>1</td>
							<td>12</td>
							<td>23</td>
							<td>2023-11-03</td>
							<td>09:00:00</td>
							<td>10:00:00</td>
							<td>Root canal (RCT)</td>
							<td>Lorem ipsum dolor sit amet.</td>
							<td>2023-11-03 18:36:30</td>
							<td>2023-11-03 18:36:30</td>
							<td>
								<select class="form-select form-select-sm w-auto rounded-pill" aria-label="Small select example">
									<option selected>Change Status</option>
									<option value="approved">Approved</option>
									<option value="pending">Pending</option>
									<option value="cancelled">Cancelled</option>
								</select>
							</td>
							<td>
								<div class="d-flex align-items-center gap-2 flex-nowrap">
									<button class="btn btn-sm btn-success rounded-pill d-flex align-items-center gap-1 flex-nowrap pe-3"><i
											class="fa fa-fw fa-check-circle-o"></i>Approve</button>
									<button class="btn btn-sm btn-danger rounded-pill d-flex align-items-center gap-1 flex-nowrap pe-3"><i
											class="fa fa-fw fa-times-circle-o"></i>Cancel</button>
								</div>
							</td>
						</tr>
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