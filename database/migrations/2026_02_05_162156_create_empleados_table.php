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
    Schema::create('empleados', function (Blueprint $table) {
        $table->integer('id_empleado', true);
        $table->string('clave_emplado', 10);
        $table->string('rfc', 15);
        $table->string('curp', 20);
        $table->string('telefono_celular', 20)->nullable();
        $table->string('email_personal', 100)->nullable();
        $table->string('email_institucional', 100)->nullable();
        $table->date('fecha_alta')->nullable();
        $table->integer('plaza');
        $table->integer('unidad_adscrita_real');
        $table->integer('unidad_adscrita_reportada');
        $table->timestamp('fecha_creacion')->useCurrent();
        $table->timestamp('fecha_edicion')->nullable();

        // Foreign Keys
        $table->foreign('plaza')->references('id_plaza')->on('plazas');
        $table->foreign('unidad_adscrita_real')->references('id_unidad')->on('estructura_organica');
        $table->foreign('unidad_adscrita_reportada')->references('id_unidad')->on('estructura_organica');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
