@extends('admin.master')
@section("content")

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">All Dental Services</li>
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
                    <h4>All Pages List</h4>
                </div>
                <div class="col text-end">
                    <a href="{{ route('dentalPage.create') }}" class="btn btn_pink">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Service Page
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Page Name</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dentalPages as $dentalPage)
                        <tr>
                            <th scope="row">{{ $dentalPage->id }}</th>
                            <td>{{ $dentalPage->page_title }}</td>
                            <td>{{ $dentalPage->created_at->format('Y-m-d H:i:s') }}</td>
                            <td>
                                <a href="{{ route('dentalsPage.edit', $dentalPage->id) }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </a>                            
                                <form action="{{ route('dentalsPage.destroy', $dentalPage->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="image_filename" value="{{ $dentalPage->image }}">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Dental Service and its image?');">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
