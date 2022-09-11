@extends('layout.main')

@section('content')
    <!-- breadcrumb area start -->


    <!-- breadcrumb area end -->

    <div class="f_cart_area pt-110 mb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="cart_table">
                        <form action="addbook" method="post">
                            @csrf
                            <input type="hidden" value="{{ $info->id }}" name="product_id">
                            <input type="hidden" value="{{ $req->date }}" name="date">
                            <input type="hidden" value="{{ $req->time }}" name="time">
                            <input type="hidden" value="{{ Session::get('userid') }}" name="costumer_id">


                            <table>
                                <tr>

                                    <td>Stadium</td>
                                    <td>Date</td>
                                    <td>Uniform wears</td>
                                    <td>Coach</td>
                                    <td>Total (JOD)</td>

                                </tr>
                                <tbody>
                                    <tr class="max-width-set">
                                        <td>
                                            {{ $info->title }}
                                            <img src="" alt="">
                                        </td>
                                        <td>
                                            {{ $req->date }} <br>
                                            {{ $req->time }}
                                        </td>
                                        <td>
                                            <input type="checkbox" value="1" id='wears' onchange="wearsf()"
                                                name="wears_A">
                                        </td>
                                        <td>
                                            <input type="checkbox" value="1" id="caoch" onchange="caochf()"
                                                name="trainer_A">

                                            {{-- <div class="viewcontent__action single_action pt-30">
                                            <span><input type="checkbox" placeholder="1"></span>
                                        </div> --}}
                                        </td>
                                        <td id="to">
                                            {{ $info->price }}
                                        </td>
                                        <td class="width-set">
                                            <form action=""><a href="javascript:void(0)"><i
                                                        class="fal fa-times-circle"></i></a></form>
                                            {{-- <a href="javascript:void(0)"><i class="fal fa-times-circle"></i></a> --}}
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="design-footer">
                                        <td>
                                            {{-- <input type="text" placeholder="Coupon Code"> --}}
                                            <input type="submit" onclick="wind()" value="procced to checkout">
                                        </td>
                                        {{-- <td><button type="submit">Apply Coupon</button></td>
                                    <td colspan="3"><a href="#">update cart</a></td> --}}
                                    </tr>
                                </tfoot>
                            </table>



                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="cart__acount">
                        <h5>Cart totals</h5>
                        <table>
                            <tr class="first-child">
                                <td>book</td>
                                <td>{{ $info->price }}</td>
                            </tr>
                            {{-- <tr class="first-child lastchild">
                                <td>Shipping</td>
                                <td>Enter your address to view shipping options <br>
                                    Calculate shipping</td>
                            </tr> --}}
                            <tr class="first-child" id="we" style="visibility: hidden">
                                <td>Uniform wears</td>
                                <td> +5.00</td>
                            </tr>
                            <tr class="first-child" id="cu" style="visibility: hidden">
                                <td>COACH</td>
                                <td> +20.00</td>
                            </tr>
                            <tr class="first-child">
                                <td>Total (JOD)</td>
                                <td id="tot">{{ $info->price }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" onclick="wind()" value="procced to checkout">
                                </td>
                            </tr>
                        </table>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        let x = {{ $info->price }}


        function caochf() {

            if (document.getElementById('caoch').checked) {





                x = x + 20
                document.getElementById('tot').innerHTML = x;
                document.getElementById('to').innerHTML = x;
                console.log((x));
                console.log(document.getElementById('caoch').checked)
                document.getElementById('cu').style.visibility = "visible";
            } else {
                x = x - 20
                document.getElementById('tot').innerHTML = x;
                document.getElementById('to').innerHTML = x;
                document.getElementById('cu').style.visibility = "hidden";
                console.log((x));
            }
        }

        function wearsf() {
            if (document.getElementById('wears').checked) {
                x = x + 5
                document.getElementById('tot').innerHTML = x;
                document.getElementById('to').innerHTML = x;
                document.getElementById('we').style.visibility = "visible";
                console.log((x));
            } else {
                x = x - 5
                document.getElementById('tot').innerHTML = x;
                document.getElementById('to').innerHTML = x;
                document.getElementById('we').style.visibility = "hidden";
                console.log((x));
            }
            // document.getElementById('tot').innerHTML=x;


        }

        const wind = () => {

            Swal.fire(
                'Your Book is recive!',
                'Check it in your profile !',
                'success'
            )

        }
        console.log(x);
    </script>
@endsection
