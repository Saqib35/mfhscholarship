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
                $title = "Show Country";
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
                                                <th>Country Code</th>
                                                <th>Country Name</th>
                                               
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
                serverSide: true,
                ajax: "{{ route('show-country') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'country_code', name: 'country_code'},
                    {data: 'country_name', name: 'country_name'},
                ],
                order: [0, 'desc'],
             
            });

        
        });

      
    </script>
@endsection
