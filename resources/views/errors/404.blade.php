@extends('layouts.main')

@section('content')
 <main>
    <div class="container py-5 text-center">
        <h1>Oops...something went wrong!</h1>
        <h2 class="text-danger my-5">{{$exception->getMessage()}}</h2>
        <img class="stop-train" src="https://as1.ftcdn.net/v2/jpg/01/42/96/32/1000_F_142963227_tCnHS8bL0LK5IfO5F9rrblgSfIlsQNtA.jpg" alt="stop train">
    </div>
 </main>
@endsection
