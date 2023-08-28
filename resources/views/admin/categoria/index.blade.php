@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
   
Página de Categorias
@stop

@section('content')

<div class="card">
<div class="card-header">

        <a href="{{route('admin.categoria.create')}}" class="btn btn-primary">Nuevo Registro</a></div>
          
  <div class="card-body">

   <table id="categorias" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead>
      <tr> 
        <th>Id</th>
        <th>Nombre de la categoria</th>
        <th>Descripcion</th> 
        
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
         class="btn btn-info btn-sm">Editar</a></td>
         
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
@section('css')
    
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">


@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
      <script>
        $(document).ready(function() {
        $('#categorias').DataTable();
} );
      </script>
@endsection

