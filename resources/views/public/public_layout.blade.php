<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>MaranathaFellowship Church</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/classy-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- For Home Page -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  
</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <!-- Line -->
        <div class="line-preloader"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- ***** Navbar Area ***** -->
        <div class="crose-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="croseNav">

                        <!-- Nav brand -->
                        <a href="/home" class="nav-brand" style="font-family: Lato, Helvetica, sans-serif;color:#c92f2f;" onMouseOver="this.style.color='#c92f2f'"
   onMouseOut="this.style.color='#565656'"> MaranthaFellowship Church</a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{url('/home')}}">Home</a></li>
                                    <li><a href="{{url('/sermons')}}">Sermons</a></li>
                                    <li><a href="{{url('/news')}}">News</a></li>
                                    <li><a href="{{url('/about')}}">About</a></li>
                                    <li><a href="{{url('/contact')}}">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>

            <!-- ***** Search Form Area ***** -->
            <div class="search-form-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="searchForm">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Enter keywords &amp; hit enter...">
                                    <button type="submit" class="d-none"></button>
                                </form>
                                <div class="close-icon" id="searchCloseIcon"><i class="fa fa-close" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Navbar Area ***** -->
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('content')

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <a href="#" class="footer-logo"><img src="{{ asset('img/core-img/logo2.png') }}" class="img-thumbnail" alt="" style="width:180px;height:180px;"></a>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <h5 class="widget-title">Quick Link</h5>
                            <nav class="footer-menu">
                                <ul>
                                    <li><a href="{{url('/home')}}" style="text-decoration:none;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a></li>
                                    <li><a href="{{url('/sermons')}}" style="text-decoration:none;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sermons</a></li>
                                    <li><a href="{{url('/news')}}" style="text-decoration:none;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> News</a></li>
                                    <li><a href="{{url('/about')}}" style="text-decoration:none;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About</a></li>
                                    <li><a href="{{url('/contact')}}" style="text-decoration:none;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <h5 class="widget-title">News</h5>

                            <!-- Single Latest News -->
                            <div class="single-latest-news">
                                <p>ဝတ်ပြုကိုးကွယ်ခြင်း</p>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> 3rd May 2020 Sunday    </p>
                            </div>

                            <!-- Single Latest News -->
                            <div class="single-latest-news">
                                <p>ဝတ်ပြုကိုးကွယ်ခြင်း</p>
                                <p><i class="fa fa-calendar" aria-hidden="true"></i> 3rd May 2020 Sunday</p>
                            </div>

                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <h5 class="widget-title">Contact Us</h5>

                            <div class="contact-information">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> No(101), Yangon Insein Road </p>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Sunday: 9 AM to 5 PM </p>
                                <a href="callto:001-1234-88888" style="text-decoration:none;"><i class="fa fa-phone" aria-hidden="true"></i> +9595045235 </a>
                                <a href="mailto:info.deercreative@gmail.com" style="text-decoration:none;"><i class="fa fa-envelope" aria-hidden="true"></i> maranthafellowshipchurch@gmail.com </a>
                                <!-- <p><i class="fa fa-clock-o" aria-hidden="true"></i> Opens at Sunday </p> -->
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copwrite Area -->
        <div class="copywrite-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center flex-wrap">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            MaranthafellowshipChurch &copy;<script>document.write(new Date().getFullYear());</script><br> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" style="text-decoration:none;">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js') }}"></script>
</body>

</html>

