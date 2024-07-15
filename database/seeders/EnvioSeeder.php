<?php

namespace Database\Seeders;

use App\Models\Envio;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EnvioSeeder extends Seeder
{
    public function run(): void
    {
        // INFO: EXISTEN 6 ENVIOS PARA 6 VENTAS,
        // EL ANTEPENULTIMO ENVIO NO HA SIDO ENVIADO TODAVI
        // LOS ULTIMOS 2 ENVIOS NO HAN SIDO RECIBIDOS TODAVIA

        Envio::create([
            'fechaEnvio' => Carbon::now()->addDays(-6),
            'fechaRecepcion' => Carbon::now()->addDays(-5),
            'direccion' => 'calle murillo #344',
            'costo' => 5
        ]);

        Envio::create([
            'fechaEnvio' => Carbon::now()->addDays(-7),
            'fechaRecepcion' => Carbon::now()->addDays(-7),
            'direccion' => 'avenida camacho #1515',
            'costo' => 20
        ]);

        Envio::create([
            'fechaEnvio' => Carbon::now()->addDays(-4),
            'fechaRecepcion' => Carbon::now()->addDays(-2),
            'direccion' => 'calle murguia #123',
            'costo' => 7
        ]);

        Envio::create([
            'direccion' => 'calle pacajes #341',
            'costo' => 4
        ]);

        Envio::create([
            'fechaenvio' => carbon::now(),
            'direccion' => 'calle armentia #645',
            'costo' => 5
        ]);

        Envio::create([
            'fechaenvio' => carbon::now()->adddays(-1),
            'direccion' => 'avenida sucre #1212',
            'costo' => 7
        ]);
    }
}
