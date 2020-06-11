@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Home Section</li>
                </ol>
            </nav>

            @if ($home == null)
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Create Home Intro Section</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('create-home-details') }}" enctype="multipart/form-data">
                            @csrf
                            <input  type="hidden" name="section_id" value="{{$sectionId}}">

                            <div class="form-group">
                                <label for="title" class="col-form-label">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" >
                            </div>

                            <div class="form-group">
                                <label for="background_image" class="col-form-label">Upload Background Image:</label>
                                <input type="file" class="form-control" id="background_image" name="background_image" >
                            </div>

                            <div class="form-group">
                                <label for="main_image" class="col-form-label">Upload Foreground Image:</label>
                                <input type="file" class="form-control" id="main_image" name="main_image" >
                            </div>

                            <button type="submit" class="btn btn-success" data-dismiss="modal">
                                Save
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Home Section</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault();
                                                    document.getElementById('delete-home-form').submit();">
                                        {{ __('Delete') }}
                                </a>

                                <form id="delete-home-form" action="{{ route('delete-home-details', [$home->id]) }}" method="POST" style="display: none;">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('update-home-details', $home->id) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <input  type="hidden" name="section_id" value="{{$sectionId}}">

                            <div class="form-group">
                                <label for="title" class="col-form-label">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$home->title}}">
                            </div>

                            <button type="submit" class="btn btn-success">
                                Update
                            </button>

                        </form>

                        <hr class="sidebar-divider">

                        <div class="mt-4">
                            <h6>Background Image</h6>
                            <div class="mb-4">
                                <img src="{{ asset('images/'.$home->background_image) }}" class="mr-3" height="160px" >
                            </div>
                            <button class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#bgImageModal">
                                Upload Background Image
                            </button>

                        </div>

                        <hr class="sidebar-divider">

                        <div class="mt-4">
                            <h6 class="mb-3">Foreground Image</h6>
                            <div class="mb-4">
                                <img src="{{ asset('images/'.$home->main_image) }}" class="mr-3" height="160px" >
                            </div>
                            <button class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#fgImageModal">
                                Upload Foreground Image
                            </button>

                        </div>

                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<div class="modal fade" id="bgImageModal" tabindex="-1" role="dialog" aria-labelledby="bgImageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bgImageModalLabel">Upload Background Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ route('update-home-bg-image', [$home->id]) }}"  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="background_image" class="col-form-label">Upload Background Image:</label>
                    <input type="file" class="form-control" id="background_image" name="background_image">
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

<div class="modal fade" id="fgImageModal" tabindex="-1" role="dialog" aria-labelledby="fgImageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="fgImageModalLabel">Upload Foreground Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ route('update-home-fg-image', [$home->id]) }}"  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="main_image" class="col-form-label">Upload Foreground Image:</label>
                    <input type="file" class="form-control" id="main_image" name="main_image">
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
