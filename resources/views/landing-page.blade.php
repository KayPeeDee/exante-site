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

        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">


        <style>
            .jumbtron-bg-image{
                background-image: url("images/software-development-company-1.jpg");
                background-size: cover;
                border-radius: 0%;
                color: #ffffff;
            }

            .jumbtron-bg-image-2{
                background-image: url("images/software-development-3.jpg");
                background-size: cover;
                border-radius: 0%;
                color: #ffffff;
            }

            .jumbtron-bg-image-3{
                background-image: url("images/software-development.png");
                background-size: cover;
                border-radius: 0%;
                color: #ffffff;
            }

            .jumbotron-custom{
                /* color: #FFFFFF; */
                background:transparent !important;
                margin-bottom: 0%;

            }

            .jumbtron-home1{
                /*background: blue;*/
                background:transparent !important;
            }

        </style>

    </head>
    <body style="padding-top: 50px">
        <nav id="navbar-example" class="navbar fixed-top  navbar-expand-lg navbar-light bg-light" >
            <div class="container">
                <a class="navbar-brand" href="#">eXante</a>
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
            <div id="home" class="jumbotron jumbotron-home">
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
                                <img src="{{ asset('images/home.png') }}" class="card-img" alt="...">
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div id="about-us" class="section jumbotron-custom">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <h4 class="text-center text-md ">About Us</h4>
                            <div class="text-center text-medium mb-4">
                                When we take control of our neuro-associations, we take control of our lives.
                            </div>
                        </div>
                    </div>
                    <div class="row mt-7">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div id="services" class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <h4 class="text-center text-md">Services</h4>
                            <div class="text-center text-medium mb-4">
                                When we take control of our neuro-associations, we take control of our lives.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="row no-gutters">
                                  <div class="col-md-2">
                                    <img src="..." class="card-img" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title text-bold">Card title</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="row no-gutters">
                                  <div class="col-md-2">
                                    <img src="..." class="card-img" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title text-bold">Card title</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="row no-gutters">
                                  <div class="col-md-2">
                                    <img src="..." class="card-img" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title text-bold">Card title</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="row no-gutters">
                                  <div class="col-md-2">
                                    <img src="..." class="card-img" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title text-bold">Card title</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="row no-gutters">
                                  <div class="col-md-2">
                                    <img src="..." class="card-img" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title text-bold">Card title</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="row no-gutters">
                                  <div class="col-md-2">
                                    <img src="..." class="card-img" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title text-bold">Card title</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div id="why-us" class="section why-us-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <h4 class="text-center text-md text-white">Why Choose Us?</h4>
                            <div class="text-center text-medium text-white mb-4">
                                When we take control of our neuro-associations, we take control of our lives.
                            </div>
                        </div>
                    </div>
                    <div class="row mt-7">
                        <div class="col-md-4">
                            <div class="card why-us-card">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-bold">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card why-us-card">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-bold">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card why-us-card">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-bold">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-7">
                        <div class="col-md-3">
                            <div class="card card-home">
                                <div class="card-body text-white text-center">
                                    <h1 class="card-title text-bold">274</h1>
                                    <h5 class="card-text">Clients</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card card-home">
                                <div class="card-body text-white text-center">
                                    <h1 class="card-title text-bold">421</h1>
                                    <h5 class="card-text">Projects</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card card-home">
                                <div class="card-body text-white text-center">
                                    <h1 class="card-title text-bold">1,364</h1>
                                    <h5 class="card-text">Hours of Work</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card card-home">
                                <div class="card-body text-white text-center">
                                    <h1 class="card-title text-bold">18</h1>
                                    <h5 class="card-text">Hard Workers</h5>
                                </div>
                            </div>
                        </div>
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

                        <div class="col-md-4 mt-4">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item mr-3">
                                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">ALL</a>
                                </li>
                                <li class="nav-item mr-3">
                                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">APP</a>
                                </li>
                                <li class="nav-item mr-3">
                                  <a class="nav-link" id="pills-card-tab" data-toggle="pill" href="#pills-card" role="tab" aria-controls="pills-card" aria-selected="false">CARD</a>
                                </li>
                                <li class="nav-item mr-3">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">WEB</a>
                                  </li>
                            </ul>

                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="card-columns">
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Card title that wraps to a new line</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                    </div>
                                    <div class="card p-3">
                                        <blockquote class="blockquote mb-0 card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer class="blockquote-footer">
                                            <small class="text-muted">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                            </small>
                                        </footer>
                                        </blockquote>
                                    </div>
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card bg-primary text-white text-center p-3">
                                        <blockquote class="blockquote mb-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                                        <footer class="blockquote-footer text-white">
                                            <small>
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                            </small>
                                        </footer>
                                        </blockquote>
                                    </div>
                                    <div class="card text-center">
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                    </div>
                                    <div class="card p-3 text-right">
                                        <blockquote class="blockquote mb-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer class="blockquote-footer">
                                            <small class="text-muted">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                            </small>
                                        </footer>
                                        </blockquote>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="card-columns">
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Card title that wraps to a new line</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                    </div>
                                    <div class="card p-3">
                                        <blockquote class="blockquote mb-0 card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer class="blockquote-footer">
                                            <small class="text-muted">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                            </small>
                                        </footer>
                                        </blockquote>
                                    </div>
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card bg-primary text-white text-center p-3">
                                        <blockquote class="blockquote mb-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                                        <footer class="blockquote-footer text-white">
                                            <small>
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                            </small>
                                        </footer>
                                        </blockquote>
                                    </div>
                                    <div class="card text-center">
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                    </div>
                                    <div class="card p-3 text-right">
                                        <blockquote class="blockquote mb-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer class="blockquote-footer">
                                            <small class="text-muted">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                            </small>
                                        </footer>
                                        </blockquote>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="card-columns">
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Card title that wraps to a new line</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                    </div>
                                    <div class="card p-3">
                                        <blockquote class="blockquote mb-0 card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer class="blockquote-footer">
                                            <small class="text-muted">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                            </small>
                                        </footer>
                                        </blockquote>
                                    </div>
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card bg-primary text-white text-center p-3">
                                        <blockquote class="blockquote mb-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                                        <footer class="blockquote-footer text-white">
                                            <small>
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                            </small>
                                        </footer>
                                        </blockquote>
                                    </div>
                                    <div class="card text-center">
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="..." class="card-img-top" alt="...">
                                    </div>
                                    <div class="card p-3 text-right">
                                        <blockquote class="blockquote mb-0">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer class="blockquote-footer">
                                            <small class="text-muted">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                            </small>
                                        </footer>
                                        </blockquote>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div id="testimonials" class="section">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <h4 class="text-center text-md">Testimonials</h4>
                        <div class="carousel-item active">
                            <div class="jumbotron">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card mb-4 card-home">
                                                <div class="row no-gutters">
                                                  <div class="col-md-2">
                                                    <img src="{{ asset('images/king.jpg') }}" class="img-circle" alt="...">
                                                  </div>
                                                  <div class="col-md-8">
                                                    <div class="card-body">
                                                      <h5 class="card-title text-bold">Card title</h5>
                                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="jumbotron jumbtron-bg-image-2">
                                <div class="container">
                                    <div class="row">
                                        <h1 class="display-4">Hello, world!</h1>
                                        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                        <hr class="my-4">


                                        <a class="btn btn-primary btn-lg" href="#" role="button">Chat with a Person</a>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="jumbotron jumbtron-bg-image-3">
                                <div class="container">
                                    <div class="row">
                                        <h1 class="display-4">Hello, world!</h1>
                                        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                        <hr class="my-4">


                                        <a class="btn btn-primary btn-lg" href="#" role="button">Chat with a Person</a>
                                    </div>

                                </div>

                            </div>
                        </div>
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
                            <h4 class="text-center text-md ">Team</h4>
                            <div class="text-center text-medium mb-4">
                                When we take control of our neuro-associations, we take control of our lives.
                            </div>
                        </div>
                    </div>
                    <div class="row mt-7">
                        <div class="col-md-3">
                            <div class="card text-center card-home">
                                <div class="card-body">
                                    <img src="{{ asset('images/king.jpg') }}" class="rounded-circle member-pic" >
                                </div>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card text-center card-home">
                                <div class="card-body">
                                    <img src="{{ asset('images/king.jpg') }}" class="rounded-circle member-pic" >
                                </div>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card text-center card-home">
                                <div class="card-body">
                                    <img src="{{ asset('images/king.jpg') }}" class="rounded-circle member-pic" >
                                </div>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card text-center card-home">
                                <div class="card-body">
                                    <img src="{{ asset('images/king.jpg') }}" class="rounded-circle member-pic" >
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div id="clients" class="jumbotron">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <h4 class="text-center text-md ">Our Clients</h4>
                            <div class="text-center text-medium mb-4">
                                When we take control of our neuro-associations, we take control of our lives.
                            </div>
                        </div>
                    </div>
                    <div class="row mt-7">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-group">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


            <div id="contact-us" class="jumbotron jumbotron-custom">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <h4 class="text-center text-md ">Contact Us</h4>
                        </div>
                    </div>
                    <div class="row mt-7">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

            </div>



        </div>

        <div class="jumbotron bg-dark text-white" style="margin-bottom: 0px; border-radius: 0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ">
                        <h4 class="text-center">This is supposed to be our FOOTER</h4>
                        <div class="row">
                            <div class="col-3">
                              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                              </div>
                            </div>
                          </div>
                    </div>


                </div>

            </div>

        </div>


        <script src="jquery.min.js"></script>
        <script src="bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>
