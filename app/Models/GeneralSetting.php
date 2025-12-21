<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'facebook_server_side_tracking' => 'boolean',
        'facebook_enhanced_ecommerce' => 'boolean',
    ];
}
