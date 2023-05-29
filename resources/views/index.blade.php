@include('header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!doctype html>


<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="X" class="letters-loading">
                        X
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    <header class="site-header site-header-3 transparent">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-12 custom-width-note text-center">
                        <div class="header-top-note header-top-note-3">
                            <p><strong>Now Hiring:</strong> Are you a driven and motivated in <strong>Corona
                                    Situation.</strong> Need <a href="#0">Professional Cleaner?</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-area">
            <div class="container-fluid">
                <div class="row align-items-lg-center align-items-start">
                    <div class="col-xl-3 col-lg-2">
                        <div class="header-info-left-wrap">
                            <div class="header-info-left">
                                <a href="index.html" class="site-logo">
                                    <img src="assets/images/logo/logo-white.png" alt="Cleanixer">
                                </a>
                                <a href="#0" class="site-btn">Appointment <span class="icon"><i
                                            class="fal fa-calendar-alt"></i></span></a>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 d-none d-xl-block d-lg-block">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="#0">Home +</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home Style 01</a></li>
                                            <li><a href="index-2.html">Home Style 02</a></li>
                                            <li><a href="index-3.html">Home Style 03</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="#0">Services +</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Service</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">Shop +</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Default Shop</a></li>
                                            <li><a href="product-details.html">Product Details</a></li>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">News +</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#0">Pages +</a>
                                        <ul class="sub-menu">
                                            <li><a href="offer.html">Offer</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="team-details.html">Team Details</a></li>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            <li><a href="pricing.html">Pricing Plans</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 d-none d-xl-block d-lg-block">
                        <div class="header-info-right">
                            <div class="header-lang">
                                <div class="lang-icon">
                                    <a href="#0" class="site-btn">English <span class="icon"><i
                                                class="fal fa-language"></i></span></a>
                                </div>
                                <ul class="header-lang-list">
                                    <li><a href="#0">USA</a></li>
                                    <li><a href="#0">UK</a></li>
                                    <li><a href="#0">CA</a></li>
                                    <li><a href="#0">AU</a></li>
                                </ul>
                            </div>
                            <div class="header-button-list">
                                <button class="btn search-trigger"><i class="fal fa-search"></i></button>
                                <button class="btn"><i class="fal fa-shopping-cart"></i></button>
                                <button class="btn hamburger-menu-trigger"><i class="fal fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- slide area start -->
    <section class="homepage-slide homepage-slide-3 owl-carousel">
        <div class="single-slide-item single-slide-item-3 bg_img" data-overlay="6"
            data-background="assets/images/banner/banner-3-bg-1.jpeg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="single-slide-content single-slide-content-3">
                            <div class="slide-text" data-animation="fadeInUp" data-delay=".3s">
                                <p>Get Amazing Home & Qude Cleaning Experience</p>
                            </div>
                            <h1 class="slide-title" data-animation="fadeInUp" data-delay=".5s">Professional <br>
                            Cleaner.</h1>
                            <div class="slide-btns mt-30">
                                <a href="service.html" data-animation="fadeInUp" data-delay=".7s" class="site-btn boxed yellow">Our
                                    Services</a>
                                <a href="about.html" data-animation="fadeInUp" data-delay=".9s" class="site-btn boxed">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide-item single-slide-item-3 bg_img" data-overlay="6"
            data-background="assets/images/banner/banner-2-bg-1.jpeg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="single-slide-content single-slide-content-3">
                            <div class="slide-text" data-animation="fadeInUp" data-delay=".3s">
                                <p>Get Amazing Home & Qude Cleaning Experience</p>
                            </div>
                            <h1 class="slide-title" data-animation="fadeInUp" data-delay=".5s">Professional <br>
                            Cleaner.</h1>
                            <div class="slide-btns mt-30">
                                <a href="service.html" data-animation="fadeInUp" data-delay=".7s" class="site-btn boxed yellow">Our
                                    Services</a>
                                <a href="about.html" data-animation="fadeInUp" data-delay=".9s" class="site-btn boxed">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slide area end -->

    <!-- about area start -->
    <section class="about-area about-area-2 about-area-3 pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="about-right-box">
                        <h2><span>Get Free Estimate</span>
                            +971 54 223 0664</h2>
                        <span class="icon"><i class="fal fa-phone"></i></span>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-left-side about-left-side-2 about-left-side-3">
                                <div class="row">
                                    <div class="col-lg-6 col-md-5">
                                        <div class="about-thumb-big" data-tilt data-tilt-perspective="3000">
                                            <img src="assets/images/about/about-3-thumb-1.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-5">
                                        <div class="about-thumb-big mt-50">
                                            <img data-tilt data-tilt-perspective="3000" src="assets/images/about/about-3-thumb-2.jpeg" alt="">
                                            <div class="about-thumb-box">
                                                <h2 class="title"><span class="odometer" data-count="25">00</span><span class="plus">+</span>
                                                    <span class="year">Yr Experience</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-right-side about-right-side-2 about-right-side-3">
                                <div class="section-heading section-heading-3 mb-35">
                                    <h5 class="sub-title mb-22">About us</h5>
                                    <h2 class="section-title">Get Every Answers
                                        From Here</h2>
                                    <div class="section-content">
                                        <p>Local operations team on-call 24 hours a day, available to
                                            work at a moment’s notice.</p>
                                    </div>
                                </div>
                                <div class="about-right-content">
                                    <p>We provide janitorial and specialized cleaning services for all types and sizes of complexes – from small
                                        to large
                                        offices and commercial centers to industrial, warehouse, and retail locations. Our client base is
                                        comprised of both
                                        privately-owned companies and public organizations.</p>
                                    <a href="about.html" class="site-btn boxed yellow mt-35">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- brand-box area start -->
    <div class="brand-box-area pb-120">
        <div class="container">
            <div class="row mmt-none-30">
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-brand-box mt-140 mmt-30">
                        <img class="default" src="assets/images/brand/brand-3-icon-1.png" alt="">
                        <img class="hover" src="assets/images/brand/brand-3-icon-h-1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-brand-box mt-70 mmt-30">
                        <img class="default" src="assets/images/brand/brand-3-icon-2.png" alt="">
                        <img class="hover" src="assets/images/brand/brand-3-icon-h-2.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-brand-box mmt-30">
                        <img class="default" src="assets/images/brand/brand-3-icon-3.png" alt="">
                        <img class="hover" src="assets/images/brand/brand-3-icon-h-3.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-brand-box mmt-30">
                        <img class="default" src="assets/images/brand/brand-3-icon-4.png" alt="">
                        <img class="hover" src="assets/images/brand/brand-3-icon-h-4.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-brand-box mt-70 mmt-30">
                        <img class="default" src="assets/images/brand/brand-3-icon-5.png" alt="">
                        <img class="hover" src="assets/images/brand/brand-3-icon-h-5.png" alt="">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-brand-box mt-140 mmt-30">
                        <img class="default" src="assets/images/brand/brand-3-icon-6.png" alt="">
                        <img class="hover" src="assets/images/brand/brand-3-icon-h-6.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-box area end -->

    <!-- video area start -->
    <section class="counter-area bg_img pb-120" data-overlay="6" data-background="assets/images/bg/counter-bg.jpeg">
        <a href="//www.youtube.com/embed/4xe72U7mXNg?rel=0&amp;controls=0&amp;showinfo=0" data-rel="lightcase:myCollection"
            data-animation="fadeInLeft" data-delay=".1s" class="video-link">
            <div class="video-play-wrap">
                <div class="video-mark">
                    <div class="wave-pulse wave-pulse-1"></div>
                    <div class="wave-pulse wave-pulse-2"></div>
                </div>
                <div class="video-play">
                    <i class="fa fa-play"></i>
                </div>
            </div>
        </a>
        <div class="container-fluid">
            <div class="row no-gutters justify-content-end">
                <div class="col-xl-3">
                    <div class="single-counter-box yellow">
                        <div class="counter-icon">
                            <img src="assets/images/icons/counter-icon-1.png" alt="">
                        </div>
                        <div class="conter-content mt-40">
                            <div class="counter-content-top mb-30">
                                <h2 class="conter-title"><span class="counter big">10</span><span class="big">K</span>+</h2>
                                <p>Active Workers <br>
                                    & Equipment</p>
                            </div>
                            <p>We provide janitorial and specialized cleaning services for all types and sizes of complexes – from small to large.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="single-counter-box">
                        <div class="counter-icon">
                            <img src="assets/images/icons/counter-icon-2.png" alt="">
                        </div>
                        <div class="conter-content mt-40">
                            <div class="counter-content-top mb-30">
                                <h2 class="conter-title"><span class="counter big">72</span>+</h2>
                                <p>World Wide <br>
                                Coverage</p>
                            </div>
                            <p>We provide janitorial and specialized cleaning services for all types and sizes of complexes – from small to large.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video area end -->

    <!-- Service area start -->
    <section class="service-area service-area-2 service-area-3 pt-120 pb-32">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading section-heading-3 text-center mb-55">
                        <h5 class="sub-title mb-22">Services</h5>
                        <h2 class="section-title">What We Do</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-50">
                <div class="col-xl-4 col-lg-6">
                    <div class="single-service-box-2 mt-50">
                        <div class="service-box-top mb-10">
                            <div class="service-icon">
                                <i class="fal fa-home"></i>
                            </div>
                            <h4 class="service-title">House Cleaning</h4>
                        </div>
                        <div class="service-box-content">
                            <p>We provide janitorial and specialized cleaning services for all types and sizes of complexes from small to large.</p>
                            <a href="service.html" class="inline-btn"><i class="fal fa-long-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="single-service-box-2 mt-50">
                        <div class="service-box-top mb-10">
                            <div class="service-icon">
                                <i class="fal fa-washer"></i>
                            </div>
                            <h4 class="service-title">Cloth Wash</h4>
                        </div>
                        <div class="service-box-content">
                            <p>We provide janitorial and specialized cleaning services for all types and sizes of complexes from small to large.</p>
                            <a href="service.html" class="inline-btn"><i class="fal fa-long-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="single-service-box-2 mt-50">
                        <div class="service-box-top mb-10">
                            <div class="service-icon">
                                <i class="fal fa-bed"></i>
                            </div>
                            <h4 class="service-title">House Cleaning</h4>
                        </div>
                        <div class="service-box-content">
                            <p>We provide janitorial and specialized cleaning services for all types and sizes of complexes from small to large.</p>
                            <a href="service.html" class="inline-btn"><i class="fal fa-long-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="single-service-box-2 mt-50">
                        <div class="service-box-top mb-10">
                            <div class="service-icon">
                                <i class="fal fa-chair"></i>
                            </div>
                            <h4 class="service-title">Carpet &amp; Furniture</h4>
                        </div>
                        <div class="service-box-content">
                            <p>We provide janitorial and specialized cleaning services for all types and sizes of complexes from small to large.</p>
                            <a href="service.html" class="inline-btn"><i class="fal fa-long-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="single-service-box-2 mt-50">
                        <div class="service-box-top mb-10">
                            <div class="service-icon">
                                <i class="fal fa-bath"></i>
                            </div>
                            <h4 class="service-title">Washroom Cleaning</h4>
                        </div>
                        <div class="service-box-content">
                            <p>We provide janitorial and specialized cleaning services for all types and sizes of complexes from small to large.</p>
                            <a href="service.html" class="inline-btn"><i class="fal fa-long-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="single-service-box-2 mt-50">
                        <div class="service-box-top mb-10">
                            <div class="service-icon">
                                <i class="fal fa-tree"></i>
                            </div>
                            <h4 class="service-title">Park &amp; Property Clean</h4>
                        </div>
                        <div class="service-box-content">
                            <p>We provide janitorial and specialized cleaning services for all types and sizes of complexes from small to large.</p>
                            <a href="service.html" class="inline-btn"><i class="fal fa-long-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service area end -->

    <!-- footer-top box start -->
    <section class="footer-top-box-area">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-6">
                    <div class="footer-top-box d-flex align-items-center left">
                        <div class="footer-box-icon">
                            <img src="assets/images/icons/track-icon.png" alt="">
                        </div>
                        <div class="footer-box-content">
                            <h2 class="footer-box-title">Track Your Area</h2>
                            <p>We provide janitorial and specialized cleaning services for all typ es and sizes of complexes
                                from small to large
                                offices.</p>
                            <a href="contact.html" class="inline-btn"><i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="footer-top-box d-flex align-items-center right">
                        <div class="footer-box-icon">
                            <img src="assets/images/icons/estimate-icon.png" alt="">
                        </div>
                        <div class="footer-box-content">
                            <h2 class="footer-box-title">Request An Estimate</h2>
                            <p>We provide janitorial and specialized cleaning services for all typ es and sizes of complexes
                                from small to large
                                offices.</p>
                            <a href="contact.html" class="inline-btn"><i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer-top box end -->

    <!-- wcu-area start -->
    <section class="wcu-area wcu-area-2 bg-2 pt-220 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="wcu-left">
                        <div class="section-heading section-heading-3 mb-45 pr-35">
                            <h5 class="sub-title mb-22">Why Choose us</h5>
                            <h2 class="section-title">We Will Make Absolutely
                                Any Place Clean, Neat.</h2>
                            <div class="content mt-35">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam.</p>
                            </div>
                        </div>
                        <div class="wcu-box-wrapper wcu-box-wrapper-2 mt-none-30">
                            <div class="wcu-box wcu-box-2 mt-30">
                                <div class="wcu-icon mb-25">
                                    <img src="assets/images/icons/service-icon-2.png" alt="">
                                </div>
                                <div class="wcu-content">
                                    <h4 class="wcu-title">Expert Employee</h4>
                                    <p>Lorem ipsum dolor sit amet, c
                                    nsectetur adip isicing elit, sed
                                    do eiusmod tempor.</p>
                                </div>
                                <span class="count">01</span>
                            </div>
                            <div class="wcu-box wcu-box-2 mt-30">
                                <div class="wcu-icon mb-25">
                                    <img src="assets/images/icons/service-icon-3.png" alt="">
                                </div>
                                <div class="wcu-content">
                                    <h4 class="wcu-title">24/7 OT Support</h4>
                                    <p>Lorem ipsum dolor sit amet, c
                                    nsectetur adip isicing elit, sed
                                    do eiusmod tempor.</p>
                                </div>
                                <span class="count">02</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="wcu-right wcu-right-2">
                        <div class="wcu-thumb-2" data-overlay="9" data-tilt data-tilt-perspective="3000">
                            <img src="assets/images/service/wcu-2-thumb-2.jpeg" alt="">
                        </div>
                        <div class="wcu-shape" data-tilt data-tilt-perspective="3000">
                            <img src="assets/images/service/wcu-shape.jpeg" alt="">
                        </div>
                        <div class="wcu-thumb-1" data-tilt data-tilt-perspective="3000">
                            <img src="assets/images/service/wcu-2-thumb-1.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- wcu-area end -->

    <!-- cta area start -->
    <section class="cta-area cta-area-2 pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 offset-xl-5">
                    <div class="cta-wrap">
                        <div class="section-heading section-heading-2 mb-50">
                            <h5 class="sub-title mb-22">Call To Action</h5>
                            <h2 class="section-title">Get an emergency call
                                or appoinment.</h2>
                        </div>
                        <div class="cta-form mt-none-10">
                            <div class="form-group mt-10">
                                <label for="name"><i class="fal fa-user"></i></label>
                                <input type="text" id="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group mt-10">
                                <label for="email"><i class="fal fa-envelope"></i></label>
                                <input type="email" id="email" placeholder="Enter your email">
                            </div>
                            <div class="from-group-wrapper mt-10">
                                <div class="form-group">
                                    <label for="date"><i class="fal fa-calendar-alt"></i></label>
                                    <input type="date" id="date">
                                </div>
                                <div class="form-group">
                                    <select name="subject">
                                        <option data-display="Subject">Subject</option>
                                        <option value="1">Services</option>
                                        <option value="2">Cleaning</option>
                                        <option value="3">Cleaning</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mt-10">
                                <button type="submit" class="site-btn boxed">Submit Request</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->

    <!-- team area start -->
    <section class="team-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading section-heading-3 text-center mb-55">
                        <h5 class="sub-title mb-22">Team</h5>
                        <h2 class="section-title">Our Experts</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-none-30">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="singel-team-box mt-30">
                        <div class="team-thumb mb-40">
                            <img src="assets/images/team/team-1-thumb-1.jpeg" alt="">
                        </div>
                        <div class="team-content">
                            <h4 class="name">Rosalina D. William</h4>
                            <span class="designation">Founder</span>
                            <div class="social-links mt-25">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="singel-team-box mt-30">
                        <div class="team-thumb mb-40">
                            <img src="assets/images/team/team-1-thumb-2.jpeg" alt="">
                        </div>
                        <div class="team-content">
                            <h4 class="name">Hilixer D. Browni</h4>
                            <span class="designation">CEO</span>
                            <div class="social-links mt-25">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="singel-team-box mt-30">
                        <div class="team-thumb mb-40">
                            <img src="assets/images/team/team-1-thumb-3.jpeg" alt="">
                        </div>
                        <div class="team-content">
                            <h4 class="name">Miranda D. Kilixer</h4>
                            <span class="designation">Cleaner</span>
                            <div class="social-links mt-25">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="singel-team-box mt-30">
                        <div class="team-thumb mb-40">
                            <img src="assets/images/team/team-1-thumb-4.jpeg" alt="">
                        </div>
                        <div class="team-content">
                            <h4 class="name">Yokoloko Y. Pakura</h4>
                            <span class="designation">Cleaner</span>
                            <div class="social-links mt-25">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team area end -->

    <!-- testimonial area start -->
    <section class="testimonial-area testimonial-area-2 bg-3 pt-120 pb-160">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 text-center">
                    <div class="section-heading section-heading-3 white text-center mb-75">
                        <h5 class="sub-title mb-22">Testimonials</h5>
                        <h2 class="section-title">What Our Customers Say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-carousel testimonial-carousel-2 owl-carousel">
                        <div class="single-testimonial">
                            <div class="thumb">
                                <img src="assets/images/testimonial/testiimonial-1-author-1.png" alt="">
                                <span class="icon"><i class="fal fa-check"></i></span>
                            </div>
                            <div class="content">
                                <span class="author-logo mb-25"><img
                                        src="assets/images/testimonial/testiimonial-1-logo-1.png" alt=""></span>
                                <p>“ Clinixer has performed exceptionally well. … Management staff makes frequent site
                                    visits to
                                    check the veracity of their performance. When additional services (they do much more
                                    than
                                    just clean, they do maintenance, too) or adjustments to cleaning regimens were needed
                                    they
                                    were quick to tackle or amend changes with success ”</p>
                                <div class="testimonial-meta mt-20">
                                    <h2 class="name">Rosalina D. William <span class="designation">Founder, Miranda
                                            Logistics Co.</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="thumb">
                                <img src="assets/images/testimonial/testiimonial-1-author-1.png" alt="">
                                <span class="icon"><i class="fal fa-check"></i></span>
                            </div>
                            <div class="content">
                                <span class="author-logo mb-25"><img
                                        src="assets/images/testimonial/testiimonial-1-logo-1.png" alt=""></span>
                                <p>“ Clinixer has performed exceptionally well. … Management staff makes frequent site
                                    visits to
                                    check the veracity of their performance. When additional services (they do much more
                                    than
                                    just clean, they do maintenance, too) or adjustments to cleaning regimens were needed
                                    they
                                    were quick to tackle or amend changes with success ”</p>
                                <div class="testimonial-meta mt-20">
                                    <h2 class="name">Rosalina D. William <span class="designation">Founder, Miranda
                                            Logistics Co.</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->

    <!-- news area start -->
    <div class="news-area news-area-2 news-area-3 pt-120 pb-120">
        <div class="container">
            <div class="row mt-none-50">
                <div class="col-xl-4 col-lg-6">
                    <article class="postbox post format-image mt-50">
                        <div class="postbox-text">
                            <div class="postbox-thumb" data-overlay="5">
                                <a href="blog-details.html">
                                    <img src="assets/images/news/news-2-thumb-1.jpeg" alt="blog image">
                                </a>
                            </div>
                            <span class="post-cat">Cloth Wash</span>
                            <div class="postbox-content">
                                <div class="post-meta mb-10">
                                    <a href="#0"><i class="fal fa-user"></i> By Admin </a>
                                    <a href="#0"><i class="fal fa-calendar-alt"></i> 24th March 2020</a>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-details.html">Superior clean through our trained
                                        staff.</a>
                                </h4>
                                <a href="blog-details.html" class="inline-btn"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <article class="postbox post format-image mt-50">
                        <div class="postbox-text bg_img">
                            <div class="postbox-thumb" data-overlay="5">
                                <a href="blog-details.html">
                                    <img src="assets/images/news/news-2-thumb-2.jpeg" alt="blog image">
                                </a>
                            </div>
                            <span class="post-cat">Cloth Wash</span>
                            <div class="postbox-content">
                                <div class="post-meta mb-10">
                                    <a href="#0"><i class="fal fa-user"></i> By Admin </a>
                                    <a href="#0"><i class="fal fa-calendar-alt"></i> 24th March 2020</a>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-details.html">Superior clean through our trained
                                        staff.</a>
                                </h4>
                                <a href="blog-details.html" class="inline-btn"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <article class="postbox post format-image mt-50">
                        <div class="postbox-text">
                            <div class="postbox-thumb" data-overlay="5">
                                <a href="blog-details.html">
                                    <img src="assets/images/news/news-2-thumb-3.jpeg" alt="blog image">
                                </a>
                            </div>
                            <span class="post-cat">Cloth Wash</span>
                            <div class="postbox-content">
                                <div class="post-meta mb-10">
                                    <a href="#0"><i class="fal fa-user"></i> By Admin </a>
                                    <a href="#0"><i class="fal fa-calendar-alt"></i> 24th March 2020</a>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-details.html">Superior clean through our trained
                                        staff.</a>
                                </h4>
                                <a href="blog-details.html" class="inline-btn"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- news area end -->

    <!-- footer area start -->
    <footer class="site-footer bg-4 site-footer-2 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="title">Our Services</h4>
                        <ul>
                            <li><a href="#0"><i class="fal fa-angle-right "></i> Maid Services</a></li>
                            <li><a href="#0"><i class="fal fa-angle-right "></i> Window Cleaning</a></li>
                            <li><a href="#0"><i class="fal fa-angle-right "></i> Domestic Cleaning</a></li>
                            <li><a href="#0"><i class="fal fa-angle-right "></i> House Cleaning</a></li>
                            <li><a href="#0"><i class="fal fa-angle-right "></i> Professional Carwashing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget service-menu">
                        <h4 class="title">Our Services</h4>
                        <ul>
                            <li><a href="about.html"><i class="fal fa-angle-right "></i> About Company</a></li>
                            <li><a href="service.html"><i class="fal fa-angle-right "></i> Services</a></li>
                            <li><a href="pricing.html"><i class="fal fa-angle-right "></i> Pricing</a></li>
                            <li><a href="#0"><i class="fal fa-angle-right "></i> Calculator</a></li>
                            <li><a href="blog.html"><i class="fal fa-angle-right "></i> Our Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6">
                    <div class="footer-widget footer-contact-widget">
                        <h4 class="title">Contact Us</h4>
                        <div class="footer-contact-info">
                            <div class="content">
                                <p>16/A, Toma City, New York,
                                    United States, NY, 10005</p>
                                <a href="#0"><i class="fal fa-angle-right"></i> Get Direction</a>
                            </div>
                            <div class="box">
                                <h2><span>Get Free Estimate</span>
                                    +971 54 223 0664</h2>
                                <span class="icon"><i class="fal fa-phone"></i></span>
                            </div>
                        </div>
                        <div class="footer-social-info">
                            <div class="content">
                                <a href="tel:+971 54 223 0664"><span>T:</span> +971 54 223 0664</a>
                                <a href="mailto:info@alnasim.ae"><span>E:</span> info@alnasim.ae</a>
                            </div>
                            <div class="social-links">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin"></i></a>
                                <a href="#0"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="copyright mt-100 pt-30 pb-30 text-center">
                        <p>Copyright By@MohabTarig - 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- Fullscreen search -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fal fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end fullscreen search -->
    
    <!-- extra info start -->
    <div class="extra-info">
        <div class="close-icon menu-close">
            <button>
                <i class="far fa-window-close"></i>
            </button>
        </div>
        <div class="logo-side mb-30">
            <a href="index.html" class="site-logo-2">
                <img src="assets/images/logo/logo-white.png" alt="" />
            </a>
        </div>
        <div class="side-info">
            <div class="contact-list mb-40">
                <h4>About Us</h4>
                <p>We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain
                    was born and I will give you a completed accounts of
                    the system and expound.</p>
                <div class="mt-30 mb-30">
                    <a href="contact.html" class="site-btn white">CONTACT US <span class="icon"><i
                                class="fal fa-calendar-alt"></i></span></a>
                </div>
            </div>
            <div class="contact-list mb-40">
                <h4>Contact Info</h4>
                <p><i class="fal fa-rocket"></i> <span>123/A, Miranda City Likaoli Prikano, Dope United States </span>
                </p>
                <p><i class="far fa-phone"></i> <span>+0989 7876 9865 9</span> </p>
                <p><i class="far fa-envelope-open"></i><span>info@example.com</span></p>
            </div>
        </div>
    </div>
    <div class="offcanvas-overly"></div>
    <!-- extra info end -->


</body>



    </html>
@include('footer')
<script type="text/javascript">
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $("#ajaxSubmit").click(function(e){
    e.preventDefault();
    $('#ajaxSubmit').prop("disabled", true)
    $("#span").append('<div class="spinner-border text-light" role="status"><span class="sr-only">Loading...</span></div>');
    var name = $("input[name=name]").val();
    var email = $("input[name=email]").val();
    var message = $("textarea[name=message]").val();
    var services = $("select[name=services]").val();
    var phone = $("input[name=phone]").val();
    $.ajax({
    type:'POST',
    url:"{{ route('send-email') }}",
    data:{message:message, services:services, email:email, services:services,phone:phone,name:name},
    success:function(data){

        
    // alert(data.success);
   

    
            $("#span").remove();

                    if($.isEmptyObject(data.error)){
                     
    $("#message").append(data.success).addClass('alert alert-success');
    $('#ajaxSubmit').prop("disabled", false)
    

                    }

                  

   

 
    
    
    
    },
    error: function (err) {
     
      
        $.each(err.responseJSON.errors, function (key, value) {
            
            console.log("#" + key + '_error'+'.'+ value[0]);
            var errors = $.parseJSON(err.responseText);
                   

            // $("#message").append(err.responseJSON.errors).addClass('alert alert-danger');
            $("#span").remove();


            if( err.status === 422 ) {

            
                    
                        $("#" + key + "_error").text(value[0]).addClass('alert alert-danger');
                        $('#ajaxSubmit').prop("disabled", false)
                   
                }
       
            });

    
    },
    });
    });
    </script>