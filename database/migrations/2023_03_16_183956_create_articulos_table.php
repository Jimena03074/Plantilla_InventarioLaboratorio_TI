<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('articulo_nombre');
            $table->unsignedBigInteger("id_categoria");
            $table->integer('inventario_articulo');
            $table->string('articulo_status');
            $table->foreign("id_categoria")->references("id")->on("categorias")->onDelete("cascade");
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
};
