<?php

namespace App\Http\Controllers;

use App\Models\Admin\Reporte;
use App\Models\Admin\Articulo;
use PDF;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    
    public function index()
    {
        $articulo = Articulo::all();
        $pdf= \PDF::loadview('admin.reporte.index', compact('articulo'));
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

   
    public function show(Reporte $reporte)
    {
        //
    }

   
    public function edit(Reporte $reporte)
    {
        //
    }

    
    public function update(Request $request, Reporte $reporte)
    {
        //
    }

   
    public function destroy(Reporte $reporte)
    {
        //
    }
}
