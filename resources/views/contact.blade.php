@extends('layouts.main')

@section('css')
<title>Contact Us</title>
    <meta name="robots" content="follow, index"/>
    <link rel="canonical" href="{{  Request::fullUrl() }}"/>
  
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

