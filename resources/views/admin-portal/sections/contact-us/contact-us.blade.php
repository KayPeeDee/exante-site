@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>

            @if ($contactUs == null)
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Create Contact Us Section</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('create-contact-us') }}">
                            @csrf
                            <input  type="hidden" name="section_id" value="{{$sectionId}}">

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="longitude" class="col-form-label">Longitude:</label>
                                    <input type="text" class="form-control" id="longitude" name="longitude" >
                                </div>
                                <div class="col-md-6">
                                    <label for="latitude" class="col-form-label">Latitude:</label>
                                    <input type="text" class="form-control" id="latitude" name="latitude" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-form-label">Address:</label>
                                <textarea class="form-control" rows="4" id="address" name="address"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" >
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-form-label">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone" >
                            </div>

                            <button type="submit" class="btn btn-success" data-dismiss="modal">
                                Save
                            </button>

                        </form>
                    </div>
                </div>
            @else
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Contact Us Section</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('update-contact-us', $contactUs->id) }}">
                            @method('PUT')
                            @csrf

                            <input  type="hidden" name="section_id" value="{{$sectionId}}">

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="longitude" class="col-form-label">Longitude:</label>
                                    <input type="text" class="form-control" id="longitude" name="longitude" value="{{$contactUs->longitude}}" >
                                </div>
                                <div class="col-md-6">
                                    <label for="latitude" class="col-form-label">Latitude:</label>
                                    <input type="text" class="form-control" id="latitude" name="latitude" value="{{$contactUs->latitude}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-form-label">Address:</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{$contactUs->address}}">
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$contactUs->email}}">
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-form-label">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{$contactUs->phone}}">
                            </div>

                            <button type="submit" class="btn btn-success" data-dismiss="modal">
                                Save
                            </button>

                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
