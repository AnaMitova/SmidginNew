<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'city',
        'type',
        'name',
        'address',
        'hours',
        'phone',
        'image',
        'link',
    ];
}