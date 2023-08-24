@extends('layouts.main')

@section('css')
<title>Unlock Your Future with Scholarships: Funding Opportunities for Education</title>
    <meta name="description" content="Explore a world of scholarship opportunities to fund your education. Discover various scholarships, grants, and financial aids to pursue your academic dreams and shape a brighter future."/>
    <meta name="keywords" content="scholarships, education funding, financial aid, scholarship opportunities, academic grants, educational support">
    <meta name="robots" content="follow, index"/>
    <link rel="canonical" href="{{  Request::fullUrl() }}"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Unlock Your Future with Scholarships: Funding Opportunities for Education"/>
    <meta property="og:description" content="Explore a world of scholarship opportunities to fund your education. Discover various scholarships, grants, and financial aids to pursue your academic dreams and shape a brighter future."/>
    <meta property="og:url" content="{{  Request::fullUrl() }}"/>
    <meta property="og:site_name" content="MFH Scholarship"/>
    <meta property="og:image" content="{{ url('assets/logo.png') }}"/>
    <meta property="og:image:secure_url" content="{{ url('assets/logo.png') }}"/>
    <meta property="og:image:width" content="512"/>
    <meta property="og:image:height" content="512"/>
    <meta property="og:image:alt" content="Scholarship"/>
    <meta property="og:image:type" content="image/jpeg"/>

@endsection

@section('main')
    
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright" style="background-image: url('{{ asset('assets/countryBanner/contact-us.webp') }}');background-size: cover;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h1 class="breadcrumb-title text-white">Contact Us</h1>
                        <ul>
                            <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="text-white">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Contact Us Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row mb-n10">
                <div class="col-12 col-lg-6 mb-10 order-2 order-lg-1" data-aos="fade-up" data-aos-duration="1000">

                    <!-- Section Title Start -->
                    <div class="contact-title pb-3">
                        <h2 class="title">Get in Touch</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Contact Form Wrapper Start -->
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScSFy7uiidt-c1wvRvUCXp3ugUbQO-I6vrQjNFkrOshXOWAsQ/viewform?embedded=true" width="540" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                    <!-- Contact Form Wrapper End -->

                </div>
                <div class="col-12 col-lg-6 mb-10 order-1 order-lg-2" data-aos="fade-up" data-aos-duration="1500">
                    <!-- Section Title Start -->
                    <div class="contact-title pb-3">
                        <h2 class="title">Contact Us</h2>
                    </div>
                    <!-- Section Title End -->
                    <div class="contact-content">
                        <p>If you have any query, feel free to contact us</p>
                        <address class="contact-block">
                            <ul>
                                <li><i class="fa fa-phone"></i> <a href="tel:+447593146186">+44 759 314 6186</a></li>
                                <li><i class="fa fa-envelope-o"></i> <a href="mailto:mfhscholarship@gmail.com">mfhscholarship@gmail.com</a></li>
                            </ul>
                        </address>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact us Section End -->

    <!-- Contact Map Start -->
    <div class="section">

        <!-- Google Map Area Start -->
        <div class="google-map-area w-100" data-aos="fade-up" data-aos-duration="1000">
        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=612&amp;height=400&amp;hl=en&amp;q=united kingdom&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://gachanox.io/">Gacha Nox Download</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>        </div>
        <!-- Google Map Area Start -->

    </div>
    <!-- Contact Map End -->
@endsection

@section('js')

@endsection

