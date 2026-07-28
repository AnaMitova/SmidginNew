<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromotionBanner extends Model
{
    protected $fillable = [
    'text',
    'link',
    'button_text',
    'background_color',
    'text_color',
    'active',
];
}
