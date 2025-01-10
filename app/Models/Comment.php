<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments'; // Name of the database table

    protected $fillable = [
        'content',
        'likes',
        'dislikes',
        'is_anonymous',
        'user_id',
    ];
}