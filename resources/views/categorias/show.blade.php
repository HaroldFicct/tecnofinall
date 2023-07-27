
@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">{{$categoria->descripcion}}</h1>
        <p class="leand">{{$categoria->id}}</p>
</div>

@endsection