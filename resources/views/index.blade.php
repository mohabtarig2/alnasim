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
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="M" class="letters-loading">
                        M
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
                            <p>{{__('message.Welcome_to_our_Magic_Hand_Services')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-area mt-3">
            <div class="container-fluid">
                <div class="row align-items-lg-center align-items-start">
                    <div class="col-xl-3 col-lg-2">
                        <div class="header-info-left-wrap">
                            <div class="header-info-left">
                                <a href="" class="site-logo">
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
                                    <li><a href="#home">{{__('message.Home')}} </a>
                                  
                                    </li>
                                    <li><a href="#about">{{__('message.About')}}</a></li>
                                    <li><a href="#how">{{__('message.How_It_Works')}} </a>
                                
                                    </li>
                                    <li><a href="#why">{{__('message.WhyUs')}} </a>
                                 
                                    </li>
                                    <li><a href="#contact">{{__('message.contact')}} </a></li>
                                    <li><a href="#services">{{__('message.OurServices')}} </a></li>
                                        <li><a href="#offers">{{__('message.offers')}} </a>
                                            <li>      <a  href="{{__('message.langLink') }}">
                                              
                                                    
                                                @php
                                                if( app()->getLocale()=='en'){
                                                 echo 'AR';
                                                }else{
                            
                                                 echo 'EN';
                                                }
                            
                                                 @endphp
                            
                                                   
                                               
                                            </a>  
                                            
                                   
                                    </li>
                                  
                                        
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 d-none d-xl-block d-lg-block">
                        <div class="header-info-right">
                            {{-- <div class="header-lang">
                                <div class="lang-icon">
                                    <a href="#0" class="site-btn">English <span class="icon"><i
                                                class="fal fa-language"></i></span></a>
                                </div>
                                <ul class="header-lang-list">
                                    <li><a href="#0">En</a></li>
                                    <li><a href="#0">Ar</a></li>
                                  
                                </ul>
                            </div> --}}
                            <div class="header-button-list">
                             
                                <button class="btn "> <a href="https://www.instagram.com/naseem_aleel/"><i class="fab fa-instagram text-light"></i></a></button>
                                <button class="btn">   <a href="https://wa.me/+971542230664"></a><i class="fab fa-whatsapp"></i></button>
                             
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
    <section class="homepage-slide homepage-slide-3 owl-carousel" id="home">
        <div class="single-slide-item single-slide-item-3 bg_img" data-overlay="6"
            data-background="assets/images/banner/banner-3-bg-1.jpeg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="single-slide-content single-slide-content-3">
                            <div class="slide-text" data-animation="fadeInUp" data-delay=".3s">
                                <p>{{__('message.Get_Perfect_air_conditioner')}}</p>
                            </div>
                            <h1 class="slide-title" data-animation="fadeInUp" data-delay=".5s">{{__('message.maintenance')}}</h1>
                            {{-- <div class="slide-btns mt-30">
                                <a href="service.html" data-animation="fadeInUp" data-delay=".7s" class="site-btn boxed yellow">Our
                                    Services</a>
                                <a href="" data-animation="fadeInUp" data-delay=".9s" class="site-btn boxed">Learn More</a>
                            </div> --}}
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
                                <p>{{__('message.goalsP')}}</p>
                            </div>
                            <h1 class="slide-title" data-animation="fadeInUp" data-delay=".5s">{{__('message.installation')}}</h1>
                            {{-- <div class="slide-btns mt-30">
                                <a href="service.html" data-animation="fadeInUp" data-delay=".7s" class="site-btn boxed yellow">Our
                                    Services</a>
                                <a href="" data-animation="fadeInUp" data-delay=".9s" class="site-btn boxed">Learn More</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide-item single-slide-item-3 bg_img" data-overlay="6"
        data-background="assets/images/banner/banner-1-bg-1.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="single-slide-content single-slide-content-3">
                        <div class="slide-text" data-animation="fadeInUp" data-delay=".3s">
                            <p>{{__('message.Get_Amazing_Qude_Cleaning_Experience')}}</p>
                        </div>
                        <h1 class="slide-title" data-animation="fadeInUp" data-delay=".5s">{{__('message.Cleaning')}}
                        </h1>
                        {{-- <div class="slide-btns mt-30">
                            <a href="service.html" data-animation="fadeInUp" data-delay=".7s" class="site-btn boxed yellow">Our
                                Services</a>
                            <a href="" data-animation="fadeInUp" data-delay=".9s" class="site-btn boxed">Learn More</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- slide area end -->

    <!-- about area start -->
    <section class="about-area about-area-2 about-area-3 pt-120 pb-120" id="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="about-right-box">
                        <h2><span>{{__('message.Get_a_Free_Estimate')}}</span>
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
                                                <h2 class="title"><span class="odometer" data-count="5">00</span><span class="plus">+</span>
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
                                    <h5 class="sub-title mb-22">{{__('message.About')}}</h5>
                                    <h2 class="section-title">{{__('message.Get_Every_Answers_From_Here')}}
                                       </h2>
                                    <div class="section-content">
                                        <p>{{__('message.Local_operations')}}</p>
                                    </div>
                                </div>
                                <div class="about-right-content">
                                    <p>{{__('message.aboutP')}}</p>
                                    <a href="https://wa.me/+971542230664" class="site-btn boxed yellow mt-35"><i class="fab fa-whatsapp fa-2x"></i></a>
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
    {{-- <div class="brand-box-area pb-120">
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
    </div> --}}
    <!-- brand-box area end -->

    <!-- video area start -->
    <section class="counter-area bg_img pb-120" data-overlay="6" data-background="assets/images/bg/counter-bg.jpeg" >
        <a href="//www.youtube.com/embed/7gRZm4wOeos?rel=0&amp;controls=0&amp;showinfo=0" data-rel="lightcase:myCollection"
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
                                <h2 class="conter-title"><span class="counter big">100</span></h2>
                                <p>{{__('message.professional_Workers_Equipment')}}</p>
                            </div>
                            <p>
                                {{__('message.q1')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="single-counter-box">
                        <div class="counter-icon">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/cb/Flag_of_the_United_Arab_Emirates.svg"
                            
                            width="120" alt="">
                        </div>
                        <div class="conter-content mt-40">
                            <div class="counter-content-top mb-30">
                                <h2 class="conter-title"><span class="counter big">10</span>+</h2>
                             {{__('message.all_uae')}}</p>
                            </div>
                            <p>{{__('message.We_provide')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video area end -->

    <!-- Service area start -->
    <section class="service-area service-area-2 service-area-3 pt-120 pb-32" id="how">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading section-heading-3 text-center mb-55">
                        <h5 class="sub-title mb-22">{{__('message.How')}}</h5>
                        <h2 class="section-title">{{__('message.How_It_Works')}} </h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-50">
                <div class="col-xl-4 col-lg-6">
                    <div class="single-service-box-2 mt-50">
                        <div class="service-box-top mb-10">
                            <div class="service-icon">
                                <i class="fad fa-user-headset"></i>

                            </div>
                            <h4 class="service-title">{{__('message.step1')}} </h4>
                        </div>
                        <div class="service-box-content">
                            <p>
                                {{__('message.stepPh1')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="single-service-box-2 mt-50">
                        <div class="service-box-top mb-10">
                            <div class="service-icon">
                                <i class="fad fa-clipboard-list"></i>
                            </div>
                            <h4 class="service-title">{{__('message.step2')}} </h4>
                        </div>
                        <div class="service-box-content">
                            <p>
                                {{__('message.stepPh2')}}
                            </p>
                         
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="single-service-box-2 mt-50">
                        <div class="service-box-top mb-10">
                            <div class="service-icon">
                                <i class="fad fa-calendar-check"></i>
                            </div>
                            <h4 class="service-title">{{__('message.step3')}} </h4>
                        </div>
                        <div class="service-box-content">
                            <p>
                                {{__('message.stepPh3')}}</p>
                            {{-- <a href="service.html" class="inline-btn"><i class="fal fa-long-arrow-right"></i> Read More</a> --}}
                        </div>
                    </div>
                </div>
           
                {{-- 
                
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
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Service area end -->

    <!-- footer-top box start -->
    <section class="footer-top-box-area" >
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-6">
                    <div class="footer-top-box d-flex align-items-center left">
                        <div class="footer-box-icon">
                            <i class="far text-warning fa-air-conditioner  fa-3x" ></i>
                        </div>
                        <div class="footer-box-content">
                            <h2 class="footer-box-title">{{__('message.WhatsApp_contact_the_Cleaing_department')}}</h2>
                            <p>{{__('message.maintenance3')}}
                               </p>
                            <a href="https://wa.me/+971542230664" class="inline-btn"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="footer-top-box d-flex align-items-center right">
                        <div class="footer-box-icon">
                         
                         
                            <i class="fad fa-snowplow fa-3x"></i>
                        </div>
                        <div class="footer-box-content">
                            <h2 class="footer-box-title">{{__('message.WhatsApp_contact_the_maintenance_department')}}</h2>
                            <p>{{__('message.safty3')}}.</p>
                            <a href="https://wa.me/+971542230664" class="inline-btn"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer-top box end -->

    <!-- wcu-area start -->
    <section class="wcu-area wcu-area-2 bg-2 pt-220 pb-120" id="why">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="wcu-left">
                        <div class="section-heading section-heading-3 mb-45 pr-35">
                            <h5 class="sub-title mb-22">{{__('message.Why_Choose_Us')}}</h5>
                            <h2 class="section-title">{{__('message.conditions_chose_us')}}</h2>
                            <div class="content mt-35">
                                <p>{{__('message.q3')}}</p>
                            </div>
                        </div>
                        <div class="wcu-box-wrapper wcu-box-wrapper-2 mt-none-30">
                            <div class="wcu-box wcu-box-2 mt-30">
                                <div class="wcu-icon mb-25">
                              
                                    <i class="fad fa-users-crown fa-3x"></i>
                                </div>
                                <div class="wcu-content">
                                    <h4 class="wcu-title">{{__('message.Quality')}}</h4>
                                    <p>{{__('message.q1')}}</p>
                                </div>
                                <span class="count">01</span>
                            </div>
                            <div class="wcu-box wcu-box-2 mt-30">
                                <div class="wcu-icon mb-25">
                                  
                                    <i class="fad fa-user-headset fa-3x"></i>
                                </div>
                                <div class="wcu-content">
                                    <h4 class="wcu-title">{{__('message.Support')}}</h4>
                                    <p>{{__('message.customer_support_phragraph')}}</p>
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
    <section class="cta-area cta-area-2 pt-120 pb-120" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 offset-xl-5">
                    <div class="cta-wrap">
                        <div class="section-heading section-heading-2 mb-50">
                            <h5 class="sub-title mb-22">{{__('message.Call_Anytime')}}</h5>
                            <h2 class="section-title">{{__('message.step3')}}</h2>
                        </div>
                        <div class="cta-form mt-none-10">
                            <div class="form-group mt-10">
                                <label for="name"><i class="fal fa-user"></i></label>
                                <input type="text" id="name" placeholder={{__('message.FullName')}}>
                            </div>
                            <div class="form-group mt-10">
                                <label for="email"><i class="fal fa-envelope"></i></label>
                                <input type="email" id="email" placeholder={{__('message.Email')}}>
                            </div>
                            <div class="from-group-wrapper mt-10">
                                <div class="form-group">
                                    <label for="date"><i class="fal fa-calendar-alt"></i></label>
                                    <input type="date" id="date">
                                </div>
                                <div class="form-group">
                                    {{-- <select name="subject">
                                        <option data-display="Subject">Subject</option>
                                        <option value="1">Services</option>
                                        <option value="2">Cleaning</option>
                                        <option value="3">Cleaning</option>
                                    </select> --}}
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
    <section class="team-area pt-120 pb-120" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading section-heading-3 text-center mb-55">
                        <h5 class="sub-title mb-22">{{__('message.Best_Services')}}</h5>
                        <h2 class="section-title">{{__('message.OurServices')}}</h2>
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
                            <h4 class="name">{{__('message.Cleaning')}}</h4>
                            <span class="designation">{{__('message.Contact_for_Services')}}</span>
                            <div class="social-links mt-25">
                                <a href="https://wa.me/+971542230664"><i class="fab fa-whatsapp"></i></a>
                   
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
                            <h4 class="name">{{__('message.maintenance')}}</h4>
                            <span class="designation">{{__('message.Contact_for_Services')}}</span>
                            <div class="social-links mt-25">
                                <a href="https://wa.me/+971542230664"><i class="fab fa-whatsapp"></i></a>
                   
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
                            <h4 class="name">{{__('message.supply')}}</h4>
                            <span class="designation">{{__('message.Contact_for_Services')}}</span>
                            <div class="social-links mt-25">
                                <a href="https://wa.me/+971542230664"><i class="fab fa-whatsapp"></i></a>
                   
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
                            <h4 class="name">{{__('message.installation')}}</h4>
                            <span class="designation">{{__('message.Contact_for_Services')}}</span>
                            <div class="social-links mt-25">
                                <a href="https://wa.me/+971542230664"><i class="fab fa-whatsapp"></i></a>
                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team area end -->

    <!-- testimonial area start -->
    {{-- <section class="testimonial-area testimonial-area-2 bg-3 pt-120 pb-160">
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
    </section> --}}
    <!-- testimonial area end -->

    <!-- news area start -->
    <div class="news-area news-area-2 news-area-3 pt-120 pb-120" id="offers">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-heading section-heading-3 text-center mb-55">
                        <h5 class="sub-title mb-22">{{__('message.offers')}}</h5>
                        <h2 class="section-title">{{__('message.seeOffers')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-50">
                <div class="col-xl-4 col-lg-6">
                    <article class="postbox post format-image mt-50">
                        <div class="postbox-text">
                            <div class="postbox-thumb" data-overlay="5">
                                <a href="">
                                    <img src="assets/images/news/news-2-thumb-1.jpeg" alt="blog image">
                                </a>
                            </div>
                            <span class="post-cat">{{__('message.offer')}}</span>
                            {{-- <div class="postbox-content">
                                <div class="post-meta mb-10">
                                    <a href="#0"><i class="fal fa-user"></i> By Admin </a>
                                    <a href="#0"><i class="fal fa-calendar-alt"></i> 24th March 2020</a>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-details.html">Superior clean through our trained
                                        staff.</a>
                                </h4>
                                <a href="blog-details.html" class="inline-btn"><i class="fab fa-whatsapp"></i></a>
                            </div> --}}
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <article class="postbox post format-image mt-50">
                        <div class="postbox-text bg_img">
                            <div class="postbox-thumb" data-overlay="5">
                                <a href="">
                                    <img src="assets/images/news/news-2-thumb-2.jpeg" alt="blog image">
                                </a>
                            </div>
                            <span class="post-cat">{{__('message.offer')}}</span>
                            {{-- <div class="postbox-content">
                                <div class="post-meta mb-10">
                                    <a href="#0"><i class="fal fa-user"></i> By Admin </a>
                                    <a href="#0"><i class="fal fa-calendar-alt"></i> 24th March 2020</a>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-details.html">Superior clean through our trained
                                        staff.</a>
                                </h4>
                                <a href="blog-details.html" class="inline-btn"><i class="fab fa-whatsapp"></i></a>
                            </div> --}}
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <article class="postbox post format-image mt-50">
                        <div class="postbox-text">
                            <div class="postbox-thumb" data-overlay="5">
                                <a href="">
                                    <img src="assets/images/news/news-2-thumb-3.jpeg" alt="blog image">
                                </a>
                            </div>
                            <span class="post-cat">{{__('message.offer')}}</span>
                            {{-- <div class="postbox-content">
                                <div class="post-meta mb-10">
                                    <a href="#0"><i class="fal fa-user"></i> By Admin </a>
                                    <a href="#0"><i class="fal fa-calendar-alt"></i> 24th March 2020</a>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-details.html">Superior clean through our trained
                                        staff.</a>
                                </h4>
                                <a href="blog-details.html" class="inline-btn"><i class="fab fa-whatsapp"></i></a>
                            </div> --}}
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
                        <h4 class="title">{{__('message.Links')}}</h4>
                    

                        <ul>
                            <li><a href="#home"><i class="fal fa-angle-right "></i> {{__('message.Home')}}</a></li>
                            <li><a href="#about"><i class="fal fa-angle-right "></i> {{__('message.About')}}</a></li>
                            <li><a href="#how"><i class="fal fa-angle-right "></i> {{__('message.How_It_Works')}}</a></li>
                            <li><a href="#why"><i class="fal fa-angle-right "></i> {{__('message.WhyUs')}}</a></li>
                       

                    
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget service-menu">
                        <h4 class="title">{{__('message.Links')}}</h4>
                        <ul>
                            <li><a href="#contact"><i class="fal fa-angle-right "></i>{{__('message.contact')}}</a></li>
                            <li><a href="#services"><i class="fal fa-angle-right "></i>{{__('message.OurServices')}}</a></li>
                            <li><a href="#offers"><i class="fal fa-angle-right "></i> {{__('message.offers')}}</a></li>
                        
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6">
                    <div class="footer-widget footer-contact-widget">
                        <h4 class="title">{{__('message.contact')}}</h4>
                        <div class="footer-contact-info">
                            <div class="content">
                                <p>Dubai</p>
                              
                            </div>
                            <div class="box">
                                <h2><span>{{__('message.Get_a_Free_Estimate')}}</span>
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
                                <a href="https://www.instagram.com/naseem_aleel/"><i class="fab fa-instagram "></i></a>
                                {{-- <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin"></i></a>
                                <a href="#0"><i class="fab fa-youtube"></i></a> --}}
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
            <a href="" class="site-logo-2">
                <img src="assets/images/logo/logo-white.png" alt="" />
            </a>
        </div>
        <div class="side-info">
            <div class="contact-list mb-40">
                <h4>{{__('message.About')}}</h4>
                <p>{{__('message.aboutP')}}.</p>
              
            </div>
            <div class="contact-list mb-40">
                <h4>{{__('message.contact')}}</h4>
                <p><i class="fal fa-rocket"></i> <span>Dubai </span>
                </p>
                <p><i class="far fa-phone"></i> <span>+971 54 223 0664</span> </p>
                <p><i class="far fa-envelope-open"></i><span>info@alnasim.ae</span></p>
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