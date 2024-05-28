<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
        'slug',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function image(): string
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        } else {
            return asset('img/theme/animal.jpeg');
        }
    }
}
