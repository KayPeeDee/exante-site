@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{route('our-team', $member->section_id)}}">Team</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Team Member</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Team Member</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault();
                                                document.getElementById('delete-member-form').submit();">
                                    {{ __('Delete') }}
                            </a>

                            <form id="delete-member-form" action="{{ route('delete-team-member', [$member->section_id, $member->id]) }}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                        </div>

                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update-team-member', [$member->section_id, $member->id]) }}">
                        @csrf
                        <input  type="hidden" name="section_id" value="{{$member->section_id}}">

                        <div class="form-group">
                            <label for="full_name" class="col-form-label">Full Name:</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{$member->full_name}}">
                        </div>

                        <div class="form-group">
                            <label for="position" class="col-form-label">Position:</label>
                            <input type="text" class="form-control" id="position" name="position" value="{{$member->position}}">
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-form-label">Upload Profile Picture:</label>
                            <input type="file" class="form-control" id="image" name="image" value="{{$member->image}}">
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="facebook_link" class="col-form-label">Facebook Link:</label>
                                <input type="text" class="form-control" id="facebook_link" name="facebook_link" value="{{$member->facebook_link}}">
                            </div>
                            <div class="col-md-6">
                                <label for="twitter_handler" class="col-form-label">Twitter Handler:</label>
                                <input type="text" class="form-control" id="twitter_handler" name="twitter_handler" value="{{$member->twitter_handler}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="linked_in" class="col-form-label">LinkedIn:</label>
                                <input type="text" class="form-control" id="linked_in" name="linked_in" value="{{$member->linked_in}}">
                            </div>
                            <div class="col-md-6">
                                <label for="google_plus" class="col-form-label">Google Plus:</label>
                                <input type="text" class="form-control" id="google_plus" name="google_plus" value="{{$member->google_plus}}">
                            </div>
                        </div>


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
