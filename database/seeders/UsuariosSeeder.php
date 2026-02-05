<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('usuarios')->insert([
        [
            'id_usuario' => 1,
            'niveles_usuarios_id_nivel_usuario' => 1,
            'nombre' => 'Joan Santiago',
            'primero_apellido' => 'Valle',
            'segundo_apellido' => 'Corona',
            'genero' => 1,
            'email_institucional' => 'valle_corona@outlook.com',
            'password_hash' => 'ironman27',
            'estatus' => 1,
            'domicilio' => 1,
            'fecha_creacion' => '2026-01-27 12:24:20'
        ] //
    ]);
}
}
