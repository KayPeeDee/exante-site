@extends('layouts.client')

@section('content')
<div class="heading">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h4 class="text-center text-md ">{{$serviceCategory->name}}</h4>
            </div>
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Services</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$serviceCategory->name}}</li>
            </ol>
        </nav>
        
    </div>

</div>

<section id="about">
    <div class="container">

        <div class="row about-container">

            <div class="col-lg-6 content order-lg-1 order-2">
                <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
                <p>
                Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
                </p>
                <p>
                Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
                </p>
            </div>

            <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                <img src="{{asset('images/'.$serviceCategory->image)}}" class="img-fluid" alt="">
            </div>
        </div>

    </div>
</section>

@if (count($serviceCategory->services) > 0)
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h4 class="text-center text-md ">What we offer in this category</h4>
                </div>
            </div>
        
            <div class="row mt-7">

                @foreach ($serviceCategory->services as $service)
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card text-center border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$service->name}}</div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>   
@endif



@endsection