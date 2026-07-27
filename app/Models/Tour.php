<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
    'title',
    'category',
    'duration',
    'price',
    'availability',
    'capacity',
    'description',
    'image'
    ];

    public function requests(){
        return $this->hasMany(TourRequest::class);
    }
}


