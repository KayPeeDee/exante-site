@extends('layouts.app')

@section('container')

    <header id="header" class="fixed-top">
        <div class="container">

          <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an text logo -->
            <!--<h1 class="text-light"><a href="#header"><span>TekkieTonic</span></a></h1>-->
            <!--<a href="#intro" class="scrollto">TekkieTonic</a>-->
            <a href="#intro" class="scrollto"><img src="{{ asset('images/TekkieTonicWebLogo.png') }}" alt="" class="img-fluid"></a>
          </div>

          <nav class="main-nav float-right d-none d-lg-block">
            <ul>
              <li class="active"><a href="{{route('landing')}}">Home</a></li>
              <li class="drop-down"><a href="{{route('view-services-list')}}">Services</a>
                <ul>

                    @forelse (\App\Models\ServiceCategory::latest()->get() as $category)
                        @if (count($category->services) > 0)
                            <li class="drop-down"><a href="{{route('service-category',  str_ireplace(" ", "-", strtolower($category->name)))}}">{{$category->name}}</a>
                                <ul>
                                    @foreach ($category->services as $service)
                                        <li><a href="{{route('view-service-detail', [str_ireplace(" ", "-", strtolower($category->name)), str_ireplace(" ", "-", strtolower($service->name))])}}">{{$service->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li><a href="{{route('service-category',  str_ireplace(" ", "-", strtolower($category->name)))}}">{{$category->name}}</a></li>
                        @endif
                    @empty
                        <li><a href="#">No Services Categories Yet</a></li>
                    @endforelse
                  {{-- <li class="drop-down"><a href="{{route('service-category', 'software-development')}}">Software Development</a>
                    <ul>
                      <li><a href="{{route('view-service-detail','mobile-apps')}}">Mobile Apps</a></li>
                      <li><a href="#">Web Apps</a></li>
                      <li><a href="#">Enterprise Systems</a></li>
                      <li><a href="#">Augmented/Virtual Reality</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="#">Website Design</a>
                    <ul>
                      <li><a href="#">Domain Name Registration</a></li>
                      <li><a href="#">Website Design</a></li>
                      <li><a href="#">Web Hosting</a></li>
                      <li><a href="#">Website Maintenance</a></li>
                    </ul>
                  </li>
                  <li class="drop-down"><a href="#">E-Business Consultancy</a>
                    <ul>
                      <li><a href="#">Digital Business</a></li>
                      <li><a href="#">E-Commerce</a></li>
                      <li><a href="#">M-Commerce</a></li>
                      <li><a href="#">E-Marketing</a></li>
                      <li><a href="#">Supply Chain Management</a></li>
                      <li><a href="#">E-Procurement</a></li>
                      <li><a href="#">E-CRM</a></li>
                      <li><a href="#">Change Management</a></li>
                    </ul>
                  </li> --}}
                  {{-- <li><a href="#">E-Business Consultancy</a></li> --}}
                  {{-- <li><a href="#">Professionals Trainings</a></li> --}}
                </ul>
              </li>
              <li class="drop-down"><a href="{{route('product-list')}}">Business Solutions</a>
                <ul>
                    @forelse (\App\Models\Product::latest()->get() as $product)
                        <li><a href="{{route('view-product-details', $product->id)}}">{{$product->name}}</a></li>
                    @empty
                        <li><a href="#">No Products Yet</a></li>
                    @endforelse
                  {{-- <li><a href="{{route('view-product-details', 1)}}">Smartdzidzo</a></li>
                  <li><a href="#">HuyaUhodhe</a></li>
                  <li><a href="#">Supply Express 263</a></li>
                  <li><a href="#">TekkieLancers</a></li>
                  <li><a href="#">Smart Hurudza</a></li> --}}
                </ul>
              </li>

              <li><a href="{{route('view-about-us')}}">About Us</a></li>
              <li><a href="{{route('view-contact-us')}}">Contact Us</a></li>

              <li><a href="{{route('blog-list')}}">Blog</a></li>
            </ul>
          </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->


    <div>
        @yield('content')
    </div>

     <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
        <div class="container">
            <div class="row">

            <div class="col-lg-4 col-md-6 footer-info">
                <h3>TekkieTonic</h3>
                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Terms of service</a></li>
                <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contact Us</h4>
                <p>
                A108 Adam Street <br>
                New York, NY 535022<br>
                United States <br>
                <strong>Phone:</strong> +263 783 966 994<br>
                <strong>Email:</strong> info@example.com<br>
                </p>

                <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 footer-newsletter">
                <h4>Our Newsletter</h4>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
            </div>

            </div>
        </div>
        </div>

        <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>TekkieTonic</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
            Designed by <a href="https://bootstrapmade.com/">TekkieTonic Development Team</a>
        </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

@endsection
