<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UscPresidents extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'college',
        'year_range',
        'type',
    ];
}
