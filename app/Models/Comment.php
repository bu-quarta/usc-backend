<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'event_post_id',
        'news_update_id',
        'content',
        'user_id'
    ];

    public function eventPost()
    {
        return $this->belongsTo(EventPost::class);
    }

    // Define the inverse relationship with NewsUpdate
    public function newsUpdate()
    {
        return $this->belongsTo(NewsUpdate::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function dislikes()
    {
        return $this->hasMany(Dislike::class);
    }
}
