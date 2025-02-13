<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id('id_producto');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('categoria');
            $table->enum('talla', ['S', 'M', 'L', 'XL']);
            $table->string('color');
            $table->decimal('precio', 10, 2);
            $table->integer('stock');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
