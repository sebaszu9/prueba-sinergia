<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DepartamentoSeeder;
use Database\Seeders\MunicipioSeeder;
use Database\Seeders\GeneroSeeder;
use Database\Seeders\TipoDocumentoSeeder;
use Database\Seeders\PacienteSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            DepartamentoSeeder::class,
            MunicipioSeeder::class,
            GeneroSeeder::class,
            TipoDocumentoSeeder::class,
            PacienteSeeder::class
        ]);
    }
}
