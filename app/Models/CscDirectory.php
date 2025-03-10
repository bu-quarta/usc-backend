<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class CscDirectory extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'name',
        'abbr',
        'email',
        'location',
        'slug',
        'year_range',
        'image_url',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('abbr')
            ->saveSlugsTo('slug');
    }
}
