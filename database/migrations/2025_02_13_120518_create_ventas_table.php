<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('id_venta');
            $table->foreignId('id_producto')->constrained('producto');
            $table->foreignId('id_cliente')->constrained('clientes');
            $table->timestamp('fecha_venta')->useCurrent();
            $table->decimal('total', 10, 2);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
