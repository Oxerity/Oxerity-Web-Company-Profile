<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'badge_text',
        'title_primary',
        'title_secondary',
        'description',
        'image',
    ];

    
}
