<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class LandingPage extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    protected $casts = [
        'status' => 'boolean',
        'extra_fields' => 'array',
    ];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    // Scope for active landing pages
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    // Auto-generate slug
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($landingPage) {
            if (empty($landingPage->slug)) {
                $landingPage->slug = Str::slug($landingPage->title);
            }
        });
    }
}
