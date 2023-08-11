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
                $title = "Show Blogs";
                ?>
                @include ('admin.layouts.breadcrumb')
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap" id="users-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Meta title</th>
                                                <th>Meta words</th>
                                                <th>Meta description</th>
                                                <th>Name</th>
                                                <th>slug</th>
                                                <th>Category</th>
                                                <th>Description</th>
                                                <th>Blog Img</th>
                                                <!-- <th>Img Alt</th> -->
                                                <th>Blog  Banner</th>
                                                <!-- <th> Banner Alt</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                       
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

<script>
        $(function () {
            $('#users-table').DataTable({
                // processing: true,
                // serverSide: true,
                ajax: "{{ route('show-blog') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'meta_title', name: 'meta_title'},
                    {data: 'meta_keyworlds', name: 'meta_keyworlds'},
                    {data: 'meta_description', name: 'meta_description'},
                    {data: 'blog_name', name: 'blog_name'},
                    {data: 'blog_slug', name: 'blog_slug'},
                    {data: 'blog_category', name: 'blog_category'},
                    {data: 'blog_description', name: 'blog_description'},
                    {data: 'blog_img', name: 'blog_img'},
                    // {data: 'blog_img_alt_tag', name: 'blog_img_alt_tag'},
                    {data: 'blog_banner', name: 'blog_banner'},
                    // {data: 'blog_banner_alt_tag	', name: 'blog_banner_alt_tag'},
                    {data: 'action', name: 'action' , orderable: false, searchable: false}   
                    
                ],
                order: [0, 'desc'],
             
            });

        
        });

      
    </script>
@endsection
