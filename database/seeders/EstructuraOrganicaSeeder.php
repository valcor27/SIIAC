<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstructuraOrganicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('estructura_organica')->insert([
        ['id_unidad' => 1, 'nombre' => 'Dirección General', 'claveUnidad' => '10000', 'estatus' => 1],
        ['id_unidad' => 2, 'nombre' => 'Dirección Académica', 'claveUnidad' => '11000', 'estatus' => 1],
        ['id_unidad' => 3, 'nombre' => 'Dirección de Planeación y Vinculación', 'claveUnidad' => '12000', 'estatus' => 1],
        ['id_unidad' => 4, 'nombre' => 'Subdirección de Servicios Administrativos', 'claveUnidad' => '10100', 'estatus' => 1],
        ['id_unidad' => 5, 'nombre' => 'Subdirección de Planeación', 'claveUnidad' => '12100', 'estatus' => 1],
        ['id_unidad' => 6, 'nombre' => 'Subdirección de Vinculación', 'claveUnidad' => '12200', 'estatus' => 1],
        ['id_unidad' => 7, 'nombre' => 'Subdirección de Posgrado e Investigación', 'claveUnidad' => '11100', 'estatus' => 1],
        ['id_unidad' => 8, 'nombre' => 'Subdirección Académica', 'claveUnidad' => '11200', 'estatus' => 1],
        ['id_unidad' => 9, 'nombre' => 'Departamento de Personal', 'claveUnidad' => '10110', 'estatus' => 1],
        ['id_unidad' => 10, 'nombre' => 'Departamento de Recursos Financieros', 'claveUnidad' => '10120', 'estatus' => 1],
        ['id_unidad' => 11, 'nombre' => 'Departamento de Recursos Materiales y Servicios', 'claveUnidad' => '10130', 'estatus' => 1],
        ['id_unidad' => 12, 'nombre' => 'Departamento de Planeación y Programación', 'claveUnidad' => '12110', 'estatus' => 1],
        ['id_unidad' => 13, 'nombre' => 'Departamento de Estadística y Evaluación', 'claveUnidad' => '12120', 'estatus' => 1],
        ['id_unidad' => 14, 'nombre' => 'Departamento de Control Escolar', 'claveUnidad' => '12130', 'estatus' => 1],
        ['id_unidad' => 15, 'nombre' => 'Departamento de Vinculación', 'claveUnidad' => '12210', 'estatus' => 1],
        ['id_unidad' => 16, 'nombre' => 'Departamento de Difusión y Concertación', 'claveUnidad' => '12220', 'estatus' => 1],
        ['id_unidad' => 17, 'nombre' => 'Departamento de Residencias Profesionales y Servicio Social', 'claveUnidad' => '12230', 'estatus' => 1],
        ['id_unidad' => 18, 'nombre' => 'Departamento de Posgrado e Investigación', 'claveUnidad' => '11110', 'estatus' => 1],
        ['id_unidad' => 19, 'nombre' => 'División de Ingeniería Bioquímica', 'claveUnidad' => '11201', 'estatus' => 1],
        ['id_unidad' => 20, 'nombre' => 'División de Ingeniería Electromecánica', 'claveUnidad' => '11202', 'estatus' => 1],
        ['id_unidad' => 21, 'nombre' => 'División de Gastronomía', 'claveUnidad' => '11203', 'estatus' => 1],
        ['id_unidad' => 22, 'nombre' => 'División de Ingeniería en Sistemas Computacionales', 'claveUnidad' => '11204', 'estatus' => 1],
        ['id_unidad' => 23, 'nombre' => 'División de Ingeniería Industrial', 'claveUnidad' => '11205', 'estatus' => 1],
        ['id_unidad' => 24, 'nombre' => 'División de Ingeniería Mecatrónica', 'claveUnidad' => '11206', 'estatus' => 1],
        ['id_unidad' => 25, 'nombre' => 'Departamento de Desarrollo Académico', 'claveUnidad' => '11210', 'estatus' => 1],
        ['id_unidad' => 26, 'nombre' => 'Departamento de Ciencias Básicas', 'claveUnidad' => '11220', 'estatus' => 1],
        ['id_unidad' => 27, 'nombre' => 'Compras', 'claveUnidad' => '10140', 'estatus' => 1],
    ]); //
}
}
