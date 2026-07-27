<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourRequest extends Model
{
    protected $fillable = [
        'tour_id',
        'name',
        'email',
        'phone',
        'date',
        'people',
        'message',
        'status'
    ];
    public function tour()
    {
    return $this->belongsTo(Tour::class); }
}
