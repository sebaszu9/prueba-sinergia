<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoDocumento;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newData = new TipoDocumento();
        $newData->id = 1;
        $newData->nombre_documento = 'Tarjeta de identidad';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new TipoDocumento();
        $newData->id = 2;
        $newData->nombre_documento = 'Cédula de ciudadanía';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new TipoDocumento();
        $newData->id = 3;
        $newData->nombre_documento = 'Cédula de extranjería';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();

        $newData = new TipoDocumento();
        $newData->id = 4;
        $newData->nombre_documento = 'Pasaporte';
        $newData->created_at = '2023-01-18 15:49:46';
        $newData->updated_at = '2023-01-18 15:49:46';
        $newData->save();
    }
}
