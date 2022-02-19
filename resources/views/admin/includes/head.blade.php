<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Vormia L9</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/vendors/iconly/bold.css">

    <link rel="stylesheet" href="{{ asset('assets/admin') }}/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/app.css">
    <link rel="shortcut icon" href="{{ asset('assets/admin') }}/images/favicon.svg" type="image/x-icon">

    <!-- Load Vormia CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vormia') }}/css/style.min.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header vma-sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo vma-logo-text-admin">
                            <a href="{{url('vma-admin/dashboard')}}">
                                <span>Vormia</span>
                            </a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                @include('admin.navs.sidebar')
                <!-- End Sidebar Menu -->
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>