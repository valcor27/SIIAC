<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class DomiciliosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('domicilios')->insert([
        [
            'id_domicilio' => 1,
            'calle' => 'Filadelfia',
            'colonia' => 'Barrio San Juan Coahuitxla',
            'codigo_postal' => '74480',
            'numero_exterior' => '13',
            'numero_interior' => null,
            'estatus' => 1,
            'fecha_creacion' => '2026-01-27 12:06:50'
        ] //
    ]);
}
}
