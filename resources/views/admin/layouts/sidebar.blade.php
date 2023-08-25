<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        
                        <li>
                            <a href="{{ url('panel/admin/home') }}">
                                <i data-feather="home"></i>
                                <span class="badge rounded-pill bg-soft-success text-success float-end">New</span>
                                <span data-key="t-dashboard">Dashboard </span>
                            </a>
                        </li>
                       
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="layers"></i>
                                <span data-key="t-ecommerce">Degree Management</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ url('panel/admin/add-category') }}" key="t-products">Add Degree</a></li>
                                <li><a href="{{ url('panel/admin/show-category') }}" key="t-products">Show Degree</a></li>
                                <!-- <li><a href="{{ url('panel/admin/add-sub-category') }}" key="t-products">Add Sub Category</a></li>
                                <li><a href="{{ url('panel/admin/show-sub-category')  }}" key="t-products">Show Sub Category</a></li>
                         -->
                         
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                            <i class="fa fa-users" style="font-size:17px"></i>
                                <span data-key="t-ecommerce">Country Management</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                               <li><a href="{{ url('panel/admin/add-country') }}" key="t-products">Add Country</a></li>
                               <li><a  href="{{ url('panel/admin/show-country') }}" data-key="t-customers">Show All Country</a></li> 

                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                            <i data-feather="box"></i>
                                <span data-key="t-ecommerce">Scholarship Manage...</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{  url('panel/admin/add-scholarship') }}" key="t-products">Add Scholarship</a></li>
                                <li><a href="{{ url('panel/admin/show-scholarship') }}" key="t-products">Show Scholarship</a></li>
                            </ul>
                        </li>
                        
                        
                            <li>
                                <a href="javascript:void(0);" class="has-arrow">
                                    <i data-feather="flag"></i>
                                    <span data-key="t-ecommerce">Blog Manage...</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('panel/admin/add-blog') }}" data-key="t-products">Add Blog</a></li>
                                    <li><a href="{{ url('panel/admin/show-blog') }}" data-key="t-products">Show Blog</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="has-arrow">
                                    <i class="fa fa-users" style="font-size: 17px;"></i>
                                    <span data-key="t-user">Subscribed Manage...</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('panel/admin/show-subcribled') }}" data-key="t-user">Show Subscribed Emails</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ url('panel/admin/indexing-api-google') }}" class="has-arrow">
                                    <i class="fa fa-google" style="font-size: 17px;"></i>
                                    <span data-key="t-user">Indexing  Api</span>
                                </a>
                            </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out" style="font-size:24px"></i> <span data-key="t-authentication">Logout </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>