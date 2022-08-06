@extends('manage.layout.mastr')

@section('name')
    <div class="container mt-5">

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
        <h2>Coaches</h2>
        <form action="add-coache" method="POST">
            @csrf
            <div class="form-group">
                <label for="">name</label>
                <input type="text" value="{{ old('name') }}" class="form-control" name="name" id=""
                    aria-describedby="emailHelpId" placeholder="name">

                @error('name')
                    <div class="text-danger">
                       <p>* {{ $message }}</p>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="text" value="{{ old('email') }}" class="form-control" name="email" id=""
                    aria-describedby="emailHelpId" placeholder="email">

                @error('email')
                    <div class="text-danger" >
                       <p>* {{ $message }}</p>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">password</label>
                <input type="text" value="{{ old('password') }}" class="form-control" name="password" id=""
                    aria-describedby="emailHelpId" placeholder="password">

                @error('password')
                    <div class="text-danger" >
                       <p>* {{ $message }}</p>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" value="{{ old('phone') }}" class="form-control" name="phone" id=""
                    aria-describedby="emailHelpId" placeholder="phone">

                @error('phone')
                    <div class="text-danger" >
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

                        <th>phone</th>
                        <th>Edit / Delete</th>
                    </tr>
                </thead>
                @foreach ($list as $item)
                    <tr>
                        <td scope="row">{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        
                        <td>                       
                        
                            <a href="edit-coache/{{ $item->id }}" class="btn btn-secondry btn-sx">edit</a>
                            <form action="delete-coache" method="POST" style="display: inline">
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