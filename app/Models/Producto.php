<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio'
    ];

    public function ventas(): BelongsToMany
    {
        return $this->belongsToMany(Producto::class, 'detalle_ventas', 'producto_id', 'venta_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
