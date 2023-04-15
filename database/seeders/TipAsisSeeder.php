<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class TipAsisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        FacadesDB::table('tipo_asistencias')->insert([
            'tipo' => ('Asistió'),
            'descripcion' => ('El alumno asiste a clases con regularidad'),
        ]);

        FacadesDB::table('tipo_asistencias')->insert([
            'tipo' => ('Faltó'),
            'descripcion' => ('El alumno falta uno o más días, o asiste de manera intermitente'),
        ]);

        FacadesDB::table('tipo_asistencias')->insert([
            'tipo' => ('Justificado'),
            'descripcion' => ('Los alumnos podrán justificar su falta de asistencia a clases por causas personales'),
        ]);
        
        
    }
}
