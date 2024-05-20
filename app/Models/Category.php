<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function getNameAttribute($value)
    {
        return Str::upper($value);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
