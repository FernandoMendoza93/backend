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
        Schema::create('tenis', function (Blueprint $table) {
            $table->id();
            $table-> string('nombre');
            $table-> string('descripcion');
            $table-> string('tallas');
            $table-> string('precio');
            $table-> string('stock');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenis');
    }
};
