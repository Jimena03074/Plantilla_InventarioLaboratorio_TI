<?php

namespace App\Http\Controllers;

use App\Models\Admin\Reporte_categoria;
use Illuminate\Http\Request;
use PDF;
use App\Models\Admin\Categoria;

class ReporteCategoriaController extends Controller
{
    
    public function index()
    {
        $categoria = Categoria::all();
        $pdf= \PDF::loadview('admin.reporte_categoria.index', compact('categoria'));
        return $pdf->stream('reporte.pdf');
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show(Reporte_categoria $reporte_categoria)
    {
        //
    }

   
    public function edit(Reporte_categoria $reporte_categoria)
    {
        //
    }

   
    public function update(Request $request, Reporte_categoria $reporte_categoria)
    {
        //
    }

   
    public function destroy(Reporte_categoria $reporte_categoria)
    {
        //
    }
}