<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cita_motivo', function (Blueprint $table) {
            $table->foreignId('ID_Cita')
                  ->constrained('citas', 'ID_Cita')
                  ->onDelete('cascade');
            $table->foreignId('ID_Motivo')
                  ->constrained('motivos', 'ID_Motivo')
                  ->onDelete('cascade');
            $table->primary(['ID_Cita', 'ID_Motivo']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cita_motivo');
    }
};