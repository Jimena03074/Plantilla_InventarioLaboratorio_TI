<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Articulo;
use App\Models\Admin\Categoria;
class ArticuloController extends Controller
{
    
    public function index()
    {
        $articulo = Articulo::all();
      return view('admin.articulo.index',compact('articulo'));
    }

    
    public function create()
    {
        $categoria = Categoria:: all();
        $articulo = Articulo:: all();
        return view('admin.articulo.create', compact('articulo', ('categoria')));
    }

    
    public function store(Request $request)
    {
        $articulo=new Articulo();
        $validated=$request->validate([
            'articulo_nombre'=>'required',
            'id_categoria'=>'required',
            'inventario_articulo'=>'required',
            'articulo_status'=>'required'
        ]);
        

        $articulo->articulo_nombre=$request->articulo_nombre;
       $articulo->id_categoria=$request->id_categoria;
       $articulo->inventario_articulo=$request->inventario_articulo;
       $articulo->articulo_status=$request->articulo_status;
       $articulo->save();

       return redirect()->route('admin.articulo.index',$articulo);
    }

    
    public function show()
    {
        $articulo = Articulo::all();
        return view('admin.articulo.show',compact('articulo'));
    }

    
    public function edit($id)
    {
        $categoria = Categoria:: all();
        $articulo = Articulo::find($id);
       
        return view('admin.articulo.edit', compact('articulo','categoria'));
    }

    
    public function update(Request $request, Articulo $articulo)
    {
        $validated=$request->validate([
            'articulo_nombre'=>'required',
            'id_categoria'=>'required',
            'inventario_articulo'=>'required',
            'articulo_status'=>'required'
        ]);
        $articulo->articulo_nombre=$request->articulo_nombre;
        $articulo->id_categoria=$request->id_categoria;
        $articulo->inventario_articulo=$request->inventario_articulo;
        $articulo->articulo_status=$request->articulo_status;

        $articulo->save();
           return redirect()->route('admin.articulo.show',$articulo);
    }

   
    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
         return redirect()->route('admin.articulo.show',$articulo);
    }
}
