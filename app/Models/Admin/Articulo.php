<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    public function categoria(){
        return $this ->belongsTo(Categoria::class,"id_categoria");
    }
    public function articulo(){
        return $this ->hasMany(articulo::class,"id");

    }
  
} 
