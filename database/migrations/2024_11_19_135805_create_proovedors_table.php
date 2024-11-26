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
        Schema::create('proovedors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30) -> unique();
            $table->string('direccion', 50);
            $table->string('telefono', 15) -> unique();
            $table->string('email', 30) -> unique();
            $table->string('contacto', 30);
            $table->string('descripcion', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proovedors');
    }
};
