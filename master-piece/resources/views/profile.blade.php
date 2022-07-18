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
                    <div class="checkout_form mb-100">

                        <div class="row mb-30">
                            <div class="checkout__wrap">
                                <img src="img\team\user.png" alt="" style="width: 100px">

                            </div>
                            <div class="col">
                                <div class="checkout__wrap " style="padding: 13px">
                                    <h4><b>user name</b> </h4>

                                </div>
                            </div>

                        </div>
                        <div class="checkout__wrap">
                            <h6>User Email </h6>
                            <h5><b>mail@gmail.com</b> </h5>
                        </div>


                        <div class="checkout__wrap">
                            <h6>Phone Number </h6>
                            <h5><b>+962 7780 90543</b> </h5>
                        </div>

                        <div class="checkout__wrap">
                            <button class="btn">edit</button>
                        </div>



                    </div>
                </div>
                <div class="col-10 mb-2">
                    <div class="cart__acount ">
                        <h5>Active Books</h5>
                        <table>
                            <tr class="first-child-2">
                                <td>product</td>
                                <td>NikeCourts Air Zoom <span>× 1</span></td>
                            </tr>
                            <tr class="first-child-2">
                                <td>Subtotal</td>
                                <td class="lightbluee">$18.00</td>
                            </tr>
                            <tr class="first-child lastchild">
                                <td>Shipping</td>
                                <td>Enter your address to view shipping options. </td>
                            </tr>
                            <tr class="first-child-2">
                                <td>Total</td>
                                <td class="lightbluee">$47.00</td>
                            </tr>
                        </table>
                        <div class="checkout__accordion mt-30">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Check payments
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Please send a check to Store Name, Store Street, Store Town, Store State /
                                            County, Store Postcode.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Cash on delivery
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Pay with cash upon delivery.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            PayPal
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Cash on delivery
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex-row-reverse " >
                    <div class="cart__acount ">
                        <h5>Books History</h5>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>staduim</th>
                                    <th>time</th>
                                    <th>product</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
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
