@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{route('project-categories', $category->section_id)}}">Project Categories</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Project Category</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Project Category</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#"
                               onclick="event.preventDefault();
                                             document.getElementById('delete-category-form').submit();">
                                {{ __('Delete') }}
                            </a>

                            <form id="delete-category-form" action="{{ route('delete-category', [$category->section_id, $category->id]) }}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update-category', $category->id) }}">
                        @method('PUT')
                        @csrf

                        <input  type="hidden" name="section_id" value="{{$category->section_id}}">


                        <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <select class="form-control" id="name" name="name">
                                <option selected value="{{$category->name}}">{{$category->name}}</option>
                                <option value="WEB">WEB</option>
                                <option value="APP">APP</option>
                                <option value="ENTERPRISE">ENTERPRISE</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="description" class="col-form-label">Description:</label>
                            <textarea class="form-control" rows="4" id="description" name="description">{{$category->description}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success" data-dismiss="modal">
                            Save
                        </button>
                    </form>
                </div>
            </div>

            <div class="card shadow">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                    <a href="{{route('create-project-page', $category->id)}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Add New Project</a>

                </div>

                <div class="list-group list-group-flush">
                    @if (count($category->projects) > 0)
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Details</th>
                                <th scope="col">Image</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($category->projects as $project)

                                    <tr>
                                        <th scope="row">
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="{{route('get-project', [$project->category_id, $project->id])}}">View</a>
                                                </div>
                                            </div>
                                        </th>
                                        <td>{{$project->name}}</td>
                                        <td>{{$project->details}}</td>
                                        <td>
                                            <img src="/images/{{$project->image}}" class="mr-3" height="64px" width="64px">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="list-group-item">
                            <div class="text-warning">There are no projects records for this category</div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
