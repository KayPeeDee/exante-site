@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header">PHONE NUMBER DETAILS</div>

                <div class="card-body">
                    <form method="POST" action="{{route('update-phone-number', $phoneNumber->id)}}"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="phone_number" class="col-form-label">Phone Number:</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{$phoneNumber->phone_number}}">
                        </div>

                        <div class="form-group">
                            <select class="custom-select" required name="type">
                              <option value="{{$phoneNumber->type}}" selected>{{$phoneNumber->type}}</option>
                              <option value="Telephone">Telephone</option>
                              <option value="Cellphone">Cellphone</option>
                            </select>
                        </div>

                        
                        <button type="submit" class="btn btn-success">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
