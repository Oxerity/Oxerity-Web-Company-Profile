<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestimonialSection extends Model
{
    protected $fillable = [
        'name',
        'role',
        'message',
        'rating',
        'avatar',
        'order',
    ];
}
