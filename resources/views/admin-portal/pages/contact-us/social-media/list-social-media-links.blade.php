@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Social Media Links</h1>
                <a href="{{route('add-social-media-link-page')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Add Social Media Link</a>
            </div>
            <div class="card shadow mb-4">

                <div class="list-group list-group-flush">
                    @if (count($socialMediaLinks) > 0)
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Link</th>
                                <th scope="col">Image</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($socialMediaLinks as $socialMediaLink)

                                    <tr>
                                        <th scope="row">
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="{{route('social-media-link-detail', [$socialMediaLink->id])}}">Update</a>
                                                </div>
                                            </div>
                                        </th>
                                        <td>{{$socialMediaLink->name}}</td>
                                        <td>{{$socialMediaLink->link}}</td>
                                        <td>
                                            <img src="{{ asset('images/'.$socialMediaLink->image) }}" class="mr-3" height="64px" width="64px">
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="list-group-item">
                            <div class="text-warning">There are no social media links records</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
