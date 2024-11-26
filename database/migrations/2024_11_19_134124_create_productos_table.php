<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('product', 30) -> unique();
            $table->decimal('price', 10, 2);
            $table->integer('stock');  
            $table->foreignId('id_categoria')->constrained('categorias')->onUpdate('cascade')->onDelete('cascade'); 
            $table->foreignId('id_proveedor')->constrained('proovedors')->onUpdate('cascade')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};