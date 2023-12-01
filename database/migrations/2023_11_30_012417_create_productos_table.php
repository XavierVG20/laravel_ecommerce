<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcategoria')->unsigned();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('codigo');
            $table->string('unidad');
            $table->string('contenido');
            $table->decimal('precio');
            $table->boolean('condicion')->default(1);
            $table->foreign('idcategoria')->references('id')->on('categorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
