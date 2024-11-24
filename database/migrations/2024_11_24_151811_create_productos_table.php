<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('IdProducto');
            $table->string('Nombre', 30);
            $table->string('Tipo', 20);
            $table->string('Especie', 20);
            $table->float('Precio');
            $table->string('Detalles', 200);
            $table->integer('Cantidad');
            $table->binary('image1')->nullable();
            $table->binary('image2')->nullable();
            $table->binary('image3')->nullable();
            $table->binary('image4')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
};