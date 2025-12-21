<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    protected $casts = [
        'is_active' => 'boolean',
        'config' => 'array',
    ];

    public function landingPages()
    {
        return $this->hasMany(LandingPage::class);
    }

    // Scope for active templates
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
