@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add New Service</h1>
            </div>
            <div class="card shadow mb-4">

                <form method="POST" action="{{route('create-service')}}"  enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="category_id" class="col-form-label">Service Category:</label>
                            <select class="custom-select" required name="category_id">
                              <option disabled selected>Select Service Category</option>
                              
                              @foreach ($serviceCategories as $serviceCategory)
                                <option value="{{$serviceCategory->id}}">{{$serviceCategory->name}}</option>
                              @endforeach

                            </select>
                        </div>

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
