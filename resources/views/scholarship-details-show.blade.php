@extends('layouts.main')

@section('css')
 <title> {{ $modifiedString = str_replace('-', ' ', $slug); }}</title>

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
                     {!! $AddScholarship->scholarship_content !!}
                    </div>      
                    <div class="col-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, asperiores corrupti fugit reprehenderit libero provident iusto odit vitae labore dicta quia itaque cumque veniam, fugiat hic magni deserunt fuga nesciunt.</div>      
                </div>
           </div>
        </div>
        
   
    
@endsection

@section('js')

@endsection

