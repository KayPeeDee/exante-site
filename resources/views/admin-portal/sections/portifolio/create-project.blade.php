@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{route('get-category', $categoryId)}}">Project Category</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Project</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Project</h6>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('create-project', $categoryId) }}" enctype="multipart/form-data">
                        @csrf
                        <input  type="hidden" name="category_id" value="{{$categoryId}}">

                        <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" >
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-form-label">Upload Image:</label>
                            <input type="file" class="form-control" id="image" name="image" >
                        </div>

                        <div class="form-group">
                            <label for="details" class="col-form-label">Details:</label>
                            <textarea class="form-control" rows="4" id="details" name="details"></textarea>
                        </div>

                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-success">
                                Save
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
