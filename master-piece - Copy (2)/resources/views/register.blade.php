@extends('layout.main')

@section('content')
    <div class="login_register_area" style="padding: 10px 0;">
        <div class="container justify-content-center">

            <div class="w-50 offset-xl-1 justify-content-center">
                <h3 class="title-7">Register</h3>
                <div class="login_wrapper" style="padding: 40px 75px; ">
                @if (Session::get('fail'))
                <div class="alert
                    alert-success p-2" role="alert">
                    {{ Session::get('fail') }}
                </div>
                @endif


                <form action="add-costumer" method="POST">

                    @csrf
                    <div class="input_wrap">
                        <label>User Name <span>*</span></label>
                        <input type="name" name="name" value="{{ old('name') }}">
                    </div>

                    @error('email')
                        <div >
                            <p class="text-danger">* {{ $message }}</p>
                        </div>
                    @enderror


                    <div class="input_wrap">
                        <label> email address <span>*</span></label>
                        <input type="email" value="{{ old('price') }}" name="email">

                    </div>

                    @error('email')
                        <div >
                            <p class="text-danger">* {{ $message }}</p>
                        </div>
                    @enderror

                    <div class="input_wrap">
                        <label>Password<span>*</span></label>
                        <input type="password" name="password">
                        <span class="show-pass"><i class="far fa-eye-slash"></i></span>
                    </div>

                    @error('password')
                        <div >
                            <p class="text-danger">* {{ $message }}</p>
                        </div>
                    @enderror

                    <div class="input_wrap">
                        <label>Confirm Password<span>*</span></label>
                        <input type="password" name="confermpass">
                        <span class="show-pass"><i class="far fa-eye-slash"></i></span>
                    </div>
                    {{-- <div class="input_wrapp-2">
                        <input type="checkbox" name="check">
                        <span>Remember me </span>
                    </div> --}}
                    <div class="input_wrap">
                        <button type="submit">Register</button>

                    </div>
                    <div class="input_wrap">
                        <span>have an account ? </span><a href="/login"> login </a>
                        
                    </div>
                </form>
            </div>
            {{-- <form action="login">
                <button type="submit">click</button>
            </form> --}}
        </div>
    </div>
    </div>
    </div>
@endsection
