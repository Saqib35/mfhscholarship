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
<meta property="og:image" content="{{ url($AddScholarship->blog_img) }}"/>
<meta property="og:image:secure_url" content="{{ url($AddScholarship->blog_img) }}"/>
<meta property="og:image:width" content="512"/>
<meta property="og:image:height" content="512"/>
<meta property="og:image:alt" content="{{ $AddScholarship->blog_img_alt_tag }}"/>
<meta property="og:image:type" content="image/jpeg"/>
<meta property="og:image:type" content="image/png"/>
@php

if(!empty($AddScholarship->schemass))
{
    echo $AddScholarship->schemass;
@endphp
@php
}
@endphp
 <style>
            .img-side{
                height: 100px;
                width: 100%
            }
            .img-side img{
                height: 100%;
                width: 100%
            }
            @media only screen and (min-width: 320px) and (max-width: 991px) {
                .right_sidebar{
                    display: none;
                }
            }
        </style>
   
@endsection

@section('main')
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright" style="background-image: url('{{ asset('assets/countryBanner/CA.webp') }}');background-size: cover;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title text-white">
                            {{ $modifiedString = str_replace('-', ' ', $slug); }}
                        </h2>
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
    
   
    
        <div class="section section-margin-bottom mt-5">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8">
                     {!! $AddScholarship->blog_content !!}
                    </div>      
                    <div class="col-lg-4 right_sidebar">
                        <div class="container">
                               <div class="row">
                                    @php
                                    $tenDaysAgo =  \Carbon\Carbon::now()->subDays(10);
                                    $scholarship_related = DB::table('blogs')
                                    ->where('id', '!=', $AddScholarship->id)
                                    ->where('created_at', '>=', $tenDaysAgo)
                                    ->inRandomOrder()
                                    ->limit(4)
                                    ->get();
                                    @endphp

                                    @foreach($scholarship_related as $record)
                                    <div class="col-6 mb-3">
                                        <a href="{{ url($record->blog_slug) }}">
                                        <div class="img-side rounded">
                                            <img class="rounded" src="{{ asset($record->blog_img) }}" alt="{{  $record->blog_img_alt_tag }}">
                                        </div>
                                        <h6 class="mt-2">{{ $record->blog_name }}</h6>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                                
                        </div>
                    </div>      
                 </div>
           </div>
        </div>
        
   
    
@endsection

@section('js')

@endsection

