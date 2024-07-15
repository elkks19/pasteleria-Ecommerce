<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ClienteSeeder::class,
            DivisaSeeder::class,
            MetodoDePagoSeeder::class,
            ProductoSeeder::class,
            EnvioSeeder::class,
            PagoSeeder::class,
            VentaSeeder::class,
        ]);
    }
}
