@extends('admin.master')
@section("content")

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">All Doctors Records</li>
        </ol>

        <div class="box_general p-3">
            <div class="row mb-3">
                <div class="col">
                    <h4>Doctor List</h4>
                </div>
                <div class="col text-end">
                    <a href="{{ url('/admin/add-category') }}" class="btn btn-primary">
                        <i class="fa fa-plus" aria-hidden="true"></i> Import CSV
                    </a>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Company Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Education</th>
                        <th scope="col">Specialization</th>
                        <th scope="col">Location</th>
                        <th scope="col">City</th>
                        <th scope="col">Created at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctors as $doctor)
                        <tr>
                            <td>{{ $doctor->company_name }}</td>
                            <td>{{ $doctor->type }}</td>
                            <td>{{ $doctor->email_1 }}</td>
                            <td>{{ $doctor->phone }}</td>
                            <td>{{ $doctor->education }}</td>
                            <td>{{ $doctor->specialization }}</td>
                            <td>{{ $doctor->location }}</td>
                            <td>{{ $doctor->city }}</td>
                            <td>{{ $doctor->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            <div class="pagination">
                {{ $doctors->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
