<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'comment_id'; // Specify the custom primary key
    protected $fillable = ['event_post_id', 'news_update_id', 'content', 'likes', 'dislikes', 'user_id'];

    public function eventPost()
    {
        return $this->belongsTo(EventPost::class);
    }

    // Define the inverse relationship with NewsUpdate
    public function newsUpdate()
    {
        return $this->belongsTo(NewsUpdate::class);
    }
}
