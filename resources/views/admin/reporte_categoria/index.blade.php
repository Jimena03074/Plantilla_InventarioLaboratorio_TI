
<html>
<div class="card">
<div class="card-header">
<div style="text-align:center;"><h1 style="color:DarkMagenta ;"><b>Reporte de Categorias</b></h1> </div>
  <div class="card-body">

   <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead>
      <tr>
      <th style="color:DarkMagenta;">N°</th>
        <th style="color:DarkMagenta;">Nombre de la categoria</th>
        <th style="color:DarkMagenta;">Descripción</th> 
      
    </tr>
  </thead>
  <tbody>
  
  @foreach ($categoria as $categoria)
      <tr> 
      <td style="text-align:center;">{{$categoria->id}}</td> 
       <td style="text-align:center;">{{$categoria->nombre_categoria}}</td> 
        <td style="text-align:center;">{{$categoria->estado_categoria}}</td> 

         </td>
     </tr>
      @endforeach
  </tbody>
</table>


  </div>
</div>

</html>






