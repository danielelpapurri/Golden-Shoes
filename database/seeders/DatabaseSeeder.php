<?php

namespace Database\Seeders;

use App\Models\Zapato;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Producto inicial Golden Shoes
        Zapato::create([
            'nombre'      => 'Flame X — Edición Especial',
            'marca'       => 'Golden Shoes',
            'color'       => 'Rojo',
            'talla'       => '42',
            'material'    => 'Cuero genuino',
            'genero'      => 'Hombre',
            'categoria'   => 'Deportivo',
            'precio'      => 265000,
            'stock'       => 15,
            'descripcion' => 'Lo más nuevo de la colección Golden Shoes. Diseño exclusivo 2026 con suela reforzada y cuero genuino importado.',
            'imagen_url'  => 'https://images.unsplash.com/photo-1539185441755-769473a23570?w=500',
        ]);

        Zapato::create([
            'nombre'      => 'Dark Edition Elite',
            'marca'       => 'Golden Shoes',
            'color'       => 'Negro',
            'talla'       => '40',
            'material'    => 'Cuero genuino',
            'genero'      => 'Unisex',
            'categoria'   => 'Casual',
            'precio'      => 248000,
            'stock'       => 8,
            'descripcion' => 'Cuero genuino negro mate. Perfecto para cada ocasión, desde el trabajo hasta una salida casual.',
            'imagen_url'  => 'https://images.unsplash.com/photo-1491553895911-0055eca6402d?w=500',
        ]);
    }
}
