
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
                        <h2 class="breadcrumb-title">Blog Details Sidebar</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Blog Details Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Blog Details Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <!-- Blog Details Wrapper Start -->
                    <div class="blog-details-wrapper">

                        <!-- Blog Details Content Start -->
                        <div class="blog-details-content">

                            <!-- Blog Image Start -->
                            <div class="blog-image">
                                <img src="assets/images/blog/large-size/1.jpg" alt="Blog Image" class="fit-image">
                            </div>
                            <!-- Blog Image End -->

                            <!-- Blog details title & Meta Start -->
                            <div class="blog-details-title-meta">
                                <h2 class="title">Temporibus Autem Quibusdam</h2>
                                <ul class="blog-meta">
                                    <li>By: <a href="#/">Admin</a> <span>27 June 2021</span></li>
                                    <li>03 Comments</li>
                                </ul>
                            </div>
                            <!-- Blog details title & Meta End -->

                            <!-- Content Start -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <!-- Blogquote Start -->
                            <blockquote>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño.</blockquote>
                            <!-- Blogquote End -->
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                            <!-- Content End -->

                            <!-- Blog Details Tags & Social Shear Start -->
                            <div class="blog-details-tag-social mb-n4">

                                <!-- Blog Details Tags Start -->
                                <div class="blog-details-tag mb-4">
                                    <ul>
                                        <li><a href="#/">Cat</a></li>
                                        <li><a href="#/">Dog</a></li>
                                        <li><a href="#/">Fish</a></li>
                                    </ul>
                                </div>
                                <!-- Blog Details Tags End -->

                                <!-- Social Shear Start -->
                                <div class="social-share mb-4">
                                    <div class="widget-social">
                                        <span>Share: </span>
                                        <a title="Twitter" href="#/"><i class="icon-social-twitter"></i></a>
                                        <a title="Instagram" href="#/"><i class="icon-social-instagram"></i></a>
                                        <a title="Linkedin" href="#/"><i class="icon-social-linkedin"></i></a>
                                        <a title="Skype" href="#/"><i class="icon-social-skype"></i></a>
                                        <a title="Dribble" href="#/"><i class="icon-social-dribbble"></i></a>
                                    </div>
                                </div>
                                <!-- Social Shear End -->

                            </div>
                            <!-- Blog Details Tags & Social Shear End -->
                        </div>
                        <!-- Blog Details Content End -->

                        <!-- Blog Details Comments area Start -->
                        <div class="blog-details-comment-area mb-n6">
                            <h2 class="blog-desc-title mb-6 mt-8">Comments</h2>
                            <div class="blog-details-comment-wrapper mb-6">
                                <div class="thumb">
                                    <img class="fit-image" src="assets/images/blog/small-size/95x95.jpg" alt="Blog Review">
                                </div>
                                <div class="content">
                                    <h4 class="title">Catherin Betty</h4>
                                    <ul class="meta">
                                        <li>27 Oct 2021</li>
                                    </ul>
                                    <p>Praesent bibendum risus pellentesque faucibus rhoncus. Etiam a mollis odio. Integer urna nisl, fermentum eu mollis et, gravida eu elit. Excepteur sint occaecat cupidatat.</p>
                                </div>
                            </div>

                            <div class="blog-details-comment-wrapper mb-6">
                                <div class="thumb">
                                    <img class="fit-image" src="assets/images/blog/small-size/95x95-2.jpg" alt="Blog Review">
                                </div>
                                <div class="content">
                                    <h4 class="title">Alex Due</h4>
                                    <ul class="meta">
                                        <li>27 Oct 2021</li>
                                    </ul>
                                    <p>Praesent bibendum risus pellentesque faucibus rhoncus. Etiam a mollis odio. Integer urna nisl, fermentum eu mollis et, gravida eu elit. Excepteur sint occaecat cupidatat.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Details Comments area End -->

                        <!-- Comments Post Area Start -->
                        <div class="comment-post-area">
                            <h2 class="blog-desc-title mb-6 pt-8">Post a Comment</h2>
                            <form action="#">
                                <div class="row">

                                    <!-- Name Input Start -->
                                    <div class="col-md-6 col-custom">
                                        <div class="input-item mb-4">
                                            <input class="rounded-0 w-100 input-area name" type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <!-- Name Input End -->

                                    <!-- Email Input Start -->
                                    <div class="col-md-6 col-custom">
                                        <div class="input-item mb-4">
                                            <input class="rounded-0 w-100 input-area email" type="text" placeholder="Email">
                                        </div>
                                    </div>
                                    <!-- Email Input End -->

                                    <!-- Message Input Start -->
                                    <div class="col-12 col-custom">
                                        <div class="input-item mb-4">
                                            <textarea cols="30" rows="10" name="comment" class="rounded-0 w-100 custom-textarea input-area" placeholder="Message" spellcheck="false" data-gramm="false"></textarea>
                                        </div>
                                    </div>
                                    <!-- Message Input End -->

                                    <!-- Submit Button Start -->
                                    <div class="col-12 col-custom mt-4">
                                        <button type="submit" class="btn btn-primary btn-hover-dark">Send Message</button>
                                    </div>
                                    <!-- Submit Button End -->

                                </div>
                            </form>
                        </div>
                        <!-- Comments Post Area End -->

                    </div>
                    <!-- Blog Details Wrapper End -->
                </div>

                <div class="col-lg-3 col-12">
                    <!-- Sidebar Widget Start -->
                    <aside class="sidebar_widget mt-10 mt-lg-0">
                        <div class="widget_inner">
                            <div class="widget-list mb-10">
                                <h3 class="widget-title mb-6">Search</h3>
                                <div class="search-box">
                                    <input type="text" class="form-control" placeholder="Search Our Store" aria-label="Search Our Store">
                                    <button class="search-icon" type="button">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="widget-list mb-10">
                                <h3 class="widget-title mb-6">Categories</h3>
                                <div class="sidebar-body">
                                    <ul class="sidebar-list">
                                        <li><a href="#/">All Product</a></li>
                                        <li><a href="#/">Best Seller (5)</a></li>
                                        <li><a href="#/">Featured (4)</a></li>
                                        <li><a href="#/">New Products (6)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-list pb-10">
                                <h3 class="widget-title mb-6">Archive</h3>
                                <div class="sidebar-body sidebar-body-archive">
                                    <h4 class="title">November 2021</h4>
                                    <ul class="archive-list d-block">
                                        <li><span>&#8608;</span><a href="#">There Are Many Pets...</a></li>
                                        <li><span>&#8608;</span><a href="#">The Standard Chunk Of...</a></li>
                                        <li><span>&#8608;</span><a href="#">How to Take Care...</a></li>
                                    </ul>
                                </div>
                                <div class="sidebar-body sidebar-body-archive mt-4">
                                    <h4 class="title">December 2021</h4>
                                    <ul class="archive-list d-block">
                                        <li><span>&#8608;</span><a href="#">There Are Many Pets...</a></li>
                                        <li><span>&#8608;</span><a href="#">The Standard Chunk Of...</a></li>
                                        <li><span>&#8608;</span><a href="#">How to Take Care...</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-list pb-10">
                                <h3 class="widget-title mb-6">Recent Posts</h3>
                                <div class="sidebar-body blog-list-wrapper mb-n6">

                                    <!-- Single Blog List Start -->
                                    <div class="single-blog-list mb-6">

                                        <!-- Blog List Thumb Start -->
                                        <div class="blog-thumb">
                                            <a href="blog-details-sidebar.php" class="image">
                                                <img class="fit-image" src="assets/images/blog/small-size/1.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        <!-- Blog List Thumb End -->

                                        <!-- Blog List Content Start -->
                                        <div class="blog-list-content">
                                            <h6 class="blog-name">
                                                <a href="blog-details-sidebar.php" title="How to take care of your fish">How to take care...</a>
                                            </h6>
                                            <div class="blog-meta">
                                                <p>03/11/2021</p>
                                            </div>
                                        </div>
                                        <!-- Blog List Content End -->

                                    </div>
                                    <!-- Single Blog List End -->

                                    <!-- Single Blog List Start -->
                                    <div class="single-blog-list mb-6">

                                        <!-- Blog List Thumb Start -->
                                        <div class="blog-thumb">
                                            <a href="blog-details-sidebar.php" class="image">
                                                <img class="fit-image" src="assets/images/blog/small-size/2.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        <!-- Blog List Thumb End -->

                                        <!-- Blog List Content Start -->
                                        <div class="blog-list-content">
                                            <h6 class="blog-name">
                                                <a href="blog-details-sidebar.php" title="Tips for taking care of dogs">Tips for taking care...</a>
                                            </h6>
                                            <div class="blog-meta">
                                                <p>03/11/2021</p>
                                            </div>
                                        </div>
                                        <!-- Blog List Content End -->

                                    </div>
                                    <!-- Single Blog List End -->

                                    <!-- Single Blog List Start -->
                                    <div class="single-blog-list mb-6">

                                        <!-- Blog List Thumb Start -->
                                        <div class="blog-thumb">
                                            <a href="blog-details-sidebar.php" class="image">
                                                <img class="fit-image" src="assets/images/blog/small-size/3.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                        <!-- Blog List Thumb End -->

                                        <!-- Blog List Content Start -->
                                        <div class="blog-list-content">
                                            <h6 class="blog-name">
                                                <a href="blog-details-sidebar.php" title="Beginning a Birding Blog">Beginning a Birding...</a>
                                            </h6>
                                            <div class="blog-meta">
                                                <p>12/06/2021</p>
                                            </div>
                                        </div>
                                        <!-- Blog List Content End -->

                                    </div>
                                    <!-- Single Blog List End -->

                                </div>
                            </div>
                            <div class="widget-list">
                                <h3 class="widget-title mb-6">Tags</h3>
                                <div class="sidebar-body">
                                    <ul class="tags mb-n2">
                                        <li><a href="#/">Pet Food</a></li>
                                        <li><a href="#/">Animals</a></li>
                                        <li><a href="#/">Domestic</a></li>
                                        <li><a href="#/">Wild</a></li>
                                        <li><a href="#/">Dogs</a></li>
                                        <li><a href="#/">Cats</a></li>
                                        <li><a href="#/">Hubby</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- Sidebar Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section End -->
@endsection

@section('js')

@endsection

