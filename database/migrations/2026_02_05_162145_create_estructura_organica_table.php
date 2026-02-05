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
    Schema::create('estructura_organica', function (Blueprint $table) {
        $table->integer('id_unidad', true);
        $table->string('nombre', 100)->unique();
        $table->string('claveUnidad', 10);
        $table->integer('id_jefe_usuarios_id_usuario')->nullable();
        $table->tinyInteger('estatus')->default(1);
        $table->timestamp('fecha_creacion')->useCurrent();
        $table->timestamp('fecha_edicion')->nullable();

        $table->foreign('id_jefe_usuarios_id_usuario')->references('id_usuario')->on('usuarios');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estructura_organica');
    }
};
