<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->string('nombre', 100);
            $table->string('email', 100);
            $table->string('telefono', 20);
            $table->string('direccion', 100);
            $table->timestamp('fecha_registro')->useCurrent();
            $table->string('password', 100);
            $table->enum('rol', ['admin', 'user']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
