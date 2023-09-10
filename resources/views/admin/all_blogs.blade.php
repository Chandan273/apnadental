@extends('admin.master')
@section("content")

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">All Blogs</li>
        </ol>

        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div class="card-body">
            @if (session('error'))
                <div class="alert alert-warning" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        </div>

        <div class="box_general p-3">
            <div class="row mb-3">
                <div class="col">
                    <h4>Blogs List</h4>
                </div>
                <div class="col text-right">
                    <a href="/add-blog" class="btn btn-primary">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add Blogs
                    </a>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Blog Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Blog Image</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                        <th scope="row">{{ $blog->id }}</th>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->category->name }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($blog->content, 50, '...') }}</td>
                        <td>
                            <img src="{{ asset('public/'.$blog->blog_image) }}" alt="blog Image" width="30px">
                        </td>
                        <td>{{ $blog->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>
                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-success btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </a>                            
                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="image_filename" value="{{ $blog->blog_image }}">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this blog and its image?');">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="pagination">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
