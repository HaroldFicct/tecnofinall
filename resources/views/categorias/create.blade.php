@extends('layouts.app')

@section('content')
<div class="container" >
  <div class="row">
      <div class="col-sm-8">
        <h1>Crear un nueva categoria</h1>

        <form action="/categorias" method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Ingrese la descripcion</label>
            <input type="text" class="form-control" name="descripcion" placeholder="Ingrese el nombre de la nueva categoria">
          </div>


          <button type="submit" class="btn btn-primary">Registrar</button>

          <button type="reset"class="btn btn-danger">Limpiar</button>
        </form>

        <div class="mb-3">
          <a href="{{url('categorias')}}" >
            <button class="btn btn-secondary">Cancelar</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection