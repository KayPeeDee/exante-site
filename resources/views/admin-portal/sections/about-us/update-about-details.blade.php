@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{route('about-us', $aboutUs->section_id)}}">About Us Section</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit About Us Details</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit About Us Details</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault();
                                                document.getElementById('delete-about-form').submit();">
                                    {{ __('Delete') }}
                            </a>

                            <form id="delete-about-form" action="{{ route('delete-about-us', [$aboutUs->section_id, $aboutUs->id]) }}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                        </div>

                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="/images/{{$aboutUs->image}}" class="mr-3" height="160px" width="160px" >
                            <button class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal">
                                Upload Image
                            </button>

                        </div>
                        <div class="col-md-9">
                            <form method="POST" action="{{ route('update-about-us', [$aboutUs->section_id, $aboutUs->id]) }}"  enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <input  type="hidden" name="section_id" value="{{$aboutUs->section_id}}">

                                <div class="form-group">
                                    <label for="title" class="col-form-label">Title:</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$aboutUs->title}}">
                                </div>




                                <div class="form-group">
                                    <label for="description" class="col-form-label">Description:</label>
                                    <textarea class="form-control" rows="4" id="description" name="description">{{$aboutUs->description}}</textarea>
                                </div>

                                <a href="{{route('about-us', $aboutUs->section_id)}}" class="btn btn-secondary mr-2">
                                    Close
                                </a>


                                <button type="submit" class="btn btn-success">
                                    Update
                                </button>
                            </form>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>




  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ route('update-about-us-image', [$aboutUs->section_id, $aboutUs->id]) }}"  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="image" class="col-form-label">Upload Image:</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection
