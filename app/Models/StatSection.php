<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatSection extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'order',
    ];
}
