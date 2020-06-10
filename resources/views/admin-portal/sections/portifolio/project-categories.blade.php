@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Project Categories</li>
                </ol>
            </nav>

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Project Categories</h1>
                <a href="{{route('create-category-page', $sectionId)}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Add New Project Category</a>
            </div>
            <div class="card shadow mb-4">

                <div class="list-group list-group-flush">
                    @if (count($categories) > 0)
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)

                                    <tr>
                                        <th scope="row">
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="{{route('get-category', $category->id)}}">View</a>
                                                </div>
                                            </div>
                                        </th>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->description}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="list-group-item">
                            <div class="text-warning">There are no project categories records</div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
