<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UscOfficial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'pospition',
        'college',
        'email',
        'image_url',
        'year_range',
    ];
}
