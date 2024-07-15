<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Divisa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'divisas';

    protected $fillable = [
        'nombre',
        'simbolo',
        'cambio',
    ];

    public function pagos(): HasMany
    {
        return $this->hasMany(Pago::class);
    }
}
