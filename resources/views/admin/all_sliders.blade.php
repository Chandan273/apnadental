@extends('admin.master')
@section("content")

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">All Sliders</li>
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
                    <h4>sliders List</h4>
                </div>
                <div class="col text-right">
                    <a href="{{ route('slider.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add Sliders
                    </a>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Description</th>
                        <th scope="col">Slider Image</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sliders as $slider)
                    <tr>
                        <th scope="row">{{ $slider->id }}</th>
                        <td>{{ $slider->title }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($slider->description, 50, '...') }}</td>
                        <td>
                            <img src="{{ asset('public/'.$slider->slider_image) }}" alt="slider Image" width="75px">
                        </td>
                        <td>{{ $slider->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>
                            <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-success btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </a>                            
                            <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="image_filename" value="{{ $slider->slider_image }}">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this slider and its image?');">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="pagination">
                {{ $sliders->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
