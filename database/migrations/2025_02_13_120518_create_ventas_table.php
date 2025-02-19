<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('id_venta'); // Clave primaria 'id_venta'
            $table->foreignId('id_producto')->constrained('producto')->onDelete('cascade'); // Clave foránea hacia 'producto'
            $table->foreignId('id_cliente')->constrained('clientes')->onDelete('cascade'); // Clave foránea hacia 'clientes'
            $table->timestamp('fecha_venta')->useCurrent(); // Fecha y hora de la venta, valor por defecto 'current timestamp'
            $table->decimal('total', 10, 2); // Columna para el total de la venta
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ventas'); // Eliminar la tabla 'ventas' al revertir la migración
    }
};

