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
        <h2>Comments</h2>
        <form action="add-comment" method="POST" class="p-2">
            @csrf
            <div class="form-group">
                <label for="">User name</label>
                <input type="text" value="{{ old('username') }}" class="form-control" name="username" id=""
                    aria-describedby="emailHelpId" placeholder="name">

                @error('username')
                    <div style="color: red">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror
            </div>
            <label for="">comment</label>
            <input type="text" value="{{ old('comment') }}" class="form-control" name="comment" id=""
                aria-describedby="emailHelpId" placeholder="comment">

            @error('comment')
                <div style="color: red">
                    <p>* {{ $message }}</p>
                </div>
            @enderror
            <div>
                <label for="">product id</label>
                <input type="text" value="{{ old('product_id') }}" class="form-control" name="product_id" id=""
                    aria-describedby="emailHelpId" placeholder="ex: 16">

                @error('product_id')
                    <div style="color: red">
                        <p>* {{ $message }}</p>
                    </div>
                @enderror
            </div>

            <button class="btn btn-primary mt-3" type="submit">submit</button>
        </form>


        <div class="mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>comment</th>
                        <th>Product id</th>
                        <th>Date</th>
                        <th> Delete</th>
                    </tr>
                </thead>
                @foreach ($list as $item)
                    <tr>
                        <td scope="row">{{ $item->id }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->comment }}</td>
                        <td>{{ $item->product_id }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>

                            <form action="delete-comment" method="POST" style="display: inline">
                                @csrf
                                <input type="hidden" value="{{ $item->id }}" name="pid">
                                <button type="submit" class="btn btn-danger btn-sx">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach



                </tbody>
            </table>
        </div>

    </div>
@endsection
