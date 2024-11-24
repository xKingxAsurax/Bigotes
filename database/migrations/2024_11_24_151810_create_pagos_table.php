<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('ID_Pago');
            $table->foreignId('ID_Factura')->nullable()
                  ->constrained('facturas', 'ID_Factura')
                  ->onDelete('set null');
            $table->foreignId('ID_Metodo')->nullable()
                  ->constrained('metodo_pago', 'ID_Metodo')
                  ->onDelete('set null');
            $table->decimal('Monto_Total', 10, 2)->nullable();
            $table->date('Fecha_Pago')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pagos');
    }
};