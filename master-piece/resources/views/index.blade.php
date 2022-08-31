@extends('layout.main')
@section('content')
    <div class="fix">
        <div class="side-info">
            <button class="side-info-close"><i class="fal fa-times"></i></button>
            <div class="side-info-content">
                <div class="mobile-menu"></div>
                <div class="contact-infos mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli
                            Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                        <p>+(090) 8765 86543 85</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><a href="https://themepure.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="dcb5b2bab39cb9a4bdb1acb0b9f2bfb3b1">[email&#160;protected]</a></p>
                        <p><a href="https://themepure.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="e7829f868a978b82c98a868e8ba78f928ac984888a">[email&#160;protected]</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>

    <!-- slider start -->
    <div class="slider-active2 swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide slider-item bgclr3 pb-200">

                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div class="slider__content pt-190">

                                <h2 class="mb-80 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">Sport <br>life
                                    style</h2>
                                <a class="button-style-3 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="1s"
                                    href="/stadiums">Discover Now</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- slider end -->

    <!-- fetures-3 area start -->
    <div class="fetures_area_3 pt-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="fetures_3" data-background="http://localhost:8000/images/pexels-edgar-colomba-2169302.jpg" style="background-sixe:cover;">
                        <div class="fetures_3_header pt-30">
                            <span class="offer-text offer_3">hot deal<i class="far fa-stars"></i></span>
                        </div>
                        <div class="fetures_3_body">
                            <a href="shop.html">
                                <h2 class="mb-60">reservations<br>stadiums<br> for All</h2>
                            </a>
                            <p>sale <span>20% Off</span><br> Tennis Stadiums</p>
                        </div>
                        <div class="fetures_3_footer"></div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-sm-none d-md-block">
                    <div class="fetures_3" data-background="http://localhost:8000/images/pexels-markus-spiske-114296.jpg">
                        <div class="fetures_3_header pt-30 text-center ">
                            <p>This month big Deal</p>
                        </div>
                        <div class="fetures_3_body text-center">
                            <a href="shop.html">
                                <h2 class="fetures_s_2 fesection-2 mb-80">football<span> Stadiums</span></h2>
                            </a>
                            <a class="button_style_f" href="shop.html">Hot deals in Irbid</a>
                        </div>
                        <div class="fetures_3_footer mb-80"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="fetures_3" data-background="http://localhost:8000/images/pexels-ingo-joseph-2618794.jpg">
                        <div class="fetures_3_header pt-30 ">
                            <span class="text-white text-uppercase">New Stadiums </span>
                        </div>
                        <div class="fetures_3_body">
                            <a href="shop.html">
                                <h2 class="mb-30"><br>Basketball<br>in jordan </h2>
                            </a>
                            <p>sale <span class="text-clr-change"> 15% Off</span><br>for basketball stadiums</p>
                        </div>
                        <div class="fetures_3_footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fetures-3 area end -->

    <!-- categories area start -->
    <div class="categories_area pt-45 mb-150">
        <div class="container-fluid">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="section-wrapper text-center mb-35">
                    <h2 class="section-title">Explore Our Stadiums</h2>
                    <p>new stadiums around you <br> explore our stadiums in jordan.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="categories__tab">
                        <ul class="nav nav-tabs justify-content-center mb-55" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">All Staduims</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Football</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact"
                                    aria-selected="false">Basketball</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact2-tab" data-bs-toggle="tab"
                                    data-bs-target="#contact2" type="button" role="tab" aria-controls="contact2"
                                    aria-selected="false">Tennis</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home">
                                <div class="container">
                                    <div class="product-active h-2-product-active swiper-container">
                                        <div class="swiper-wrapper">


                                            @foreach ($list as $item)
                                                <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s"
                                                    data-wow-delay="0.2s">
                                                    <div class="product">
                                                        <div class="product__thumb">
                                                            <a href="/single/{{ $item->title }}">
                                                                <img class="product-primary " style="width: 100%;"
                                                                    src="imagesadd/{{ $item->picture }}"
                                                                    alt="product_image">
                                                                <img class="product-secondary" style="width: 100%;"
                                                                    src="imagesadd/{{ $item->picture_two }}"
                                                                    alt="product_image">
                                                            </a>
                                                            <div class="product__update">
                                                                <a class="#">new</a>
                                                            </div>
                                                            <div class="product-info mb-10">
                                                                <div class="product_category">
                                                                    <span>{{ $item->address }}</span>
                                                                </div>
                                                                <div class="product_rating">
                                                                    <a href="#"><i
                                                                            class="fal fa-star start-color"></i></a>
                                                                    <a href="#"><i
                                                                            class="fal fa-star start-color"></i></a>
                                                                    <a href="#"><i
                                                                            class="fal fa-star start-color"></i></a>
                                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product__name">
                                                                <h4><a href="shop.html">{{ $item->title }}</a></h4>
                                                                <div class="pro-price">
                                                                    <p class="p-absoulute pr-1"><span>JOD
                                                                            {{ $item->price }}</span>
                                                                        <span>/</span> Hour
                                                                    </p>
                                                                    <a class="p-absoulute pr-2" href="#">Book
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                            <div class="product__action">
                                                                <div class="inner__action">
                                                                    <div class="wishlist">
                                                                        <a href="#"><i class="fal fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="view">
                                                                        <a href="javascript:void(0)"><i
                                                                                class="fal fa-eye"></i></a>
                                                                    </div>
                                                                    <div class="layer">
                                                                        <a href="#"><i
                                                                                class="fal fa-layer-group"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach



                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <div class="container">
                                    <div class="product-active swiper-container">
                                        <div class="swiper-wrapper">





                                            @foreach ($list as $item)
                                                @if ($item->categorises_id == 1)
                                                    <div class="product-item swiper-slide" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <div class="product">
                                                            <div class="product__thumb">
                                                                <a href="/single/{{ $item->title }}">
                                                                    <img class="product-primary " style="width: 100%;"
                                                                        src="imagesadd/{{ $item->picture }}"
                                                                        alt="product_image">
                                                                    <img class="product-secondary" style="width: 100%;"
                                                                        src="imagesadd/{{ $item->picture_two }}"
                                                                        alt="product_image">
                                                                </a>
                                                                <div class="product__update">
                                                                    <a class="#">new</a>
                                                                </div>
                                                                <div class="product-info mb-10">
                                                                    <div class="product_category">
                                                                        <span>{{ $item->address }}</span>
                                                                    </div>
                                                                    <div class="product_rating">
                                                                        <a href="#"><i
                                                                                class="fal fa-star start-color"></i></a>
                                                                        <a href="#"><i
                                                                                class="fal fa-star start-color"></i></a>
                                                                        <a href="#"><i
                                                                                class="fal fa-star start-color"></i></a>
                                                                        <a href="#"><i class="fal fa-star"></i></a>
                                                                        <a href="#"><i class="fal fa-star"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="product__name">
                                                                    <h4><a href="shop.html">{{ $item->title }}</a></h4>
                                                                    <div class="pro-price">
                                                                        <p class="p-absoulute pr-1"><span>JOD
                                                                                {{ $item->price }}</span>
                                                                            <span>/</span> Hour
                                                                        </p>
                                                                        <a class="p-absoulute pr-2" href="#">Book
                                                                            now</a>
                                                                    </div>
                                                                </div>
                                                                <div class="product__action">
                                                                    <div class="inner__action">
                                                                        <div class="wishlist">
                                                                            <a href="#"><i
                                                                                    class="fal fa-heart"></i></a>
                                                                        </div>
                                                                        <div class="view">
                                                                            <a href="javascript:void(0)"><i
                                                                                    class="fal fa-eye"></i></a>
                                                                        </div>
                                                                        <div class="layer">
                                                                            <a href="#"><i
                                                                                    class="fal fa-layer-group"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach












                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact">
                                <div class="container">
                                    <div class="product-active h-2-product-active swiper-container">
                                        <div class="swiper-wrapper">








                                            @foreach ($list as $item)
                                                @if ($item->categorises_id == 2)
                                                    <div class="product-item swiper-slide" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <div class="product">
                                                            <div class="product__thumb">
                                                                <a href="/single/{{ $item->title }}">
                                                                    <img class="product-primary " style="width: 100%;"
                                                                        src="imagesadd/{{ $item->picture }}"
                                                                        alt="product_image">
                                                                    <img class="product-secondary" style="width: 100%;"
                                                                        src="imagesadd/{{ $item->picture_two }}"
                                                                        alt="product_image">
                                                                </a>
                                                                <div class="product__update">
                                                                    <a class="#">new</a>
                                                                </div>
                                                                <div class="product-info mb-10">
                                                                    <div class="product_category">
                                                                        <span>{{ $item->address }}</span>
                                                                    </div>
                                                                    <div class="product_rating">
                                                                        <a href="#"><i
                                                                                class="fal fa-star start-color"></i></a>
                                                                        <a href="#"><i
                                                                                class="fal fa-star start-color"></i></a>
                                                                        <a href="#"><i
                                                                                class="fal fa-star start-color"></i></a>
                                                                        <a href="#"><i class="fal fa-star"></i></a>
                                                                        <a href="#"><i class="fal fa-star"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="product__name">
                                                                    <h4><a href="shop.html">{{ $item->title }}</a></h4>
                                                                    <div class="pro-price">
                                                                        <p class="p-absoulute pr-1"><span>JOD
                                                                                {{ $item->price }}</span>
                                                                            <span>/</span> Hour
                                                                        </p>
                                                                        <a class="p-absoulute pr-2" href="#">Book
                                                                            now</a>
                                                                    </div>
                                                                </div>
                                                                <div class="product__action">
                                                                    <div class="inner__action">
                                                                        <div class="wishlist">
                                                                            <a href="#"><i
                                                                                    class="fal fa-heart"></i></a>
                                                                        </div>
                                                                        <div class="view">
                                                                            <a href="javascript:void(0)"><i
                                                                                    class="fal fa-eye"></i></a>
                                                                        </div>
                                                                        <div class="layer">
                                                                            <a href="#"><i
                                                                                    class="fal fa-layer-group"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach




                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact2">
                                <div class="container">
                                    <div class="product-active swiper-container">
                                        <div class="swiper-wrapper">











                                            @foreach ($list as $item)
                                                @if ($item->categorises_id == 3)
                                                    <div class="product-item swiper-slide" data-wow-duration="1s"
                                                        data-wow-delay="0.2s">
                                                        <div class="product">
                                                            <div class="product__thumb">
                                                                <a href="/single/{{ $item->title }}">
                                                                    <img class="product-primary " style="width: 100%;"
                                                                        src="imagesadd/{{ $item->picture }}"
                                                                        alt="product_image">
                                                                    <img class="product-secondary" style="width: 100%;"
                                                                        src="imagesadd/{{ $item->picture_two }}"
                                                                        alt="product_image">
                                                                </a>
                                                                <div class="product__update">
                                                                    <a class="#">new</a>
                                                                </div>
                                                                <div class="product-info mb-10">
                                                                    <div class="product_category">
                                                                        <span>{{ $item->address }}</span>
                                                                    </div>
                                                                    <div class="product_rating">
                                                                        <a href="#"><i
                                                                                class="fal fa-star start-color"></i></a>
                                                                        <a href="#"><i
                                                                                class="fal fa-star start-color"></i></a>
                                                                        <a href="#"><i
                                                                                class="fal fa-star start-color"></i></a>
                                                                        <a href="#"><i
                                                                                class="fal fa-star"></i></a>
                                                                        <a href="#"><i
                                                                                class="fal fa-star"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="product__name">
                                                                    <h4><a href="shop.html">{{ $item->title }}</a></h4>
                                                                    <div class="pro-price">
                                                                        <p class="p-absoulute pr-1"><span>JOD
                                                                                {{ $item->price }}</span>
                                                                            <span>/</span> Hour
                                                                        </p>
                                                                        <a class="p-absoulute pr-2" href="#">Book
                                                                            now</a>
                                                                    </div>
                                                                </div>
                                                                <div class="product__action">
                                                                    <div class="inner__action">
                                                                        <div class="wishlist">
                                                                            <a href="#"><i
                                                                                    class="fal fa-heart"></i></a>
                                                                        </div>
                                                                        <div class="view">
                                                                            <a href="javascript:void(0)"><i
                                                                                    class="fal fa-eye"></i></a>
                                                                        </div>
                                                                        <div class="layer">
                                                                            <a href="#"><i
                                                                                    class="fal fa-layer-group"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
















                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- categories area end -->

    <!-- testimonial area start -->
    
    <!-- testimonial area end -->

    <!-- services area start -->
    <div class="service-area mb-80 pt-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service__wrapper">
                        <div class="service">
                            <div class="service__thumb">
                                <img src="img/service/iocnglobal.png" alt="">
                            </div>
                            <div class="service__content">
                                <h4 class="text-uppercase">we are evry where</h4>
                                <p>Duis autem vel eum iriure dolor in hendrerit<br> velit esse molestie consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service__wrapper">
                        <div class="service">
                            <div class="service__thumb">
                                <img src="img/service/24houricon.png" alt="">
                            </div>
                            <div class="service__content">
                                <h4>ONLINE SUPPORT 24/7</h4>
                                <p>Duis autem vel eum iriure dolor in hendrerit<br> velit esse molestie consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service__wrapper">
                        <div class="service">
                            <div class="service__thumb">
                                <img src="img/service/money.png" alt="">
                            </div>
                            <div class="service__content">
                                <h4>MONEY RETURN GUARANTEE</h4>
                                <p>Duis autem vel eum iriure dolor in hendrerit<br> velit esse molestie consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services area end -->

    <!-- categories area start -->
    <div class="categories_area categories_area_3 pt-90 mb-80 pb-150" data-background="img/service/categorybg.jpg">
        <div class="container-fluid">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="section-wrapper text-center mb-35 ">
                    <h2 class="section-title text-white">Explore Our New Stadiums</h2>
                    <p class="text-white">new stadium in jordan added to our services<br> 
                       book your stadium now  .</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="categories__tab">
                        <div class="tab-content" id="myTabContent6">
                            <div class="tab-pane fade show active" id="home7">
                                <div class="container">
                                    <div class="product-active swiper-container">
                                        <div class="swiper-wrapper">

                                            @foreach ($treelist as $item)
                                                <div class="product-item swiper-slide wow fadeInUp"
                                                    data-wow-duration="1s" data-wow-delay="0.2s">
                                                    <div class="product product_3">
                                                        <div class="product__thumb">
                                                            <a href="/single/{{ $item->title }}">
                                                                <img class="product-primary"
                                                                    src="imagesadd/{{ $item->picture }}"
                                                                    alt="product_image"   style="width: 100%">
                                                                <img class="product-secondary"
                                                                    src="imagesadd/{{ $item->picture }}"
                                                                    alt="product_image" style="width: 100%">
                                                            </a>
                                                            <div class="product__update">
                                                                <a class="#">new</a>
                                                            </div>
                                                            <div class="product-info mb-10">
                                                                <div class="product_category">
                                                                    <span>{{ $item->description }}</span>
                                                                </div>
                                                                <div class="product_rating">
                                                                    <a href="#"><i
                                                                            class="fal fa-star start-color"></i></a>
                                                                    <a href="#"><i
                                                                            class="fal fa-star start-color"></i></a>
                                                                    <a href="#"><i
                                                                            class="fal fa-star start-color"></i></a>
                                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                                    <a href="#"><i class="fal fa-star"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product__name">
                                                                <h4><a href="shop.html">Sports Vibox sandal</a></h4>
                                                                <div class="pro-price">
                                                                    <p class="p-absoulute pr-1"><span>JOD
                                                                        </span>{{ $item->price }} /Hour
                                                                    </p>
                                                                    <a class="p-absoulute pr-2" href="#">book
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                            <div class="product__action">
                                                                <div class="inner__action">
                                                                    <div class="wishlist">
                                                                        <a href="#"><i
                                                                                class="fal fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="view">
                                                                        <a href="javascript:void(0)avascript:void(0)"><i
                                                                                class="fal fa-eye"></i></a>
                                                                    </div>
                                                                    <div class="layer">
                                                                        <a href="#"><i
                                                                                class="fal fa-layer-group"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile10">
                                <div class="container">
                                    <div class="product-active swiper-container">
                                        <div class="swiper-wrapper">
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- categories area end -->

    <!-- blog area start -->
    <div class="blog-area mb-100">
        <div class="container">
            <div class="section-wrapper text-center mb-35">
                <h2 class="section-title"><a href="">from our blog</a></h2>
                <p>Commodo sociosqu venenatis cras dolor sagittis integer luctus sem primis<br> eget maecenas sed urna
                    malesuada.</p>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="blog" style="background-image: url('http://localhost:8000/images/1658514544-www.jpg');">
                        <div class="blog__content">
                            <span class="mb-15"></span>
                            <h3 class="blog-title "><a href="">Mauris rhoncus aliquet purus</a></h3>
                            <p>By Erentheme /<span>September 16, 2019</span></p>
                            <a href="">Continue reading</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="bpost">
                        <div class="bpost__thumb">
                            <img src="http://localhost:8000/images/pexels-nappy-936037.jpg" alt="blog_post" style="width: 200px">
                        </div>
                        <div class="bpost__content">
                            <span>Shoes, Clothing</span>
                            <h3 class="blog-title title-2"><a href="">Simple & Easy DIY Flower Deco</a></h3>
                            <p>By <span>Erentheme </span>/September 16, 2019</p>
                            <p>Sapien luctus id justo suscipit nonummy eget hymenaeos...</p>
                        </div>
                    </div>
                    <div class="bpost">
                        <div class="bpost__thumb">
                            <img src="http://localhost:8000/images/pexels-oliver-sj%C3%B6str%C3%B6m-1103829.jpg" alt="blog_post" style="width: 200px">
                        </div>
                        <div class="bpost__content">
                            <span>Shoes, Clothing</span>
                            <h3 class="blog-title title-2"><a href="">Take A Look At The Most Photo</a></h3>
                            <p>By <span>Erentheme </span>/September 16, 2019</p>
                            <p>Sapien luctus id justo suscipit nonummy eget hymenaeos...</p>
                        </div>
                    </div>
                    <div class="bpost m-0">
                        <div class="bpost__thumb">
                            <img src="http://localhost:8000/images/pexels-alexander-nadrilyanski-3651674.jpg" alt="blog_post" style="width: 200px">
                        </div>
                        <div class="bpost__content">
                            <span>Shoes, Clothing</span>
                            <h3 class="blog-title title-2"><a href="blog.html">Mauris rhoncus aliquet purus</a></h3>
                            <p>By <span>Erentheme </span>/September 16, 2019</p>
                            <p>Sapien luctus id justo suscipit nonummy eget hymenaeos...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->

    <!-- subscribe area start -->
    <div class="subscribe__area pb-100 pt-50" data-background="img/blog/flowershape.png">
        <div class="container">
            <div class="section-wrapper text-center mb-35">
                <h2 class="section-title">get in touch</h2>
                <p>Sign up for all the news about our latest arrivals and get an exclusive early access shopping. Join
                    60.000+ Subscribers<br>
                    and get a new discount coupon on every Saturday.
                </p>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="subscribe-form-3 text-center">
                        <form action="#" method="POST">
                            <input class="input_3" type="email" placeholder="Enter your email here..." />
                            <button type="submit"><i class="fal fa-paper-plane absoulute send"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe area end -->

    <!-- popup area start -->
    <div class="overlay"></div>
    <div class="product-popup">
        <div class="view-background">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5">
                    <div class="quickview">
                        <div class="quickview__thumb">
                            <img src="img/quick_view/25.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="viewcontent">
                        <div class="viewcontent__header">
                            <h2>Brown Leather Bags</h2>
                            <a class="view_close product-p-close" href="javascript:void(0)"><i
                                    class="fal fa-times-circle"></i></a>
                        </div>
                        <div class="viewcontent__rating">
                            <i class="fal fa-star ratingcolor"></i>
                            <i class="fal fa-star ratingcolor"></i>
                            <i class="fal fa-star ratingcolor"></i>
                            <i class="fal fa-star"></i>
                        </div>
                        <div class="viewcontent__price">
                            <h4><span>$</span>99.00</h4>
                        </div>
                        <div class="viewcontent__stock">
                            <h4>Available :<span> In stock</span></h4>
                        </div>
                        <div class="viewcontent__details">
                            <p>Anlor sit amet, consectetur adipiscing elit. Fusce condimentum est lacus, non pretium
                                risus lacinia vel. Fusce eget turpis orci.</p>
                        </div>
                        <div class="viewcontent__action">
                            <span>Qty</span>
                            <span><input type="number" placeholder="1"></span>
                            <span><a href="#">add to cart</a></span>
                            <span><i class="fal fa-heart"></i></span>
                            <span><i class="fal fa-info-circle"></i></span>
                        </div>
                        <div class="viewcontent__footer">
                            <ul>
                                <li>Category:</li>
                                <li>SKU:</li>
                                <li>Brand:</li>
                            </ul>
                            <ul>
                                <li>Watches</li>
                                <li>2584-MK63</li>
                                <li>Brenda</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popup area end -->
@endsection
