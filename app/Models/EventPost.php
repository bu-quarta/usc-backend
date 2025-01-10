<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPost extends Model
{
    use HasFactory;

    protected $table = 'event_posts'; // Table name

    // Define the fillable fields
    protected $primaryKey = 'post_id'; // Specify the custom primary key
    protected $fillable = ['header', 'description', 'image_paths', 'status'];
    
    // Cast image_paths to an array from JSON
    protected $casts = [
        'image_paths' => 'array',
    ];
}