<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        Cliente::create([
            'nombre' => 'Prueba1',
            'nit' => 3429164
        ]);

        Cliente::create([
            'nombre' => 'Prueba2',
            'nit' => 3429133012
        ]);

        Cliente::create([
            'nombre' => 'Prueba3',
            'nit' => 9101085
        ]);
    }
}
