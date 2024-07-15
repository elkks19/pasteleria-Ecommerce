<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        // INFO: HAY 10 PRODUCTOS AQUI XD
        Producto::create([
            'nombre' => 'Torta de chocolate',
            'descripcion' => 'Torta con masa de chocolate y decorado de frutas',
            'precio' => 25,
            'user_id' => 2
        ]);

        Producto::create([
            'nombre' => 'Torta de vainilla',
            'descripcion' => 'Torta con masa de vainilla',
            'precio' => 50,
            'user_id' => 2
        ]);

        Producto::create([
            'nombre' => 'Eclair',
            'descripcion' => 'Un eclair',
            'precio' => 5,
            'user_id' => 2
        ]);

        Producto::create([
            'nombre' => 'Pan de chocolate',
            'descripcion' => 'pan pero de chocolate',
            'precio' => 2,
            'user_id' => 2
        ]);

        Producto::create([
            'nombre' => 'Torta de chocolate en vaso',
            'descripcion' => 'Torta de chocolate pero en un vaso',
            'precio' => 10,
            'user_id' => 2
        ]);

        Producto::create([
            'nombre' => 'Torta de vainilla en vaso',
            'descripcion' => 'Torta con masa de vainilla pero en un vaso',
            'precio' => 10,
            'user_id' => 2
        ]);

        Producto::create([
            'nombre' => 'Pan de banana',
            'descripcion' => 'Pan pero sabor a banana',
            'precio' => 4,
            'user_id' => 2
        ]);

        Producto::create([
            'nombre' => 'Queque de vainilla',
            'descripcion' => 'Queque de vainilla',
            'precio' => 20,
            'user_id' => 2
        ]);

        Producto::create([
            'nombre' => 'Queque de banana',
            'descripcion' => 'Si',
            'precio' => 20,
            'user_id' => 2
        ]);

        Producto::create([
            'nombre' => 'Queque de chocolate',
            'descripcion' => 'xd',
            'precio' => 20,
            'user_id' => 2
        ]);
    }
}
