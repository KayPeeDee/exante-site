@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{route('get-category', $project->category_id)}}">Project Category</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Project</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Project</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault();
                                                document.getElementById('delete-project-form').submit();">
                                    {{ __('Delete') }}
                            </a>

                            <form id="delete-project-form" action="{{ route('delete-project', [$project->category_id, $project->id]) }}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                        </div>

                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update-project', [$project->category_id, $project->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input  type="hidden" name="category_id" value="{{$project->category_id}}">

                        <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$project->name}}">
                        </div>


                        <div class="form-group">
                            <label for="details" class="col-form-label">Details:</label>
                            <textarea class="form-control" rows="4" id="details" name="details">{{$project->details}}</textarea>
                        </div>


                        <button type="submit" class="btn btn-success">
                            Save
                        </button>

                    </form>

                    <hr class="sidebar-divider">

                    <div class="mt-4">
                        <h6 class="mb-3">Project Image</h6>
                        <div class="mb-4">
                            <img src="{{ asset('images/'.$project->image) }}" class="mr-3" height="160px" >
                        </div>
                        <button class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#projectImageModal">
                            Upload Foreground Image
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="projectImageModal" tabindex="-1" role="dialog" aria-labelledby="projectImageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="projectImageModalLabel">Upload Background Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ route('update-project-image', [$project->category_id, $project->id]) }}"  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="image" class="col-form-label">Upload Project Image:</label>
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
