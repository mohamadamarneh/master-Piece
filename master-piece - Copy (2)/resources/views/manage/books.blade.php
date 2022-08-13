@extends('manage.layout.mastr')

@section('name')
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
        <h2>Books</h2>
        <form action="add-book" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Costumer id</label>
                        <input type="text" value="{{ old('costumer_id') }}" class="form-control" name="costumer_id" id=""
                            aria-describedby="emailHelpId" placeholder="name">

                        @error('costumer_id')
                
                            <div class="text-danger">
                                <p>* {{ $message }}</p>
                            </div>
                        @enderror


                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">product id</label>
                        <input type="text" value="{{ old('product_id') }}" class="form-control" name="product_id" id=""
                            aria-describedby="emailHelpId" placeholder="email">

                        @error('product_id')
                            <div class="text-danger">
                                <p>* {{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="date" value="{{ old('date') }}" class="form-control" name="date" id=""
                            aria-describedby="emailHelpId" placeholder="date">

                        @error('date')
                
                            <div class="text-danger">
                                <p>* {{ $message }}</p>
                            </div>
                        @enderror


                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">time </label>
                        <input type="time" value="{{ old('time') }}" class="form-control" name="time" id=""
                            aria-describedby="emailHelpId" placeholder="time">

                        @error('date')
                            <div class="text-danger">
                                <p>* {{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">

                    <div class="form-check">
                        <input type="checkbox"  value="1"  name="trainer_A"  class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Trainer</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" value="1" name="wears_A" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Wears</label>
                      </div>
                </div>
                <div class="col">

                </div>
            </div>

            <button class="btn btn-primary" type="submit">submit</button>

        </form>
        <div class="mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>costumer id</th>
                        <th>product id</th>
                        <th>date</th>
                        <th>trainer</th>
                        <th>wears</th>
                        <th>Edit / Delete</th>
                    </tr>
                </thead>
                @foreach ($list as $item)
                    <tr>
                        <td scope="row">{{ $item->id }}</td>
                        <td>{{ $item->costumer_id }}</td>
                        <td>{{ $item->product_id }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->trainer_A ? 'yes' : 'no' }}</td>
                        <td>{{ $item->wears_A ? 'yes' : 'no' }}</td>
                        <td>

                            <a href="edit-book/{{ $item->id }}" class="btn btn-secondry btn-sx">edit</a>

                            <form action="delete-book" method="POST" style="display: inline">
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
