@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{route('benefits', $sectionId)}}">Why Choose Us</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Benefit</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Benefit</h6>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('create-benefit', $sectionId) }}">
                        @csrf
                        <input  type="hidden" name="section_id" value="{{$sectionId}}">

                        <div class="form-group">
                            <label for="title" class="col-form-label">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" >
                        </div>

                        <div class="form-group">
                            <label for="slug" class="col-form-label">Slug:</label>
                            <input type="text" class="form-control" id="slug" name="slug" >
                        </div>

                        <div class="form-group">
                            <label for="icon" class="col-form-label">Icon:</label>
                            <input type="text" class="form-control" id="icon" name="icon" >
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
