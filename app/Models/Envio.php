<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Envio extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'envios';

    protected $fillable = [
        'direccion',
        'costo'
    ];

    public function recibido(): void
    {
        $this->fechaRecepcion = Carbon::now();
        $this->save();
    }

    public function enviado(): void
    {
        $this->fechaEnvio = Carbon::now();
        $this->save();
    }

    protected function casts(): array{
        return [
            'fechaEnvio' => 'datetime:d/m/Y H:i:s',
            'fechaRecepcion' => 'datetime:d/m/Y H:i:s'
        ];
    }

    public function venta(): BelongsTo
    {
        return $this->belongsTo(Venta::class);
    }

}
