<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_post_id',
        'rating',
        'user_id',
    ];

    // Optionally, define relationships (if any)
}
