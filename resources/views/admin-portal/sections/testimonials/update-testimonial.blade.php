@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{route('testimonials', $testimonial->section_id)}}">Testimonials</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Testimonial</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Testimonial</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault();
                                                document.getElementById('delete-testimonial-form').submit();">
                                    {{ __('Delete') }}
                            </a>

                            <form id="delete-testimonial-form" action="{{ route('delete-testimonial', [$testimonial->section_id, $testimonial->id]) }}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                        </div>

                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update-testimonial', [$testimonial->section_id, $testimonial->id]) }}"  enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input  type="hidden" name="section_id" value="{{$testimonial->section_id}}">

                        <div class="form-group">
                            <label for="full_name" class="col-form-label">Full Name:</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{$testimonial->full_name}}">
                        </div>

                        <div class="form-group">
                            <label for="position" class="col-form-label">Position:</label>
                            <input type="text" class="form-control" id="position" name="position" value="{{$testimonial->position}}">
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-form-label">Upload Profile Picture:</label>
                            <input type="file" class="form-control" id="image" name="image" value="{{$testimonial->image}}">
                        </div>

                        <div class="form-group">
                            <label for="testimony" class="col-form-label">Testimonial:</label>
                            <input type="text" class="form-control" id="testimony" name="testimony" value="{{$testimonial->testimony}}">
                        </div>

                        <button type="submit" class="btn btn-success">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
