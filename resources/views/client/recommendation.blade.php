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
    <style>
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
                                {{-- <li class=""><a href="{{ route('client.history') }}" class="nav-link">History</a> --}}
                                <li class=""><a href="{{ route('client.recommendation') }}" class="nav-link">Recommendation</a>
                                </li>
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
            <div class="ftco-cover-1" style="background-image: url('frontend/images/hero_1.jpg');">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h1>Recommendation <span class="text-primary">Form</span> </h1>
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
                        <h2 class="heading-39291">You can send the requirements according to your preferences from the following form. </h2>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="descriptions">
            <h3 style="padding-left: 350px;">Requirement Form</h3>
            <form action="{{route('client.page')}}" method="POST">
                @csrf

                <div class="wrapper">
                    <div class="form">
                        <div class="inputfield">
                            <label>Category</label>
                            <select id="product_category" name="category_id">
                                <option value="">Select category</option>
                                @foreach ($category as $categories)
                                    <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                @endforeach
                            </select>
                        </div>
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
                        <div class="inputfield">
                           <input type="submit" value="Request" class="btn">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        {{-- recommended design --}}

        {{-- end recommended design --}}
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

</body>

</html>
