<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentStatus extends Model
{
    use HasFactory;

    protected $fillable = ['document_id', 'status', 'remarks'];

    // Relationship with documents
    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
