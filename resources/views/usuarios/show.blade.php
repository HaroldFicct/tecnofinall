@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">{{$user->name}}</h1>
        <p class="leand">{{$user->email}}</p>
        <p class="leand">{{$user->adress}}</p>
        <p class="leand">{{$user->phone}}</p>
        <p class="leand">{{$user->password}}</p>

    </div>
</div>

@endsection