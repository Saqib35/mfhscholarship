@extends('layouts.main')

@section('css')
 <title>{{ $title }}</title>
 
    <meta name="description" content="{{ $description }}"/>
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="robots" content="follow, index"/>
    <link rel="canonical" href="{{  Request::fullUrl() }}"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="{{ $title }}"/>
    <meta property="og:description" content="{{ $description }}"/>
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
    <div class="section breadcrumb-area bg-bright" style="background-image: url('{{ asset('assets/countryBanner/'.$banner_img.'.webp') }}');background-size: cover;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h1 class="breadcrumb-title text-white">
                            {{ $modifiedString = str_replace('-', ' ', $slug); }}
                        </h1>
                        <ul>
                            <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="text-white">{{ $modifiedString = str_replace('-', ' ', $slug); }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    
    <!-- country show section star -->
    
        <div class="section section-margin-bottom mt-5">
            <div class="container">
            
            <div class="row mt-5">
                <div class="col-12">
                    <p>{{ $short }}</p>
                  
                </div>
            </div>
            <br>
            @if(count($AddScholarship) > 0)
                <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 mb-n8">
                @foreach($AddScholarship as $AddScholarships)
                    <div class="col mb-8 " data-aos="fade-up" data-aos-duration="1000">
                        <!-- Single scholarship Start -->
                        <div  style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                        <div class="single-blog-wrapper" >

                            <!-- scholarship Thumb Start -->
                            <div class="blog-thumb thumb-effect">
                                <a class="image" href="{{ url($AddScholarships->scholarship_slug) }}">
                                    <img class="fit-image" src="{{ asset($AddScholarships->scholarship_university_logo)}}" alt="{{ $AddScholarships->university_logo_alt_tag }}">
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
            <div>
           
            </div>
          
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination justify-content-end">
                        {{ $AddScholarship->appends(request()->query())->links() }}
                        </ul>
                    </div>
                </div>
            </div>
            @else
            <div class="row" style="text-align:center;font-weight:bold;margin-top:20px">
                <div class="col-12">
                  <h5>Not Found Scholarship</h5>
                </div>
            </div>
            @endif
            
        </div>
        
        </div>
        
    <!-- country show section End -->
    
@endsection

@section('js')

@endsection

