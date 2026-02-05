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
    Schema::create('alumnos', function (Blueprint $table) {
        $table->integer('id_alumno', true);
        $table->string('matricula', 50)->nullable();
        $table->integer('semestre');
        $table->integer('carrera');
        $table->integer('usuarios_usuario_id');
        $table->timestamp('fecha_creacion')->useCurrent();
        $table->timestamp('fecha_edicion')->nullable();

        $table->foreign('usuarios_usuario_id')->references('id_usuario')->on('usuarios');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
