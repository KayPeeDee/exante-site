@extends('layouts.client')

@section('content')
<div class="heading">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h4 class="text-center text-md ">Blog</h4>
            </div>
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog List</li>
            </ol>
        </nav>
        
    </div>

</div>

<div class="jumbotron-custom mtb-7">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 wow bounceInUp">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">The Facebook business model</h6>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            The Suncorp financial services group manages 25 brands in Australia and New Zealand spanning banking,
                            insurance, investment and superannuation
                        </div>
                        <a href="{{route('read-blog', 1)}}" class="btn btn-sm btn-secondary shadow-sm mt-2">Read More</a>

                    </div>
                </div>
            </div>

            <div class="col-md-6 wow bounceInUp">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Software Development</h6>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            The Suncorp financial services group manages 25 brands in Australia and New Zealand spanning banking,
                            insurance, investment and superannuation
                        </div>
                        <a href="{{route('read-blog', 1)}}" class="btn btn-sm btn-secondary shadow-sm mt-2">Read More</a>

                    </div>
                </div>
            </div>

            <div class="col-md-6 wow bounceInUp">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">E-Business Consultancy</h6>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            The Suncorp financial services group manages 25 brands in Australia and New Zealand spanning banking,
                            insurance, investment and superannuation
                        </div>
                        <a href="{{route('read-blog', 1)}}" class="btn btn-sm btn-secondary shadow-sm mt-2">Read More</a>

                    </div>
                </div>
            </div>

            <div class="col-md-6 wow bounceInUp">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Professional Trainings</h6>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            The Suncorp financial services group manages 25 brands in Australia and New Zealand spanning banking,
                            insurance, investment and superannuation
                        </div>
                        <a href="{{route('read-blog', 1)}}" class="btn btn-sm btn-secondary shadow-sm mt-2">Read More</a>

                    </div>
                </div>
            </div>

        </div>
        
    </div>

</div>

@endsection