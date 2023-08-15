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
    <div class="section breadcrumb-area bg-bright" style="background-image: url('{{ asset('assets/countryBanner/disclaimer.webp') }}');background-size: cover;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h1 class="breadcrumb-title text-white">Disclaimer</h1>
                        <ul>
                            <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="text-white">Disclaimer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Faq Section Start -->
    <div class="section section-margin">

        <!--Accordion area-->
        <div class="accordion_area">
            <div class="container">
                <div class="row mb-n8">
                    <p class="text-black" align="justify">Free scholarship-related information is available at <a href="{{ url('/') }}" target="_blank">MFH Scholarship</a>. For accurate and up-to-date information, however, always consult the official websites of the scholarship sponsors. You do so at your own risk if you rely on any information found at <a href="{{ url('/') }}" target="_blank">MFH Scholarship</a>.</p>
                    <p class="text-black" align="justify">It should be noted that the scholarship sources listed on this page are in no way associated with <a href="{{ url('/') }}" target="_blank">MFH Scholarship</a>. This website only provides information for educational reasons.</p>
                    <p class="text-black" align="justify">Please always check the official website of the scholarship giver for the most accurate and official information, including application forms and instructions. For any questions, always get in touch with the scholarship provider immediately.</p>
                    <p class="text-black" align="justify"><a href="{{ url('/') }}" target="_blank">MFH Scholarship</a> does not offer grants, prizes, awards, money, certificates, scholarships, or lotteries. If there is any indication to the contrary, one should be on the lookout for fraud, including identity theft scams that employ our brand (fake use of our name, logo, etc.). The business will not be liable for any losses brought on by these scams, including those involving money, bank information, etc.</p>
                    <p class="text-black" align="justify">You can access other websites not managed by <a href="{{ url('/') }}" target="_blank">MFH Scholarship</a> by using the links on this one. The characteristics, information, and accessibility of those websites are beyond our control. Any links on the website do not automatically imply a recommendation or support for the opinions presented there. </p>
                    <p class="text-black" align="justify">Furthermore, the authenticity, currency, and content of <a href="{{ url('/') }}" target="_blank">MFH Scholarship</a> are not guaranteed and are not warranted.</p>
                </div>
            </div>
        </div>
        <!--Accordion area end-->
    </div>
    <!-- Faq Section End -->
@endsection

@section('js')

@endsection
