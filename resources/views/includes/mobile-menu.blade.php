
<div class="mobile-menu-wrapper">
        <div class="offcanvas-overlay"></div>

        <!-- Mobile Menu Inner Start -->
        <div class="mobile-menu-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="fa fa-times"></i>
            </div>
            <!-- Button Close End -->

            <!-- Mobile Menu Inner Wrapper Start -->
            <div class="mobile-menu-inner-wrapper">
                <!-- Mobile Menu Search Box Start -->
                <div class="search-box-offcanvas">
                <form class="header-search-form" action="{{ route('search') }}">
                    <input type="text" name="keyword" class="header-search-input" placeholder="Search Scholarship">
                    <button class="header-search-button"><i class="icon-magnifier icons"></i></button>
                </form>
                
                </div>
                <!-- Mobile Menu Search Box End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li class="has-children">
                                <a href="{{ url('/') }}" class="@if(request()->is('/')) active-tab  @endif">Home</a>
                                
                            </li>
                            <li class="has-children">
                                <a href="#" class="@if(request()->is('scholarships-by-countries') || request()->is('category/scholarship-lists')) active-tab @endif">Scholarship <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('scholarships-by-countries') }}" class="@if(request()->is('scholarships-by-countries')) active-tab @endif">Scholarship By Country</a></li>
                                    <li><a href="{{ url('category/scholarship-lists') }}" class="@if(request()->is('category/scholarship-lists')) active-tab @endif">All Scholarship</a></li>
                                    
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Degree <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                  @foreach (\App\Models\AddDegree::all() as $degree)
                                            <li><a class="@if(request()->is('category/'.$degree->degree_slug)) active-tab @endif" href="{{ url('category/'.$degree->degree_slug); }}">{{ $degree->degree }}</a></li>
                                   @endforeach    
                                   
                                    
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="{{ url('category/internships') }}" class="@if(request()->is('category/internships')) active-tab @endif">Internships</a>                       
                            </li>
                            <li class="has-children">
                                <a href="#" class="@if(request()->is('category/blog/application-resources') || request()->is('category/blog/scholarships-and-study') || request()->is('category/blog/employment-and-profession')) active-tab @endif">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                     <li><a class="@if(request()->is('category/blog/application-resources')) active-tab @endif" href="{{ url('category/blog/application-resources'); }}">Applications Documents</a></li>
                                     <li><a class="@if(request()->is('category/blog/scholarships-and-study')) active-tab @endif" href="{{ url('category/blog/scholarships-and-study'); }}">Scholarships / Study</a></li>
                                     <li><a class="@if(request()->is('category/blog/employment-and-profession')) active-tab @endif" href="{{ url('category/blog/employment-and-profession'); }}">Employment / Profession</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('about') }}" class="@if(request()->is('about')) active-tab @endif" >About</a></li>
                            <li><a href="{{ url('contact') }}" class="@if(request()->is('contact')) active-tab @endif">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->

                <!-- Contact Links/Social Links Start -->
                <div class="mt-auto bottom-0">

                    <!-- Contact Links Start -->
                    <ul class="contact-links">
                        <li><i class="fa fa-phone"></i><a href="tel:+447593146186">+44 759 314 6186</a></li>
                        <li><i class="fa fa-envelope-o"></i><a href="mailto:mfhscholarship@gmail.com"> mfhscholarship@gmail.com </a></li>
                        
                    </ul>
                    <!-- Contact Links End -->

                    <!-- Social Widget Start -->
                    <div class="widget-social">
                        <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a title="Instragram" href="#"><i class="fa fa-instagram"></i></a>
                        
                    </div>
                    <!-- Social Widget Ende -->
                </div>
                <!-- Contact Links/Social Links End -->
            </div>
            <!-- Mobile Menu Inner Wrapper End -->

        </div>
        <!-- Mobile Menu Inner End -->
    </div>