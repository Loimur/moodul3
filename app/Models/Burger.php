<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Burger extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'image_path',
        'description',
        'ingredients',
        'is_gf',
        'is_vegetarian',
        'is_vegan',
        'hotness'
    ];
}
