@extends('admin.layouts.master')

@section('css')

  <script src="https://cdn.ckeditor.com/4.17.1/full-all/ckeditor.js"></script> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

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
                $title = "Add Scholarship";
                ?>
                
                @include ('admin.layouts.breadcrumb')
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif


                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Scholarship Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('add-scholarship') }}" enctype='multipart/form-data' method="post" id="myForm" class="drozone">
                                 @csrf
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="metaTitle">Meta Title</label>
                                                <input id="metaTitle" required="" name="metaTitle" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                        

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="metaDescription">Meta Description</label>
                                                <input id="metaDescription" required="" name="metaDescription" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="metaKeyword">Meta Keyworld</label>
                                                <input id="metaKeyword" required="" name="metaKeyword" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="date">Date</label>
                                                <input id="date" required="" name="date" type="date" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="time">Time</label>
                                                <input id="time" required="" name="time" type="time" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="scholarName">Scholarship Name</label>
                                                <input id="scholarName" onkeyup="createSlug(this.value)" required="" name="scholarName" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="scholarSlug">Slug</label>
                                                <input id="scholarSlug"  required="" name="scholarSlug" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="scholarCountry">Scholarship Country</label>
                                                
                                                <select class="form-control" name="scholarCountry" id="countrySelect">
                                                    @foreach($countries as $country)
                                                        <option value="{{ $country['slug'] }}">{{ $country['country_name'] }}</option>
                                                    @endforeach
                                                </select>


                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="scholarDegree">Scholarship Degree</label>
                                                <select class="form-control" name="scholarDegree[]" id="countrySelect" multiple="">
                                                    @foreach($AddDegree as $AddDegree)
                                                        <option value="{{ $AddDegree['degree_slug'] }}">{{ $AddDegree['degree'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                        </div>


                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="scholarDecription">Scholarship Description</label>
                                                <input id="scholarDecription" required="" name="scholarDecription" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                        
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="scholarUniLogo">Scholarship University Logo</label>
                                                <input id="scholarUniLogo" required="" name="scholarUniLogo" type="file" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="university_logo_alt_tag">University Logo Alt Tag</label>
                                                <input id="university_logo_alt_tag" required="" name="university_logo_alt_tag" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="bannerImg">Banner Img</label>
                                                <input id="bannerImg" required="" name="bannerImg" type="file" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="banner_img_alt_tag">Banner Img Alt Tag</label>
                                                <input id="banner_img_alt_tag" required="" name="banner_img_alt_tag" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="scholarDetails">Scholarship Details</label>
                                                <textarea name="content" id="editor1" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="scholarApplyUrl">Scholarship Apply Url</label>
                                                <input id="scholarApplyUrl"  name="scholarApplyUrl" type="text" class="form-control">
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
  
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
        
    });


    function createSlug(inputString) {

        // Remove special characters and convert to lowercase
        const cleanedString = inputString
            .replace(/[^\w\s]/gi, '')
            .toLowerCase();
        const slug = cleanedString.replace(/\s+/g, '-');
         $('#scholarSlug').val(slug);

    }

    $(document).ready(function() {
        $('#countrySelect').select2();
    });

</script>

@endsection

