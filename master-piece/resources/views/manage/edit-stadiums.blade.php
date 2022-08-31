@extends('manage.layout.mastr')


@section('name')
    <div class="container mt-5">
        <h2 class="mt-5">edit <b>{{ $info->title }}</b> Stadium</h2>
        <hr>
        @if (Session::get('succ'))
        <div class="alert alert-success p-2" role="alert">
            {{ Session::get('succ') }}
        </div>
    @endif
    @if (Session::get('fail'))
        <div class="alert alert-danger p-2" role="alert">
            {{ Session::get('fail') }}
        </div>
    @endif

        <form action="{{ route('update-stad') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type='hidden' name="cid" value="{{ $info->id }}">
            <div class="form-group">
                <label for="">title</label>
                <input type="text" value="{{ $info->title }}" class="form-control" name="title" id=""
                    aria-describedby="emailHelpId" placeholder="title">

                @error('title')
                    <div style="color: red">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror

            </div>

            <div class="form-group">
                <label for="">Price</label>
                <input type="text" value="{{ $info->price }}" class="form-control" name="price" id=""
                    aria-describedby="emailHelpId" placeholder="name">

                @error('price')
                    <div style="color: red">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror

            </div>


            <div class="form-group">
                <label for="">categury</label>
                <input type="text" value="{{ $info->categorises_id }}" class="form-control" name="categorises_id" id=""
                    aria-describedby="emailHelpId" placeholder="name">

                @error('categorises_id')
                    <div style="color: red">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror

            </div>


            <div class="form-group">
                <label for="">description</label>
                <input type="text" value="{{ $info->description }}" class="form-control" name="description" id=""
                    aria-describedby="emailHelpId" placeholder="name">

                @error('categorises_id')
                    <div style="color: red">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror

            </div>


            <div class="form-group">
                <label for="">address</label>
                <input type="text" value="{{ $info->address }}" class="form-control" name="address" id=""
                    aria-describedby="emailHelpId" placeholder="name">

                @error('address')
                    <div style="color: red">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror

            </div>

            <div class="form-group">
                <label for="">photo 1</label>

                <input type="file" class="form-control" name="picture" id="" aria-describedby="emailHelpId"
                    placeholder="photo">
                {{-- {{$info->picture && <img src="{{asset($info->picture)}}" alt="">}} --}}
                @if ($info->picture)
                    <img src="{{ asset("imagesadd/$info->picture") }}" alt="" width='100px'>
                @endif
                @error('picture')
                    <div style="color: red">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">photo 2</label>
                <input type="file" class="form-control" name="picture_two" id="" aria-describedby="emailHelpId"
                    placeholder="photo">
                @if ($info->picture)
                    <div class='mt-4'>
                        <img src="{{ asset("imagesadd/$info->picture_two") }}" alt="" width='100px'> 
                        </div>
                @endif
                @error('picture_two')
                    <div style="color: red">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">photo 3</label>
                <input type="file" class="form-control" name="picture_three" id=""
                    aria-describedby="emailHelpId" placeholder="photo">
                @if ($info->picture)
                    <img src="{{ asset("imagesadd/$info->picture_three") }}" alt="" width='100px'>
                @endif
                @error('picture_three')
                    <div style="color: red">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror
            </div class="form-group">

            <div class="form-group">
                <label for="">photo 4</label>
                <input type="file" class="form-control" name="picture_four" id="" aria-describedby="emailHelpId"
                    placeholder="photo">
                @if ($info->picture)
                    <img src="{{ asset("imagesadd/$info->picture_four") }}" alt="" width='100px'>
                @endif
                @error('picture_four')
                    <div style="color: red">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="">photo 5</label>
                <input type="file" class="form-control" name="picture_five" id=""
                    aria-describedby="emailHelpId" placeholder="photo">
                @if ($info->picture)
                    <img src="{{ asset("imagesadd/$info->picture_five") }}" alt="" width='100px'>
                @endif

                @error('picture_five')
                    <div style="color: red">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror

            </div>




            <button class="btn btn-primary" type="submit">Update</button>

        </form>
    </div>
@endsection
