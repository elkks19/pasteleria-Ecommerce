<?php

namespace App\Observers;

use App\Models\Pago;
use Carbon\Carbon;

class PagoObserver
{
    public function created(Pago $pago): void
    {
        $pago->fechaCreacion = Carbon::now();
        $pago->save();
    }
}
