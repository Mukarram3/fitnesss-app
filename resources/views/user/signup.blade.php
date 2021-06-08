













<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/png">
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('css/feather.css')}}">
  <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

    @if (auth()->user())
    @php
        echo " <script>window.location.href='index'</script> ";
   
    @endphp

    
 @endif


  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('storage/images/logo.svg')}}" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <span class="text-danger">

                @if(Session::get('error'))

{{Session::get('error')}}

@endif

            </span>
            <span class="text-success">

                @if(Session::get('success'))

{{Session::get('success')}}

@endif

            </span>
  
            </span>
              <form class="pt-3" action="{{route('signup')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <input type="text" name="name" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username">
                  <span class="text-danger" id="name">

                    @error ('name'){{$message}} @enderror

                        </span>
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                  <span class="text-danger" id="email">

                    @error ('email'){{$message}} @enderror

                        </span>
                </div>
                {{-- <div class="form-group">
                  <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                    <option>Country</option>
                    <option>United States of America</option>
                    <option>United Kingdom</option>
                    <option>India</option>
                    <option>Germany</option>
                    <option>Argentina</option>
                  </select>
                </div> --}}
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  <span class="text-danger" id="password">

                    @error ('password'){{$message}} @enderror

                        </span>
                </div>
                <div class="form-group">
                  <input type="text" name="address" class="form-control form-control-lg" id="" placeholder="address">
                  <span class="text-danger" id="address">

                    @error ('address'){{$message}} @enderror

                        </span>
                </div>
                <div class="form-group">
                  <input type="text" name="city" class="form-control form-control-lg" id="" placeholder="city">
                  <span class="text-danger" id="city">

                    @error ('city'){{$message}} @enderror

                        </span>
                </div>
               
                <div class="form-group">
                    <input type="text" name="Mobile" class="form-control form-control-lg" id="" placeholder="mobile">
                    <span class="text-danger" id="mobile">
  
                      @error ('mobile'){{$message}} @enderror
  
                          </span>
                  </div>
                  <div class="form-group">
                    <input type="text" name="country" class="form-control form-control-lg" id="" placeholder="country">
                    <span class="text-danger" id="country">
  
                      @error ('country'){{$message}} @enderror
  
                          </span>
                  </div>
                  <div class="form-group">
                    <input type="text" name="state" class="form-control form-control-lg" id="" placeholder="state">
                    <span class="text-danger" id="state">
  
                      @error ('state'){{$message}} @enderror
  
                          </span>
                  </div>
                  <div class="form-group">
                    <input type="date" name="dob" class="form-control form-control-lg" id="" placeholder="date of birth">
                    <span class="text-danger" id="dob">
  
                      @error ('dob'){{$message}} @enderror
  
                          </span>
                  </div>
                  <div class="form-group">
                    <input type="int" name="weight" class="form-control form-control-lg" id="" placeholder="weight in kg">
                    <span class="text-danger" id="weight">
  
                      @error ('weight'){{$message}} @enderror
  
                          </span>
                  </div>
                  <div class="form-group">
                    <input type="text" name="height" class="form-control form-control-lg" id="" placeholder="height">
                    <span class="text-danger" id="height">
  
                      @error ('height'){{$message}} @enderror
  
                          </span>
                  </div>
                  <div class="">
                      Male
                    <input type="radio" name="gender" value="male" class="">
                    Female
                    <input type="radio" name="gender" value="female" class="">
                    <span class="text-danger" id="height">
  
                      @error ('gender'){{$message}} @enderror
  
                          </span>
                  </div>
                <div class="form-group">
                    Choose Image
                  <input type="file" name="file" class="form-control form-control-lg" id="" placeholder="file">
                  <span class="text-danger" id="file">

                    @error ('file'){{$message}} @enderror

                        </span>
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
                  <a type="submit" ></a>
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="{{route('login_page')}}" class="text-primary">Login</a>
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
  <!-- plugins:js -->
  <script src="{{asset('js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <script src="{{asset('js/settings.js')}}"></script>
  <script src="{{asset('js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>
