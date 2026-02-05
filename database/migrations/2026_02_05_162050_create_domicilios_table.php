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
    Schema::create('domicilios', function (Blueprint $table) {
        $table->integer('id_domicilio', true);
        $table->string('calle', 100)->nullable();
        $table->string('colonia', 100)->nullable();
        $table->string('codigo_postal', 10)->nullable();
        $table->string('numero_exterior', 10);
        $table->string('numero_interior', 10)->nullable();
        $table->tinyInteger('estatus');
        $table->timestamp('fecha_creacion')->useCurrent();
        $table->timestamp('fecha_edicion')->nullable();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domicilios');
    }
};
