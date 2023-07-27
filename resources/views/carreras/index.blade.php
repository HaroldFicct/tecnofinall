@extends('layouts.app') 

@section('content') 


<div class="container">
    <h2>Lista de Carreras <a href="carreras/create"> <button type="buton" class="btn btn-success float-right">Agrega Carrera</button> </a> </h2>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">nombre</th>
            <th scope="col">Facultad</th>
            <th scope="col">Carrera</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($carreras as $carrera)
            <tr>
            <th scope="row">{{$carrera->id}}</th>
                <td>{{$carrera->nombre}}</td>
                <td>{{$carrera->facultadcodigo}}</td>
                <td>{{$carrera->carreracodigo}}</td>
                <td>
                <form action="{{route('carreras.destroy',$carrera->id)}}" method="POST">
                <a href="{{route('carreras.show',$carrera->id)}}"> <button type="button" class="btn btn-secondary">Ver </button></a>
                    <a href="{{route('carreras.edit', $carrera->id)}}"> <button type="button" class="btn btn-primary">Editar</button> </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimiar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection