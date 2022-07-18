@extends('layout.main')

@section('content')
    <div class="login_register_area" style="padding: 10px 0;"v>
        <div class="container justify-content-center">

            <div class="w-50 offset-xl-1 justify-content-center">
                <h3 class="title-7">Register</h3>
                <div class="login_wrapper" style="padding: 40px 75px;>
                    <form action="#">
                        <div class="input_wrap">
                            <label>Username or email address <span>*</span></label>
                            <input type="email">
                        </div>
                        <div class="input_wrap">
                            <label>Password<span>*</span></label>
                            <input type="password">
                            <span class="show-pass"><i class="far fa-eye-slash"></i></span>
                        </div>
                        <div class="input_wrap">
                            <label>Confirm Password<span>*</span></label>
                            <input type="password">
                            <span class="show-pass"><i class="far fa-eye-slash"></i></span>
                        </div>
                        <div class="input_wrapp-2">
                            <input type="checkbox" name="check">
                            <span>Remember me </span>
                        </div>
                        <div class="input_wrap">
                            <button type="submit">Register</button>
                        </div>
                        <div class="input_wrap">
                            <span>have an account ? </span><a href="/login"> login </a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
