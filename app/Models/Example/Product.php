<?php

namespace App\Models\Example;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // campos que se pueden rellenar por el usuario
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];

    // campos que se llenan automáticamente o
    // que se llenan por el sistema
    protected $hidden = [
        'id',
        'slug',
        'created_at',
        'updated_at'
    ];

    // campos que se deben convertir a un tipo de dato específico
    protected $casts = [
        'price' => 'float',
        'stock' => 'integer',
    ];
}
