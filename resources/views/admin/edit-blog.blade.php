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
                $title = "Edit Blog";
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
                                <h4 class="card-title mb-0">Blog Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('edit-blog') }}" enctype='multipart/form-data' method="post" id="myForm" class="drozone">
                                 @csrf
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="meta_title">Meta Title</label>
                                                <input id="meta_title" required="" value="{{ $EditBlogs['meta_title'] }}" name="meta_title" type="text" class="form-control">

                                                <input id="blog_id" required="" hidden value="{{ $EditBlogs['id'] }}" name="blog_id" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="meta_keyworlds">Meta Keyworlds</label>
                                                <input id="meta_keyworlds" required=""  value="{{ $EditBlogs['meta_keyworlds'] }}" name="meta_keyworlds" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="meta_description">Meta Description</label>
                                                <input id="meta_description" required=""  value="{{ $EditBlogs['meta_description'] }}" name="meta_description" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                      

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="blog_name">Blog Name</label>
                                                <input id="blog_name" onkeyup="createSlug(this.value)"  value="{{ $EditBlogs['blog_name'] }}"  required="" name="blog_name" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="blog_slug">Slug</label>
                                                <input id="blog_slug"  required="" value="{{ $EditBlogs['blog_slug'] }}"  name="blog_slug" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="blog_category">Blog Category</label>
                                                <select class="form-control" name="blog_category" id="countrySelect" required="">
                                                    <option value="internships" <?php if($EditBlogs['blog_category']=='internships'){ echo "selected";} ?>>Internships</option>
                                                    <option value="application-resources" <?php if($EditBlogs['blog_category']=='application-resources'){ echo "selected";} ?>>Application Resources</option>
                                                    <option value="scholarships-and-study" <?php if($EditBlogs['blog_category']=='scholarships-and-study'){ echo "selected";} ?>>Scholarships and Study</option>
                                                    <option value="employment-and-profession" <?php if($EditBlogs['blog_category']=='employment-and-profession'){ echo "selected";} ?>>Employment and Profession</option>
                                                    <option value="other-blogs"  <?php if($EditBlogs['blog_category']=='our-blogs'){ echo "selected";} ?>>Our Blogs</option>
                                                </select>
                                            </div>
                                            
                                        </div>


                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="blog_description">Blog Description</label>
                                                <input id="blog_description" required="" value="{{ $EditBlogs['blog_description']; }}" name="blog_description" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                        
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="blog_img">Blog Image</label>
                                                <input id="blog_img"  name="blog_img" type="file" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="blog_img_alt_tag">Blog Image Alt Tag</label>
                                                <input id="	blog_img_alt_tag" required="" value="{{  $EditBlogs['blog_img_alt_tag']; }}" name="blog_img_alt_tag" type="text" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <!-- <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="blog_banner">Blog Banner Img</label>
                                                <input id="blog_banner"  name="blog_banner" type="file" class="form-control">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="blog_banner_alt_tag">Blog Banner Img Alt Tag</label>
                                                <input id="blog_banner_alt_tag" required="" value="{{  $EditBlogs['blog_banner_alt_tag']; }}" name="blog_banner_alt_tag" type="text" class="form-control">
                                            </div>
                                            
                                        </div> -->

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="blog_content">Blog Details</label>
                                                <textarea name="blog_content" id="editor1" class="form-control">{{ $EditBlogs['blog_content'] }}</textarea>
                                            </div>
                                        </div>

                                          {{ url($EditBlogs['blog_img']) }}
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="schema">Schema Json</label>
                                                <textarea id="schema"  name="schema" rows="20" class="form-control">
                                                {{ $EditBlogs['schemass'] }}
                                                </textarea>
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
         $('#blog_slug').val(slug);

    }

    $(document).ready(function() {
        $('#countrySelect').select2();
    });

</script>

@endsection

