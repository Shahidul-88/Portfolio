<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{asset('Auth/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('Auth/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('Auth/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('Auth/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href={{asset('Auth/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('Auth/images/logo.svg')}}" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue</h6>

                <form action="{{route('login')}}" method="POST" class="pt-3">
                    @csrf 
                    <div class="form-group">
                        <input @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email Address">
                         @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                     @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                    </div>

                    
                     <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input">
                        Keep me signed in
                        </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                    </div>

                    
                    <div class="text-center mt-4 font-weight-light">
                    New Member ? <a href="{{route('register')}}" class="text-primary">Create a New Account</a>
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

  <script src="{{asset('Auth/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('Auth/js/off-canvas.js')}}"></script>
  <script src="{{asset('Auth/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('Auth/js/template.js')}}"></script>
  <script src="{{asset('Auth/js/settings.js')}}"></script>
  <script src="{{asset('Auth/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>
