<?php

namespace App\Models\Example;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'image',
        'email',
        'phone',
        'gender',
    ];

    protected $hidden = [
        'id',
        'slug',
        'created_at',
        'updated_at',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
