@extends('layouts.main')

@section('css')
<title>International Scholarships Application | MFH Scholarship </title>
    <meta name="description" content="Explore the process of international scholarships application. Unlock opportunities for global education with our comprehensive guide and resources. Contact us"/>
    <meta name="keywords" content="country scholarship, local student scholarships, regional education funding, national academic grants, educational opportunities by country">
    <meta name="robots" content="follow, index"/>
    <link rel="canonical" href="{{  Request::fullUrl() }}"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Country Scholarships: Investing in Your Education Locally for Global Success"/>
    <meta property="og:description" content="Explore country-specific scholarships that pave the way for local students to achieve global success. Discover funding options tailored to your region, ensuring a solid educational foundation and promising future."/>
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
    <div class="section breadcrumb-area bg-bright" style="background-image: url('{{ asset('assets/all-country.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h1 class="breadcrumb-title text-white">Scholarships by Countries</h1>
                        <ul>
                            <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                            <li class="text-white">Scholarships by Countries</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    
    <!-- country show section star -->
    <div class="container" style="margin-top:10px !important"> 
        <div class="row">
            @foreach($countires as $countires)
            <div class="col-lg-3  col-sm-4  col-6 p-5">
                <a href="{{ url('category/'.$countires->slug.'/') }}" target="_blank">
                  <div style="height:150px;width:100%" class="hover-zoom">
                     <img src="{{ asset('assets/flag/'.$countires->country_code.'.webp') }}" alt="{{  $countires->alt_tag }}" style="height:100%;width:100%;border:3px solid #e9e9e9"  >
                  </div>
             
                <strong> {{ $countires->country_name; }}</strong>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <style>
        .hover-zoom{
            overflow:hidden;
        }
        .hover-zoom:hover img {
            transform: scale(1.1);
        }

    </style>
    <!-- country show section End -->
<!-- start content -->
<div>
    <p>Navigating the world of academics can often seem like a daunting task, especially when one aspires to study abroad. Understanding this challenge, the MFH Scholarship offers a dedicated portal that caters to those seeking opportunities beyond their homeland. With our curated list, the International Scholarships Application process is simplified and made more accessible.</p>
<P>At MFH Scholarship, we believe in breaking boundaries and building bridges through education. Our platform stands as a testament to this commitment, guiding aspirants through the maze of opportunities that the world offers. Every International Scholarships Application we feature is meticulously vetted, ensuring that you have access to genuine, rewarding opportunities that can transform your educational journey.</P>
<p>So, if you've always dreamt of experiencing global education, let the MFH Scholarship be your guiding star. Embark on this exciting journey, and let your aspirations find their wings.</p>
</div>
<!-- end content -->
    
@endsection

@section('js')

@endsection

