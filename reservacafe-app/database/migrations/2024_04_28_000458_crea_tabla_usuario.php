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
        //  Creando la tabla de usuario para almacenarlos posteriormente
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('usuario', length: 50);
            $table->string('contrasena', length: 50);
            $table->string('nombre', length:50);
            $table->string('apellido_paterno', length:50);
            $table->string('apellido_materno', length:50);
            $table->string('direccion', length:150);
            $table->string('telefono', length: 12);
            $table->string('telefono_movil', length: 12);
            $table->string('pasaporte', length:30);
            $table->char('dni', length: 8);
            $table->string('ruc', length: 11);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::drop('usuario');
    }
};
