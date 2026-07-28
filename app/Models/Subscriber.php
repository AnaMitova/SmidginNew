<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = [
        'first_name',
        'email',
        'country_iso',
        'country_code',
        'phone',
        'discount_code',
        'source',
        'ip_address',
        'status',
    ];

    /**
     * Phone number as submitted, prefixed with the selected country code.
     */
    public function getFullPhoneAttribute(): string
    {
        return trim($this->country_code . ' ' . $this->phone);
    }
}
