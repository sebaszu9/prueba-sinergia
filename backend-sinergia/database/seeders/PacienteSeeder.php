<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paciente;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newData = new Paciente();
        $newData->id = 1;
        $newData->tipo_documento_id = 2;
        $newData->numero_documento = 1003812342;
        $newData->nombre1 = 'Juan';
        $newData->nombre2 = 'Sebastian';
        $newData->apellido1 = 'Murcia';
        $newData->apellido2 = 'Zuñiga';
        $newData->genero_id = 1;
        $newData->departamento_id = 5;
        $newData->municipio_id = 9;
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Paciente();
        $newData->id = 2;
        $newData->tipo_documento_id = 2;
        $newData->numero_documento = 1007717110;
        $newData->nombre1 = 'Melisa';
        $newData->nombre2 = 'Roa';
        $newData->apellido1 = 'Roa';
        $newData->apellido2 = 'Hernandez';
        $newData->genero_id = 2;
        $newData->departamento_id = 3;
        $newData->municipio_id = 5;
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Paciente();
        $newData->id = 3;
        $newData->tipo_documento_id = 2;
        $newData->numero_documento = 1003862347;
        $newData->nombre1 = 'Camilo';
        $newData->nombre2 = 'Andres';
        $newData->apellido1 = 'Murcia';
        $newData->apellido2 = 'Zuñiga';
        $newData->genero_id = 1;
        $newData->departamento_id = 1;
        $newData->municipio_id = 1;
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Paciente();
        $newData->id = 4;
        $newData->tipo_documento_id = 2;
        $newData->numero_documento = 7693233;
        $newData->nombre1 = 'Nelson';
        $newData->nombre2 = 'Alfaro';
        $newData->apellido1 = 'Murcia';
        $newData->apellido2 = 'Collazos';
        $newData->genero_id = 1;
        $newData->departamento_id = 2;
        $newData->municipio_id = 4;
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Paciente();
        $newData->id = 5;
        $newData->tipo_documento_id = 2;
        $newData->numero_documento = 55172527;
        $newData->nombre1 = 'Diana';
        $newData->nombre2 = 'Patricia';
        $newData->apellido1 = 'Zuñiga';
        $newData->apellido2 = 'Muñoz';
        $newData->genero_id = 2;
        $newData->departamento_id = 2;
        $newData->municipio_id = 3;
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();
    }
}
