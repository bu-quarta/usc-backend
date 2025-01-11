<?php

// app/Models/Document.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'document_format',
    ];

    // Relationship with statuses
    public function statuses()
    {
        return $this->hasMany(DocumentStatus::class);
    }

    // Retrieve the latest status
    public function latestStatus()
    {
        return $this->statuses()->latest()->first();
    }

    // Generate the document_format before saving the document
    protected static function booted()
    {
        static::creating(function ($document) {
            // Generate the document_format if it's not set
            if (empty($document->document_format)) {
                // Get the last document id to generate the next format
                $lastId = Document::latest('id')->first()?->id ?? 0;
                $nextId = $lastId + 1;
                
                // Generate the document format: "DOC-XXX-XXXX"
                $prefix = 'DOC';
                $firstSegment = str_pad($nextId, 3, '0', STR_PAD_LEFT);  // 3-digit number
                $secondSegment = str_pad($nextId, 4, '0', STR_PAD_LEFT); // 4-digit number
                
                // Format the document format string
                $document->document_format = "{$prefix}-{$firstSegment}-{$secondSegment}";
            }
        });
    }
}
