@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{route('our-team', $sectionId)}}">Team</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Team Member</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Team Member</h6>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('create-team-member', $sectionId) }}"  enctype="multipart/form-data">
                        @csrf
                        <input  type="hidden" name="section_id" value="{{$sectionId}}">

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

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="facebook_link" class="col-form-label">Facebook Link:</label>
                                <input type="text" class="form-control" id="facebook_link" name="facebook_link">
                            </div>
                            <div class="col-md-6">
                                <label for="twitter_handler" class="col-form-label">Twitter Handler:</label>
                                <input type="text" class="form-control" id="twitter_handler" name="twitter_handler">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="linked_in" class="col-form-label">LinkedIn:</label>
                                <input type="text" class="form-control" id="linked_in" name="linked_in">
                            </div>
                            <div class="col-md-6">
                                <label for="google_plus" class="col-form-label">Google Plus:</label>
                                <input type="text" class="form-control" id="google_plus" name="google_plus">
                            </div>
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
