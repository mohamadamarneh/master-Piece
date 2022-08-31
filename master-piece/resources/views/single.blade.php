@extends('layout.main')

@section('content')
    @php

    $date = date('Y-m-d');

    @endphp

    <!-- single_breadcrumb_area start -->
    <div class="single_breadcrumb pt-25">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="single_product_tab">
                                <div class="single_prodct">
                                    <ul class="nav nav-tabs justify-content-center mb-55" id="dfde" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#homde" type="button" role="tab"
                                                aria-selected="true"><img src={{ asset("imagesadd/$info->picture") }}
                                                    alt=""></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profidfdle" type="button" role="tab"
                                                aria-selected="false"><img src={{ asset("imagesadd/$info->picture_two") }}
                                                    alt=""></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contadfdct"
                                                type="button" role="tab" aria-selected="false"><img src=''
                                                    alt=""></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="kids-tab" data-bs-toggle="tab"
                                                data-bs-target="#kidsdfd" type="button" role="tab"
                                                aria-selected="false"><img src='' alt=""></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="single_preview_product">
                                <div class="single-popup-view">
                                    <a class="popup-image" href='imagesadd/{{ $info->picture_two }}'><i
                                            class="fal fa-search"></i></a>
                                </div>
                                <div class="tab-content" id="myTabefContent">
                                    <div class="tab-pane fade show active" id="homde" role="tabpanel">
                                        <div class="full-view">
                                            <img src={{ asset("imagesadd/$info->picture") }} alt=""
                                                style='width : 100%;'>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profidfdle" role="tabpanel">
                                        <div class="full-view">
                                            <img src={{ asset("imagesadd/$info->picture_two") }} alt=""
                                                style='width : 100%;'>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contadfdct" role="tabpanel">
                                        <div class="full-view">
                                            <img src='' alt="" style='width : 100%;'>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kidsdfd" role="tabpanel">
                                        <div class="full-view">
                                            <img src=''} alt="" style='width : 100%;'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="single_preview_content pl-30">
                        <h2 class="title-5 edit-title border-bottom-0">{{ $info->title }} Stadiom </h2>

                        <div class="s-price pt-30 mb-30">
                            <span>JOD {{ $info->price }} /Hour</span>
                        </div>
                        <div class="s-des">
                            <p>Location: {{ $info->address }}</p>
                        </div>
                        <div class="s-des">
                            <p><b>Phone:</b> 0778090543</p>
                        </div>
                        <div class="s-des">
                            <p>{{ $info->description }}</p>
                        </div>

                        <form action="/book" method="get">



                            <div class="viewcontent__action single_action pt-30">
                                <span>

                                    <input type="date" min="@php echo  date("Y-m-d") @endphp"
                                        value="@php echo  date("Y-m-d") @endphp" max="@php echo  date("Y-m-d"
                                        ,strtotime($date .'+7 days')) @endphp" id="date" name="date"
                                        style="width: 150px"   onchange="handleDate()">
                                    </i>
                                </span>
                                <span>
                                    <select id="birthdaytime" class="form-control" style="height: 50px" name="time">

                                        @php
                                            
                                            $start = '07:00';
                                            $end = '22:00';
                                            
                                            $tStart = strtotime($start);
                                            $tEnd = strtotime($end);
                                            $tNow = $tStart;
                                            while ($tNow <= $tEnd) {
                                                $anyend=strtotime('+120 minutes', $tNow);
                                                echo ' <option class="times" id="times" value='.date('H:i', $tNow).'>'.date('H:i', $tNow) .'-'.date('H:i', $anyend).'</option>'   ;
                                                $tNow = strtotime('+120 minutes', $tNow);
                                            }
                                            
                                        @endphp
                                    </select>
                                </span>
                                <input type="hidden" name="id" value="{{ $info->id }}">

                                <span><input type="submit" value="Book Now"></span>
                                <span><i class="fal fa-heart"></i></span>

                            </div>
                        </form>




                        <div class="viewcontent__action single_action pt-30">

                            {{-- <span><input type="date" min="@php echo  date("Y-m-d")  @endphp" value="@php echo  date("Y-m-d")  @endphp"  max="@php echo  date("Y-m-d" ,strtotime($date .'+3 days'))  @endphp" id="birthdaytime" name="birthdaytime"></i></span> --}}
                            {{-- <input type="date" min="@php echo  date("Y-m-d")  @endphp" value="@php echo  date("Y-m-d")  @endphp"  max="@php echo  date("Y-m-d" ,strtotime($date .'+3 days'))  @endphp" id="birthdaytime" name="birthdaytime"> --}}
                        </div>

                        <div class="viewcontent__footer border-top-0 border-bottom pb-30">
                            <ul>
                                <li>Category:{{ $info->categorises_id }}</li>

                            </ul>
                            <ul>

                                <li>irbid, descount</li>

                            </ul>
                        </div>
                    </div>
                
                </div>
                       





    <div class="row container">
        <div class="col-xl-8 col-lg-8 col-md-8 offset-xl-2">
            <h4 class="pt-60 mb-25 add_review">Add a review </h4>
            <h4 class="mb-25 rating-title">Your Rating</h4>
            <span>
                <a href="#"><i class="fal fa-star start-color"></i></a>
                <a href="#"><i class="fal fa-star start-color"></i></a>
                <a href="#"><i class="fal fa-star start-color"></i></a>
                <a href="#"><i class="fal fa-star start-color"></i></a>
                <a href="#"><i class="fal fa-star start-color"></i></a>
            </span>
            <div class="review_form">
                <form action="/addcomment" method="get">
                    <input type="hidden" value="{{ Session::get('username') }}" name="username">
                    <input type="hidden" value="{{ $info->id }}" name="product_id">
                    <div class="review__wrap_1">
                        <label>Your Review *</label>
                        <textarea name="comment"></textarea>
                    </div>

                    <div class="review__wrap pt-15">
                        <button type="submit" {{ !Session::get('usermail') ? 'disabled' : '' }}>submit</button>
                        {{ !Session::get('usermail') ? '     *  you most be login to comment' : '' }}
                    </div>
                </form>
            </div>
            <div class="product__reviews_comment pt-50">
                <p>1 review for Detail V-Neck Sweater</p>


                @foreach ($singlecomments as $single)
                    <div class="user_design mt-3">
                        <div class="user__thumb">
                            <img src="img/desc/team2-60x60.png" alt="">
                        </div>
                        <div class="user__content">
                            <h4> {{ $single->username }} <span> {{ $single->created_at }} </span></h4>
                            <span>
                                <a href="#"><i class="fal fa-star start-color"></i></a>
                                <a href="#"><i class="fal fa-star start-color"></i></a>
                                <a href="#"><i class="fal fa-star start-color"></i></a>
                                <a href="#"><i class="fal fa-star start-color"></i></a>
                                <a href="#"><i class="fal fa-star start-color"></i></a>
                            </span>
                            <p>{{ $single->comment }}
                            </p>
                        </div>
                    </div>
                @endforeach






            </div>
            

        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 offset-xl-2">

        </div>
    </div>

    <!-- categories area start -->
    <div class="categories_area pt-85 mb-150">
        <div class="container-fluid">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="section-wrapper text-center mb-35">
                    <h2 class="section-title">Related products </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="categories__tab">
                        <div class="tab-content" id="myTabContent21">
                            <div class="tab-pane fade show active" id="home20" role="tabpanel">
                                <div class="container">
                                    <div class="product-active swiper-container">
                                        <div class="swiper-wrapper">


                                            @foreach ($rel as $item)
                                            <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="0.2s">
                                            <div class="product">
                                                <div class="product__thumb">
                                                    <a href="/single/{{ $item->title }}">
                                                        <img class="product-primary" src={{ asset("imagesadd/$item->picture") }}
                                                            alt="product_image">
                                                        <img class="product-secondary" src={{ asset("imagesadd/$item->picture_two") }}
                                                            alt="product_image">
                                                    </a>
                                                    <div class="product-info mb-10">
                                                        <div class="product_category">
                                                            <span>Shoes, Clothing</span>
                                                        </div>
                                                        <div class="product_rating text-end">
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
                                                        <h4><a href="#"></a>{{$item->title}}</h4>
                                                        <div class="pro-price">
                                                            <p class="p-absoulute pr-1"><span>JOD</span>{{$item->price}}
                                                            </p>
                                                            <a class="p-absoulute pr-2" href="#">Book now</a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div></div>
    <script>

        let x=@json($books);
        
        // console.log(x)
     const handleDate=()=>{
        for (let i = 0; i < x.length; i++) {
            console.log(x[i].date ,document.getElementById('date').value)
            if(x[i].date == document.getElementById('date').value){
        console.log('amo')
        for (let j = 0; j < times.length; j++) {
            console.log(document.getElementsByClassName('times'))
            if (x[i].time == document.getElementsByClassName('times')[j].value) {
                document.getElementsByClassName('times')[j].disabled=true

            }
            
            
        }
    }
    
}
     }

       
    </script>
@endsection
