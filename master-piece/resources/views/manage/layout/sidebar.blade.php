<!DOCTYPE html>
<html lang="en">
@if (!Session::get('adminname') && !Session::get('ownername') && !Session::get('coachname'))
    @php
        header('Location:http://127.0.0.1:8000/dash-login');
        exit();
    @endphp
@endif


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href={{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/vendors/css/vendor.bundle.base.css') }}>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href={{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }}>
    <link rel="stylesheet" href={{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href={{ asset('assets/css/style.css') }}>
    <!-- End layout styles -->
    <link rel="shortcut icon" href={{asset("images/logo/logo_transparent(1).png")}} />
</head>

<body>

    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="/dash"><img src={{asset("images/logo/aaaaa(2).png")}} style="max-width: 100%;"
                        alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="/dash"><img 
                    src={{asset("images/logo/aaaaa(3).png")}} style="max-width: 100%; height: 50px;" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src={{ asset('img\team\user.png') }}
                                    alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">


                                    @if (Session::get('adminname'))
                                        {{ Session::get('adminname') }}
                                    @endif




                                    @if (Session::get('ownername'))
                                        {{ Session::get('ownername') }}
                                    @endif

                                    @if (Session::get('coachname'))
                                        {{ Session::get('coachname') }}
                                    @endif


                                </h5>

                            </div>
                        </div>


                    </div>
                </li>


                @if (Session::get('adminname'))
                    <li class="nav-item nav-category">
                        <span class="nav-link">Navigation</span>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/dash">
                            <span class="menu-icon">
                                <i class="mdi mdi-speedometer"></i>
                            </span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">

                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/dash-categorise">
                            <span class="menu-icon">
                                <i class="mdi mdi-playlist-play"></i>
                            </span>
                            <span class="menu-title">Categorise</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/dash-Stadiums">
                            <span class="menu-icon">
                                <i class="mdi mdi-playlist-play"></i>
                            </span>
                            <span class="menu-title">Stadiums</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/dash-comments">
                            <span class="menu-icon">
                                <i class="mdi mdi-table-large"></i>
                            </span>
                            <span class="menu-title">Comments</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/dash-coustumers">
                            <span class="menu-icon">
                                <i class="mdi mdi-contacts"></i>
                            </span>
                            <span class="menu-title">users</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/dash-admins">
                            <span class="menu-icon">
                                <i class="mdi mdi-contacts"></i>
                            </span>
                            <span class="menu-title">admins</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/dash-coaches">
                            <span class="menu-icon">
                                <i class="mdi mdi-chart-bar"></i>
                            </span>
                            <span class="menu-title">Coaches</span>
                        </a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/dash-books">
                            <span class="menu-icon">
                                <i class="mdi mdi-chart-bar"></i>
                            </span>
                            <span class="menu-title">Books</span>
                        </a>
                    </li>

                    <li class="nav-item menu-items">
                        <a class="nav-link" href="/dash-owners">
                            <span class="menu-icon">
                                <i class="mdi mdi-chart-bar"></i>
                            </span>
                            <span class="menu-title">Owners</span>
                        </a>
                    </li>



                    <li class="nav-item menu-items">
                        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false"
                            aria-controls="auth">
                            <span class="menu-icon">
                                <i class="mdi mdi-security"></i>
                            </span>
                            <span class="menu-title">User Pages</span>
                            <i class="menu-arrow"></i>
                        </a>

                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="">
                            <span class="menu-icon">
                                <i class="mdi mdi-file-document-box"></i>
                            </span>
                            <span class="menu-title">Documentation</span>
                        </a>
                    </li>
            </ul>
            @endif

        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
