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
                $maintitle = "Bloggerworld";
                $title = "Add Degree";
                ?>
                
                @include ('admin.layouts.breadcrumb')
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                       
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Degree Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="add-category.php" enctype='multipart/form-data' method="post" id="myForm" class="drozone">

                                      <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="degreeName">Degree Name</label>
                                                <input id="degreeName" required="" name="degreeName" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                    <br>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" name="add-category" class="btn btn-primary waves-effect waves-light">Save Changes</button>
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

<script>

   $(document).ready(function() {
    $('#myForm').submit(function(event) {
        event.preventDefault();  

    var degreeName = $('#myForm input[name="degreeName"]').val();

        $.ajax({
            url: "{{ route('add-degree') }}",
            type: "GET",
            data: {
                // Include any data you want to send to the server
                degreeName: degreeName, 
            },
            dataType: "json",
            success: function(response) {
                // Handle the response from the server
        
                if(response.success==true){
                    toastr.success('Degree Added Successfully', 'success');
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
   });
});


</script>


@endsection

