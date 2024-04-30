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
        // Crear la tabla de rol
        Schema::create('rol', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', length: 50);
            $table->char('sigla', length: 4);
            $table->dateTime('fechareg');
            $table->dateTime('fechaup');
            $table->tinyInteger('estado');
            $table->tinyInteger('agente');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Eliminar la tabla de rol
        Schema::drop('rol');
    }
};
