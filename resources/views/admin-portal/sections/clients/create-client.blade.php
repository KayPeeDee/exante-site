@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{route('our-clients', $sectionId)}}">Our Clients</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Client</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Client</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('create-client', $sectionId)}}" enctype="multipart/form-data">
                        @csrf
                        <input  type="hidden" name="section_id" value="{{$sectionId}}">

                        <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" >
                        </div>

                        <div class="form-group">
                            <label for="website_link" class="col-form-label">Website Link:</label>
                            <input type="text" class="form-control" id="website_link" name="website_link" >
                        </div>

                        <div class="form-group">
                            <label for="logo" class="col-form-label">Upload Logo:</label>
                            <input type="file" class="form-control" id="logo" name="logo" >
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
