@extends('manage.layout.mastr')

@section('name')
    @if (!Session::get('adminname'))
        @php
            header('location:javascript://history.go(-1)');
            exit();
        @endphp
    @endif


    <div class="container mt-5">
        {{-- <h1>crud example</h1> --}}
        <hr>
        @if (Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        @if (Session::get('secdel'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('secdel') }}
            </div>
        @endif
        @if (Session::get('succ'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('succ') }}
            </div>
        @endif
        @if (Session::get('fail'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('fail') }}
            </div>
        @endif
        <h2>Admins</h2>
        <form action="add-admin" method="POST">
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
            <div class="form-group">
                <label for="">email</label>
                <input type="text" value="{{ old('email') }}" class="form-control" name="email" id=""
                    aria-describedby="emailHelpId" placeholder="email">

                @error('email')
                    <div style="color: red">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">password</label>
                <input type="text" value="{{ old('password') }}" class="form-control" name="password" id=""
                    aria-describedby="emailHelpId" placeholder="password">

                @error('password')
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
                        <th>email</th>

                        <th>Edit / Delete</th>
                    </tr>
                </thead>
                @foreach ($list as $item)
                    <tr>
                        <td scope="row">{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>

                        <td>




                            @if ($item->id == 1)
                            @else
                                <a href="edit-admin/{{ $item->id }}" class="btn btn-secondry btn-sx">edit</a>
                                <form action="delete-admin" method="POST" style="display: inline">
                                    @csrf
                                    <input type="hidden" value="{{ $item->id }}" name="pid">
                                    <button type="submit" class="btn btn-danger btn-sx">delete</button>
                                </form>
                            @endif

                        </td>
                    </tr>
                @endforeach
                <tbody>


                </tbody>
            </table>
        </div>

    </div>
@endsection
