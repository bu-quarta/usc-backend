<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsUpdate extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_path',
        'status',
    ];

    // Define the relationship with the Comment model
    public function comments()
    {
        return $this->hasMany(Comment::class, 'news_update_id', 'update_id');
    }
}
