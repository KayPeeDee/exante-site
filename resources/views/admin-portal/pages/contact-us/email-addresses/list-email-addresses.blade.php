@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Email Addresses</h1>
                <a href="#" class="btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#createEmailModal">Add Email Address</a>
            </div>
            <div class="card shadow mb-4">
                <div class="list-group list-group-flush">
                   
                    @forelse ($emailAddresses as $emailAddress)
                        <div class="list-group-item py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold">{{$emailAddress->email}}</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{route('email-address-detail', $emailAddress->id)}}">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="list-group-item">
                            <div class="text-warning">There are no email addresses records</div>
                        </div>
                    @endforelse

                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="createEmailModal" tabindex="-1" role="dialog" aria-labelledby="createEmailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="imageModalLabel">Add Email Address</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{route('create-email-address')}}"  enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
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
