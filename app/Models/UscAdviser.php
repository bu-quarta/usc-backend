<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UscAdviser extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'type',
        'image_url',
        'year_range',
    ];
}
