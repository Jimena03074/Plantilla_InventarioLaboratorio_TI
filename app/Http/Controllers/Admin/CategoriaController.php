<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Categoria;
class CategoriaController extends Controller
{
  
    public function index()
    {
        $categoria = Categoria::all();
        return view('admin.categoria.index',compact('categoria'));
    }

 
    public function create()
    {
        return view('admin.categoria.create');
    }
 
   
    public function store(Request $request)
    {
        $categoria=new Categoria();
        $validated=$request->validate([
            'nombre_categoria'=>'required',
            'estado_categoria'=>'required',
            
        ]);

        $categoria->nombre_categoria=$request->nombre_categoria;
        $categoria->estado_categoria=$request->estado_categoria;
        $categoria->save();
        return redirect()->route('admin.categoria.show',$categoria);
    }

   
    public function show()
    {
        $categoria = Categoria::all();
        return view('admin.categoria.show',compact('categoria'));
    }


    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('admin.categoria.edit', compact('categoria'));
    }

    
    public function update(Request $request, Categoria $categoria)
    {
        $validated=$request->validate([
            'nombre_categoria'=>'required',
            'estado_categoria'=>'required',
        ]);

        $categoria->nombre_categoria=$request->nombre_categoria;
        $categoria->estado_categoria=$request->estado_categoria;
        $categoria->save();
            return redirect()->route('admin.categoria.show',$categoria);
    }

    
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()->route('admin.categoria.show',$categoria);
    }
}
