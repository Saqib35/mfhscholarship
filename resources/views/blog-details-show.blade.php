@extends('layouts.main')

@section('css')
 <title> {{ $modifiedString = str_replace('-', ' ', $slug); }}</title>
 <style>
            .img-side{
                height: 100px;
                width: 100%
            }
            .img-side img{
                height: 100%;
                width: 100%
            }
            @media screen and (max-width: 991){
                .right_sidebar{
                    display: none;
                }
            }
        </style>
   
@endsection

@section('main')
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">
                            {{ $modifiedString = str_replace('-', ' ', $slug); }}
                        </h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>{{ $modifiedString = str_replace('-', ' ', $slug); }}</li>
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
                    <div class="col-8">
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

