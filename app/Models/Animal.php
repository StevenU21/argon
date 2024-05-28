<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'color',
        'age',
        'image',
        'slug'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function image()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        } else {
            return asset('img/theme/animal.jpeg');
        }
    }
}
