<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    {{-- <link href="lib/animate/animate.min.css" rel="stylesheet"> --}}
    {{-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> --}}
    {{-- <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet"> --}}

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <!-- <link href="./css/style.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="{{asset('css/newstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<!-- Navbar & Hero Start -->

<header id="myheader" style="display: none">
    <div class="container-xxl  position-relative  p-2" id="header" style="box-shadow: 4px 4px 35px rgba(244, 122, 52,.0); background:; border-radius:8px" id="navbar">

            <nav id="oldnav" style="display: none" class="navbar  navbar-expand-lg navbar-light  px-4 px-lg-5 py-3 py-lg-0">

                <a href="{{ URL ('/')}}" class="navbar-brand p-0">
                    <h1 style="color: #666" class="m-0"><i class="fa fa-search me-2 " style="color: "></i>XFine<span class="">_Solution</span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>

                <div class="nav_items">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>

                <div  class="collapse   navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav w-100 justify-content-end  ">
                        
                    <div class="mynav" style="">

                        <a href="{{URL ('/')}}" style="font-weight:500" class="nav-item my-item  nav-link active">Home</a>
                        <a href="{{URL ('about')}}"  style="font-weight:500" class="nav-item my-item nav-link ">About</a>
                        <a href="{{URL ('contact')}}"  style="font-weight:500" class="nav-item my-item nav-link ">Contact</a>
                        <a href="{{URL ('service')}}"  style="font-weight:500" class="nav-item my-item nav-link ">Service</a>
                    
                    </div>

                    </div>
                    <button type="button" style="color:#666;" class="btn  text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
                    
                </div>

            </div>
            </nav>
        </div>
</header>

<header id="new_header">
    <div class="top_nav">
        <div class="cmp_logo">
            <a href="{{ URL ('/')}}" class="navbar-brand p-0">
                {{-- <h1 style="color: #666" class="m-0"><i class="fa fa-search me-2 " style="color: "></i>XFine<span class="">_Solution</span></h1> --}}
                <img  src="{{asset ('img/logo.png')}}" alt="">
            </a>
        </div>
        <div class="search_bar">
            <div class="input_wrapper">
                <input class="search" type="serach">
                <span><i class="fa fa-search me-2 " style="color: "></i></span>
            </div>
        </div>
        <div class="social">
            <i class="fa fa-phone"></i>
            <i class="fa-solid fa-heart"></i>
            <i class="fa-solid fa-user"></i>
        </div>

        <div class="hamburger_wrapper">
            <div class="hamburger">
                <i class="fa-solid fa-bars"></i>
                <i class="fa-solid fa-xmark"></i>
            </div>
            
        </div>

    </div>
    <div class="down_nav">
        <div class="mynav" style="">

        <div class="nav_items">
            <a href="{{URL ('/')}}" style="font-weight:500" class="nav-item my-item  nav-link active">Home</a>
        </div>             
        
        <div class="nav_items" id="nav_items" >
            <a href="{{URL ('products')}}"  style="font-weight:500" class="nav-item my-item nav-link ">COMPUTER COMPONENTS <span id="drop_arrow"><i class="fa-solid fa-chevron-down"></i></span></a> 

            <div class="component_drop">
                <div class="up">
                    <a class="drop_link" href="{{url ('products')}}">Motherboard</a>
                    <a class="drop_link" href="{{url ('products')}}">Processor</a>
                    <a class="drop_link" href="{{url ('products')}}">Ram</a>
                    <a class="drop_link" href="{{url ('products')}}">Graphics</a>
                    <a class="drop_link" href="{{url ('products')}}">Ssd</a>
                </div>
                <div class="down2">
                    <a class="drop_link" href="{{url ('products')}}">Pen Drives</a>
                    <a class="drop_link" href="{{url ('products')}}">Usb Mouse</a>
                    <a class="drop_link" href="{{url ('products')}}">Wireless Mouse</a>
                    <a class="drop_link" href="{{url ('products')}}">Cabinets</a>
                    <a class="drop_link" href="{{url ('products')}}">Laptops</a>
                </div>
            </div>


            </div>

            <div class="nav_items">
                <a href="{{URL ('products')}}"  style="font-weight:500" class="nav-item my-item nav-link ">
                    PRE-BUILD SYSTEMS <span><i class="fa-solid fa-chevron-down"></i></span></a>

                    <div class="prebuild_drop">
                        <a href=""></a>
                    </div>
            </div>

            <div class="nav_items">
                <a href="{{URL ('service')}}"  style="font-weight:500" class="nav-item my-item nav-link ">Service</a>
            </div>


            <div class="nav_items">
                <a href="{{URL ('about')}}"  style="font-weight:500" class="nav-item my-item nav-link ">About</a>
            </div>
                        
            <div class="nav_items">
                <a href="{{URL ('contact')}}"  style="font-weight:500" class="nav-item my-item nav-link ">Contact</a>
            </div>


            
        </div>
    </div>
</header>


        <!-- Navbar & Hero End -->

@yield('content')
@yield('checkout_form')
@yield('add_prd')
@yield('product_details')
@yield('Checkout')
@yield('products')


<!-- Footer Start -->



<div class="container-fluid d-lg-flex">
    <div class="container py-4">
        <p class='text-light my-0'>Class, Inspiration, Latest News and Awesomeness</p>
        <p class='font-size-1-4 my-0'>New ideas and a whole bunch of madness delivered to your inbox as it happens!</p>
    </div>

    <div class="container d-lg-flex gap-2" style="align-items: center">
        <input type="email" placeholder="Your Email..." >
        <input type="text" placeholder="Name">
        <input type="button" value="Subscribe" class='bg-dark text-light'>
    </div>
    
</div>

<div class="container-fluid text-dark bg-white footerpt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-1">

        <div class="row g-5">
            <div class="col-md-6 col-lg-3">
                <h5 class="text-dark mb-4 text-uppercase font-weight-bold">Information</h5>
                <a class="btn btn-link d-block" href="/about">About Us</a>
                <a class="btn btn-link d-block" href="">Payment</a>
                <a class="btn btn-link d-block" href="">Privacy Policy</a>
                <a class="btn btn-link d-block" href="">Terms & Condition</a>
            </div>
            <div class="col-md-6 col-lg-3 d-flex flex-column">
                <h5 class="text-dark mb-4 text-uppercase font-weight-bold">Customer Services</h5>
                <a class="btn btn-link d-block" href="/contact">Contact Us</a>
                <a class="btn btn-link d-block" href="">Refunds and Returns</a>
                <a class="btn btn-link d-block" href="/service">Services</a>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-dark mb-4 text-uppercase font-weight-bold">My Profile</h5>
                <div class="row g-2">
                    <a class="btn btn-link d-block" href="">My Profile</a>
                    <a class="btn btn-link d-block" href="">Orders and Order History</a>
                    <a class="btn btn-link d-block" href="">Wishlist</a>
                    <a class="btn btn-link d-block" href="">Newsletter</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-dark mb-4 text-uppercase font-weight-bold">Stay in Touch</h5>
                
                <div class="position-relative w-100">
                    <input class="form-control border-1 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                    <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-dark fs-4"></i></button>
                </div>
                <div class="d-flex pt-2 pl-20">
                    <a class="btn btn-social" href=""><i class="fab fa-twitter text-dark"></i></a>
                    <a class="btn btn-social" href=""><i class="fab fa-facebook-f text-dark"></i></a>
                    <a class="btn btn-social" href=""><i class="fab fa-instagram text-dark"></i></a>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container px-lg-5">
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<!-- Footer End -->

<livewire:cart />

<!-- Back to Top -->

</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset ('js/app.js')}}" ></script>
<script src="{{asset ('js/new.js')}}" ></script>
<@livewireScripts
</body>

</html>