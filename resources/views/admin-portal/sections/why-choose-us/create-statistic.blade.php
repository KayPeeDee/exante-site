@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('get-sections')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{route('benefits', $sectionId)}}">Why Choose Us</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Statistic</li>
                </ol>
            </nav>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Statistic</h6>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('create-statistic', $sectionId) }}">
                        @csrf
                        <input  type="hidden" name="section_id" value="{{$sectionId}}">

                        <div class="form-group">
                            <label for="title" class="col-form-label">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" >
                        </div>

                        <div class="form-group">
                            <label for="statistic" class="col-form-label">Statistic:</label>
                            <input type="number"  class="form-control" id="statistic" name="statistic" >
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
