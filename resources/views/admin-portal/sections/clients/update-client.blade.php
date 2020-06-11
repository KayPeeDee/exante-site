@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{route('our-clients', $client->section_id)}}">Our Clients</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Client</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Client</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault();
                                                document.getElementById('delete-client-form').submit();">
                                    {{ __('Delete') }}
                            </a>

                            <form id="delete-client-form" action="{{ route('delete-client', [$client->section_id, $client->id]) }}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                        </div>

                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update-client', [$client->section_id, $client->id]) }}">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="tag" value="{{$client->section_id}}">

                        <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$client->name}}">
                        </div>

                        <div class="form-group">
                            <label for="website_link" class="col-form-label">Website Link:</label>
                            <input type="text" class="form-control" id="website_link" name="website_link" value="{{$client->website_link}}">
                        </div>


                        <button type="submit" class="btn btn-success">
                            Save
                       </button>
                    </form>

                    <hr class="sidebar-divider">

                    <div class="mt-4">
                        <h6 class="mb-3">Logo</h6>
                        <div class="mb-4">
                            <img src="{{ asset('images/'.$client->logo) }}" class="mr-3" height="60px" >
                        </div>
                        <button class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#logoImageModal">
                            Upload Logo
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="logoImageModal" tabindex="-1" role="dialog" aria-labelledby="logoImageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="logoImageModalLabel">Upload Background Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ route('update-client-logo', [$client->section_id, $client->id]) }}"  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="logo" class="col-form-label">Upload Logo:</label>
                    <input type="file" class="form-control" id="logo" name="logo">
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
