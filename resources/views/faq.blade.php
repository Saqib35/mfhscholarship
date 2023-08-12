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
    <div class="section breadcrumb-area bg-bright" style="background-image: url('{{ asset('assets/countryBanner/postdoctoral-scholarships.webp') }}');background-size: cover;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h1 class="breadcrumb-title text-white">FAQ</h1>
                        <ul>
                            <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="text-white">FAQ</li>
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
                    <!-- Faq Content Start  -->
                   
                    <!-- Faq Content End -->
                    <p  class="text-black" align="justify">
                    This section provides answers to some common questions about international scholarship information. It will help you to understand what is available, how to find and use it, and what to watch for.
                    </p>
                   <p align="justify" class="text-black">
                    When it comes to international scholarships, there are a lot of questions that potential students have. Here are some of the most frequently asked questions about international scholarships, along with their answers.
                    </p>

                    <div class="col-md-6 mb-8 ">
                        <!-- Accordion Start -->
                        <div id="accordionExample" class="accordion">
                            <div class="card_dipult accordion-item">
                                <div class="card-header card_accor" id="headingfive">
                                    <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive"><i class="ti-plus"></i><i class="ti-minus"></i>How can I find out about international scholarship opportunities?</button>
                                </div>
                                <div id="collapseFive" class="collapse accordion-collapse show border-0" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                    <div class="card-body" >
                                        <p class="text-black">There are several ways to learn about international scholarship opportunities. You can start by searching the internet, as many websites list scholarships by country. We at <a href="{{ url('/') }}" target="_blank">NFH Scholarship</a>, provide all the necessary information about international scholarships.</p>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="card_dipult accordion-item">
                                <div class="card-header card_accor" id="headingseven">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><i class="ti-plus"></i><i class="ti-minus"></i>What are the benefits of receiving an international scholarship?</button>
                                </div>
                                <div id="collapseSeven" class="collapse accordion-collapse border-0" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-black">Depending on the scholarship and the location where it is awarded, there might be a wide range of advantages to earning an international scholarship. However, some of the most popular advantages include the possibility to study abroad, the chance to discover a new culture, and the potential to advance your language abilities.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card_dipult accordion-item">
                                <div class="card-header card_accor" id="headingeight">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"><i class="ti-plus"></i><i class="ti-minus"></i>How do I apply for an international scholarship?</button>
                                </div>
                                <div id="collapseEight" class="collapse accordion-collapse border-0" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-black">Depending on the scholarship and the nation in which it is offered, the application procedure for international scholarships may differ. The general procedures you must adhere to include filing an application, supplying transcripts and other supporting documentation, and writing an essay.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion End -->

                    </div>
                    <div class="col-md-6 mb-8">

                     

                        <!-- Accordion Start -->
                        <div id="accordionExample2" class="accordion">
                            
                        <div class="card_dipult accordion-item">
                                <div class="card-header card_accor" id="headingOne">
                                    <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="ti-plus"></i><i class="ti-minus"></i>How do I know if I am eligible for an international scholarship?</button>
                                </div>
                                <div id="collapseOne" class="collapse accordion-collapse show border-0" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                                    <div class="card-body">
                                        <p class="text-black">Depending on the scholarship and the nation where it is awarded, different individuals may be eligible for different foreign scholarships. However, there are frequently some basic prerequisites, such as citizenship in the nation where the scholarship is being granted and a particular level of academic success.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="card_dipult accordion-item">
                                <div class="card-header card_accor" id="headingTwo">
                                    <button class="btn btn-link " data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="ti-plus"></i><i class="ti-minus"></i>What are the deadlines for international scholarship applications?</button>
                                </div>
                                <div id="collapseTwo" class="collapse accordion-collapse border-0" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                    <div class="card-body">
                                    <p class="text-black">Depending on the scholarship and the nation where it is offered, different countries may have different deadlines for applications for international scholarships. Although many scholarships have rolling deadlines, which means they accept applications on a first-come, first-served basis, it is crucial to keep in mind that this is not always the case. As a result, it's crucial to submit your application as soon as you can.</p>

                                    </div>
                                </div>
                            </div>
                            
                           
                        </div>
                        <!-- Accordion End -->

                    </div>
                </div>
            </div>
        </div>
        <!--Accordion area end-->
    </div>
    <!-- Faq Section End -->
@endsection

@section('js')

@endsection
