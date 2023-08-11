@extends('admin.layouts.master')


@section('css')

@endsection


@section('main')

<div id="layout-wrapper">    
    @include ('admin.layouts.sidebar');
    @include ('admin.layouts.topbar')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <?php
                $maintitle = "Dashboard ";
                $title = "Welcome !";
                ?>
                @include ('admin.layouts.breadcrumb')
               
                <!-- end page title -->
                <div class="row">
                    <div class="col-md-3">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Degree</span>
                                        <h4 class="mb-3">
                                              <span class="counter-value" data-target="{{DB::table('add_degree')->count()}}">
                                               {{DB::table('add_degree')->count()}}
                                              </span>
                                        </h4>
                              
                                    </div>

                              
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->


                    <div class="col-md-3">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Scholarships</span>
                                        <h4 class="mb-3">
                                              <span class="counter-value" data-target=" {{DB::table('add_scholarships')->count()}}">
                                              {{DB::table('add_scholarships')->count()}}
                                              </span>
                                        </h4>
                              
                                    </div>

                              
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-md-3">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Blogs</span>
                                        <h4 class="mb-3">
                                              <span class="counter-value" data-target=" {{DB::table('blogs')->count()}}">
                                              {{DB::table('blogs')->count()}}
                                              </span>
                                        </h4>
                              
                                    </div>

                              
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-md-3">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Country</span>
                                        <h4 class="mb-3">
                                              <span class="counter-value" data-target="{{DB::table('countries')->count()}}">
                                              {{DB::table('countries')->count()}}
                                              </span>
                                        </h4>
                              
                                    </div>

                              
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-md-3">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Subcribled New letter</span>
                                        <h4 class="mb-3">
                                              <span class="counter-value" data-target="{{DB::table('subscribers')->count()}}">
                                              {{DB::table('subscribers')->count()}}
                                              </span>
                                        </h4>
                                    </div>

                              
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->





                </div><!-- end row-->


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        
        @include ('admin.layouts.footer')

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->
@endsection

@section('js')

@endsection


