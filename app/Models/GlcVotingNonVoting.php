<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GlcVotingNonVoting extends Model
{
    protected $guarded = ['id'];

    public function getNameAttribute($value)
    {
        return ucwords(strtolower($value));
    }
}
