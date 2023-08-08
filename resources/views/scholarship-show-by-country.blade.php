@extends('layouts.main')

@section('css')
 <title> {{ $modifiedString = str_replace('-', ' ', $slug); }}</title>
<style>

/* Style for Laravel's default pagination with Bootstrap 5 */
.pagination {
    justify-content: center;
    margin-top: 20px;
}

.pagination .page-item {
    display: inline-block;
    margin: 0 2px;
}

.pagination .page-item.disabled .page-link {
    background-color: transparent;
    border-color: #ddd;
    color: #777;
}

.pagination .page-item.active .page-link {
    background-color: #007bff;
    border-color: #007bff;
}

.pagination .page-link {
    padding: 6px 12px;
    border: 1px solid #ddd;
    color: #333;
    background-color: #fff;
}

.pagination .page-link:hover {
    background-color: #eee;
}
.hidden{
    display:none;
}

</style>
@endsection

@section('main')
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright" style="background-image: url('{{ asset('assets/countryBanner/US.jpg') }}');">
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
    
    <!-- country show section star -->
    
        <div class="section section-margin-bottom mt-5">
            <div class="container">
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
                                    <img class="fit-image" src="{{ asset($AddScholarships->scholarship_university_logo)}}" alt="Blog Image">
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

