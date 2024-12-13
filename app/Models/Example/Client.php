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
    ];
}
