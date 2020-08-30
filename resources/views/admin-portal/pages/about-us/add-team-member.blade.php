@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add New Team Member</h1>
            </div>
            <div class="card shadow mb-4">
                
                <div class="card-body">
                    <form method="POST" action="{{ route('add-team-member') }}"  enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="full_name" class="col-form-label">Full Name:</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" >
                        </div>

                        <div class="form-group">
                            <label for="position" class="col-form-label">Position:</label>
                            <input type="text" class="form-control" id="position" name="position" >
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-form-label">Upload Profile Picture:</label>
                            <input type="file" class="form-control" id="image" name="image" >
                        </div>

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
