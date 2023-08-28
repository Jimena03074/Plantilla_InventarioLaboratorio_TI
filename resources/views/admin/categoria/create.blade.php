@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h1>Nueva Categoria</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">
      <form action="{{route('admin.categoria.store')}}" method="POST">
      @csrf
      
          <div class="mb-3">
            <label for="nombre_categoria" class="form-label">Nombre de la categoria:</label>
            <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria">
            @error('nombre_categoria')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
                  

          <div class="mb-3">
            <label for="estado_categoria" class="form-label">Descripcion de la categoria:</label>
            <input type="text" class="form-control" id="estado_categoria" name="estado_categoria">
            @error('estado_categoria')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
              
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>

      </form>
    </div>
  </div>
@stop