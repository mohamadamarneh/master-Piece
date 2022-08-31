@extends('layout.main')
@section('content')
    <div class="search_area mt-5">
        <div class="search_close">
            <span><i class="fal fa-times"></i></span>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="search-wrapper text-center">
                        <h2>search</h2>
                        <div class="search-filtering pt-30">
                            <div class="search_tab">
                                <ul class="nav nav-tabs justify-content-center mb-55" id="ffff" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab2ggg" data-bs-toggle="tab"
                                            data-bs-target="#home2d" type="button" role="tab" aria-selected="true">All
                                            categories</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab2ee" data-bs-toggle="tab"
                                            data-bs-target="#profile2d" type="button" role="tab"
                                            aria-selected="false">Basketball</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contact2d"
                                            type="button" role="tab" aria-selected="false">Handbag</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="sportswear-tabff" data-bs-toggle="tab"
                                            data-bs-target="#sportsweard" type="button" role="tab"
                                            aria-selected="false">Sportswear</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabCffontent2">
                                    <div class="tab-pane fade show active" id="home2d" role="tabpanel">

                                    </div>
                                    <div class="tab-pane fade" id="profile2d" role="tabpanel">

                                    </div>
                                    <div class="tab-pane fade" id="contact2d" role="tabpanel">

                                    </div>
                                    <div class="tab-pane fade" id="sportsweard" role="tabpanel">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main_search">
                            <form action="#">
                                <input type="text" name="search" placeholder="search products">
                                <button class="m-search"><i class="fal fa-search d-sm-none d-md-block"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                data-cfemail="ff96919990bf9a879e928f939ad19c9092">[email&#160;protected]</a></p>
                        <p><a href="https://themepure.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="4f2a372e223f232a61222e26230f273a22612c2022">[email&#160;protected]</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>



    <!-- breadcrumb area start -->

    <!-- breadcrumb area end -->

    <!-- shop page start -->
    <div class="shop-page pt-85">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <div class="sidebar">
                        <div class="product-widget">
                            <h3 class="widget-title mb-30">Stadiums categories</h3>
                            <ul class="product-categories">
                                <li><a href="/categury/1">Football <span> +5</span></a></li>
                                <li><a href="/categury/2">Basketball <span> +3</span></a></li>
                                <li><a href="/categury/3">Tennis <span> +2</span></a></li>
                            </ul>
                        </div>
                        <div class="product-widget pt-50">
                            <h3 class="widget-title mb-30">Filter By Price</h3>
                            <form action="#">
                                <div class="price-filter">
                                    <div id="slider-range"
                                        class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                        <div class="ui-slider-range ui-corner-all ui-widget-header"
                                            style="left: 15%; width: 46.4%;"></div><span tabindex="0"
                                            class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 7.2%;"></span><span tabindex="0"
                                            class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 48.8%;"></span>
                                        <div class="ui-slider-range ui-corner-all ui-widget-header"
                                            style="left: 15%; width: 45%;"></div>
                                        <div class="ui-slider-range ui-corner-all ui-widget-header"
                                            style="left: 7.2%; width: 41.6%;"></div>
                                    </div>
                                    <div class="filter-form-submit mt-35">
                                        <button type="submit">Filter</button>
                                        <div class="filter-price d-inline-block pl-20">Price: <input type="button"
                                                id="amount" value="$36 - $244"></div>
                                    </div>
                                </div>
                            </form>

                        </div>


                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-9 col-sm-12">
                    <div class="shop-top-bar position-relative">
                        <div class="showing-result">
                            <p> Showing all @php
                             echo   count($list);
                            @endphp results</p>
                        </div>
                        <div class="shop-tab">
                        </div>
                        <div class="shop-filtaring">

                        </div>
                    </div>
                    <div class="shop-page-product pt-50 pb-100">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="row">


                                            @foreach ($list as $item)
                                                <div class="col-xl-6">
                                                    <div class="product product-4">
                                                        <div class="product__thumb">
                                                            <a href="/single/{{ $item->title }}">
                                                                <img class="product-primary" style="width: 100%"


                                                                
                                                                    src='http://127.0.0.1:8000/imagesadd/{{ $item->picture }}'
                                                                    alt="product_image">
                                                                <img class="product-secondary" style="width: 100%"
                                                                    src="http://127.0.0.1:8000/imagesadd/{{ $item->picture_two }}"
                                                                    alt="product_image">
                                                            </a>
                                                            <!-- <div class="product__update">
                                                                    <a class="#">new</a>
                                                                </div> -->
                                                            <div class="product-info mb-10">
                                                                <div class="product_category">
                                                                    <span>{{ $item->address }}</span>
                                                                </div>
                                                                <div class="product_rating">
                             
                                                                </div>
                                                            </div>
                                                            <div class="product__name">
                                                                <h4><a href="single.html">{{ $item->title }}</a></h4>
                                                                <div class="pro-price">
                                                                    <p class="p-absoulute pr-1">
                                                                        <span>JOD </span>{{ $item->price }} /Hour
                                                                    </p>
                                                                    <a class="p-absoulute pr-2" href="#">book
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="product__action">
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
                                                            </div> --}}

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="row">



                                            @foreach ($list as $item)
                                                <div class="col-xl-4">
                                                    <div class="product product-4">
                                                        <div class="product__thumb">
                                                            <a href="/single/{{ $item->title }}">
                                                                <img class="product-primary" style="width: 100%"
                                                                    src="http://127.0.0.1:8000/imagesadd/{{ $item->picture }}"
                                                                    alt="product_image">
                                                                <img class="product-secondary" style="width: 100%"
                                                                    src="http://127.0.0.1:8000/imagesadd/{{ $item->picture_two }}"
                                                                    alt="product_image">
                                                            </a>
                                                            <!-- <div class="product__update">
                                                                    <a class="#">new</a>
                                                                </div> -->
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
                                                                <h4><a href="single.html">{{ $item->title }}</a></h4>
                                                                <div class="pro-price">
                                                                    <p class="p-absoulute pr-1">
                                                                        <span>JOD </span>{{ $item->price }} /Hour
                                                                    </p>
                                                                    <a class="p-absoulute pr-2" href="#">book
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="product__action">
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
                                                            </div> --}}

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach





                                            
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <div class="row">

                                            @foreach ($list as $item)
                                                <div class="col-xl-3">
                                                    <div class="product product-3">
                                                        <div class="product__thumb">
                                                            <a href="/single/{{ $item->title }}">
                                                                <img class="product-primary" style="width: 100%"
                                                                    src="http://127.0.0.1:8000/imagesadd/{{ $item->picture }}"
                                                                    alt="product_image">
                                                                <img class="product-secondary" style="width: 100%"
                                                                    src="http://127.0.0.1:8000/imagesadd/{{ $item->picture_two }}"
                                                                    alt="product_image">
                                                            </a>
                                                            <!-- <div class="product__update">
                                                                    <a class="#">new</a>
                                                                </div> -->
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
                                                                <h4><a href="single.html">{{ $item->title }}</a></h4>
                                                                <div class="pro-price">
                                                                    <p class="p-absoulute pr-1"><span>JOD
                                                                        </span>{{ $item->price }} /Hour
                                                                    </p>
                                                                    <a class="p-absoulute pr-2" href="#">book
                                                                        now</a>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="product__action">
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
                                                            </div> --}}

                                                        </div>
                                                    </div>
                                                </div>


                                            @endforeach






                                            
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-list" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">


                                        @foreach ($list as $item)
                                            





                                        <div class="border-top">
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4">
                                                    <div class="list-product">
                                                        <div class="list__thumb">
                                                            <a href="/single/{{ $item->title }}"><img src="http://127.0.0.1:8000/imagesadd/{{ $item->picture }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8">
                                                    <div class="list__content">
                                                        <div class="viewcontent">
                                                            <div class="viewcontent__header">
                                                                <a href="single.html">
                                                                    <h2 class="mb-10">{{ $item->title }}</h2>
                                                                </a>
                                                            </div>
                                                            <div class="viewcontent__rating">
                                                                <i class="fal fa-star ratingcolor"></i>
                                                                <i class="fal fa-star ratingcolor"></i>
                                                                <i class="fal fa-star ratingcolor"></i>
                                                                <i class="fal fa-star"></i>
                                                            </div>
                                                            <div class="viewcontent__price">
                                                                <h4><span>JOD </span>{{ $item->price }} /Hour</h4>
                                                            </div>
                                                            <div class="view__para">
                                                                <p>    {{ $item->description }}</p>
                                                            </div>
                                                            <div class="list-actions pt-20">
                                                                {{-- <div class="viewcontent__action">
                                                                    <span><a href="#">book now</a></span>
                                                                    <a href="#"><i class="fal fa-heart"></i></a>
                                                                    <a class="ml-5" href="#"><i
                                                                            class="fal fa-layer-group"></i></a>
                                                                </div> --}}
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop page end -->

    <!-- search area  -->
    <div class="search_area">
        <div class="search_close">
            <span><i class="fal fa-times"></i></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="search-wrapper text-center">
                        <h2>search</h2>
                        <div class="search-filtering pt-30">
                            <div class="search_tab">
                                <ul class="nav nav-tabs justify-content-center mb-55" id="fff" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab2" data-bs-toggle="tab"
                                            data-bs-target="#home2" type="button" role="tab"
                                            aria-controls="home" aria-selected="true">All categories</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab2" data-bs-toggle="tab"
                                            data-bs-target="#profile2" type="button" role="tab"
                                            aria-controls="profile" aria-selected="false">Basketball</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contact2"
                                            type="button" role="tab" aria-controls="contact"
                                            aria-selected="false">Handbag</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="sportswear-tab" data-bs-toggle="tab"
                                            data-bs-target="#sportswear" type="button" role="tab"
                                            aria-controls="sportswear" aria-selected="false">Sportswear</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact3-tab" data-bs-toggle="tab"
                                            data-bs-target="#contact3" type="button" role="tab"
                                            aria-controls="contact2" aria-selected="false">Youth</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade show active" id="home2" role="tabpanel">

                                    </div>
                                    <div class="tab-pane fade" id="profile2" role="tabpanel">

                                    </div>
                                    <div class="tab-pane fade" id="contact2" role="tabpanel">

                                    </div>
                                    <div class="tab-pane fade" id="sportswear" role="tabpanel">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main_search">
                            <form action="#">
                                <input type="text" name="search" placeholder="search products">
                                <button class="m-search"><i class="fal fa-search d-sm-none d-md-block"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <a href="single.html">
                                <h2>Brown Leather Bags</h2>
                            </a> <a class="view_close product-p-close" href="javascript:void(0)"><i
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
                            <p>Anlor sit amet, consectetur adipiscing elit. Fusce condimentum est lacus, non pretium risus
                                lacinia vel. Fusce eget turpis orci.</p>
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
    <!-- product popup -->
    <!-- popup area end -->
@endsection
