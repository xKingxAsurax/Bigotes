<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id('ID_Cita');
            $table->dateTime('Fecha_Hora');
            $table->text('Motivo')->nullable();
            $table->foreignId('ID_Paciente')->nullable()
                  ->constrained('pacientes', 'ID_Paciente')
                  ->onDelete('set null');
            $table->foreignId('ID_Veterinario')->nullable()
                  ->constrained('veterinarios', 'ID_Veterinario')
                  ->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('citas');
    }
};