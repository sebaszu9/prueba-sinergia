<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genero;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newData = new Genero();
        $newData->id = 1;
        $newData->descripcion = 'Hombre';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Genero();
        $newData->id = 2;
        $newData->descripcion = 'Mujer';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new Genero();
        $newData->id = 3;
        $newData->descripcion = 'No específica';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();
    }
}
