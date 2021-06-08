<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demos.creative-tim.com/impact-design-system-pro/front/pages/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jul 2020 15:38:51 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Primary Meta Tags -->
    <title>Sign in |Motivational Hub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="title" content="Sign in |Motivational Hub">
    <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/png"><!-- Fontawesome -->
    <link type="text/css" href="{{asset('css/all.min.css')}}"
        rel="stylesheet">
    <!-- Nucleo icons -->
    <link rel="stylesheet" href="{{asset('css/nucleo.css')}}" type="text/css"><!-- Prism -->
    <link type="text/css" href="{{asset('css/prism.css')}}" rel="stylesheet"><!-- Front CSS -->
    <link type="text/css" href="{{asset('css/front.css')}}" rel="stylesheet">

</head>

<body>


    <main>
        <div class="preloader bg-soft flex-column justify-content-center align-items-center">
            <div class="loader-element"><span class="loader-animated-dot"></span> <img
                    src="{{asset('img/dark-loader.svg')}}" height="40" alt="Impact logo"></div>
        </div><!-- Section -->
        <section class="vh-100 d-flex align-items-center section-image overlay-soft-dark"
            data-background="{{asset('img/saas-form-image.jpg')}}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div
                            class="signin-inner mt-3 mt-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Sign in to our platform</h1>
                            </div>
                            <span class="text-success">

                                @if(Session::get('success'))
                
                {{Session::get('success')}}
                
                @endif
                <span class="text-danger">

                    @if(Session::get('error'))
    
    {{Session::get('error')}}
    
    @endif
    
                            </span>
                            <form action="{{route('login')}}" method="post" enctype="multipart/form-data" id="login_form" class="mt-4">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="email" class="form-control" id="input-email" name="email"
                                            placeholder="Enter email">
                                    </div>
                                    <span class="text-danger" id="email_error">
                                        @error ('email') {{$message}} @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" name="password"
                                            type="password">
                                        <div class="input-group-append">
                                            <!-- <span class="input-group-text"><i class="far fa-eye"></i></span> -->
                                        </div>
                                        
                                        
                                    </div>

                                    </div>
                                    
                                    <span class="text-danger" id="email_error">
                                        @error ('password') {{$message}} @enderror
                                    </span>
                                    <div class="d-block d-sm-flex justify-content-between align-items-center mt-2">
                                        <div class="form-group form-check mt-3">
                                            <input type="checkbox" class="form-check-input" name="remember_me"
                                                value="true" id="exampleCheck1">
                                            <label class="form-check-label form-check-sign-white"
                                                for="exampleCheck1">Remember me</label>
                                        </div>
                                        <!-- <div><a href="forgot-password.html" class="small text-right">Lost password?</a>
                                        </div> -->
                                    </div>
                                
                                <div class="mt-3"><button type="submit" class="btn btn-block btn-primary"
                                        id="submit_btn">Sign
                                        in</button></div>
                            </form>
                            <!-- <div class="mt-3 mb-4 text-center"><span class="font-weight-normal">or login with</span>
                            </div>
                            <div class="btn-wrapper my-4 text-center"><button
                                    class="btn mr-2 btn-icon-only btn-pill btn-twitter" type="button"><span
                                        class="btn-inner-icon"><i class="fab fa-twitter"></i></span></button> <button
                                    class="btn mr-2 btn-icon-only btn-pill btn-facebook" type="button"><span
                                        class="btn-inner-icon"><i class="fab fa-facebook-f"></i></span></button> <button
                                    class="btn mr-2 btn-icon-only btn-pill btn-google" type="button"><span
                                        class="btn-inner-icon"><i class="fab fa-google"></i></span></button></div>
                            <div class="d-block d-sm-flex justify-content-center align-items-center mt-4"><span
                                    class="font-weight-normal">Not registered? <a href="sign-up.html"
                                        class="font-weight-bold">Create account</a></span></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- Core -->
    <script src="{{asset('js//jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/headroom.min.js')}}"></script><!-- Vendor JS -->
    <script src="{{asset('js/on-screen.umd.min.js')}}"></script>
    <script src="{{asset('js/nouislider.min.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jarallax.min.js')}}"></script>
    <script src="{{asset('js/countUp.min.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/smooth-scroll.polyfills.min.js')}}"></script>
    <script src="{{asset('js/prism.js')}}"></script>
    <script src="{{asset('js/front.js')}}"></script>
    {{-- <script>
    $("#login_form").on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: "{{route('submitLogin')}}",
            type: "POST",
            data: $(this).serialize(),
            beforeSend: function() {
                $("#submit_btn").text('Processing...');
                $("#submit_btn").prop('disabled', true);
            },
            error: function(error) {
                $("#submit_btn").text('Sign in');
                $("#submit_btn").prop('disabled', false);
                if ('errors' in error.responseJSON) {
                    if ('email' in error.responseJSON.errors) {
                        var email_error = error.responseJSON.errors.email[0];
                        $("#email_error").text(email_error);
                    } else {
                        $("#email_error").text('');
                    }
                    if ('password' in error.responseJSON.errors) {
                        var password_error = error.responseJSON.errors.password[0];
                        $("#password_error").text(password_error);
                    } else {
                        $("#password_error").text('');
                    }

                }
            },
            success: function(data) {
                $("#submit_btn").text('Sign in');
                $("#submit_btn").prop('disabled', false);
                if (data.success == true) {
                    $("#error_msg").text('Singed in successfully!');
                    $("#error_msg").addClass('text-success');
                    window.location.href = "{{route('dashboard')}}";
                }
                if (data.success == false) {
                    $("#error_msg").text(data.error);
                    $("#error_msg").addClass('text-danger');
                }
            }

        });
    });
    </script> --}}
</body>

</html>