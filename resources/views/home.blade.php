@extends('layouts.main')

@section('title')
    Home
@endsection

@section('content')
    <main>
        <div class="container mt-5">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Train</th>
                        <th scope="col">Departure</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Time</th>
                        <th scope="col">Delay</th>
                        <th scope="col">Information</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <th scope="row">{{ $train->id }}</th>
                            <td class="text-uppercase">{{ $train->train_code }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->departure_time }}</td>
                            <td>{{ $train->is_ontime ? '-' : 'Delayed' }}</td>
                            <td>{{ $train->is_cancelled ? 'Cancelled' : '-' }}</td>
                            <td>
                                <a href="{{ route('details', $train->id) }}" class="btn btn-warning">More Info</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
