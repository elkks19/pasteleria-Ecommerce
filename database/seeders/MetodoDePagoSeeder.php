<?php

namespace Database\Seeders;

use App\Models\MetodoDePago;
use Illuminate\Database\Seeder;

class MetodoDePagoSeeder extends Seeder
{
    public function run(): void
    {
        MetodoDePago::create([
            'nombre' => 'efectivo'
        ]);

        MetodoDePago::create([
            'nombre' => 'qr'
        ]);

        MetodoDePago::create([
            'nombre' => 'tarjeta'
        ]);
    }
}
