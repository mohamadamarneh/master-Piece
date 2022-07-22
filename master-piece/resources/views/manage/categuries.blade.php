@extends('manage.layout.mastr')

@section('name')
    <div class="container mt-5">
        {{-- <h1>crud example</h1> --}}
        <hr>
        @if (Session::get('success'))
            <div class="alert alert-success" role="alert">
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
        @if (Session::get('secdel'))
            <div class="alert alert-success" role="alert">
                <strong>{{ Session::get('secdel') }}</strong>
            </div>
        @endif
        @if (Session::get('succ'))
            <div class="alert alert-success" role="alert">
                <strong>{{ Session::get('succ') }}</strong>
            </div>
        @endif
        @if (Session::get('fail'))
            <div class="alert alert-danger" role="alert">
                <strong>{{ Session::get('fail') }}</strong>
            </div>
        @endif
        <h2>categorise</h2>
        <form action="add-categorise" method="POST">
            @csrf
            <div class="form-group">
                <label for="">name</label>
                <input type="text" value="{{ old('name') }}" class="form-control" name="name" id=""
                    aria-describedby="emailHelpId" placeholder="name">

                @error('name')
                    <div style="color: red">
                       <p>* {{ $message }}</p>
                    </div>
                @enderror
            </div>

            <button class="btn btn-primary" type="submit">submit</button>

        </form>
        <div class="mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>Edit / Delete</th>
                    </tr>
                </thead>
                @foreach ($list as $item)
                    <tr>
                        <td scope="row">{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>

                            <a href="edit-categorise/{{ $item->id }}" class="btn btn-secondry btn-sx">edit</a>

                            <form action="delete-categorise" method="POST" style="display: inline">
                                @csrf
                                <input type="hidden" value="{{ $item->id }}" name="pid">
                                <button type="submit" class="btn btn-danger btn-sx">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tbody>


                </tbody>
            </table>
        </div>

    </div>
@endsection
