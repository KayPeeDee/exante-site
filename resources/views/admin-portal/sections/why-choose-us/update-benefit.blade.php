@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{route('benefits', $benefit->section_id)}}">Why Choose Us</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Benefit</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Benefit</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault();
                                                document.getElementById('delete-benefit-form').submit();">
                                    {{ __('Delete') }}
                            </a>

                            <form id="delete-benefit-form" action="{{ route('delete-benefit', [$benefit->section_id, $benefit->id]) }}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                        </div>

                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update-benefit', [$benefit->section_id, $benefit->id]) }}">
                        @method('PUT')
                        @csrf
                        <input  type="hidden" name="section_id" value="{{$benefit->section_id}}">

                        <div class="form-group">
                            <label for="title" class="col-form-label">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$benefit->title}}">
                        </div>

                        <div class="form-group">
                            <label for="slug" class="col-form-label">Slug:</label>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{$benefit->slug}}">
                        </div>

                        <div class="form-group">
                            <label for="icon" class="col-form-label">Icon:</label>
                            <input type="text" class="form-control" id="icon" name="icon" value="{{$benefit->icon}}">
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-form-label">Description:</label>
                            <textarea class="form-control" rows="4" id="description" name="description">{{$benefit->description}}</textarea>
                        </div>

                        <a href="{{route('benefits', $benefit->section_id)}}" class="btn btn-secondary mr-2">
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
@endsection
