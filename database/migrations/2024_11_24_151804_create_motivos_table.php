<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('motivos', function (Blueprint $table) {
            $table->id('ID_Motivo');
            $table->string('Descripcion', 255);
            $table->decimal('Precio', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('motivos');
    }
};