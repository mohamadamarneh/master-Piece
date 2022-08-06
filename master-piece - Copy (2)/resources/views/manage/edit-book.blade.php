@extends('manage.layout.mastr')


@section('name')
    <div class="container mt-5">
        <h2 class="mt-5"></h2>
        <hr>
        {{-- {{dd($info)}} --}}
        <form action="{{ route('update-book') }}" method="POST">
            @csrf
            <input type='hidden' name="cid" value="{{$info->id}}">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Costumer id</label>
                        <input type="text"  value="{{ $info->costumer_id }}" class="form-control" name="costumer_id"
                            id="" aria-describedby="emailHelpId" placeholder="name">

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
                        <input type="text"  value="{{ $info->product_id }}" class="form-control" name="product_id"
                            id="" aria-describedby="emailHelpId" placeholder="email">

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
                        <input type="date"   value="{{ $info->date }}" class="form-control" name="date" id=""
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
                        <input type="time"   value="{{ $info->time }}"  class="form-control" name="time" id=""
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
                    <div class="form-group">
                        {{-- <label for="">trainer</label>
                        <input type="checkbox" value="1" {{$info->trainer_A ==1 ? 'checked':'' }}  name="trainer_A" id=""
                            aria-describedby="emailHelpId" placeholder="trainer_A">

                        @error('trainer_A')
                            <div class="text-danger">
                                <p>* {{ $message }}</p>
                            </div>
                        @enderror

                        <label for="">wears</label>
                        <input type="checkbox" value="1"  {{$info->wears_A ==1 ? 'checked':'' }}  name="wears_A" id=""
                            aria-describedby="emailHelpId" placeholder="wears_A">

                        @error('wears_A')
                            <div class="text-danger">
                                <p>* {{ $message }}</p>
                            </div>
                        @enderror --}}

                        <div class="col">

                            <div class="form-check">
                                <input type="checkbox"  value="1"  name="trainer_A" {{$info->wears_A ==1 ? 'checked':'' }}  class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Trainer</label>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" value="1" name="wears_A" {{$info->wears_A ==1 ? 'checked':'' }} class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Wears</label>
                              </div>
                        </div>


                    </div>
                </div>
                <div class="col">

                </div>
            </div>

            <button class="btn btn-primary" type="submit">update</button>

        </form>
    </div>
@endsection
