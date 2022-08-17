@extends('manage.layout.mastr')


@section('name')
    <div class="container mt-5">
        <h2 class="mt-5">edit <b>{{ $info->name }}</b> Owner </h2>
        <hr>
        <form action="{{ route('update-owners') }}" method="POST">
            @csrf
            <input type='hidden' name="cid" value="{{ $info->id }}">
            <div class="form-group">
                <label for="">name</label>
                <input type="text" value="{{ $info->name }}" class="form-control" name="name" id=""
                    aria-describedby="emailHelpId" placeholder="name">

                @error('name')
                    <div class="text-danger">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror

            </div>
   
            <div class="form-group">
                <label for="">email</label>
                <input type="text" value="{{ $info->email }}" class="form-control" name="email" id=""
                    aria-describedby="emailHelpId" placeholder="email">

                @error('email')
                    <div class="text-danger">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror

            </div>

            <div class="form-group">
                <label for="">password</label>
                <input type="password" value="{{ $info->password }}" class="form-control" name="password" id=""
                    aria-describedby="emailHelpId" placeholder="password">

                @error('password')
                    <div class="text-danger">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror

            </div>

            <button class="btn btn-primary" type="submit">update</button>

        </form>
    </div>
@endsection