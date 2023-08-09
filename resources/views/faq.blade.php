@extends('layouts.main')

@section('css')

@endsection

@section('main')
    
   
   <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">FAQ</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>FAQ</li>
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
                    <div class="faq_content_area">
                        <h4 class="title">General Questions</h4>
                    </div>
                    <!-- Faq Content End -->
                    <p style="margin-bottom:50px">This section provides answers to some common questions about international scholarship information. It will help you to understand what is available, how to find and use it, and what to watch for.
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
                                    <div class="card-body">
                                        <p>There are several ways to learn about international scholarship opportunities. You can start by searching the internet, as many websites list scholarships by country. We at mfhscholarship, provide all the necessary information about international scholarships.</p>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="card_dipult accordion-item">
                                <div class="card-header card_accor" id="headingseven">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><i class="ti-plus"></i><i class="ti-minus"></i>What are the benefits of receiving an international scholarship?</button>
                                </div>
                                <div id="collapseSeven" class="collapse accordion-collapse border-0" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>The benefits of receiving an international scholarship can vary depending on the scholarship and the country in which it is offered. However, some of the most common benefits include the opportunity to study in another country, the opportunity to learn about another culture, and the chance to improve your language skills.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card_dipult accordion-item">
                                <div class="card-header card_accor" id="headingeight">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"><i class="ti-plus"></i><i class="ti-minus"></i>. How do I apply for an international scholarship?</button>
                                </div>
                                <div id="collapseEight" class="collapse accordion-collapse border-0" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>The application process for international scholarships can vary depending on the scholarship and the country in which it is offered. However, there are some general steps that you will need to follow, such as submitting an application, providing transcripts and other supporting documents, and writing an essay.</p>
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
                                        <p>Eligibility requirements for international scholarships vary depending on the scholarship and the country in which it is offered. However, some general requirements are often required, such as being a citizen of the country in which the scholarship is offered and having a certain level of academic achievement.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="card_dipult accordion-item">
                                <div class="card-header card_accor" id="headingTwo">
                                    <button class="btn btn-link " data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="ti-plus"></i><i class="ti-minus"></i>What are the deadlines for international scholarship applications?</button>
                                </div>
                                <div id="collapseTwo" class="collapse accordion-collapse border-0" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                    <div class="card-body">
                                    <p>The deadlines for international scholarship applications can vary depending on the scholarship and the country in which it is offered. However, it is important to note that many scholarships have rolling deadlines, which means that they accept applications on a first-come, first-served basis. As such, it is important to submit your application as early as possible.</p>

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
