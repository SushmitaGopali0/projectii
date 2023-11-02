<!doctype html>
<html lang="en">

<head>
    <title>IDS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="frontend/fonts/icomoon/style.css">

    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/animate.min.css">
    <link rel="stylesheet" href="frontend/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontendcss/owl.theme.default.min.css">
    <link rel="stylesheet" href="frontend/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="frontend/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="frontend/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <header class="site-navbar site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-lg-5">
                        <nav class="site-navigation text-right ml-auto " role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                                <li><a href="{{ route('client.index') }}" class="nav-link">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="nav-link dropdown-toggle"
                                        data-toggle="dropdown">Category</a>
                                    <ul class="dropdown-menu">
                                        @foreach ($category as $item)
                                            <li><a href="{{ route('client.category', $item->slug) }}"
                                                    class="dropdown-item">{{ $item->name }} </a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                {{-- <li class=""><a href="{{ route('client.history') }}" class="nav-link">History</a></li> --}}
                                <li class=""><a href="{{ route('client.recommendation') }}" class="nav-link">Recommendation</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="site-logo">
                            <a href="index.html">IDS</a>
                        </div>


                        <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#"
                                class="site-menu-toggle py-5 js-menu-toggle text-white"><span
                                    class="icon-menu h3 text-white"></span></a></div>
                    </div>
                    <div class="col-lg-5">
                        <nav class="site-navigation text-left mr-auto " role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                                <li class="active"><a href="#" class="nav-link">About</a></li>
                                <li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                                @guest
                                <li><a href="{{ url('/register') }}" class="nav-link">Sign Up</a></li>
                                <li><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
                            @else
                            <li class="dropdown" class="active">
                                <a href="#" class="nav-link dropdown-toggle"  data-toggle="dropdown">{{ Auth::user()->name }}</a>
                                <ul class="dropdown-menu">
                                    {{-- <li><a href="{{ route('client.profile') }}" class="dropdown-item">Profile</a></li> --}}
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>

                            @endguest
                            </ul>
                        </nav>
                    </div>


                </div>
            </div>

        </header>



        <div class="ftco-blocks-cover-1">
            <div class="ftco-cover-1" style="background-image: url('frontend/images/hero_1.jpg');">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h1>Recommendation<span class="text-primary">Page</span> </h1>
                            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="heading-39291">Welcome to IDS, where creativity meets functionality in the world of
                            interior design.</h2>
                        {{-- <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, consequuntur, harum? Culpa, iure vel fugiat veritatis obcaecati architecto.</p> --}}
                        <p><a href="#" class="more-39291">More About Us</a></p>
                    </div>
                </div>
            </div>
        </div>
{{-- design --}}
<div class="row">
    @foreach ($recommedDetail as $design)
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="">

            <div class="media-92812">
                @foreach($design->media as $image)
                <img src="{{asset('storage/images/'.$image->image)}}" alt="Image" class="img-fluid">
                @break;
                @endforeach
                <div class="text">
                    <span class="caption">{{$design->design_name}}</span><br>
                    <span class="caption">{{$design->description}}</span>

                    <p class="my-5"><a href="{{ route('client.detail', $design->slug)}}" class="more-39291">Learn More</a></p>
                </div>
            </div>

        </div>
    @endforeach





</div>
{{-- end design --}}


                <footer class="site-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h2 class="footer-heading mb-4">About Us</h2>
                                        <p>At Interior Designers System (IDS), we're on a mission to transform the way you
                                            discover and connect with talented interior designers. Our platform brings the world
                                            of interior design directly to your fingertips, making it easier than ever to find
                                            your perfect design match. </p>

                                    </div>
                                    <div class="col-md-4 ml-auto">
                                        <h2 class="footer-heading mb-4">Features</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Category</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 ml-auto">

                                {{-- <div class="mb-5">
                      <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
                      <form action="#" method="post" class="footer-suscribe-form">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                          </div>
                        </div>
                    </div> --}}


                                <h2 class="footer-heading mb-4">Follow Us</h2>
                                <a href="#about-section" class="smoothscroll pl-0 pr-3"><span
                                        class="icon-facebook"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                                </form>
                            </div>
                        </div>
                        <div class="row pt-5 mt-5 text-center">
                            <div class="col-md-12">
                                <div class="border-top pt-5">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | IDS <i class="icon-heart text-danger"
                                            aria-hidden="true"></i> by <a href="https://colorlib.com"
                                            target="_blank">Sushmita Gopali</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </footer>

            </div>

            <script src="frontend/js/jquery-3.3.1.min.js"></script>
            <script src="frontend/js/popper.min.js"></script>
            <script src="frontend/js/bootstrap.min.js"></script>
            <script src="frontend/js/owl.carousel.min.js"></script>
            <script src="frontend/js/jquery.sticky.js"></script>
            <script src="frontend/js/jquery.waypoints.min.js"></script>
            <script src="frontend/js/jquery.animateNumber.min.js"></script>
            <script src="frontend/js/jquery.fancybox.min.js"></script>
            <script src="frontend/js/jquery.easing.1.3.js"></script>
            <script src="frontend/js/aos.js"></script>

            <script src="frontend/js/main.js"></script>
            {{-- <h1>{{$cat->name}}</h1> --}}
        </body>

        </html>
