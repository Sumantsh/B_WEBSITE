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

<header id="myheader">
    <div class="container-xxl  position-relative  p-2" id="header" style="box-shadow: 4px 4px 35px rgba(244, 122, 52,.0); background:; border-radius:8px" id="navbar">

            <nav class="navbar  navbar-expand-lg navbar-light  px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{ URL ('/')}}" class="navbar-brand p-0">
                    <h1 style="color: #666" class="m-0"><i class="fa fa-search me-2 " style="color: "></i>XFine<span class="">_Solution</span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>

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
            </nav>
        </div>
</header>
        <!-- Navbar & Hero End -->

@yield('content')
@yield('products')
@yield('checkout_form')
@yield('add_prd')
@yield('product_details')
@yield('Checkout')


  <!-- Footer Start -->
  <div class="container-fluid bg-primary text-light footerpt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex flex-column ">
                <h5 class="text-white mb-4">Popular Link</h5>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">Project Gallery</h5>
                <div class="row g-2">
                    <div class="col-4">
                        <img class="img-fluid" src="{{asset('img/portfolio-1.jpg')}}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="{{asset ('img/portfolio-2.jpg')}}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="{{asset ('img/portfolio-3.jpg')}}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="{{asset ('img/portfolio-4.jpg')}}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="{{asset ('img/portfolio-5.jpg')}}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="{{asset ('img/portfolio-6.jpg')}}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">Newsletter</h5>
                
                <div class="position-relative w-100 " style="margin-top: 20%">
                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                    <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-lg-5">
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
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->

</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset ('js/app.js')}}" ></script>
</body>

</html>