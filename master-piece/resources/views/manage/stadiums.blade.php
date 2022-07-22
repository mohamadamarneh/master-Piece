@extends('manage.layout.mastr')


@section('name')
<div class="container mt-5" >
    
    <hr>
    @if (Session::get('success'))
        <div class="alert alert-success p-2" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    @if (Session::get('secdel'))
        <div class="alert alert-success p-2" role="alert">
            {{ Session::get('secdel') }}
        </div>
    @endif
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

    <h2>Stadiums </h2>
    <form action="add-stadiums" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">name</label>
            <input type="text" value="{{ old('title') }}" class="form-control" name="title" id=""
                aria-describedby="emailHelpId" placeholder="name">

            @error('title')
            <div style="color: red">
                <p>* {{ $message }}</p>
             </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">description</label>
            <input type="text" value="{{ old('description') }}" class="form-control" name="description" id=""
                aria-describedby="emailHelpId" placeholder="description">

            @error('description')
            <div style="color: red">
                <p>* {{ $message }}</p>
             </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">price</label>
            <input type="text" value="{{ old('price') }}" class="form-control" name="price" id=""
                aria-describedby="emailHelpId" placeholder="name">

            @error('price')
            <div style="color: red">
                <p>* {{ $message }}</p>
             </div>
            @enderror
        </div>
        <div class="form-group  p-2">
            {{-- <label for="">gategury</label>
            <input type="text" value="{{ old('categorises_id') }}" class="form-control" name="categorises_id" id=""
                aria-describedby="emailHelpId" placeholder="gategury"> --}}
                <p for="">gategury</p>
                <div class="d-inline-flex">
                    <select name="categorises_id" id="" class="form-control">
                        <option value="">selelct</option>
     
                        @foreach ($cat as $item)
                        <option value="{{$item->id}}"> {{$item->name}} </option>
                        @endforeach
                    </select>
                </div>

            @error('categorises_id')
            <div style="color: red">
                <p>* {{ $message }}</p>
             </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">address</label>
            <input type="text" value="{{ old('address') }}" class="form-control" name="address" id=""
                aria-describedby="emailHelpId" placeholder="address">

            @error('address')
            <div style="color: red">
                <p>* {{ $message }}</p>
             </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">picture</label>
            <input type="file" value="{{ old('picture') }}" class="form-control" name="picture" id=""
                aria-describedby="emailHelpId" placeholder="picture">

            @error('picture')
            <div style="color: red">
                <p>* {{ $message }}</p>
             </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">picture 2</label>
            <input type="file" value="{{ old('picture_two') }}" class="form-control" name="picture_two" id=""
                aria-describedby="emailHelpId" placeholder="picture">

            @error('picture_two')
            <div style="color: red">
                <p>* {{ $message }}</p>
             </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">picture 3</label>
            <input type="file" value="{{ old('picture_three') }}" class="form-control" name="picture_three" id=""
                aria-describedby="emailHelpId" placeholder="picture">

            @error('picture_three')
            <div style="color: red">
                <p>* {{ $message }}</p>
             </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">picture 4</label>
            <input type="file" value="{{ old('picture_four') }}" class="form-control" name="picture_four" id=""
                aria-describedby="emailHelpId" placeholder="picture">

            @error('picture_four')
            <div style="color: red">
                <p>* {{ $message }}</p>
             </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">picture 5</label>
            <input type="file" value="{{ old('picture_five') }}" class="form-control" name="picture_five" id=""
                aria-describedby="emailHelpId" placeholder="picture">

            @error('picture_five')
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
                    <th>price</th>
                    <th>price</th>
                    <th>Edit / Delete</th>
                    <th>show</th>
                </tr>
            </thead>
            @foreach ($list as $item)
                <tr>
                    <td scope="row">{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->price }}</td>
                    <td> <img src="imagesadd/{{ $item->picture}}" alt="{{ $item->title }}" style="200px"> </td>
                    <td>

                        <a href="edit-stadiums/{{ $item->id }}" class="btn btn-secondry btn-sx">edit</a>

                        <form action="delete-stadiums" method="POST" style="display: inline">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="pid">
                            <button type="submit" class="btn btn-danger btn-sx">delete</button>
                        </form>
                    </td>

                    <td><form action="" method="POST">
                        <input type="hidden" value="{{ $item->id }}" name="sid">
                        <button type="submit" style="btn btn-primary" >Show</button>
                    </form>
                    </td>
                </tr>
            @endforeach
            <tbody>
            
        </table>
    </div>

</div>
@endsection