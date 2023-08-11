<!-- Footer Section Start -->
    <footer class="section footer-section">
        <!-- Footer Top Start -->
        <div class="footer-top bg-bright section-padding">
            <div class="container">
                <div class="row mb-n8">
                    <div class="col-12 col-sm-6 col-lg-3 mb-8" data-aos="fade-up" data-aos-duration="1000">
                        <div class="single-footer-widget">
                            <h1 class="widget-title">About Us</h1>
                            <p class="desc-content">If you're looking for information on scholarships for international students, you've come to the right place. The mfhscholarship.com website provides a wealth of resources for students who are interested in pursuing a degree at an accredited institution of higher education.</p>
                            <!-- Soclial Link Start -->
                            <div class="widget-social justify-content-start mb-n2">
                                <a title="Twitter" href="javascript: void(0)/"><i class="icon-social-twitter"></i></a>
                                <a title="Instagram" href="javascript: void(0)/"><i class="icon-social-instagram"></i></a>
                                <a title="Linkedin" href="javascript: void(0)/"><i class="icon-social-linkedin"></i></a>
                                <a title="Facebook" href="javascript: void(0)/"><i class="icon-social-facebook"></i></a>
                                
                            </div>
                            
                            <!-- Social Link End -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-8" data-aos="fade-up" data-aos-duration="1200">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Useful Links</h2>
                            <ul class="widget-list">    
                                 <li><a href="{{ url('about') }}">About</a></li>
                                 <li><a href="{{ url('contact') }}">Contact</a></li>
                                 <li><a href="{{ url('faq') }}">FAQ</a></li>
                                 <li><a href="{{ url('disclaimer') }}">Disclaimer</a></li>
                                 <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                                 <li><a href="{{ url('terms-of-use') }}">Terms & Conditions</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-8" data-aos="fade-up" data-aos-duration="1400">
                        <div class="single-footer-widget aos-init aos-animate">
                            <h2 class="widget-title">POPULAR CATEGORIES</h2>
                            <ul class="widget-list">
                                @foreach (\App\Models\AddDegree::all() as $degree)
                                    <li><a href="{{ url('category/'.$degree->degree_slug); }}">{{ $degree->degree }}</a></li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-8" data-aos="fade-up" data-aos-duration="1600">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">Subcrible Newsletter</h2>
                            <div class="widget-body">
                                <div class="newsletter-form-wrap pt-1">
                                    <form id="subCrible" class="mc-form">
                                        <input type="email" id="mc-email" class="form-control email-box" placeholder="demo@example.com" name="EMAIL">
                                        <button id="mc-submit" class="newsletter-btn" type="submit">Send</button>
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    
                                    <!-- mailchimp-alerts end -->
                                </div>
                                <!-- Newsletter Form End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom bg-light pt-4 pb-4">
            <div class="container">
                <div class="row align-items-center mb-n4">
                    <div class="col-md-12 text-center text-md-start mb-4">
                        <div class="copyright-content text-center">
                            <p class="mb-0">© 2023 <strong>MFH Scholarship </strong> Made with <i class="fa fa-heart text-danger"></i> by <a href="https://softhubusa.com/">Softhub USA.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!-- Footer Section End -->


    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top show" id="scroll-top">
        <i class="arrow-top ti-angle-double-up"></i>
        <i class="arrow-bottom ti-angle-double-up"></i>
    </a>
    <!-- Scroll Top End -->