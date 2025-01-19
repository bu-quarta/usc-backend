<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPost extends Model
{
    use HasFactory;

    protected $table = 'event_posts'; // Table name

    protected $casts = [
        'date_time' => 'datetime',
    ];

    // Define the fillable fields
    protected $fillable = [
        'header',
        'description',
        'date_time',
        'location',
        'image_path',
        'status'
    ];
}
