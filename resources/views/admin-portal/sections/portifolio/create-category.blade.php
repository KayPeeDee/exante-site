@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{route('project-categories', $sectionId)}}">Project Categories</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Project Category</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Project Category</h6>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('create-category', $sectionId) }}">
                        @csrf
                        <input  type="hidden" name="section_id" value="{{$sectionId}}">

                        <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <select class="form-control" id="name" name="name">
                                <option selected disabled>Select Category Name</option>
                                <option value="WEB">WEB</option>
                                <option value="APP">APP</option>
                                <option value="ENTERPRISE">ENTERPRISE</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="description" class="col-form-label">Description:</label>
                            <textarea class="form-control" rows="4" id="description" name="description"></textarea>
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
