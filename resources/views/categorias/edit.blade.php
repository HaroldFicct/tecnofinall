@extends('layouts.app')

@section('content')

  <div class="container" >
    <div class="row">
      <div class="col-sm-8">
        <h1>EDITAR CATEGORIA : {{$categoria->descripcion}}</h1>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>

        @endif
        
        <form action="{{route('categorias.update',$categoria->id)}}" method="POST">
          @method('PATCH')
          @csrf

          <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="Descripcion" class="form-control" name="name" value="{{$categoria->descripcion}}" placeholder="Ingresala nueva descripcion">
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
