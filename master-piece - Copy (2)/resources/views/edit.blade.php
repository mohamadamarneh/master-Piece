@extends('layout.main')


@section('content')
    <!-- breadcrumb area end -->
    
    <div class="login_register_area mt-0" style="padding: 10px 0;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 offset-xl-1">
                    <h3 class="title-7">profile</h3>
                    <div class="login_wrapper" style="padding: 40px 75px;">
                        <form action="editprofileres" method="POST">
                            @csrf
                            <input type="hidden" value="{{$info->id}}" name="cid">
                            <div class="input_wrap">
                                <label>User name <span>*</span></label>
                                <input type="text" value="{{$info->name}}" name="name">
                                @error('name')
                                <div class="text-danger">
                                    <p>* {{ $message }}</p>
                                </div>
                            @enderror
                            </div>
                            <div class="input_wrap">
                                <label>email address <span>*</span></label>
                                <input type="email" value="{{$info->email}}" name="email">
                                @error('name')
                                <div class="text-danger">
                                    <p>* {{ $message }}</p>
                                </div>
                            @enderror
                            </div>
                            <div class="input_wrap">
                                <label>Password<span>*</span></label>
                                <input type="password" value="{{$info->password}}" name="password" >
                                @error('name')
                                <div class="text-danger">
                                    <p>* {{ $message }}</p>
                                </div>
                            @enderror
                            </div>
                            <div class="input_wrap">
                                <label>Phone<span></span></label>
                                <p>*you can also add your phone number</p>
                                <input type="text" value="{{$info->phone}}" name="phone">
                                
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
