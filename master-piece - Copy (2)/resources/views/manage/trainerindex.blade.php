@extends('manage.layout.mastr')

@section('name')
    <div class="container mt-5">
        <div class="mt-5">
            <h2 class="text-uppercase">{{ $info->title }}</h2>
            <h1> Active Books : <span class="text-warning">

                    @php
                        $x = 0;
                    @endphp
                    @foreach ($list as $item)
                        @if ($item->date >= date('Y-m-d'))
                            @php
                                $x++;
                            @endphp
                        @endif
                    @endforeach
                    @php
                        echo $x;
                    @endphp

                </span>
            </h1>



            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>date </th>

                        <th>costumer id</th>
                        <th> trainer</th>
                        <th>wears </th>

                        <th> Delete</th>
                    </tr>
                </thead>
                @foreach ($list as $item)
                    @if ($item->date >= date('Y-m-d'))
                        <tr>
                            <td scope="row">{{ $item->id }}</td>
                            <td>{{ $item->date }} <br>
                                {{ $item->time }}
                            </td>

                            <td>{{ $item->costumer_id }}</td>

                            <td>{{ $item->trainer_A ? 'yes' : 'no' }}</td>
                            <td>{{ $item->wears_A ? 'yes' : 'no' }}</td>

                            <td>

                                <form action="delete-book" method="POST" style="display: inline">
                                    @csrf
                                    <input type="hidden" value="{{ $item->id }}" name="pid">
                                    <button type="submit" class="btn btn-danger btn-sx">Ignore</button>
                                </form>

                            </td>
                        </tr>
                    @endif
                @endforeach
                <tbody>


                </tbody>
            </table>
        </div>



        <div class="mt-5">
            <h1>history :

                <span class="text">
                    @php
                        $x = 0;
                    @endphp
                    @foreach ($list as $item)
                        @if ($item->date < date('Y-m-d'))
                            @php
                                $x++;
                            @endphp
                        @endif
                    @endforeach
                    @php
                        echo $x;
                    @endphp
                </span>



            </h1>



            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>date </th>

                        <th>costumer id</th>
                        <th> trainer</th>
                        <th>wears </th>


                    </tr>
                </thead>
                @foreach ($list as $item)
                    @if ($item->date < date('Y-m-d'))
                        <tr>
                            <td scope="row">{{ $item->id }}</td>
                            <td>{{ $item->date }} <br>
                                {{ $item->time }}
                            </td>

                            <td>{{ $item->costumer_id }}</td>

                            <td>{{ $item->trainer_A ? 'yes' : 'no' }}</td>
                            <td>{{ $item->wears_A ? 'yes' : 'no' }}</td>


                        </tr>
                    @endif
                @endforeach
                <tbody>


                </tbody>
            </table>
        </div>


    </div>
@endsection
