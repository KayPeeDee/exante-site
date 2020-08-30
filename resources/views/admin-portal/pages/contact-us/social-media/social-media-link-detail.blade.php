@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Social Media Link Detail</h1>
            </div>
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{route('update-social-media-link-details', $socialMediaLink->id)}}"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$socialMediaLink->name}}">
                        </div>

                        <div class="form-group">
                            <label for="link" class="col-form-label">Link:</label>
                            <input type="text" class="form-control" id="link" name="link" value="{{$socialMediaLink->link}}">
                        </div>

                        <button type="submit" class="btn btn-success">
                            Update
                        </button>
                    </form>

                    <hr class="sidebar-divider">

                    <div class="mt-4">
                        <h6>Primary Image</h6>
                        <div class="mb-4">
                            <img src="{{ asset('images/'.$socialMediaLink->image) }}" class="mr-3" height="160px" >
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
        <form method="POST" action="{{ route('update-social-media-link-image', [$socialMediaLink->id]) }}"  enctype="multipart/form-data">
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
