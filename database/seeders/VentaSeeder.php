<?php

namespace Database\Seeders;

use App\Models\Venta;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VentaSeeder extends Seeder
{
    public function run(): void
    {
        // INFO: EXISTEN 3 POSIBLES CLIENTES

        Venta::create([
            'cliente_id' => 1,
            'pago_id' => 1,
            'envio_id' => 1,
            'encargado_id' => 2,
            'fechaVenta' => Carbon::now()->addDay(-3),
            'totalCobrado' => 10
        ]);

        Venta::create([
            'cliente_id' => 1,
            'pago_id' => 2,
            'envio_id' => 2,
            'encargado_id' => 2,
            'fechaVenta' => Carbon::now()->addDay(-2),
            'totalCobrado' => 20
        ]);

        Venta::create([
            'cliente_id' => 2,
            'pago_id' => 3,
            'envio_id' => 3,
            'encargado_id' => 2,
            'fechaVenta' => Carbon::now()->addDay(-1),
            'totalCobrado' => 20
        ]);

        Venta::create([
            'cliente_id' => 2,
            'pago_id' => 4,
            'envio_id' => 4,
            'encargado_id' => 2,
            'fechaVenta' => Carbon::now(),
            'totalCobrado' => 40
        ]);

        Venta::create([
            'cliente_id' => 3,
            'pago_id' => 5,
            'envio_id' => 5,
            'encargado_id' => 2,
            'fechaVenta' => Carbon::now(),
            'totalCobrado' => 30
        ]);

        Venta::create([
            'cliente_id' => 3,
            'pago_id' => 6,
            'envio_id' => 6,
            'encargado_id' => 2,
            'fechaVenta' => Carbon::now()->addDay(-7),
            'totalCobrado' => 10
        ]);
    }
}
