<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('metodo_pago', function (Blueprint $table) {
            $table->id('ID_Metodo');
            $table->enum('Metodo', ['Efectivo', 'Transferencia']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('metodo_pago');
    }
};