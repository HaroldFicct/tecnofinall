@extends('layouts.app')
@section('content')
  <div class="container" >
    <div class="row">
      <div class="col-sm-8">
        <h1>EDITAR CARRERA : {{$carrera->nombre}}</h1>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>

        @endif
        
        <form action="{{route('carreras.update',$carrera->id)}}" method="POST">
          @method('PATCH')
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Ingrese el nombre de la carrera</label>
            <input type="text" class="form-control" name="nombre" value="{{$carrera->nombre}}" placeholder="Ingrese el nombre de la nueva carrera">
          </div>

          <div class="mb-3">
            <label for="facultadcodigo" class="form-label">Ingrese el codigo de la facultad</label>
            <input type="text" class="form-control" name="facultadcodigo"value="{{$carrera->facultadcodigo}}" placeholder="codigo de la facultad">
          </div>

          <div class="mb-3">
            <label for="carreracodigo" class="form-label">Ingrese el codigo de la carrera</label>
            <input type="text" class="form-control" name="carreracodigo"value="{{$carrera->carreracodigo}}" placeholder="codigo de la nueva carrera">
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
