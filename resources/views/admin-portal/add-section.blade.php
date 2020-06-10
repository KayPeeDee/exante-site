@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Section</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Section</h6>
                    <a href="{{route('get-sections')}}" class="btn btn-sm btn-close"><i class="fa fa-close fa-sm fa-fw text-gray-400"></i></a>

                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('add-section') }}">
                        @csrf

                        <div class="form-group">
                            <label for="title" class="col-form-label">Title:</label>
                            <select class="form-control" id="title" name="title">
                                <option selected disabled>Select Title</option>
                                <option value="Home">Home</option>
                                <option value="About Us">About Us</option>
                                <option value="Services">Services</option>
                                <option value="Why Choose Us">Why Choose Us</option>
                                <option value="Our Portifolio">Our Portifolio</option>
                                <option value="Testimonials">Testimonials</option>
                                <option value="Team">Team</option>
                                <option value="Our Clients">Our Clients</option>
                                <option value="Contact Us">Contact Us</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Description:</label>
                            <textarea class="form-control" rows="4" id="description" name="description"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success" data-dismiss="modal">
                             Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
