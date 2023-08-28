@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="card">
<div class="card-header">

        <a href="{{route('admin.articulo.create')}}" class="btn btn-primary">Nuevo Registro</a></div>
          
  <div class="card-body">

   <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead>
      <tr>
        <th>Id</th>
        <th>Nombre del articulo</th>
        <th>ID Categoria</th>
        <th>Inventario</th>
        <th>Estado</th>
         <th>Acciones</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($articulo as $articulo)
      <tr> 
      <td>{{$articulo->id}}</td> 
       <td>{{$articulo->articulo_nombre}}</td> 
        <td>{{$articulo->categoria->nombre_categoria}}</td> 
        <td>{{$articulo->inventario_articulo}}</td> 
         <td>{{$articulo->articulo_status}}</td> 
         
         <td width="10px">

         <a href="{{route('admin.articulo.edit',$articulo)}}"
          class="btn btn-info btn-sm">Editar</a></td>
         
         <td width="10px">
            
             <form action="{{route('admin.articulo.destroy', $articulo)}}" method="POST">
                 @method('delete')
                 @csrf
                 <input type="submit" value="Eliminar" class="btn btn-danger">
             </form>

         </td>
     </tr>
      @endforeach
  </tbody>
</table>


  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




