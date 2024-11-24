<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('propietarios', function (Blueprint $table) {
            $table->id('ID_Propietario');
            $table->string('Nombre', 100);
            $table->string('Direccion', 255)->nullable();
            $table->string('Correo_Electronico', 100)->nullable();
            $table->bigInteger('celular')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('propietarios');
    }
};
