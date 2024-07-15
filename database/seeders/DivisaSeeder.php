<?php

namespace Database\Seeders;

use App\Models\Divisa;
use Illuminate\Database\Seeder;

class DivisaSeeder extends Seeder
{
    public function run(): void
    {
        Divisa::create([
            'nombre' => 'dolar',
            'simbolo' => '$',
            'cambio' => 6.96
        ]);

        Divisa::create([
            'nombre' => 'libra',
            'simbolo' => '£',
            'cambio' => 8
        ]);

        Divisa::create([
            'nombre' => 'boliviano',
            'simbolo' => 'Bs',
            'cambio' => 1
        ]);
    }
}
