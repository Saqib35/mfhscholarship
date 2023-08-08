
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
                        <h2 class="breadcrumb-title">Error 404</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Error 404</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Error 404 Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Error Form Start -->
                    <div class="error_form">
                        <h1 class="title">404</h1>
                        <h2 class="sub-title">Opps! PAGE NOT BE FOUND</h2>
                        <p>Sorry but the page you are looking for does not exist, have been<br> removed, name changed or is temporarily unavailable.</p>
                        
                        <a href="{{ url('/') }}" class="btn btn-primary btn-hover-dark rounded-0">Back to home page</a>
                    </div>
                    <!-- Error Form End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Error 404 Section End -->

@endsection

@section('js')

@endsection


 