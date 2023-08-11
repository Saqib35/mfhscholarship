@extends('admin.layouts.master')

@section('css')

@endsection

@section('main')
<!-- Begin page -->
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
                $maintitle = "MFH Scholarship";
                $title = "Add Sub Category";
                ?>
                 @include ('admin.layouts.breadcrumb')
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                       
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Sub Category Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="add-sub-category.php"  method="post" class="drozone">

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="productname">Select Category</label>
                                            <select class="form-control" name="catName">
                                                <option selected disabled>Select Category</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="productname">Sub Category Name</label>
                                            <input id="productname" required="" name="sCatName" type="text" class="form-control">
                                        </div>
                                    </div>
                                    
                                    
                                    <br>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" name="add-sub-category" class="btn btn-primary waves-effect waves-light">Add Sub Category</button>
                                        <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                    </div>

                                </form>
                            </div>

                        </div> <!-- end card-->

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

