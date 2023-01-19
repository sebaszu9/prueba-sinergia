<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipios;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newData = new Municipios();
        $newData->id = 1;
        $newData->departamento_id = 1;
        $newData->nombre = 'Medellin';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Municipios();
        $newData->id = 2;
        $newData->departamento_id = 1;
        $newData->nombre = 'Guatapé';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Municipios();
        $newData->id = 3;
        $newData->departamento_id = 2;
        $newData->nombre = 'Tunja';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Municipios();
        $newData->id = 4;
        $newData->departamento_id = 2;
        $newData->nombre = 'Villa de Leyva';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Municipios();
        $newData->id = 5;
        $newData->departamento_id = 3;
        $newData->nombre = 'Manizales';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Municipios();
        $newData->id = 6;
        $newData->departamento_id = 3;
        $newData->nombre = 'Neira';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Municipios();
        $newData->id = 7;
        $newData->departamento_id = 4;
        $newData->nombre = 'Bogotá';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Municipios();
        $newData->id = 8;
        $newData->departamento_id = 4;
        $newData->nombre = 'Zipaquirá';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Municipios();
        $newData->id = 9;
        $newData->departamento_id = 5;
        $newData->nombre = 'Neiva';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Municipios();
        $newData->id = 10;
        $newData->departamento_id = 5;
        $newData->nombre = 'Pitalito';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();
    }
}
