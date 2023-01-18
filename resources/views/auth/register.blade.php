<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Create Account</title>
  <!-- plugins:css -->
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
              <h4>New here?</h4>
              <h6 class="font-weight-light">Create A New Account</h6>
              <form action="{{route('register')}}" method="POST" class="pt-3">
                @csrf 
                    <div class="form-group">
                    <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username">
                     @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                     @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    
                    <div class="form-group">
                    <input lass="form-control @error('password') is-invalid @enderror" name="password" required type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="form-group">
                     <input lass="form-control" name="password_confirmation" required type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password">                  
                    </div>
           

                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Create Account</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="{{route('login')}}" class="text-primary">Login</a>
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
