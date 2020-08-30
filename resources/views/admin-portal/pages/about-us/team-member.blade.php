@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Team Member Details</h1>
            </div>
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

                            <form id="delete-member-form" action="{{ route('delete-team-member', [$member->id]) }}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                        </div>

                    </div>
                </div>

                <div class="card-body">

                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <div class="mt-4">
                                <h6 class="mb-3">Personal Image</h6>
                                <div class="mb-4">
                                    <img src="{{ asset('images/'.$member->image) }}" width="160px" class="rounded-circle member-pic">
                                </div>
                                <button class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#memberImageModal">
                                    Upload Image
                                </button>

                            </div>
                        </div>
                        <div class="col-md-8">
                            <form method="POST" action="{{ route('update-team-member-details', [$member->id]) }}">
                                @csrf
                                @method('PUT')
                                <input  type="hidden" name="section_id" value="{{$member->section_id}}">

                                <div class="form-group">
                                    <label for="full_name" class="col-form-label">Full Name:</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name" value="{{$member->full_name}}">
                                </div>

                                <div class="form-group">
                                    <label for="position" class="col-form-label">Position:</label>
                                    <input type="text" class="form-control" id="position" name="position" value="{{$member->position}}">
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
    </div>
</div>

<div class="modal fade" id="memberImageModal" tabindex="-1" role="dialog" aria-labelledby="memberImageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="memberImageModalLabel">Upload Profile Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ route('update-team-member-image', [$member->id]) }}"  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="image" class="col-form-label">Upload Profile Picture:</label>
                    <input type="file" class="form-control" id="image" name="image">
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
