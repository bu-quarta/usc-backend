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
        'by',   // Added field for "Posted by" name
        'layout_by',   // Added field for "Layout by" name
        'photo_by',    // Added field for "Photo by" name
        'status'
    ];

    // Define the relationship with the Comment model
    public function comments()
    {
        return $this->hasMany(Comment::class, 'news_update_id', 'id');
        return $this->hasMany(Comment::class, 'news_update_id', 'id');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
