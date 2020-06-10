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
                        <input  type="hidden" name="category_id" value="{{$project->category_id}}">

                        <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$project->name}}">
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-form-label">Upload Image:</label>
                            <input type="file" class="form-control" id="image" name="image" value="{{$project->image}}">
                        </div>

                        <div class="form-group">
                            <label for="details" class="col-form-label">Details:</label>
                            <textarea class="form-control" rows="4" id="details" name="details"></textarea>
                        </div>


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
