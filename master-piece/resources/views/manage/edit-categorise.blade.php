@extends('manage.layout.mastr')


@section('name')
    <div class="container mt-5">
        <h2 class="mt-5">edit <b>{{ $info->name }}</b> Categury</h2>
        <hr>
        <form action="{{ route('update') }}" method="POST">
            @csrf
            <input type='hidden' name="cid" value="{{ $info->id }}">
            <div class="form-group">
                <label for="">name</label>
                <input type="text" value="{{ $info->name }}" class="form-control" name="name" id=""
                    aria-describedby="emailHelpId" placeholder="name">

                @error('name')
                    <div style="color: red">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror

            </div>

            <button class="btn btn-primary" type="submit">update</button>

        </form>
    </div>
@endsection
