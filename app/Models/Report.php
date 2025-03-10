<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'file_path'
    ];

    protected $with = ['glcStatus'];

    public function glcStatus()
    {
        return $this->hasOne(GlcStatus::class);
    }

    public function getStatusAttribute()
    {
        return $this->glcStatus->status;
    }

    public function scopeWhereStatusNotPending($query)
    {
        return $query->whereHas('glcStatus', function ($q) {
            $q->whereNot('status', 'pending');
        });
    }
}
