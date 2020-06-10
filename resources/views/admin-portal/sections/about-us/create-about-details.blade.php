@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{route('about-us', $sectionId)}}">About Us Section</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add About Us Details</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Add About Us Details</h6>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('create-about-us', $sectionId) }}"  enctype="multipart/form-data">
                        @csrf
                        <input  type="hidden" name="section_id" value="{{$sectionId}}">

                        <div class="form-group">
                            <label for="title" class="col-form-label">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" >
                        </div>


                        <div class="form-group">
                            <label for="image" class="col-form-label">Upload Image:</label>
                            <input type="file" class="form-control" id="image" name="image" >
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-form-label">Description:</label>
                            <textarea class="form-control" rows="4" id="description" name="description"></textarea>
                        </div>

                        <a href="{{route('about-us', $sectionId)}}" class="btn btn-secondary mr-2">
                            Close
                        </a>

                        <button type="submit" class="btn btn-success">
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
