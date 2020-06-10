@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Page Sections</h1>
            <a href="{{route('create-section-page')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Add New Section</a>
            </div>
            <div class="card shadow mb-4">
                <div class="list-group list-group-flush">
                    @if (count($sections) > 0)
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Tag</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($sections as $section)
                                    <tr>
                                        <th scope="row">
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="{{route('get-section-by-tag', $section->tag)}}">View</a>
                                                    <a class="dropdown-item" href="{{route('get-section-by-id', $section->id)}}">Update</a>

                                                </div>
                                            </div>
                                        </th>
                                        <td>{{$section->title}}</td>
                                        <td>{{$section->description}}</td>
                                        <td>{{$section->tag}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="list-group-item">
                            <div>There are no section records</div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
