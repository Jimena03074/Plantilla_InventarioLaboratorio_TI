@extends('adminlte::page')

@section('title', 'Edit')

@section('content_header')
    <h1>Editar un articulo</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
      <form action="{{route('admin.articulo.update', $articulo)}}" method="POST">
      @csrf
      @method('put')
      <div class="mb-3">
          <label for="articulo_nombre" class="form-label">Nombre del articulo:</label>
          <input type="text" class="form-control" id="articulo_nombre" name="articulo_nombre" value="{{$articulo->articulo_nombre}}">
          @error('articulo_nombre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
          <label for="id_categoria" class="form-label">Categoria:</label>
          <select name="id_categoria" id="id_categoria" >
            @foreach($categoria as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->nombre_categoria}}</option>
            @endforeach
          </select>
          @error('id_categoria')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>


      <div class="mb-3">
          <label for="inventario_articulo" class="form-label">Inventario:</label>
          <input type="text" class="form-control" id="inventario_articulo" name="inventario_articulo" value="{{$articulo->inventario_articulo}}">
          @error('inventario_articulo')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>

 
      <div class="mb-3">
        <label for="articulo_status" class="form-label">Estado del articulo:</label>
        <input type="text" class="form-control" id="articulo_status" name="articulo_status" value="{{$articulo->articulo_status}}">
        @error('articulo_status')
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