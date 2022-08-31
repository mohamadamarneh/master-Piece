<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from themepure.net/template/gota/gota/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Jun 2022 21:01:23 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>mal3ab</title>
        <meta name="description" content="among us">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href={{asset('/images/logo/logo_transparent(1).png')}}>
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href={{ asset("css/bootstrap.min.css")}}>
        <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css')}}>
        <link rel="stylesheet" href={{asset('css/animate.min.css')}}>
        <link rel="stylesheet" href={{asset('css/magnific-popup.css')}}>
        <link rel="stylesheet" href={{ asset("css/fontawesome-all.min.css")}}>
        <link rel="stylesheet" href={{asset("css/themify-icons.css")}}>
        <link rel="stylesheet" href={{asset("css/futura-std-font.css")}}>
        <link rel="stylesheet" href={{asset("css/meanmenu.css")}}>
        <link rel="stylesheet" href={{asset("css/swiper-bundle.min.css")}}>
        <link rel="stylesheet" href={{asset("css/slick.css")}}>
        
        <link rel="stylesheet" href={{asset("css/style.css")}}>
        <link rel="stylesheet" href={{asset("css/responsive.css")}}>
    </head>
    <body>

        <!-- header area start -->
        <header class="header-area">
            <div class="gota_top_3 d-none d-sm-block">
                <div class="container-fluid">
                
                </div>
            </div>
            <div class="gota_search pl-60 pt-20 border-bottomm">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-1 col-lg-2 col-md-2">
                            <div class="logo_3">
                                <a href="index.html"><img src={{asset("/images/logo/aaaaa(1).png")}} alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 d-none  d-sm-none d-xl-block">
                            <div class="search__input pl-70">
                                <form action="#" method="POST">
                                    <a class="absoulute search" href="#"><i class="far fa-search"></i></a>
                                    <input type="search" placeholder="Enter keywords to search..."/>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6 d-none d-sm-block">
                            <div class="gota_top pl-40 gota_top_bg gota_top_bg_3">
                                <div class="gota_lang gota_lang_3 pl-70">
                                    <ul class="d-sm-none d-md-block">
                                        <li><a class="fw-bold" href="#">jod<i class="fal fa-chevron-down"></i></a>
                                            <ul class="additional_dropdown">
                                                <li><a href="#">usd</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="fw-bold" href="#">english<i class="fal fa-chevron-down"></i></a>
                                            <ul class="additional_dropdown">
                                                <li><a href="#">Arabic</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="gota_cart absoulute gota_cart_3 ">
                                        {{-- <a href="javascript:void(0)"><i class=""></i>Reservations<span class="counter"> (2)</span></a> --}}
                                        <i class="fal fa-shopping-bag"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gota_bottom gota_bottom_3 position-relative">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-4 col-md-4  col-sm-6">
                            <div class="sidemenu sidemenu-3 d-xl-none d-md-block d-lg-none">
                                <a class="open" href="#"><i class="fal fa-bars"></i></a>
                            </div>
                            <div class="gota_vertical_menu d-none d-md-block">
                                <ul>
                                    <li><a href="#"><i class="fal fa-bars"></i></a></li>
                                    <li class="position-static"><a href="javascript:void(0)">browse categories</a>

                                        <ul class="vertical-dropdown">

                                            <li><a href="/categury/1">Soccer</a></li>
                                            <li><a href="/categury/2">Basketball</a></li>
                                            <li><a href="/categury/3">Tennis</a></li>
                                            
                                        </ul>

                                    </li>
                                    <li><a href="#"><i class="fal fa-chevron-down"></i></a></li>
                                </ul>      
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8  d-xl-block col-md-4 col-sm-4">
                             <div class="main-menu main-menu-3">
                                <nav id="mobile-menu">
                                    <ul>                                                                    
                                        <li class="menu-item active"><a href="/">Home </a>
                                        </li>
                                        <li class="menu-item active"><a href="/stadiums">Shop </a>
                                        </li>
                    
                                        @if (Session::get('username'))
                                        <li class="menu-item-has-children"><a href="/profile">Profile</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="account" >Account</a></li>
                                                <li>
                                                    <a href="logout">Log out</a></li>
                
                                            </ul>
                                        </li>

                                            
                                        @else
                                        <li><a href="/login">Login</a></li>
                                        <li><a href="/register">Register</a></li>
                                        @endif
                                        
                                        <li><a href="/about">About</a></li>
                                        <li><a href="/contact">contact us </a></li>
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        
                        <div class="col-xl-2 col-lg-8 col-md-4  col-sm-4 d-sm-none d-md-block">
                            <div class="gota_call d-none d-xl-block">
                               <!-- <p><i class="far fa-phone-volume"></i>Hotline: (+800) 123 456 7890</p> -->
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->