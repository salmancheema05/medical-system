<!DOCTYPE html>
<html lang="en">
    <!-- Required Meta Tags -->
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Medino</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('public/styles/images/logo/favicon.png')}}" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{url('public/styles/css/animate-3.7.0.css')}}">
    <link rel="stylesheet" href="{{url('public/styles/css/font-awesome-4.7.0.min.css')}}">
    <link rel="stylesheet" href="{{url('public/styles/css/bootstrap-4.1.3.min.css')}}">
    <link rel="stylesheet" href="{{url('public/styles/css/owl-carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('public/styles/css/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{url('public/styles/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{url('public/styles/css/style.css')}}">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-md-flex">
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> call us now! +1 305 708 2563</h6>
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span> medical@example.com</h6>
                        <h6><span class="mr-2"><i class="fa fa-map-marker"></i></span> Find our Location</h6>
                    </div>
                    <div class="col-lg-3">
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.html"><img src="public/websiteassets/images/logo/logo.png" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('find_doctor')}}">Find Doctor</a></li>
                        <li><a href="{{url('department')}}">Department</a></li>
                        <li class="menu-has-children"><a href="">Pages</a>
                            <ul>
                                <li><a href="about.html">about us</a></li>
                                <li><a href="elements.html">elements</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a href="">blog</a>
                            <ul>
                                <li><a href="blog-home.html">blog home</a></li>
                                <li><a href="blog-details.html">blog details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="{{url('login')}}">Login</a></li>
                        <li><a href="{{url('register')}}">Registor</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="container">
            <div class="row">
              <div class="col-lg-5 offset-lg-1 align-self-center" style ='margin-top:-2rem'>
                  <div class="appointment-form text-center ">

                      <form action="#">
                          <div class="form-group">
                              <input type="text" name='search_doctor' placeholder='Search doctor.... '>
                          </div>
                          <div class="form-group">
                              <input type="email" placeholder="Your Email" >
                          </div>
                          <div class="form-group">
                              <input type="text" id="datepicker" placeholder="Date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date'" required>
                          </div>

                          <a href="#" class="template-btn">appointment now</a>
                      </form>
                  </div>
              </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <div>@yield('contant')</div>


    <!-- Footer Area Starts -->
    <footer class="footer-area section-padding">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-3">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">top products</h3>
                            <ul>
                                <li class="mb-2"><a href="#">managed website</a></li>
                                <li class="mb-2"><a href="#">managed reputation</a></li>
                                <li class="mb-2"><a href="#">power tools</a></li>
                                <li><a href="#">marketing service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">newsletter</h3>
                            <p class="mb-4">You can trust us. we only send promo offers, not a single.</p>
                            <form action="#">
                                <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                                <button type="submit" class="template-btn">subscribe now</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 offset-xl-1 col-lg-3">
                        <div class="single-widge-home">
                            <h3 class="mb-4">instagram feed</h3>
                            <div class="feed">
                                <img src="public/styles/images/feed1.jpg" alt="feed">
                                <img src="public/styles/images/feed2.jpg" alt="feed">
                                <img src="public/styles/images/feed3.jpg" alt="feed">
                                <img src="public/styles/images/feed4.jpg" alt="feed">
                                <img src="public/styles/images/feed5.jpg" alt="feed">
                                <img src="public/styles/images/feed6.jpg" alt="feed">
                                <img src="public/styles/images/feed7.jpg" alt="feed">
                                <img src="public/styles/images/feed8.jpg" alt="feed">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="social-icons ">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="{{url('public/styles/js/vendor/bootstrap-4.1.3.min.js')}}"></script>
    <script src="{{url('public/styles/js/vendor/wow.min.js')}}"></script>
    <script src="{{url('public/styles/js/vendor/owl-carousel.min.js')}}"></script>
    <script src="{{url('public/styles/js/vendor/jquery.datetimepicker.full.min.js')}}"></script>
    <script src="{{url('public/styles/js/vendor/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('public/styles/js/vendor/superfish.min.js')}}"></script>
    <script src="{{url('public/styles/js/main.js')}}"></script>
    <script src="{{url('public/ajax/city.js')}}"></script>
    <script src="{{url('public/ajax/fetchdoctor.js')}}"></script>
</body>
</html>
