@extends('admin.layouts.master')

@section('css')

@endsection

@section('main')
<!-- Begin page -->
<div id="layout-wrapper">

    @include ('admin.layouts.sidebar');
    @include ('admin.layouts.topbar')


   
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <?php
                $maintitle = "MFH Scholarship";
                $title = "Show Sub Category";
                ?>
                 @include ('admin.layouts.breadcrumb')
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                              

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Name</th>
                                                <th>Sub Category Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                           
                                        </tbody>
                                    </table>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->




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

