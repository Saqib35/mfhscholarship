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
                $title = "Show Scholarship";
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
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Name</th>
                                                <th>slug</th>
                                                <th>country</th>
                                                <th>Degree</th>
                                                <th>Description</th>
                                                <th>University Logo</th>
                                                <th>Banner img</th>
                                                <th>website url</th>
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
    


            $(document).ready(function() {
            $('#users-table').DataTable({
                // serverSide: true,
                // processing: true,
                ajax: {
                    url: "{{ route('show-scholarship') }}",
                    type: "GET",
                    dataType: "json",
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'meta_title', name: 'meta_title' },
                    { data: 'meta_keyworlds', name: 'meta_keyworlds' },
                    { data: 'meta_description', name: 'meta_description' },
                    {data: 'date', name: 'date'},
                    {data: 'time', name: 'time'},
                    {data: 'scholarship_name', name: 'scholarship_name'},
                    {data: 'scholarship_slug', name: 'scholarship_slug'},
                    {data: 'scholarship_country', name: 'scholarship_country'},
                    {data: 'scholarship_degree', name: 'scholarship_degree'},
                    {data: 'scholarship_description', name: 'scholarship_description'},
                    {data: 'scholarship_university_logo', name: 'scholarship_university_logo'},
                    {data: 'scholarship_banner_img', name: 'scholarship_banner_img'},
                    {data: 'scholarship_website_url', name: 'scholarship_website_url'},
                    {data: 'action', name: 'action' , orderable: false, searchable: false}   

                ],
                order: [0, 'desc'],
            });
        });


        function delscholarship(id){
            var buttonId = 'delscholarship' + id;
             $('#' + buttonId).closest('tr').remove();
             
              $.ajax({
                url: "{{ route('del-delscholarship') }}",
                type: "GET",
                data: {
                    // Include any data you want to send to the server
                    id: id, 
                },
                dataType: "json",
                success: function(response) {
                    // Handle the response from the server
                   
                    if(response.success==true){
                        toastr.success('Scholarship Deleted Successfully', 'success');
                    }else if(response.success==false){
                        toastr.error('Something went wrong', 'error');
                    }else{
                        toastr.error('Something went wrong', 'error');
                    }
            
                },
                error: function(xhr, status, error) {
            
                toastr.error('Something went wrong', 'error');

                }
            });
            


         } 

    </script>
@endsection
