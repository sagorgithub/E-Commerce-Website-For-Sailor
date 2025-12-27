<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'video'];

    protected $fillable = [
        'title',
        'video',
        'pages',
        'status'
    ];

    protected $casts = [
        'pages' => 'array',
        'status' => 'boolean'
    ];
}
