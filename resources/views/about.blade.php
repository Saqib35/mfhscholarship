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
    <div class="section breadcrumb-area bg-bright" style="background-image: url('{{ asset('assets/countryBanner/about-us.webp') }}');background-size: cover;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h1 class="breadcrumb-title text-white">About Us</h1>
                        <ul>
                            <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="text-white">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- About Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row mb-n6">
                <p align="justify" class="text-black">The website <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a> offers a variety of details on scholarships accessible to students from abroad. On our website, you can search a database of scholarships and get details on how to apply as well as factors to take into account when selecting a scholarship. We also offer guidance on how to pay for your education, manage living expenses, and locate employment after graduating.</p>
                <p align="justify" class="text-black">The <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a> is the top source of information for students looking to study abroad on financial aid, college scholarships, and foreign students. No matter their financial situation, all students should have the choice to study abroad, according to <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a>.</p>
                <p align="justify" class="text-black">To help overseas students who want to study in the US, UK, Australia, Canada, New Zealand, or anyplace else, we have compiled the most thorough database of scholarships, student facilities, and grants.</p>
                <p align="justify" class="text-black">Our mission is to arm you with the knowledge and tools you need to successfully fund your international studies.</p>
                <p align="justify" class="text-black">We sincerely hope that the International Scholarship Search is beneficial to you and wish you the very best of luck in your academic endeavors!</p>
                <h2>Our Mission</h2>
                <p align="justify" class="text-black">You've come to the right site if you're seeking information on scholarships for international students. For students who are interested in earning a degree at a recognized institution of higher education, the website <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a> offers a plethora of resources.</p>
                <p align="justify" class="text-black">The availability of numerous different sorts of scholarships is among the most crucial considerations when looking for financial aid. While some scholarships are awarded based on academic merit, others are awarded based on financial need. There are numerous scholarships available to students from particular nations or regions.</p>
                <p align="justify" class="text-black">Whatever your situation, there is probably a scholarship out there that can assist you in paying for your education. You may find out more about the many scholarship options on the <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a> and get connected to the tools you need to choose the best scholarship for you.</p>
                <p align="justify" class="text-black">What are you still holding out for? Start looking for scholarships right away!</p>
                </div>
        </div>
    </div>
    <!-- About Section End -->

   

@endsection

@section('js')

@endsection

