@extends('layouts.client')

@section('content')
<div class="heading">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h4 class="text-center text-md ">Contact Us</h4>
            </div>
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
        
    </div>

</div>

<div class="jumbotron-custom mt-7 mb-7">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Phone Number(s)</h6>
                    </div>
                    <div class="list-group list-group-flush">
                        @foreach ($phoneNumbers as $phoneNumber)
                            <div class="list-group-item py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold">{{$phoneNumber->phone_number}}</h6>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Email Address(es)</h6>
                    </div>
                    <div class="list-group list-group-flush">
                        @foreach ($emailAddresses as $emailAddress)
                            <div class="list-group-item py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold">{{$emailAddress->email}}</h6>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        
    </div>

</div>

@if (count($socialMediaLinks) > 0)
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h4 class="text-center text-md ">Social Media Links</h4>
                </div>
            </div>
            <div class="row mt-7">

                @foreach ($socialMediaLinks as $socialMediaLink)
                    <div class="col-md-3">
                        <div class="card cardless">
                            <div class="card-body text-center">
                                <h1 class="card-title text-bold">{{$socialMediaLink->name}}</h1>
                                <h5 class="card-text">{{$socialMediaLink->link}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>
@endif

@endsection