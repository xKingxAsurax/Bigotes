<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('veterinarios', function (Blueprint $table) {
            $table->id('ID_Veterinario');
            $table->string('Nombre', 100);
            $table->string('Telefono', 20)->nullable();
            $table->string('Correo_Electronico', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('veterinarios');
    }
};