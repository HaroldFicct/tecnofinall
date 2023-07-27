@extends('layouts.app')

@section('content')
<div class="container" >
  <div class="row">
      <div class="col-sm-8">
        <h1>Crear un Rol</h1>

        <form action="/roles" method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Ingrese el Rol de usuario</label>
            <input type="name" class="form-control" name="name" placeholder="Ingrese el nombre del rol">
          </div>
         <button type="submit" class="btn btn-primary">Registrar</button>

          <button type="reset"class="btn btn-danger">Limpiar</button>
        </form>

        <div class="mb-3">
          <a href="{{url('roles')}}" >
            <button class="btn btn-secondary">Cancelar</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection