<?php

namespace App\Models;

use App\Observers\PagoObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy(PagoObserver::class)]
class Pago extends Model
{
    use HasFactory;
    use SoftDeletes;

    // TODO: REVISAR LA IDEA DE CANCELAR LOS PAGOS xd

    protected $table = 'pagos';

    public $timestamps = false;

    protected $attributes = [
        'fechaCancelacion' => null,
        'isCancelado' => false
    ];

    protected $fillable = [
        'montoTotal',
        'fechaCreacion',
    ];

    protected function casts(): array{
        return [
            'fechaCreacion' => 'datetime:d/m/Y H:i:s',
            'fechaCancelacion' => 'datetime:d/m/Y H:i:s'
        ];
    }


    public function divisa(): BelongsTo
    {
        return $this->belongsTo(Divisa::class);
    }

    public function metodo_de_pago(): BelongsTo
    {
        return $this->belongsTo(MetodoDePago::class);
    }

    public function cancelar(): void
    {
        $this->isCancelado = false;
        $this->fechaCancelacion = Carbon::now();
        $this->save();
    }
}
