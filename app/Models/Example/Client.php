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
        'slug',
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
