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
        Schema::create('usuarios', function (Blueprint $table) {
            // Clave primaria autoincremental
            $table->integer('id_usuario', true);
            
            // Relaciones (Foreign Keys)
            $table->integer('niveles_usuarios_id_nivel_usuario');
            $table->integer('domicilio');

            // Datos personales
            $table->string('nombre', 100);
            $table->string('primero_apellido', 150);
            $table->string('segundo_apellido', 150)->nullable();
            $table->tinyInteger('genero');

            // Credenciales y contacto
            $table->string('email_institucional', 150)->unique();
            $table->string('email_personal', 100)->nullable();
            $table->string('password_hash', 255);
            
            // Estado y auditoría
            $table->tinyInteger('estatus')->default(1);
            $table->timestamp('fecha_creacion')->useCurrent();
            $table->timestamp('fecha_edicion')->nullable();

            // Definición de restricciones de clave foránea
            $table->foreign('niveles_usuarios_id_nivel_usuario', 'usuarios_ibfk_1')
                  ->references('id_nivel_usuario')
                  ->on('niveles_usuarios');

            $table->foreign('domicilio', 'usuarios_ibfk_2')
                  ->references('id_domicilio')
                  ->on('domicilios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
