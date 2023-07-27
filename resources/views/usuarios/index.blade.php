@extends('layouts.app') 

@section('content') 

<div class="container">
    <h2>Lista de Administradores <a href="usuarios/create"> <button type="buton" class="btn btn-success float-right">Agrega Administrador</button> </a> </h2>

    <h6>
        @if($search)
        <div class="alert alert-primary" role="alert">
            los resultados para tu busqueda '{{$search}}' son: 
        </div>
        @endif

    </h6>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Rol</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->adress}}</td>
                <td>{{$user->phone}}</td>
                <td> 
                    @foreach($user->roles as $role)
                        {{$role->name}}
                    @endforeach
                </td>

                <td>

                    <form action="{{route('usuarios.destroy',$user->id)}}" method="POST">
                    <a href="{{route('usuarios.show',$user->id)}}"> <button type="button" class="btn btn-secondary">Ver </button></a>
                    <a href="{{route('usuarios.edit', $user->id)}}"> <button type="button" class="btn btn-primary">Editar</button> </a>
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