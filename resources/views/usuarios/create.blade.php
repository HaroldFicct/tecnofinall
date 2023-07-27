@extends('layouts.app')

@section('content')
<div class="container" >
  <div class="row">
      <div class="col-sm-8">
        <h1>Crear un nuevo Administrador</h1>

        <form action="/usuarios" method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Nombre completo</label>
            <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre completo">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Ingresa tu correo">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Rol</label>
            <select name="rol"  class="form-control">
              <option selected disabled> Elije un rol</option>
              @foreach($roles as $role)
              <option value="{{ $role->id }}">{{$role->name}}</option>
              @endforeach
            </select>
            </div>

          <div class="mb-3">
            <label for="address" class="form-label">Direccion</label>
            <input type="address" class="form-control" name="address" placeholder="Ingresa tu direccion">
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Celular</label>
            <input type="phone" class="form-control" name="phone" placeholder="Ingresa tu celular">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Escribe una contraseña">
          </div>

          <button type="submit" class="btn btn-primary">Registrar</button>

          <button type="reset"class="btn btn-danger">Limpiar</button>
        </form>

        <div class="mb-3">
          <a href="{{url('usuarios')}}" >
            <button class="btn btn-secondary">Cancelar</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
