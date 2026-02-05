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
    Schema::create('plazas', function (Blueprint $table) {
        $table->integer('id_plaza', true);
        $table->string('nombre', 100)->nullable();
        $table->string('codigoPlaza', 10);
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
        Schema::dropIfExists('plazas');
    }
};
