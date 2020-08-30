@extends('layouts.client')

@section('content')
<div class="heading">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h4 class="text-center text-md ">About Us</h4>
            </div>
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </nav>
        
    </div>

</div>
<section class="mtb-7">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-4">
                    <h4 class="text-center text-md ">Company Overview</h4>
                    <div class="text-center text-medium mb-4">
                        {{$companyDetails->company_overview}} 
                    </div>
                </div>

                <div class="mb-4">
                    <h4 class="text-center text-md ">Vision</h4>
                    <div class="text-center text-medium mb-4">
                        {{$companyDetails->vision}}
                    </div>
                </div>

                <div class="mb-4">
                    <h4 class="text-center text-md ">Mission</h4>
                    <div class="text-center text-medium mb-4">
                        {{$companyDetails->mission}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

    @if (count($teamMembers) > 0)
        <section id="team" class="section-bg">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-8">
                        <h4 class="text-center text-md ">Our Team</h4>
                        <div class="text-center text-medium mb-4">
                            It has also helped Suncorp create a culture where col‑
                            laboration is more natural by enabling people to interact online in an open, informal and transparent way
                        </div>
                    </div>
                </div>

            <div class="row justify-content-center">

                @foreach ($teamMembers as $member)
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="{{asset('images/'.$member->image)}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                <h4>{{$member->full_name}}</h4>
                                <span>{{$member->position}}</span>
                                {{-- <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="member">
                    <img src="images/team-1.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                    <div class="member-info-content">
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                        <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="member">
                    <img src="images/team-2.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                    <div class="member-info-content">
                        <h4>Sarah Jhonson</h4>
                        <span>Product Manager</span>
                        <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="member">
                    <img src="images/team-3.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                    <div class="member-info-content">
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                        <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="member">
                    <img src="images/team-4.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                    <div class="member-info-content">
                        <h4>Amanda Jepson</h4>
                        <span>Accountant</span>
                        <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                </div> --}}

            </div>

            </div>
        </section>
    @endif


@endsection