@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add Social Media Link</h1>
            </div>
            <div class="card shadow mb-4">

                <form method="POST" action="{{route('add-social-media-link')}}"  enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        

                        <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" >
                        </div>

                        <div class="form-group">
                            <label for="link" class="col-form-label">Link:</label>
                            <input type="text" class="form-control" id="link" name="link" >
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-form-label">Upload Primary Image:</label>
                            <input type="file" class="form-control" id="image" name="image" >
                        </div>

                      
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
