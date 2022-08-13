@extends('layout.main')


@section('content')
    <!-- breadcrumb area end -->
    
    <div class="login_register_area mt-0" style="padding: 10px 0;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 offset-xl-1">
                    <h3 class="title-7">profile</h3>
                    <div class="login_wrapper" style="padding: 40px 75px;">
                        <form action="#">
                            <div class="input_wrap">
                                <label>User name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="input_wrap">
                                <label>email address <span>*</span></label>
                                <input type="email">
                            </div>
                            <div class="input_wrap">
                                <label>Re write Password<span>*</span></label>
                                <input type="password">
                                <span class="show-pass"><i class="far fa-eye-slash"></i></span>
                            </div>

                            <div class="input_wrap">
                                <button type="submit">Submit</button>
                            </div>


                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
