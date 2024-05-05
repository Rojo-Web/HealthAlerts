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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('paciente_id')->nullable(); // Definición de la columna responsable_id
            $table->foreign('paciente_id')->references('cedula')->on('pacientes')->nullOnDelete(); // Clave foránea responsable_id
            $table->string('medioComunicacion')->nullable();
            $table->string('descripcion')->nullable();
            $table->timestamp('fechaRegistro')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
