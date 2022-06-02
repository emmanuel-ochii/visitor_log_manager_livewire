<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Welcome To Tenece Professional Services</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/imp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!--Livewire Styles -->
    @livewireStyles
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-16x16.png') }}" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
    <div class="boxed_wrapper ltr">

        <div class="preloader"></div>

        <!-- main header -->
        <header class="main-header main-header-style2">
            <!--Start Header upper -->
            <div class="header-upper">
                <div class="container clearfix">
                    <div class="outer-box clearfix">
                        <div class="header-upper-left-style2 max-width float-left clearfix">
                            <div class="header-social-links">
                                <ul class="social-links-style1">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-upper-middle-style2 max-width float-left clearfix">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('images/resources/logo.png') }}"
                                        alt="Tenece Logo" title="Tenece"></a>
                            </div>
                        </div>
                        <div class="header-upper-right-style2 max-width float-right clearfix">
                            <div class="call-us-now">
                                <div class="icon thm-clr1">
                                    <span class="flaticon-smartphone"></span>
                                </div>
                                <div class="title">
                                    <h6>Call Now</h6>
                                    <a href="tel:6668880000">666 888 0000</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!--Start header lawer style2 -->
            <div class="header-lawer-style2">
                <div class="container clearfix">
                    <div class="outer-box clearfix">
                        <!--Top Left-->
                        <div class="header-lawer-left-style2 float-left">
                            <div class="nav-outer clearfix">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler style2"><span class="icon fa fa-bars"></span></div>
                                <!-- Main Menu -->
                                <nav class="main-menu style2 navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li><a href="index.html">Home Page 01</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li class="dropdown"><a href="#">Our Projects</a>
                                                <ul>
                                                    <li><a href="yachts.html">PIEWA Projects</a></li>
                                                    <li><a href="yachts-details.html">Cloe Projects</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="destinations.html">Offices</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- Main Menu End-->
                            </div>
                        </div>
                        <!--Top Right-->
                        <div class="header-lawer-right-style2 clearfix float-right">
                            <div class="language-switcher">
                                <div id="polyglotLanguageSwitcher">
                                    <form action="#">
                                        <select id="polyglot-language-options">
                                            <option id="en" value="en" selected>English</option>
                                            <option id="fr" value="fr">French</option>
                                            <option id="de" value="de">German</option>
                                            <option id="it" value="it">Italian</option>
                                            <option id="es" value="es">Spanish</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--End header lawer style2-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="container">
                    <div class="clearfix">
                        <!--Logo-->
                        <div class="logo float-left">
                            <a href="index.html" class="img-responsive"><img
                                    src="{{ asset('images/resources/logo.png') }}" alt="" title="Tenece"></a>
                        </div>
                        <!--Right Col-->
                        <div class="right-col float-right">
                            <!-- Main Menu -->
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Sticky Header-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img
                                src="{{ asset('images/resources/logo.png') }}" alt="" title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->

        </header>


        <!-- Start Main Slider -->
        <section class="main-slider style2">
            <div class="slider-box">
                <!-- Banner Carousel -->
                <div class="banner-carousel owl-theme owl-carousel text-center">
                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(images/slides/v2-1.jpg)"></div>
                        <div class="auto-container">
                            <div class="content">
                                <div class="title thm-clr1">Professional Services At It's Best</div>
                                <div class="big-title">Yacht & Boat<br> Services</div>
                                <div class="text">The widest range of boats, in 800 destinations, from the<br>
                                    Mediterranean to the Caribbean.</div>
                                <div class="btn-box">
                                    <a href="#">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(images/slides/v2-2.jpg)"></div>
                        <div class="auto-container">
                            <div class="content">
                                <div class="title thm-clr1">Come & Let’s Enjoy Our Best</div>
                                <div class="big-title">Yacht & Boat<br> Services</div>
                                <div class="text">The widest range of boats, in 800 destinations, from the<br>
                                    Mediterranean to the Caribbean.</div>
                                <div class="btn-box">
                                    <a href="#">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(images/slides/v2-3.jpg)"></div>
                        <div class="auto-container">
                            <div class="content">
                                <div class="title thm-clr1">Come & Let’s Enjoy Our Best</div>
                                <div class="big-title">Yacht & Boat<br> Services</div>
                                <div class="text">The widest range of boats, in 800 destinations, from the<br>
                                    Mediterranean to the Caribbean.</div>
                                <div class="btn-box">
                                    <a href="#">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Main Slider -->


        @yield('content')

        <!--Start footer area Style2-->
        <footer class="footer-area style2">
            <div class="footer-bottom">
                <div class="container">
                    <div class="outer-box">
                        <div class="copyright-text">
                            <p>© Copyright 2022 by <a href="http://www.tenece.com">Tenece</a> Professional Services</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End footer area Style2-->


        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="icon-angle"></span>
        </button>

    </div>


    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/appear.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('js/isotope.js')}}"></script>
    <script src="{{asset('js/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{asset('js/jquery.countTo.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/jquery.enllax.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
    <script src="{{asset('js/jquery.paroller.min.js')}}"></script>
    <script src="{{asset('js/owl.js')}}"></script>
    <script src="{{asset('js/validation.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/scrollbar.js')}}"></script>

    <script src="{{asset('assets/language-switcher/jquery.polyglot.language.switcher.js')}}"></script>
    <script src="{{asset('assets/timepicker/timePicker.js')}}"></script>
    <script src="{{asset('assets/html5lightbox/html5lightbox.js')}}"></script>
    <!-- jQuery ui js -->
    <script src="{{asset('assets/jquery-ui-1.11.4/jquery-ui.js')}}"></script>

    <!--Livewire Scripts -->
    @livewireScripts
    <script>

        window.addEventListener('swal:modal', event => {
            swal({
              title: event.detail.message,
              text: event.detail.text,
              icon: event.detail.type,
            });
        });

        window.addEventListener('swal:confirm', event => {
            swal({
              title: event.detail.message,
              text: event.detail.text,
              icon: event.detail.type,
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                window.livewire.emit('remove');
              }
            });
        });
         </script>

    <!-- thm custom script -->
    <script src="{{asset('js/custom.js')}}"></script>



</body>

</html>
