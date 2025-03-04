<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class EventPost extends Model
{
    use HasFactory, HasSlug;

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

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('header')
            ->saveSlugsTo('slug');
    }

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class, 'event_id', 'id');
    }
}
