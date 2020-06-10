@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Section</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit New Section</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault();
                                                document.getElementById('delete-section-form').submit();">
                                    {{ __('Delete') }}
                            </a>

                            <form id="delete-section-form" action="{{ route('delete-section', [$section->id]) }}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                        </div>

                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update-section', $section->id) }}">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="tag" value="{{$section->tag}}">

                        <div class="form-group">
                            <label for="title" class="col-form-label">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$section->title}}">
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Description:</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{$section->description}}">
                        </div>

                        <a href="{{route('get-sections')}}" class="btn btn-secondary mr-2">
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
