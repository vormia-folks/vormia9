<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Vormia L9</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/app.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/pages/auth.css">

    <!-- Load Vormia CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vormia') }}/css/style.min.css">

</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo vma-logo-text">
                        <a href="{{url('/')}}">
                            <img src="{{ asset('assets/admin/vormia') }}/img/logo/logo-blue.png" alt="Logo">
                            <span>Vormia</span>
                        </a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-2">To access the vormia awesomeness, kindly login first.</p>

                    <!-- Main Page -->
                    @include("admin.pages.$page_name")
                    <!-- End Main Page -->

                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="forgot-pass"><a class="font-bold" href="#">Forgot password?</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>