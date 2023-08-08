<style>
.active-tab {
    color: #f6ab49 !important;
}
</style>
<div class="header section">
       
        <!-- Header Bottom Start -->
        <div class="header-bottom">
            <div class="header-sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">

                        <!-- Header Logo Start -->
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="header-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('assets/logo.svg') }}" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="main-menu">
                                <ul>
                                    <li class="has-children">
                                     <a href="{{ url('/') }}" class="@if(request()->is('/')) active @endif">Home</a>
                                   </li>
                                    <li class="has-children">
                                        <a href="javascript: void(0)" class="@if(request()->is('scholarships-by-countries') || request()->is('category/scholarship-lists')) active @endif">Scholarship </a>
                                        <ul class="sub-menu">
                                        <li><a href="{{ url('scholarships-by-countries') }}" class="@if(request()->is('scholarships-by-countries')) active-tab @endif" >Scholarship By Country</a></li>
                                            <li><a href="{{ url('category/scholarship-lists') }}" class="@if(request()->is('category/scholarship-lists')) active-tab @endif"  >All Scholarship</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a href="javascript: void(0)">Degree</a>
                                        <ul class="sub-menu">
                                        @foreach (\App\Models\AddDegree::all() as $degree)
                                            <li><a class="@if(request()->is('category/'.$degree->degree_slug)) active-tab @endif" href="{{ url('category/'.$degree->degree_slug); }}">{{ $degree->degree }}</a></li>
                                        @endforeach
                                        </ul>
                                    </li>
                                    
                                    <li class="has-children">
                                        <a href="{{ url('about') }}"  class="@if(request()->is('about')) active-tab @endif" >About</a>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{ url('contact') }}" class="@if(request()->is('contact')) active-tab @endif">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Action Start -->
                        <div class="col-lg-3 col-md-8 col-6">
                            <div class="header-actions">

                                <!-- Header Action Search Button Start -->
                                <div class="header-action-btn header-action-btn-search d-none d-md-flex">
                                    <div class="action-execute">
                                        <a class="action-search-open" href="javascript:void(0)"><i class="icon-magnifier icons"></i></a>
                                        <a class="action-search-close" href="javascript:void(0)"><i class="ti-close"></i></a>
                                    </div>
                                    <!-- Search Form and Button Start -->
                                    <form class="header-search-form" action="#">
                                        <input type="text" class="header-search-input" placeholder="Search Scholarship">
                                        <button class="header-search-button"><i class="icon-magnifier icons"></i></button>
                                    </form>
                                    <!-- Search Form and Button End -->

                                </div>
                                <!-- Header Action Search Button End -->


                                

                                <!-- Mobile Menu Hambarger Action Button Start -->
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-lg-none d-md-flex">
                                    <i class="icon-menu"></i>
                                </a>
                                <!-- Mobile Menu Hambarger Action Button End -->

                            </div>
                        </div>
                        <!-- Header Action End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom End -->

    </div>