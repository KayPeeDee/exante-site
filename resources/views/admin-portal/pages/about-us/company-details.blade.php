@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Company Details</h1>
            </div>
            @if ($companyDetails)
                <div class="card shadow mb-4">
                    <form method="POST" action="{{route('update-company-details', $companyDetails->id)}}"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">

                            <div class="form-group">
                                <label for="company_overview" class="col-form-label">Company Overview:</label>
                                <textarea class="form-control" rows="4" id="company_overview" name="company_overview">{{$companyDetails->company_overview}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="vision" class="col-form-label">Vision:</label>
                                <textarea class="form-control" rows="4" id="vision" name="vision">{{$companyDetails->vision}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="mission" class="col-form-label">Mission:</label>
                                <textarea class="form-control" rows="4" id="mission" name="mission">{{$companyDetails->mission}}</textarea>
                            </div>

                            
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            @else
                <div class="card shadow mb-4">
                    <form method="POST" action="{{route('create-company-details')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="company_overview" class="col-form-label">Company Overview:</label>
                                <textarea class="form-control" rows="4" id="company_overview" name="company_overview"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="vision" class="col-form-label">Vision:</label>
                                <textarea class="form-control" rows="4" id="vision" name="vision"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="mission" class="col-form-label">Mission:</label>
                                <textarea class="form-control" rows="4" id="mission" name="mission"></textarea>
                            </div>

                            
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            @endif
            
        </div>
    </div>
</div>
@endsection
