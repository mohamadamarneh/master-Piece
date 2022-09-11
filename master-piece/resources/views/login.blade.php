@extends('layout.main')

@section('content')
    <!-- breadcrumb area end -->

    <div class="login_register_area mt-0" style="padding: 10px 0;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 offset-xl-1">
                    <h3 class="title-7">Login</h3>
                    <div class="login_wrapper" style="padding: 40px 75px;">
                        
                        @if (Session::get('fail'))
                            <div class=" p-2 text-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif

                        <form action="logincheckuser" method="POST">
                            @csrf

                            <div class="input_wrap">
                                <label>Email address <span>*</span></label>
                                <input type="text" name="email" value="{{ old('email') }}">
                            </div>
                            @error('email')
                                <div>
                                    <p class="text-danger">* {{ $message }}</p>
                                </div>
                            @enderror
                            <div class="input_wrap">
                                <label>Password<span>*</span></label>
                                <input type="password" name="password">
                                <span class="show-pass"><i class="far fa-eye-slash"></i></span>
                            </div>
                            @error('password')
                                <div>
                                    <p class="text-danger">* {{ $message }}</p>
                                </div>
                            @enderror
                            {{-- <div class="input_wrapp-2">
                                <input type="checkbox" name="check">
                                <span>Remember me </span>
                            </div> --}}
                            <div class="input_wrap">
                                <button type="submit">log in</button>
                            </div>
                            <div class="input_wrap">
                                <p>have no accoun</p> <a href="/register">register </a>
                            </div>
                            <div class="input_wrap">
                                <a href="#">Lost your password?</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
