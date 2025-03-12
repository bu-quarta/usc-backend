<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class NewsUpdate extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'title',
        'description',
        'image_path',
        'status',
    ];

    // Define the relationship with the Comment model
    public function comments()
    {
        return $this->hasMany(Comment::class, 'id', 'id');
    }

    public function likes()
    {
        return $this->hasManyThrough(Like::class, Comment::class, 'id', 'comment_id');
    }

    public function dislikes()
    {
        return $this->hasManyThrough(Dislike::class, Comment::class, 'id', 'comment_id');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
