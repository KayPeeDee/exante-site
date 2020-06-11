<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}" defer></script>


        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    </head>
    <body style="padding-top: 50px">
        <nav id="navbar-example" class="navbar fixed-top  navbar-expand-lg navbar-light bg-light" >
            <div class="container">
                <a class="navbar-brand" href="#">My Site</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portifolio">Portifolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Team</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#why-us">Why Choose Us?</a>
                                <a class="dropdown-item" href="#testimonials">Testimonials</a>
                                <a class="dropdown-item" href="#clients">Our Clients</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contact-us">Contact Us</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div data-spy="scroll" data-target="#navbar-example" data-offset="0">

            {{--@forelse ($sections as $section)--}}

                <div id="home" class="jumbotron jumbotron-home" style="background-image: url('/images/{{$home->home->background_image}}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 ">
                            </div>
                            <div class="col-md-6">
                                <div class="card card-home mt-3">
                                    <div class="card-body">
                                    <h1 class="card-title text-white text-lg text-bold">
                                        We provide
                                        <br/>
                                        solutions
                                        <br/>
                                        for your business
                                    </h1>

                                    <a href="#" class="btn  btn-primary btn-round mr-3">Getting Started</a>
                                    <a href="#" class="btn btn-outline-primary btn-round">Our Services</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="card mt-3">
                                    <img src="{{ asset('images/'.$home->home->main_image) }}" class="card-img" alt="...">
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <div id="about-us" class="section jumbotron-custom">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <h4 class="text-center text-md ">{{$aboutUs->title}}</h4>
                                <div class="text-center text-medium mb-4">
                                    {{$aboutUs->description}}
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            @forelse ($aboutUs->aboutUs as $about)

                                @if ($loop->even)
                                    <div class="col-md-12">
                                        <div class="row mt-7">
                                            <div class="col-md-6">
                                                <div class="card card-home mb-4">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-bold">{{$about->title}}</h5>
                                                        <div class="card-text">
                                                            {!! $about->description !!}
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card card-home mb-4">
                                                    <img src="{{ asset('images/'.$about->image) }}" class="card-img">
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                @else
                                    <div class="col-md-12">
                                        <div class="row mt-7">

                                            <div class="col-md-6">
                                                <div class="card card-home mb-4">
                                                    <img src="{{ asset('images/'.$about->image) }}" class="card-img">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card card-home mb-4">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-bold">{{$about->title}}</h5>
                                                        <div class="card-text">
                                                            {!! $about->description !!}
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @endif

                            @empty
                                <div class="col-lg-12">
                                    <div class="alert alert-info text-center" role="alert">
                                        There are no about us records yet!!
                                    </div>
                                </div>
                            @endforelse

                        </div>
                    </div>

                </div>


                <div id="services" class="section jumbotron-bg">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <h4 class="text-center text-md">{{$service->title}}</h4>
                                <div class="text-center text-medium mb-4">
                                    {{$service->description}}
                                </div>
                            </div>
                        </div>
                        <div class="row mt-7">

                            @forelse ($service->services as $service)
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title text-bold">{{$service->name}}</h5>
                                            <p class="card-text">{{$service->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-lg-12">
                                    <div class="alert alert-info text-center" role="alert">
                                        There are no services records yet!!
                                    </div>
                                </div>
                            @endforelse

                        </div>
                    </div>

                </div>

                <div id="why-us" class="section why-us-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <h4 class="text-center text-md text-white">{{$whyChooseUs->title}}</h4>
                                <div class="text-center text-medium text-white mb-4">
                                    {{$whyChooseUs->description}}
                                </div>
                            </div>
                        </div>
                        <div class="row mt-7">

                            @forelse ($whyChooseUs->benefits as $benefit)
                                <div class="col-md-4">
                                    <div class="card why-us-card">
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-bold">{{$benefit->title}}</h5>
                                            <div class="card-text">{{$benefit->slug}}</div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-lg-12">
                                    <div class="alert alert-info text-center" role="alert">
                                        There are statistics records yet!!
                                    </div>
                                </div>
                            @endforelse

                        </div>

                        <div class="row mt-7">

                            @forelse ($whyChooseUs->statistics as $statistic)
                                <div class="col-md-3">
                                    <div class="card card-home">
                                        <div class="card-body text-white text-center">
                                            <h1 class="card-title text-bold">{{$statistic->statistic}}</h1>
                                            <h5 class="card-text">{{$statistic->title}}</h5>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-lg-12">
                                    <div class="alert alert-info text-center" role="alert">
                                        There are statistics records yet!!
                                    </div>
                                </div>
                            @endforelse

                        </div>
                    </div>

                </div>


                <div id="portifolio" class="section jumbotron-custom">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <h4 class="text-center text-md">Our Portifolio</h4>
                            </div>

                            <div class="col-md-12"></div>

                            <div class="col-md-5 mt-4">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item mr-3">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">ALL</a>
                                    </li>
                                    <li class="nav-item mr-3">
                                    <a class="nav-link" id="pills-app-tab" data-toggle="pill" href="#pills-app" role="tab" aria-controls="pills-app" aria-selected="false">APP</a>
                                    </li>
                                    <li class="nav-item mr-3">
                                        <a class="nav-link" id="pills-enterprise-tab" data-toggle="pill" href="#pills-enterprise" role="tab" aria-controls="pills-enterprise" aria-selected="false">ENTERPRISE</a>
                                    </li>
                                    <li class="nav-item mr-3">
                                        <a class="nav-link" id="pills-web-tab" data-toggle="pill" href="#pills-web" role="tab" aria-controls="pills-web" aria-selected="false">WEB</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="card-columns">
                                        @forelse ($projects as $project)
                                            <div class="card">
                                                <img src="{{ asset('images/'.$project->image) }}" class="card-img">
                                            </div>
                                        @empty
                                            <div class="col-lg-12">
                                                <div class="alert alert-info text-center" role="alert">
                                                    There are not projects under this category
                                                </div>
                                            </div>
                                        @endforelse


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-app" role="tabpanel" aria-labelledby="pills-app-tab">

                                    @if (count($appProjects) > 0)

                                        <div class="card-columns">
                                            @foreach ($appProjects as $project)
                                                <div class="card">
                                                    <img src="{{ asset('images/'.$project->image) }}" class="card-img">
                                                </div>
                                            @endforeach
                                        </div>

                                    @else
                                        <div class="col-lg-12 justify-content-center">
                                            <div class="alert alert-info text-center" role="alert">
                                                There are not projects under this category
                                            </div>
                                        </div>
                                    @endif


                                </div>
                                <div class="tab-pane fade" id="pills-enterprise" role="tabpanel" aria-labelledby="pills-enterprise-tab">
                                    @if (count($enterpriseProjects) > 0)

                                        <div class="card-columns">
                                            @foreach ($enterpriseProjects as $project)
                                                <div class="card">
                                                    <img src="{{ asset('images/'.$project->image) }}" class="card-img">
                                                </div>
                                            @endforeach
                                        </div>

                                    @else
                                        <div class="col-lg-12 justify-content-center">
                                            <div class="alert alert-info text-center" role="alert">
                                                There are not projects under this category
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                                    @if (count($webProjects) > 0)

                                        <div class="card-columns">
                                            @foreach ($webProjects as $project)
                                                <div class="card">
                                                    <img src="{{ asset('images/'.$project->image) }}" class="card-img">
                                                </div>
                                            @endforeach
                                        </div>

                                    @else
                                        <div class="col-lg-12 justify-content-center">
                                            <div class="alert alert-info text-center" role="alert">
                                                There are not projects under this category
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div id="testimonials" class="section">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <h4 class="text-center text-md">{{$testimonials->title}}</h4>

                            @forelse ($testimonials->testimonials as $testimonial)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <div class="section">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-md-8">
                                                    <div class="card mb-4 card-home">
                                                        <div class="row no-gutters">
                                                        <div class="col-md-2">
                                                            <img src="{{ asset('images/'.$testimonial->image) }}" class="img-circle">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title text-bold">{{$testimonial->full_name}}</h5>
                                                                <div class="card-text"><small class="text-muted">{{$testimonial->position}}</small></div>
                                                                <div class="card-text">{{$testimonial->testimony}}</div>

                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            @empty
                                <div class="col-lg-12">
                                    <div class="alert alert-info text-center" role="alert">
                                        There are no testimonials records yet!!
                                    </div>
                                </div>
                            @endforelse


                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div id="team" class="jumbotron jumbotron-custom">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <h4 class="text-center text-md ">{{$team->title}}</h4>
                                <div class="text-center text-medium mb-4">
                                    {{$team->description}}
                                </div>
                            </div>
                        </div>
                        <div class="row mt-7 justify-content-center">

                            @forelse ($team->teamMembers as $member)
                                <div class="col-md-3">
                                    <div class="card text-center card-home">
                                        <div class="card-body">
                                            {{--<img src="/images/{{$member->image}}" class="rounded-circle member-pic" >--}}

                                            <img src="{{ asset('images/'.$member->image) }}" class="rounded-circle member-pic">
                                        </div>

                                    </div>
                                </div>
                            @empty
                            <div class="col-lg-12">
                                <div class="alert alert-info text-center" role="alert">
                                    There are no team records yet!!
                                </div>
                            </div>
                            @endforelse

                        </div>
                    </div>

                </div>

                <div id="clients" class="section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <h4 class="text-center text-md ">{{$clients->title}}</h4>
                                <div class="text-center text-medium mb-4">
                                    {{$clients->description}}
                                </div>
                            </div>
                        </div>
                        <div class="row mt-7 no-gutters">

                            @forelse ($clients->clients as $client)
                                <div class="col-lg-3 col-md-4 col-xs-6">
                                    <div class="company-logo">
                                        <img src="{{ asset('images/'.$client->logo) }}" class="img-fluid">
                                    </div>
                                </div>
                            @empty
                                <div class="col-lg-12">
                                    <div class="alert alert-info text-center" role="alert">
                                        There are no clients records yet!!
                                    </div>
                                </div>
                            @endforelse

                        </div>
                    </div>

                </div>


                <div id="contact-us" class="jumbotron jumbotron-custom">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <h4 class="text-center text-md ">{{$contact->title}}</h4>
                            </div>
                        </div>
                        <div class="row mt-7">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">GOOGLE MAP GOES HERE</h5>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-home">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 text-medium">
                                                <i class="fa fa-map-marker"></i>
                                                {{$contact->contactUs->address}}
                                            </div>
                                            <div class="col-md-4 text-medium">
                                                <i class="fa fa-envelope"></i>
                                                {{$contact->contactUs->email}}
                                            </div>
                                            <div class="col-md-4 text-medium">
                                                <i class="fa fa-phone"></i>
                                                {{$contact->contactUs->phone}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-home">
                                    <div class="card-body">
                                        <form method="POST" action="{{route('send-message')}}">
                                            @csrf

                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Your Email">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                            </div>

                                            <div class="form-group">
                                                <textarea class="form-control" rows="4" id="message" name="message" placeholder="Message"></textarea>
                                            </div>


                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary btn-round" data-dismiss="modal">
                                                    Send Message
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>

                </div>

            {{--@empty
                <p>No sections</p>
            @endforelse--}}

        </div>

        <div class="jumbotron why-us-section text-white" style="margin-bottom: 0px; border-radius: 0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>MY SITE</h2>
                        {{$aboutUs->description}}
                    </div>

                    <div class="col-sm-2">
                        <h5>USEFUL LINKS</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms Of Services</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Privacy Policy</a>
                            </li>

                        </ul>
                    </div>

                    <div class="col-sm-3">
                        <h5>CONTACT US</h5>
                        <div>{{$contact->contactUs->address}}</div>
                        <div>Phone: {{$contact->contactUs->phone}}</div>
                        <div>Email: {{$contact->contactUs->phone}}</div>
                    </div>

                    <div class="col-sm-3">
                        <h5>NEWSLETTER</h5>
                        {{$aboutUs->description}}
                    </div>



                </div>

            </div>

        </div>
        <footer class="sticky-footer footer-section">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>

        <script src="jquery.min.js"></script>
        <script src="bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>
