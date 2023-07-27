@extends('layouts.app')

@section('content')
<div class="container" >
  <div class="row">
      <div class="col-sm-8">
        <h1>Crear un nueva Carrera</h1>

        <form action="/carreras" method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Ingrese el nombre de la carrera</label>
            <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre de la nueva carrera">
          </div>

          <div class="mb-3">
            <label for="facultadcodigo" class="form-label">Ingrese el codigo de la facultad</label>
            <input type="text" class="form-control" name="facultadcodigo" placeholder="codigo de la facultad">
          </div>

          <div class="mb-3">
            <label for="carreracodigo" class="form-label">Ingrese el codigo de la carrera</label>
            <input type="text" class="form-control" name="carreracodigo" placeholder="codigo de la nueva carrera">
          </div>


          <button type="submit" class="btn btn-primary">Registrar</button>

          <button type="reset"class="btn btn-danger">Limpiar</button>
        </form>

        <div class="mb-3">
          <a href="{{url('carreras')}}" >
            <button class="btn btn-secondary">Cancelar</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection