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
    <div class="section">
        <div class="hero-slider swiper-container">
            <div class="swiper-wrapper">
                 

              <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="{{ asset('assets/banner/2.webp') }}" alt="Scholarship" />
                    </div>
                    <div class="container">
                        <div class="hero-slide-content text-center text-md-end">
                            <h5 class="sub-title">We keep pets for pleasure.</h5>
                            <h2 class="title m-0">Vitamins For all Pets</h2>
                            <p>We know your concerns when you are looking for a chewing treat for your dog.</p>
                            
                        </div>
                    </div>  
               </div>
                

               <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="{{ asset('assets/banner/1.webp') }}" alt="Scholarship"/>
                    </div>
                    <div class="container">
                        <div class="hero-slide-content text-center text-md-end">
                            <h5 class="sub-title">We keep pets for pleasure.</h5>
                            <h2 class="title m-0">Vitamins For all Pets</h2>
                            <p>We know your concerns when you are looking for a chewing treat for your dog.</p>
                            
                        </div>
                    </div>
                </div>

               <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="{{ asset('assets/banner/3.webp') }}" alt="Scholarship" />
                    </div>
                    <div class="container">
                        <div class="hero-slide-content text-center text-md-end">
                            <h5 class="sub-title">We keep pets for pleasure.</h5>
                            <h2 class="title m-0">Vitamins For all Pets</h2>
                            <p>We know your concerns when you are looking for a chewing treat for your dog.</p>
                            
                        </div>
                    </div>
                </div>

              <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="{{ asset('assets/banner/4.webp') }}" alt="Scholarship" />
                    </div>
                    <div class="container">
                        <div class="hero-slide-content text-center text-md-end">
                            <h5 class="sub-title">We keep pets for pleasure.</h5>
                            <h2 class="title m-0">Vitamins For all Pets</h2>
                            <p>We know your concerns when you are looking for a chewing treat for your dog.</p>
                            
                        </div>
                    </div>
                </div>

                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="{{ asset('assets/banner/5.webp') }}" alt="Scholarship" />
                    </div>
                    <div class="container">
                        <div class="hero-slide-content text-center text-md-end">
                            <h5 class="sub-title">We keep pets for pleasure.</h5>
                            <h2 class="title m-0">Vitamins For all Pets</h2>
                            <p>We know your concerns when you are looking for a chewing treat for your dog.</p>
                            
                        </div>
                    </div>
                </div>


                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="{{ asset('assets/banner/6.webp') }}" alt="Scholarship" />
                    </div>
                    <div class="container">
                        <div class="hero-slide-content text-center text-md-end">
                            <h5 class="sub-title">We keep pets for pleasure.</h5>
                            <h2 class="title m-0">Vitamins For all Pets</h2>
                            <p>We know your concerns when you are looking for a chewing treat for your dog.</p>
                            
                        </div>
                    </div>
                </div>

                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="{{ asset('assets/banner/7.webp') }}" alt="Scholarship" />
                    </div>
                    <div class="container">
                        <div class="hero-slide-content text-center text-md-end">
                            <h5 class="sub-title">We keep pets for pleasure.</h5>
                            <h2 class="title m-0">Vitamins For all Pets</h2>
                            <p>We know your concerns when you are looking for a chewing treat for your dog.</p>
                            
                        </div>
                    </div>
                </div>


            </div>

            <!-- Swiper Pagination Start -->
            <div class="swiper-pagination d-lg-none"></div>
            <!-- Swiper Pagination End -->

            <!-- Swiper Navigation Start -->
            <div class="home-slider-prev swiper-button-prev main-slider-nav d-lg-flex d-none"><i class="icon-arrow-left"></i></div>
            <div class="home-slider-next swiper-button-next main-slider-nav d-lg-flex d-none"><i class="icon-arrow-right"></i></div>
            <!-- Swiper Navigation End -->
        </div>
    </div>
    <!-- Hero/Intro Slider End -->

       
    </div>


    <div class="section section-padding">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mb-n6">

                <div class="col mb-6" data-aos="fade-up" data-aos-duration="1000">
                    <!-- Single CTA Wrapper Start -->
                     <a href="{{ url('category/scholarship-lists') }}">
                      <div class="single-cta-wrapper">

                        <!-- CTA Icon Start -->
                        <div class="cta-icon">
                         <img src="{{ asset('assets/icon/scholarship.webp') }}" alt="Scholarship" width="35px">    
                        </div>
                        <!-- CTA Icon End -->

                        <!-- CTA Content Start -->
                        <div class="cta-content">
                            <h4 class="title">Scholarships</h4>
                        </div>
                        <!-- CTA Content End -->

                    </div>
                    </a>
                    <!-- Single CTA Wrapper End -->
                </div>

                <div class="col mb-6" data-aos="fade-up" data-aos-duration="1100">
                    <!-- Single CTA Wrapper Start -->
                    <a href="{{ url('category/internships') }}">
                     <div class="single-cta-wrapper">

                        <!-- CTA Icon Start -->
                        <div class="cta-icon">
                            <img src="{{ asset('assets/icon/internship.webp') }}" alt="Scholarship" width="35px">
                        </div>
                        <!-- CTA Icon End -->

                        <!-- CTA Content Start -->
                        <div class="cta-content">
                            <h4 class="title">Internships</h4>
                        </div>
                        <!-- CTA Content End -->

                     </div>
                    </a>
                    <!-- Single CTA Wrapper End -->
                </div>

                <div class="col mb-6" data-aos="fade-up" data-aos-duration="1200">
                    <!-- Single CTA Wrapper Start -->
                    <a href="{{ url('category/blog/scholarships-and-study') }}">
                    <div class="single-cta-wrapper">

                        <!-- CTA Icon Start -->
                        <div class="cta-icon">
                         <img src="{{ asset('assets/icon/document.webp') }}" alt="Scholarship" width="35px">
                        </div>
                        <!-- CTA Icon End -->
                        <!-- CTA Content Start -->
                        <div class="cta-content">
                            <h4 class="title">Blogs Scholarship</h4>
                        </div>
                        <!-- CTA Content End -->

                    </div> 
                     </a>
                    <!-- Single CTA Wrapper End -->
                </div>

            </div>
        </div>
    </div>


     <div class="section section-margin-bottom mt-5">
        <div class="container">

            <div class="row mt-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title" style="color:#F6AB49;font-weight:bold">Lastest Scholarships</h2>
                    </div>
                </div>
            </div>
            <div class="container mt-5 mb-3">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination justify-content-end">
                        <a href="{{ url('category/scholarship-lists') }}"  class="btn"  style="background: #F6AB49;color: #fff;">View All</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 mb-n8">
               @foreach($latestScholarships as $AddScholarships)
                    <div class="col mb-8 " data-aos="fade-up" data-aos-duration="1000">
                        <!-- Single scholarship Start -->
                        <div  style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                        <div class="single-blog-wrapper" >

                            <!-- scholarship Thumb Start -->
                            <div class="blog-thumb thumb-effect">
                                <a class="image" href="{{ url($AddScholarships->scholarship_slug) }}">
                                    <img class="fit-image" src="{{ asset($AddScholarships->scholarship_university_logo)}}" alt="Scholarship">
                                </a>
                            </div>
                            <!-- scholarship Thumb End -->

                            <!-- scholarship Content Start -->
                            <div class="blog-content p-3">
                                <div class="blog-meta">
                                    <ul>
                                        <!-- <li><span>By</span><a href="javascript: void(0)">Admin</a></li> -->
                                        <li><span>{{ $AddScholarships->created_at->format('F d, Y') }}</span></li>
                                    </ul>
                                </div>
                                <h2 class="blog-title"><a href="{{ url($AddScholarships->scholarship_slug) }}">{{ $AddScholarships->scholarship_name; }}</a></h2>
                                <p>{{ $AddScholarships->scholarship_description; }}</p>
                                <a class="more-link" href="{{ url($AddScholarships->scholarship_slug) }}">Read More</a>
                            </div>
                            <!-- scholarship Content End -->

                        </div>
                        </div>
                        <!-- Single Blog End -->
                    </div>
                 @endforeach
                
            </div>
            

        </div>
    </div>

 
    <div class="section section-margin-bottom mt-5">
        <div class="container">

            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title" style="color:#F6AB49;font-weight:bold">Most Popular Countries Scholarships</h2>
                    </div>
                </div>
            </div>
            <div class="container mt-5 mb-3">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination justify-content-end">
                        <a href="{{ url('scholarships-by-countries') }}"  class="btn"  style="background: #F6AB49;color: #fff;">View All</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 mb-n8">

                
                @foreach($polpularScholarships as $AddScholarships)
                    <div class="col mb-8 " data-aos="fade-up" data-aos-duration="1000">
                        <!-- Single scholarship Start -->
                        <div  style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                        <div class="single-blog-wrapper" >

                            <!-- scholarship Thumb Start -->
                            <div class="blog-thumb thumb-effect">
                                <a class="image" href="{{ url($AddScholarships->scholarship_slug) }}">
                                    <img class="fit-image" src="{{ asset($AddScholarships->scholarship_university_logo)}}" alt="Scholarship">
                                </a>
                            </div>
                            <!-- scholarship Thumb End -->

                            <!-- scholarship Content Start -->
                            <div class="blog-content p-3">
                                <div class="blog-meta">
                                    <ul>
                                        <!-- <li><span>By</span><a href="javascript: void(0)">Admin</a></li> -->
                                        <li><span>{{ $AddScholarships->created_at->format('F d, Y') }}</span></li>
                                    </ul>
                                </div>
                                <h2 class="blog-title"><a href="{{ url($AddScholarships->scholarship_slug) }}">{{ $AddScholarships->scholarship_name; }}</a></h2>
                                <p>{{ $AddScholarships->scholarship_description; }}</p>
                                <a class="more-link" href="{{ url($AddScholarships->scholarship_slug) }}">Read More</a>
                            </div>
                            <!-- scholarship Content End -->

                        </div>
                        </div>
                        <!-- Single Blog End -->
                    </div>
                 @endforeach  
               
            </div>
        </div>
    </div>
   
@endsection

@section('js')

@endsection




