@extends('layouts.client')

@section('content')
<div class="heading">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h4 class="text-center text-md ">Services</h4>
            </div>
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Services Categories</li>
            </ol>
        </nav>
        
    </div>

</div>

<div class="jumbotron-custom mtb-7">
    <div class="container">
        <div class="row justify-content-center">

            @forelse ($categories as $category)
                <div class="col-md-6 wow bounceInUp">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{$category->name}}</h6>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                The Suncorp financial services group manages 25 brands in Australia and New Zealand spanning banking,
                                insurance, investment and superannuation
                            </div>
                            
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-6 wow bounceInUp">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="card-text">
                                There are no service categories yet
                            </div>
                            
                        </div>
                    </div>
                </div>
            @endforelse
           
        </div>
        
    </div>

</div>

@endsection