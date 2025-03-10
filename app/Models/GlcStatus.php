<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GlcStatus extends Model
{
    protected $guarded = ['id'];

    public function report()
    {
        return $this->belongsTo(Report::class);
    }
}
