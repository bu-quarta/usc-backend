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
        'posted_by_name',   // Added field for "Posted by" name
        'posted_by_position', // Added field for "Posted by" position
        'layout_by_name',   // Added field for "Layout by" name
        'layout_by_position', // Added field for "Layout by" position
        'status'
    ];

    // Define the relationship with the Comment model
    public function comments()
    {
        return $this->hasMany(Comment::class, 'news_update_id', 'id');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
