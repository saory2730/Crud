<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            // Aumentamos el rango del campo precio
            $table->decimal('precio', 15, 2)->change();
        });
    }

    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            // Volvemos al rango anterior
            $table->decimal('precio', 8, 2)->change(); 
        });
    }
};
