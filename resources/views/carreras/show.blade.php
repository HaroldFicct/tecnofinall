
@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">{{$carrera->nombre}}</h1>
        <p class="leand">Codigo de la facultad : {{$carrera->facultadcodigo}}</p>
        <p class="leand"> Codigo de la carrera :{{$carrera->carreracodigo}}</p>
        <p class="leand"> Registrado en : {{$carrera->created_at}}</p>
</div>

@endsection