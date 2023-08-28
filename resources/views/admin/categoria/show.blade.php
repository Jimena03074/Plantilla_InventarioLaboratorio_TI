@extends('adminlte::page')

@section('title', 'Mostrar')

@section('content_header')
   
Mostrar Categorias 
@stop

@section('content')
 
<div class="card">
<div class="card-body">

   <table class="table table-striped">
    <thead>
        <tr>
          <th>Id</th>
          <th>Nombre de la categoria</th>
          <th>Estado</th>
          <th>Acciones</th>
      </tr>
    </thead>
     
    <tbody>
      @foreach ($categoria as $categoria)
        <tr> 
          <td>{{$categoria->id}}</td> 
          <td>{{$categoria->nombre_categoria}}</td> 
          <td>{{$categoria->estado_categoria}}</td> 
            
          <td width="10px">
            <a href="{{route('admin.categoria.edit',$categoria)}}"
            class="btn btn-info btn-sm">Editar</a>
          </td>
              
          <td width="10px">     
            <form action="{{route('admin.categoria.destroy', $categoria)}}" method="POST">
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