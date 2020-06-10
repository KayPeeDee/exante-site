@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{route('testimonials', $sectionId)}}">Testimonials</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Testimonial</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Testimonial</h6>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('create-testimonial', $sectionId) }}"  enctype="multipart/form-data">
                        @csrf
                        <input  type="hidden" name="section_id" value="{{$sectionId}}">

                        <div class="form-group">
                            <label for="full_name" class="col-form-label">Full Name:</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" >
                        </div>

                        <div class="form-group">
                            <label for="position" class="col-form-label">Position:</label>
                            <input type="text" class="form-control" id="position" name="position" >
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-form-label">Upload Profile Picture:</label>
                            <input type="file" class="form-control" id="image" name="image" >
                        </div>

                        <div class="form-group">
                            <label for="testimony" class="col-form-label">Testimonial:</label>
                            <textarea class="form-control" rows="4" id="testimony" name="testimony"></textarea>
                        </div>

                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-success">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
