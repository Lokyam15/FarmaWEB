<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id(); // ID autoincremental (clave primaria)
        $table->string('name', 100); // limitar el nombre a 100 caracteres
        $table->text('description')->nullable(); // Descripción opcional    
        $table->integer('stock')->unsigned(); // evitar valores negativos
        $table->decimal('price', 8, 2)->unsigned(); // evitar precios negativos

        $table->timestamps(); // created_at y updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
