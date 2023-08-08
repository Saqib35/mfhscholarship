
@extends('admin.layouts.master')

@section('css')

@endsection

@section('main')
<!-- Begin page -->
<div id="layout-wrapper">

    @include ('admin.layouts.sidebar');
    @include ('admin.layouts.topbar');

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <?php
                $maintitle = "Ecommerce";
                $title = "Add Blog";
                ?>
                @include ('admin.layouts.breadcrumb')
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Information</h4>
                                <p class="card-title-desc">Fill all information below</p>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST" enctype='multipart/form-data'>
                                    <div class="row">
                                         <div class="col-md-6 mb-3">
                                                <label for="productname">Product Name</label>
                                                <input id="productname" required="" onkeyup="createSlug(this.value)" name="prod_name" type="text" class="form-control">
                                            
                                            
                                        </div>

                                        <div class="col-md-6 mb-3">
                                                <label for="product_slug">Product Slug</label>
                                                <input id="product_slug"  required="" readonly name="product_slug" type="text" class="form-control">
                                            
                                            
                                        </div>

                                        <div class="col-md-6 mb-3">
                                                <label for="prod_price">Product Price</label>
                                                <input id="prod_price"  required="" name="prod_price" type="text" class="form-control">
                                            
                                        </div>

                                        
                                        <div class="col-md-6 mb-3">
                                                <label for="prod_old_price">Product Old Price</label>
                                                <input id="prod_old_price" name="prod_old_price" type="text" class="form-control">
                                            
                                        </div>
                                        
                                        <div class="col-md-6 mb-3">
                                                <label for="discount">Product Discount</label>
                                                <input id="discount" name="discount" type="text" class="form-control">
                                            
                                        </div>

                                        <div class="col-md-6 mb-3">
                                                <label for="product_code">Product Code</label>
                                                <input id="product_code"  required="" name="product_code" type="text" class="form-control">
                                            
                                        </div>


                                        <div class="col-md-6 mb-3">
                                            
                                                <label class="control-label">Category</label>
                                                <select class="form-control" required=""  onchange="getSubCate(this.value)" name="cate_id">
                                                    <option  disabled selected value="" >Select</option>
                                                  
                                                </select>
                                        
                                        </div>

                                       <div class="col-md-6 mb-3">
                                            
                                                <label class="control-label">Sub category</label>
                                                <select class="form-control" required="" name="sub_cate_id" id="sub_cate_id">
                                                  
                                                </select>
                                        
                                        </div>


                                        
                                        <div class="col-md-6 mb-3">
                                            
                                                <label class="control-label">Featured</label>
                                                <select required="" class="form-control" name="featured">
                                                    <option disabled selected value="">Select</option>
                                                    <option value="off">No featured</option>
                                                    <option value="on">Featured</option>
                                                    
                                                </select>
                                        
                                        </div>


                                        <div class="col-md-6 mb-3">
                                                <label for="file1">Product Image</label>
                                               <input type="file" class="form-control" id="file1" required="" name="file1">
                                            
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                <label for="file2">Product Image</label>
                                               <input type="file" class="form-control" id="file2"  required="" name="file2">
                                            
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                <label for="file3">Product Image</label>
                                               <input type="file" class="form-control" id="file3"  required="" name="file3">
                                            
                                        </div>
                                        <div class="col-md-6 mb-3">
                                                <label for="file4">Product Image</label>
                                               <input type="file" class="form-control" id="file4"  required="" name="file4">
                                            
                                        </div>

                                    </div>



                                   <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="metatitle">Meta title</label>
                                                <input id="metatitle"  required="" name="metatitle" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="metakeywords">Meta Keywords</label>
                                                <input id="metakeywords"  required="" name="metakeywords" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="metadescription">Meta Description</label>
                                                <textarea class="form-control"  required="" name="metadescription" id="metadescription" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                       <div class="col-md-12 mb-3">
                                                <label for="prod_description">Product Description</label>
                                               <textarea class="form-control"  required="" name="prod_description"></textarea> 
                                            
                                        </div>

                                   
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" name="addproduct" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                        <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                    </div>
                                </form>

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