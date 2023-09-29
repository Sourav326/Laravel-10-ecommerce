<!DOCTYPE html>
<html lang="en"><head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Winning Kart Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('admin/assets/vendors/typicons.font/font/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">


              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                @if(Session::has('error_message'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('error_message')}}
                    </div>
                @endif
                @if(Session::has('success_message'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success_message')}}
                    </div>
                @endif
              
              <div class="pb-4">
                <img src="{{asset('assets/images/win-logo.png')}}" alt="logo" width="100px">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="POST" action="{{route('admin.login')}}">
                @csrf
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" autofocus required>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('admin/assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('admin/assets/js/template.js')}}"></script>
  <script src="{{asset('admin/assets/js/settings.js')}}"></script>
  <script src="{{asset('admin/assets/js/todolist.js')}}"></script>
  <!-- endinject -->



</body></html>