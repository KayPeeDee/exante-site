@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add New Product</h1>
            </div>
            <div class="card shadow mb-4">

                <form method="POST" action="{{route('create-product')}}"  enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        

                        <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" >
                        </div>

                        <div class="form-group">
                            <label for="sub_title" class="col-form-label">Sub Title:</label>
                            <input type="text" class="form-control" id="sub_title" name="sub_title" >
                        </div>

                        <div class="form-group">
                            <label for="weblink" class="col-form-label">Weblink:</label>
                            <input type="text" class="form-control" id="weblink" name="weblink" >
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
