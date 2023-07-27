@extends('layouts.app') 
@section('content') 
<div class="container">
    <h2>Lista de Roles <a href="roles/create"> <button type="buton" class="btn btn-success float-right">Agregar rol</button> </a></h2>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach($roles as $role)
            <tr>
                <th scope="row">{{$role->id}}</th>
                <td>{{$role->name}}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection