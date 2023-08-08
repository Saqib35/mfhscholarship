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
                            <li><a href="index.php">Home</a></li>
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
                    <div class="col-md-6 mb-8">

                        <!-- Faq Content Start  -->
                        <div class="faq_content_area">
                            <h4 class="title">General Questions</h4>
                        </div>
                        <!-- Faq Content End -->

                        <!-- Accordion Start -->
                        <div id="accordionExample" class="accordion">
                            <div class="card_dipult accordion-item">
                                <div class="card-header card_accor" id="headingfive">
                                    <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive"><i class="ti-plus"></i><i class="ti-minus"></i>How do I figure out the cubic feet of my shipment?</button>
                                </div>
                                <div id="collapseFive" class="collapse accordion-collapse show border-0" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Nulla imperdiet odio tempor nisl vulputate scelerisque. Fusce interdum ultricies convallis. Vivamus efficitur purus eu elit scelerisque blandit. Nullam viverra est quis erat fringilla, at rutrum sem lacinia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card_dipult accordion-item">
                                <div class="card-header card_accor" id="headingsix">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><i class="ti-plus"></i><i class="ti-minus"></i>How do I ship my automobile?</button>
                                </div>
                                <div id="collapseSix" class="collapse accordion-collapse border-0" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Nulla imperdiet odio tempor nisl vulputate scelerisque. Fusce interdum ultricies convallis. Vivamus efficitur purus eu elit scelerisque blandit. Nullam viverra est quis erat fringilla, at rutrum sem lacinia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card_dipult accordion-item">
                                <div class="card-header card_accor" id="headingseven">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><i class="ti-plus"></i><i class="ti-minus"></i>Is my shipment insured?</button>
                                </div>
                                <div id="collapseSeven" class="collapse accordion-collapse border-0" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Nulla imperdiet odio tempor nisl vulputate scelerisque. Fusce interdum ultricies convallis. Vivamus efficitur purus eu elit scelerisque blandit. Nullam viverra est quis erat fringilla, at rutrum sem lacinia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card_dipult accordion-item">
                                <div class="card-header card_accor" id="headingeight">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"><i class="ti-plus"></i><i class="ti-minus"></i>How long will it take my shipment to reach my customer?</button>
                                </div>
                                <div id="collapseEight" class="collapse accordion-collapse border-0" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Nulla imperdiet odio tempor nisl vulputate scelerisque. Fusce interdum ultricies convallis. Vivamus efficitur purus eu elit scelerisque blandit. Nullam viverra est quis erat fringilla, at rutrum sem lacinia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion End -->

                    </div>
                    <div class="col-md-6 mb-8">

                        <!-- Faq Content Start  -->
                        <div class="faq_content_area">
                            <h4 class="title">Purchasing Questions</h4>
                        </div>
                        <!-- Faq Content End -->

                        <!-- Accordion Start -->
                        <div id="accordionExample2" class="accordion">
                            <div class="card_dipult accordion-item">
                                <div class="card-header card_accor" id="headingOne">
                                    <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="ti-plus"></i><i class="ti-minus"></i>Before you get started</button>
                                </div>
                                <div id="collapseOne" class="collapse accordion-collapse show border-0" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                                    <div class="card-body">
                                        <p>Nulla imperdiet odio tempor nisl vulputate scelerisque. Fusce interdum ultricies convallis. Vivamus efficitur purus eu elit scelerisque blandit. Nullam viverra est quis erat fringilla, at rutrum sem lacinia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card_dipult accordion-item">
                                <div class="card-header card_accor" id="headingTwo">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="ti-plus"></i><i class="ti-minus"></i>Compatibility with premium plugins</button>
                                </div>
                                <div id="collapseTwo" class="collapse accordion-collapse border-0" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                    <div class="card-body">
                                        <p>Nulla imperdiet odio tempor nisl vulputate scelerisque. Fusce interdum ultricies convallis. Vivamus efficitur purus eu elit scelerisque blandit. Nullam viverra est quis erat fringilla, at rutrum sem lacinia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card_dipult accordion-item">
                                <div class="card-header card_accor" id="headingThree">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="ti-plus"></i><i class="ti-minus"></i>Install theme demo contents</button>
                                </div>
                                <div id="collapseThree" class="collapse accordion-collapse border-0" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                                    <div class="card-body">
                                        <p>Nulla imperdiet odio tempor nisl vulputate scelerisque. Fusce interdum ultricies convallis. Vivamus efficitur purus eu elit scelerisque blandit. Nullam viverra est quis erat fringilla, at rutrum sem lacinia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card_dipult accordion-item">
                                <div class="card-header card_accor" id="headingfour">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><i class="ti-plus"></i><i class="ti-minus"></i>Translation and localization services</button>
                                </div>
                                <div id="collapseFour" class="collapse accordion-collapse border-0" aria-labelledby="headingfour" data-bs-parent="#accordionExample2">
                                    <div class="card-body">
                                        <p>Nulla imperdiet odio tempor nisl vulputate scelerisque. Fusce interdum ultricies convallis. Vivamus efficitur purus eu elit scelerisque blandit. Nullam viverra est quis erat fringilla, at rutrum sem lacinia.</p>
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
