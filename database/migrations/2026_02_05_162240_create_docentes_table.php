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
    Schema::create('docentes', function (Blueprint $table) {
        $table->integer('id_docente', true);
        $table->integer('empleados_empleado_id');
        $table->string('clave_docente', 6)->unique()->nullable();
        $table->integer('usuarios_usuario_id');
        $table->timestamp('fecha_creacion')->useCurrent();
        $table->timestamp('fecha_edicion')->nullable();

        $table->foreign('empleados_empleado_id')->references('id_empleado')->on('empleados');
        $table->foreign('usuarios_usuario_id')->references('id_usuario')->on('usuarios');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
