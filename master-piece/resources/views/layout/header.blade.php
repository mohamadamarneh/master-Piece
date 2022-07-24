<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from themepure.net/template/gota/gota/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Jun 2022 21:01:23 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Gota eCommerce HTML5</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href={{asset("img/favicon.ico")}}>
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
                                <a href="index.html"><img src={{asset("img/logo/logo-1.png")}} alt="logo"></a>
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
                                            <li><a href="#">Soccer</a></li>
                                            <li><a href="#">Basketball</a></li>
                                            
                                            
                                            <li><a href="shop.html">Tennis</a></li>
                                            
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
                                        <li class="position-static menu-item-has-children"><a href='/stadiums'>Shop</a>
                                            <ul class="mega_menu" data-background={{asset("img/mega-menu/product.jpg")}}>
                                                <li>
                                                    <h4 class="mega_title">Shop Layout</h4>
                                                    <ul class="mega_item">
                                                        <li><a href="shop.html">Soccer</a></li>
                                                        <li><a href="shop.html">Basketball</a></li>
                                                        <li><a href="shop-3-width.html">Tennis</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="mega_title">Categories</h4>
                                                    <ul class="mega_item">
                                                        <li><a href="shop-list.html">List View</a></li>
                                                        <li><a href="shop-sm.html">Small Products</a></li>
                                                        <li><a href="shop-large.html">Large Products</a></li>
                                                        <li><a href="shop-3-width.html">Shop — 3 Items</a></li>
                                                        <li><a href="shop-4.html">Shop — 4 Items</a></li>
                                                        <li><a href="shop-sm.html">Shop — 5 Items</a></li>
                                                    </ul>
                                                </li>
                                                <li>

                                                    <h4 class="mega_title">Product Layout</h4>
                                                    <ul class="mega_item">
                                                        <li><a href="shop-sticky.html">Description Sticky</a></li>
                                                        <li><a href="shop-carousel.html">Product Carousel</a></li>
                                                        <li><a href="modern.html"> Gallery Modern</a></li>
                                                        <li><a href="single.html"> Thumbnail Left</a></li>
                                                        <li><a href="single-right.html">Thumbnail Right</a></li>
                                                        <li><a href="single-bottom.html"> Thumbnail Botttom</a></li>
                                                    </ul>
                                                    
                                                </li>
                                                <li>
    
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="position-static menu-item-has-children"><a href="service.html">Categories</a>
                                            <ul class="mega_menu_2">
                                                <li data-background={{asset("img/mega-menu/product2.jpg")}}>
                                                    <h4 class="mega_title_2">Basketball</h4>
                                                    <ul class="mega_item_2">
                                                        <li><a href="shop.html">stadium 1</a></li>
                                                        <li><a href="shop.html">stadium 1</a></li>
                                                        <li><a href="shop.html">stadium 1</a></li>
                                                        <li><a href="shop.html">Kaoreet lobortis</a></li>
                                                        <li><a href="shop.html">NikeCourt Zoom Prestige</a></li>
                                                        <li><a href="shop.html">NikeCourts Air Zoom</a></li>
                                                        <li><a href="shop.html">NikeCourts Air Zoom</a></li>
                                                    </ul>
                                                </li>
                                                <li data-background={{asset('img/mega-menu/soccer-nav(1).png')}}>
                                                    <h4 class="mega_title_2">Soccer</h4>
                                                    <ul class="mega_item_2">
                                                        <li><a href="shop.html">stadium 1y</a></li>
                                                        <li><a href="shop.html">stadium 1</a></li>
                                                        <li><a href="shop.html">stadium 1</a></li>
                                                        <li><a href="shop.html">stadium 1</a></li>
                                                        <li><a href="shop.html">stadium 1</a></li>
                                                        <li><a href="shop.html">V-Neck T-Shirt</a></li>
                                                        <li><a href="shop.html">WordPress Pennant</a></li>
                                                    </ul>
                                                </li>
                                                <li data-background={{asset("img/mega-menu/product4.jpg")}}>
                                                    <h4 class="mega_title_2">Tennis</h4>
                                                    <ul class="mega_item_2">
                                                        <li><a href="shop.html">stadium 1</a></li>
                                                        <li><a href="shop.html">stadium 1</a></li>
                                                        <li><a href="shop.html">stadium 1</a></li>
                                                        <li><a href="shop.html">stadium 1</a></li>
                                                        <li><a href="shop.html">NikeCourt Zoom Prestige</a></li>
                                                        <li><a href="shop.html">NikeCourts Air Zoom</a></li>
                                                        <li><a href="shop.html">NikeCourts Air Zoom</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>


                                        @if (Session::get('username'))
                                        <li class="menu-item-has-children"><a href="/profile">Profile</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-grid.html">Account</a></li>
                                                <li>
                                                    
                                                    <a href="logout">Log out</a></li>
                
                                            </ul>
                                        </li>

                                            
                                        @else
                                        <li><a href="/login">Login</a></li>
                                        <li><a href="/register">Register</a></li>
                                        @endif
                                        
                                        <li><a href="about">About</a></li>
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

        <div class="cart__sidebar">
            <div class="container">
                <div class="cart__content">
                    <div class="cart-text">
                        <h3 class="mb-40">Shopping cart</h3>
                        <div class="add_cart_product">
                            <div class="add_cart_product__thumb">
                                <img src={{asset("assets/img/product/29-3.jpg")}} alt="">
                            </div>
                            <div class="add_cart_product__content">
                                <h5><a href="shop.html">Running 3-Stripes</a></h5>
                                <p>1 × $66.00</p>
                                <button class="cart_close"><i class="fal fa-times"></i></button>
                            </div>
                        </div>
                        <div class="add_cart_product">
                            <div class="add_cart_product__thumb">
                                <img src="assets/img/product/17.jpg" alt="">
                            </div>
                            <div class="add_cart_product__content">
                                <h5><a href="shop.html">Buddy non Stripes</a></h5>
                                <p>1 × $40.00</p>
                                <button class="cart_close"><i class="fal fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="cart-icon">
                        <i class="fal fa-times"></i>
                    </div>
                    <div class="cart-bottom">
                        <div class="cart-bottom__text">
                            <span>Subtotal:</span>
                            <span class="end">$121.00</span>
                            <a href="cart.html">view cart</a>
                            <a href="checkout.html">checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-offcanvas-overlay"></div>