@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header">EMAIL ADDRESS DETAILS</div>

                <div class="card-body">
                    <form method="POST" action="{{route('update-email-address', $emailAddress->id)}}"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$emailAddress->email}}">
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
