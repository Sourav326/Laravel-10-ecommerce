<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Winning Kart</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/typicons.font/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/custom.css')}}" >
    <!-- endinject --> 
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/vertical-layout-light/style.css')}}">
    
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>
    <div class="row" id="proBanner" style="display:none">
      <div class="col-12">
        <span class="d-flex align-items-center purchase-popup">
          <p>Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more!</p>
          <a href="https://www.bootstrapdash.com/product/celestial-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=free-preview" target="_blank" class="btn download-button purchase-button ml-auto">Upgrade To Pro</a>
          <i class="typcn typcn-delete-outline" id="bannerClose"></i>
        </span>
      </div>
    </div>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="brand-logo" href="{{route('admin.dashboard')}}"><img src="{{asset('assets/images/win-logo.png')}}" alt="logo" width="70px"></a>
          <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-none d-lg-flex  mr-2">
              <a class="nav-link" href="#">
                Help
              </a>
            </li>
            <li class="nav-item dropdown d-flex">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                <i class="typcn typcn-message-typing"></i>
                <span class="count bg-success">2</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                    </h6>
                    <p class="font-weight-light small-text mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                    </h6>
                    <p class="font-weight-light small-text mb-0">
                      New product launch
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                    </h6>
                    <p class="font-weight-light small-text mb-0">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown  d-flex">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="typcn typcn-bell mr-0"></i>
                <span class="count bg-danger">2</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="typcn typcn-info-large mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="typcn typcn-cog mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="typcn typcn-user-outline mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
                  @if(auth()->guard('admin')->user()->name)
                <i class="typcn typcn-user-outline mr-0"></i>
                <span class="nav-profile-name">{{auth()->guard('admin')->user()->name}}</span>
                @endif
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a href="{{route('admin.profile.update')}}" class="dropdown-item">
                <i class="typcn typcn-cog text-primary"></i>
                Profile
                </a>
                <a href="{{route('admin.logout')}}" class="dropdown-item">
                <i class="typcn typcn-power text-primary"></i>
                Logout
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <div class="d-flex sidebar-profile">
              <div class="sidebar-profile-image">
                @if(auth()->guard('admin')->user()->image)
                    <img src="{{asset('storage/images').'/'.auth()->guard('admin')->user()->image}}" alt="user Image"/>
                @else
                    <img src="{{asset('assets/images/admin-profile.png')}}" alt="user Image"/>
                @endif
                <span class="sidebar-status-indicator"></span>
              </div>
              <div class="sidebar-profile-name">
                <p class="sidebar-name">
                @if(auth()->guard('admin')->user()->name)
                {{auth()->guard('admin')->user()->name}}
                @endif
                </p>
                <p class="sidebar-designation">
                  Welcome
                </p>
              </div>
            </div>
            <div class="nav-search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
                <div class="input-group-append">
                  <span class="input-group-text" id="search">
                    <i class="typcn typcn-zoom"></i>
                  </span>
                </div>
              </div>
            </div>
            <p class="sidebar-menu-title">Dash menu</p>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Dashboard <span class="badge badge-primary ml-3">New</span></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#brands" aria-expanded="false" aria-controls="brands">
                <i class="typcn typcn-user-outline menu-icon"></i>
                <span class="menu-title">Brands</span>
                <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="brands">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.brands.catgory')}}">Brand Categories</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.brands.category.create')}}">Create Brand Category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.brands')}}">Brands List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.brands.create')}}">Create Brand</a></li>
                </ul>
            </div>
        </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#products" aria-expanded="false" aria-controls="products">
                <i class="typcn typcn-user-outline menu-icon"></i>
                <span class="menu-title">Products</span>
                <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="products">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.brands.catgory')}}">Brand Categories</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.brands.category.create')}}">Create Brand Category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.brands')}}">Brands List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.brands.create')}}">Create Brand</a></li>
                </ul>
            </div>
        </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="users">
                <i class="typcn typcn-user-outline menu-icon"></i>
                <span class="menu-title">Users</span>
                <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="users">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Users List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Create User</a></li>
                    
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#vendors" aria-expanded="false" aria-controls="vendors">
                <i class="typcn typcn-user-add-outline menu-icon"></i>
              <span class="menu-title">Vendors</span>
              <i class="typcn typcn-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="vendors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Vendors List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.vendor.create')}}">Create Vandor</a></li>
                
              </ul>
            </div>
          </li> -->
        </ul>
        <ul class="sidebar-legend">
          <li>
            <p class="sidebar-menu-title">Quick Links</p>
          </li>
          <li class="nav-item"><a href="{{route('admin.brands.create')}}" class="nav-link">#Add Brand</a></li>
          <li class="nav-item"><a href="#" class="nav-link">#Marketing</a></li>
          <li class="nav-item"><a href="#" class="nav-link">#Growth</a></li>
        </ul>
      </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          
            @if(Session::has('sucess_message'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('sucess_message')}}
                </div>
            @endif
            @if(Session::has('error_message'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('error_message')}}
                </div>
            @endif
           
            @yield('content')

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">Winning Karts </a> {{date("Y")}}</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="#" target="_blank">Winning Karts </a>Platform</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
    <script src="{{asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('admin/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/assets/js/template.js')}}"></script>
    <script src="{{asset('admin/assets/js/settings.js')}}"></script>
    <script src="{{asset('admin/assets/js/todolist.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('admin/assets/js/file-upload.js')}}"></script>
    
    <script>
       // JavaScript code to display the selected image
       const imageInput = document.getElementById('selectedImage');
       console.log(imageInput);
        const imagePreview = document.getElementById('target');

        imageInput.addEventListener('change', function() {
            console.log("called");
            const selectedFile = imageInput.files[0];
            if (selectedFile) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                };

                reader.readAsDataURL(selectedFile);
            } else {
                imagePreview.src = "#";
            }
        });
    </script>


<script>
        // JavaScript code to display selected images
        const imageInput2 = document.getElementById('imageInput');
        const imagePreviews = document.getElementById('imagePreviews');

        imageInput2.addEventListener('change', function() {
            imagePreviews.innerHTML = ''; // Clear existing previews

            for (let i = 0; i < imageInput2.files.length; i++) {
                const selectedFile = imageInput2.files[i];
                if (selectedFile) {
                    const reader = new FileReader();
                    const imagePreview = document.createElement('img');
                  

                    reader.onload = function(e) {
                        imagePreview.src = e.target.result;
                    };

                    reader.readAsDataURL(selectedFile);

                    imagePreviews.appendChild(imagePreview);
                }
            }
        });
    </script>

   
  </body>
</html>