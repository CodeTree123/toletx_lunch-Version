<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/favicon_io/android-chrome-192x192.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300&family=Manrope:wght@300&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/TOLETX-LOGO-2.ai')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Custom CSS for header  -->

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/dark.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/lite.css')}}">

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/responsive.css')}}">
    <script>
        // Render blocking JS:
        if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
    </script>

    <title>ToletX</title>
</head>

<body>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block" id="hello">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <style>
        .login-form {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
    </style>
    <!-- <div class="col-md-7 col-lg-5 login-form"> -->
    <div class="wrap login-wrap-body" id="login">
        <div class="login-wrap p-4 p-md-4">
            <div class="d-flex">
                <div class="w-100">
                    <!-- <h3 class="mb-4">Log In</h3> -->
                </div>
                <div class="w-100">
                    <p class="social-media d-flex justify-content-end">
                        <!-- <a href="{{ route('login.facebook') }}" class="social-icon d-flex align-items-center justify-content-center">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                            <a href="{{ route('login.google') }}" class="social-icon d-flex align-items-center justify-content-center">
                                <span class="fab fa-google"></span>
                                 <i class="fab fa-google"></i>
                            </a> -->
                    </p>
                </div>
            </div>
            <form action="{{ route('login') }}" method="POST" class="signin-form">
                @csrf
                <div class="form-group mt-3">
                    <input type="numeric" name="phone" class="form-control" required />
                    <label class="form-control-placeholder" for="username">Mobile Number</label>
                </div>
                <div class="form-group">
                    <input id="password-field" type="password" name="password" class="form-control" required />
                    <label class="form-control-placeholder" for="password">Password</label>
                    <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                        Sign In
                    </button>
                </div>
                <div class="form-group d-md-flex">
                    <div class="w-50 text-left">
                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                            <input type="checkbox" checked />
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="w-50 text-md-right">
                        <a href="{{route('forgot_password_form')}}">Forgot Password</a>
                    </div>
                </div>
            </form>
            <p class="text-center">
                Not a member? <a id="signUp" href="{{route('otp')}}">Sign Up</a>
            </p>
        </div>
    </div>
</body>
<script>
    (function($) {
        "use strict";
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye-slash fa-eye");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    })(jQuery);
</script>
<script>
    $(document).ready(function() {
        $("#hello").slideDown(300).delay(1000).slideUp(300);
    });
</script>
