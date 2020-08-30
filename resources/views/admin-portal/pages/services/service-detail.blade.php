@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Service Detail</h1>
            </div>
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{route('update-service-details', $service->id)}}"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$service->name}}">
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-form-label">Description:</label>
                            <textarea class="form-control" rows="4" id="description" name="description">{{$service->description}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success">
                            Update
                        </button>
                    </form>

                    <hr class="sidebar-divider">

                    <div class="mt-4">
                        <h6>Primary Image</h6>
                        <div class="mb-4">
                            <img src="{{ asset('images/'.$service->image) }}" class="mr-3" height="160px" >
                        </div>
                        <button class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#imageModal">
                            Upload Primary Image
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="imageModalLabel">Upload Primary Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ route('update-service-image', [$service->id]) }}"  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="image" class="col-form-label">Upload Primary Image:</label>
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
