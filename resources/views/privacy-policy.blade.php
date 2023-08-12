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
    <div class="section breadcrumb-area bg-bright" style="background-image: url('{{ asset('assets/countryBanner/privacy-policy.webp') }}');background-size: cover;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h1 class="breadcrumb-title text-white">privacy policy</h1>
                        <ul>
                            <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="text-white">privacy policy</li>
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
                    <p class="text-black" align="justify">Thank you for visiting <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a>. This Privacy Policy explains how we collect, use, and protect your personal information when you use our Website. Your privacy is of utmost importance to us, and we are committed to ensuring the confidentiality and security of your data. By using the Website, you consent to the practices described in this Privacy Policy.</p>
                    <h3>Information We Collect</h3>
                    <p class="text-black" align="justify">We collect personal information that you voluntarily provide to us when you contact us through the provided contact form or email address. This may include your name, email address, and any details you choose to share in your message.</p>
                    <h3>How We Use Your Information</h3>
                    <p class="text-black" align="justify">We use the information you provide to:
                        <ul>
                            <li>1. Respond to your inquiries and communicate with you.</li>
                            <li>2. Provide you with information and updates related to mfhscholarship.com</li>
                        </ul>
                    </p>
                     <h3>Data Retention</h3>
                    <p class="text-black" align="justify">We will retain your personal information for as long as necessary to fulfill the purposes outlined in this Privacy Policy or as required by law.</p>
                    <h3>Cookies and Analytics</h3>
                    <p class="text-black" align="justify">We do not use cookies or any tracking technologies on our Website.</p>
                    <h3>Data Security</h3>
                    <p class="text-black" align="justify">We take reasonable measures to protect your personal information from unauthorized access, loss, misuse, disclosure, alteration, or destruction. However, please be aware that no internet transmission is entirely secure, and we cannot guarantee the absolute security of your data.</p>
                    <h3>Children's Privacy</h3>
                    <p class="text-black" align="justify">Our Website is not directed towards children under the age of 13, and we do not knowingly collect personal information from children.</p>
                    <h3>Your Rights</h3>
                    <p class="text-black" align="justify">You have the right to access, correct, update, or request the deletion of your personal information that we hold. You may contact us at mfhscholarship.com to exercise any of these rights.</p>
                    <h3>Contact Us</h3>
                    <p class="text-black" align="justify">If you have any questions or concerns about this Privacy Policy or our data practices, please contact us at mfhscholarship.com</p>
                    <p class="text-black" align="justify">By using our Website, you acknowledge that you have read and understood this Privacy Policy and agree to its terms.</p>
                </div>
            </div>
        </div>
        <!--Accordion area end-->
    </div>
    <!-- Faq Section End -->
@endsection

@section('js')

@endsection
