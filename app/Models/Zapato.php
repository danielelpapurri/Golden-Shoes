<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zapato extends Model
{
    protected $table = 'zapatos';

    protected $fillable = [
        'nombre',
        'marca',
        'talla',
        'color',
        'precio',
        'stock',
        'descripcion',
    ];
}
