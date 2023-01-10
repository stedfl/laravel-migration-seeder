@extends('layouts.main')

@section('title')
    Train-Details
@endsection

@section('content')
<main>
    <div class="container my-5 d-flex align-items-center justify-content-center">
        <div class="card text-center" style="width: 30rem;">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/6/64/Melbourne_train_logo.svg/2044px-Melbourne_train_logo.svg.png" class="card-img-top" alt="train poster">
            <div class="card-body">
              <h4 class="card-title text-uppercase">Train {{$train->train_code}}</h4>
              <h6 class="p-2">{{$train->company}} Trainline</h6>
                <ul>
                    <li><span class="fw-bold">From:</span> {{$train->departure_station}} <span class="fw-bold">at</span> {{$train->departure_time}}</li>
                    <li><span class="fw-bold">To:</span> {{$train->arrival_station}} <span class="fw-bold">at</span> {{$train->arrival_time}} </li>
                    <li><i class="fa-solid fa-caravan"></i><span class="fw-bold"> Coaches: </span> {{$train->coaches}}</li>
                    <li class="icon-train {{$train->is_ontime ? 'ontime' : 'delayed'}}">
                    <i class="fa-solid fa-train icon-train {{$train->is_ontime ? 'ontime' : 'delayed'}}"></i> {{$train->is_ontime ? 'On Time' : 'Delayed'}}
                    </li>
                    <a href="{{route('home')}}" class="btn btn-warning mt-3">Go To Time Table</a>
                </ul>
            </div>
          </div>
    </div>
</main>
@endsection
