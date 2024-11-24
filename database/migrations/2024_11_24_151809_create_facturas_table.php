<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('ID_Factura');
            $table->date('Fecha_Emision');
            $table->decimal('Monto_Total', 10, 2)->nullable();
            $table->foreignId('ID_Paciente')->nullable()
                  ->constrained('pacientes', 'ID_Paciente')
                  ->onDelete('set null');
            $table->enum('Estado', ['Pendiente', 'Pagado'])->default('Pendiente');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('facturas');
    }
};