<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceSection extends Model
{
    protected $fillable = [
        'icon',
        'title',
        'description',
        'features',
        'order',
    ];
    protected $casts = [
        'features' => 'array',
    ];
}
