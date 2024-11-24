<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id('ID_Paciente');
            $table->string('Nombre', 100);
            $table->string('Especie', 50)->nullable();
            $table->string('Raza', 50)->nullable();
            $table->date('Fecha_Nacimiento')->nullable();
            $table->foreignId('Propietario_ID')->nullable()
                  ->constrained('propietarios', 'ID_Propietario')
                  ->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
};