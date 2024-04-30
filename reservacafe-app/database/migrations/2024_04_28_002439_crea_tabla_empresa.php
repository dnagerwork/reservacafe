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
        // Crear esquema empresa
        Schema::create('empresa', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', length: 50);
            $table->string('razoncomercial', length: 50);
            $table->char('ruc', length: 11);
            $table->string('telefono1', length: 20);
            $table->string('telefono2', length: 20);
            $table->string('direccion', length: 100);
            $table->datetime('fechareg');
            $table->tinyInteger('estado');
            $table->string('logo', length: 40);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Eliminar esquema empresa
        Schema::drop('empresa');
    }
};
