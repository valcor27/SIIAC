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
    Schema::create('niveles_usuarios', function (Blueprint $table) {
        $table->integer('id_nivel_usuario', true);
        $table->string('nombre', 100)->unique();
        $table->tinyInteger('estatus')->default(1);
        $table->timestamp('fecha_creacion')->useCurrent();
        $table->timestamp('fecha_edicion')->nullable();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('niveles_usuarios');
    }
};
