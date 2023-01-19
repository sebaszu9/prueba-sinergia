<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departamentos;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newData = new Departamentos();
        $newData->id = 1;
        $newData->nombre = 'Antioquia';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Departamentos();
        $newData->id = 2;
        $newData->nombre = 'Boyacá';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Departamentos();
        $newData->id = 3;
        $newData->nombre = 'Caldas';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Departamentos();
        $newData->id = 4;
        $newData->nombre = 'Cundinamarca';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Departamentos();
        $newData->id = 5;
        $newData->nombre = 'Huila';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();
    }
}
