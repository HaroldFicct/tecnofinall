@extends('layouts.app')

@section('content')

  <div class="container" >
    <div class="row">
      <div class="col-sm-8">
        <h1>EDITAR USUARIO : {{$user->name}}</h1>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>

        @endif
        
        <form action="{{route('usuarios.update',$user->id)}}" method="POST">
          @method('PATCH')
          @csrf

          <div class="mb-3">
            <label for="name" class="form-label">Nombre completo</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Ingresa tu nombre completo">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Ingresa tu correo">
          </div>

          <div class="mb-3">
            <label for="adress" class="form-label">Direccion</label>
            <input type="adress" class="form-control" name="adresss" value="{{$user->adress}}" placeholder="Ingresa tu direccion">
          </div>

          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="reset" class="btn btn-secondary">Limpiar</button>
        </form>

        <div class="mb-3">
          <a href="{{url('usuarios')}}" >
            <button class="btn btn-danger">Cancelar</button>
          </a>
        </div>

      </div>
    </div>
  </div>

@endsection
