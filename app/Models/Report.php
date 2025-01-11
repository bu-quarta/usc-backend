<?php

// app/Models/Report.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; // Specify the custom primary key
    protected $fillable = ['name', 'type', 'file_path'];
}
