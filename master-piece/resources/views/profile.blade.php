@extends('layout.main')

@section('content')
    <div class="checkout_area pt-80">
        <div class="container">
            {{-- <div class="notification__message">
            <p><i class="fal fa-window-maximize"></i>Returning customer? Click here to <a href="login.html">login</a></p>
            <p><i class="fal fa-window-maximize"></i>Have a coupon? Click here to enter your code</p>
        </div> --}}
            <div class="row">
                <div class="col ml-5">
                    @if (Session::get('succ'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('succ') }}
                        </div>
                    @endif
                    <div class="checkout_form mb-100">
                        {{-- {{dd($join)}} --}}
                        <div class="row mb-30">
                            <div class="checkout__wrap">
                                <img src="img\team\user.png" alt="" style="width: 100px">

                            </div>
                            <div class="col">
                                <div class="checkout__wrap " style="padding: 13px">
                                    <h4><b>{{ $info->name }}</b> </h4>

                                </div>
                            </div>

                        </div>
                        <div class="checkout__wrap">
                            <h6>Email </h6>
                            <h5><b>{{ $info->email }}</b></h5>
                        </div>

                        <div class="checkout__wrap">
                            <form action="editprofile" method="post">
                                @csrf

                                <input type="submit" value="Edit" class="btn">
                            </form>

                        </div>

                    </div>


                </div>
                <div class="col-10 mb-2">
                    <h4 class="font-weight-bold">Active Books</h4>
                    <div class="cart__acount d-flex p-2 ml-2">
                        
                        @foreach ($join as $item)
                            @if ($item->date >= date('Y-m-d'))
                                <table class="m-4">
                                    <tr class="first-child-2">
                                        <td>Stadium </td>
                                        <td>{{ $item->title }}<span></span></td>
                                    </tr>
                                    <tr class="first-child-2">
                                        <td>Trainer</td>
                                        <td class="lightbluee">{{ $item->trainer_A ? 'yes' : 'no' }}</td>
                                    </tr>
                                    <tr class="first-child-2">
                                        <td>Wears</td>
                                        <td class="lightbluee">{{ $item->wears_A ? 'yes' : 'no' }}</td>
                                    </tr>
                                    {{-- <tr class="first-child-2">
                                <td>Subtotal</td>
                                @php
                                $a=$item->trainer_A ? 20 : 0 ;
                                $b= $item->wears_A ? 5 : 0 ;
                                $total= $item->price +$a +$b
                                @endphp
                                <td class="lightbluee">JOD 
                                    @php
                                    echo $total 
                                @endphp
                                </td>
                            </tr> --}}
                                    <tr class="first-child lastchild">
                                        <td>Date</td>
                                        <td>{{ $item->date }}
                                            <br>
                                            {{ $item->time }}
                                        </td>
                                    </tr>
                                    <tr class="first-child-2">
                                        <td>Total</td>
                                        @php
                                            $a = $item->trainer_A ? 20 : 0;
                                            $b = $item->wears_A ? 5 : 0;
                                            $total = $item->price + $a + $b;
                                        @endphp
                                        <td class="lightbluee">JOD
                                            @php
                                                echo $total;
                                            @endphp
                                        </td>
                                    </tr>
                                </table>
                            @endif
                        @endforeach

                    </div>
                </div>
                <div class="flex-row-reverse ">
                    <div class="cart__acount ">
                        <h5>Books History</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Staduim</th>
                                    <th>Date</th>
                                    <th>Totla </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($join as $item)
                                    @if ($item->date < date('Y-m-d'))
                                        <tr>
                                            <td scope="row">{{ $item->title }} </td>
                                            <td>
                                                {{ $item->date }} ' '
                                                {{ $item->time }}
                                            </td>
                                            @php
                                                $a = $item->trainer_A ? 20 : 0;
                                                $b = $item->wears_A ? 5 : 0;
                                                $total = $item->price + $a + $b;
                                            @endphp
                                            <td class="lightbluee">JOD
                                                @php
                                                    echo $total;
                                                @endphp
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>

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
                            <img src="assets/img/quick_view/25.jpg" alt="">
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
