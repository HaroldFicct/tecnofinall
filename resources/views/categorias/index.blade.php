@extends('layouts.app') 

@section('content') 


<div class="container">
    <h2>Lista de Categorias <a href="categorias/create"> <button type="buton" class="btn btn-success float-right">Agrega Categoria</button> </a> </h2>

    <table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">descripcion</th>
            <th scope="col">Acciones</th>

        </tr>
    </thead>

    <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <th scope="row">{{$categoria->id}}</th>
                <td>{{$categoria->descripcion}}</td>
                <td>
                    <form action="{{route('categorias.destroy',$categoria->id)}}" method="POST">
                    <a href="{{route('categorias.show',$categoria->id)}}"> <button type="button" class="btn btn-secondary">Ver </button></a>
                    <a href="{{route('categorias.edit', $categoria->id)}}"> <button type="button" class="btn btn-primary">Editar</button> </a>
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