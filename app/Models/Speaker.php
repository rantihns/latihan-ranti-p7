<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $fillable = [
        'name',
        'category',
        'power_rating',
        'impedance',
        'frequency_response',
        'price',
        'description',
        'image',
    ];
}
