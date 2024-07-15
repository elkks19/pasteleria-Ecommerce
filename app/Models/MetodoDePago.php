<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class MetodoDePago extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'metodos_de_pago';

    protected $fillable = [
        'nombre'
    ];

    public function pagos(): HasMany
    {
        return $this->hasMany(Pago::class);
    }
}
