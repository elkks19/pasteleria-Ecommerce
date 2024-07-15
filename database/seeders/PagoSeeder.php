<?php

namespace Database\Seeders;

use App\Models\Pago;
use Illuminate\Database\Seeder;

class PagoSeeder extends Seeder
{
    public function run(): void
    {
        // INFO: EXISTEN 6 PAGOS, 1 POR CADA VENTA QUE SE REALIZO
        //
        // INFO: LOS METODOS DE PAGO SON:
        // 1 => EFECTIVO
        // 2 => QR
        // 3 => TARJETA
        //
        // INFO: MIENTRAS QUE LAS POSIBLES DIVISAS SON:
        // 1 => DOLAR
        // 2 => LIBRA
        // 3 => BOLIVIANO

        Pago::create([
            'divisa_id' => 3,
            'metodo_de_pago_id' => 1,
            'montoTotal' => 10
        ]);

        Pago::create([
            'divisa_id' => 3,
            'metodo_de_pago_id' => 1,
            'montoTotal' => 20
        ]);

        Pago::create([
            'divisa_id' => 3,
            'metodo_de_pago_id' => 2,
            'montoTotal' => 20
        ]);

        Pago::create([
            'divisa_id' => 3,
            'metodo_de_pago_id' => 2,
            'montoTotal' => 30
        ]);

        Pago::create([
            'divisa_id' => 3,
            'metodo_de_pago_id' => 3,
            'montoTotal' => 25
        ]);

        Pago::create([
            'divisa_id' => 2,
            'metodo_de_pago_id' => 3,
            'montoTotal' => 10
        ]);
    }
}
