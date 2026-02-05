<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelesUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('niveles_usuarios')->insert([
        ['id_nivel_usuario' => 1, 'nombre' => 'Administrador', 'estatus' => 1],
        ['id_nivel_usuario' => 2, 'nombre' => 'Director_general', 'estatus' => 1],
        ['id_nivel_usuario' => 3, 'nombre' => 'Jefe_Departamento', 'estatus' => 1],
        ['id_nivel_usuario' => 4, 'nombre' => 'Directores', 'estatus' => 1],
        ['id_nivel_usuario' => 5, 'nombre' => 'Subdirectores', 'estatus' => 1],
        ['id_nivel_usuario' => 6, 'nombre' => 'Docentes', 'estatus' => 1],
        ['id_nivel_usuario' => 7, 'nombre' => 'Administrativos', 'estatus' => 1],
        ['id_nivel_usuario' => 8, 'nombre' => 'Alumnos', 'estatus' => 1],
    ]); //
}
}
