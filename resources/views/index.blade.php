@extends('layouts.main')

@section('css')
<title>MFH Scholarship – Worldwide Scholarships and Internships at One Place</title>
@endsection

@section('main')
    <div class="section">
        <div class="hero-slider swiper-container">
            <div class="swiper-wrapper">
                 

              <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="{{ asset('assets/banner/2.webp') }}" alt="Slider Image" />
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
                        <img src="{{ asset('assets/banner/1.webp') }}" alt="Slider Image" />
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
                        <img src="{{ asset('assets/banner/3.webp') }}" alt="Slider Image" />
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
                        <img src="{{ asset('assets/banner/4.webp') }}" alt="Slider Image" />
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
                        <img src="{{ asset('assets/banner/5.webp') }}" alt="Slider Image" />
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
                        <img src="{{ asset('assets/banner/6.webp') }}" alt="Slider Image" />
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
                        <img src="{{ asset('assets/banner/7.webp') }}" alt="Slider Image" />
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
                            <i class="ti-truck"></i>
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
                    <div class="single-cta-wrapper">

                        <!-- CTA Icon Start -->
                        <div class="cta-icon">
                            <i class="ti-headphone-alt"></i>
                        </div>
                        <!-- CTA Icon End -->

                        <!-- CTA Content Start -->
                        <div class="cta-content">
                            <h4 class="title">Internships</h4>
                        </div>
                        <!-- CTA Content End -->

                    </div>
                    <!-- Single CTA Wrapper End -->
                </div>

                <div class="col mb-6" data-aos="fade-up" data-aos-duration="1200">
                    <!-- Single CTA Wrapper Start -->
                    <div class="single-cta-wrapper">

                        <!-- CTA Icon Start -->
                        <div class="cta-icon">
                            <i class="ti-bar-chart"></i>
                        </div>
                        <!-- CTA Icon End -->

                        <!-- CTA Content Start -->
                        <div class="cta-content">
                            <h4 class="title">Documents</h4>
                        </div>
                        <!-- CTA Content End -->

                    </div>
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

            <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 mb-n8">

                <div class="col mb-8" data-aos="fade-up" data-aos-duration="1000">
                    <!-- Single scholarship Start -->
                    <div class="single-blog-wrapper">

                        <!-- scholarship Thumb Start -->
                        <div class="blog-thumb thumb-effect">
                            <a class="image" href="blog-details-sidebar.php">
                                <img class="fit-image" src="assets/images/blog/medium-size/1.jpg" alt="Blog Image">
                            </a>
                        </div>
                        <!-- scholarship Thumb End -->

                        <!-- scholarship Content Start -->
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><span>By</span><a href="javascript: void(0)">Admin</a></li>
                                    <li><span>27, Jan, 2021</span></li>
                                </ul>
                            </div>
                            <h2 class="blog-title"><a href="blog-details-sidebar.php">How to take care of your fish</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>
                            <a class="more-link" href="blog-details-sidebar.php">Read More</a>
                        </div>
                        <!-- scholarship Content End -->

                    </div>
                    <!-- Single Blog End -->
                </div>


            </div>

        </div>
    </div>

    
    <div class="section section-margin-bottom mt-5">
        <div class="container">

            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title" style="color:#F6AB49;font-weight:bold">Featured Scholarships</h2>
                    </div>
                </div>
            </div>

            <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 mb-n8">

                <div class="col mb-8" data-aos="fade-up" data-aos-duration="1000">
                    <!-- Single Blog Start -->
                    <div class="single-blog-wrapper">

                        <!-- Blog Thumb Start -->
                        <div class="blog-thumb thumb-effect">
                            <a class="image" href="blog-details-sidebar.php">
                                <img class="fit-image" src="assets/images/blog/medium-size/1.jpg" alt="Blog Image">
                            </a>
                        </div>
                        <!-- Blog Thumb End -->

                        <!-- Blog Content Start -->
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><span>By</span><a href="javascript: void(0)">Admin</a></li>
                                    <li><span>27, Jan, 2021</span></li>
                                </ul>
                            </div>
                            <h2 class="blog-title"><a href="blog-details-sidebar.php">How to take care of your fish</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>
                            <a class="more-link" href="blog-details-sidebar.php">Read More</a>
                        </div>
                        <!-- Blog Content End -->

                    </div>
                    <!-- Single Blog End -->
                </div>

             
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

            <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 mb-n8">

                <div class="col mb-8" data-aos="fade-up" data-aos-duration="1000">
                    <!-- Single Blog Start -->
                    <div class="single-blog-wrapper">

                        <!-- Blog Thumb Start -->
                        <div class="blog-thumb thumb-effect">
                            <a class="image" href="blog-details-sidebar.php">
                                <img class="fit-image" src="assets/images/blog/medium-size/1.jpg" alt="Blog Image">
                            </a>
                        </div>
                        <!-- Blog Thumb End -->

                        <!-- Blog Content Start -->
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><span>By</span><a href="javascript: void(0)">Admin</a></li>
                                    <li><span>27, Jan, 2021</span></li>
                                </ul>
                            </div>
                            <h2 class="blog-title"><a href="blog-details-sidebar.php">How to take care of your fish</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut...</p>
                            <a class="more-link" href="blog-details-sidebar.php">Read More</a>
                        </div>
                        <!-- Blog Content End -->

                    </div>
                    <!-- Single Blog End -->
                </div>

               

            </div>

        </div>
    </div>
   
@endsection

@section('js')

@endsection




