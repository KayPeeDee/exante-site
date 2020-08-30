@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card shadow mb-4">
                <div class="card-header">NEW SERVICE CATEGORY PAGE</div>

                
                <form method="POST" action="{{route('create-service-category')}}"  enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" >
                        </div>

                       
                        <div class="form-group">
                            <label for="image" class="col-form-label">Upload Primary Image:</label>
                            <input type="file" class="form-control" id="image" name="image" >
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-form-label">Description:</label>
                            <textarea class="form-control" rows="4" id="description" name="description"></textarea>
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
