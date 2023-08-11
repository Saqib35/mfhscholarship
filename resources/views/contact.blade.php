@extends('layouts.main')

@section('css')
<title>MFH Scholarship – Worldwide Scholarships and Internships at One Place</title>
    <meta name="description" content="description"/>
    <meta name="robots" content="follow, index"/>
    <link rel="canonical" href="{{  Request::fullUrl() }}"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="MFH Scholarship – Worldwide Scholarships and Internships at One Place"/>
    <meta property="og:description" content="description"/>
    <meta property="og:url" content="{{  Request::fullUrl() }}"/>
    <meta property="og:site_name" content="MFH Scholarship"/>
    <meta property="og:image" content="{{ url('assets/logo.png') }}"/>
    <meta property="og:image:secure_url" content="{{ url('assets/logo.png') }}"/>
    <meta property="og:image:width" content="512"/>
    <meta property="og:image:height" content="512"/>
    <meta property="og:image:alt" content="MFH Scholarship"/>
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
                    <!-- <div class="contact-form-wrapper contact-form">
                        <form action="assets/php/amber.php" id="contact-form" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="input-area mb-4">
                                                <input class="input-item" type="text" placeholder="Your Name *" name="name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-area mb-4">
                                                <input class="input-item" type="email" placeholder="Email *" name="email">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-area mb-4">
                                                <input class="input-item" type="text" placeholder="Subject *" name="subject">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-area mb-8">
                                                <textarea cols="30" rows="5" class="textarea-item" name="message" placeholder="Message"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-primary btn-hover-dark">Send Message</button>
                                        </div>
                                        <p class="col-8 form-message mb-0"></p>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div> -->
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScSFy7uiidt-c1wvRvUCXp3ugUbQO-I6vrQjNFkrOshXOWAsQ/viewform?embedded=true" width="100%" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
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
                                <li><i class="fa fa-phone"></i> <a href="tel:123-123-456-789">123 123 456 789</a></li>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9582176.743736587!2d-15.01585194479637!3d54.10213713551198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited%20Kingdom!5e0!3m2!1sen!2s!4v1691757763318!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Google Map Area Start -->

    </div>
    <!-- Contact Map End -->
@endsection

@section('js')

@endsection

