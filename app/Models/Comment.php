<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'comment_id'; // Specify the custom primary key
    protected $fillable = ['event_post_id', 'comment', 'user_id'];

    public function eventPost()
    {
        return $this->belongsTo(EventPost::class);
    }
}
