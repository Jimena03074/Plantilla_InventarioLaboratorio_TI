<html>
<div class="card">
<div class="card-header">
<div style="text-align:center;"><h1 style="color:DarkMagenta ;"><b>Reporte de Articulos</b></h1> </div>

          
  <div class="card-body">

   <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead>
      <tr>
        <th style="color:DarkMagenta;">N°</th>
        <th style="color:DarkMagenta;">Nombre del articulo</th>
        <th style="color:DarkMagenta;">ID Categoria</th>
        <th style="color:DarkMagenta;">Cantidad</th>
        <th style="color:DarkMagenta;">Estado</th> 
      
    </tr>
  </thead>
  <tbody>
  
    @foreach ($articulo as $articulo)
      <tr> 
      <td style="text-align:center;">{{$articulo->id}}</td> 
       <td style="text-align:center;">{{$articulo->articulo_nombre}}</td> 
        <td style="text-align:center;">{{$articulo->id_categoria}}</td> 
        <td style="text-align:center;">{{$articulo->inventario_articulo}}</td> 
         <td style="text-align:center;">{{$articulo->articulo_status}}</td> 

         </td>
     </tr>
      @endforeach
  </tbody>
</table>


  </div>
</div>

</html>





