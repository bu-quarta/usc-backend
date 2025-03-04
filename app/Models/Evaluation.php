<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = ['event_id', 'evaluation_form'];

    public function event()
    {
        return $this->belongsTo(EventPost::class, 'event_id');
    }
}