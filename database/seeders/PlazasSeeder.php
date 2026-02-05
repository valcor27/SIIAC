<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlazasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('plazas')->insert([
        ['id_plaza' => 1, 'nombre' => 'Director General', 'codigoPlaza' => 'ITS0001', 'estatus' => 1],
        ['id_plaza' => 2, 'nombre' => 'Director de Área', 'codigoPlaza' => 'ITS0009', 'estatus' => 1],
        ['id_plaza' => 3, 'nombre' => 'Subdirector de Área', 'codigoPlaza' => 'ITS0002', 'estatus' => 1],
        ['id_plaza' => 4, 'nombre' => 'Jefe de División', 'codigoPlaza' => 'ITS0003', 'estatus' => 1],
        ['id_plaza' => 5, 'nombre' => 'Jefe de Departamento', 'codigoPlaza' => 'ITS0004', 'estatus' => 1],
        ['id_plaza' => 6, 'nombre' => 'Ingeniero en Sistemas', 'codigoPlaza' => 'CF12027', 'estatus' => 1],
        ['id_plaza' => 7, 'nombre' => 'Técnico Especializado', 'codigoPlaza' => 'CF33116', 'estatus' => 1],
        ['id_plaza' => 8, 'nombre' => 'Coordinador de Promociones', 'codigoPlaza' => 'A06009', 'estatus' => 1],
        ['id_plaza' => 9, 'nombre' => 'Analista Especializado', 'codigoPlaza' => 'P01002', 'estatus' => 1],
        ['id_plaza' => 10, 'nombre' => 'Médico General', 'codigoPlaza' => 'P13006', 'estatus' => 1],
        ['id_plaza' => 11, 'nombre' => 'Psicólogo', 'codigoPlaza' => 'P16004', 'estatus' => 1],
        ['id_plaza' => 12, 'nombre' => 'Jefe de Oficina', 'codigoPlaza' => 'A01001', 'estatus' => 1],
        ['id_plaza' => 13, 'nombre' => 'Programador', 'codigoPlaza' => 'T06018', 'estatus' => 1],
        ['id_plaza' => 14, 'nombre' => 'Secretaría de Director General', 'codigoPlaza' => 'CF53455', 'estatus' => 1],
        ['id_plaza' => 15, 'nombre' => 'Secretaría de Director', 'codigoPlaza' => 'CF34006', 'estatus' => 1],
        ['id_plaza' => 16, 'nombre' => 'Analista Técnico', 'codigoPlaza' => 'P01001', 'estatus' => 1],
        ['id_plaza' => 17, 'nombre' => 'Secretaría de Subdirector', 'codigoPlaza' => 'CF34280', 'estatus' => 1],
        ['id_plaza' => 18, 'nombre' => 'Auxiliar de Auditor', 'codigoPlaza' => 'P05009', 'estatus' => 1],
        ['id_plaza' => 19, 'nombre' => 'Capturista', 'codigoPlaza' => 'T06027', 'estatus' => 1],
        ['id_plaza' => 20, 'nombre' => 'Chofer de Director', 'codigoPlaza' => 'CF53453', 'estatus' => 1],
        ['id_plaza' => 21, 'nombre' => 'Operador de Equipo T.P. Esp.', 'codigoPlaza' => 'S05033', 'estatus' => 1],
        ['id_plaza' => 22, 'nombre' => 'Laboratorista', 'codigoPlaza' => 'T16005', 'estatus' => 1],
        ['id_plaza' => 23, 'nombre' => 'Dibujante', 'codigoPlaza' => 'T08003', 'estatus' => 1],
        ['id_plaza' => 24, 'nombre' => 'Secretaría de Jefe de Departamento', 'codigoPlaza' => 'CF34004', 'estatus' => 1],
        ['id_plaza' => 25, 'nombre' => 'Bibliotecario', 'codigoPlaza' => 'T05003', 'estatus' => 1],
        ['id_plaza' => 26, 'nombre' => 'Técnico en Mantenimiento', 'codigoPlaza' => 'S08011', 'estatus' => 1],
        ['id_plaza' => 27, 'nombre' => 'Oficial de Mantenimiento General', 'codigoPlaza' => 'S07009', 'estatus' => 1],
        ['id_plaza' => 28, 'nombre' => 'Almacenista', 'codigoPlaza' => 'A03004', 'estatus' => 1],
        ['id_plaza' => 29, 'nombre' => 'Auxiliar Administrativo', 'codigoPlaza' => 'A01024', 'estatus' => 1],
        ['id_plaza' => 30, 'nombre' => 'Intendente', 'codigoPlaza' => 'S06002', 'estatus' => 1],
        ['id_plaza' => 31, 'nombre' => 'Taquimecanógrafa', 'codigoPlaza' => 'A08004', 'estatus' => 1],
        ['id_plaza' => 32, 'nombre' => 'Chofer', 'codigoPlaza' => 'S13008', 'estatus' => 1],
        ['id_plaza' => 33, 'nombre' => 'Vigilante', 'codigoPlaza' => 'S14001', 'estatus' => 1],
        ['id_plaza' => 34, 'nombre' => 'Profesor Titular "A"', 'codigoPlaza' => 'E13013', 'estatus' => 1],
        ['id_plaza' => 35, 'nombre' => 'Profesor Titular "B"', 'codigoPlaza' => 'E13014', 'estatus' => 1],
        ['id_plaza' => 36, 'nombre' => 'Profesor Titular "C"', 'codigoPlaza' => 'E13015', 'estatus' => 1],
        ['id_plaza' => 37, 'nombre' => 'Profesor Asociado "A"', 'codigoPlaza' => 'E13010', 'estatus' => 1],
        ['id_plaza' => 38, 'nombre' => 'Profesor Asociado "B"', 'codigoPlaza' => 'E13011', 'estatus' => 1],
        ['id_plaza' => 39, 'nombre' => 'Profesor Asociado "C"', 'codigoPlaza' => 'E13012', 'estatus' => 1],
        ['id_plaza' => 40, 'nombre' => 'Profesor Asistente "A"', 'codigoPlaza' => 'E13007', 'estatus' => 1],
        ['id_plaza' => 41, 'nombre' => 'Profesor Asistente "B"', 'codigoPlaza' => 'E13008', 'estatus' => 1],
        ['id_plaza' => 42, 'nombre' => 'Profesor Asistente "C"', 'codigoPlaza' => 'E13009', 'estatus' => 1],
        ['id_plaza' => 43, 'nombre' => 'Técnico Docente Asociado "A"', 'codigoPlaza' => 'E13005', 'estatus' => 1],
        ['id_plaza' => 44, 'nombre' => 'Técnico Asociado "B"', 'codigoPlaza' => 'E13006', 'estatus' => 1],
        ['id_plaza' => 45, 'nombre' => 'Profesor Asignatura "A"', 'codigoPlaza' => 'E13001', 'estatus' => 1],
        ['id_plaza' => 46, 'nombre' => 'Profesor Asignatura "B"', 'codigoPlaza' => 'E13002', 'estatus' => 1],
        ['id_plaza' => 47, 'nombre' => 'Técnico Docente Asignatura "A"', 'codigoPlaza' => 'E13003', 'estatus' => 1],
        ['id_plaza' => 48, 'nombre' => 'Técnico Docente Asignatura "B"', 'codigoPlaza' => 'E13004', 'estatus' => 1],
    ]); //
}
}
