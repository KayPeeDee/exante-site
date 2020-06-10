@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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

                        <div class="form-group">
                            <label for="logo" class="col-form-label">Upload Logo:</label>
                            <input type="file" class="form-control" id="logo" name="logo" value="{{$client->logo}}">
                        </div>

                        <a href="{{route('our-clients', $client->section_id)}}" class="btn btn-secondary mr-2">
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
