<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\InicioController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ReporteCategoriaController;



Route::get('admin', [InicioController::class, 'index']);
Route::resource('admin/cliente', ClienteController::class)->names('admin.cliente');
Route::resource('admin/categoria', CategoriaController::class)->names('admin.categoria');
Route::resource('admin/articulo', ArticuloController::class)->names('admin.articulo');
Route::resource('admin/reporte_categoria', ReporteCategoriaController::class)->names('admin.reporte_categoria');
Route::resource('admin/reporte', ReporteController::class)->names('admin.reporte');