<!doctype html>
<html lang="en">

<head>
    <title>ids</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- form design slide --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">




    <style>
        img {
            vertical-align: middle;
        }

        .slideshow-container {
            max-width: 800px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.3s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #ffffff;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #ffffff;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #999999;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #111111;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }

        /* detail */
        .containers {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .details {
            flex: 1;
            padding-right: 20px;
        }

        .details h1 {
            margin-top: 0;
        }

        .details img {
            max-width: 100%;
            height: auto;
        }

        .descriptions {
            flex: 1;
            padding-left: 20px;
        }

        .descriptions h2 {
            margin-top: 0;
        }

        /* request form */
        .containers {
            display: flex;
            justify-content: space-between;
            max-width: 2000px;
            margin: 0 auto;
            padding: 20px;
        }

        .details {
            flex: 1;
            padding-right: 20px;
        }

        .details h1 {
            margin-top: 0;
        }

        .details img {
            max-width: 100%;
            height: auto;
        }

        .descriptions {
            flex: 1;
            padding-left: 20px;
        }

        .descriptions h2 {
            margin-top: 0;
        }

        /* form */
        .wrapper {
            max-width: 800px;
            width: 100%;
            background: #fff;
            margin: 20px auto;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.125);
            padding: 30px;
        }

        .wrapper .title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            color: #baf3d7;
            text-transform: uppercase;
            text-align: center;
        }

        .wrapper .form {
            width: 100%;
        }

        .wrapper .form .inputfield {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .wrapper .form .inputfield label {
            width: 200px;
            color: #757575;
            margin-right: 10px;
            font-size: 14px;
        }

        .wrapper .form .inputfield .input,
        .wrapper .form .inputfield .textarea {
            width: 100%;
            outline: none;
            border: 1px solid #d5dbd9;
            font-size: 15px;
            padding: 8px 10px;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        .wrapper .form .inputfield .textarea {
            width: 100%;
            height: 125px;
            resize: none;
        }

        .wrapper .form .inputfield .custom_select {
            position: relative;
            width: 100%;
            height: 37px;
        }

        .wrapper .form .inputfield .custom_select:before {
            content: "";
            position: absolute;
            top: 12px;
            right: 10px;
            border: 8px solid;
            border-color: #d5dbd9 transparent transparent transparent;
            pointer-events: none;
        }

        .wrapper .form .inputfield .custom_select select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
            width: 100%;
            height: 100%;
            border: 0px;
            padding: 8px 10px;
            font-size: 15px;
            border: 1px solid #d5dbd9;
            border-radius: 3px;
        }


        .wrapper .form .inputfield .input:focus,
        .wrapper .form .inputfield .textarea:focus,
        .wrapper .form .inputfield .custom_select select:focus {
            border: 1px solid #baf3d7;
        }

        .wrapper .form .inputfield p {
            font-size: 14px;
            color: #757575;
        }

        .wrapper .form .inputfield .check {
            width: 15px;
            height: 15px;
            position: relative;
            display: block;
            cursor: pointer;
        }

        .wrapper .form .inputfield .check input[type="checkbox"] {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }

        .wrapper .form .inputfield .check .checkmark {
            width: 15px;
            height: 15px;
            border: 1px solid #baf3d7;
            display: block;
            position: relative;
        }

        .wrapper .form .inputfield .check .checkmark:before {
            content: "";
            position: absolute;
            top: 1px;
            left: 2px;
            width: 5px;
            height: 2px;
            border: 2px solid;
            border-color: transparent transparent #fff #fff;
            transform: rotate(-45deg);
            display: none;
        }

        .wrapper .form .inputfield .check input[type="checkbox"]:checked~.checkmark {
            background: #1a9ce2;
        }

        .wrapper .form .inputfield .check input[type="checkbox"]:checked~.checkmark:before {
            display: block;
        }

        .wrapper .form .inputfield .btn {
            width: 100%;
            padding: 8px 10px;
            font-size: 15px;
            border: 0px;
            background: #1a9ce2;
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
            outline: none;
        }

        .wrapper .form .inputfield .btn:hover {
            background: #1a9ce2;
        }

        .wrapper .form .inputfield:last-child {
            margin-bottom: 0;
        }

        @media (max-width:420px) {
            .wrapper .form .inputfield {
                flex-direction: column;
                align-items: flex-start;
            }

            .wrapper .form .inputfield label {
                margin-bottom: 5px;
            }

            .wrapper .form .inputfield.terms {
                flex-direction: row;
            }
        }
    </style>

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
                                {{-- <li class=""><a href="{{ route('client.history') }}" class="nav-link">History</a>
                                </li> --}}
                                <li class=""><a href="{{ route('client.recommendation') }}"
                                        class="nav-link">Recommendation</a></li>
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
                                <li class=""><a href="{{ url('/about') }}" class="nav-link">About</a></li>
                                <li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                                @guest
                                    <li><a href="{{ url('/register') }}" class="nav-link">Sign Up</a></li>
                                    <li><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
                                @else
                                    <li class="dropdown" class="active">
                                        <a href="#" class="nav-link dropdown-toggle"
                                            data-toggle="dropdown">{{ Auth::user()->name }}</a>
                                        <ul class="dropdown-menu">
                                            {{-- <li><a href="{{ route('client.profile') }}" class="dropdown-item">Profile</a>
                                            </li> --}}
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                    class="dropdown-item">Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
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
            <div class="ftco-cover-1" style="background-image: url('{{ asset('frontend/images/hero_1.jpg') }}');">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h1>Design Detail</h1>


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
                    </div></div></div></div>
        <br>
        <div class="slideshow-container">

            @if ($design->media->count() > 0)
                <div id="carousel_{{ $design->id }}" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($design->media as $index => $image)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/images/' . $image->image) }}" class="d-block w-100"
                                    alt="Design Image" style="height: 600px; width: 300px;">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carousel_{{ $design->id }}" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel_{{ $design->id }}" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            @endif

        </div>
        <div class="hello" style="padding-left: 200px; padding-right:200px;">
            <div class="card-shadow">
                <div class="card-header">
                    <div class="containers">
                        <div class="details">
                            <div class="photo-album" style="">
                                <h4>Designer Detail</h4>
                                {{-- <img src="/frontend/images/1.jpeg" alt="" height="150px" width="170px"
                                    style="border-radius: ;"> --}}
                                <div class="designer-info">
                                    <span class="designer-name">{{ $design->designer->name }}</span><br>
                                    <span class="designer-address">{{ $design->designer->address }}</span>
                                </div>
                            </div>
                        </div>


                    <div class="card-body">
                        <div class="descriptions" style="padding-left: 50px;">
                            <span class="design-name">Design Name: {{ $design->design_name }}</span><br>
                            <span class="price">Price: Rs {{ $design->price }}</span><br>
                            <span class="height">Height: {{ $design->height }}</span><br>
                            <span class="width">Width: {{ $design->width }}</span><br>
                            <span class="width">Color: {{ $design->color }}</span><br>
                            {{-- <span class="width">Design Pattern: {{ $design->pattern }}</span><br> --}}
                            <span class="description">Description: {{ $design->description }}</span>
                        </div>
                    </div>
                </div>
            </div></div>
            </div>

    </div>
    <br><br>
    {{-- <a href="{{ route('client.request', $design->slug) }}"><input type="button" class="btn btn-success"
                value="Request Customization"></a> --}}
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2 class="heading-39291">You can send customization request according to your preference from
                        the form below</h2>
                    {{-- <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, consequuntur, harum? Culpa, iure vel fugiat veritatis obcaecati architecto.</p> --}}
                    <p><a href="{{ url('/about') }}" class="more-39291">More About Us</a></p>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="descriptions">
        <h3 style="padding-left: 350px;">Customization Request Form</h3>
        <form action="{{ route('client.storerequest') }}" method="POST">
            @csrf
            <input type="hidden" name="design_id" value="{{ $design->id }}">
            <input type="hidden" name="designer_id" value="{{ $design->designed_by }}">
            <div class="wrapper">
                <div class="form">
                    <div class="inputfield">
                        <label>Width</label>
                        <input type="number" class="input" name="width">
                    </div>
                    <div class="inputfield">
                        <label>Height</label>
                        <input type="number" class="input" name="height">
                    </div>
                    <div class="inputfield">
                        <label>Color</label>
                        <input type="text" class="input" name="color">
                    </div>
                    <div class="inputfield">
                        <label>Budget</label>
                        <input type="number" class="input" name="budget">
                    </div>
                    {{-- <div class="inputfield">
                            <label for="designPattern">Design Pattern</label>
                            <select class="input" id="designPattern" name="pattern">
                                <option value="">Select Pattern</option>
                                <option value="stripes">Stripes</option>
                                <option value="complexPattern">Complex Pattern</option>
                                <option value="geometricPattern">Geometric Pattern</option>
                                <option value="floralPattern">Floral Pattern</option>
                                <option value="motifPattern">Motif Pattern</option>
                                <option value="animalPattern">Animal Pattern</option>
                            </select>
                        </div> --}}

                    <div class="inputfield">
                        <label>Description</label>
                        <textarea class="textarea" name="description"></textarea>
                    </div>
                    {{-- Design slide --}}


                    {{-- end design slide --}}
                    <div class="inputfield">
                        <input type="submit" value="Request" class="btn">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br><br>

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
                                    <input type="text"
                                        class="form-control border-secondary text-white bg-transparent"
                                        placeholder="Enter Email" aria-label="Enter Email"
                                        aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary text-white" type="button"
                                            id="button-addon2">Subscribe</button>
                                    </div>
                                </div>
                        </div> --}}


                    <h2 class="footer-heading mb-4">Follow Us</h2>
                    <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
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
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Sushmita
                                Gopali</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    </div>
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frontend/js/aos.js') }}"></script>

    <script src="{{ asset('frontend/js/main.js') }}"></script>

    <script>
        let slideIndex = 0;
        let timeoutId = null;
        const slides = document.getElementsByClassName("mySlides");
        const dots = document.getElementsByClassName("dot");

        showSlides();

        function currentSlide(index) {
            slideIndex = index;
            showSlides();
        }

        function plusSlides(step) {

            if (step < 0) {
                slideIndex -= 2;

                if (slideIndex < 0) {
                    slideIndex = slides.length - 1;
                }
            }

            showSlides();
        }

        function showSlides() {
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                dots[i].classList.remove('active');
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].classList.add('active');
            if (timeoutId) {
                clearTimeout(timeoutId);
            }
            timeoutId = setTimeout(showSlides, 5000); // Change image every 5 seconds
        }

        // start form design slide
        $(document).ready(function() {


            if ($('.bbb_viewed_slider').length) {
                var viewedSlider = $('.bbb_viewed_slider');

                viewedSlider.owlCarousel({
                    loop: true,
                    margin: 30,
                    autoplay: true,
                    autoplayTimeout: 6000,
                    nav: false,
                    dots: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        575: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        991: {
                            items: 4
                        },
                        1199: {
                            items: 6
                        }
                    }
                });

                if ($('.bbb_viewed_prev').length) {
                    var prev = $('.bbb_viewed_prev');
                    prev.on('click', function() {
                        viewedSlider.trigger('prev.owl.carousel');
                    });
                }

                if ($('.bbb_viewed_next').length) {
                    var next = $('.bbb_viewed_next');
                    next.on('click', function() {
                        viewedSlider.trigger('next.owl.carousel');
                    });
                }
            }


        });
        // end form design slide
    </script>

</body>

</html>
