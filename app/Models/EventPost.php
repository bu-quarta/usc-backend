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

    protected $with = ['evaluation'];

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

    public function evaluation()
    {
        return $this->hasOne(Evaluation::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id');
    }

    public function likes()
    {
        return $this->hasManyThrough(Like::class, Comment::class, 'id', 'comment_id');
    }

    public function dislikes()
    {
        return $this->hasManyThrough(Dislike::class, Comment::class, 'id', 'comment_id');
    }

    public function getEvaluationFormAttribute()
    {
        return $this->evaluation->evaluation_form ?? null;
    }

    public function getEventPostIdAttribute()
    {
        return $this->evaluation->event_post_id ?? null;
    }

    public function getEvaluationIdAttribute()
    {
        return $this->evaluation->id ?? null;
    }
}
